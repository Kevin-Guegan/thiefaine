<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f3fa1e46a6793a2c3149e6b2d69bf2b3142f6ab86aae1ff48239f4f61ba58b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  205 => 71,  202 => 70,  185 => 56,  180 => 53,  170 => 48,  146 => 25,  134 => 22,  126 => 20,  90 => 69,  77 => 45,  70 => 40,  53 => 28,  150 => 26,  129 => 21,  114 => 53,  104 => 46,  100 => 5,  84 => 50,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 52,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 39,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  28 => 3,  87 => 25,  21 => 2,  38 => 8,  25 => 5,  93 => 70,  88 => 52,  78 => 21,  46 => 14,  44 => 8,  31 => 4,  26 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 46,  163 => 45,  158 => 67,  156 => 38,  151 => 63,  142 => 24,  138 => 23,  136 => 56,  121 => 46,  117 => 54,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 28,  89 => 38,  85 => 25,  75 => 30,  68 => 38,  56 => 9,  27 => 5,  24 => 7,  19 => 2,  79 => 47,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 17,  115 => 43,  111 => 15,  108 => 14,  101 => 32,  98 => 28,  96 => 31,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 21,  50 => 15,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 72,  164 => 83,  162 => 57,  154 => 76,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 43,  116 => 16,  112 => 42,  109 => 34,  106 => 36,  103 => 6,  99 => 31,  95 => 90,  92 => 39,  86 => 28,  82 => 48,  80 => 19,  73 => 19,  64 => 23,  60 => 6,  57 => 11,  54 => 16,  51 => 20,  48 => 12,  45 => 17,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
