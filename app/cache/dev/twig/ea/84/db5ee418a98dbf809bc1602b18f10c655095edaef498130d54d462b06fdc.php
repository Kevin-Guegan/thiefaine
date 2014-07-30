<?php

/* ThiefaineReferentielBundle:Conseil:index.html.twig */
class __TwigTemplate_ea84db5ee418a98dbf809bc1602b18f10c655095edaef498130d54d462b06fdc extends Twig_Template
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
        echo "        <div class=\"content col-md-9\">

            <h3>Gestion des conseils</h3>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Actions</th>
                    <th>Titre <span class=\"glyphicon cheveron-down\" title=\"Trier par titre\"></span></th>
                    <th>Date création <span class=\"glyphicon cheveron-down\" title=\"Trier par date de création\"></span></th>
                    <th>Date de validité <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
                    <th>Photo <span class=\"glyphicon cheveron-down\" title=\"Trier par photo\"></span></th>
                    <th>Lien <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) ? $context["conseils"] : $this->getContext($context, "conseils")));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 22
            echo "                    <tr>
                        <td>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conseil_edit", array("id" => $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "id"))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                                </a>

                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conseil_delete", array("id" => $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce conseil ?')\">
                                    <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                                </a>
                        </td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datecreation"), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datevalidite"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datevalidite"), "d/m/Y"))), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                        </td>
                        <td>
                        ";
            // line 39
            if ($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "urlphoto")) {
                // line 40
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 42
                echo "                            -
                        ";
            }
            // line 44
            echo "                        </td>
                        <td>
                        ";
            // line 46
            if ($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "urllien")) {
                // line 47
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 49
                echo "                            -
                        ";
            }
            // line 51
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>

            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "                <div class=\"flash-notice\">
                    ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Conseil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  223 => 94,  211 => 90,  165 => 68,  137 => 59,  127 => 43,  232 => 101,  207 => 78,  261 => 108,  231 => 90,  216 => 81,  210 => 85,  206 => 77,  190 => 70,  218 => 87,  191 => 80,  186 => 69,  215 => 87,  212 => 86,  178 => 64,  172 => 64,  152 => 53,  148 => 67,  118 => 40,  97 => 42,  124 => 53,  113 => 49,  81 => 23,  65 => 28,  184 => 73,  160 => 54,  110 => 37,  161 => 56,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 93,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 82,  192 => 78,  76 => 33,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 82,  185 => 78,  180 => 62,  170 => 58,  146 => 62,  134 => 58,  126 => 47,  90 => 29,  77 => 24,  70 => 30,  53 => 11,  175 => 71,  167 => 59,  150 => 50,  129 => 41,  114 => 53,  104 => 34,  100 => 38,  84 => 22,  58 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 107,  229 => 94,  220 => 82,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 58,  128 => 44,  107 => 46,  61 => 24,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 98,  230 => 96,  227 => 81,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 85,  204 => 77,  179 => 72,  159 => 66,  143 => 55,  135 => 44,  119 => 37,  102 => 29,  71 => 20,  67 => 35,  63 => 15,  59 => 13,  87 => 25,  28 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 60,  166 => 57,  163 => 45,  158 => 59,  156 => 53,  151 => 52,  142 => 49,  138 => 48,  136 => 61,  121 => 40,  117 => 51,  105 => 40,  91 => 27,  62 => 13,  49 => 12,  93 => 39,  88 => 38,  78 => 22,  38 => 5,  21 => 1,  94 => 28,  89 => 38,  85 => 36,  75 => 21,  68 => 19,  56 => 11,  27 => 5,  46 => 7,  26 => 2,  24 => 7,  44 => 18,  31 => 4,  25 => 4,  19 => 1,  79 => 21,  72 => 32,  69 => 17,  47 => 10,  40 => 11,  37 => 5,  22 => 3,  246 => 101,  157 => 55,  145 => 65,  139 => 45,  131 => 44,  123 => 47,  120 => 53,  115 => 36,  111 => 36,  108 => 36,  101 => 44,  98 => 43,  96 => 32,  83 => 22,  74 => 19,  66 => 18,  55 => 21,  52 => 12,  50 => 21,  43 => 9,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 81,  193 => 77,  189 => 81,  187 => 66,  182 => 66,  176 => 61,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 57,  125 => 54,  122 => 43,  116 => 51,  112 => 47,  109 => 47,  106 => 36,  103 => 44,  99 => 42,  95 => 40,  92 => 33,  86 => 23,  82 => 47,  80 => 34,  73 => 30,  64 => 14,  60 => 26,  57 => 12,  54 => 22,  51 => 10,  48 => 19,  45 => 7,  42 => 6,  39 => 9,  36 => 2,  33 => 4,  30 => 3,);
    }
}
