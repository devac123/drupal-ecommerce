<?php
/**
 * @file
 * Contains \Drupal\resume\Form\ResumeForm.
 */
namespace Drupal\sample_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use core\lib\Drupal\Core\Messenger\Messenger;


class SimpleForm extends FormBase {

        /**
         * {@inheritdoc}
         */

      public function getFormId() {
        return 'resume_form';
      }

        /**
        * {@inheritdoc}
        */

      public function buildForm(array $form, FormStateInterface $form_state) {
        $form['prod_name'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Product_Name'), 
          '#attributes' => array('id' => 'name-field', 'placeholder'=> 'Enter The Product_name'),
        ];
        $form['price'] =[
          '#type' => 'number',
          '#title' => $this->t('Price'), 
          '#attributes' => array('id' => 'number-field', 'placeholder'=> 'Enter The Product_Price'),

        ];
        $form['product_image'] =[
          '#type' => 'file',
          '#title' => $this->t('Product Image'), 
        ];
        $form['product_type'] =[
          '#type' => 'select',
          '#title' => $this->t('Product Type'),
          '#options' => array(t('--- SELECT ---'), t('10"'), t('12"'), t('16"')), 
        ];
      
        $form['submit'] = [
          '#type' => 'submit',
          '#value' => $this->t('Submit')
        ];

        return $form;
      }
       


      public function validateForm(array &$form, FormStateInterface $form_state) {

        if (strlen($form_state->getValue('prod_name')) < 10) {
          $form_state->setErrorByName('prod_name', $this->t('Name is too short.'));
        }
      }

      public function submitForm(array &$form, FormStateInterface $form_state) {
            $this->addStatus('Print a status to the user.');
        // foreach ($form_state->getValues() as $key => $value) {
        //   drupal_set_message($key . ': ' . $value);
        // }
      }

        
    
}