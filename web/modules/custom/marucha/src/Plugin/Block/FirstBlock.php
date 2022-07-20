<?php

namespace Drupal\marucha\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a First Block using Block Plugin.
 * 
 * @Block(
 *   id = "marucha_firstblock",
 *   admin_label = @Translation("Marucha First Block"),
 *   category = @Translation("Marucha"),
 * )
 */
class FirstBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('this is Marucha Block!'),
    ];
  }
}