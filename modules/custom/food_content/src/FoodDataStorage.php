<?php

namespace Drupal\food_content;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\food_content\Entity\FoodDataInterface;

/**
 * Defines the storage handler class for Food data entities.
 *
 * This extends the base storage class, adding required special handling for
 * Food data entities.
 *
 * @ingroup food_content
 */
class FoodDataStorage extends SqlContentEntityStorage implements FoodDataStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(FoodDataInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {food_data_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {food_data_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(FoodDataInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {food_data_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('food_data_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
