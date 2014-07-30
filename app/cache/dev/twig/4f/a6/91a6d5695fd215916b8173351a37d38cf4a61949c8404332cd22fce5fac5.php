<?php

/* ThiefaineReferentielBundle:Information:index.html.twig */
class __TwigTemplate_4fa691a6d5695fd215916b8173351a37d38cf4a61949c8404332cd22fce5fac5 extends Twig_Template
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

            <h3>Gestion des informations</h3>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Actions</th>
                    <th>Titre <span class=\"glyphicon cheveron-down\" title=\"Trier par titre\"></span></th>
                    <th>Date création <span class=\"glyphicon cheveron-down\" title=\"Trier par date de création\"></span></th>
                    <th>Date de validité <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Zone <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
                    <th>Photo <span class=\"glyphicon cheveron-down\" title=\"Trier par photo\"></span></th>
                    <th>Lien <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                    <th>Alerte <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : $this->getContext($context, "informations")));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 24
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_show", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-eye-open\" title=\"Visionner\"></span>
                            </a>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_delete", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cette information ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_clone", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-th-large\" title=\"Cloner\"></span>
                            </a
                        </td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datecreation"), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datevalidite"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datevalidite"), "d/m/Y"))), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : null), "zone", array(), "any", false, true), "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : null), "zone", array(), "any", false, true), "nom"), "-")) : ("-")), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                        </td>
                        <td>
                        ";
            // line 46
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "urlphoto")) {
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
                        <td>
                        ";
            // line 53
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "urllien")) {
                // line 54
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 56
                echo "                            -
                        ";
            }
            // line 58
            echo "                        </td>
                        <td>
                        ";
            // line 60
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "alerte")) {
                // line 61
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 63
                echo "                            -
                        ";
            }
            // line 65
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>

            ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 72
            echo "                <div class=\"flash-notice\">
                    ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 68,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  200 => 80,  197 => 79,  192 => 76,  76 => 24,  161 => 72,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 56,  180 => 53,  170 => 48,  146 => 55,  134 => 60,  126 => 56,  90 => 15,  77 => 45,  70 => 40,  53 => 14,  175 => 71,  167 => 84,  150 => 26,  129 => 21,  114 => 53,  104 => 41,  100 => 39,  84 => 13,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 52,  169 => 60,  140 => 63,  132 => 51,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 27,  67 => 24,  63 => 15,  59 => 17,  28 => 3,  87 => 38,  21 => 2,  38 => 8,  25 => 4,  93 => 36,  88 => 31,  78 => 10,  46 => 11,  44 => 9,  31 => 4,  26 => 2,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 46,  163 => 45,  158 => 67,  156 => 38,  151 => 57,  142 => 24,  138 => 23,  136 => 61,  121 => 46,  117 => 47,  105 => 40,  91 => 27,  62 => 18,  49 => 5,  94 => 33,  89 => 34,  85 => 25,  75 => 28,  68 => 20,  56 => 24,  27 => 5,  24 => 7,  19 => 1,  79 => 36,  72 => 32,  69 => 25,  47 => 17,  40 => 8,  37 => 8,  22 => 3,  246 => 101,  157 => 71,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 40,  108 => 47,  101 => 73,  98 => 43,  96 => 17,  83 => 37,  74 => 23,  66 => 29,  55 => 15,  52 => 23,  50 => 13,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 98,  187 => 84,  182 => 66,  176 => 64,  173 => 76,  168 => 69,  164 => 73,  162 => 57,  154 => 29,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 55,  130 => 58,  125 => 60,  122 => 54,  116 => 51,  112 => 49,  109 => 39,  106 => 46,  103 => 6,  99 => 36,  95 => 90,  92 => 40,  86 => 30,  82 => 12,  80 => 30,  73 => 19,  64 => 23,  60 => 26,  57 => 11,  54 => 16,  51 => 20,  48 => 12,  45 => 17,  42 => 8,  39 => 12,  36 => 5,  33 => 9,  30 => 5,);
    }
}
