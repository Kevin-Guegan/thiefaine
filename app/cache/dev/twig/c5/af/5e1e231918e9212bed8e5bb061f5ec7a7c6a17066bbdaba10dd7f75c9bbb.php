<?php

/* ThiefaineReferentielBundle:Nav:leftnav.html.twig */
class __TwigTemplate_c5af5e1e231918e9212bed8e5bb061f5ec7a7c6a17066bbdaba10dd7f75c9bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_leftbar($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"col-md-3\">
\t\t<div id=\"left_bar\">
\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t  <li class=\"\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_accueil");
        echo "\">Accueil</a></li>
\t\t\t  ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_GROUP")) {
            // line 9
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des groupes</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 23
        echo "\t\t\t  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_USER")) {
            // line 24
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des utilisateurs</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_utilisateurweb_list");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 38
        echo "\t\t\t  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_ZONE")) {
            // line 39
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des zones</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("zone_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("zone");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 53
        echo "\t\t\t  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_INFORMATION")) {
            // line 54
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des informations</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("information_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("information");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 68
        echo "\t\t\t  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_CONSEIL")) {
            // line 69
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des conseils</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("conseil_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("conseil");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 83
        echo "\t\t\t</ul>
\t\t</div>
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
        return array (  164 => 83,  154 => 76,  150 => 75,  142 => 69,  139 => 68,  129 => 61,  125 => 60,  117 => 54,  114 => 53,  104 => 46,  100 => 45,  92 => 39,  75 => 30,  67 => 24,  64 => 23,  54 => 16,  42 => 9,  36 => 7,  98 => 28,  89 => 38,  84 => 24,  79 => 31,  74 => 22,  71 => 21,  66 => 18,  58 => 16,  50 => 15,  44 => 8,  40 => 8,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  31 => 4,  28 => 3,);
    }
}
