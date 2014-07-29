<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_cd0ff03effb3da9bec68ddd57f51946fdd84a7cf1f5b254c49bb3f8a443f7142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ((!twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ((!twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
                // line 6
                echo "        ";
                if ((!twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 32,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 384,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 259,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 70,  185 => 56,  180 => 53,  170 => 48,  146 => 70,  134 => 22,  126 => 20,  90 => 15,  77 => 45,  70 => 40,  53 => 18,  175 => 90,  167 => 84,  150 => 26,  129 => 21,  114 => 53,  104 => 41,  100 => 39,  84 => 13,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 52,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 91,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 27,  67 => 24,  63 => 15,  59 => 14,  28 => 3,  87 => 25,  21 => 2,  38 => 8,  25 => 4,  93 => 36,  88 => 52,  78 => 10,  46 => 11,  44 => 8,  31 => 5,  26 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 46,  163 => 45,  158 => 67,  156 => 38,  151 => 63,  142 => 24,  138 => 23,  136 => 24,  121 => 46,  117 => 47,  105 => 40,  91 => 27,  62 => 21,  49 => 5,  94 => 28,  89 => 34,  85 => 25,  75 => 28,  68 => 38,  56 => 9,  27 => 5,  24 => 7,  19 => 1,  79 => 47,  72 => 16,  69 => 25,  47 => 17,  40 => 8,  37 => 8,  22 => 3,  246 => 90,  157 => 30,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 17,  115 => 46,  111 => 44,  108 => 43,  101 => 73,  98 => 28,  96 => 17,  83 => 25,  74 => 22,  66 => 18,  55 => 7,  52 => 6,  50 => 15,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 98,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 72,  164 => 83,  162 => 57,  154 => 29,  149 => 51,  147 => 58,  144 => 69,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 23,  116 => 16,  112 => 42,  109 => 34,  106 => 36,  103 => 6,  99 => 31,  95 => 90,  92 => 39,  86 => 33,  82 => 12,  80 => 30,  73 => 19,  64 => 23,  60 => 9,  57 => 11,  54 => 16,  51 => 20,  48 => 12,  45 => 17,  42 => 10,  39 => 12,  36 => 7,  33 => 9,  30 => 5,);
    }
}
