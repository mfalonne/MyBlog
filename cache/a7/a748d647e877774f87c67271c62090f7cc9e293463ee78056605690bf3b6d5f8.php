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

/* base.twig */
class __TwigTemplate_d0406868b802efaa9dfa7b293db06c6223ce53cc5349a2b2622fea8ce1bbb212 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>
      Mon super site
    </title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version) -->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\"
      crossorigin=\"anonymous\"></script>
    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
      rel=\"stylesheet\"
      type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
      rel=\"stylesheet\"
      type=\"text/css\" />
    <link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" />
    <link rel=\"stylesheet\" href=\"./public/css/app.css\" />
  </head>
  <body id=\"page-top\">
    ";
        // line 28
        $this->loadTemplate("header.twig", "base.twig", 28)->display($context);
        // line 29
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    ";
        $this->loadTemplate("footer.twig", "base.twig", 32)->display($context);
        // line 33
        echo "    <!-- Bootstrap core JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- Core theme JS -->
    <script src=\"js/scripts.js\"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <!-- * * SB Forms JS * * -->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * * -->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
  </body>
</html>
";
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  90 => 29,  75 => 33,  72 => 32,  69 => 29,  67 => 28,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>
      Mon super site
    </title>
    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
    <!-- Font Awesome icons (free version) -->
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\"
      crossorigin=\"anonymous\"></script>
    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
      rel=\"stylesheet\"
      type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
      rel=\"stylesheet\"
      type=\"text/css\" />
    <link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\"
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" />
    <link rel=\"stylesheet\" href=\"./public/css/app.css\" />
  </head>
  <body id=\"page-top\">
    {% include 'header.twig' %}
    {% block body %}

    {% endblock %}
    {% include 'footer.twig' %}
    <!-- Bootstrap core JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- Core theme JS -->
    <script src=\"js/scripts.js\"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <!-- * * SB Forms JS * * -->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * * -->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
  </body>
</html>
", "base.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\base.twig");
    }
}
