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
        return array (  83 => 30,  62 => 24,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  205 => 71,  202 => 70,  185 => 56,  177 => 52,  173 => 49,  163 => 45,  159 => 39,  134 => 22,  126 => 20,  120 => 17,  111 => 15,  108 => 14,  103 => 6,  95 => 90,  93 => 70,  90 => 69,  88 => 52,  77 => 45,  70 => 26,  61 => 34,  53 => 28,  48 => 19,  46 => 14,  39 => 10,  33 => 5,  27 => 1,  164 => 83,  154 => 76,  142 => 24,  139 => 68,  129 => 21,  125 => 60,  117 => 54,  114 => 53,  92 => 39,  67 => 24,  64 => 23,  42 => 12,  36 => 7,  31 => 4,  28 => 3,  98 => 28,  89 => 38,  84 => 50,  74 => 22,  58 => 16,  50 => 15,  44 => 8,  40 => 8,  35 => 8,  251 => 104,  245 => 101,  237 => 96,  227 => 89,  221 => 86,  210 => 78,  206 => 77,  200 => 74,  196 => 73,  190 => 70,  186 => 69,  180 => 53,  176 => 65,  170 => 48,  166 => 46,  160 => 58,  156 => 38,  150 => 26,  146 => 25,  138 => 23,  133 => 46,  130 => 45,  128 => 44,  124 => 42,  121 => 41,  116 => 16,  107 => 35,  104 => 46,  100 => 5,  96 => 31,  91 => 35,  82 => 48,  79 => 29,  75 => 28,  71 => 21,  68 => 38,  66 => 25,  59 => 14,  57 => 13,  54 => 16,  51 => 20,  45 => 7,  41 => 6,  37 => 6,  32 => 6,  29 => 3,);
    }
}
