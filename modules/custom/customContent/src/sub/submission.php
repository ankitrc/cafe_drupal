<?php
  
  namespace Drupal\content\sub;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\content\forms\conn;
  class submission extends FormBase {
    public function getFormId() {
      return 'submit_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
      // $form['categ']['#method'] = 'post';
      $form['actions']['#type'] = 'actions';
      $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('add to cart'),
      '#button_type' => 'primary',
      '#name' => 'submission',
      );
      return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
      // drupal_set_message(gettype($form));
      // $arr = $form_state->getValues('action');
      // foreach($form as $e){
      //   drupal_set_message($e);
      // }
      // print_r();
      // drupal_set_message($form['actions']['submit']['#name']);
    }
    public function submitForm(array &$form, FormStateInterface $form_state) {
      // drupal_set_message($form['actions']['submit']['#name'].'fff');
      dpm($form_state); 
    }
  }
