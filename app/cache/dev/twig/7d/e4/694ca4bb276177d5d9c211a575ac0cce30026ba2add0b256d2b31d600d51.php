<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_7de4694ca4bb276177d5d9c211a575ac0cce30026ba2add0b256d2b31d600d51 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  62 => 24,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  205 => 71,  202 => 70,  185 => 56,  180 => 53,  177 => 52,  173 => 49,  170 => 48,  166 => 46,  163 => 45,  159 => 39,  156 => 38,  146 => 25,  138 => 23,  134 => 22,  126 => 20,  120 => 17,  116 => 16,  111 => 15,  108 => 14,  90 => 69,  88 => 52,  82 => 48,  77 => 45,  70 => 26,  68 => 38,  61 => 34,  53 => 28,  51 => 20,  48 => 19,  46 => 14,  39 => 10,  33 => 5,  27 => 1,  189 => 98,  179 => 91,  175 => 90,  167 => 84,  164 => 83,  154 => 76,  150 => 26,  129 => 21,  114 => 53,  104 => 46,  100 => 5,  92 => 39,  75 => 28,  67 => 24,  64 => 23,  42 => 12,  36 => 7,  98 => 28,  89 => 38,  84 => 50,  79 => 29,  74 => 22,  71 => 21,  66 => 25,  44 => 8,  40 => 8,  37 => 6,  35 => 8,  32 => 6,  29 => 3,  151 => 64,  142 => 24,  139 => 68,  135 => 59,  130 => 57,  125 => 60,  117 => 54,  113 => 49,  109 => 47,  107 => 46,  103 => 6,  99 => 42,  95 => 90,  93 => 70,  85 => 36,  80 => 34,  76 => 33,  72 => 32,  65 => 28,  58 => 16,  54 => 16,  50 => 15,  31 => 4,  28 => 3,);
    }
}
