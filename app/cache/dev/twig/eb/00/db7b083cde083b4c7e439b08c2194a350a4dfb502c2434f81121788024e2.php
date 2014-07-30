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
        return array (  81 => 21,  65 => 15,  184 => 65,  160 => 53,  110 => 33,  161 => 32,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  200 => 80,  197 => 79,  192 => 76,  76 => 24,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 56,  180 => 53,  170 => 57,  146 => 48,  134 => 51,  126 => 40,  90 => 15,  77 => 19,  70 => 19,  53 => 14,  175 => 71,  167 => 84,  150 => 49,  129 => 21,  114 => 53,  104 => 41,  100 => 29,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 61,  169 => 60,  140 => 45,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 27,  67 => 24,  63 => 17,  59 => 17,  87 => 25,  28 => 71,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 56,  163 => 45,  158 => 67,  156 => 52,  151 => 57,  142 => 24,  138 => 23,  136 => 44,  121 => 46,  117 => 47,  105 => 40,  91 => 27,  62 => 18,  49 => 7,  93 => 36,  88 => 31,  78 => 10,  38 => 8,  21 => 1,  94 => 33,  89 => 24,  85 => 25,  75 => 28,  68 => 16,  56 => 12,  27 => 5,  46 => 6,  26 => 5,  24 => 7,  44 => 9,  31 => 4,  25 => 4,  19 => 1,  79 => 26,  72 => 22,  69 => 25,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 30,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 37,  115 => 42,  111 => 40,  108 => 43,  101 => 73,  98 => 28,  96 => 28,  83 => 25,  74 => 23,  66 => 18,  55 => 7,  52 => 6,  50 => 13,  43 => 5,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 69,  164 => 68,  162 => 57,  154 => 29,  149 => 56,  147 => 58,  144 => 69,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 23,  116 => 36,  112 => 42,  109 => 39,  106 => 32,  103 => 6,  99 => 36,  95 => 90,  92 => 39,  86 => 23,  82 => 23,  80 => 30,  73 => 20,  64 => 23,  60 => 9,  57 => 11,  54 => 16,  51 => 11,  48 => 12,  45 => 17,  42 => 8,  39 => 12,  36 => 2,  33 => 1,  30 => 2,);
    }
}
