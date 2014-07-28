<?php

/* ThiefaineReferentielBundle:Pages:alertCreate.html.twig */
class __TwigTemplate_f3a173396a25472365f48e0119120b9f4e566d34281061498b048337ba5a7677 extends Twig_Template
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
        echo "\t<div class=\"content\">
\t\t<h3>Création d'une alerte</h3>
\t\t<form class=\"form-horizontal\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t  <p>
\t\t\t      <label for=\"alertTitle\" class=\"control-label\">Titre *</label>
\t\t\t      <input type=\"text\" class=\"form-control\" id=\"alertTitle\" placeholder=\"Titre\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Renseigner le titre de l'alerte.\" required>
\t\t\t  </p><p>
\t\t\t  \t  <label for=\"alertImg\" class=\"control-label\">Photo</label>
\t\t\t      <div class=\"input-group list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Joindre une photo ou copier/coller un lien d'image (le bouton visualiser n'est disponible que pour les liens d'image internet).\">
\t\t\t        <input type=\"text\" class=\"form-control imgLink\" id=\"alertImg\" placeholder=\"Photo\">
\t\t\t        <span class=\"input-group-btn\">
\t\t\t          <button id=\"alertImgBtn1\" class=\"btn btn-default imgJoin\" type=\"button\"><span class=\"glyphicon glyphicon-paperclip\"></span> Joindre</button>
\t\t\t          <button id=\"alertImgBtn2\" class=\"btn btn-default imgView\" type=\"button\"><span class=\"glyphicon glyphicon-eye-open\"></span> Visualiser</button>
\t\t\t        </span>
\t\t\t      </div>
\t\t\t      <input type=\"file\" class=\"imgLink\" onchange=\"sub(this)\" style=\"display:none;\">
\t\t\t  </p><p>
\t\t\t      <label for=\"alertLien\" class=\"control-label\">Lien</label>
\t\t\t      <input type=\"text\" class=\"form-control\" id=\"alertLien\" placeholder=\"Lien\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Renseigner un lien\" required>
\t\t\t  </p><p>
\t\t\t      <label for=\"alertZone\" class=\"control-label\">Zone *</label>
\t\t\t      <select class=\"form-control\" id=\"alertZone\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Sélectionner la zone dans laquelle à eu lieux le cambriolage.\" required>
\t\t\t\t\t  <option>Sélectionner une zone</option>
\t\t\t\t\t  <option>Zone n°0</option>
\t\t\t\t\t  <option>Zone n°1</option>
\t\t\t\t\t  <option>Zone n°2</option>
\t\t\t\t\t  <option>Zone n°3</option>
\t\t\t\t  </select>
\t\t\t\t  <div class=\"MapSelected\"></div>
\t\t\t  </p><p>
\t\t\t      <label for=\"alertDateValid\" class=\"control-label\">Date de validité</label>
\t\t\t      <input type=\"text\" class=\"form-control elmDateValid\" id=\"alertDateValid\" placeholder=\"Date de validité\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Renseigner / Sélectionner une date de validitée (infinie si non rempli).\" required>
\t\t\t  </p><p>
\t\t\t      <label for=\"alertInformation\" class=\"control-label\">Message *</label>
\t\t\t      <textarea name=\"alertInformation\" id=\"alertInformation\" class=\"form-control\" cols=\"50\" placeholder=\"Saisisser les informations complémentaires liées à l'alerte.\" required></textarea>
\t\t      \t  <script>
\t                CKEDITOR.replace( 'alertInformation' );
\t              </script>
\t\t      </p><p>
\t\t      \t<a class=\"btn btn-primary\" href=\"?url=alert&action=manage\">Valider</a>
\t\t      \t<a class=\"btn btn-default\" href=\"?url=accueil\">Annuler</a>
\t\t  \t  </p>
\t\t    </div>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:alertCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  137 => 47,  113 => 49,  65 => 28,  198 => 81,  194 => 73,  152 => 53,  148 => 52,  118 => 40,  97 => 31,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 69,  160 => 54,  167 => 73,  155 => 69,  124 => 42,  110 => 48,  81 => 35,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 95,  213 => 90,  200 => 74,  197 => 74,  192 => 78,  175 => 71,  76 => 20,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 1,  205 => 83,  202 => 82,  185 => 67,  180 => 66,  170 => 58,  146 => 49,  134 => 58,  126 => 48,  90 => 15,  77 => 27,  70 => 40,  53 => 18,  150 => 50,  129 => 41,  114 => 50,  104 => 34,  100 => 33,  84 => 13,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 92,  214 => 86,  177 => 62,  169 => 60,  140 => 46,  132 => 45,  128 => 44,  107 => 31,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 95,  224 => 71,  221 => 86,  219 => 89,  217 => 91,  208 => 68,  204 => 72,  179 => 71,  159 => 39,  143 => 56,  135 => 53,  119 => 37,  102 => 29,  71 => 30,  67 => 24,  63 => 25,  59 => 6,  28 => 3,  87 => 25,  21 => 2,  38 => 5,  25 => 4,  93 => 39,  88 => 31,  78 => 34,  46 => 14,  44 => 11,  31 => 4,  26 => 2,  201 => 92,  196 => 73,  183 => 73,  171 => 70,  166 => 57,  163 => 45,  158 => 70,  156 => 53,  151 => 52,  142 => 49,  138 => 48,  136 => 45,  121 => 40,  117 => 39,  105 => 40,  91 => 27,  62 => 20,  49 => 14,  94 => 28,  89 => 33,  85 => 36,  75 => 21,  68 => 19,  56 => 11,  27 => 5,  24 => 7,  19 => 1,  79 => 21,  72 => 32,  69 => 11,  47 => 12,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 55,  145 => 46,  139 => 53,  131 => 44,  123 => 47,  120 => 53,  115 => 36,  111 => 36,  108 => 36,  101 => 32,  98 => 28,  96 => 38,  83 => 22,  74 => 19,  66 => 18,  55 => 15,  52 => 18,  50 => 8,  43 => 12,  41 => 6,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 65,  173 => 49,  168 => 60,  164 => 68,  162 => 60,  154 => 29,  149 => 56,  147 => 51,  144 => 69,  141 => 48,  133 => 46,  130 => 57,  125 => 40,  122 => 41,  116 => 38,  112 => 37,  109 => 47,  106 => 46,  103 => 44,  99 => 28,  95 => 26,  92 => 40,  86 => 23,  82 => 25,  80 => 34,  73 => 33,  64 => 10,  60 => 26,  57 => 12,  54 => 11,  51 => 10,  48 => 12,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
