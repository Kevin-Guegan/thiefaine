<?php

namespace Thiefaine\ReferentielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function connexionAction()
    {
        return $this->render('ThiefaineReferentielBundle:Default:connexion.html.twig');
    }

    public function indexAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:accueil.html.twig');
    }

    public function accueilAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:accueil.co.html.twig');
    }

    public function myaccountAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:myaccount.html.twig');
    }

    public function alertAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:alert.html.twig');
    }

    public function groupeAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:groupe.html.twig');
    }

    public function messAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:mess.html.twig');
    }

    public function zoneAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:zone.html.twig');
    }

    public function userAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:user.html.twig');
    }

    //CREAT
    public function alertCreateAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:alertCreate.html.twig');
    }

    public function groupeCreateAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:groupeCreate.html.twig');
    }

    public function messCreateAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:messCreate.html.twig');
    }

    public function zoneCreateAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:zoneCreate.html.twig');
    }

    public function userCreateAction()
    {
        return $this->render('ThiefaineReferentielBundle:Pages:userCreate.html.twig');
    }


}
