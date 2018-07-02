<?php   
    namespace Drupal\conf\forms;
    use Drupal\Core\Form\ConfigFormBase;
    use Drupal\Core\Form\FormStateInterface;

    /**
     * Defines a form that configures forms module settings.
     */
    class check extends ConfigFormBase {

    /**
     * {@inheritdoc}
        */
        public function getFormId() {
            return 'your_module_admin_settings';
        }

        /**
         * {@inheritdoc}
         */
        protected function getEditableConfigNames() {
            return [
            'your_module.settings',
            ];
        }

        /**
         * {@inheritdoc}
         */
        public function buildForm(array $form, FormStateInterface $form_state) {
            $config = $this->config('your_module.settings');
            $form['your_message'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your message'),
            '#default_value' => $config->get('your_message'),
            ];
            return parent::buildForm($form, $form_state);
        }

        /**
         * {@inheritdoc}
         */
        public function submitForm(array &$form, FormStateInterface $form_state) {
            $values = $form_state->getValues();
            $this->config('your_module.settings')
            ->set('your_message', $values['your_message'])
            ->save();
            parent::submitForm($form, $form_state);
        }

    }