<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* movies/show.html.twig */
class __TwigTemplate_7558fdd2a90a133740639fe8a0d64ff4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "./base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"sm:w-3/5 w-4/5 mx-auto\">
\t\t<h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t</h1>

\t\t<div class=\"py-10 text-center\">
\t\t\t<div class=\"inline-block sm:pt-1\">
\t\t\t\t<h2 class=\"font-bold\">
\t\t\t\t\tCreated by: Code With Dary
\t\t\t\t</h2>

\t\t\t\t<p class=\"text-sm text-gray-600\">
\t\t\t\t\t28-01-2022 4 min. read
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 21, $this->source); })()), "ImagePath", [], "any", false, false, false, 21)), "html", null, true);
        echo "\" class=\"rounded-xl w-full shadow-xl object-contain h-100 w-100\" alt=\"Icon of Code With Dary\"/>


\t\t<p class=\"text-xl py-6\">
\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "
\t\t</p>

\t\t<a href=\"/movies/edit/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
\t\t\tEdit Movie
\t\t</a>

\t\t<a href=\"/movies/delete/";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
\t\t\tDelete Movie
\t\t</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  94 => 28,  88 => 25,  81 => 21,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
\t<div class=\"sm:w-3/5 w-4/5 mx-auto\">
\t\t<h1 class=\"pt-20 sm:text-5xl md:text-7xl text-4xl font-bold text-center\">
\t\t\t{{ movie.name }}
\t\t</h1>

\t\t<div class=\"py-10 text-center\">
\t\t\t<div class=\"inline-block sm:pt-1\">
\t\t\t\t<h2 class=\"font-bold\">
\t\t\t\t\tCreated by: Code With Dary
\t\t\t\t</h2>

\t\t\t\t<p class=\"text-sm text-gray-600\">
\t\t\t\t\t28-01-2022 4 min. read
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<img src=\"{{ asset(movie.ImagePath) }}\" class=\"rounded-xl w-full shadow-xl object-contain h-100 w-100\" alt=\"Icon of Code With Dary\"/>


\t\t<p class=\"text-xl py-6\">
\t\t\t{{ movie.name }}
\t\t</p>

\t\t<a href=\"/movies/edit/{{ movie.id }}\" class=\"bg-green-500 font-bold py-2 px-4 rounded transition-all hover:bg-green-300\">
\t\t\tEdit Movie
\t\t</a>

\t\t<a href=\"/movies/delete/{{ movie.id }}\" class=\"bg-red-500 font-bold py-2 px-4 ml-6 rounded transition-all hover:bg-red-300\">
\t\t\tDelete Movie
\t\t</a>
\t</div>
{% endblock %}
", "movies/show.html.twig", "/home/udesh/symfony/BlogSite/templates/movies/show.html.twig");
    }
}
