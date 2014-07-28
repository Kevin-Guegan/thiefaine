<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_32e525199983cd4ce143ab06a46a2da4de9d7bab7e8b2d13207f227e5e798316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  62 => 24,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  205 => 71,  202 => 70,  185 => 56,  177 => 52,  173 => 49,  163 => 45,  159 => 39,  134 => 22,  126 => 20,  120 => 17,  111 => 15,  108 => 14,  103 => 6,  95 => 90,  93 => 70,  90 => 69,  88 => 52,  77 => 45,  70 => 26,  61 => 34,  53 => 28,  48 => 19,  46 => 14,  39 => 10,  33 => 5,  27 => 1,  164 => 83,  154 => 76,  142 => 24,  139 => 68,  129 => 21,  125 => 60,  117 => 54,  114 => 53,  92 => 39,  67 => 24,  64 => 23,  42 => 12,  36 => 7,  31 => 4,  28 => 3,  98 => 28,  89 => 38,  84 => 50,  74 => 22,  58 => 16,  50 => 15,  44 => 8,  40 => 8,  35 => 8,  251 => 104,  245 => 101,  237 => 96,  227 => 89,  221 => 86,  210 => 78,  206 => 77,  200 => 74,  196 => 73,  190 => 70,  186 => 69,  180 => 53,  176 => 65,  170 => 48,  166 => 46,  160 => 58,  156 => 38,  150 => 26,  146 => 25,  138 => 23,  133 => 46,  130 => 45,  128 => 44,  124 => 42,  121 => 41,  116 => 16,  107 => 35,  104 => 46,  100 => 5,  96 => 31,  91 => 35,  82 => 48,  79 => 29,  75 => 28,  71 => 21,  68 => 38,  66 => 25,  59 => 14,  57 => 13,  54 => 16,  51 => 20,  45 => 7,  41 => 6,  37 => 6,  32 => 6,  29 => 3,);
    }
}
