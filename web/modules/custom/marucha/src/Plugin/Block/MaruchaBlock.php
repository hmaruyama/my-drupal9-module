<?php

namespace Drupal\marucha\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Imprementing a block.
 *
 * @Block(
 * id = "marucha_block",
 * admin_label = "Marucha Block",
 * )
 */
class MaruchaBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\marucha\Form\MaruchaForm');
  }

}
