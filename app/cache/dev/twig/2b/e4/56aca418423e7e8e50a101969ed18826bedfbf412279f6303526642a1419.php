<?php

/* ThiefaineReferentielBundle:Zone:index.html.twig */
class __TwigTemplate_2be456aca418423e7e8e50a101969ed18826bedfbf412279f6303526642a1419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content col-md-9\">

        <h3>Gestion des zones</h3>

        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Actions</th>
                <th>Active</th>
                <th>Nom <span class=\"glyphicon cheveron-down\" title=\"Trier par nom\"></span></th>
                <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 19
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zone_edit", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                        </a>

                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zone_delete", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cette zone ?')\">
                            <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                        </a>
                    </td>
                     <td>
                    ";
            // line 30
            if ($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "actif")) {
                // line 31
                echo "                        <span class=\"glyphicon glyphicon-ok\"></span>
                    ";
            } else {
                // line 33
                echo "                        -
                    ";
            }
            // line 35
            echo "                    </td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "nom"), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>

        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "            <div class=\"flash-notice\">
                ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Zone:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  110 => 35,  81 => 21,  232 => 101,  223 => 94,  211 => 90,  165 => 68,  127 => 48,  137 => 60,  113 => 40,  65 => 15,  218 => 87,  191 => 80,  178 => 69,  198 => 81,  194 => 73,  148 => 67,  118 => 40,  97 => 42,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 53,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  175 => 71,  76 => 33,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 83,  202 => 82,  185 => 78,  180 => 66,  170 => 59,  146 => 50,  134 => 58,  126 => 42,  90 => 15,  77 => 19,  70 => 30,  53 => 18,  150 => 51,  129 => 58,  114 => 53,  104 => 39,  100 => 42,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 86,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 44,  107 => 38,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 95,  224 => 71,  221 => 86,  219 => 89,  217 => 92,  208 => 68,  204 => 81,  179 => 71,  159 => 66,  143 => 56,  135 => 61,  119 => 44,  102 => 29,  71 => 19,  67 => 35,  63 => 17,  59 => 6,  28 => 3,  87 => 31,  21 => 1,  38 => 7,  25 => 4,  93 => 32,  88 => 38,  78 => 34,  46 => 9,  44 => 18,  31 => 4,  26 => 5,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 58,  163 => 45,  158 => 67,  156 => 54,  151 => 62,  142 => 49,  138 => 48,  136 => 46,  121 => 50,  117 => 43,  105 => 45,  91 => 27,  62 => 25,  49 => 10,  94 => 28,  89 => 26,  85 => 36,  75 => 31,  68 => 16,  56 => 14,  27 => 5,  24 => 7,  19 => 1,  79 => 32,  72 => 31,  69 => 11,  47 => 18,  40 => 5,  37 => 5,  22 => 3,  246 => 101,  157 => 65,  145 => 65,  139 => 52,  131 => 59,  123 => 47,  120 => 39,  115 => 51,  111 => 49,  108 => 40,  101 => 38,  98 => 43,  96 => 30,  83 => 36,  74 => 19,  66 => 18,  55 => 21,  52 => 20,  50 => 11,  43 => 8,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 67,  193 => 77,  189 => 67,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 29,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 43,  125 => 47,  122 => 41,  116 => 38,  112 => 47,  109 => 46,  106 => 34,  103 => 45,  99 => 35,  95 => 26,  92 => 36,  86 => 25,  82 => 23,  80 => 35,  73 => 20,  64 => 26,  60 => 26,  57 => 12,  54 => 11,  51 => 19,  48 => 19,  45 => 10,  42 => 10,  39 => 9,  36 => 2,  33 => 1,  30 => 1,);
    }
}
