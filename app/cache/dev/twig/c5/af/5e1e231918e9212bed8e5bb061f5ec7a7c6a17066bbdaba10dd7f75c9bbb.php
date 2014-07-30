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
        echo "\t\t\t   ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_CATEGORIE")) {
            // line 54
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des categories</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("categorie_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("categorie");
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
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_INFORMATION")) {
            // line 69
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des informations</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("information_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("information");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 83
        echo "\t\t\t  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGE_CONSEIL")) {
            // line 84
            echo "\t\t\t  <li class=\"\">
\t\t\t  \t<div id='cssmenu'>
\t\t\t\t\t<ul>
\t\t\t\t\t   <li class='has-sub last'>
\t\t\t\t\t   \t  <a><span>Gestion des conseils</span><span style=\"float:right; font-weight: bold;\">&rsaquo;</span></a>
\t\t\t\t\t      <ul>
\t\t\t\t\t         <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("conseil_new");
            echo "\"><span>Créer</span></a></li>
\t\t\t\t\t         <li class='last'><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("conseil");
            echo "\"><span>Gérer</span></a></li>
\t\t\t\t\t      </ul>
\t\t\t\t\t   </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </li>
\t\t\t  ";
        }
        // line 98
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
        return array (  175 => 90,  167 => 84,  150 => 75,  129 => 61,  114 => 53,  104 => 46,  100 => 45,  84 => 24,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 91,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  87 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 69,  138 => 54,  136 => 56,  121 => 46,  117 => 54,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  93 => 28,  88 => 6,  78 => 21,  38 => 6,  21 => 2,  94 => 28,  89 => 38,  85 => 25,  75 => 30,  68 => 14,  56 => 9,  27 => 4,  46 => 7,  26 => 6,  24 => 3,  44 => 8,  31 => 4,  25 => 5,  19 => 2,  79 => 31,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 28,  96 => 31,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 21,  50 => 15,  43 => 6,  41 => 9,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 98,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 83,  162 => 57,  154 => 76,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 39,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 23,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 8,  45 => 17,  42 => 9,  39 => 9,  36 => 7,  33 => 4,  30 => 5,);
    }
}
