<?php

namespace Drupal\product_ent\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\product_ent\Entity\ProductInterface;

/**
 * Class ProductController.
 *
 *  Returns responses for Product routes.
 */
class ProductController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Product  revision.
   *
   * @param int $product_revision
   *   The Product  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($product_revision) {
    $product = $this->entityManager()->getStorage('product')->loadRevision($product_revision);
    $view_builder = $this->entityManager()->getViewBuilder('product');

    return $view_builder->view($product);
  }

  /**
   * Page title callback for a Product  revision.
   *
   * @param int $product_revision
   *   The Product  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($product_revision) {
    $product = $this->entityManager()->getStorage('product')->loadRevision($product_revision);
    return $this->t('Revision of %title from %date', ['%title' => $product->label(), '%date' => format_date($product->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Product .
   *
   * @param \Drupal\product_ent\Entity\ProductInterface $product
   *   A Product  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(ProductInterface $product) {
    $account = $this->currentUser();
    $langcode = $product->language()->getId();
    $langname = $product->language()->getName();
    $languages = $product->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $product_storage = $this->entityManager()->getStorage('product');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $product->label()]) : $this->t('Revisions for %title', ['%title' => $product->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all product revisions") || $account->hasPermission('administer product entities')));
    $delete_permission = (($account->hasPermission("delete all product revisions") || $account->hasPermission('administer product entities')));

    $rows = [];

    $vids = $product_storage->revisionIds($product);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\product_ent\ProductInterface $revision */
      $revision = $product_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $product->getRevisionId()) {
          $link = $this->l($date, new Url('entity.product.revision', ['product' => $product->id(), 'product_revision' => $vid]));
        }
        else {
          $link = $product->link($date);
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
              Url::fromRoute('entity.product.translation_revert', ['product' => $product->id(), 'product_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.product.revision_revert', ['product' => $product->id(), 'product_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.product.revision_delete', ['product' => $product->id(), 'product_revision' => $vid]),
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

    $build['product_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
