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

namespace Drupal\yebo_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use \Drupal\node\Entity\Node;


class NewsLetter extends FormBase {

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
          '#type' => 'email',
          '#attributes' => array('class' => array('signup-input'),'id' => 'newsletter', 'placeholder'=> 'Enter Your email')
        ];
        $form['submit'] = [
          '#type' => 'submit',
          '#value' => $this->t('GO'),
          '#attributes' => array('class' => array('submit-btn')),
        ];

        return $form;
      }
       


      public function validateForm(array &$form, FormStateInterface $form_state) {

      }

      public function submitForm(array &$form, FormStateInterface $form_state) {
           
      }

        
    
}