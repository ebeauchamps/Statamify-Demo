<?php

namespace Statamic\Addons\T;

class T
{

  public function __construct($statamic, $value)
  {

    $this->statamic = $statamic;
    $this->value = $value;

  }

  public function get()
  {

    $locale = site_locale();
    $translations = collect($this->statamic->getConfig('trans'));
    $value = $this->value;

    $index = $translations->search(function($item) use ($value) {
      return $item['string'] == $value;
    });

    if (!is_bool($index)) {

      $strings = collect($translations->get($index)['translation']);

      $string_index = $strings->search(function($string) use ($locale) {
       return $string['code'] == $locale;
     });

      if (!is_bool($string_index)) {

       return $strings->get($string_index)['trans'];

     }

   }

   return $value; 
   
 }

}