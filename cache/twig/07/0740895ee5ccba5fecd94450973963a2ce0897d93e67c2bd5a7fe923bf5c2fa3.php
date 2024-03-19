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
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parent_page"], "title", []), "html", null, true);
            echo "</h1>
                ";
            // line 12
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["parent_page"], "content", []));
            echo "
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["parent_page"], "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child_page"]) {
                // line 14
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []) == "chiffres")) {
                    // line 15
                    echo "                        <div class=\"chiffres\">
                            ";
                    // line 16
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["child_page"], "content", []));
                    echo "
                        </div>
                    ";
                } else {
                    // line 19
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child_page"], "title", []), "html", null, true);
                    echo "</h2>
                        ";
                    // line 20
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["child_page"], "content", []));
                    echo "
                    ";
                }
                // line 22
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child_page"], "header", []), "sections", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "                        ";
                    $context["item_class"] = "textblock";
                    // line 24
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["child_page"], "blueprint", []), "blueprint", []) == "tables")) {
                        // line 25
                        echo "                            ";
                        $context["item_class"] = "table";
                        // line 26
                        echo "                        ";
                    }
                    // line 27
                    echo "                        ";
                    $context["contentWithClass"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["item"], "content", []));
                    // line 28
                    echo "                        <div class=\"";
                    echo twig_escape_filter($this->env, ($context["item_class"] ?? null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class_name", []), "html", null, true);
                    echo "\">
                            ";
                    // line 29
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->getAttribute($context["item"], "content", []));
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
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
        return array (  141 => 35,  134 => 33,  128 => 32,  119 => 29,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  100 => 24,  97 => 23,  92 => 22,  87 => 20,  82 => 19,  76 => 16,  73 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 11,  53 => 10,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
                <h1>{{ parent_page.title }}</h1>
                {{ parent_page.content|raw|markdown }}
                {% for child_page in parent_page.children %}
                    {% if child_page.blueprint.blueprint == \"chiffres\" %}
                        <div class=\"chiffres\">
                            {{ child_page.content|raw|markdown }}
                        </div>
                    {% else %}
                        <h2>{{ child_page.title }}</h2>
                        {{ child_page.content|raw|markdown }}
                    {% endif %}
                    {% for item in child_page.header.sections %}
                        {% set item_class = \"textblock\" %}
                        {% if child_page.blueprint.blueprint == \"tables\" %}
                            {% set item_class = \"table\" %}
                        {% endif %}
                        {% set contentWithClass = item.content|raw|markdown %}
                        <div class=\"{{ item_class }} {{ item.class_name }}\">
                            {{ item.content|raw|markdown }}
                        </div>
                    {% endfor %}
                {% endfor %}

            {% endfor %}
        </template>

    </body>
</html>

{% endblock %}
", "default.html.twig", "/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d'activité/2024/bilan-2023/user/themes/bilan/templates/default.html.twig");
    }
}
