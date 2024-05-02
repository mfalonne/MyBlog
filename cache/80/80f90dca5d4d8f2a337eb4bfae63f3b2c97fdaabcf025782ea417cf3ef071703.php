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

/* header.twig */
class __TwigTemplate_56a6518c70c4143a048144b6ce5674cfb139c11e3e608e5f88aa4a1f39c41f59 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\"
  id=\"mainNav\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#page-top\">Falonne MUYOMBO</a>
    <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\"
      type=\"button\"
      data-bs-toggle=\"collapse\"
      data-bs-target=\"#navbarResponsive\"
      aria-controls=\"navbarResponsive\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      Menu
      <i class=\"fas fa-bars\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/MyBlog\">
            Accueil
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#portfolio\">
            Portfolio
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#about\">À PROPOS</a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#contact\">
            Contact
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/MyBlog/posts\">
            Blog
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\"
  id=\"mainNav\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#page-top\">Falonne MUYOMBO</a>
    <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\"
      type=\"button\"
      data-bs-toggle=\"collapse\"
      data-bs-target=\"#navbarResponsive\"
      aria-controls=\"navbarResponsive\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\">
      Menu
      <i class=\"fas fa-bars\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav ms-auto\">
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/MyBlog\">
            Accueil
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#portfolio\">
            Portfolio
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#about\">À PROPOS</a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#contact\">
            Contact
          </a>
        </li>
        <li class=\"nav-item mx-0 mx-lg-1\">
          <a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"/MyBlog/posts\">
            Blog
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
", "header.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\header.twig");
    }
}
