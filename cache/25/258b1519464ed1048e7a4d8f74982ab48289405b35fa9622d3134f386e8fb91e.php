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

/* blog/tag.twig */
class __TwigTemplate_5910389317a59b23357579af14f150a8c71043095ce18f7e478dee614a944f0d extends Template
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
        echo "<div class=\"container masthead\">
    <div class=\"row justify-content-center\"> 
        <div class=\"col-md-8\"> 
            <h1 class=\"m-3\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["params"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["tag"] ?? null) : null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["params"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["tag"] ?? null) : null), "getPosts", [], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
                <div class=\"card mb-3\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"./posts/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>   
                    </div>       
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog/tag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  55 => 9,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container masthead\">
    <div class=\"row justify-content-center\"> 
        <div class=\"col-md-8\"> 
            <h1 class=\"m-3\">{{ params['tag'].name }}</h1>
            {% for post in params['tag'].getPosts() %} 
                <div class=\"card mb-3\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <a href=\"./posts/{{ post.id }}\">{{ post.title }}</a>   
                    </div>       
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "blog/tag.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\blog\\tag.twig");
    }
}
