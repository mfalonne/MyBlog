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

/* footer.twig */
class __TwigTemplate_8de2e3183153db26005a5eef66ef94df1aab714381d601fddeae912003ed2604 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "footer.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <footer class=\"footer text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Footer Location -->
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <h4 class=\"text-uppercase mb-4\">
                        Localisation
                    </h4>
                    <p class=\"lead mb-0\">
                        Av. Auguste Renoir
                        <br />
                        74000 Annecy
                    </p>
                </div>
                <!-- Footer Social Icons -->
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <h4 class=\"text-uppercase mb-4\">
                        AUTOUR DU WEB
                    </h4>
                    <a class=\"btn btn-outline-light btn-social mx-1\" href=\"https://github.com/mfalonne\">
                        <i class=\"fab fa-fw fa-github\"></i>
                    </a>
                    <a class=\"btn btn-outline-light btn-social mx-1\" href=\"https://www.linkedin.com/in/falonne-muyombo-tshibola/\">
                        <i class=\"fab fa-fw fa-linkedin-in\"></i>
                    </a>
                </div>
                <!-- Footer About Text -->
                <div class=\"col-lg-4\">
                    <h4 class=\"text-uppercase mb-4\">
                        About Freelancer
                    </h4>
                    <p class=\"lead mb-0\">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href=\"http://startbootstrap.com\">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"copyright py-4 text-center text-white\">
        <div class=\"container\"><small>Copyright &copy; Falonne - Développeuse Web 2024</small></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "footer.twig";
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
    <footer class=\"footer text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Footer Location -->
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <h4 class=\"text-uppercase mb-4\">
                        Localisation
                    </h4>
                    <p class=\"lead mb-0\">
                        Av. Auguste Renoir
                        <br />
                        74000 Annecy
                    </p>
                </div>
                <!-- Footer Social Icons -->
                <div class=\"col-lg-4 mb-5 mb-lg-0\">
                    <h4 class=\"text-uppercase mb-4\">
                        AUTOUR DU WEB
                    </h4>
                    <a class=\"btn btn-outline-light btn-social mx-1\" href=\"https://github.com/mfalonne\">
                        <i class=\"fab fa-fw fa-github\"></i>
                    </a>
                    <a class=\"btn btn-outline-light btn-social mx-1\" href=\"https://www.linkedin.com/in/falonne-muyombo-tshibola/\">
                        <i class=\"fab fa-fw fa-linkedin-in\"></i>
                    </a>
                </div>
                <!-- Footer About Text -->
                <div class=\"col-lg-4\">
                    <h4 class=\"text-uppercase mb-4\">
                        About Freelancer
                    </h4>
                    <p class=\"lead mb-0\">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href=\"http://startbootstrap.com\">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"copyright py-4 text-center text-white\">
        <div class=\"container\"><small>Copyright &copy; Falonne - Développeuse Web 2024</small></div>
    </div>
{% endblock %}
", "footer.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\footer.twig");
    }
}
