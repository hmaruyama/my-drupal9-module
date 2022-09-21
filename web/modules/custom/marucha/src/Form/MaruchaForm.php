<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements form.
 */
class MaruchaForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'marucha_simple_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => '名前',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => '送信！',
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus('ご記入ありがとうございます！');
  }

}
