<?php
  
  namespace Drupal\content\forms;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\content\forms\conn;
  class frm extends FormBase {
    public static $x = [];
    private static function choose_catgeory(){
      $connection = conn::db_connect();
      $query = $connection->query("SELECT distinct t.name from node__field_category as category INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid");
      while($row = $query->fetchAssoc()){
        $a[$row['name']] = $row['name'];
      }
      return $a;
    }
    public function getFormId() {
      return 'category_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
      $a = frm::choose_catgeory();
      array_unshift($a,'any');
      $form['categ'] = array (
      '#type' => 'select',
      '#title' => ('catgeory'),
      '#options' => $a,
      );
      // $form['categ']['#method'] = 'post';
      $form['actions']['#type'] = 'actions';
      $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Filter'),
      '#button_type' => 'primary',
      '#name' => 'sub',
      );
      return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {

    }
    public function submitForm(array &$form, FormStateInterface $form_state) {
      // $x = [];
      $connection = conn::db_connect();
      $opts = $form_state->getValue('categ');
      // drupal_set_message($opts);
      if($opts == '0'){
        $query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_data as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid order by t.name; ");
      }
      else{
        $query = $connection->query("SELECT f.uri, nr.title, price.entity_id, price.field_price_value, t.name FROM node__field_price as price INNER JOIN node_field_data as nr ON nr.nid = price.entity_id INNER JOIN  node__field_category as category ON nr.nid = category.entity_id INNER JOIN taxonomy_term_field_data as t ON category.field_category_target_id = t.tid INNER JOIN node__field_images as i ON i.entity_id = price.entity_id  INNER JOIN file_managed as f ON i.field_images_target_id = f.fid  where t.name = '$opts' order by t.name  ; ");
      }
      
      while($row = $query->fetchAssoc()){
          $y = [];
          // array_push($categ,$row['name']);
          
          array_push($y,$row['title']);
          array_push($y,file_create_url($row['uri']));
          array_push($y,$row['field_price_value']);
          array_push($y,$row['name']);
          array_push(frm::$x,$y);
      }
      $_SESSION['xx'] = frm::$x;
    
    }
  }