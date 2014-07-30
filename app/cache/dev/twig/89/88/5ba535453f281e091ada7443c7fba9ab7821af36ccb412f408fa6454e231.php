<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_89885ba535453f281e091ada7443c7fba9ab7821af36ccb412f408fa6454e231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  626 => 443,  616 => 440,  591 => 436,  587 => 434,  578 => 432,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  514 => 415,  271 => 190,  251 => 182,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  356 => 122,  333 => 115,  324 => 112,  313 => 110,  249 => 181,  234 => 90,  174 => 74,  386 => 159,  371 => 127,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  281 => 98,  276 => 193,  274 => 96,  259 => 103,  253 => 100,  222 => 83,  155 => 55,  462 => 202,  446 => 197,  441 => 196,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  380 => 158,  361 => 152,  338 => 116,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 111,  303 => 122,  300 => 121,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  194 => 68,  181 => 65,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  153 => 69,  367 => 155,  353 => 121,  350 => 120,  308 => 109,  306 => 286,  184 => 63,  110 => 38,  81 => 24,  232 => 89,  223 => 94,  211 => 90,  165 => 60,  207 => 76,  127 => 35,  137 => 55,  113 => 48,  65 => 17,  228 => 96,  195 => 71,  188 => 76,  218 => 87,  191 => 77,  215 => 87,  212 => 86,  178 => 59,  172 => 68,  148 => 67,  118 => 49,  97 => 38,  261 => 108,  231 => 97,  216 => 79,  210 => 77,  206 => 84,  190 => 70,  186 => 72,  160 => 55,  124 => 45,  152 => 54,  687 => 297,  683 => 295,  634 => 456,  628 => 444,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 439,  579 => 229,  574 => 431,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 419,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 198,  439 => 195,  436 => 188,  434 => 187,  431 => 189,  426 => 183,  417 => 143,  408 => 176,  404 => 176,  396 => 173,  389 => 160,  378 => 157,  376 => 161,  373 => 156,  359 => 123,  351 => 141,  347 => 119,  344 => 150,  327 => 138,  325 => 129,  317 => 133,  311 => 132,  301 => 128,  297 => 200,  293 => 198,  289 => 196,  286 => 112,  279 => 122,  265 => 105,  263 => 109,  260 => 108,  255 => 101,  237 => 91,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  197 => 69,  192 => 76,  76 => 31,  161 => 58,  527 => 416,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 140,  342 => 137,  340 => 145,  280 => 194,  20 => 1,  34 => 5,  23 => 4,  205 => 71,  202 => 94,  185 => 75,  180 => 70,  170 => 56,  146 => 56,  134 => 54,  126 => 47,  90 => 27,  77 => 20,  70 => 19,  53 => 11,  175 => 58,  167 => 71,  150 => 55,  129 => 58,  114 => 36,  104 => 31,  100 => 36,  84 => 25,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 172,  387 => 164,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 136,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 100,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 60,  140 => 47,  132 => 58,  128 => 42,  107 => 37,  61 => 15,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 89,  230 => 96,  227 => 86,  224 => 90,  221 => 80,  219 => 76,  217 => 92,  208 => 76,  204 => 75,  179 => 72,  159 => 57,  143 => 55,  135 => 46,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 18,  59 => 13,  28 => 3,  87 => 26,  21 => 2,  38 => 7,  25 => 4,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 8,  31 => 4,  26 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 62,  142 => 49,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 29,  62 => 14,  49 => 12,  94 => 21,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  27 => 3,  24 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 21,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 64,  145 => 74,  139 => 54,  131 => 59,  123 => 42,  120 => 38,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 37,  83 => 33,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 5,  29 => 3,  209 => 89,  203 => 73,  199 => 93,  193 => 79,  189 => 66,  187 => 66,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 56,  147 => 51,  144 => 42,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 39,  112 => 39,  109 => 27,  106 => 51,  103 => 45,  99 => 23,  95 => 27,  92 => 31,  86 => 27,  82 => 26,  80 => 24,  73 => 16,  64 => 17,  60 => 20,  57 => 20,  54 => 15,  51 => 13,  48 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
