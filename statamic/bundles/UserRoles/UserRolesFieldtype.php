<?php

namespace Statamic\Addons\UserRoles;

use Statamic\Extend\Fieldtype;

class UserRolesFieldtype extends Fieldtype
{
    public $category = ['special'];

    public function blank()
    {
        return [];
    }
}
