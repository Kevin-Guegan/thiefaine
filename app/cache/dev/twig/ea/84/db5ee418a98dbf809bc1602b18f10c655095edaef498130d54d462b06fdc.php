<?php

/* ThiefaineReferentielBundle:Conseil:index.html.twig */
class __TwigTemplate_ea84db5ee418a98dbf809bc1602b18f10c655095edaef498130d54d462b06fdc extends Twig_Template
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

            <h3>Gestion des conseils</h3>

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Actions</th>
                    <th>Titre <span class=\"glyphicon cheveron-down\" title=\"Trier par titre\"></span></th>
                    <th>Date création <span class=\"glyphicon cheveron-down\" title=\"Trier par date de création\"></span></th>
                    <th>Date de validité <span class=\"glyphicon cheveron-down\" title=\"Trier par date de validité\"></span></th>
                    <th>Créateur <span class=\"glyphicon cheveron-down\" title=\"Trier par créateur\"></span></th>
                    <th>Photo <span class=\"glyphicon cheveron-down\" title=\"Trier par photo\"></span></th>
                    <th>Lien <span class=\"glyphicon cheveron-down\" title=\"Trier par lien\"></span></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conseils"]) ? $context["conseils"] : $this->getContext($context, "conseils")));
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 22
            echo "                    <tr>
                        <td>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conseil_edit", array("id" => $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "id"))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-pencil\" title=\"Modifier\"></span>
                                </a>

                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("conseil_delete", array("id" => $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sûr de vouloir supprimer ce conseil ?')\">
                                    <span class=\"glyphicon glyphicon-remove\" title=\"Supprimer\"></span>
                                </a>
                        </td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datecreation"), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datevalidite"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "datevalidite"), "d/m/Y"))), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "utilisateurweb"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "utilisateurweb"), "prenom"), "html", null, true);
            echo "
                        </td>
                        <td>
                        ";
            // line 39
            if ($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "urlphoto")) {
                // line 40
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 42
                echo "                            -
                        ";
            }
            // line 44
            echo "                        </td>
                        <td>
                        ";
            // line 46
            if ($this->getAttribute((isset($context["conseil"]) ? $context["conseil"] : $this->getContext($context, "conseil")), "urllien")) {
                // line 47
                echo "                            <span class=\"glyphicon glyphicon-ok\"></span>
                        ";
            } else {
                // line 49
                echo "                            -
                        ";
            }
            // line 51
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conseil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>

            montest :
            ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
        echo "

            ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "                <div class=\"flash-notice\">
                    ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Conseil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  143 => 62,  140 => 61,  136 => 60,  131 => 58,  125 => 54,  117 => 51,  113 => 49,  109 => 47,  107 => 46,  103 => 44,  99 => 42,  95 => 40,  93 => 39,  85 => 36,  80 => 34,  76 => 33,  72 => 32,  65 => 28,  58 => 24,  54 => 22,  50 => 21,  31 => 4,  28 => 3,);
    }
}
