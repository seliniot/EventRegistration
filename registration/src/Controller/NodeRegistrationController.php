<?php

namespace Drupal\registration\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines NodeRegistrationController class.
 */
class NodeRegistrationController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('From the admin menu bar follow the path Content-->Add Content-->Registration '),
    ];
  }

}
