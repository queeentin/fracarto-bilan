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

/* partials/base.html.twig */
class __TwigTemplate_85816ab4f5349455f3d69ecb54dda11b9fcd0d722291a44301a674bd2f7f3545 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))));
        echo "\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "
<body>
    ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "</body>

</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []));
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</title>

    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"));
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "canonical", [0 => true], "method"));
        echo "\" />
  
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
    <meta http-equiv=\"Content-Style-Type\" content=\"text/css\" />
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <title>Book template Paged.js</title>

    <!-- Table to div -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/dividize.js"), "html", null, true);
        echo "\"></script>

    <!-- Paged.js-->
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/paged.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/interface.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/reload-in-place.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://js/handlers.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/interface-header.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://pagedjs/interface.css"), "html", null, true);
        echo "\"/>

    ";
        // line 47
        echo "
    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://fonts/fonts.css"), "html", null, true);
        echo "\">
    
</head>
";
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "    ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  141 => 57,  138 => 56,  135 => 55,  127 => 49,  123 => 47,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  92 => 20,  80 => 11,  76 => 10,  73 => 9,  71 => 8,  62 => 6,  59 => 5,  56 => 4,  49 => 58,  47 => 55,  43 => 53,  41 => 4,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ (grav.language.getActive ?: grav.config.site.default_lang)|e }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e }} | {% endif %}{{ site.title|e }}</title>

    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png')|e }}\" />
    <link rel=\"canonical\" href=\"{{ page.canonical(true)|e }}\" />
  
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
    <meta http-equiv=\"Content-Style-Type\" content=\"text/css\" />
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <title>Book template Paged.js</title>

    <!-- Table to div -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script type=\"application/javascript\" src=\"{{ url('theme://js/dividize.js') }}\"></script>

    <!-- Paged.js-->
    <script src=\"{{ url('theme://pagedjs/paged.js') }}\"></script>
    <script src=\"{{ url('theme://pagedjs/interface.js') }}\"></script>
    <script src=\"{{ url('theme://pagedjs/reload-in-place.js') }}\"></script>
    <script src=\"{{ url('theme://js/handlers.js') }}\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ url('theme://pagedjs/interface-header.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ url('theme://pagedjs/interface.css') }}\"/>

    {# <script type=\"application/javascript\">
        class linkCleaning extends Paged.Handler {
            constructor(chunker, polisher, caller) {
                super(chunker, polisher, caller);
            }

            beforePageLayout(page) {
                //   Before the content is layout by Paged.js, please do the following:
                \$(document).ready(function(){
                    \$(\"table\").dividize({
                        preserveDim : true
                    });
                });
            }
        }
        Paged.registerHandlers(linkCleaning);
    </script> #}

    <!-- Fonts -->
    <link rel=\"stylesheet\" href=\"{{ url('theme://fonts/fonts.css') }}\">
    
</head>
{% endblock head %}

<body>
    {% block body %}
        {% block content %}{% endblock %}
    {% endblock %}
</body>

</html>
", "partials/base.html.twig", "/Users/quentin/Documents/Projets/FRAC Arto/B_rapport d'activité/2024/bilan-2023/user/themes/bilan/templates/partials/base.html.twig");
    }
}
