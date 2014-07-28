<?php

/* ThiefaineReferentielBundle:Nav:leftnav.html.twig */
class __TwigTemplate_c5af5e1e231918e9212bed8e5bb061f5ec7a7c6a17066bbdaba10dd7f75c9bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Default:index.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'leftbar' => array($this, 'block_leftbar'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"navbar-left\">
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_myaccount");
        echo "\"><button type=\"submit\" class=\"btn btn-primary\" ><span class=\"glyphicon glyphicon-user\" name=\"connect\"></span> Mon compte</button></a>
\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_homepage");
        echo "\"><button type=\"submit\" class=\"btn btn-primary\" ><span class=\"glyphicon glyphicon-log-out\" name=\"connect\"></span> Déconnexion</button></a>
\t</div>
";
    }

    // line 10
    public function block_leftbar($context, array $blocks = array())
    {
        // line 11
        echo "\t<div id=\"left_bar\">
\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t  <li class=\"\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_accueil");
        echo "\">Accueil</a></li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des groupes</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("groupe_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("groupe");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des utilisateurs</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("utilisateurweb_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("utilisateurweb");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des zones</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("zone_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("zone");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des alertes</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("alerte_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("alerte");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des informations</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("information_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("information");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t  <li class=\"\">
\t\t  \t<div id='cssmenu'>
\t\t\t\t<ul>
\t\t\t\t   <li class='has-sub last'>
\t\t\t\t   \t  <a><span>Gestion des conseils</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t      <ul>
\t\t\t\t         <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("conseil_new");
        echo "\"><span>Créer</span></a></li>
\t\t\t\t         <li class='last'><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("conseil");
        echo "\"><span>Gérer</span></a></li>
\t\t\t\t      </ul>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t  </li>
\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Nav:leftnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 86,  158 => 85,  143 => 73,  139 => 72,  124 => 60,  120 => 59,  105 => 47,  101 => 46,  86 => 34,  82 => 33,  67 => 21,  63 => 20,  53 => 13,  49 => 11,  46 => 10,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  31 => 4,  28 => 3,);
    }
}
