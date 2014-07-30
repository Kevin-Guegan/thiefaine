<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0b6a5a1d8f78182d1fa959053509b0ac47f31144c63e31edee96a6e4e7450060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  626 => 443,  616 => 440,  591 => 436,  587 => 434,  578 => 432,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  514 => 415,  271 => 190,  251 => 182,  249 => 181,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  188 => 76,  462 => 202,  446 => 197,  441 => 196,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  338 => 135,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  303 => 122,  300 => 121,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  181 => 65,  153 => 69,  386 => 159,  380 => 160,  371 => 156,  367 => 155,  363 => 153,  361 => 146,  358 => 151,  353 => 149,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 125,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  281 => 114,  276 => 193,  274 => 110,  259 => 103,  253 => 100,  248 => 94,  222 => 83,  194 => 70,  155 => 47,  195 => 71,  223 => 94,  211 => 90,  165 => 83,  137 => 59,  127 => 35,  232 => 88,  207 => 75,  261 => 108,  231 => 90,  216 => 79,  210 => 77,  206 => 77,  190 => 70,  218 => 87,  191 => 77,  186 => 69,  215 => 87,  212 => 86,  178 => 64,  172 => 62,  152 => 46,  148 => 67,  118 => 49,  97 => 42,  124 => 53,  113 => 48,  81 => 23,  65 => 28,  184 => 63,  160 => 54,  110 => 37,  161 => 56,  687 => 297,  683 => 295,  634 => 456,  628 => 444,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 439,  579 => 229,  574 => 431,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 419,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 198,  439 => 195,  436 => 188,  434 => 187,  431 => 189,  426 => 183,  417 => 179,  408 => 176,  404 => 176,  396 => 173,  389 => 160,  378 => 157,  376 => 161,  373 => 156,  359 => 154,  351 => 141,  347 => 151,  344 => 150,  327 => 138,  325 => 129,  317 => 133,  311 => 132,  301 => 128,  297 => 200,  293 => 198,  289 => 196,  286 => 112,  279 => 122,  265 => 105,  263 => 109,  260 => 108,  255 => 101,  237 => 93,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  197 => 71,  192 => 78,  76 => 25,  527 => 416,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 140,  342 => 137,  340 => 145,  280 => 194,  20 => 1,  34 => 5,  23 => 2,  205 => 71,  202 => 94,  185 => 75,  180 => 62,  170 => 84,  146 => 62,  134 => 54,  126 => 47,  90 => 26,  77 => 20,  70 => 19,  53 => 12,  175 => 58,  167 => 71,  150 => 55,  129 => 41,  114 => 53,  104 => 42,  100 => 38,  84 => 40,  58 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 124,  309 => 129,  305 => 129,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 100,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 74,  169 => 60,  140 => 63,  132 => 58,  128 => 44,  107 => 46,  61 => 17,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 89,  230 => 96,  227 => 86,  224 => 91,  221 => 77,  219 => 88,  217 => 92,  208 => 76,  204 => 78,  179 => 72,  159 => 66,  143 => 55,  135 => 44,  119 => 40,  102 => 41,  71 => 24,  67 => 20,  63 => 18,  59 => 16,  87 => 34,  28 => 3,  201 => 80,  196 => 92,  183 => 77,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 52,  142 => 49,  138 => 56,  136 => 71,  121 => 50,  117 => 51,  105 => 34,  91 => 33,  62 => 12,  49 => 14,  93 => 27,  88 => 32,  78 => 34,  38 => 7,  21 => 1,  94 => 21,  89 => 33,  85 => 23,  75 => 21,  68 => 30,  56 => 11,  27 => 3,  46 => 13,  26 => 2,  24 => 7,  44 => 10,  31 => 4,  25 => 4,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 11,  40 => 11,  37 => 5,  22 => 3,  246 => 136,  157 => 55,  145 => 74,  139 => 45,  131 => 44,  123 => 61,  120 => 31,  115 => 36,  111 => 47,  108 => 36,  101 => 44,  98 => 45,  96 => 37,  83 => 33,  74 => 26,  66 => 18,  55 => 13,  52 => 12,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 89,  203 => 73,  199 => 93,  193 => 77,  189 => 66,  187 => 66,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 63,  149 => 56,  147 => 75,  144 => 42,  141 => 73,  133 => 50,  130 => 46,  125 => 51,  122 => 43,  116 => 57,  112 => 47,  109 => 52,  106 => 51,  103 => 44,  99 => 31,  95 => 40,  92 => 43,  86 => 23,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 12,  54 => 22,  51 => 13,  48 => 19,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
