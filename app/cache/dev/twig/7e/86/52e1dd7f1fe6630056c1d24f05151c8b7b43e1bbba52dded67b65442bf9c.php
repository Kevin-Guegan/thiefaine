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
        return array (  205 => 71,  202 => 70,  185 => 56,  180 => 53,  170 => 48,  146 => 25,  134 => 22,  126 => 20,  90 => 69,  77 => 45,  70 => 40,  53 => 28,  175 => 90,  167 => 84,  150 => 26,  129 => 21,  114 => 53,  104 => 46,  100 => 5,  84 => 50,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 52,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 91,  159 => 39,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  87 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 46,  163 => 45,  158 => 67,  156 => 38,  151 => 63,  142 => 24,  138 => 23,  136 => 56,  121 => 46,  117 => 54,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  93 => 70,  88 => 52,  78 => 21,  38 => 6,  21 => 2,  94 => 28,  89 => 38,  85 => 25,  75 => 30,  68 => 38,  56 => 9,  27 => 1,  46 => 14,  26 => 6,  24 => 3,  44 => 8,  31 => 4,  25 => 5,  19 => 2,  79 => 47,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 17,  115 => 43,  111 => 15,  108 => 14,  101 => 32,  98 => 28,  96 => 31,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 21,  50 => 15,  43 => 6,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 98,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 72,  164 => 83,  162 => 57,  154 => 76,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 43,  116 => 16,  112 => 42,  109 => 34,  106 => 36,  103 => 6,  99 => 31,  95 => 90,  92 => 39,  86 => 28,  82 => 48,  80 => 19,  73 => 19,  64 => 23,  60 => 6,  57 => 11,  54 => 16,  51 => 20,  48 => 19,  45 => 17,  42 => 9,  39 => 10,  36 => 7,  33 => 5,  30 => 5,);
    }
}
