<?php

namespace Drupal\Tests\marucha\Unit\Controller;

use Drupal\marucha\Controller\MaruchaController;
use Drupal\Tests\UnitTestCase;

/**
 * The class to test MaruchaController.
 *
 * @coversDefaultClass \Drupal\marucha\Controller\MaruchaController
 * @group Marucha
 */
class MaruchaControllerTest extends UnitTestCase {

  /**
   * @covers ::index
   */
  public function testIndex() {
    $controller = new MaruchaController();
    $this->assertEquals(['#markup' => 'Hello, world'], $controller->index());
  }

}
