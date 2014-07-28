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
        echo "
<html>
\t<head>
\t\t<title>
\t\t\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>

\t\t<link rel=\"SHORTCUT ICON\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/logo.png"), "html", null, true);
        echo "\" />

\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
\t\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "\t</head>
\t<body>
\t\t
\t\t\t<nav class=\"navbar navbar-default navbar-top\" role=\"navigation\" style=\"margin-bottom: inherit;\">
\t\t\t\t<div class=\"container\" style=\"padding-top:5px;\">
\t\t\t\t\t<div class=\"nav navbar-nav navbar-left\">
\t\t\t\t\t  <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/logo_header.png"), "html", null, true);
        echo "\" style=\"width: 40px;\">
\t\t\t\t\t  <b>Thiefaine</b>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t
\t\t<div class=\"container\">
\t\t\t";
        // line 45
        $this->displayBlock('leftbar', $context, $blocks);
        // line 47
        echo "
\t\t\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "\t\t</div>
\t\t
\t\t";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "
\t\t";
        // line 70
        $this->displayBlock('modal', $context, $blocks);
        // line 90
        echo "\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t\tThiefaine
\t\t\t";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-ui/css/redmond/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/css/style.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-2.1.0.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/function.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t\t\t";
    }

    // line 45
    public function block_leftbar($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "\t\t\t";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "\t\t\t<nav style=\"margin-bottom: inherit;\" class=\"navbar navbar-default navbar-bottom\" role=\"navigation\">
\t\t\t\t<div class=\"container\" style=\"padding-top:10px; font-size:10px;\">
\t\t\t\t\t<div class=\"nav navbar-nav navbar-left\">
\t\t\t          <img src=\"";
        // line 56
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

    // line 70
    public function block_modal($context, array $blocks = array())
    {
        // line 71
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
        return array (  205 => 71,  202 => 70,  185 => 56,  177 => 52,  173 => 49,  163 => 45,  159 => 39,  134 => 22,  126 => 20,  120 => 17,  111 => 15,  108 => 14,  103 => 6,  95 => 90,  93 => 70,  90 => 69,  88 => 52,  77 => 45,  70 => 40,  61 => 34,  53 => 28,  48 => 19,  46 => 14,  39 => 10,  33 => 5,  27 => 1,  164 => 83,  154 => 76,  142 => 24,  139 => 68,  129 => 21,  125 => 60,  117 => 54,  114 => 53,  92 => 39,  67 => 24,  64 => 23,  42 => 9,  36 => 7,  31 => 4,  28 => 3,  98 => 28,  89 => 38,  84 => 50,  74 => 22,  58 => 16,  50 => 15,  44 => 8,  40 => 8,  35 => 8,  251 => 104,  245 => 101,  237 => 96,  227 => 89,  221 => 86,  210 => 78,  206 => 77,  200 => 74,  196 => 73,  190 => 70,  186 => 69,  180 => 53,  176 => 65,  170 => 48,  166 => 46,  160 => 58,  156 => 38,  150 => 26,  146 => 25,  138 => 23,  133 => 46,  130 => 45,  128 => 44,  124 => 42,  121 => 41,  116 => 16,  107 => 35,  104 => 46,  100 => 5,  96 => 31,  91 => 28,  82 => 48,  79 => 47,  75 => 30,  71 => 21,  68 => 38,  66 => 18,  59 => 14,  57 => 13,  54 => 16,  51 => 20,  45 => 7,  41 => 6,  37 => 6,  32 => 4,  29 => 3,);
    }
}
