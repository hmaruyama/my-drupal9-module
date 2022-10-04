<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Component\Utility\EmailValidator;
use Drupal\marucha\Service\MaruchaService;

/**
 * Provide a simple form.
 */
class MaruchaForm extends FormBase {

  /**
   * An email validator.
   *
   * @var \Drupal\Component\Utility\EmailValidator
   */
  protected $emailValidator;

  /**
   * An marucha service.
   *
   * @var \Drupal\marucha\Service\MaruchaService
   */
  protected $maruchaService;

  /**
   * Constructs.
   *
   * @param \Drupal\Component\Utility\EmailValidator $email_validator
   *   This is an email validator service.
   * @param \Drupal\marucha\Service\MaruchaService $marucha_service
   *   This is an email validator service.
   */
  public function __construct(EmailValidator $email_validator, MaruchaService $marucha_service) {
    $this->emailValidator = $email_validator;
    $this->maruchaService = $marucha_service;
  }

  /**
   * {@inheritDoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('email.validator'),
      $container->get('marucha.drink'),
    );
  }

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
    $flag = $this->emailValidator->isValid($email);
    if (!$flag) {
      $form_state->setErrorByName('email', 'メールアドレスの形式が正しくありません');
    }
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $message = 'ドリンク占い：' . $this->maruchaService->getDrink();
    $this->messenger()->addStatus($message);
  }

}
