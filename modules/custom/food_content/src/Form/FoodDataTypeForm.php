<?php

namespace Drupal\food_content\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FoodDataTypeForm.
 */
class FoodDataTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $food_data_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $food_data_type->label(),
      '#description' => $this->t("Label for the Food data type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $food_data_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\food_content\Entity\FoodDataType::load',
      ],
      '#disabled' => !$food_data_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $food_data_type = $this->entity;
    $status = $food_data_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Food data type.', [
          '%label' => $food_data_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Food data type.', [
          '%label' => $food_data_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($food_data_type->toUrl('collection'));
  }

}
