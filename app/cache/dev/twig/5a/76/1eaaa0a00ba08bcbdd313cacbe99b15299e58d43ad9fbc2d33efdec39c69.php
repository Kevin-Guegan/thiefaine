<?php

/* ThiefaineReferentielBundle:Groupe:new.html.twig */
class __TwigTemplate_5a761eaaa0a00ba08bcbdd313cacbe99b15299e58d43ad9fbc2d33efdec39c69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
\t";
        // line 3
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 4
        echo "
\t<div class=\"content col-md-9\">
\t\t<h3>Création d'un groupe</h3>

\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 9
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 11
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t
    \t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
\t\t\t\t\t ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits d'administration du groupe.\">
\t\t\t\t\t<label>Administration</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits de créations du groupe.\">
\t\t\t\t\t<label>Messages et notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Créer le groupe\" />
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 74
        echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
        echo ">Annuler</a>
\t\t\t\t</p>

\t\t\t</div>

\t\t";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  160 => 74,  150 => 67,  145 => 65,  137 => 60,  132 => 58,  124 => 53,  119 => 51,  105 => 40,  100 => 38,  92 => 33,  87 => 31,  77 => 24,  73 => 23,  65 => 18,  62 => 17,  58 => 15,  49 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
