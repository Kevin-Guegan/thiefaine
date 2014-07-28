<?php

/* ThiefaineReferentielBundle:Default:connexion.html.twig */
class __TwigTemplate_67f8913763ef569c519f7ac01ea56e10495811b1dbf8a1f924dc99fd33e9bf27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Default:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineReferentielBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- BODY -->
    <div class=\"panel panel-default\" style=\"margin-top: 20px;\">
      <div class=\"panel-heading\" style=\"font-weight: bold;\">
        Bienvenue dans l'application Thiefaine
      </div>
      <div class=\"panel-body\" style=\"text-align: justify;\">
        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default\">
                      <div class=\"panel-heading\">
                        <span class=\"glyphicon glyphicon-briefcase\"> </span> Contexte
                      </div>
                      <div class=\"panel-body\" style=\"text-align: justify;\">
                        <p>
                            Pour faire face à la montée constante des cambriolages en Ille-et-Vilaine, la gendarmerie de Rennes a décidé de mettre en place une application mobile pour informer la population des risques des cambriolages et les précautions à prendre.
                        </p><p>
                            Cette plateforme web, réservée exclusivement à la gendarmerie, permet d'effectuer l'ensemble de l'administration liée à cette application.
                        </p>
                      </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"panel panel-default\">
                      <div class=\"panel-heading\">
                        <span class=\"glyphicon glyphicon-info-sign\"> </span> Fonctionnalités
                      </div>
                      <div class=\"panel-body\" style=\"text-align: justify;\">
                        L'application actuelle vous permet de :
                        <ul>
                            <li>
                                vous connecter avec un login et mot de passe
                            </li>
                            <li>
                                accéder à la gestion :
                                <ul>
                                    <li>
                                        des groupes
                                    </li>
                                    <li>
                                        des utilisateurs
                                    </li>
                                    <li>
                                        des zones géographiques
                                    </li>
                                </ul>
                            </li>
                            <li>
                                ajouter, modifier ou supprimer :
                                <ul>
                                    <li>
                                        des informations
                                    </li>
                                    <li>
                                        des conseils
                                    </li>
                                </ul>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/images/img_connection.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" style=\"width:100%;\">
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 73,  62 => 21,  52 => 14,  46 => 11,  42 => 10,  39 => 9,  33 => 7,  31 => 5,  28 => 4,);
    }
}
