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

/* banniere.twig */
class __TwigTemplate_9a2fd3b30dc0e4c3fbd7ef68472a78a38ef358af52cb39b79df77f0ff661c5b0 extends Template
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
        <!-- Masthead Avatar Image-->
        <img class=\"masthead-avatar mb-5\" src=\"public/assets/img/avataaars.svg\" alt=\"...\" />
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading text-uppercase mb-0\">Falonne MUYOMBO</h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Développeuse Php-Symphony</p>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "banniere.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"masthead bg-primary text-white text-center\">
    <div class=\"container d-flex align-items-center flex-column\">
        <!-- Masthead Avatar Image-->
        <img class=\"masthead-avatar mb-5\" src=\"public/assets/img/avataaars.svg\" alt=\"...\" />
        <!-- Masthead Heading-->
        <h1 class=\"masthead-heading text-uppercase mb-0\">Falonne MUYOMBO</h1>
        <!-- Icon Divider-->
        <div class=\"divider-custom divider-light\">
            <div class=\"divider-custom-line\"></div>
            <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
            <div class=\"divider-custom-line\"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class=\"masthead-subheading font-weight-light mb-0\">Développeuse Php-Symphony</p>
    </div>
</header>", "banniere.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\banniere.twig");
    }
}
