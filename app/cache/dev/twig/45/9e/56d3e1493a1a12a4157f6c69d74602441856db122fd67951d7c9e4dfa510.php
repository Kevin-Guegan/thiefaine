<?php

/* ThiefaineReferentielBundle:Groupe:edit.html.twig */
class __TwigTemplate_459e56d3e1493a1a12a4157f6c69d74602441856db122fd67951d7c9e4dfa510 extends Twig_Template
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
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t";
        // line 4
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 5
        echo "
\t<div class=\"content col-md-9\">
\t\t<h3>Mise à jour du groupe «";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")), "html", null, true);
        echo "»</h3>

\t\t";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 10
            echo "    \t<div class=\"alert alert-danger\" role=\"alert\" style=\"margin-top: 20px\">
\t\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 12
                echo "\t\t\t    <p>
\t\t\t\t";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
\t\t\t   </p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t
    \t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t<div class=\"form-group\">

\t\t\t\t<p>
\t\t\t\t\t ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
\t\t\t\t\t ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
\t\t\t\t</p>
\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits d'administration du groupe.\">
\t\t\t\t\t<label>Administration</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 35
        if ((isset($context["group_role_manage_group"]) ? $context["group_role_manage_group"] : $this->getContext($context, "group_role_manage_group"))) {
            // line 36
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 38
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gerergroupes"), 'widget');
            echo "
\t\t                        ";
        }
        // line 40
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t</tr>
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 47
        if ((isset($context["group_role_manage_user"]) ? $context["group_role_manage_user"] : $this->getContext($context, "group_role_manage_user"))) {
            // line 48
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 50
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererutilisateurs"), 'widget');
            echo "
\t\t                        ";
        }
        // line 52
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher les droits de créations du groupe.\">
\t\t\t\t\t<label>Messages et notifications</label>
\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t  \t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 65
        if ((isset($context["group_role_manage_information"]) ? $context["group_role_manage_information"] : $this->getContext($context, "group_role_manage_information"))) {
            // line 66
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 68
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererinfos"), 'widget');
            echo "
\t\t                        ";
        }
        // line 70
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 77
        if ((isset($context["group_role_manage_conseil"]) ? $context["group_role_manage_conseil"] : $this->getContext($context, "group_role_manage_conseil"))) {
            // line 78
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 80
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererconseils"), 'widget');
            echo "
\t\t                        ";
        }
        // line 82
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t  \t\t<td>
\t\t\t\t\t  \t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'label');
        echo "
\t\t\t\t\t  \t\t</td>
\t\t\t\t\t  \t\t<td style=\"text-align: right;\">
\t\t\t\t\t  \t\t\t";
        // line 89
        if ((isset($context["group_role_manage_zone"]) ? $context["group_role_manage_zone"] : $this->getContext($context, "group_role_manage_zone"))) {
            // line 90
            echo "\t\t\t\t\t  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget', array("attr" => array("checked" => "checked")));
            echo "
\t\t\t\t\t  \t\t\t";
        } else {
            // line 92
            echo "\t\t                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gererzones"), 'widget');
            echo "
\t\t                        ";
        }
        // line 94
        echo "\t\t\t\t\t  \t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"Modifier le groupe\" />
\t\t\t\t\t<a class=\"btn btn-default\" href=";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_user_group_list");
        echo ">Annuler</a>
\t\t\t\t</p>


\t\t\t</div>

\t\t";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 107,  232 => 101,  223 => 94,  217 => 92,  211 => 90,  209 => 89,  203 => 86,  197 => 82,  191 => 80,  185 => 78,  183 => 77,  177 => 74,  171 => 70,  165 => 68,  159 => 66,  157 => 65,  151 => 62,  139 => 52,  133 => 50,  127 => 48,  125 => 47,  119 => 44,  113 => 40,  107 => 38,  101 => 36,  99 => 35,  93 => 32,  83 => 25,  79 => 24,  71 => 19,  68 => 18,  64 => 16,  55 => 13,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
