<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_4cd5da707369ce830a8f19ebeb21dcae432e2856658b5dee04bcb0608f6c48f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
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
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  81 => 33,  223 => 94,  211 => 90,  165 => 68,  127 => 45,  137 => 55,  113 => 40,  65 => 11,  232 => 101,  207 => 84,  184 => 67,  218 => 87,  191 => 80,  178 => 70,  198 => 81,  194 => 73,  148 => 67,  118 => 40,  97 => 38,  251 => 104,  245 => 101,  210 => 85,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 45,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 86,  192 => 78,  76 => 28,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 83,  202 => 82,  185 => 78,  180 => 66,  170 => 59,  146 => 56,  134 => 58,  126 => 47,  90 => 37,  77 => 25,  70 => 26,  53 => 17,  175 => 71,  167 => 61,  150 => 57,  129 => 58,  114 => 53,  104 => 37,  100 => 36,  84 => 27,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 86,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 44,  107 => 34,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 96,  227 => 95,  224 => 91,  221 => 86,  219 => 88,  217 => 92,  208 => 68,  204 => 81,  179 => 71,  159 => 66,  143 => 55,  135 => 61,  119 => 44,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  28 => 3,  87 => 33,  21 => 2,  38 => 6,  25 => 4,  93 => 38,  88 => 35,  78 => 18,  46 => 12,  44 => 11,  31 => 4,  26 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 54,  151 => 62,  142 => 49,  138 => 51,  136 => 46,  121 => 44,  117 => 43,  105 => 45,  91 => 35,  62 => 24,  49 => 14,  94 => 28,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 21,  27 => 7,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 101,  157 => 64,  145 => 60,  139 => 54,  131 => 59,  123 => 47,  120 => 39,  115 => 51,  111 => 40,  108 => 47,  101 => 43,  98 => 33,  96 => 30,  83 => 35,  74 => 26,  66 => 25,  55 => 15,  52 => 20,  50 => 18,  43 => 8,  41 => 6,  35 => 6,  32 => 7,  29 => 3,  209 => 89,  203 => 86,  199 => 81,  193 => 77,  189 => 81,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 58,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 48,  130 => 43,  125 => 47,  122 => 43,  116 => 38,  112 => 47,  109 => 46,  106 => 38,  103 => 45,  99 => 40,  95 => 34,  92 => 28,  86 => 27,  82 => 23,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
