<?php

/* ThiefaineReferentielBundle:Groupe:edit.html.twig */
class __TwigTemplate_459e56d3e1493a1a12a4157f6c69d74602441856db122fd67951d7c9e4dfa510 extends Twig_Template
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
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t";
        // line 4
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 5
        echo "
\t<div class=\"content col-md-9\">
\t\t<h3>Mise à jour du groupe «";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")), "html", null, true);
        echo "»</h3>

\t\t";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 10
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 12
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t
    \t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
\t\t\t\t\t ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits d'administration du groupe.\">
\t\t\t\t\t<label>Administration</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 35
        if ((isset($context["group_role_manage_group"]) ? $context["group_role_manage_group"] : $this->getContext($context, "group_role_manage_group"))) {
            // line 36
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 38
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget');
            echo "
\t\t                        ";
        }
        // line 40
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 47
        if ((isset($context["group_role_manage_user"]) ? $context["group_role_manage_user"] : $this->getContext($context, "group_role_manage_user"))) {
            // line 48
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 50
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget');
            echo "
\t\t                        ";
        }
        // line 52
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits de créations du groupe.\">
\t\t\t\t\t<label>Messages et notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 65
        if ((isset($context["group_role_manage_information"]) ? $context["group_role_manage_information"] : $this->getContext($context, "group_role_manage_information"))) {
            // line 66
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 68
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget');
            echo "
\t\t                        ";
        }
        // line 70
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 77
        if ((isset($context["group_role_manage_conseil"]) ? $context["group_role_manage_conseil"] : $this->getContext($context, "group_role_manage_conseil"))) {
            // line 78
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 80
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget');
            echo "
\t\t                        ";
        }
        // line 82
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 89
        if ((isset($context["group_role_manage_zone"]) ? $context["group_role_manage_zone"] : $this->getContext($context, "group_role_manage_zone"))) {
            // line 90
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 92
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget');
            echo "
\t\t                        ";
        }
        // line 94
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Modifier le groupe\" />
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
        echo ">Annuler</a>
\t\t\t\t</p>


\t\t\t</div>

\t\t";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 94,  211 => 90,  165 => 68,  137 => 55,  127 => 48,  232 => 101,  207 => 84,  261 => 108,  231 => 90,  216 => 81,  210 => 85,  206 => 77,  190 => 70,  218 => 87,  191 => 80,  186 => 69,  215 => 87,  212 => 86,  178 => 70,  172 => 64,  152 => 53,  148 => 52,  118 => 40,  97 => 59,  124 => 42,  113 => 40,  81 => 23,  65 => 16,  184 => 73,  160 => 58,  110 => 37,  161 => 72,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 93,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  76 => 33,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 82,  185 => 78,  180 => 66,  170 => 62,  146 => 56,  134 => 60,  126 => 47,  90 => 29,  77 => 22,  70 => 30,  53 => 11,  175 => 71,  167 => 61,  150 => 62,  129 => 21,  114 => 53,  104 => 34,  100 => 42,  84 => 22,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 107,  229 => 94,  220 => 82,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 45,  128 => 44,  107 => 38,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 98,  230 => 96,  227 => 81,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 85,  204 => 81,  179 => 72,  159 => 66,  143 => 55,  135 => 53,  119 => 44,  102 => 21,  71 => 19,  67 => 35,  63 => 15,  59 => 14,  87 => 26,  28 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 57,  151 => 62,  142 => 49,  138 => 48,  136 => 61,  121 => 50,  117 => 43,  105 => 45,  91 => 27,  62 => 17,  49 => 17,  93 => 32,  88 => 38,  78 => 22,  38 => 7,  21 => 1,  94 => 33,  89 => 24,  85 => 34,  75 => 23,  68 => 18,  56 => 12,  27 => 5,  46 => 7,  26 => 2,  24 => 7,  44 => 9,  31 => 4,  25 => 4,  19 => 1,  79 => 24,  72 => 31,  69 => 18,  47 => 10,  40 => 11,  37 => 5,  22 => 3,  246 => 101,  157 => 65,  145 => 60,  139 => 52,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 35,  108 => 36,  101 => 36,  98 => 43,  96 => 32,  83 => 25,  74 => 20,  66 => 29,  55 => 13,  52 => 12,  50 => 11,  43 => 9,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 81,  193 => 77,  189 => 81,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 63,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 50,  130 => 58,  125 => 47,  122 => 43,  116 => 51,  112 => 47,  109 => 46,  106 => 36,  103 => 6,  99 => 35,  95 => 90,  92 => 40,  86 => 28,  82 => 47,  80 => 35,  73 => 20,  64 => 16,  60 => 26,  57 => 13,  54 => 12,  51 => 19,  48 => 11,  45 => 10,  42 => 6,  39 => 6,  36 => 2,  33 => 7,  30 => 1,);
    }
}
