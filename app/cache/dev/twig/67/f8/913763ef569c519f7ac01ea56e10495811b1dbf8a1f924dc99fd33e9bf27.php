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
        return array (  34 => 7,  23 => 4,  205 => 71,  202 => 70,  185 => 56,  180 => 53,  170 => 48,  146 => 25,  134 => 22,  126 => 20,  90 => 69,  77 => 45,  70 => 40,  53 => 28,  175 => 90,  167 => 84,  150 => 26,  129 => 21,  114 => 53,  104 => 46,  100 => 5,  84 => 50,  58 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 52,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 91,  159 => 39,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 21,  67 => 24,  63 => 15,  59 => 14,  28 => 4,  87 => 25,  21 => 2,  38 => 8,  25 => 5,  93 => 70,  88 => 52,  78 => 21,  46 => 11,  44 => 8,  31 => 5,  26 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 46,  163 => 45,  158 => 67,  156 => 38,  151 => 63,  142 => 24,  138 => 23,  136 => 56,  121 => 46,  117 => 54,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  94 => 28,  89 => 38,  85 => 25,  75 => 30,  68 => 38,  56 => 9,  27 => 5,  24 => 7,  19 => 2,  79 => 47,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 52,  123 => 47,  120 => 17,  115 => 43,  111 => 15,  108 => 14,  101 => 73,  98 => 28,  96 => 31,  83 => 25,  74 => 22,  66 => 18,  55 => 15,  52 => 14,  50 => 15,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 98,  187 => 84,  182 => 66,  176 => 64,  173 => 49,  168 => 72,  164 => 83,  162 => 57,  154 => 76,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 60,  122 => 43,  116 => 16,  112 => 42,  109 => 34,  106 => 36,  103 => 6,  99 => 31,  95 => 90,  92 => 39,  86 => 28,  82 => 48,  80 => 19,  73 => 19,  64 => 23,  60 => 6,  57 => 11,  54 => 16,  51 => 20,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 5,);
    }
}
