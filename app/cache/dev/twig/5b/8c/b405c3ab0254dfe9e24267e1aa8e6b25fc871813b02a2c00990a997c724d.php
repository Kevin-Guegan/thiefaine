<?php

/* ThiefaineReferentielBundle:Zone:edit.html.twig */
class __TwigTemplate_5b8cb405c3ab0254dfe9e24267e1aa8e6b25fc871813b02a2c00990a997c724d extends Twig_Template
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
        echo "
\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

\t<div class=\"content zone col-md-9\" data-zone=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo ">
\t\t<h1>Edition de la zone</h1>

\t\t<p>
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label');
        echo "
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget', array("id" => "zoneTitle"));
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitude"), 'label');
        echo "
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitude"), 'widget');
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitude"), 'label');
        echo "
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitude"), 'widget');
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zoom"), 'label');
        echo "
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zoom"), 'widget');
        echo "
\t\t</p>

\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher pour activer/désactiver la zone.\">
\t\t\t<label>Etat de la zone</label>
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t  \t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "actif"), 'label');
        echo "
\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t  \t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "actif"), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>
\t\t\t</table>
\t\t</p>

    \t<p>
    \t\t<table id=\"mesPoints\">
\t\t        <tbody>
\t                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "points"));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 55
            echo "\t                <tr>
\t                    <td class=\"idpoint\"> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "id"), "html", null, true);
            echo " </td>
\t                    <td class=\"latitudepoint\"> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "latitude"), "html", null, true);
            echo " </td>
\t                    <td class=\"longitudepoint\"> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "longitude"), "html", null, true);
            echo " </td>
\t                    <td class=\"radiuspoint\"> ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "radius"), "html", null, true);
            echo " </td>
\t                </tr>
\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t            
\t\t        </tbody>
\t\t    </table>

\t\t    <label for=\"zoneRadius\" class=\"control-label\">Points de la zone</label>
\t\t\t<div class=\"input-group list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Saisisser le rayon de la zone à créer. (nota : il est \tpossible de modifier le rayon et déplacer la zone une fois celle-ci crée.)\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"zoneRadius\" placeholder=\"Rayon du point\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t  <button id=\"zoneRadiusBtn\" class=\"btn btn-primary\" type=\"button\">Générer la zone</button>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div id=\"MesCercleGoogle\">
\t\t\t\t<table class=\"table table-hover\" style=\"border-collapse: inherit; margin-bottom: 0px;\">
\t\t\t  \t
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"MaCarteGoogle\"></div>
\t\t</p>
\t\t<p>
\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Modifier la zone</button>
\t\t\t<a class=\"btn btn-default\" href=";
        // line 81
        echo $this->env->getExtension('routing')->getPath("zone");
        echo ">Annuler</a>
\t\t</p>

\t</div>

\t";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Zone:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 86,  189 => 81,  167 => 61,  158 => 59,  154 => 58,  150 => 57,  146 => 56,  143 => 55,  139 => 54,  127 => 45,  122 => 43,  111 => 35,  107 => 34,  101 => 31,  97 => 30,  91 => 27,  87 => 26,  81 => 23,  77 => 22,  70 => 18,  65 => 16,  62 => 15,  59 => 14,  53 => 11,  48 => 10,  45 => 9,  39 => 6,  33 => 4,  30 => 3,);
    }
}
