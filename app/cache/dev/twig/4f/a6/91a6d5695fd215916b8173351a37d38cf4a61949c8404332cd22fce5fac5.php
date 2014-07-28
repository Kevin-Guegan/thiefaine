<?php

/* ThiefaineReferentielBundle:Information:index.html.twig */
class __TwigTemplate_4fa691a6d5695fd215916b8173351a37d38cf4a61949c8404332cd22fce5fac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"content col-md-9\">

            <h3>Gestion des informations</h3>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Actions</th>
                    <th>Titre <span class=\"glyphicon cheveron-down\" title=\"Trier par titre\"></span></th>
                    <th>Date création <span class=\"glyphicon cheveron-down\" title=\"Trier par date de création\"></span></th>
                    <th>Date de validité <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Zone <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
                    <th>Photo <span class=\"glyphicon cheveron-down\" title=\"Trier par photo\"></span></th>
                    <th>Lien <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                    <th>Alerte <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : $this->getContext($context, "informations")));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 24
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_edit", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                            </a>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("information_delete", array("id" => $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cette information ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                        </td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datecreation"), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datevalidite"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "datevalidite"), "d/m/Y"))), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 37
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : null), "zone", array(), "any", false, true), "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : null), "zone", array(), "any", false, true), "nom"), "-")) : ("-")), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                        </td>
                        <td>
                        ";
            // line 43
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "urlphoto")) {
                // line 44
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 46
                echo "                            -
                        ";
            }
            // line 48
            echo "                        </td>
                        <td>
                        ";
            // line 50
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "urllien")) {
                // line 51
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 53
                echo "                            -
                        ";
            }
            // line 55
            echo "                        </td>
                        <td>
                        ";
            // line 57
            if ($this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "alerte")) {
                // line 58
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 60
                echo "                            -
                        ";
            }
            // line 62
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </tbody>
            </table>

            ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 69
            echo "                <div class=\"flash-notice\">
                    ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 73,  158 => 70,  155 => 69,  151 => 68,  146 => 65,  138 => 62,  134 => 60,  130 => 58,  128 => 57,  124 => 55,  120 => 53,  116 => 51,  114 => 50,  110 => 48,  106 => 46,  102 => 44,  100 => 43,  92 => 40,  86 => 37,  81 => 35,  77 => 34,  73 => 33,  66 => 29,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
