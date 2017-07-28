<?php

/* partials/base.html.twig */
class __TwigTemplate_acc5b758c232c340292b5f822f74a350ca7e46d33e006cdb26b3ae89653859a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "    </head>
    <body id=\"totop\">
        ";
        // line 45
        $this->displayBlock('navigation', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "
        <script src=\"";
        // line 61
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/landio.min.js");
        echo "\" type=\"text/javascript\" ></script>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-57x57.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-60x60.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-72x72.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-76x76.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-114x114.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-120x120.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-144x144.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-152x152.png");
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/apple-touch-icon-180x180.png");
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-32x32.png");
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/android-icon-192x192.png");
        echo "\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-96x96.png");
        echo "\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon-16x16.png");
        echo "\" sizes=\"16x16\">
        <link rel=\"manifest\"href=\"";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/manifest.json");
        echo "\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 24
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/favicon.ico");
        echo "\" />

        <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/ms-icon-144x144.png");
        echo "\">
        <meta name=\"msapplication-config\" content=\"";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon/browserconfig.xml");
        echo "\">
        <meta name=\"theme-color\" content=\"#663fb5\">

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        ";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.min.css"), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/landio.css"), "method");
        // line 34
        echo "        ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 39
        echo "        ";
    }

    // line 45
    public function block_navigation($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "        ";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "        ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "        ";
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
        return array (  243 => 59,  240 => 58,  237 => 57,  232 => 54,  228 => 55,  225 => 54,  222 => 53,  218 => 51,  215 => 50,  212 => 49,  208 => 47,  205 => 46,  202 => 45,  198 => 39,  195 => 38,  192 => 37,  188 => 34,  185 => 33,  182 => 32,  179 => 31,  171 => 40,  169 => 37,  163 => 35,  161 => 31,  155 => 28,  151 => 27,  145 => 24,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 8,  83 => 7,  75 => 6,  72 => 5,  69 => 4,  61 => 61,  58 => 60,  56 => 57,  53 => 56,  51 => 53,  48 => 52,  46 => 49,  43 => 48,  41 => 45,  37 => 43,  35 => 4,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ url('theme://img/favicon/apple-touch-icon-57x57.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ url('theme://img/favicon/apple-touch-icon-60x60.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ url('theme://img/favicon/apple-touch-icon-72x72.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://img/favicon/apple-touch-icon-76x76.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ url('theme://img/favicon/apple-touch-icon-114x114.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ url('theme://img/favicon/apple-touch-icon-120x120.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ url('theme://img/favicon/apple-touch-icon-144x144.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ url('theme://img/favicon/apple-touch-icon-152x152.png') }}\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://img/favicon/apple-touch-icon-180x180.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/android-icon-192x192.png') }}\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-96x96.png') }}\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
        <link rel=\"manifest\"href=\"{{ url('theme://img/favicon/manifest.json') }}\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon/favicon.ico') }}\" />

        <meta name=\"msapplication-TileColor\" content=\"#663fb5\">
        <meta name=\"msapplication-TileImage\" content=\"{{ url('theme://img/favicon/ms-icon-144x144.png') }}\">
        <meta name=\"msapplication-config\" content=\"{{ url('theme://img/favicon/browserconfig.xml') }}\">
        <meta name=\"theme-color\" content=\"#663fb5\">

        {% block stylesheets %}
            {% do assets.addCss('theme://css/animate.min.css') %}
            {% do assets.addCss('theme://css/landio.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
        {% endblock %}
        {{ assets.js() }}

        {% endblock head%}
    </head>
    <body id=\"totop\">
        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        <script src=\"{{ url('theme://js/landio.min.js') }}\" type=\"text/javascript\" ></script>
    </body>
</html>
", "partials/base.html.twig", "/Users/julienfroidefond/Sites/portfolio/user/themes/landio/templates/partials/base.html.twig");
    }
}
