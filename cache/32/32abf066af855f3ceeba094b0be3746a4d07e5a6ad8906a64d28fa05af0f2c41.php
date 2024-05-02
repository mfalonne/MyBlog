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

/* blog/index.twig */
class __TwigTemplate_e68021af7329ecd45e334d963dfaf5de6c09f8b5bddc53d5069aa58b1fcc4390 extends Template
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
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "blog/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("banniereBlog.twig", "blog/index.twig", 4)->display($context);
        // line 5
        echo "  <div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"m-3\">Les derniers articles</h1>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "                <div class=\"card mb-3\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h2>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
                        <div>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "getTags", [], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 16
                echo "                                <span class=\"badge text-bg-secondary mb-2\"><a href=\"./tags/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</a></span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                        </div>
                        <small class=\"text-bg-primary\">Publié le ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 19), "html", null, true);
            echo "</small>
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getExcerpt", [], "method", false, false, false, 20), "html", null, true);
            echo "</p>
                        <a href=\"./posts/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Lire Plus... </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "blog/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  99 => 21,  95 => 20,  91 => 19,  88 => 18,  77 => 16,  73 => 15,  68 => 13,  63 => 10,  59 => 9,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block body %}
  {% include 'banniereBlog.twig' %}
  <div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"m-3\">Les derniers articles</h1>
            {% for post in posts %}
                <div class=\"card mb-3\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h2>{{ post.title }}</h2>
                        <div>
                            {% for tag in post.getTags() %}
                                <span class=\"badge text-bg-secondary mb-2\"><a href=\"./tags/{{ tag.id }}\">{{ tag.name }}</a></span>
                            {% endfor %}
                        </div>
                        <small class=\"text-bg-primary\">Publié le {{ post.getCreatedAt() }}</small>
                        <p>{{ post.getExcerpt() }}</p>
                        <a href=\"./posts/{{post.id}}\" class=\"btn btn-primary\"> Lire Plus... </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
  </div>
{% endblock %}
", "blog/index.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\blog\\index.twig");
    }
}
