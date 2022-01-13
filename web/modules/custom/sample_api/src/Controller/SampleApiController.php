<?php

namespace Drupal\sample_api\Controller;
use Drupal\Core\Controller\ControllerBase;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class SampleApiController extends ControllerBase {
  public function put_example( Requst $req) {
    return array(
      '#markup' => $req
    );
  }
  public function get_example() {
    return array(
      '#markup' => 'get requst.'
    );
  }
  public function post_example() {
    return array(
      '#markup' => 'post requst'
    );
  }
  public function delete_example() {
    return array(
      '#markup' => 'delete requst'
    );
  }
  
}