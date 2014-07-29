<?php

/* ThiefaineReferentielBundle:Default:index.html.twig */
class __TwigTemplate_7e8652e1dd7f1fe6630056c1d24f05151c8b7b43e1bbba52dded67b65442bf9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<head>
\t\t<title>
\t\t\t";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>

\t\t<link rel=\"SHORTCUT ICON\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/logo.png"), "html", null, true);
        echo "\" />

\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
\t\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "\t</head>
\t<body>
\t\t
\t\t\t<nav class=\"navbar navbar-default navbar-top\" role=\"navigation\" style=\"margin-bottom: inherit;\">
\t\t\t\t<div class=\"container\" style=\"padding-top:5px;\">
\t\t\t\t\t<a class=\"nav navbar-nav navbar-left\" href=\"./\">
\t\t\t\t\t  <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/logo_header.png"), "html", null, true);
        echo "\" style=\"width: 40px;\">
\t\t\t\t\t  <b>Thiefaine</b>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t
\t\t<div class=\"container\">
\t\t\t";
        // line 53
        $this->displayBlock('leftbar', $context, $blocks);
        // line 55
        echo "
\t\t\t";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "\t\t</div>

\t\t";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "
\t\t";
        // line 78
        $this->displayBlock('modal', $context, $blocks);
        // line 98
        echo "\t</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t\tThiefaine
\t\t\t";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-ui/css/redmond/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/css/style.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/function.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t\t\t\t\t<form class=\"navbar-form navbar-left\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_accueil");
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" required>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-log-in\" name=\"connect\"></span> Connexion</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
    }

    // line 53
    public function block_leftbar($context, array $blocks = array())
    {
        // line 54
        echo "\t\t\t";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "\t\t\t";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "\t\t\t<nav style=\"margin-bottom: inherit;\" class=\"navbar navbar-default navbar-bottom\" role=\"navigation\">
\t\t\t\t<div class=\"container\" style=\"padding-top:10px; font-size:10px;\">
\t\t\t\t\t<div class=\"nav navbar-nav navbar-left\">
\t\t\t          <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/logo_header.png"), "html", null, true);
        echo "\" style=\"width: 10px;\">
\t          \t\t  Application Thiefaine - 2014
\t\t\t        </div>
\t\t\t        <div class=\"nav navbar-nav navbar-right\" style=\"text-align: right;\">
\t\t\t\t\t  Powered by L3 - 
\t\t\t\t\t  <a href=\"http://www.imie-ecole-informatique.fr/\">IMIE Rennes</a> - 
\t\t\t\t\t  <a href=\"mailto:theraud.mickael@hotmail.fr\">M.THERAUD</a>, 
\t\t\t\t\t  <a href=\"mailto:christopher.louet@gmail.com\">C.LOUET</a>, 
\t\t\t\t\t  <a href=\"mailto:y.bescher.leblanc@gmail.com\">Y.BESCHER-LEBLANC</a>.
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t";
    }

    // line 78
    public function block_modal($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t<!-- Modal de visualisation informations / conseil-->
\t\t\t<div class=\"modal fade\" id=\"viewInfoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t  <div class=\"modal-dialog\">
\t\t\t    <div class=\"modal-content\">
\t\t\t      <div class=\"modal-header\">
\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t        <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
\t\t\t      </div>
\t\t\t      <div class=\"modal-body\" id=\"myModalBody\">
\t\t\t      \t
\t\t\t      </div>
\t\t\t      <div class=\"modal-footer\">
\t\t\t      \t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Valider</button>
\t\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t\t\t      </div>
\t\t\t    </div>
\t\t\t  </div>
\t\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 79,  212 => 78,  195 => 64,  190 => 61,  187 => 60,  183 => 57,  180 => 56,  176 => 54,  173 => 53,  158 => 38,  155 => 37,  149 => 25,  145 => 24,  141 => 23,  137 => 22,  133 => 21,  128 => 20,  125 => 19,  119 => 16,  115 => 15,  110 => 14,  107 => 13,  102 => 5,  99 => 4,  94 => 98,  92 => 78,  89 => 77,  87 => 60,  83 => 58,  81 => 56,  78 => 55,  76 => 53,  69 => 48,  67 => 37,  60 => 33,  52 => 27,  50 => 19,  47 => 18,  45 => 13,  38 => 9,  34 => 7,  32 => 4,  27 => 1,  104 => 75,  31 => 4,  28 => 3,);
    }
}
