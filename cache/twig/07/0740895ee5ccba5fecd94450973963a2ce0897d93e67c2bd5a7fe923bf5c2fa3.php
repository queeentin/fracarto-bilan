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
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["parent_page"]) {
            // line 12
            echo "
                ";
            // line 14
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "body_classes", []), "html", null, true);
            echo "\">
                    <div class=\"cover lvl1\">
                        <pre>";
            // line 16
            echo $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "tiitle", []);
            echo "</pre>
                        <figure>
                            ";
            // line 18
            $context["cover"] = $this->getAttribute($this->getAttribute($context["parent_page"], "header", []), "cover", []);
            // line 19
            echo "                            ";
            $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
            // line 20
            echo "                            <img src=\"user/pages/";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
            echo "\">
                        </figure>
                    </div>
                    ";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["parent_page"], "content", []));
            echo "
                </div>

                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent_page"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child_page"]) {
                // line 27
                echo "                        
                        ";
                // line 29
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []) == "other")) {
                    // line 30
                    echo "                            <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "body_classes", []), "html", null, true);
                    echo "\">
                                ";
                    // line 31
                    if ($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "visibletitle", [])) {
                        // line 32
                        echo "                                    <div class=\"cover lvl2\">
                                        <h2>";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "tiitle", []), "html", null, true);
                        echo "</h2>
                                        <figure>
                                            ";
                        // line 35
                        $context["cover"] = $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "cover", []);
                        // line 36
                        echo "                                            ";
                        $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
                        // line 37
                        echo "                                            <img src=\"user/pages/";
                        echo twig_escape_filter($this->env, (((($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($context["child_page"], "folder", [], "method")) . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
                        echo "\">
                                        </figure>
                                    </div>
                                ";
                    }
                    // line 41
                    echo "                                ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["child_page"], "content", []));
                    echo "
                            </div>

                        ";
                } else {
                    // line 45
                    echo "                            <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "body_classes", []), "html", null, true);
                    echo "\">
                                <div class=\"cover lvl2\">
                                    <h2>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "tiitle", []), "html", null, true);
                    echo "</h2>
                                    <figure>
                                        ";
                    // line 49
                    $context["cover"] = $this->getAttribute($this->getAttribute($context["child_page"], "header", []), "cover", []);
                    // line 50
                    echo "                                        ";
                    $context["imageKey"] = twig_first($this->env, twig_get_array_keys_filter(($context["cover"] ?? null)));
                    // line 51
                    echo "                                        <img src=\"user/pages/";
                    echo twig_escape_filter($this->env, (((($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($context["child_page"], "folder", [], "method")) . "/") . $this->getAttribute($this->getAttribute(($context["cover"] ?? null), ($context["imageKey"] ?? null), [], "array"), "path", [])), "html", null, true);
                    echo "\">
                                    </figure>
                                </div>
                                ";
                    // line 55
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []) == "acquisitions")) {
                        // line 56
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "sections", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 57
                            echo "                                        ";
                            $context["item_class"] = $this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []);
                            // line 58
                            echo "                                        <div class=\"";
                            echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                            echo "\">
                                            <h3>";
                            // line 59
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtitle", []), "html", null, true);
                            echo "</h3>
                                            ";
                            // line 60
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "pictures", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                                // line 61
                                echo "                                                <img src=\"user/pages/";
                                echo twig_escape_filter($this->env, (((($this->getAttribute($context["parent_page"], "folder", [], "method") . "/") . $this->getAttribute($context["child_page"], "folder", [], "method")) . "/") . $this->getAttribute($context["picture"], "name", [])), "html", null, true);
                                echo "\">
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 63
                            echo "                                            <div>";
                            echo $this->getAttribute($context["item"], "content", []);
                            echo "</div>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                                ";
                        // line 67
                        echo "                                ";
                    } else {
                        // line 68
                        echo "                                    <div>
                                    ";
                        // line 69
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "sections", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 70
                            echo "                                        ";
                            $context["item_class"] = $this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []);
                            // line 71
                            echo "                                        <div class=\"";
                            echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["item"], "class_name", []), ["," => " "]), "html", null, true);
                            echo "\">
                                            ";
                            // line 72
                            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["item"], "content", []));
                            echo "
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                                    </div>
                                ";
                    }
                    // line 77
                    echo "                                </div>
                        ";
                }
                // line 79
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        return array (  255 => 83,  248 => 81,  241 => 79,  237 => 77,  233 => 75,  224 => 72,  217 => 71,  214 => 70,  210 => 69,  207 => 68,  204 => 67,  202 => 66,  192 => 63,  183 => 61,  179 => 60,  175 => 59,  170 => 58,  167 => 57,  162 => 56,  159 => 55,  152 => 51,  149 => 50,  147 => 49,  142 => 47,  136 => 45,  128 => 41,  120 => 37,  117 => 36,  115 => 35,  110 => 33,  107 => 32,  105 => 31,  100 => 30,  97 => 29,  94 => 27,  90 => 26,  84 => 23,  77 => 20,  74 => 19,  72 => 18,  67 => 16,  61 => 14,  58 => 12,  54 => 11,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
                    <div class=\"cover lvl1\">
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
                                    <div class=\"cover lvl2\">
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

                        {% else %}
                            <div class=\"{{ child_page.header.body_classes }}\">
                                <div class=\"cover lvl2\">
                                    <h2>{{ child_page.header.tiitle }}</h2>
                                    <figure>
                                        {% set cover = child_page.header.cover %}
                                        {% set imageKey = (cover|keys)|first %}
                                        <img src=\"user/pages/{{ parent_page.folder() ~ '/' ~ child_page.folder() ~ '/' ~ cover[imageKey].path }}\">
                                    </figure>
                                </div>
                                {# Blueprints acquisitions #}
                                {% if child_page.blueprint.blueprint == \"acquisitions\" %}
                                    {% for item in child_page.header.sections %}
                                        {% set item_class = child_page.blueprint.blueprint %}
                                        <div class=\"{{item_class}}\">
                                            <h3>{{ item.subtitle }}</h3>
                                            {% for picture in item.pictures %}
                                                <img src=\"user/pages/{{ parent_page.folder() ~ '/' ~ child_page.folder() ~ '/' ~ picture.name }}\">
                                            {% endfor %}
                                            <div>{{ item.content|raw }}</div>
                                        </div>
                                    {% endfor %}
                                {# Blueprints text, tables #}
                                {% else %}
                                    <div>
                                    {% for item in child_page.header.sections %}
                                        {% set item_class = child_page.blueprint.blueprint %}
                                        <div class=\"{{item_class}} {{ item.class_name|replace({',': ' '}) }}\">
                                            {{ item.content|raw|markdown }}
                                        </div>
                                    {% endfor %}
                                    </div>
                                {% endif %}
                                </div>
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
