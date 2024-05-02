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

/* blog/show.twig */
class __TwigTemplate_38c782bbbb5c12ef631ab0f66e2c1f00c95af4607352231d317ce0aca65fea87 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "blog/show.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container masthead\">
        <img src=\"\" class=\"img-fluid\" alt=\"image-article-2\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
        <div>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getTags", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 9
            echo "                <span class=\"badge text-bg-secondary mb-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </div>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <a href=\"/MyBlog/posts\" class=\"btn btn-primary\">Retourner</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "blog/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  72 => 11,  63 => 9,  59 => 8,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block body %}
    <div class=\"container masthead\">
        <img src=\"\" class=\"img-fluid\" alt=\"image-article-2\">
        <h1>{{ post.title }}</h1>
        <div>
            {% for tag in post.getTags() %}
                <span class=\"badge text-bg-secondary mb-2\">{{ tag.name }}</span>
            {% endfor %}
        </div>
        <p>{{ post.content }}</p>
        <a href=\"/MyBlog/posts\" class=\"btn btn-primary\">Retourner</a>
    </div>
{% endblock %}

", "blog/show.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\blog\\show.twig");
    }
}
