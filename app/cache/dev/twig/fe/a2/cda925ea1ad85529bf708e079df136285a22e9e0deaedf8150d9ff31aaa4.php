<?php

/* ThiefaineReferentielBundle:Information:show.html.twig */
class __TwigTemplate_fea2cda925ea1ad85529bf708e079df136285a22e9e0deaedf8150d9ff31aaa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/message.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap_filestyle/src/bootstrap-filestyle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
\t";
        // line 13
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 14
        echo "
    <div class=\"content col-md-9\">
        
        <h3>Visionner l'information «";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
        echo "»</h1>

\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "titre"), 'label');
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "titre"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urlphoto"), 'label');
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urlphoto"), 'widget');
        echo "
\t\t\t\t\t<a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "attachement"), 'label');
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "attachement"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urllien"), 'label');
        echo "
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urllien"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "zone"), 'label');
        echo "
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "zone"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "datevalidite"), 'label');
        echo "
\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "datevalidite"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "message"), 'label');
        echo "
\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "message"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\">
\t\t\t\t\t<label>Notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "alerte"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "alerte"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p>\t
\t\t\t\t\t<a class=\"btn btn-primary\" href=";
        // line 69
        echo $this->env->getExtension('routing')->getPath("information");
        echo ">Retour à la liste des informations</a>
\t\t  \t  \t</p>

\t\t\t</div>

\t\t";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'form_end');
        echo "

\t\t";
        // line 76
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 77
            echo "    \t<p>
    \t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 80
                echo "\t\t\t    <div class=\"flash-notice\">
\t\t\t        ";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t    </div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t</div>
\t\t</p>
\t\t";
        }
        // line 87
        echo "
    </div>


";
    }

    // line 93
    public function block_modal($context, array $blocks = array())
    {
        // line 94
        echo "\t<div id=\"showImageModal\" class=\"modal fade\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t        <span aria-hidden=\"true\">&times;</span>
\t\t        <span class=\"sr-only\">Fermer</span>
\t        </button>
\t        <h4 class=\"modal-title\">Visualisation de l'image</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        
\t      </div>
\t      <div class=\"modal-footer\">
\t        <a class=\"showFull btn btn-default\" type=\"button\">
\t        \tZoom
\t        \t<span class=\"glyphicon glyphicon-resize-full\"></span>
\t        </a>
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 87,  191 => 76,  186 => 74,  215 => 87,  212 => 86,  178 => 69,  172 => 64,  152 => 52,  148 => 51,  118 => 39,  97 => 30,  124 => 45,  113 => 41,  81 => 33,  65 => 15,  184 => 65,  160 => 53,  110 => 33,  161 => 32,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 99,  233 => 97,  226 => 93,  213 => 84,  200 => 80,  197 => 79,  192 => 76,  76 => 30,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 1,  205 => 71,  202 => 82,  185 => 56,  180 => 53,  170 => 57,  146 => 48,  134 => 51,  126 => 40,  90 => 31,  77 => 19,  70 => 19,  53 => 19,  175 => 71,  167 => 84,  150 => 49,  129 => 21,  114 => 53,  104 => 39,  100 => 29,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 94,  220 => 92,  214 => 69,  177 => 61,  169 => 60,  140 => 45,  132 => 44,  128 => 43,  107 => 35,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 90,  221 => 77,  219 => 76,  217 => 91,  208 => 85,  204 => 81,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 21,  67 => 24,  63 => 15,  59 => 12,  87 => 26,  28 => 3,  201 => 80,  196 => 90,  183 => 73,  171 => 70,  166 => 56,  163 => 45,  158 => 56,  156 => 52,  151 => 57,  142 => 48,  138 => 47,  136 => 44,  121 => 44,  117 => 43,  105 => 40,  91 => 27,  62 => 13,  49 => 17,  93 => 36,  88 => 35,  78 => 22,  38 => 5,  21 => 1,  94 => 33,  89 => 24,  85 => 34,  75 => 31,  68 => 18,  56 => 11,  27 => 5,  46 => 7,  26 => 5,  24 => 7,  44 => 11,  31 => 4,  25 => 4,  19 => 1,  79 => 21,  72 => 30,  69 => 17,  47 => 12,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 30,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 37,  115 => 42,  111 => 36,  108 => 35,  101 => 31,  98 => 36,  96 => 28,  83 => 27,  74 => 19,  66 => 26,  55 => 12,  52 => 20,  50 => 8,  43 => 5,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 75,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 62,  164 => 68,  162 => 59,  154 => 29,  149 => 56,  147 => 58,  144 => 69,  141 => 48,  133 => 48,  130 => 41,  125 => 60,  122 => 40,  116 => 36,  112 => 36,  109 => 39,  106 => 38,  103 => 6,  99 => 36,  95 => 90,  92 => 36,  86 => 27,  82 => 23,  80 => 30,  73 => 20,  64 => 14,  60 => 9,  57 => 13,  54 => 12,  51 => 11,  48 => 19,  45 => 16,  42 => 6,  39 => 10,  36 => 2,  33 => 4,  30 => 3,);
    }
}
