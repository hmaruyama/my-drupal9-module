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
    $form['email'] = [
      '#type' => 'email',
      '#title' => 'メールアドレス',
      '#pattern' => '*@example.com',
    ];
    $form['phone'] = [
      '#type' => 'tel',
      '#title' => '電話番号',
      '#pattern' => '[^\\d]*',
    ];
    $form['radios'] = [
      '#type' => 'radios',
      '#title' => 'ラジオボタン',
      '#options' => [
        0 => '選択A',
        1 => '選択B',
      ],
    ];
    $form['checkbox'] = [
      '#type' => 'checkbox',
      '#title' => 'チェックボックス',
    ];
    $form['select'] = [
      '#type' => 'select',
      '#title' => '選択',
      '#options' => [
        0 => '選択A',
        1 => '選択B',
        2 => '選択C',
      ],
      '#default_value' => 1,
    ];
    $form['color'] = [
      '#type' => 'color',
      '#title' => 'カラー',
      '#default_value' => '#ff0000',
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
