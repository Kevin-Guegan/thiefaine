<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f26efceed09d3efa5c81158da177844f99084eed0294f39c56ff584265e48e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 159,  380 => 158,  371 => 156,  367 => 155,  363 => 153,  361 => 152,  358 => 151,  353 => 149,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 131,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  281 => 114,  276 => 111,  274 => 110,  259 => 103,  253 => 100,  248 => 97,  222 => 83,  194 => 68,  155 => 47,  195 => 71,  223 => 94,  211 => 90,  165 => 68,  137 => 59,  127 => 35,  232 => 88,  207 => 78,  261 => 108,  231 => 90,  216 => 79,  210 => 77,  206 => 77,  190 => 70,  218 => 87,  191 => 67,  186 => 69,  215 => 87,  212 => 86,  178 => 59,  172 => 57,  152 => 46,  148 => 67,  118 => 40,  97 => 42,  124 => 53,  113 => 49,  81 => 23,  65 => 28,  184 => 63,  160 => 54,  110 => 37,  161 => 56,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 160,  378 => 157,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 120,  289 => 125,  286 => 124,  279 => 122,  265 => 105,  263 => 109,  260 => 108,  255 => 101,  237 => 93,  233 => 97,  226 => 93,  213 => 78,  200 => 74,  197 => 69,  192 => 78,  76 => 17,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 145,  280 => 202,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 82,  185 => 78,  180 => 62,  170 => 56,  146 => 62,  134 => 39,  126 => 47,  90 => 20,  77 => 27,  70 => 15,  53 => 19,  175 => 58,  167 => 59,  150 => 50,  129 => 41,  114 => 53,  104 => 34,  100 => 38,  84 => 22,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 130,  309 => 129,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 93,  229 => 87,  220 => 82,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 58,  128 => 44,  107 => 46,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 89,  230 => 96,  227 => 86,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 76,  204 => 77,  179 => 72,  159 => 66,  143 => 55,  135 => 44,  119 => 37,  102 => 24,  71 => 24,  67 => 14,  63 => 21,  59 => 20,  87 => 25,  28 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 60,  166 => 54,  163 => 53,  158 => 59,  156 => 53,  151 => 52,  142 => 49,  138 => 48,  136 => 61,  121 => 40,  117 => 51,  105 => 25,  91 => 27,  62 => 20,  49 => 14,  93 => 39,  88 => 38,  78 => 34,  38 => 7,  21 => 1,  94 => 21,  89 => 33,  85 => 38,  75 => 21,  68 => 19,  56 => 11,  27 => 5,  46 => 13,  26 => 2,  24 => 7,  44 => 18,  31 => 4,  25 => 4,  19 => 1,  79 => 18,  72 => 32,  69 => 17,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 96,  157 => 55,  145 => 65,  139 => 45,  131 => 44,  123 => 47,  120 => 31,  115 => 36,  111 => 36,  108 => 36,  101 => 44,  98 => 43,  96 => 38,  83 => 22,  74 => 26,  66 => 18,  55 => 9,  52 => 18,  50 => 18,  43 => 9,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 89,  203 => 73,  199 => 81,  193 => 77,  189 => 66,  187 => 66,  182 => 66,  176 => 61,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 63,  149 => 56,  147 => 43,  144 => 42,  141 => 48,  133 => 50,  130 => 57,  125 => 54,  122 => 43,  116 => 51,  112 => 47,  109 => 27,  106 => 36,  103 => 44,  99 => 23,  95 => 40,  92 => 35,  86 => 23,  82 => 19,  80 => 29,  73 => 16,  64 => 14,  60 => 22,  57 => 12,  54 => 22,  51 => 10,  48 => 19,  45 => 16,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
