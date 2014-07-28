<?php

/* ThiefaineReferentielBundle:Utilisateurweb:new.html.twig */
class __TwigTemplate_eb00db7b083cde083b4c7e439b08c2194a350a4dfb502c2434f81121788024e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
";
    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 7
        echo "\t
\t<div class=\"content col-md-9\">

\t\t<h3>Création d'un utilisateur</h3>

\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 13
            echo "    \t<div class=\"alert alert-warning\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 15
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</div>
\t\t";
        }
        // line 21
        echo "
\t\t";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) == 0)) {
            // line 23
            echo "
\t\t";
            // line 24
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t<div class=\"form-group\">
\t\t\t\t<p>
\t\t\t\t\t";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
            echo "
\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
            echo "
\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t    <p>
\t\t\t\t\t";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
            echo "
\t\t\t\t\t";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
            echo "
\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
            echo "
\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups"), 'label');
            echo "
\t\t\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
            echo "
\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t  \t<p>
\t\t\t\t\t";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infos"), 'label');
            echo "
\t\t\t\t\t";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infos"), 'widget');
            echo "
\t\t\t\t</p>
\t\t      \t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Créer l'utilisateur</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
            // line 61
            echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_utilisateurweb_list");
            echo ">Annuler</a>
\t\t  \t  \t</p>
\t\t    </div>

\t\t";
            // line 65
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
\t\t";
        }
        // line 67
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Utilisateurweb:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  110 => 33,  81 => 21,  232 => 101,  223 => 94,  211 => 90,  165 => 68,  127 => 48,  137 => 60,  113 => 40,  65 => 15,  218 => 87,  191 => 80,  178 => 69,  198 => 81,  194 => 73,  148 => 67,  118 => 40,  97 => 42,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 53,  124 => 53,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  175 => 71,  76 => 20,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 83,  202 => 82,  185 => 78,  180 => 66,  170 => 57,  146 => 48,  134 => 58,  126 => 40,  90 => 15,  77 => 19,  70 => 40,  53 => 18,  150 => 49,  129 => 58,  114 => 53,  104 => 39,  100 => 29,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 86,  177 => 61,  169 => 60,  140 => 45,  132 => 58,  128 => 44,  107 => 38,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 95,  224 => 71,  221 => 86,  219 => 89,  217 => 92,  208 => 68,  204 => 81,  179 => 71,  159 => 66,  143 => 56,  135 => 61,  119 => 44,  102 => 29,  71 => 19,  67 => 35,  63 => 25,  59 => 6,  28 => 71,  87 => 31,  21 => 1,  38 => 7,  25 => 4,  93 => 32,  88 => 35,  78 => 34,  46 => 6,  44 => 18,  31 => 4,  26 => 5,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 56,  163 => 45,  158 => 67,  156 => 52,  151 => 62,  142 => 49,  138 => 48,  136 => 44,  121 => 54,  117 => 43,  105 => 40,  91 => 27,  62 => 25,  49 => 7,  94 => 28,  89 => 24,  85 => 36,  75 => 31,  68 => 16,  56 => 12,  27 => 5,  24 => 7,  19 => 1,  79 => 32,  72 => 30,  69 => 11,  47 => 10,  40 => 5,  37 => 8,  22 => 3,  246 => 101,  157 => 65,  145 => 65,  139 => 52,  131 => 59,  123 => 47,  120 => 37,  115 => 51,  111 => 49,  108 => 40,  101 => 38,  98 => 43,  96 => 28,  83 => 33,  74 => 19,  66 => 18,  55 => 13,  52 => 20,  50 => 11,  43 => 5,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 67,  193 => 77,  189 => 67,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 29,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 41,  125 => 47,  122 => 41,  116 => 36,  112 => 37,  109 => 47,  106 => 32,  103 => 45,  99 => 35,  95 => 26,  92 => 36,  86 => 23,  82 => 47,  80 => 34,  73 => 23,  64 => 26,  60 => 26,  57 => 12,  54 => 11,  51 => 20,  48 => 19,  45 => 10,  42 => 10,  39 => 9,  36 => 2,  33 => 1,  30 => 1,);
    }
}
