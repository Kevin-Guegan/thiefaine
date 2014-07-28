<?php

/* ThiefaineReferentielBundle:Zone:new.html.twig */
class __TwigTemplate_0afd998e0802f06de996d59c1263a566f06ad9ae9a0b281a4a989eec011fb24b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
\t<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/map.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/css/zone.css"), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t<div class=\"content col-md-9\">

\t\t<h3>Création d'une zone</h3>

\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("id" => "zoneTitle"));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude"), 'label');
        echo "
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), 'label');
        echo "
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zoom"), 'label');
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zoom"), 'widget');
        echo "
\t\t\t\t</p>

\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher pour activer/désactiver la zone.\">
\t\t\t\t\t<label>Etat de la zone</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actif"), 'label');
        echo "
\t\t\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "actif"), 'widget');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p>\t
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Créer la zone\" />
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 55
        echo $this->env->getExtension('routing')->getPath("zone");
        echo ">Annuler</a>
\t\t\t\t</p>

\t\t    </div>
\t\t    
\t\t";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "\t\t    <div class=\"flash-notice\">
\t\t        ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Zone:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 67,  157 => 64,  154 => 63,  150 => 62,  145 => 60,  137 => 55,  126 => 47,  121 => 45,  110 => 37,  106 => 36,  100 => 33,  96 => 32,  90 => 29,  86 => 28,  80 => 25,  76 => 24,  68 => 19,  62 => 15,  59 => 14,  53 => 11,  48 => 10,  45 => 9,  39 => 6,  33 => 4,  30 => 3,);
    }
}
