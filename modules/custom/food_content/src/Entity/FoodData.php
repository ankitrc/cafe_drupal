<?php

namespace Drupal\food_content\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\RevisionableContentEntityBase;
use Drupal\Core\Entity\RevisionableInterface;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\UserInterface;

/**
 * Defines the Food data entity.
 *
 * @ingroup food_content
 *
 * @ContentEntityType(
 *   id = "food_data",
 *   label = @Translation("Food data"),
 *   bundle_label = @Translation("Food data type"),
 *   handlers = {
 *     "storage" = "Drupal\food_content\FoodDataStorage",
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\food_content\FoodDataListBuilder",
 *     "views_data" = "Drupal\food_content\Entity\FoodDataViewsData",
 *     "translation" = "Drupal\food_content\FoodDataTranslationHandler",
 *
 *     "form" = {
 *       "default" = "Drupal\food_content\Form\FoodDataForm",
 *       "add" = "Drupal\food_content\Form\FoodDataForm",
 *       "edit" = "Drupal\food_content\Form\FoodDataForm",
 *       "delete" = "Drupal\food_content\Form\FoodDataDeleteForm",
 *     },
 *     "access" = "Drupal\food_content\FoodDataAccessControlHandler",
 *     "route_provider" = {
 *       "html" = "Drupal\food_content\FoodDataHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "food_data",
 *   data_table = "food_data_field_data",
 *   revision_table = "food_data_revision",
 *   revision_data_table = "food_data_field_revision",
 *   translatable = TRUE,
 *   admin_permission = "administer food data entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "vid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "uid" = "user_id",
 *     "langcode" = "langcode",
 *     "status" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/food_data/{food_data}",
 *     "add-page" = "/admin/structure/food_data/add",
 *     "add-form" = "/admin/structure/food_data/add/{food_data_type}",
 *     "edit-form" = "/admin/structure/food_data/{food_data}/edit",
 *     "delete-form" = "/admin/structure/food_data/{food_data}/delete",
 *     "version-history" = "/admin/structure/food_data/{food_data}/revisions",
 *     "revision" = "/admin/structure/food_data/{food_data}/revisions/{food_data_revision}/view",
 *     "revision_revert" = "/admin/structure/food_data/{food_data}/revisions/{food_data_revision}/revert",
 *     "revision_delete" = "/admin/structure/food_data/{food_data}/revisions/{food_data_revision}/delete",
 *     "translation_revert" = "/admin/structure/food_data/{food_data}/revisions/{food_data_revision}/revert/{langcode}",
 *     "collection" = "/admin/structure/food_data",
 *   },
 *   bundle_entity_type = "food_data_type",
 *   field_ui_base_route = "entity.food_data_type.edit_form"
 * )
 */
class FoodData extends RevisionableContentEntityBase implements FoodDataInterface {

  use EntityChangedTrait;

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += [
      'user_id' => \Drupal::currentUser()->id(),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function urlRouteParameters($rel) {
    $uri_route_parameters = parent::urlRouteParameters($rel);

    if ($rel === 'revision_revert' && $this instanceof RevisionableInterface) {
      $uri_route_parameters[$this->getEntityTypeId() . '_revision'] = $this->getRevisionId();
    }
    elseif ($rel === 'revision_delete' && $this instanceof RevisionableInterface) {
      $uri_route_parameters[$this->getEntityTypeId() . '_revision'] = $this->getRevisionId();
    }

    return $uri_route_parameters;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    parent::preSave($storage);

    foreach (array_keys($this->getTranslationLanguages()) as $langcode) {
      $translation = $this->getTranslation($langcode);

      // If no owner has been set explicitly, make the anonymous user the owner.
      if (!$translation->getOwner()) {
        $translation->setOwnerId(0);
      }
    }

    // If no revision author has been set explicitly, make the food_data owner the
    // revision author.
    if (!$this->getRevisionUser()) {
      $this->setRevisionUserId($this->getOwnerId());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function isPublished() {
    return (bool) $this->getEntityKey('status');
  }

  /**
   * {@inheritdoc}
   */
  public function setPublished($published) {
    $this->set('status', $published ? TRUE : FALSE);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['user_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Authored by'))
      ->setDescription(t('The user ID of author of the Food data entity.'))
      ->setRevisionable(TRUE)
      ->setSetting('target_type', 'user')
      ->setSetting('handler', 'default')
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'author',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'weight' => 5,
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => '60',
          'autocomplete_type' => 'tags',
          'placeholder' => '',
        ],
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['product_name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Food data entity.'))
      ->setRevisionable(TRUE)
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Publishing status'))
      ->setDescription(t('A boolean indicating whether the Food data is published.'))
      ->setRevisionable(TRUE)
      ->setDefaultValue(TRUE)
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => -3,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    $fields['revision_translation_affected'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Revision translation affected'))
      ->setDescription(t('Indicates if the last edit of a translation belongs to current revision.'))
      ->setReadOnly(TRUE)
      ->setRevisionable(TRUE)
      ->setTranslatable(TRUE);

      // $fields['product_category'] = BaseFieldDefinition::create('entity_reference')
      // ->setLabel(t('product category'))
      // ->setSetting('target_type', 'taxonomy_term')
      // ->setSetting('handler', 'default:taxonomy_term')
      // ->setSetting('handler_settings',
      //     array(
      //   'target_bundles' => array(
      //    'categ' => 'categ',
      //   )))
      // ->setDisplayOptions('view', array(
      //   'label' => 'hidden',
      //   'type' => 'author',
      //   'weight' => 0,
      // ))
      // ->setDisplayOptions('form', array(
      //   'type' => 'entity_reference_autocomplete',
      //   'weight' => 3,
      //   'settings' => array(
      //     'match_operator' => 'CONTAINS',
      //     'size' => '10',
      //     'autocomplete_type' => 'tags',
      //     'placeholder' => '',
      //   ),
      // ))
      // ->setDisplayConfigurable('form', TRUE)
      // ->setDisplayConfigurable('view', TRUE);

      // $fields['main_img'] = BaseFieldDefinition::create('image')
      // ->setLabel(t('Main image of the hardware'))
      // ->setSettings([
      //   'file_directory' => '/',
      //   'file_extensions' => 'png jpg jpeg',
      // ])
      // ->setDisplayOptions('view', array(
      //   'label' => 'above',
      //   'type' => 'image',
      //   'weight' => -30,
      // ))
      // ->setDisplayOptions('form', array(
      //   'label' => 'above',
      //   'type' => 'image_image',
      //   'weight' => -30,
      // ))
      // ->setDisplayConfigurable('form', TRUE)
      // ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }

}
