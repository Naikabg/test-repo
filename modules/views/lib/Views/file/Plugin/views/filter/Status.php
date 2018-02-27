<?php

/**
 * @file
 * Definition of Views\file\Plugin\views\filter\Status.
 */

namespace Views\file\Plugin\views\filter;

use Drupal\Core\Annotation\Plugin;
use Drupal\views\Plugin\views\filter\InOperator;

/**
 * Filter by file status.
 *
 * @ingroup views_filter_handlers
 *
 * @Plugin(
 *   id = "file_status",
 *   module = "file"
 * )
 */
class Status extends InOperator {

  function get_value_options() {
    if (!isset($this->value_options)) {
      $this->value_options = _views_file_status();
    }
  }

}
