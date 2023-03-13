<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/*
 * Controller for the Salutation Method
 */

class HelloWorldController extends ControllerBase {
  /*
   * Hello World
   * @return array
   * our greeting
   */
  function helloWorld() {
    return [
      '#markup' => $this-> t('Hello World. What\'s Up!')
    ];
  }

}
