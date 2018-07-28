<?php

namespace Drupal\food_content;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Food data entity.
 *
 * @see \Drupal\food_content\Entity\FoodData.
 */
class FoodDataAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\food_content\Entity\FoodDataInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished food data entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published food data entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit food data entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete food data entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add food data entities');
  }

}
