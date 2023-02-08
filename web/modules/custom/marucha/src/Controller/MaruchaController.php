<?php

namespace Drupal\marucha\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Marucha's simple controller.
 */
class MaruchaController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function index() {
    return [
      '#markup' => 'Hello, world',
    ];
  }

}
