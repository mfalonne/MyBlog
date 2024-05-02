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

/* send_email.php */
class __TwigTemplate_79b041ee94184cab475bedbbb942cad5fdcc0a86ed06e99e7fc7356de48dd5a9 extends Template
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
        echo "<?php 
if(isset(\$_POST['mail'])){
    \$to = \"falonne.muyombo@hotmail.fr\";
    \$from = \$_POST['mail'];
    \$object =  \$_POST['objet'];
    \$message = \$_POST['message'];
    mail(\$to,\$object,\$message,\$from);
    ?>
        <div class=\"alert alert-success\" role=\"alert\">
        Message Envoyé
        </div>
<?php } ?>
";
    }

    public function getTemplateName()
    {
        return "send_email.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php 
if(isset(\$_POST['mail'])){
    \$to = \"falonne.muyombo@hotmail.fr\";
    \$from = \$_POST['mail'];
    \$object =  \$_POST['objet'];
    \$message = \$_POST['message'];
    mail(\$to,\$object,\$message,\$from);
    ?>
        <div class=\"alert alert-success\" role=\"alert\">
        Message Envoyé
        </div>
<?php } ?>
", "send_email.php", "C:\\xampp\\htdocs\\MyBlog\\views\\send_email.php");
    }
}
