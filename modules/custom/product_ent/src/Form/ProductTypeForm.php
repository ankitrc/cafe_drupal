<?php

namespace Drupal\product_ent\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ProductTypeForm.
 */
class ProductTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $product_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $product_type->label(),
      '#description' => $this->t("Label for the Product type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $product_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\product_ent\Entity\ProductType::load',
      ],
      '#disabled' => !$product_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $product_type = $this->entity;
    $status = $product_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Product type.', [
          '%label' => $product_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Product type.', [
          '%label' => $product_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($product_type->toUrl('collection'));
  }

}
