<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c1c50ba9f573c8fac29f61daf843369b63276c1a4b7031bd04aba2fafb8c092f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  184 => 67,  110 => 37,  81 => 23,  232 => 101,  223 => 94,  211 => 90,  165 => 68,  127 => 45,  137 => 55,  113 => 40,  65 => 11,  218 => 87,  191 => 80,  178 => 69,  198 => 81,  194 => 73,  148 => 67,  118 => 40,  97 => 30,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 53,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 86,  192 => 78,  175 => 71,  76 => 24,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 83,  202 => 82,  185 => 78,  180 => 66,  170 => 59,  146 => 56,  134 => 58,  126 => 47,  90 => 29,  77 => 25,  70 => 26,  53 => 17,  150 => 57,  129 => 58,  114 => 53,  104 => 37,  100 => 36,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 86,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 44,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 95,  224 => 71,  221 => 86,  219 => 89,  217 => 92,  208 => 68,  204 => 81,  179 => 71,  159 => 66,  143 => 55,  135 => 61,  119 => 44,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 20,  28 => 6,  87 => 33,  21 => 1,  38 => 7,  25 => 4,  93 => 32,  88 => 38,  78 => 18,  46 => 34,  44 => 11,  31 => 4,  26 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 54,  151 => 62,  142 => 49,  138 => 48,  136 => 46,  121 => 45,  117 => 43,  105 => 45,  91 => 35,  62 => 24,  49 => 14,  94 => 28,  89 => 26,  85 => 23,  75 => 28,  68 => 12,  56 => 14,  27 => 5,  24 => 2,  19 => 1,  79 => 29,  72 => 31,  69 => 11,  47 => 15,  40 => 11,  37 => 6,  22 => 3,  246 => 101,  157 => 64,  145 => 60,  139 => 54,  131 => 59,  123 => 47,  120 => 39,  115 => 51,  111 => 35,  108 => 40,  101 => 31,  98 => 43,  96 => 30,  83 => 30,  74 => 26,  66 => 25,  55 => 38,  52 => 20,  50 => 15,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 67,  193 => 77,  189 => 81,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 58,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 43,  125 => 47,  122 => 43,  116 => 38,  112 => 47,  109 => 46,  106 => 36,  103 => 45,  99 => 40,  95 => 26,  92 => 28,  86 => 28,  82 => 23,  80 => 29,  73 => 23,  64 => 26,  60 => 20,  57 => 39,  54 => 11,  51 => 37,  48 => 10,  45 => 14,  42 => 12,  39 => 10,  36 => 9,  33 => 4,  30 => 5,);
    }
}
