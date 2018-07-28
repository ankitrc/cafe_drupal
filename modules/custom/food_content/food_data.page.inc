<?php

/**
 * @file
 * Contains food_data.page.inc.
 *
 * Page callback for Food data entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Food data templates.
 *
 * Default template: food_data.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_food_data(array &$variables) {
  // Fetch FoodData Entity Object.
  $food_data = $variables['elements']['#food_data'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
