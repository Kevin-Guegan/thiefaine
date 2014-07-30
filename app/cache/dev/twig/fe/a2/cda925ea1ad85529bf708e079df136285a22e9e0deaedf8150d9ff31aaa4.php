<?php

/* ThiefaineReferentielBundle:Information:show.html.twig */
class __TwigTemplate_fea2cda925ea1ad85529bf708e079df136285a22e9e0deaedf8150d9ff31aaa4 extends Twig_Template
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
        
        <h3>Visionner l'information «";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
        echo "»</h1>

\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'errors');
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "titre"), 'label');
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "titre"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urlphoto"), 'label');
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urlphoto"), 'widget');
        echo "
\t\t\t\t\t<a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "attachement"), 'label');
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "attachement"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urllien"), 'label');
        echo "
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "urllien"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "zone"), 'label');
        echo "
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "zone"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "datevalidite"), 'label');
        echo "
\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "datevalidite"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "message"), 'label');
        echo "
\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "message"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\">
\t\t\t\t\t<label>Notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "alerte"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), "alerte"), 'widget', array("attr" => array("disabled" => true)));
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p>\t
\t\t\t\t\t<a class=\"btn btn-primary\" href=";
        // line 69
        echo $this->env->getExtension('routing')->getPath("information");
        echo ">Retour à la liste des informations</a>
\t\t  \t  \t</p>

\t\t\t</div>

\t\t";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["show_form"]) ? $context["show_form"] : $this->getContext($context, "show_form")), 'form_end');
        echo "

\t\t";
        // line 76
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 77
            echo "    \t<p>
    \t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 80
                echo "\t\t\t    <div class=\"flash-notice\">
\t\t\t        ";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t    </div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t</div>
\t\t</p>
\t\t";
        }
        // line 87
        echo "
    </div>


";
    }

    // line 93
    public function block_modal($context, array $blocks = array())
    {
        // line 94
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
        return "ThiefaineReferentielBundle:Information:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 94,  226 => 93,  218 => 87,  213 => 84,  204 => 81,  201 => 80,  197 => 79,  193 => 77,  191 => 76,  186 => 74,  178 => 69,  168 => 62,  162 => 59,  152 => 52,  148 => 51,  142 => 48,  138 => 47,  132 => 44,  128 => 43,  122 => 40,  118 => 39,  112 => 36,  108 => 35,  101 => 31,  97 => 30,  91 => 27,  87 => 26,  79 => 21,  74 => 19,  69 => 17,  64 => 14,  62 => 13,  59 => 12,  56 => 11,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}