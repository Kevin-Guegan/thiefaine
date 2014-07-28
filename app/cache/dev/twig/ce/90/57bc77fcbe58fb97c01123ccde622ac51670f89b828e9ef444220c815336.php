<?php

/* ThiefaineReferentielBundle:Information:new.html.twig */
class __TwigTemplate_ce9057bc77fcbe58fb97c01123ccde622ac51670f89b828e9ef444220c815336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
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

        <h3>Création d'une information</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 20
            echo "        \t";
            if (((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")) == null)) {
                // line 21
                echo "        \t\t<p>
\t\t\t    \t<div class=\"alert alert-warning\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 24
                    echo "\t\t\t\t\t\t    <div class=\"flash-notice\">
\t\t\t\t\t\t        ";
                    // line 25
                    echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                    echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t</div>
\t\t\t\t</p>
        \t";
            } else {
                // line 31
                echo "        \t\t<p>
\t\t\t    \t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 34
                    echo "\t\t\t\t\t\t    <div class=\"flash-notice\">
\t\t\t\t\t\t        ";
                    // line 35
                    echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                    echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t</div>
\t\t\t\t</p>
        \t";
            }
            // line 41
            echo "\t\t";
        }
        // line 42
        echo "

\t\t";
        // line 44
        if (((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")) != null)) {
            // line 45
            echo "
\t\t";
            // line 46
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
            echo "
\t\t\t\t\t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlphoto"), 'label');
            echo "
\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlphoto"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachement"), 'label');
            echo "
\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachement"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllien"), 'label');
            echo "
\t\t\t\t\t";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllien"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone"), 'label');
            echo "
\t\t\t\t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datevalidite"), 'label');
            echo "
\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datevalidite"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label');
            echo "
\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<p class=\"list-form-control\">
\t\t\t\t\t<label>Notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alerte"), 'label');
            echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alerte"), 'widget');
            echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>
\t\t\t\t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Créer l'information</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
            // line 96
            echo $this->env->getExtension('routing')->getPath("information");
            echo ">Annuler</a>
\t\t  \t  \t</p>\t

\t\t\t</div>

\t\t";
            // line 101
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

\t\t";
        }
        // line 104
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 69,  160 => 58,  124 => 42,  152 => 68,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 95,  213 => 90,  200 => 74,  197 => 79,  192 => 76,  175 => 71,  76 => 24,  161 => 72,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 56,  180 => 66,  170 => 62,  146 => 53,  134 => 60,  126 => 56,  90 => 15,  77 => 45,  70 => 40,  53 => 14,  150 => 54,  129 => 21,  114 => 53,  104 => 34,  100 => 33,  84 => 13,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 52,  169 => 60,  140 => 63,  132 => 51,  128 => 44,  107 => 35,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 89,  224 => 71,  221 => 86,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  28 => 3,  87 => 38,  21 => 2,  38 => 8,  25 => 4,  93 => 36,  88 => 31,  78 => 10,  46 => 11,  44 => 9,  31 => 4,  26 => 2,  201 => 92,  196 => 73,  183 => 73,  171 => 70,  166 => 61,  163 => 45,  158 => 67,  156 => 57,  151 => 57,  142 => 24,  138 => 48,  136 => 61,  121 => 41,  117 => 47,  105 => 40,  91 => 28,  62 => 18,  49 => 5,  94 => 33,  89 => 34,  85 => 25,  75 => 23,  68 => 20,  56 => 24,  27 => 5,  24 => 7,  19 => 1,  79 => 24,  72 => 32,  69 => 25,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 71,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 40,  108 => 47,  101 => 73,  98 => 43,  96 => 31,  83 => 37,  74 => 23,  66 => 19,  55 => 15,  52 => 23,  50 => 13,  43 => 12,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 69,  164 => 73,  162 => 57,  154 => 29,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 46,  130 => 45,  125 => 60,  122 => 54,  116 => 38,  112 => 49,  109 => 39,  106 => 46,  103 => 6,  99 => 36,  95 => 90,  92 => 40,  86 => 30,  82 => 25,  80 => 30,  73 => 19,  64 => 23,  60 => 26,  57 => 13,  54 => 12,  51 => 11,  48 => 12,  45 => 7,  42 => 8,  39 => 12,  36 => 5,  33 => 9,  30 => 5,);
    }
}
