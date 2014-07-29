<?php

/* ThiefaineReferentielBundle:Pages:accueil.co.html.twig */
class __TwigTemplate_c0070fb0aca987bb49ddfa47d38e7ecb7770ed35547a171f88a1d491fce6f3b4 extends Twig_Template
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
        echo "\t<!-- BODY -->
\t<div class=\"content col-md-9\">
\t  <h3>Description des modules de l'application</h3>
\t  \t<div class=\"panel-group\" id=\"accordion\">

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">
\t\t          <span class=\"glyphicon glyphicon-cog\"></span> Gestion des groupes
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
\t\t      <div class=\"panel-body\">
\t\t        <p>
\t\t        \tDans cette partie, vous avez la possiblité de gérer l'ensemble des groupes de l'application.
\t\t        </p>
\t\t        <p>
\t\t        \tCes groupes permettent de définir les rôles des utilisateurs au sein de l'application.
\t\t        </p>
\t\t        <p>
\t\t        \t<i>
\t\t\t        \tA savoir : chaque rôle représente une fonctionnalité de l'application. Il faut donc les définir avec précaution. De plus, si un groupe est supprimé, tous les utilisateurs liés au groupe seront supprimés.
\t\t\t        </i>
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">
\t\t          <span class=\"glyphicon glyphicon-user\"></span> Gestion des utilisateurs
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t      \t<p>
\t\t      \t\tDans cette partie, vous auvez la possiblité de gérer l'ensemble des utilisateurs de l'application.
\t\t      \t</p>
\t\t        <p>
\t\t        \tPour ajouter un utilisateur, il faut renseigner son adresse e-mail, son nom d'utilisateur 
\t\t        \t(pseudonyme afin de se connecter à l'application), son mot de passe (défini par le créateur) ainsi que le groupe auquel il appartiendra.
\t\t        </p>
\t\t        <p>
\t\t        \t<i>
\t\t        \t\tA savoir : un utilisateur ne peut être créé s'il n'est pas lié à un groupe. C'est pourquoi il est nécessaire de créer au moins un groupe avant de créer un utilisateur.
\t\t        \t</i>
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">
\t\t          <span class=\"glyphicon glyphicon-globe\"></span> Gestion des zones
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseThree\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        <p>
\t\t        \tDans cette partie, vous avez la possiblité de gérer l'ensemble des zones de notifications pour les informations.
\t\t        </p>
\t\t        <p>
\t\t        \tUne zone doit être renseignée par un nom, une longitude, une latitude, un zoom sur la carte, ainsi que la 
\t\t        \tpossibilité de la rendre active ou non. Par défaut, si la longitude et la latitude ne sont pas renseignées, 
\t\t        \tla carte se positionnera automatiquement au milieu de Rennes.
\t\t        </p>
\t\t        <p>
\t\t        \tPour ces zones, il faut par la suite définir une liste de point afin de la délimiter. Pour se faire, il suffit de 
\t\t        \trenseigner le champ prévu à cet effet pour créer un nouveau point avec la taille du rayon (en mètres).
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <!--<div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\">
\t\t          <span class=\"glyphicon glyphicon-exclamation-sign\"></span> Gestion des alertes
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseFour\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        <p>
\t\t        \tDans cette partie, vous aurez la possiblité de gérer l'ensemble des alertes de l'application.
\t\t        </p>
\t\t        <p>
\t\t        \tUne alerte devra être renseignée par un nom, une zone et un message au minimum. Vous aurez la possibilité, en 
\t\t        \tplus de ces trois champs obligatoires d'y ajouter une photo, pour illustrer votre alerte. Ainsi qu'un lien, si toute
\t\t        \tfois vous décidez de fournir plus d'information à une alerte grâce à un article internet. Puis une date de validitée, si 
\t\t        \tvous souhaitez que l'alerte ne dure qu'un certain temps.
\t\t        </p>
\t\t        <p>
\t\t        \t<i>
\t\t        \t\tA savoir : La création d'une alerte engendra systématiquement un envoie sur les mobiles qui dispose de l'application 
\t\t        \t\tet qui sont abonnés à la zone cible de l'alerte. Soyez donc vigilant par rapport à la création d'alerte afin de ne pas 
\t\t        \t\t\"gener\" les utilisateurs mobile.
\t\t        \t</i>
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>-->

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFive\">
\t\t          <span class=\"glyphicon glyphicon-list-alt\"></span> Gestion des informations
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseFive\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        <p>
\t\t        \tDans cette partie, vous avez la possiblité de gérer l'ensemble des informations de l'application.
\t\t        </p>
\t\t        <p>
\t\t        \tUne information doit être renseignée par un nom, une zone et un message au minimum. Vous avez la possibilité, en 
\t\t        \tplus de ces trois champs obligatoires, d'y ajouter une photo pour illustrer votre information, un lien si toutefois vous décidez de fournir plus d'informations à celle-ci grâce à un article internet. Puis une date de validitée, si 
\t\t        \tvous souhaitez que l'information ne dure qu'un certain temps.
\t\t        </p>
\t\t        <p>
\t\t        \t<i>
\t\t        \t\tA savoir : La création d'une information engendre systématiquement un envoi sur tous les mobiles qui disposent de l'application (avec notification ou non). 
\t\t        \t\tSoyez donc vigilant par rapport à la création d'une information afin de ne pas \"gêner\" les utilisateurs mobile.
\t\t        \t</i>
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t  <div class=\"panel panel-default\">
\t\t    <div class=\"panel-heading\">
\t\t      <h4 class=\"panel-title\">
\t\t        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSix\">
\t\t          <span class=\"glyphicon glyphicon-thumbs-up\"></span> Gestion des conseils
\t\t        </a>
\t\t      </h4>
\t\t    </div>
\t\t    <div id=\"collapseSix\" class=\"panel-collapse collapse\">
\t\t      <div class=\"panel-body\">
\t\t        <p>
\t\t        \tDans cette partie, vous avez la possiblité de gérer l'ensemble des conseils de l'application.
\t\t        </p>
\t\t        <p>
\t\t        \tLe renseignement d'un conseil est identique à une information (voir ci-dessus), mise à part que le conseil n'est pas ciblé sur une zone mais sur l'ensemble des utilisateurs de l'application mobile.
\t\t        </p>
\t\t        <p>
\t\t        \t<i>
\t\t        \t\tA savoir : La création d'un conseil engendre systématiquement un envoi sur tous les mobiles qui disposent de l'application sans créer de notification.
\t\t        \t</i>
\t\t        </p>
\t\t      </div>
\t\t    </div>
\t\t  </div>

\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:accueil.co.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
