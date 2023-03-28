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
        echo "    <div class=\"container   \">
    <div class=\"align-middle\" style=\"margin-top: 3%\">
    <h1>Repondre</h1>

    <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>


    <p>Présentation : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 13, $this->source); })()), "introduction", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
    <p>Visibilité : ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 14, $this->source); })()), "visibilite", [], "any", false, false, false, 14)) ? ("Public") : ("Privé"));
        echo "</p>
    ";
        // line 15
        $context["i"] = 1;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 16, $this->source); })()), "questions", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 17
            echo "
        <h3>Question ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</h3>
        <p> </p>

        <form action=\"/sondage/reponsesondage\" method=\"post\">
        <input type=\"hidden\" name=\"idsondage\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"iduser\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
        <fieldset>
            <legend>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 25), "html", null, true);
            echo " </legend>
            ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 26)) {
                // line 27
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 27), "visuel", [], "any", false, false, false, 27) != "")) {
                    // line 28
                    echo "                    <img class=\"img-fluid\" alt=\"Responsive image\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 28), "visuel", [], "any", false, false, false, 28), "html", null, true);
                    echo " \"  >
                ";
                }
                // line 30
                echo "            ";
            }
            // line 31
            echo "

            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 33), "type", [], "any", false, false, false, 33) == "multiple")) {
                // line 34
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 35
                    echo "                    <div>
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 36), "html", null, true);
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
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 40), "type", [], "any", false, false, false, 40) == "oui_non")) {
                // line 41
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 42
                    echo "                    <div>
                        <input  class=\"form-check-input\" type=\"radio\" id=\"";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 44), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 44), "html", null, true);
                    echo "</label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 47), "type", [], "any", false, false, false, 47) == "unique")) {
                // line 48
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 49
                    echo "                    <div>
                        <input class=\"form-check-input\" type=\"radio\" id=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" autocomplete=\"off\">
                        <label for=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 51), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 51), "html", null, true);
                    echo "</label>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            ";
            } else {
                // line 55
                echo "                <div>
                    <textarea class=\"form-control\"  name=\"ouverte";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\" rows=\"5\" cols=\"33\" style=\"resize:none;\" autocomplete=\"off\"></textarea>
                </div>
            ";
            }
            // line 59
            echo "

        </fieldset>
        ";
            // line 62
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 62, $this->source); })()) + 1);
            // line 63
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <br>
    <br>
    <button class=\"btn btn-success\" type=\"submit\">Repondre au sondage </button>
    </form>
        <br>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">Retour</a>

    </div>
    </div>

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
        return array (  278 => 70,  270 => 64,  264 => 63,  262 => 62,  257 => 59,  251 => 56,  248 => 55,  245 => 54,  234 => 51,  226 => 50,  223 => 49,  218 => 48,  215 => 47,  204 => 44,  196 => 43,  193 => 42,  188 => 41,  185 => 40,  174 => 37,  166 => 36,  163 => 35,  158 => 34,  156 => 33,  152 => 31,  149 => 30,  143 => 28,  140 => 27,  138 => 26,  134 => 25,  129 => 23,  125 => 22,  118 => 18,  115 => 17,  110 => 16,  108 => 15,  104 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Repondre{% endblock %}

{% block body %}
    <div class=\"container   \">
    <div class=\"align-middle\" style=\"margin-top: 3%\">
    <h1>Repondre</h1>

    <h2>{{ sondage.nom }}</h2>


    <p>Présentation : {{ sondage.introduction }}</p>
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
                    <img class=\"img-fluid\" alt=\"Responsive image\" src=\"{{ question.visuel.visuel }} \"  >
                {%endif %}
            {% endif %}


            {% if question.type.type == 'multiple' %}
                {% for reponse in question.reponses %}
                    <div>
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"{{ reponse.id }}\" name=\"{{ reponse.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                {% endfor %}
            {% elseif question.type.type == 'oui_non' %}
                {% for reponse in question.reponses %}
                    <div>
                        <input  class=\"form-check-input\" type=\"radio\" id=\"{{ reponse.id }}\" name=\"{{ question.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                {% endfor %}
            {% elseif question.type.type == 'unique' %}
                {% for reponse in question.reponses %}
                    <div>
                        <input class=\"form-check-input\" type=\"radio\" id=\"{{ reponse.id }}\" name=\"{{ question.id }}\" value=\"{{ reponse.id }}\" autocomplete=\"off\">
                        <label for=\"{{ reponse.id }}\">{{ reponse.reponse }}</label>
                    </div>
                {% endfor %}
            {% else %}
                <div>
                    <textarea class=\"form-control\"  name=\"ouverte{{ i }}\" rows=\"5\" cols=\"33\" style=\"resize:none;\" autocomplete=\"off\"></textarea>
                </div>
            {% endif %}


        </fieldset>
        {% set i = i + 1 %}
    {% endfor %}

    <br>
    <br>
    <button class=\"btn btn-success\" type=\"submit\">Repondre au sondage </button>
    </form>
        <br>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('app_sondage_index') }}\">Retour</a>

    </div>
    </div>

{% endblock %}", "sondage/repondre.html.twig", "/var/www/html/creacosm/templates/sondage/repondre.html.twig");
    }
}
