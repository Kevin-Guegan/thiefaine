<?php

/* ThiefaineReferentielBundle:Conseil:edit.html.twig */
class __TwigTemplate_01bb1b00d8315a9eefc87384adb4daba560dba219a36f303a6a8dfc7abfa15f7 extends Twig_Template
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
\t";
        // line 13
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 14
        echo "
    <div class=\"content col-md-9\">
        
        <h3>Mise à jour du conseil «";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "titre"), "html", null, true);
        echo "»</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 20
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 22
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</div>
\t\t";
        }
        // line 28
        echo "
\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'label');
        echo " *
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "titre"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urlphoto"), 'label');
        echo "
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urlphoto"), 'widget');
        echo "
\t\t\t\t\t<a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attachement"), 'label');
        echo "
\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "attachement"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urllien"), 'label');
        echo "
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "urllien"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datevalidite"), 'label');
        echo "
\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datevalidite"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "message"), 'label');
        echo " *
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "message"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Modifier le conseil</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 62
        echo $this->env->getExtension('routing')->getPath("conseil");
        echo ">Annuler</a>
\t\t  \t  \t</p>

\t\t\t</div>

\t\t";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    </div>

";
    }

    // line 73
    public function block_modal($context, array $blocks = array())
    {
        // line 74
        echo "\t<div id=\"showImageModal\" class=\"modal fade\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t        <span aria-hidden=\"true\">&times;</span>
\t\t        <span class=\"sr-only\">Fermer</span>
\t        </button>
\t        <h4 class=\"modal-title\">Visualisation de l'image</h4>
\t      </div>
\t      <div class=\"modal-body\">
\t        
\t      </div>
\t      <div class=\"modal-footer\">
\t        <a class=\"showFull btn btn-default\" type=\"button\">
\t        \tZoom
\t        \t<span class=\"glyphicon glyphicon-resize-full\"></span>
\t        </a>
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Conseil:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  194 => 73,  185 => 67,  177 => 62,  170 => 58,  166 => 57,  160 => 54,  156 => 53,  150 => 50,  146 => 49,  140 => 46,  136 => 45,  129 => 41,  125 => 40,  119 => 37,  115 => 36,  107 => 31,  102 => 29,  99 => 28,  95 => 26,  86 => 23,  83 => 22,  79 => 21,  76 => 20,  74 => 19,  69 => 17,  64 => 14,  62 => 13,  59 => 12,  56 => 11,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
