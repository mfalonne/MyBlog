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

/* admin/post/form.twig */
class __TwigTemplate_b708aa8542acc95e2117d8358c374b9b5e2073a550a63febbeb47b8922b74086 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "admin/post/form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"container masthead\">
        <h1>";
        // line 4
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true))) : (print ("Créer un nouvel article")));
        echo "</h1>

        <form action=\"";
        // line 6
        ((array_key_exists("post", $context)) ? (print (twig_escape_filter($this->env, ("/MyBlog/admin/posts/edit/" . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 6)), "html", null, true))) : (print ("/MyBlog/admin/posts/create")));
        echo "\" method=\"POST\">
            <div class=\"form-group mb-3\">
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" value=\"";
        // line 9
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true))) : (print ("")));
        echo "\">
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" class=\"form-control\">";
        // line 13
        (((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 13), "html", null, true))) : (print ("")));
        echo "</textarea>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"tags\">Tags de l'article</label>
                <select multiple id=\"tags\" class=\"form-control\" name=\"tags[]\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 19
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                            ";
            // line 20
            if (array_key_exists("post", $context)) {
                // line 21
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getTags", [], "method", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["postTag"]) {
                    // line 22
                    echo "                                    ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 22) == twig_get_attribute($this->env, $this->source, $context["postTag"], "id", [], "any", false, false, false, 22))) ? ("selected") : (""));
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postTag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                            ";
            }
            // line 25
            echo "                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "   
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 29
        echo ((array_key_exists("post", $context)) ? ("Enregistrer les modifications") : ("Enregistrer mon article"));
        echo "</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/post/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  116 => 26,  107 => 25,  104 => 24,  95 => 22,  90 => 21,  88 => 20,  83 => 19,  79 => 18,  71 => 13,  64 => 9,  58 => 6,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}
{% block body %}
    <div class=\"container masthead\">
        <h1>{{ post.title ?? 'Créer un nouvel article' }}</h1>

        <form action=\"{{ post is defined ? '/MyBlog/admin/posts/edit/' ~ post.id : '/MyBlog/admin/posts/create' }}\" method=\"POST\">
            <div class=\"form-group mb-3\">
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" value=\"{{ post.title ?? '' }}\">
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"content\">Contenu de l'article</label>
                <textarea name=\"content\" id=\"content\" rows=\"8\" class=\"form-control\">{{ post.content ?? '' }}</textarea>
            </div>
            <div class=\"form-group mb-3\">
                <label for=\"tags\">Tags de l'article</label>
                <select multiple id=\"tags\" class=\"form-control\" name=\"tags[]\">
                    {% for tag in tags %}
                        <option value=\"{{ tag.id }}\"
                            {% if post is defined %}
                                {% for postTag in post.getTags() %}
                                    {{ tag.id == postTag.id ? 'selected' }}
                                {% endfor %}
                            {% endif %}
                        >{{ tag.name }}</option>
                    {% endfor %}   
                </select>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">{{ post is defined ? 'Enregistrer les modifications' : 'Enregistrer mon article' }}</button>
        </form>
    </div>
{% endblock %}
", "admin/post/form.twig", "C:\\xampp\\htdocs\\MyBlog\\views\\admin\\post\\form.twig");
    }
}
