<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_997789f5a248ae26d5489a1f7e1eccaa2653ff306d4b8277edbc3f1f58e530b5 extends Twig_Template
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
        // line 1
        echo "<div class=\"fos_user_group_list\">
    ";
        // line 2
        $this->env->loadTemplate("ThiefaineReferentielBundle:Groupe:index.html.twig")->display($context);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,  31 => 4,  28 => 3,);
    }
}
