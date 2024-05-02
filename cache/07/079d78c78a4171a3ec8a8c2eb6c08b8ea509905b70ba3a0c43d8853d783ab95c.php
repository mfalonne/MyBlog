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

/* banniereBlog.twig */
class __TwigTemplate_21eb4f1676ade9aa91a3cf916988b80c803efbbf2aecae9df3abc5391e54bb86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading  mb-0\">Bienvenue sur mon blog! </h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Découvrez des articles fascinants sur une variété de sujets passionnants.</p>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "banniereBlog.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading  mb-0\">Bienvenue sur mon blog! </h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Découvrez des articles fascinants sur une variété de sujets passionnants.</p>
    </div>
</header>", "banniereBlog.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\banniereBlog.twig");
    }
}
