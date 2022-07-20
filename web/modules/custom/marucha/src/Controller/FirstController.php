<?php

namespace Drupal\marucha\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class FirstController extends ControllerBase {

  public function index() {
    $build = [
      '#markup' => $this->t('Hello world!'),
    ];
    return $build;
  }

}