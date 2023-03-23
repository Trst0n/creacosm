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

/* sondage/index.html.twig */
class __TwigTemplate_a8bc8fc521ce2a02103181eb0b4a060b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/index.html.twig", 1);
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

        echo "Sondage index";
        
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
        echo "    <h1>Sondage index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Introduction</th>
                <th>Visibilite</th>
                <th>Theme</th>
                <th>Datecreation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

        <p> Filtrer les sondages par leur thème : </p>
        <form action=\"./themedefine\" method=\"POST\">
            <select name=\"theme\" id=\"type-select\" autocomplete=\"off\" >
                <option name=\"Tous les sondages\" value=\"Tous les sondages\">Tous les sondages</option>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["theme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 26
            echo "                    <option name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "theme", [], "any", false, false, false, 26), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            </select>
            <input type=\"submit\" value=\"Valider\">
        </form>

        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sondages"]) || array_key_exists("sondages", $context) ? $context["sondages"] : (function () { throw new RuntimeError('Variable "sondages" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 37)) ? ("Public") : ("Privé"));
            echo "</td>
                <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "theme", [], "any", false, false, false, 38), "theme", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
                    ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    ";
                if (twig_in_filter($context["sondage"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "sondages", [], "any", false, false, false, 44))) {
                    // line 45
                    echo "                        Sondage déjà repondu
                    ";
                } else {
                    // line 47
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repondre", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\" >Repondre</a>
                    ";
                }
                // line 49
                echo "                    ";
            }
            // line 50
            echo "

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 62,  206 => 59,  197 => 55,  188 => 50,  185 => 49,  179 => 47,  175 => 45,  172 => 44,  170 => 43,  166 => 42,  162 => 41,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  133 => 33,  126 => 28,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sondage index{% endblock %}

{% block body %}
    <h1>Sondage index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Introduction</th>
                <th>Visibilite</th>
                <th>Theme</th>
                <th>Datecreation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

        <p> Filtrer les sondages par leur thème : </p>
        <form action=\"./themedefine\" method=\"POST\">
            <select name=\"theme\" id=\"type-select\" autocomplete=\"off\" >
                <option name=\"Tous les sondages\" value=\"Tous les sondages\">Tous les sondages</option>
                {% for theme in theme %}
                    <option name=\"{{ theme.id }}\" value=\"{{ theme.id }}\">{{ theme.theme }}</option>
                {% endfor %}

            </select>
            <input type=\"submit\" value=\"Valider\">
        </form>

        {% for sondage in sondages %}
            <tr>
                <td>{{ sondage.nom }}</td>
                <td>{{ sondage.introduction }}</td>
                <td>{{ sondage.visibilite ? 'Public' : 'Privé' }}</td>
                <td> {{ sondage.theme.theme }}</td>
                <td>{{ sondage.datecreation ? sondage.datecreation|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_sondage_show', {'id': sondage.id}) }}\">show</a>
                    <a href=\"{{ path('app_sondage_edit', {'id': sondage.id}) }}\">edit</a>
                    {% if app.user %}
                    {% if sondage in app.user.sondages %}
                        Sondage déjà repondu
                    {% else %}
                        <a href=\"{{ path('app_repondre', {'id': sondage.id}) }}\" >Repondre</a>
                    {%  endif %}
                    {%  endif %}


                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_sondage_new') }}\">Create new</a>
{% endblock %}
", "sondage/index.html.twig", "/var/www/html/creacosm/templates/sondage/index.html.twig");
    }
}
