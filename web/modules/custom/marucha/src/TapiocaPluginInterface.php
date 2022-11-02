<?php

namespace Drupal\marucha;

/**
 * Defines an Tapioca interface.
 */
interface TapiocaPluginInterface {

  /**
   * Provide an order.
   *
   * @return string
   *   Say order.
   */
  public function getOrder();

}
