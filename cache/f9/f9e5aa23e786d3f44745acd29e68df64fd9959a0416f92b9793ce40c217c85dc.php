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

/* admin/post/index.twig */
class __TwigTemplate_7f7bc0a1c53651c631004c02721db7e95a72434d9f31bd51d0529197d6757ace extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "admin/post/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container masthead\">
        <h1 class=\"mb-3\">Administration des articles</h1>
        <a href=\"/MyBlog/admin/posts/create\" class=\"btn btn-success my-3\"> Créer un nouvel article</a>
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Publié le</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"table-group-divider\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getCreatedAt", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"./posts/edit/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            <form action=\"./posts/delete/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" method=\"POST\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/post/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  89 => 24,  85 => 23,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block body %}
    <div class=\"container masthead\">
        <h1 class=\"mb-3\">Administration des articles</h1>
        <a href=\"/MyBlog/admin/posts/create\" class=\"btn btn-success my-3\"> Créer un nouvel article</a>
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Publié le</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody class=\"table-group-divider\">
                {% for post in posts %}
                    <tr>
                        <th scope=\"row\">{{ post.id }}</th>
                        <td>{{ post.title }}</td>
                        <td>{{ post.getCreatedAt() }}</td>
                        <td>
                            <a href=\"./posts/edit/{{ post.id }}\" class=\"btn btn-warning\">Modifier</a>
                            <form action=\"./posts/delete/{{ post.id }}\" method=\"POST\" class=\"d-inline\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
", "admin/post/index.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\admin\\post\\index.twig");
    }
}
