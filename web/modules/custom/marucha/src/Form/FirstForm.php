<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an marucha's first form.
 */
class FirstForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'marucha_firstform';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = 0;
    if ( !(is_null($node)) ) {
      $nid = (int)$node->id();
    }

    $form['rate'] = [
      '#type' => 'radios',
      '#title' => $this->t('Please your rate.'),
      '#options' => [
        0 => $this->t('Bad'),
        1 => $this->t('Soso'),
        2 => $this->t('Great'),
      ]
    ];
    $form['nid'] = [
      '#type' => 'hidden',
      '#value' => $nid,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('submit'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $rate = $form_state->getValue('rate');
    $nid = $form_state->getValue('nid');
    \Drupal::messenger()->addMessage(t('Thank you for your rating! rate = %rate, nid = %nid', ['%rate' => $rate, '%nid' => $nid])); 
  }
}