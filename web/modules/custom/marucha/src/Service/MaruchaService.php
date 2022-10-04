<?php

namespace Drupal\marucha\Service;

/**
 * This is simple service example.
 */
class MaruchaService {

  /**
   * Drink names.
   *
   * @var array
   */
  private $drinks = ['抹茶タピオカ', 'ミルクティー', 'いちごオレ'];

  /**
   * Get drink.
   *
   * @return string
   *   An drink name.
   */
  public function getDrink() {
    return $this->drinks[array_rand($this->drinks)];
  }

}
