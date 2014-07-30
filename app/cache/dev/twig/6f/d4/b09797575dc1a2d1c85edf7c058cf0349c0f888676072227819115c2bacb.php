<?php

/* ThiefaineReferentielBundle:Utilisateurweb:index.html.twig */
class __TwigTemplate_6fd4b09797575dc1a2d1c85edf7c058cf0349c0f888676072227819115c2bacb extends Twig_Template
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
        <h3>Gestion des utilisateurs</h3>
        <table class=\"records_list table table-hover\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Groupe</th>
                    <th>Email</th>
                    <th>Infos</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurweb_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                            </a>
                            ";
            // line 25
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method") == false)) {
                // line 26
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurweb_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cet utilisateur ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                            ";
            }
            // line 30
            echo "                        </td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 36
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name"), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "infos");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Utilisateurweb:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  65 => 15,  184 => 65,  160 => 53,  110 => 33,  161 => 32,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  200 => 80,  197 => 79,  192 => 76,  76 => 24,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 56,  180 => 53,  170 => 57,  146 => 48,  134 => 51,  126 => 40,  90 => 15,  77 => 19,  70 => 19,  53 => 14,  175 => 71,  167 => 84,  150 => 49,  129 => 21,  114 => 53,  104 => 39,  100 => 29,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 61,  169 => 60,  140 => 45,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 27,  67 => 24,  63 => 17,  59 => 17,  87 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 56,  163 => 45,  158 => 67,  156 => 52,  151 => 57,  142 => 24,  138 => 23,  136 => 44,  121 => 46,  117 => 43,  105 => 40,  91 => 27,  62 => 25,  49 => 7,  93 => 36,  88 => 35,  78 => 10,  38 => 8,  21 => 1,  94 => 33,  89 => 24,  85 => 25,  75 => 31,  68 => 16,  56 => 22,  27 => 5,  46 => 6,  26 => 5,  24 => 7,  44 => 9,  31 => 4,  25 => 4,  19 => 1,  79 => 32,  72 => 30,  69 => 25,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 30,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 37,  115 => 42,  111 => 40,  108 => 40,  101 => 38,  98 => 28,  96 => 28,  83 => 33,  74 => 23,  66 => 18,  55 => 7,  52 => 20,  50 => 13,  43 => 5,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 69,  164 => 68,  162 => 57,  154 => 29,  149 => 56,  147 => 58,  144 => 69,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 23,  116 => 36,  112 => 42,  109 => 39,  106 => 32,  103 => 6,  99 => 36,  95 => 90,  92 => 36,  86 => 23,  82 => 23,  80 => 30,  73 => 20,  64 => 26,  60 => 9,  57 => 11,  54 => 16,  51 => 11,  48 => 19,  45 => 17,  42 => 8,  39 => 12,  36 => 2,  33 => 1,  30 => 2,);
    }
}
