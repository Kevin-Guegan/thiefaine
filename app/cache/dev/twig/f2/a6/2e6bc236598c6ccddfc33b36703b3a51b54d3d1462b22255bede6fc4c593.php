<?php

/* ThiefaineReferentielBundle:Information:clone.html.twig */
class __TwigTemplate_f2a62e6bc236598c6ccddfc33b36703b3a51b54d3d1462b22255bede6fc4c593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/message.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap_filestyle/src/bootstrap-filestyle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 15
        echo "
    <div class=\"content col-md-9\">
        
        <h3>Cloner l'information «";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
        echo "»</h1>

        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'errors');
        echo "

            <div class=\"form-group\">

                <p>
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "titre"), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "titre"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urlphoto"), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urlphoto"), 'widget');
        echo "
                    <a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
                </p>
                <p>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "attachement"), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "attachement"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urllien"), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urllien"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "zone"), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "zone"), 'widget');
        echo "
                </p>
                <p class=\"dateElement\">
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "datevalidite"), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "datevalidite"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "message"), 'label');
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "message"), 'widget');
        echo "
                </p>
                <p class=\"list-form-control\">
                    <label>Notifications</label>
                    <table class=\"table table-hover\">
                        <tr>
                            <td>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "alerte"), 'label');
        echo "
                            </td>
                            <td style=\"text-align: right;\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "alerte"), 'widget');
        echo "
                            </td>
                        </tr>
                    </table>
                </p>

                <p> 
                    <a class=\"btn btn-primary\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_cloneupdate", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
        echo "\">
                        Cloner l'information
                    </a>
                    <a class=\"btn btn-default\" href=";
        // line 73
        echo $this->env->getExtension('routing')->getPath("information");
        echo ">Annuler</a>
                </p>

            </div>

        ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'form_end');
        echo "

        ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 81
            echo "        <p>
        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 84
                echo "                <div class=\"flash-notice\">
                    ";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        </div>
        </p>
        ";
        }
        // line 91
        echo "
    </div>


";
    }

    // line 97
    public function block_modal($context, array $blocks = array())
    {
        // line 98
        echo "    <div id=\"showImageModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                <span aria-hidden=\"true\">&times;</span>
                <span class=\"sr-only\">Fermer</span>
            </button>
            <h4 class=\"modal-title\">Visualisation de l'image</h4>
          </div>
          <div class=\"modal-body\">
            
          </div>
          <div class=\"modal-footer\">
            <a class=\"showFull btn btn-default\" type=\"button\">
                Zoom
                <span class=\"glyphicon glyphicon-resize-full\"></span>
            </a>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:clone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 97,  207 => 84,  184 => 73,  218 => 87,  191 => 76,  178 => 70,  198 => 81,  194 => 79,  148 => 52,  118 => 40,  97 => 31,  251 => 104,  245 => 101,  210 => 85,  206 => 77,  190 => 70,  186 => 74,  160 => 58,  124 => 42,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 80,  192 => 78,  76 => 24,  161 => 72,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 4,  205 => 83,  202 => 82,  185 => 56,  180 => 66,  170 => 62,  146 => 53,  134 => 60,  126 => 56,  90 => 15,  77 => 45,  70 => 40,  53 => 14,  175 => 71,  167 => 84,  150 => 54,  129 => 21,  114 => 53,  104 => 34,  100 => 33,  84 => 13,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 94,  220 => 92,  214 => 86,  177 => 52,  169 => 60,  140 => 63,  132 => 45,  128 => 44,  107 => 35,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 98,  230 => 96,  227 => 95,  224 => 91,  221 => 86,  219 => 88,  217 => 91,  208 => 68,  204 => 81,  179 => 71,  159 => 39,  143 => 56,  135 => 53,  119 => 22,  102 => 21,  71 => 21,  67 => 24,  63 => 15,  59 => 13,  28 => 3,  87 => 27,  21 => 2,  38 => 5,  25 => 4,  93 => 36,  88 => 31,  78 => 10,  46 => 7,  44 => 9,  31 => 4,  26 => 2,  201 => 80,  196 => 73,  183 => 73,  171 => 70,  166 => 61,  163 => 45,  158 => 67,  156 => 57,  151 => 57,  142 => 49,  138 => 48,  136 => 61,  121 => 41,  117 => 47,  105 => 40,  91 => 28,  62 => 14,  49 => 5,  94 => 33,  89 => 34,  85 => 25,  75 => 23,  68 => 20,  56 => 12,  27 => 5,  24 => 7,  19 => 1,  79 => 22,  72 => 32,  69 => 18,  47 => 17,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 71,  145 => 46,  139 => 53,  131 => 50,  123 => 47,  120 => 53,  115 => 42,  111 => 40,  108 => 36,  101 => 32,  98 => 43,  96 => 31,  83 => 37,  74 => 20,  66 => 19,  55 => 15,  52 => 23,  50 => 8,  43 => 12,  41 => 6,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 83,  199 => 81,  193 => 77,  189 => 98,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 63,  164 => 73,  162 => 60,  154 => 29,  149 => 56,  147 => 58,  144 => 65,  141 => 48,  133 => 46,  130 => 45,  125 => 60,  122 => 41,  116 => 38,  112 => 37,  109 => 39,  106 => 46,  103 => 6,  99 => 36,  95 => 90,  92 => 40,  86 => 30,  82 => 25,  80 => 30,  73 => 19,  64 => 15,  60 => 26,  57 => 13,  54 => 12,  51 => 11,  48 => 12,  45 => 7,  42 => 6,  39 => 12,  36 => 5,  33 => 4,  30 => 3,);
    }
}
