<?php

/* ThiefaineReferentielBundle:Pages:accueil.html.twig */
class __TwigTemplate_41653bff3f4111790fc660ef5a0aa6d9a02d42e5acfa9f1c80cd61306bdd0137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Default:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineReferentielBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<!-- BODY -->
\t<div class=\"panel panel-default\" style=\"margin-top: 20px;\">
\t  <div class=\"panel-heading\" style=\"font-weight: bold;\">
\t  \tBienvenue dans l'application Thiefaine
\t  </div>
\t  <div class=\"panel-body\" style=\"text-align: justify;\">
\t  \t<div class=\"container-fluid\">

\t  \t\t<div class=\"row\">
\t  \t\t\t<div class=\"col-md-6\">
\t\t\t\t  \t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t  \t<span class=\"glyphicon glyphicon-briefcase\"> </span> Contexte
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body\" style=\"text-align: justify;\">
\t\t\t\t\t  \t<p>
\t\t\t\t\t  \t\tPour faire face à la montée constante des cambriolages en Ille-et-Vilaine, la gendarmerie de Rennes a décidée de mettre en place une application mobile pour informer la population sur les risques des cambriolages et les précautions à prendre.
\t\t\t\t\t  \t</p><p>
\t\t\t\t\t\t\tCette plateforme web, réservée exclusivement à la gendarmerie, permettera d'éffectuer l'ensemble de l'administration liée à cette application.
\t\t\t\t\t\t</p>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t  \t<div class=\"panel panel-default\">
\t\t\t\t\t  <div class=\"panel-heading\">
\t\t\t\t\t  \t<span class=\"glyphicon glyphicon-info-sign\"> </span> Fonctionnalités
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"panel-body\" style=\"text-align: justify;\">
\t\t\t\t\t\tL'application actuelle vous permettera de :
\t\t\t\t\t  \t<ul>
\t\t\t\t\t  \t\t<li>
\t\t\t\t\t  \t\t\tvous connecter avec un login et mot de passe
\t\t\t\t\t  \t\t</li>
\t\t\t\t\t  \t\t<li>
\t\t\t\t\t  \t\t\taccéder à la gestion :
\t\t\t\t\t  \t\t\t<ul>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes groupes
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes utilisateurs
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes zones géographiques
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t</ul>
\t\t\t\t\t  \t\t</li>
\t\t\t\t\t  \t\t<li>
\t\t\t\t\t  \t\t\tajouter, modifier ou supprimer :
\t\t\t\t\t  \t\t\t<ul>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes alertes
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes informations
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t\t<li>
\t\t\t\t\t  \t\t\t\t\tdes conseils
\t\t\t\t\t  \t\t\t\t</li>
\t\t\t\t\t  \t\t\t</ul>
\t\t\t\t\t  \t\t</li>
\t\t\t\t\t  \t</ul>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/img_connection.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" style=\"width:100%;\">
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 75,  31 => 4,  28 => 3,);
    }
}
