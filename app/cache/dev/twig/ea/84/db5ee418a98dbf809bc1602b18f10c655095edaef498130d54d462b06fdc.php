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
        return array (  137 => 59,  113 => 49,  65 => 28,  228 => 96,  195 => 80,  188 => 77,  218 => 87,  191 => 76,  215 => 87,  212 => 86,  178 => 69,  172 => 64,  148 => 52,  118 => 40,  97 => 31,  261 => 108,  231 => 97,  216 => 81,  210 => 78,  206 => 84,  190 => 70,  186 => 74,  160 => 58,  124 => 42,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 99,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 79,  192 => 76,  76 => 33,  161 => 72,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 82,  185 => 56,  180 => 72,  170 => 62,  146 => 62,  134 => 58,  126 => 56,  90 => 15,  77 => 45,  70 => 40,  53 => 14,  175 => 71,  167 => 84,  150 => 54,  129 => 21,  114 => 53,  104 => 34,  100 => 33,  84 => 13,  58 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 77,  229 => 94,  220 => 90,  214 => 69,  177 => 52,  169 => 60,  140 => 63,  132 => 45,  128 => 44,  107 => 46,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 90,  221 => 77,  219 => 76,  217 => 91,  208 => 85,  204 => 81,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 21,  67 => 24,  63 => 15,  59 => 13,  28 => 3,  87 => 27,  21 => 2,  38 => 5,  25 => 4,  93 => 39,  88 => 31,  78 => 10,  46 => 7,  44 => 9,  31 => 4,  26 => 2,  201 => 80,  196 => 73,  183 => 73,  171 => 70,  166 => 61,  163 => 45,  158 => 56,  156 => 57,  151 => 57,  142 => 49,  138 => 48,  136 => 61,  121 => 41,  117 => 51,  105 => 40,  91 => 28,  62 => 14,  49 => 5,  94 => 33,  89 => 34,  85 => 36,  75 => 23,  68 => 20,  56 => 12,  27 => 5,  24 => 7,  19 => 1,  79 => 22,  72 => 32,  69 => 18,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 71,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 36,  108 => 36,  101 => 32,  98 => 43,  96 => 31,  83 => 37,  74 => 20,  66 => 19,  55 => 15,  52 => 23,  50 => 21,  43 => 12,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 83,  199 => 82,  193 => 79,  189 => 75,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 63,  164 => 73,  162 => 60,  154 => 29,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 46,  130 => 57,  125 => 54,  122 => 41,  116 => 38,  112 => 37,  109 => 47,  106 => 46,  103 => 44,  99 => 42,  95 => 40,  92 => 40,  86 => 30,  82 => 25,  80 => 34,  73 => 19,  64 => 15,  60 => 26,  57 => 13,  54 => 22,  51 => 11,  48 => 12,  45 => 7,  42 => 6,  39 => 12,  36 => 5,  33 => 4,  30 => 3,);
    }
}
