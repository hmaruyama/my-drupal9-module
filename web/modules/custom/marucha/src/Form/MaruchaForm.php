<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provide a simple form.
 */
class MaruchaForm extends FormBase {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'marucha_form';
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => 'メールアドレス',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => '送信',
    ];
    return $form;
  }

  /**
   * {@inheritDoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $email = $form_state->getValue('email');
    $flag = \Drupal::service('email.validator')->isValid($email);
    if (!$flag) {
      $form_state->setErrorByName('email', 'メールアドレスの形式が正しくありません');
    }
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus('正常に送信されました！');
  }

}
