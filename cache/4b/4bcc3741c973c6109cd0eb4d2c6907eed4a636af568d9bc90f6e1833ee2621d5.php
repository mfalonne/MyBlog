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

/* blog/welcome.twig */
class __TwigTemplate_ae8c9160eda8b1866ddea25194be500f0b0668f0d11d6ffb3e94cb316d12fa14 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "blog/welcome.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("banniere.twig", "blog/welcome.twig", 4)->display($context);
        // line 5
        echo "  ";
        $this->loadTemplate("portfolio.twig", "blog/welcome.twig", 5)->display($context);
        // line 6
        echo "  ";
        $this->loadTemplate("about.twig", "blog/welcome.twig", 6)->display($context);
        // line 7
        echo "  ";
        $this->loadTemplate("contact.twig", "blog/welcome.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "blog/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block body %}
  {% include 'banniere.twig' %}
  {% include 'portfolio.twig' %}
  {% include 'about.twig' %}
  {% include 'contact.twig' %}
{% endblock %}
", "blog/welcome.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\blog\\welcome.twig");
    }
}
