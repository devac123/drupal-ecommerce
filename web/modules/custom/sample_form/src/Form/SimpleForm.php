<?php
/*
-> Provide submit message to the user 
 https://www.drupal.org/docs/drupal-apis/form-api/introduction-to-form-api

-> how to create update node programatically in drupal
https://drupalbook.org/drupal/       9112-add-update-delete-entity-programmatically#:~:text=Create%20node%20programmatically,is%20only%20the%20Title%20field.
*/

/**
 * @file
 * Contains \Drupal\resume\Form\ResumeForm.
 */
namespace Drupal\sample_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use \Drupal\node\Entity\Node;


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

        if (strlen($form_state->getValue('prod_name')) < 4) {
          $form_state->setErrorByName('prod_name', $this->t('Name is too short.'));
        }
        if ($form_state->getValue('price') < 1) {
          $form_state->setErrorByName('price', $this->t('Price can not Be less than 1'));
        }
      }

      public function submitForm(array &$form, FormStateInterface $form_state) {

      /* sample insert query on submit 
       * $result = $connection->insert('mytable')->fields([
       * 'title' => 'Example',
       * 'uid' => 1,
       * 'created' => \Drupal::time()->getRequestTime(),
       * ])
       * ->execute();   
      */
        $connection = \Drupal::service('database');
        $result = $connection->insert('tb_products')->fields([
                    'pr_title' => $form_state->getValue('prod_name'),
                    'vid' => 1,
                    'pr_price' => $form_state->getValue('price'),
                    'pr_type' => $form_state->getValue('product_type'),
                  ])
                  ->execute();

        // creating node progrmatically  with (use \Drupal\node\Entity\Node;)
        $node = Node::create([
          'type'  => 'products',
          'title' => 'hello',
        ]);
        $node->save();
                            
      }

        
    
}