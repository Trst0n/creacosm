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

/* sondage/create_theme.html.twig */
class __TwigTemplate_e703e2efef6bc97e8c14f0b421bac0eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/create_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/create_theme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/create_theme.html.twig", 1);
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

        echo "Edit Sondage";
        
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
    <script>
        function deleteT(id) {
            document.getElementById(\"idp\").innerHTML = \"<input name=\\\"id\\\" id=\\\"id\\\" type=\\\"hidden\\\" value =\\\"77\\\">\";
        }

    </script>
    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "    <p class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</p>
    ";
        }
        // line 16
        echo "
    <div class=\"container   \">
        <div class=\"align-middle\" style=\"margin-top: 3%\">
    <h1>Créer un nouveau theme</h1>


    <p id=\"idp\">
    <input name=\"id\" id=\"id\" type=\"hidden\" value =\"\">
    </p>
    <form action=\"/sondage/creationTheme\" id =\"form\" method=\"POST\">
        <label>
            Nom du thème à créer : <input class=\"form-control\"  type=\"text\" name=\"theme\" required>
        </label>
        <button type=\"submit\" class=\"btn btn-outline-primary\" >Creer</button>
    </form>
<br>
    <h1>Liste Theme</h1>
            <br>
            <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom des themes</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["theme"]);
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "theme", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-danger\" type=\"button\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_theme_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">Supprimer</a>
                </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </tbody>
        </table>
    </form>


            <a class=\"btn btn-outline-dark\" href=\"";
        // line 55
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
        return "sondage/create_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  154 => 49,  143 => 44,  139 => 43,  136 => 42,  132 => 41,  105 => 16,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Sondage{% endblock %}

{% block body %}

    <script>
        function deleteT(id) {
            document.getElementById(\"idp\").innerHTML = \"<input name=\\\"id\\\" id=\\\"id\\\" type=\\\"hidden\\\" value =\\\"77\\\">\";
        }

    </script>
    {% if erreur|length > 0 %}
    <p class=\"alert alert-danger\" >{{ erreur }}</p>
    {% endif %}

    <div class=\"container   \">
        <div class=\"align-middle\" style=\"margin-top: 3%\">
    <h1>Créer un nouveau theme</h1>


    <p id=\"idp\">
    <input name=\"id\" id=\"id\" type=\"hidden\" value =\"\">
    </p>
    <form action=\"/sondage/creationTheme\" id =\"form\" method=\"POST\">
        <label>
            Nom du thème à créer : <input class=\"form-control\"  type=\"text\" name=\"theme\" required>
        </label>
        <button type=\"submit\" class=\"btn btn-outline-primary\" >Creer</button>
    </form>
<br>
    <h1>Liste Theme</h1>
            <br>
            <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>Nom des themes</th>
            </tr>
            </thead>
            <tbody>
            {% for theme in theme %}
            <tr>
                <td>{{ theme.theme }}</td>
                <td><a class=\"btn btn-danger\" type=\"button\" href=\"{{ path('app_theme_delete', {'id': theme.id}) }}\">Supprimer</a>
                </td>

            </tr>
            {% endfor %}

            </tbody>
        </table>
    </form>


            <a class=\"btn btn-outline-dark\" href=\"{{ path('app_sondage_index') }}\">Retour</a>
        </div>
    </div>

{% endblock  body%}", "sondage/create_theme.html.twig", "/var/www/html/creacosm/templates/sondage/create_theme.html.twig");
    }
}
