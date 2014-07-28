<?php

/* ThiefaineReferentielBundle:Information:new.html.twig */
class __TwigTemplate_ce9057bc77fcbe58fb97c01123ccde622ac51670f89b828e9ef444220c815336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Nav:leftnav.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineReferentielBundle:Nav:leftnav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t<div class=\"content\">
\t\t
\t\t<h3>Création d'une information</h1>

\t\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre"), 'label');
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlphoto"), 'label');
        echo "
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlphoto"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urllien"), 'label');
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urllien"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "datevalidite"), 'label');
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "datevalidite"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message"), 'label');
        echo "
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "valider"), 'widget');
        echo "
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annuler"), 'widget');
        echo "

\t\t\t</div>

\t\t";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

\t</div>



";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 42,  119 => 41,  114 => 39,  110 => 38,  104 => 35,  100 => 34,  94 => 31,  90 => 30,  84 => 27,  80 => 26,  74 => 23,  70 => 22,  62 => 17,  57 => 15,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
