<?php

namespace Thiefaine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ThiefaineUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
