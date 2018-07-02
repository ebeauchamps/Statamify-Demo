<?php

namespace Statamic\Addons\T;

use Statamic\Addons\T\T;
use Statamic\Extend\Modifier;

class TModifier extends Modifier
{
  /**
   * Modify a value
   *
   * @param mixed  $value    The value to be modified
   * @param array  $params   Any parameters used in the modifier
   * @param array  $context  Contextual values
   * @return mixed
   */
  public function index($value, $params, $context)
  {

    $T = new T($this, $value);
    return $T->get();

  }

}
