<?php

namespace Statamic\Addons\T;

use Statamic\Addons\T\T;
use Statamic\Extend\Tags;

class TTags extends Tags
{

  public function index()
  {

    $value = $this->get('string');

    if ($value) {
      
      $T = new T($this, $value);
      return $T->get();

    }
    
    return '';

  }

}