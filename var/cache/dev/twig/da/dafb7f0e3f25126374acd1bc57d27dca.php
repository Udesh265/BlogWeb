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

/* movies/index.html.twig */
class __TwigTemplate_de3de321ae3df1663723ffc9478c23cc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $this->parent = $this->loadTemplate("./base.html.twig", "movies/index.html.twig", 1);
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
        echo "\t<div class=\"w-4/5 m-auto text-center\">
\t\t<div class=\"py-12 border-b border-gray-200\">
\t\t\t<h1 class=\"text-6xl pt-12 pb-8\">
\t\t\t\tMovies Review (";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 7, $this->source); })())), "html", null, true);
        echo ")
\t\t\t</h1>

\t\t\t<span class=\"font-light text-gray-500 italic\">
\t\t\t\tCreated by Code With Dary
\t\t\t</span>
\t\t</div>
\t</div>

\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t<div class=\"mx-auto w-4/5 my-8\">
\t\t\t<a href=\"/movies/create\" class=\"uppercase border border-gray-500 text-lg py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
\t\t\t\tCreate New movie
\t\t\t</a>
\t\t</div>

\t";
        }
        // line 24
        echo "
\t<div
\t\tclass=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
\t\t<!-- Review Item -->
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 29
            echo "\t\t\t<div class=\"text-center pt-8 pb-4\">
\t\t\t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["movie"], "ImagePath", [], "any", false, false, false, 30)), "html", null, true);
            echo "\" alt=\"\" class=\"shadow-xl rounded-md object-contain h-48 w-100\"/>


\t\t\t\t<h2 class=\"text-gray-700 font-bold text-3xl py-2\">
\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t</h2>

\t\t\t\t<span class=\"text-gray-500\">
\t\t\t\t\tBy
\t\t\t\t\t<span class=\"italic text-sm text-gray-800\">Code With Dary | 28.01.2022
\t\t\t\t\t</span>

\t\t\t\t\t<p class=\"text-base text-gray-700 pt-4 pb-10 leading-8 font-light\">
\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "releaseDate", [], "any", false, false, false, 43), "html", null, true);
            echo "

\t\t\t\t\t</p>

\t\t\t\t\t<a href=\"/movies/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"uppercase border border-gray-500 text-gray-600 text-lg py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
\t\t\t\t\t\tKeep Reading
\t\t\t\t\t</a>


\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "movies/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  126 => 47,  119 => 43,  107 => 34,  100 => 30,  97 => 29,  93 => 28,  87 => 24,  78 => 17,  76 => 16,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"./base.html.twig\" %}

{% block body %}
\t<div class=\"w-4/5 m-auto text-center\">
\t\t<div class=\"py-12 border-b border-gray-200\">
\t\t\t<h1 class=\"text-6xl pt-12 pb-8\">
\t\t\t\tMovies Review ({{ movies|length }})
\t\t\t</h1>

\t\t\t<span class=\"font-light text-gray-500 italic\">
\t\t\t\tCreated by Code With Dary
\t\t\t</span>
\t\t</div>
\t</div>

\t{% if app.user %}
\t\t<div class=\"mx-auto w-4/5 my-8\">
\t\t\t<a href=\"/movies/create\" class=\"uppercase border border-gray-500 text-lg py-4 px-6 rounded transition transition-all bg-gray-800 text-white hover:bg-white hover:text-gray-800\">
\t\t\t\tCreate New movie
\t\t\t</a>
\t\t</div>

\t{% endif %}

\t<div
\t\tclass=\"md:grid lg:grid-cols-3 gap-20 w-4/5 mx-auto py-15 \">
\t\t<!-- Review Item -->
\t\t{% for movie in movies %}
\t\t\t<div class=\"text-center pt-8 pb-4\">
\t\t\t\t<img src=\"{{ asset(movie.ImagePath) }}\" alt=\"\" class=\"shadow-xl rounded-md object-contain h-48 w-100\"/>


\t\t\t\t<h2 class=\"text-gray-700 font-bold text-3xl py-2\">
\t\t\t\t\t{{ movie.name }}
\t\t\t\t</h2>

\t\t\t\t<span class=\"text-gray-500\">
\t\t\t\t\tBy
\t\t\t\t\t<span class=\"italic text-sm text-gray-800\">Code With Dary | 28.01.2022
\t\t\t\t\t</span>

\t\t\t\t\t<p class=\"text-base text-gray-700 pt-4 pb-10 leading-8 font-light\">
\t\t\t\t\t\t{{ movie.releaseDate }}

\t\t\t\t\t</p>

\t\t\t\t\t<a href=\"/movies/{{ movie.id }}\" class=\"uppercase border border-gray-500 text-gray-600 text-lg py-4 px-12 rounded transition transition-all hover:bg-gray-800 hover:text-white\">
\t\t\t\t\t\tKeep Reading
\t\t\t\t\t</a>


\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% endblock %}
", "movies/index.html.twig", "/home/udesh/symfony/BlogSite/templates/movies/index.html.twig");
    }
}
