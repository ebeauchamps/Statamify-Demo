<?php

namespace Statamic\Addons\T;

use Statamic\API\Nav;
use Statamic\Extend\Listener;

class TListener extends Listener
{

    public $events = [
        'cp.nav.created'  => 'nav',
    ];

    public function nav($nav)
    {
        $nav->addTo('tools', Nav::item('Translation')->route('addon.settings', 't')->icon('language'));
    }
}
