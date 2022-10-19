<?php

namespace Drupal\marucha\EventSubscriber;

use Drupal\marucha\Event\MaruchaEvents;
use Drupal\marucha\Event\MaruchaFirstEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Subscribe to a marucha event.
 */
class MaruchaSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritDoc}
   */
  public static function getSubscribedEvents() {
    return [
      MaruchaEvents::FIRST_EVENT => 'onMaruchaFirstEvent',
    ];
  }

  /**
   * React to a user account being login.
   *
   * @param Drupal\marucha\Event\MaruchaFirstEvent $event
   *   Marucha evnet.
   */
  public function onMaruchaFirstEvent(MaruchaFirstEvent $event) {
    $account = $event->getAccount();
    \Drupal::messenger()->addStatus('ログインしました：' . $account->getAccountName());
  }

}
