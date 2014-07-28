<?php

/* ThiefaineUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4c5131dbea6449fd73e79ba56c17c5db95c1f858c441c233dde2b691469aa889 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
\t";
        // line 4
        $this->env->loadTemplate("ThiefaineReferentielBundle:Utilisateurweb:new.html.twig")->display($context);
        // line 5
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineUserBundle:Registration:register_content.html.twig";
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
