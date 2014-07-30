<?php

/* ThiefaineReferentielBundle:Groupe:index.html.twig */
class __TwigTemplate_e2b629b1423b2bc3ad2f209c459171c2b288bb40f82692b697d301ecc21126ca extends Twig_Template
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
        echo "    <div class=\"content col-md-9\">
        <h3>Gestion des groupes</h3>
        <table class=\"records_list table table-hover\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Nom <span class=\"glyphicon cheveron-down\" title=\"Trier par nom\"></span></th>
                    <th>Groupe <span class=\"glyphicon cheveron-down\" title=\"Trier par groupe\"></span></th>
                    <th>Utilisateurs <span class=\"glyphicon cheveron-down\" title=\"Trier par utilisateurs\"></span></th>
                    <th>Informations <span class=\"glyphicon cheveron-down\" title=\"Trier par informations\"></span></th>
                    <th>Conseils <span class=\"glyphicon cheveron-down\" title=\"Trier par conseils\"></span></th>
                    <th>Zones <span class=\"glyphicon cheveron-down\" title=\"Trier par conseils\"></span></th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "                    <tr>
                        <td data-element=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                            </a>                            
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_delete", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce groupe ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                        </td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 30
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_GROUP"), "method")) {
                // line 31
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 33
                echo "                            -
                        ";
            }
            // line 35
            echo "                        </td>
                        <td>
                        ";
            // line 37
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_USER"), "method")) {
                // line 38
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 40
                echo "                            -
                        ";
            }
            // line 42
            echo "                        </td>
                        <td>
                        ";
            // line 44
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_INFORMATION"), "method")) {
                // line 45
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 47
                echo "                            -
                        ";
            }
            // line 49
            echo "                        </td>
                        <td>
                        ";
            // line 51
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_CONSEIL"), "method")) {
                // line 52
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 54
                echo "                            -
                        ";
            }
            // line 56
            echo "                        </td>
                        <td>
                        ";
            // line 58
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_ZONE"), "method")) {
                // line 59
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 61
                echo "                            -
                        ";
            }
            // line 63
            echo "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  223 => 94,  211 => 90,  165 => 68,  137 => 60,  127 => 48,  232 => 101,  207 => 84,  261 => 108,  231 => 90,  216 => 81,  210 => 85,  206 => 77,  190 => 70,  218 => 87,  191 => 80,  186 => 69,  215 => 87,  212 => 86,  178 => 70,  172 => 64,  152 => 53,  148 => 67,  118 => 40,  97 => 42,  124 => 53,  113 => 40,  81 => 23,  65 => 18,  184 => 73,  160 => 74,  110 => 37,  161 => 72,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 93,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  76 => 33,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 82,  185 => 78,  180 => 66,  170 => 62,  146 => 56,  134 => 60,  126 => 47,  90 => 29,  77 => 24,  70 => 30,  53 => 11,  175 => 71,  167 => 61,  150 => 67,  129 => 58,  114 => 53,  104 => 34,  100 => 38,  84 => 22,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 107,  229 => 94,  220 => 82,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 58,  128 => 44,  107 => 47,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 98,  230 => 96,  227 => 81,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 85,  204 => 81,  179 => 72,  159 => 66,  143 => 55,  135 => 61,  119 => 51,  102 => 21,  71 => 19,  67 => 35,  63 => 15,  59 => 14,  87 => 37,  28 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 57,  151 => 62,  142 => 49,  138 => 48,  136 => 61,  121 => 54,  117 => 52,  105 => 40,  91 => 27,  62 => 17,  49 => 12,  93 => 40,  88 => 38,  78 => 22,  38 => 7,  21 => 1,  94 => 33,  89 => 38,  85 => 34,  75 => 31,  68 => 28,  56 => 12,  27 => 5,  46 => 11,  26 => 2,  24 => 7,  44 => 18,  31 => 4,  25 => 4,  19 => 1,  79 => 33,  72 => 31,  69 => 18,  47 => 10,  40 => 11,  37 => 8,  22 => 3,  246 => 101,  157 => 65,  145 => 65,  139 => 63,  131 => 59,  123 => 47,  120 => 53,  115 => 51,  111 => 49,  108 => 36,  101 => 44,  98 => 43,  96 => 32,  83 => 35,  74 => 20,  66 => 29,  55 => 21,  52 => 12,  50 => 11,  43 => 9,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 81,  193 => 77,  189 => 81,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 50,  130 => 58,  125 => 56,  122 => 43,  116 => 51,  112 => 47,  109 => 46,  106 => 36,  103 => 45,  99 => 35,  95 => 90,  92 => 33,  86 => 28,  82 => 47,  80 => 35,  73 => 30,  64 => 16,  60 => 26,  57 => 13,  54 => 12,  51 => 20,  48 => 19,  45 => 10,  42 => 10,  39 => 9,  36 => 2,  33 => 7,  30 => 1,);
    }
}
