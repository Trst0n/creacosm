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

/* sondage/repondre.html.twig */
class __TwigTemplate_394d6ada6d3a0e77343d113eafc046a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/repondre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/repondre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/repondre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Repondre";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Repondre</h1>

    <h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>


    <p>Introduction : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 12, $this->source); })()), "introduction", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    <p>Visibilité : ";
        // line 13
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 13, $this->source); })()), "visibilite", [], "any", false, false, false, 13)) ? ("Public") : ("Privé"));
        echo "</p>
    ";
        // line 14
        $context["i"] = 1;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 15, $this->source); })()), "questions", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 16
            echo "
        <h3>Question ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "</h3>
        <p> </p>

        <form action=\"/sondage/reponsesondage\" method=\"post\">
        <input type=\"hidden\" name=\"idsondage\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"iduser\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
        <fieldset>
            <legend>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 24), "html", null, true);
            echo " </legend>

            ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26) == "multiple")) {
                // line 27
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 28
                    echo "                    <div>
                        <input type=\"checkbox\" id=\"";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 30), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 30), "html", null, true);
                    echo "</label>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 33), "type", [], "any", false, false, false, 33) == "oui_non")) {
                // line 34
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 35
                    echo "                    <div>
                        <input type=\"radio\" id=\"";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 37), "html", null, true);
                    echo "</label>
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                ";
            } else {
                // line 41
                echo "                    <div>
                        <textarea name=\"ouverte";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "\" rows=\"5\" cols=\"33\" style=\"resize:none;\" autocomplete=\"off\"></textarea>
                    </div>
            ";
            }
            // line 45
            echo "

        </fieldset>
        ";
            // line 48
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 48, $this->source); })()) + 1);
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <br>
        <br>
        <button type=\"submit\">Repondre au sondage </button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/repondre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 50,  216 => 49,  214 => 48,  209 => 45,  203 => 42,  200 => 41,  197 => 40,  186 => 37,  178 => 36,  175 => 35,  170 => 34,  167 => 33,  156 => 30,  148 => 29,  145 => 28,  140 => 27,  138 => 26,  133 => 24,  128 => 22,  124 => 21,  117 => 17,  114 => 16,  109 => 15,  107 => 14,  103 => 13,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Repondre{% endblock %}

{% block body %}

    <h1>Repondre</h1>

    <h2>{{ sondage.nom }}</h2>


    <p>Introduction : {{ sondage.introduction }}</p>
    <p>Visibilité : {{ sondage.visibilite  ? \"Public\" : \"Privé\" }}</p>
    {% set i = 1 %}
    {% for question in sondage.questions %}

        <h3>Question {{ i }}</h3>
        <p> </p>

        <form action=\"/sondage/reponsesondage\" method=\"post\">
        <input type=\"hidden\" name=\"idsondage\" value=\"{{ sondage.id }}\">
        <input type=\"hidden\" name=\"iduser\" value=\"{{ app.user.id }}\">
        <fieldset>
            <legend>{{ question.intitule }} </legend>

            {% if question.type.type == 'multiple' %}
                {% for reponse in question.reponses %}
                    <div>
                        <input type=\"checkbox\" id=\"{{ reponse.id }}\" name=\"{{ reponse.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                    {% endfor %}
                {% elseif question.type.type == 'oui_non' %}
                    {% for reponse in question.reponses %}
                    <div>
                        <input type=\"radio\" id=\"{{ reponse.id }}\" name=\"{{ reponse.id }}\" value=\"{{ reponse.reponse }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                    {% endfor %}
                {% else %}
                    <div>
                        <textarea name=\"ouverte{{ i }}\" rows=\"5\" cols=\"33\" style=\"resize:none;\" autocomplete=\"off\"></textarea>
                    </div>
            {% endif %}


        </fieldset>
        {% set i = i + 1 %}
    {% endfor %}

        <br>
        <br>
        <button type=\"submit\">Repondre au sondage </button>
    </form>
{% endblock %}", "sondage/repondre.html.twig", "/var/www/html/creacosm/templates/sondage/repondre.html.twig");
    }
}
