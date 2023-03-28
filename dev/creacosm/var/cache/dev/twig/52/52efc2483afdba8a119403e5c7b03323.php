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
class __TwigTemplate_07ae4d87d27c1d60eae82b705068f051 extends Template
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
        echo "    <div class=\"container  align-items-center \" style=\"margin-top: 5%\">
        <h1>Sondage index</h1>

        <div class=-container\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Présentation</th>
                <th>Visibilite</th>
                <th>Theme</th>
                <th>Datecreation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

        <p class=\"form-control-plaintext\" > Filtrer les sondages par leur thème : </p>
        <form action=\"./themedefine\" method=\"POST\">
            <select class=\"form-select\" name=\"theme\" id=\"type-select\" autocomplete=\"off\" >
                <option name=\"Tous les sondages\" value=\"Tous les sondages\">Tous les sondages</option>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["theme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 28
            echo "                    <option name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "theme", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
            </select>
            <br>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\">
        </form>

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sondages"]) || array_key_exists("sondages", $context) ? $context["sondages"] : (function () { throw new RuntimeError('Variable "sondages" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 40)) ? ("Public") : ("Privé"));
            echo "</td>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "theme", [], "any", false, false, false, 41), "theme", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 44)) {
                // line 45
                echo "                        <a class=\"btn btn-outline-info\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Voir</a>
                    ";
            } else {
                // line 47
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                            <a class=\"btn btn-outline-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\">Voir</a>
                        ";
                } else {
                    // line 50
                    echo "                            <button class=\"btn btn-outline-info\" disabled >Voir</button>

                        ";
                }
                // line 53
                echo "                    ";
            }
            // line 54
            echo "                    <a class=\"btn btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Modifier</a>
                    ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
                // line 56
                echo "                        ";
                if (twig_in_filter($context["sondage"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "sondages", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "                            <label > Sondage déjà repondu </label>
                        ";
                } else {
                    // line 59
                    echo "                            <a class=\"btn btn-outline-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_repondre", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                    echo "\" >Répondre</a>
                        ";
                }
                // line 61
                echo "                    ";
            } else {
                // line 62
                echo "                        <button class=\"btn btn-outline-success\" disabled >Répondre</button>
                    ";
            }
            // line 64
            echo "

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) {
            // line 76
            echo "
            ";
            // line 77
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "roles", [], "any", false, false, false, 77))) {
                // line 78
                echo "    <a class=\"btn btn-success btn-lg btn-block\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
                echo "\">Creer un nouveau Sondage</a>

            ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        </div>
    </div>
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
        return array (  256 => 82,  253 => 81,  246 => 78,  244 => 77,  241 => 76,  239 => 75,  235 => 73,  226 => 69,  217 => 64,  213 => 62,  210 => 61,  204 => 59,  200 => 57,  197 => 56,  195 => 55,  190 => 54,  187 => 53,  182 => 50,  176 => 48,  173 => 47,  167 => 45,  165 => 44,  160 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  141 => 37,  136 => 36,  128 => 30,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sondage index{% endblock %}

{% block body %}
    <div class=\"container  align-items-center \" style=\"margin-top: 5%\">
        <h1>Sondage index</h1>

        <div class=-container\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Présentation</th>
                <th>Visibilite</th>
                <th>Theme</th>
                <th>Datecreation</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>

        <p class=\"form-control-plaintext\" > Filtrer les sondages par leur thème : </p>
        <form action=\"./themedefine\" method=\"POST\">
            <select class=\"form-select\" name=\"theme\" id=\"type-select\" autocomplete=\"off\" >
                <option name=\"Tous les sondages\" value=\"Tous les sondages\">Tous les sondages</option>
                {% for theme in theme %}
                    <option name=\"{{ theme.id }}\" value=\"{{ theme.id }}\">{{ theme.theme }}</option>
                {% endfor %}

            </select>
            <br>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Valider\">
        </form>

        {% for sondage in sondages %}
            <tr>
                <td>{{ sondage.nom }}</td>
                <td>{{ sondage.introduction }}</td>
                <td>{{ sondage.visibilite ? 'Public' : 'Privé' }}</td>
                <td> {{ sondage.theme.theme }}</td>
                <td>{{ sondage.datecreation ? sondage.datecreation|date('Y-m-d') : '' }}</td>
                <td>
                    {% if sondage.visibilite %}
                        <a class=\"btn btn-outline-info\" href=\"{{ path('app_sondage_show', {'id': sondage.id}) }}\">Voir</a>
                    {% else %}
                        {% if app.user %}
                            <a class=\"btn btn-outline-info\" href=\"{{ path('app_sondage_show', {'id': sondage.id}) }}\">Voir</a>
                        {% else %}
                            <button class=\"btn btn-outline-info\" disabled >Voir</button>

                        {% endif %}
                    {% endif  %}
                    <a class=\"btn btn-outline-secondary\" href=\"{{ path('app_sondage_edit', {'id': sondage.id}) }}\">Modifier</a>
                    {% if app.user %}
                        {% if sondage in app.user.sondages %}
                            <label > Sondage déjà repondu </label>
                        {% else %}
                            <a class=\"btn btn-outline-success\" href=\"{{ path('app_repondre', {'id': sondage.id}) }}\" >Répondre</a>
                        {%  endif %}
                    {% else %}
                        <button class=\"btn btn-outline-success\" disabled >Répondre</button>
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
            {% if app.user %}

            {% if \"ROLE_ADMIN\" in app.user.roles %}
    <a class=\"btn btn-success btn-lg btn-block\" href=\"{{ path('app_sondage_new') }}\">Creer un nouveau Sondage</a>

            {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "sondage/index.html.twig", "/var/www/html/creacosm/templates/sondage/index.html.twig");
    }
}
