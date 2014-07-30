<?php

/* ThiefaineReferentielBundle:Pages:conseil.html.twig */
class __TwigTemplate_162e34ae7ffad9d8c25b50837479a7b257823b79c57da93e41bab934f367bb76 extends Twig_Template
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
        echo "\t<div class=\"content\">
\t\t<h3>Gestion des conseils</h3>
\t\t<table class=\"table table-hover\">
\t\t  <tr>
\t\t  \t<th>Actions</th>
\t\t  \t<th>Titre <span class=\"glyphicon cheveron-down\" title=\"Trier par date\"></span></th>
\t\t  \t<th>Date création <span class=\"glyphicon cheveron-down\" title=\"Trier par date de création\"></span></th>
\t\t  \t<th>Date de validité <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
\t\t  </tr>

\t\t  <tr>
\t\t  \t<td data-element=\"Conseil n°0\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-eye-open showElement\" title=\"Visualiser\"></span>
\t\t  \t</td>
\t\t  \t<td>Conseil n°0</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  </tr>

\t\t  <tr>
\t\t  \t<td data-element=\"Conseil n°1\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-eye-open showElement\" title=\"Visualiser\"></span>
\t\t  \t</td>
\t\t  \t<td>Conseil n°1</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  </tr>

\t\t  <tr>
\t\t  \t<td data-element=\"Conseil n°2\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-eye-open showElement\" title=\"Visualiser\"></span>
\t\t  \t</td>
\t\t  \t<td>Conseil n°2</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  \t<td>jj/mm/aa</td>
\t\t  </tr>

\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:conseil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 55,  127 => 45,  232 => 97,  207 => 84,  261 => 108,  231 => 90,  216 => 81,  210 => 85,  206 => 77,  190 => 70,  218 => 87,  191 => 76,  186 => 69,  215 => 87,  212 => 86,  178 => 70,  172 => 64,  152 => 53,  148 => 52,  118 => 40,  97 => 30,  124 => 42,  113 => 41,  81 => 23,  65 => 16,  184 => 73,  160 => 58,  110 => 37,  161 => 72,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 93,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 86,  192 => 78,  76 => 33,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 1,  205 => 71,  202 => 82,  185 => 56,  180 => 66,  170 => 62,  146 => 56,  134 => 60,  126 => 47,  90 => 29,  77 => 22,  70 => 30,  53 => 11,  175 => 71,  167 => 61,  150 => 62,  129 => 21,  114 => 53,  104 => 34,  100 => 42,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 77,  229 => 94,  220 => 82,  214 => 69,  177 => 61,  169 => 60,  140 => 63,  132 => 45,  128 => 44,  107 => 34,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 98,  230 => 96,  227 => 81,  224 => 91,  221 => 77,  219 => 88,  217 => 91,  208 => 85,  204 => 81,  179 => 72,  159 => 39,  143 => 55,  135 => 53,  119 => 22,  102 => 21,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  87 => 26,  28 => 3,  201 => 80,  196 => 73,  183 => 73,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 57,  151 => 57,  142 => 49,  138 => 48,  136 => 61,  121 => 50,  117 => 43,  105 => 45,  91 => 27,  62 => 25,  49 => 17,  93 => 36,  88 => 38,  78 => 22,  38 => 5,  21 => 1,  94 => 33,  89 => 24,  85 => 34,  75 => 23,  68 => 19,  56 => 12,  27 => 5,  46 => 7,  26 => 5,  24 => 7,  44 => 11,  31 => 4,  25 => 4,  19 => 1,  79 => 22,  72 => 31,  69 => 18,  47 => 18,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 64,  145 => 60,  139 => 54,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 35,  108 => 36,  101 => 31,  98 => 43,  96 => 32,  83 => 36,  74 => 20,  66 => 29,  55 => 21,  52 => 23,  50 => 8,  43 => 5,  41 => 6,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 83,  199 => 81,  193 => 77,  189 => 81,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 63,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 46,  130 => 58,  125 => 60,  122 => 43,  116 => 51,  112 => 47,  109 => 46,  106 => 36,  103 => 6,  99 => 36,  95 => 90,  92 => 40,  86 => 28,  82 => 25,  80 => 35,  73 => 20,  64 => 15,  60 => 26,  57 => 13,  54 => 12,  51 => 19,  48 => 10,  45 => 9,  42 => 6,  39 => 6,  36 => 2,  33 => 4,  30 => 3,);
    }
}
