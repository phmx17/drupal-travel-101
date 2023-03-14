<?php

namespace Drupal\hello_world\Controller;

use Drupal\hello_world\HelloWorldSalutation;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/*
 * Controller for the Salutation Method
 */

class HelloWorldController extends ControllerBase {
  /*
   * Hello World
   * @return array
   * our greeting
   */
  protected $salutation;
  public function __construct(HelloWorldSalutation $salutation) {
    $this->salutation = $salutation;
  }
  function helloWorld() {
    return [
      '#markup' => $this->salutation->getSalutation()
    ];
  }

  // the constructor gets its container from the following create method
  /*
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container){
    return new static($container->get('hello_world.salutation')); // defined in services.yml
  }

}
