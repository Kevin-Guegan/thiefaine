<?php

/* ThiefaineReferentielBundle:Zone:index.html.twig */
class __TwigTemplate_2be456aca418423e7e8e50a101969ed18826bedfbf412279f6303526642a1419 extends Twig_Template
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

        <h3>Gestion des zones</h3>

        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Actions</th>
                <th>Active</th>
                <th>Nom <span class=\"glyphicon cheveron-down\" title=\"Trier par nom\"></span></th>
                <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 19
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zone_edit", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                        </a>

                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zone_delete", array("id" => $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer cette zone ?')\">
                            <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                        </a>
                    </td>
                     <td>
                    ";
            // line 30
            if ($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "actif")) {
                // line 31
                echo "                        <span class=\"glyphicon glyphicon-ok\"></span>
                    ";
            } else {
                // line 33
                echo "                        -
                    ";
            }
            // line 35
            echo "                    </td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "nom"), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>

        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "            <div class=\"flash-notice\">
                ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Zone:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  112 => 47,  109 => 46,  105 => 45,  100 => 42,  88 => 38,  83 => 36,  80 => 35,  76 => 33,  72 => 31,  70 => 30,  62 => 25,  55 => 21,  51 => 19,  47 => 18,  31 => 4,  28 => 3,);
    }
}
