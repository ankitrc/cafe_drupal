<?php

namespace Drupal\food_content;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface FoodDataStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Food data revision IDs for a specific Food data.
   *
   * @param \Drupal\food_content\Entity\FoodDataInterface $entity
   *   The Food data entity.
   *
   * @return int[]
   *   Food data revision IDs (in ascending order).
   */
  public function revisionIds(FoodDataInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Food data author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Food data revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\food_content\Entity\FoodDataInterface $entity
   *   The Food data entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(FoodDataInterface $entity);

  /**
   * Unsets the language for all Food data with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
