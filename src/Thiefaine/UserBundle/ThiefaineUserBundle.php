<?php

namespace Thiefaine\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ThiefaineUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
