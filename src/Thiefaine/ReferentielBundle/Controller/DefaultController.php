<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ThiefaineReferentielBundle:Default:index.html.twig', array('name' => $name));
    }
}
