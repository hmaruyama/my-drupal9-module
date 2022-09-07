<?php

/**
 * @file
 * Documentation hooks provided marucha module.
 */

/**
 * Hello world hook.
 *
 * This hook allow you to do something
 * when node loaded using hook_ENTITY_TYPE_view().
 */
function hook_marucha_hello_world() {
  \Drupal::messenger()->addStatus('hello world!');
}
