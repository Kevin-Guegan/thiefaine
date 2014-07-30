<?php

/* ThiefaineReferentielBundle:Categorie:show.html.twig */
class __TwigTemplate_e79dd7a31f4c87df1d92964f918a5deca9ccba58ff788c951c488836cda496c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Categorie</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Categorie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 45,  113 => 41,  81 => 21,  65 => 15,  184 => 65,  160 => 53,  110 => 33,  161 => 32,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 98,  233 => 97,  226 => 95,  213 => 90,  200 => 80,  197 => 79,  192 => 76,  76 => 24,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 71,  202 => 81,  185 => 56,  180 => 53,  170 => 57,  146 => 48,  134 => 51,  126 => 40,  90 => 28,  77 => 19,  70 => 19,  53 => 14,  175 => 71,  167 => 84,  150 => 49,  129 => 21,  114 => 53,  104 => 39,  100 => 29,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 69,  177 => 61,  169 => 60,  140 => 45,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 91,  208 => 68,  204 => 72,  179 => 72,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 30,  67 => 24,  63 => 15,  59 => 17,  87 => 25,  28 => 3,  201 => 92,  196 => 90,  183 => 73,  171 => 70,  166 => 56,  163 => 45,  158 => 67,  156 => 52,  151 => 57,  142 => 24,  138 => 51,  136 => 44,  121 => 44,  117 => 43,  105 => 40,  91 => 27,  62 => 25,  49 => 8,  93 => 36,  88 => 35,  78 => 22,  38 => 8,  21 => 1,  94 => 33,  89 => 24,  85 => 25,  75 => 31,  68 => 18,  56 => 21,  27 => 5,  46 => 14,  26 => 5,  24 => 7,  44 => 9,  31 => 4,  25 => 4,  19 => 1,  79 => 32,  72 => 30,  69 => 25,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 30,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 37,  115 => 42,  111 => 40,  108 => 40,  101 => 38,  98 => 33,  96 => 28,  83 => 33,  74 => 23,  66 => 18,  55 => 12,  52 => 20,  50 => 13,  43 => 5,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 67,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 69,  164 => 68,  162 => 57,  154 => 29,  149 => 56,  147 => 58,  144 => 69,  141 => 48,  133 => 48,  130 => 41,  125 => 60,  122 => 23,  116 => 36,  112 => 42,  109 => 39,  106 => 38,  103 => 6,  99 => 36,  95 => 90,  92 => 36,  86 => 27,  82 => 23,  80 => 30,  73 => 20,  64 => 26,  60 => 9,  57 => 11,  54 => 16,  51 => 11,  48 => 19,  45 => 7,  42 => 8,  39 => 10,  36 => 2,  33 => 1,  30 => 2,);
    }
}
