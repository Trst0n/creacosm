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
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 11, $this->source); })()), "introduction", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <p>Visibilité : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 12, $this->source); })()), "visibilite", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    ";
        // line 13
        $context["i"] = 1;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 14, $this->source); })()), "questions", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 15
            echo "
        <h3>Question ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</h3>
        <p> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 17), "html", null, true);
            echo " ?</p>
        ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 18), "type", [], "any", false, false, false, 18) == "multiple") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 18), "type", [], "any", false, false, false, 18) == "oui_non"))) {
                // line 19
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 20
                    echo "            <input type=\"radio\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" name=\"drone\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 20), "html", null, true);
                    echo "\"
                   checked>
            <label for=\"";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 22), "html", null, true);
                    echo "</label>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            <input type=\"text\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 25), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
        ";
            }
            // line 27
            echo "        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 27, $this->source); })()) + 1);
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<br>
    <br>
    <button type=\"submit\">Repondre au sondage </button>
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
        return array (  169 => 29,  163 => 28,  160 => 27,  152 => 25,  149 => 24,  139 => 22,  131 => 20,  126 => 19,  124 => 18,  120 => 17,  116 => 16,  113 => 15,  108 => 14,  106 => 13,  102 => 12,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Repondre{% endblock %}

{% block body %}

    <h1>Repondre</h1>

    <h2>{{ sondage.nom }}</h2>

    <p>Introduction : {{ sondage.introduction }}</p>
    <p>Visibilité : {{ sondage.visibilite }}</p>
    {% set i = 1 %}
    {% for question in sondage.questions %}

        <h3>Question {{ i }}</h3>
        <p> {{ question.intitule }} ?</p>
        {% if question.type.type == 'multiple' or question.type.type == \"oui_non\"%}
            {% for reponse in question.reponses %}
            <input type=\"radio\" id=\"{{ reponse.reponse }}\" name=\"drone\" value=\"{{ reponse.reponse }}\"
                   checked>
            <label for=\"{{ reponse.reponse }}\">{{ reponse.reponse }}</label>
            {% endfor %}
        {% else %}
            <input type=\"text\" id=\"{{ question.intitule }}\" name=\"{{ question.intitule }}\">
        {% endif %}
        {% set i = i + 1 %}
    {% endfor %}
<br>
    <br>
    <button type=\"submit\">Repondre au sondage </button>
{% endblock %}", "sondage/repondre.html.twig", "/var/www/html/creacosm/templates/sondage/repondre.html.twig");
    }
}
