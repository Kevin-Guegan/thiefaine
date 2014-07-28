<?php

/* ThiefaineReferentielBundle:Groupe:new.html.twig */
class __TwigTemplate_5a761eaaa0a00ba08bcbdd313cacbe99b15299e58d43ad9fbc2d33efdec39c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 4
        echo "
\t<div class=\"content col-md-9\">
\t\t<h3>Création d'un groupe</h3>

\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 9
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t
    \t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
\t\t\t\t\t ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits d'administration du groupe.\">
\t\t\t\t\t<label>Administration</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits de créations du groupe.\">
\t\t\t\t\t<label>Messages et notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Créer le groupe\" />
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 74
        echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
        echo ">Annuler</a>
\t\t\t\t</p>

\t\t\t</div>

\t\t";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 73,  127 => 43,  137 => 60,  113 => 49,  65 => 18,  218 => 87,  191 => 76,  178 => 69,  148 => 67,  118 => 39,  97 => 42,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 74,  124 => 53,  152 => 52,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 74,  192 => 76,  175 => 71,  76 => 20,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 67,  180 => 66,  170 => 58,  146 => 49,  134 => 58,  126 => 56,  90 => 15,  77 => 24,  70 => 40,  53 => 18,  150 => 67,  129 => 58,  114 => 53,  104 => 34,  100 => 38,  84 => 13,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 94,  220 => 92,  214 => 69,  177 => 62,  169 => 60,  140 => 46,  132 => 58,  128 => 43,  107 => 47,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 89,  224 => 71,  221 => 86,  219 => 76,  217 => 91,  208 => 68,  204 => 81,  179 => 72,  159 => 39,  143 => 56,  135 => 61,  119 => 51,  102 => 29,  71 => 30,  67 => 35,  63 => 25,  59 => 6,  28 => 3,  87 => 31,  21 => 1,  38 => 6,  25 => 4,  93 => 40,  88 => 31,  78 => 34,  46 => 11,  44 => 18,  31 => 4,  26 => 2,  201 => 80,  196 => 73,  183 => 73,  171 => 70,  166 => 57,  163 => 45,  158 => 67,  156 => 53,  151 => 52,  142 => 48,  138 => 47,  136 => 45,  121 => 54,  117 => 52,  105 => 40,  91 => 27,  62 => 17,  49 => 12,  94 => 28,  89 => 38,  85 => 36,  75 => 31,  68 => 28,  56 => 11,  27 => 5,  24 => 7,  19 => 1,  79 => 33,  72 => 32,  69 => 11,  47 => 10,  40 => 5,  37 => 8,  22 => 3,  246 => 101,  157 => 55,  145 => 65,  139 => 63,  131 => 59,  123 => 47,  120 => 53,  115 => 51,  111 => 49,  108 => 35,  101 => 44,  98 => 43,  96 => 38,  83 => 35,  74 => 19,  66 => 18,  55 => 21,  52 => 23,  50 => 11,  43 => 6,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 77,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 59,  154 => 29,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 46,  130 => 57,  125 => 56,  122 => 40,  116 => 38,  112 => 36,  109 => 47,  106 => 46,  103 => 45,  99 => 28,  95 => 26,  92 => 33,  86 => 23,  82 => 47,  80 => 34,  73 => 23,  64 => 10,  60 => 26,  57 => 12,  54 => 11,  51 => 20,  48 => 19,  45 => 16,  42 => 10,  39 => 9,  36 => 5,  33 => 2,  30 => 1,);
    }
}
