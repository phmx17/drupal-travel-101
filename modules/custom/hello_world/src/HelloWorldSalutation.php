<?php

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/*
 * This is a service.
 * It prepares a custom salutation to the world based on local time.
 */

class HelloWorldSalutation {
  use StringTranslationTrait;

  /*
   * return the salutation
   */

  public function getSalutation() {
    $time = new \DateTime();

    if($time->format('G') >= 00 && $time->format('G') < 12 ) {
      return $this->t('Good Morning World');
    }

    if($time->format('G') >= 12 && $time->format('G') < 18 ) {
      return $this->t('Good Afternoon World');
    }

    if($time->format('G') >= 18) {
      return $this->t('Good Evening World');
    }
  }
}
