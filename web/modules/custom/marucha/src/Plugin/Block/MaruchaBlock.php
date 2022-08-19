<?php

namespace Drupal\marucha\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provide a custom block.
 *
 * @Block(
 * id = "marucha_block",
 * admin_label = @Translation("Marucha Block"),
 * )
 */
class MaruchaBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('This is a Hello world Block!'),
    ];
  }

}
