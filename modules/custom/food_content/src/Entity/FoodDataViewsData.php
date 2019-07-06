<?php

namespace Drupal\food_content\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Food data entities.
 */
class FoodDataViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
