<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * This is module setting form using ConfigFormBase.
 */
class MaruchaConfigForm extends ConfigFormBase {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'marucha_config_form';
  }

  /**
   * {@inheritDoc}
   */
  protected function getEditableConfigNames() {
    return ['marucha.settings'];
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('marucha.settings');
    $form['bool'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Bool value'),
      '#default_value' => $config->get('bool'),
    ];
    $form['message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your message'),
      '#default_value' => $config->get('message'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('marucha.settings')
      ->set('bool', $form_state->getValue('bool'))
      ->set('message', $form_state->getValue('message'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
