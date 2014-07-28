<?php

/* ThiefaineUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_ef2878cb897995a9ba1179fd8dc37469bf13fb27f8f49faafcecb0d94c9ee415 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
\t";
        // line 4
        $this->env->loadTemplate("ThiefaineReferentielBundle:Groupe:edit.html.twig")->display($context);
        // line 5
        echo "</form>


";
    }

    public function getTemplateName()
    {
        return "ThiefaineUserBundle:Group:edit_content.html.twig";
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
