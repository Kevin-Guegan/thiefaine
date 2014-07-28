<?php

/* ThiefaineReferentielBundle:Utilisateurweb:edit.html.twig */
class __TwigTemplate_26b647ff4392032715b402c889ab9652aba0b7194590d2b52b92bd58df2dc97d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
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
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 11
        echo "
\t<div class=\"content col-md-9\">

\t\t<h3>Mise à jour de l'utilisateur «";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateurweb"]) ? $context["utilisateurweb"] : $this->getContext($context, "utilisateurweb")), "username"), "html", null, true);
        echo "»</h3>

\t\t";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 17
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 19
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t\t";
        }
        // line 25
        echo "
\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label');
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'label');
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t    <p>
\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username"), 'label');
        echo "
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), "first"), 'label');
        echo "
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), "first"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), "second"), 'label');
        echo "
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword"), "second"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "groups"), 'label');
        echo "
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "groups"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'label');
        echo "
\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t  \t<p>
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "infos"), 'label');
        echo "
\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "infos"), 'widget');
        echo "
\t\t\t\t</p>
\t\t      \t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Modifier l'utilisateur</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 63
        echo $this->env->getExtension('routing')->getPath("thiefaine_referentiel_utilisateurweb_list");
        echo ">Annuler</a>
\t\t  \t  \t</p>
\t\t    </div>

\t\t";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Utilisateurweb:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  177 => 63,  170 => 59,  166 => 58,  160 => 55,  156 => 54,  150 => 51,  146 => 50,  140 => 47,  136 => 46,  130 => 43,  126 => 42,  120 => 39,  116 => 38,  110 => 35,  106 => 34,  100 => 31,  96 => 30,  89 => 26,  86 => 25,  82 => 23,  73 => 20,  70 => 19,  66 => 18,  63 => 17,  61 => 16,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}
