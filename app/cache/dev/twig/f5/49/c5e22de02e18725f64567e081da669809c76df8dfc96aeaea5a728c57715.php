<?php

/* ThiefaineUserBundle:Group:new_content.html.twig */
class __TwigTemplate_f549c5e22de02e18725f64567e081da669809c76df8dfc96aeaea5a728c57715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
\t";
        // line 4
        $this->env->loadTemplate("ThiefaineReferentielBundle:Groupe:new.html.twig")->display($context);
        // line 5
        echo "</form>

";
    }

    public function getTemplateName()
    {
        return "ThiefaineUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  22 => 3,  19 => 2,  31 => 4,  28 => 4,);
    }
}
