<?php

namespace Drupal\food_content\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\food_content\Entity\FoodDataInterface;

/**
 * Class FoodDataController.
 *
 *  Returns responses for Food data routes.
 */
class FoodDataController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Food data  revision.
   *
   * @param int $food_data_revision
   *   The Food data  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($food_data_revision) {
    $food_data = $this->entityManager()->getStorage('food_data')->loadRevision($food_data_revision);
    $view_builder = $this->entityManager()->getViewBuilder('food_data');

    return $view_builder->view($food_data);
  }

  /**
   * Page title callback for a Food data  revision.
   *
   * @param int $food_data_revision
   *   The Food data  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($food_data_revision) {
    $food_data = $this->entityManager()->getStorage('food_data')->loadRevision($food_data_revision);
    return $this->t('Revision of %title from %date', ['%title' => $food_data->label(), '%date' => format_date($food_data->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Food data .
   *
   * @param \Drupal\food_content\Entity\FoodDataInterface $food_data
   *   A Food data  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(FoodDataInterface $food_data) {
    $account = $this->currentUser();
    $langcode = $food_data->language()->getId();
    $langname = $food_data->language()->getName();
    $languages = $food_data->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $food_data_storage = $this->entityManager()->getStorage('food_data');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $food_data->label()]) : $this->t('Revisions for %title', ['%title' => $food_data->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all food data revisions") || $account->hasPermission('administer food data entities')));
    $delete_permission = (($account->hasPermission("delete all food data revisions") || $account->hasPermission('administer food data entities')));

    $rows = [];

    $vids = $food_data_storage->revisionIds($food_data);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\food_content\FoodDataInterface $revision */
      $revision = $food_data_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $food_data->getRevisionId()) {
          $link = $this->l($date, new Url('entity.food_data.revision', ['food_data' => $food_data->id(), 'food_data_revision' => $vid]));
        }
        else {
          $link = $food_data->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.food_data.translation_revert', ['food_data' => $food_data->id(), 'food_data_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.food_data.revision_revert', ['food_data' => $food_data->id(), 'food_data_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.food_data.revision_delete', ['food_data' => $food_data->id(), 'food_data_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['food_data_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
