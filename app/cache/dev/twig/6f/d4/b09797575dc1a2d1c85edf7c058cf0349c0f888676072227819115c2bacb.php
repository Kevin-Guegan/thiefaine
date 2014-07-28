<?php

/* ThiefaineReferentielBundle:Utilisateurweb:index.html.twig */
class __TwigTemplate_6fd4b09797575dc1a2d1c85edf7c058cf0349c0f888676072227819115c2bacb extends Twig_Template
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
        echo "    <div class=\"content col-md-9\">
        <h3>Gestion des utilisateurs</h3>
        <table class=\"records_list table table-hover\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Groupe</th>
                    <th>Email</th>
                    <th>Infos</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurweb_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">
                                <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                            </a>
                            ";
            // line 25
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_SUPER_ADMIN"), "method") == false)) {
                // line 26
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("utilisateurweb_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cet utilisateur ?')\">
                                <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                            </a>
                            ";
            }
            // line 30
            echo "                        </td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 36
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name"), "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "infos");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Utilisateurweb:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  108 => 40,  104 => 39,  101 => 38,  92 => 36,  88 => 35,  83 => 33,  79 => 32,  75 => 31,  72 => 30,  64 => 26,  62 => 25,  56 => 22,  52 => 20,  48 => 19,  31 => 4,  28 => 3,);
    }
}
