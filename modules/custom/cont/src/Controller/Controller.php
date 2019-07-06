<?php
  namespace Drupal\cont\Controller;
  use Drupal\Core\Controller\ControllerBase;

  class Controller extends ControllerBase {
    public function control(){
      Drupal_set_message($this->currentUser()->getUserName().' hello');
      Drupal_set_message(gettype($this->currentUser));
      return [];
    }
  }
