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
class __TwigTemplate_52acc14ac5ba69438acfe1aa2358e759 extends Template
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
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 25)) {
                // line 26
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 26), "visuel", [], "any", false, false, false, 26) != "")) {
                    // line 27
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 27), "visuel", [], "any", false, false, false, 27), "html", null, true);
                    echo " \"  style=\"width:500px;height:300px;\">
                ";
                }
                // line 29
                echo "            ";
            }
            // line 30
            echo "

            ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 32), "type", [], "any", false, false, false, 32) == "multiple")) {
                // line 33
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 34
                    echo "                    <div>
                        <input type=\"checkbox\" id=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 36), "html", null, true);
                    echo "</label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "oui_non")) {
                // line 40
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 41
                    echo "                    <div>
                        <input type=\"radio\" id=\"";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 43), "html", null, true);
                    echo "</label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) == "unique")) {
                // line 47
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 48
                    echo "                    <div>
                        <input type=\"radio\" id=\"";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 50), "html", null, true);
                    echo "</label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "            ";
            } else {
                // line 54
                echo "                <div>
                    <textarea name=\"ouverte";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "\" rows=\"5\" cols=\"33\" style=\"resize:none;\" autocomplete=\"off\"></textarea>
                </div>
            ";
            }
            // line 58
            echo "

        </fieldset>
        ";
            // line 61
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 61, $this->source); })()) + 1);
            // line 62
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        return array (  269 => 63,  263 => 62,  261 => 61,  256 => 58,  250 => 55,  247 => 54,  244 => 53,  233 => 50,  225 => 49,  222 => 48,  217 => 47,  214 => 46,  203 => 43,  195 => 42,  192 => 41,  187 => 40,  184 => 39,  173 => 36,  165 => 35,  162 => 34,  157 => 33,  155 => 32,  151 => 30,  148 => 29,  142 => 27,  139 => 26,  137 => 25,  133 => 24,  128 => 22,  124 => 21,  117 => 17,  114 => 16,  109 => 15,  107 => 14,  103 => 13,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            {% if question.visuel %}
                {% if question.visuel.visuel != \"\" %}
                    <img src=\"{{ question.visuel.visuel }} \"  style=\"width:500px;height:300px;\">
                {%endif %}
            {% endif %}


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
                        <input type=\"radio\" id=\"{{ reponse.id }}\" name=\"{{ question.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                {% endfor %}
            {% elseif question.type.type == 'unique' %}
                {% for reponse in question.reponses %}
                    <div>
                        <input type=\"radio\" id=\"{{ reponse.id }}\" name=\"{{ question.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
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
