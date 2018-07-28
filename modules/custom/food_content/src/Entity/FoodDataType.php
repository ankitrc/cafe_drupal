<?php

namespace Drupal\food_content\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Food data type entity.
 *
 * @ConfigEntityType(
 *   id = "food_data_type",
 *   label = @Translation("Food data type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\food_content\FoodDataTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\food_content\Form\FoodDataTypeForm",
 *       "edit" = "Drupal\food_content\Form\FoodDataTypeForm",
 *       "delete" = "Drupal\food_content\Form\FoodDataTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\food_content\FoodDataTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "food_data_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "food_data",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/food_data_type/{food_data_type}",
 *     "add-form" = "/admin/structure/food_data_type/add",
 *     "edit-form" = "/admin/structure/food_data_type/{food_data_type}/edit",
 *     "delete-form" = "/admin/structure/food_data_type/{food_data_type}/delete",
 *     "collection" = "/admin/structure/food_data_type"
 *   }
 * )
 */
class FoodDataType extends ConfigEntityBundleBase implements FoodDataTypeInterface {

  /**
   * The Food data type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Food data type label.
   *
   * @var string
   */
  protected $label;

}
