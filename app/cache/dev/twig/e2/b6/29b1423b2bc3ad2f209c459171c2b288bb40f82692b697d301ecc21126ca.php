<?php

/* ThiefaineReferentielBundle:Groupe:index.html.twig */
class __TwigTemplate_e2b629b1423b2bc3ad2f209c459171c2b288bb40f82692b697d301ecc21126ca extends Twig_Template
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
        echo "    <div class=\"content col-md-9\">
        <h3>Gestion des groupes</h3>
        <table class=\"records_list table table-hover\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Nom <span class=\"glyphicon cheveron-down\" title=\"Trier par nom\"></span></th>
                    <th>Groupe <span class=\"glyphicon cheveron-down\" title=\"Trier par groupe\"></span></th>
                    <th>Utilisateurs <span class=\"glyphicon cheveron-down\" title=\"Trier par utilisateurs\"></span></th>
                    <th>Informations <span class=\"glyphicon cheveron-down\" title=\"Trier par informations\"></span></th>
                    <th>Conseils <span class=\"glyphicon cheveron-down\" title=\"Trier par conseils\"></span></th>
                    <th>Zones <span class=\"glyphicon cheveron-down\" title=\"Trier par conseils\"></span></th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "                    <tr>
                        <td data-element=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                            </a>                            
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_delete", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce groupe ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                        </td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 30
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_GROUP"), "method")) {
                // line 31
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 33
                echo "                            -
                        ";
            }
            // line 35
            echo "                        </td>
                        <td>
                        ";
            // line 37
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_USER"), "method")) {
                // line 38
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 40
                echo "                            -
                        ";
            }
            // line 42
            echo "                        </td>
                        <td>
                        ";
            // line 44
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_INFORMATION"), "method")) {
                // line 45
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 47
                echo "                            -
                        ";
            }
            // line 49
            echo "                        </td>
                        <td>
                        ";
            // line 51
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_CONSEIL"), "method")) {
                // line 52
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 54
                echo "                            -
                        ";
            }
            // line 56
            echo "                        </td>
                        <td>
                        ";
            // line 58
            if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "hasRole", array(0 => "ROLE_MANAGE_ZONE"), "method")) {
                // line 59
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 61
                echo "                            -
                        ";
            }
            // line 63
            echo "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Groupe:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 67,  139 => 63,  135 => 61,  131 => 59,  129 => 58,  125 => 56,  121 => 54,  117 => 52,  115 => 51,  111 => 49,  107 => 47,  103 => 45,  101 => 44,  97 => 42,  93 => 40,  89 => 38,  87 => 37,  83 => 35,  79 => 33,  75 => 31,  73 => 30,  68 => 28,  61 => 24,  55 => 21,  51 => 20,  48 => 19,  44 => 18,  26 => 2,  20 => 1,  24 => 3,  22 => 2,  19 => 1,  31 => 4,  28 => 3,);
    }
}
