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

/* contact.twig */
class __TwigTemplate_40bfcfcb615242f9db1c699abaafae6de123d4db1171459ba2a1f5f1856f71fe extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "contact.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section class=\"page-section\" id=\"contact\">
        <div class=\"container\">
        <!-- Contact Section Heading -->
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
                Contacter Moi
            </h2>
            <!-- Icon Divider -->
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
                </div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <!-- Contact Section Form -->
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                <!-- * * * * * * * * * * * * * * * -->
                <!-- * * SB Forms Contact Form * * -->
                <!-- * * * * * * * * * * * * * * * -->
                <!-- This form is pre-integrated with SB Forms. -->
                <!-- To make this form functional, sign up at -->
                <!-- https://startbootstrap.com/solution/contact-forms -->
                <!-- to get an API token! -->
                    <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                        <!-- Name input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"name\"
                                type=\"text\"
                                placeholder=\"Enter your name...\"
                                data-sb-validations=\"required\" />
                            <label for=\"name\">Nom</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">
                            Veuillez entrer un nom.
                            </div>
                        </div>
                        <!-- Email address input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"email\"
                                type=\"email\"
                                placeholder=\"name@example.com\"
                                data-sb-validations=\"required,email\" />
                            <label for=\"email\">Adresse mail</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">
                                Veuillez entrer un mail.
                            </div>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">
                                L'adresse e-mail n'est pas valide.
                            </div>
                        </div>
                        <!-- Phone number input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"phone\"
                                type=\"tel\"
                                placeholder=\"(123) 456-7890\"
                                data-sb-validations=\"required\" />
                            <label for=\"phone\">Téléphone</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">
                                A phone number is required.
                            </div>
                        </div>
                        <!-- Message input -->
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\"
                                id=\"message\"
                                type=\"text\"
                                placeholder=\"Enter your message here...\"
                                style=\"height: 10rem\"
                                data-sb-validations=\"required\"></textarea>
                            <label for=\"message\">Message</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">
                                A message is required.
                            </div>
                        </div>
                        <!-- Submit success message -->
                        <!--  -->
                        <!-- This is what your users will see when the form -->
                        <!-- has successfully submitted -->
                        <div class=\"d-none\" id=\"submitSuccessMessage\">
                            <div class=\"text-center mb-3\">
                                <div class=\"fw-bolder\">
                                Form submission successful!
                                </div>To activate this form, sign up at
                                <br />
                                <a href=\"https://startbootstrap.com/solution/contact-forms\">
                                https://startbootstrap.com/solution/contact-forms
                                </a>
                            </div>
                        </div>
                        <!-- Submit error message -->
                        <!--  -->
                        <!-- This is what your users will see when there is -->
                        <!-- an error submitting the form -->
                        <div class=\"d-none\" id=\"submitErrorMessage\">
                            <div class=\"text-center text-danger mb-3\">
                                Error sending message!
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button class=\"btn btn-primary btn-xl disabled\"
                        id=\"submitButton\"
                        type=\"submit\">
                        Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
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
    <section class=\"page-section\" id=\"contact\">
        <div class=\"container\">
        <!-- Contact Section Heading -->
            <h2 class=\"page-section-heading text-center text-uppercase text-secondary mb-0\">
                Contacter Moi
            </h2>
            <!-- Icon Divider -->
            <div class=\"divider-custom\">
                <div class=\"divider-custom-line\"></div>
                <div class=\"divider-custom-icon\">
                <i class=\"fas fa-star\"></i>
                </div>
                <div class=\"divider-custom-line\"></div>
            </div>
            <!-- Contact Section Form -->
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8 col-xl-7\">
                <!-- * * * * * * * * * * * * * * * -->
                <!-- * * SB Forms Contact Form * * -->
                <!-- * * * * * * * * * * * * * * * -->
                <!-- This form is pre-integrated with SB Forms. -->
                <!-- To make this form functional, sign up at -->
                <!-- https://startbootstrap.com/solution/contact-forms -->
                <!-- to get an API token! -->
                    <form id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                        <!-- Name input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"name\"
                                type=\"text\"
                                placeholder=\"Enter your name...\"
                                data-sb-validations=\"required\" />
                            <label for=\"name\">Nom</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"name:required\">
                            Veuillez entrer un nom.
                            </div>
                        </div>
                        <!-- Email address input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"email\"
                                type=\"email\"
                                placeholder=\"name@example.com\"
                                data-sb-validations=\"required,email\" />
                            <label for=\"email\">Adresse mail</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:required\">
                                Veuillez entrer un mail.
                            </div>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"email:email\">
                                L'adresse e-mail n'est pas valide.
                            </div>
                        </div>
                        <!-- Phone number input -->
                        <div class=\"form-floating mb-3\">
                            <input class=\"form-control\"
                                id=\"phone\"
                                type=\"tel\"
                                placeholder=\"(123) 456-7890\"
                                data-sb-validations=\"required\" />
                            <label for=\"phone\">Téléphone</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"phone:required\">
                                A phone number is required.
                            </div>
                        </div>
                        <!-- Message input -->
                        <div class=\"form-floating mb-3\">
                            <textarea class=\"form-control\"
                                id=\"message\"
                                type=\"text\"
                                placeholder=\"Enter your message here...\"
                                style=\"height: 10rem\"
                                data-sb-validations=\"required\"></textarea>
                            <label for=\"message\">Message</label>
                            <div class=\"invalid-feedback\" data-sb-feedback=\"message:required\">
                                A message is required.
                            </div>
                        </div>
                        <!-- Submit success message -->
                        <!--  -->
                        <!-- This is what your users will see when the form -->
                        <!-- has successfully submitted -->
                        <div class=\"d-none\" id=\"submitSuccessMessage\">
                            <div class=\"text-center mb-3\">
                                <div class=\"fw-bolder\">
                                Form submission successful!
                                </div>To activate this form, sign up at
                                <br />
                                <a href=\"https://startbootstrap.com/solution/contact-forms\">
                                https://startbootstrap.com/solution/contact-forms
                                </a>
                            </div>
                        </div>
                        <!-- Submit error message -->
                        <!--  -->
                        <!-- This is what your users will see when there is -->
                        <!-- an error submitting the form -->
                        <div class=\"d-none\" id=\"submitErrorMessage\">
                            <div class=\"text-center text-danger mb-3\">
                                Error sending message!
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button class=\"btn btn-primary btn-xl disabled\"
                        id=\"submitButton\"
                        type=\"submit\">
                        Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "contact.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\contact.twig");
    }
}
