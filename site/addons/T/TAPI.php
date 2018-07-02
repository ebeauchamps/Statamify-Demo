<?php

namespace Statamic\Addons\T;

use Statamic\Addons\T\T;
use Statamic\Extend\API;

class TAPI extends API
{

  public function string($value)
  {

    $T = new T($this, $value);
    return $T->get();

  }

}