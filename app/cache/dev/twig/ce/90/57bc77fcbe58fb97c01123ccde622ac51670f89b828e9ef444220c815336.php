<?php

/* ThiefaineReferentielBundle:Information:new.html.twig */
class __TwigTemplate_ce9057bc77fcbe58fb97c01123ccde622ac51670f89b828e9ef444220c815336 extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
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

        <h3>Création d'une information</h1>

        ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 20
            echo "        \t";
            if (((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")) == null)) {
                // line 21
                echo "        \t\t<p>
\t\t\t    \t<div class=\"alert alert-warning\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t\t\t\t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 24
                    echo "\t\t\t\t\t\t    <div class=\"flash-notice\">
\t\t\t\t\t\t        ";
                    // line 25
                    echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                    echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t\t\t</div>
\t\t\t\t</p>
        \t";
            } else {
                // line 31
                echo "        \t\t<p>
\t\t\t    \t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 34
                    echo "\t\t\t\t\t\t    <div class=\"flash-notice\">
\t\t\t\t\t\t        ";
                    // line 35
                    echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                    echo "
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t</div>
\t\t\t\t</p>
        \t";
            }
            // line 41
            echo "\t\t";
        }
        // line 42
        echo "

\t\t";
        // line 44
        if (((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")) != null)) {
            // line 45
            echo "
\t\t";
            // line 46
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'label');
            echo "
\t\t\t\t\t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'label');
            echo "
\t\t\t\t\t";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlphoto"), 'label');
            echo "
\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlphoto"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachement"), 'label');
            echo "
\t\t\t\t\t";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachement"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllien"), 'label');
            echo "
\t\t\t\t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllien"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone"), 'label');
            echo "
\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zone"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"dateElement\">
\t\t\t\t\t";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datevalidite"), 'label');
            echo "
\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datevalidite"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label');
            echo "
\t\t\t\t\t";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget');
            echo "
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<p class=\"list-form-control\">
\t\t\t\t\t<label>Notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alerte"), 'label');
            echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alerte"), 'widget');
            echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>
\t\t\t\t<p>\t
\t\t      \t\t<button class=\"btn btn-primary\" type=\"submit\">Créer l'information</button>
\t\t\t\t\t<a class=\"btn btn-default\" href=";
            // line 100
            echo $this->env->getExtension('routing')->getPath("information");
            echo ">Annuler</a>
\t\t  \t  \t</p>\t

\t\t\t</div>

\t\t";
            // line 105
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

\t\t";
        }
        // line 108
        echo "
    </div>


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
        return array (  261 => 108,  255 => 105,  247 => 100,  237 => 93,  231 => 90,  220 => 82,  216 => 81,  210 => 78,  206 => 77,  200 => 74,  196 => 73,  190 => 70,  186 => 69,  180 => 66,  176 => 65,  170 => 62,  166 => 61,  160 => 58,  156 => 57,  150 => 54,  146 => 53,  138 => 48,  133 => 46,  130 => 45,  128 => 44,  124 => 42,  121 => 41,  116 => 38,  107 => 35,  104 => 34,  100 => 33,  96 => 31,  91 => 28,  82 => 25,  79 => 24,  75 => 23,  71 => 21,  68 => 20,  66 => 19,  59 => 14,  57 => 13,  54 => 12,  51 => 11,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
