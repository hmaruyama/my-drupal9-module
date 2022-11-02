<?php

namespace Drupal\marucha;

use Drupal\Component\Plugin\PluginBase;

/**
 * Defines a base tapioca implementation.
 */
abstract class TapiocaBase extends PluginBase implements TapiocaPluginInterface {

  /**
   * {@inheritDoc}
   */
  public function getOrder() {
    $label = $this->pluginDefinition['label'];
    return 'You ordered an ' . $label . '. Enjoy!';
  }

}
