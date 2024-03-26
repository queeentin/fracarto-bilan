<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default.html.twig */
class __TwigTemplate_9a4d1a2ff3756f1536c24c6b09b7c77932e6dc7ea777ebe8341852dafc3af30c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <body class=\"interface-bar-bottom\">

        <header id=\"interface-header\" w3-include-html=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/interface.html"), "html", null, true);
        echo "\"></header>
        <div id=\"render-book\"></div>
    
        <template id=\"book-content\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["parent_page"]) {
            // line 11
            echo "
                ";
            // line 13
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "body_classes", []), "html", null, true);
            echo "\">
                    <div class=\"cover\">
                        <pre>";
            // line 15
            echo $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "tiitle", []);
            echo "</pre>
                        <figure>
                            ";
            // line 17
            $context["cover"] = $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "cover", []);
            // line 18
            echo "                            ";
            $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
            // line 19
            echo "                            <img src=\"user/pages/";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
            echo "\">
                        </figure>
                    </div>
                    ";
            // line 22
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["parent_page"], "content", []));
            echo "
                </div>

                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent_page"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child_page"]) {
                // line 26
                echo "                        
                        ";
                // line 28
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []) == "other")) {
                    // line 29
                    echo "                            <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "body_classes", []), "html", null, true);
                    echo "\">
                                ";
                    // line 30
                    if ($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "visibletitle", [])) {
                        // line 31
                        echo "                                    <div class=\"cover\">
                                        <h2>";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "tiitle", []), "html", null, true);
                        echo "</h2>
                                        <figure>
                                            ";
                        // line 34
                        $context["cover"] = $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "cover", []);
                        // line 35
                        echo "                                            ";
                        $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
                        // line 36
                        echo "                                            <img src=\"user/pages/";
                        echo twig_escape_filter($this->env, (((($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($context["child_page"], "folder", [], "method")) . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
                        echo "\">
                                        </figure>
                                    </div>
                                ";
                    }
                    // line 40
                    echo "                                ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["child_page"], "content", []));
                    echo "
                            </div>

                        ";
                    // line 44
                    echo "                        ";
                } else {
                    // line 45
                    echo "                            <div class=\"cover\">
                                <h2>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "tiitle", []), "html", null, true);
                    echo "</h2>
                                <figure>
                                    ";
                    // line 48
                    $context["cover"] = $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "cover", []);
                    // line 49
                    echo "                                    ";
                    $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
                    // line 50
                    echo "                                    <img src=\"user/pages/";
                    echo twig_escape_filter($this->env, (((($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($context["child_page"], "folder", [], "method")) . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
                    echo "\">
                                </figure>
                            </div>
                            ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "sections", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 54
                        echo "                                ";
                        $context["item_class"] = $this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []);
                        // line 55
                        echo "                                <div class=\"";
                        echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class_name", []), "html", null, true);
                        echo "\">
                                    ";
                        // line 56
                        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["item"], "content", []));
                        echo "
                                </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                        ";
                }
                // line 60
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </template>

    </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 64,  190 => 62,  183 => 60,  180 => 59,  171 => 56,  164 => 55,  161 => 54,  157 => 53,  150 => 50,  147 => 49,  145 => 48,  140 => 46,  137 => 45,  134 => 44,  127 => 40,  119 => 36,  116 => 35,  114 => 34,  109 => 32,  106 => 31,  104 => 30,  99 => 29,  96 => 28,  93 => 26,  89 => 25,  83 => 22,  76 => 19,  73 => 18,  71 => 17,  66 => 15,  60 => 13,  57 => 11,  53 => 10,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <body class=\"interface-bar-bottom\">

        <header id=\"interface-header\" w3-include-html=\"{{ url('theme://pagedjs/interface.html') }}\"></header>
        <div id=\"render-book\"></div>
    
        <template id=\"book-content\">
            {% for parent_page in pages.children %}

                {# Blueprint chapter #}
                <div class=\"{{ parent_page.header.body_classes }}\">
                    <div class=\"cover\">
                        <pre>{{ parent_page.header.tiitle|raw }}</pre>
                        <figure>
                            {% set cover = parent_page.header.cover %}
                            {% set imageKey = (cover|keys)|first %}
                            <img src=\"user/pages/{{ parent_page.folder() ~ '/' ~ cover[imageKey].path }}\">
                        </figure>
                    </div>
                    {{ parent_page.content|raw|markdown }}
                </div>

                {% for child_page in parent_page.children %}
                        
                        {# Blueprint other #}
                        {% if child_page.blueprint.blueprint == \"other\" %}
                            <div class=\"{{ child_page.header.body_classes }}\">
                                {% if child_page.header.visibletitle %}
                                    <div class=\"cover\">
                                        <h2>{{ child_page.header.tiitle }}</h2>
                                        <figure>
                                            {% set cover = child_page.header.cover %}
                                            {% set imageKey = (cover|keys)|first %}
                                            <img src=\"user/pages/{{ parent_page.folder() ~ '/' ~ child_page.folder() ~ '/' ~ cover[imageKey].path }}\">
                                        </figure>
                                    </div>
                                {% endif %}
                                {{ child_page.content|raw|markdown }}
                            </div>

                        {# Blueprints text, tables #}
                        {% else %}
                            <div class=\"cover\">
                                <h2>{{ child_page.header.tiitle }}</h2>
                                <figure>
                                    {% set cover = child_page.header.cover %}
                                    {% set imageKey = (cover|keys)|first %}
                                    <img src=\"user/pages/{{ parent_page.folder() ~ '/' ~ child_page.folder() ~ '/' ~ cover[imageKey].path }}\">
                                </figure>
                            </div>
                            {% for item in child_page.header.sections %}
                                {% set item_class = child_page.blueprint.blueprint %}
                                <div class=\"{{item_class}} {{ item.class_name }}\">
                                    {{ item.content|raw|markdown }}
                                </div>
                            {% endfor %}
                        {% endif %}

                {% endfor %}

            {% endfor %}
        </template>

    </body>
</html>

{% endblock %}
", "default.html.twig", "/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d'activité/2024/bilan-2023/user/themes/bilan/templates/default.html.twig");
    }
}
