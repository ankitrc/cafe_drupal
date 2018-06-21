<?php
  use Drupal\Core\Url;
  //use Symfony\Component\HttpFoundation\RedirectResponse;
  namespace Drupal\selection\selecting;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  use Drupal\selection\selecting\change_status;
  use Drupal\selection\check\conn;
  class select_table extends FormBase {
    public $cid;
    private function update_record($table_nums){
      $c = conn::other_db_connect('testing');
      $num_updated = $c->update('table_no')
      ->fields([
      'status' => 0,
      // 'status' => 0,
      ])
      ->condition('table_num', $table_nums, '=')
      ->execute();
    }
    private static function sel_tb_no(){
      $c = conn::other_db_connect('testing');
      // drupal_set_message(gettype($c));
      $query = $c->query("SELECT table_num FROM {table_no} where status = 0");
      // $result = $query->fetchAll();
      $a = array();
      while($row=$query->fetchAssoc()){
      $t = $row['table_num'];
      $a[$t] = $t;
      }
      return $a;
    }
    public function getFormId() {
      return 'resume_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
      $a = select_table::sel_tb_no();
      $form['tbn'] = array (
      '#type' => 'select',
      '#title' => ('table no'),
      '#options' => $a,
      );

      $form['actions']['#type'] = 'actions';
      $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
      );
      return $form;
    }

    // public function validateForm(array &$form, FormStateInterface $form_state) {
    //     if (strlen($form_state->getValue('candidate_number')) < 10) {
    //     // $form_state->setErrorByName('candidate_number', $this->t('Mobile number is too short.'));
    //     }
    // }
    public function submitForm(array &$form, FormStateInterface $form_state) {
      $table_nums = $form_state->getValue('tbn');
      select_table::update_record($table_nums);
      drupal_set_message($cid);
      // $current_user = \Drupal::currentUser();
      // $roles = $current_user->getRoles();
      // drupal_set_message($roles[0]);
      // $current_user = $container->get('current_user');
      // drupal_set_message($current_user);
      // $res = new \Symfony\Component\HttpFoundation\RedirectResponse(\Drupal::url('<front>',[], ['absolute' => TRUE]));
      // $res->send();
      // return new RedirectResponse(\Drupal::url('/',[], ['absolute' => TRUE]));
    }
  }
