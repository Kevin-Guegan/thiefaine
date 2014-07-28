<?php

/* ThiefaineReferentielBundle:Pages:accueil.co.html.twig */
class __TwigTemplate_c0070fb0aca987bb49ddfa47d38e7ecb7770ed35547a171f88a1d491fce6f3b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Nav:leftnav.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineReferentielBundle:Nav:leftnav.html.twig";
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
\t<div class=\"content\">
\t  <h3>Description des modules de l'application</h3>
\t  \t<div class=\"panel-group\" id=\"accordion\">

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
\t\t          <span class=\"glyphicon glyphicon-cog\"></span> Gestion des groupes
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des groupes
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
\t\t          <span class=\"glyphicon glyphicon-user\"></span> Gestion des utilisateurs
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des utilisateurs
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
\t\t          <span class=\"glyphicon glyphicon-globe\"></span> Gestion des zones
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseThree\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des zones
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
\t\t          <span class=\"glyphicon glyphicon-exclamation-sign\"></span> Gestion des alertes
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseFour\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des alertes
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\">
\t\t          <span class=\"glyphicon glyphicon-list-alt\"></span> Gestion des informations
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseFive\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des informations
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSix\">
\t\t          <span class=\"glyphicon glyphicon-thumbs-up\"></span> Gestion des conseils
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseSix\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        Description module : Gestion des conseils
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:accueil.co.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
