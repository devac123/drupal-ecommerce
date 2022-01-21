<?php

namespace Drupal\form_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
     * Provides a 'MymoduleExampleBlock' block.
     *
     * @Block(
     *   id = "form_block1",
     *   admin_label = @Translation("Form Block"),
     *   category = @Translation("custom")
     * )
    */

class FormBlock extends BlockBase
{
    public function build(){
        return array("#markup"=>"shubham");
    }
}