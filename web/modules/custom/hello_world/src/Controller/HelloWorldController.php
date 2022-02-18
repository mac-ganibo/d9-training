<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Hello world controller class.
 */
class HelloWorldController extends ControllerBase {
  /**
   * Route index function.
   * 
   * @return array
   */
  public function index() {
    return [
      '#type' => 'markup',
      '#markup' => 'Hello world!',
    ];
  }
}