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

/* sondage/show.html.twig */
class __TwigTemplate_5e2e46c8a647b98d1b7ce01860f8505f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/show.html.twig", 1);
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

        echo "Sondage";
        
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
        echo "<div class=\"container\">
    <div class=\"align-middle\" style=\"margin-top: 10%\">
    <h1>Sondage</h1>
        <br>
        <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Nom :</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Présentation :</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 18, $this->source); })()), "introduction", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visibilité :</th>
                <td>";
        // line 22
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 22, $this->source); })()), "visibilite", [], "any", false, false, false, 22)) ? ("Public") : ("Privé"));
        echo "</td>
            </tr>
            <tr>
                <th>Créé par :</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 26, $this->source); })()), "administrateur", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Le :</th>
                <td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 30, $this->source); })()), "datecreation", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 30, $this->source); })()), "datecreation", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">Retour</a>

    <a class=\"btn btn-outline-secondary\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\">Modifier</a>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  134 => 35,  126 => 30,  119 => 26,  112 => 22,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sondage{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"align-middle\" style=\"margin-top: 10%\">
    <h1>Sondage</h1>
        <br>
        <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Nom :</th>
                <td>{{ sondage.nom }}</td>
            </tr>
            <tr>
                <th>Présentation :</th>
                <td>{{ sondage.introduction }}</td>
            </tr>
            <tr>
                <th>Visibilité :</th>
                <td>{{ sondage.visibilite ? 'Public' : 'Privé' }}</td>
            </tr>
            <tr>
                <th>Créé par :</th>
                <td>{{ sondage.administrateur.nom }}</td>
            </tr>
            <tr>
                <th>Le :</th>
                <td>{{ sondage.datecreation ? sondage.datecreation|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-outline-dark\" href=\"{{ path('app_sondage_index') }}\">Retour</a>

    <a class=\"btn btn-outline-secondary\" href=\"{{ path('app_sondage_edit', {'id': sondage.id}) }}\">Modifier</a>
    </div>
</div>

{% endblock %}
", "sondage/show.html.twig", "/var/www/html/creacosm/templates/sondage/show.html.twig");
    }
}
