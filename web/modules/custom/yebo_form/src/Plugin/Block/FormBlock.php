<?php

namespace Drupal\yebo_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
     * Provides a 'MymoduleExampleBlock' block.
     *
     * @Block(
     *   id = "yebo",
     *   admin_label = @Translation("Yebo Form Block"),
     *   category = @Translation("custom")
     * )
    */

class FormBlock extends BlockBase
{
    public function build(){
         $form = \Drupal::formBuilder()->getForm('Drupal\yebo_form\Form\NewsLetter');
          return $form;
    }
}


