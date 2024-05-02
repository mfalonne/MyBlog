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

/* auth/login.twig */
class __TwigTemplate_a50c55811a45f400ec37824f022484c58cb80863b2761aec085dca0a8bac907b extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container masthead\">
        <h1>Se connecter</h1>

        <form action=\"./MyBlog/login\" method=\"POST\">
            <div class=\"for-group mb-3\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\">
            </div>
            <div class=\"for-group mb-3\">
                <label for=\"password\">Mot de passe </label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block body %}
    <div class=\"container masthead\">
        <h1>Se connecter</h1>

        <form action=\"./MyBlog/login\" method=\"POST\">
            <div class=\"for-group mb-3\">
                <label for=\"username\">Nom d'utilisateur</label>
                <input type=\"text\" class=\"form-control\" name=\"username\" id=\"username\">
            </div>
            <div class=\"for-group mb-3\">
                <label for=\"password\">Mot de passe </label>
                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
        </form>
    </div>
{% endblock %}", "auth/login.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\auth\\login.twig");
    }
}
