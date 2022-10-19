<?php

namespace Drupal\marucha\Event;

use Drupal\Component\EventDispatcher\Event;
use Drupal\user\UserInterface;

/**
 * Wraps a user logged in event for event listeners.
 */
class MaruchaFirstEvent extends Event {

  /**
   * User account.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $account;

  /**
   * Constructs a user account event object.
   *
   * @param \Drupal\user\UserInterface $account
   *   User account.
   */
  public function __construct(UserInterface $account) {
    $this->account = $account;
  }

  /**
   * Gets user account.
   *
   * @return \Drupal\user\UserInterface
   *   The user account that caused the event to fire.
   */
  public function getAccount() {
    return $this->account;
  }

}
