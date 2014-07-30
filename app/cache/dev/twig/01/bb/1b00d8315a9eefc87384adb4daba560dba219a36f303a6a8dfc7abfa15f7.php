<?php

/* ThiefaineReferentielBundle:Conseil:edit.html.twig */
class __TwigTemplate_01bb1b00d8315a9eefc87384adb4daba560dba219a36f303a6a8dfc7abfa15f7 extends Twig_Template
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
        
        <h3>Mise à jour du conseil «";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "titre"), "html", null, true);
        echo "»</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 20
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 22
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</div>
\t\t";
        }
        // line 28
        echo "
\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'label');
        echo " *
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'label');
        echo "
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urlphoto"), 'label');
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urlphoto"), 'widget');
        echo "
\t\t\t\t\t<a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attachement"), 'label');
        echo "
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attachement"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urllien"), 'label');
        echo "
\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urllien"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datevalidite"), 'label');
        echo "
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datevalidite"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "message"), 'label');
        echo " *
\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "message"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Modifier le conseil</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 66
        echo $this->env->getExtension('routing')->getPath("conseil");
        echo ">Annuler</a>
\t\t  \t  \t</p>

\t\t\t</div>

\t\t";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    </div>

";
    }

    // line 77
    public function block_modal($context, array $blocks = array())
    {
        // line 78
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
        return "ThiefaineReferentielBundle:Conseil:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  223 => 94,  211 => 90,  165 => 68,  137 => 60,  127 => 48,  232 => 101,  207 => 78,  261 => 108,  231 => 90,  216 => 81,  210 => 85,  206 => 77,  190 => 70,  218 => 87,  191 => 80,  186 => 69,  215 => 87,  212 => 86,  178 => 70,  172 => 64,  152 => 53,  148 => 67,  118 => 40,  97 => 42,  124 => 53,  113 => 40,  81 => 23,  65 => 18,  184 => 73,  160 => 54,  110 => 37,  161 => 72,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 93,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  76 => 20,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 82,  185 => 78,  180 => 62,  170 => 58,  146 => 49,  134 => 60,  126 => 47,  90 => 29,  77 => 24,  70 => 30,  53 => 11,  175 => 71,  167 => 61,  150 => 50,  129 => 41,  114 => 53,  104 => 34,  100 => 38,  84 => 22,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 107,  229 => 94,  220 => 82,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 58,  128 => 44,  107 => 31,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 98,  230 => 96,  227 => 81,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 85,  204 => 77,  179 => 72,  159 => 66,  143 => 55,  135 => 44,  119 => 37,  102 => 29,  71 => 19,  67 => 35,  63 => 15,  59 => 12,  87 => 37,  28 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 57,  163 => 45,  158 => 59,  156 => 53,  151 => 62,  142 => 49,  138 => 48,  136 => 61,  121 => 54,  117 => 52,  105 => 40,  91 => 27,  62 => 13,  49 => 12,  93 => 40,  88 => 38,  78 => 22,  38 => 5,  21 => 1,  94 => 33,  89 => 38,  85 => 34,  75 => 31,  68 => 28,  56 => 11,  27 => 5,  46 => 7,  26 => 2,  24 => 7,  44 => 18,  31 => 4,  25 => 4,  19 => 1,  79 => 21,  72 => 31,  69 => 17,  47 => 10,  40 => 11,  37 => 8,  22 => 3,  246 => 101,  157 => 65,  145 => 65,  139 => 45,  131 => 59,  123 => 47,  120 => 53,  115 => 36,  111 => 49,  108 => 36,  101 => 44,  98 => 43,  96 => 32,  83 => 22,  74 => 19,  66 => 29,  55 => 21,  52 => 12,  50 => 8,  43 => 9,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 81,  193 => 77,  189 => 81,  187 => 66,  182 => 66,  176 => 61,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 50,  130 => 58,  125 => 40,  122 => 43,  116 => 51,  112 => 47,  109 => 46,  106 => 36,  103 => 45,  99 => 28,  95 => 26,  92 => 33,  86 => 23,  82 => 47,  80 => 35,  73 => 30,  64 => 14,  60 => 26,  57 => 13,  54 => 12,  51 => 20,  48 => 19,  45 => 10,  42 => 6,  39 => 9,  36 => 2,  33 => 4,  30 => 3,);
    }
}
