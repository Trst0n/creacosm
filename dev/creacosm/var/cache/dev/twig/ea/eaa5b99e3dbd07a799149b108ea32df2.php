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

/* racine/moncompte.html.twig */
class __TwigTemplate_a153cf8f2c0cc0a7ea27cc1ef137b6bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "racine/moncompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "racine/moncompte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "racine/moncompte.html.twig", 1);
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

        echo "Mon compte";
        
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
        echo "    <script>

        function changementscene(div,question) {
            document.getElementById(div).style.display = 'none';
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(question).innerHTML=\"<input name=\\\"\"+ question +\"\\\" value=\\\"false\\\" type=\\\"hidden\\\">\";
            document.getElementById(\"cpt\").innerHTML= \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\\\"\"+ i +\"\\\">\"
        }
        function modifierinfos(information, option){

            if (information === '******'){
                if(option === 'modifier'){
                    document.getElementById(\"modifierpassword\").innerHTML= \"<input name=\\\"password\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button type='submit' >Valider</button><button onclick=\\\"modifierinfos('******','reset')\\\">Annuler</button>\"
                }
                else{

                    document.getElementById(\"modifierpassword\").innerHTML= \"****** <button onclick=\\\"modifierinfos('******','modifier')\\\">modifier</button>\"
                }
            }else{
                if(option === 'modifier'){
                    document.getElementById(\"modifierlogin\").innerHTML= \"<input name=\\\"login\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button type='submit'> Valider </button>  <button onclick=\\\"modifierinfos('\"+ information +\"','reset')\\\">Annuler</button>\"
                }
                else{
                    document.getElementById(\"modifierlogin\").innerHTML=  information +\"<button onclick=\\\"modifierinfos('\" + information + \"','modifier')\\\">modifier</button>\"
                }
            }
        }
    </script>
    <div>
        <br><a href=\"#\">    Mes informations</a>
        ";
        // line 37
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "roles", [], "any", false, false, false, 37))) {
            // line 38
            echo "            <a href=\"#\">Sondages repondus</a>
        ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "roles", [], "any", false, false, false, 39))) {
            // line 40
            echo "            <a href=\"#\">Mes Sondages</a>
        ";
        }
        // line 42
        echo "        <br>
        <h4>Informations personelles</h4>
            Nom: ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
        echo " <br>
            Prenom: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
        echo " <br>
            Date de naissance: ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "datedenaissance", [], "any", false, false, false, 46), "html", null, true);
        echo " <br>
            Ville : ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "ville", [], "any", false, false, false, 47), "html", null, true);
        echo " <br>
            ";
        // line 48
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "roles", [], "any", false, false, false, 48))) {
            // line 49
            echo "                Profession: Non renseigné <br>
            ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50))) {
            // line 51
            echo "                Entreprise: Non renseigné <br>
            ";
        }
        // line 53
        echo "            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo ">
                    Login: <p id=\"modifierlogin\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "login", [], "any", false, false, false, 55), "html", null, true);
        echo "  <button onclick=\"modifierinfos('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "login", [], "any", false, false, false, 55), "html", null, true);
        echo "', 'modifier')\">modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        echo ">
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button onclick=\"modifierinfos('******','modifier')\">modifier</button> </p>
            </form>


    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "racine/moncompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  170 => 55,  166 => 54,  163 => 53,  159 => 51,  157 => 50,  154 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  132 => 42,  128 => 40,  126 => 39,  123 => 38,  121 => 37,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte{% endblock %}

{% block body %}
    <script>

        function changementscene(div,question) {
            document.getElementById(div).style.display = 'none';
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(question).innerHTML=\"<input name=\\\"\"+ question +\"\\\" value=\\\"false\\\" type=\\\"hidden\\\">\";
            document.getElementById(\"cpt\").innerHTML= \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\\\"\"+ i +\"\\\">\"
        }
        function modifierinfos(information, option){

            if (information === '******'){
                if(option === 'modifier'){
                    document.getElementById(\"modifierpassword\").innerHTML= \"<input name=\\\"password\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button type='submit' >Valider</button><button onclick=\\\"modifierinfos('******','reset')\\\">Annuler</button>\"
                }
                else{

                    document.getElementById(\"modifierpassword\").innerHTML= \"****** <button onclick=\\\"modifierinfos('******','modifier')\\\">modifier</button>\"
                }
            }else{
                if(option === 'modifier'){
                    document.getElementById(\"modifierlogin\").innerHTML= \"<input name=\\\"login\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button type='submit'> Valider </button>  <button onclick=\\\"modifierinfos('\"+ information +\"','reset')\\\">Annuler</button>\"
                }
                else{
                    document.getElementById(\"modifierlogin\").innerHTML=  information +\"<button onclick=\\\"modifierinfos('\" + information + \"','modifier')\\\">modifier</button>\"
                }
            }
        }
    </script>
    <div>
        <br><a href=\"#\">    Mes informations</a>
        {% if 'ROLE_USER' in app.user.roles %}
            <a href=\"#\">Sondages repondus</a>
        {% elseif 'ROLE_ADMIN' in app.user.roles %}
            <a href=\"#\">Mes Sondages</a>
        {% endif %}
        <br>
        <h4>Informations personelles</h4>
            Nom: {{ app.user.nom }} <br>
            Prenom: {{ app.user.prenom }} <br>
            Date de naissance: {{ app.user.datedenaissance }} <br>
            Ville : {{ app.user.ville }} <br>
            {% if 'ROLE_USER' in app.user.roles %}
                Profession: Non renseigné <br>
            {% elseif 'ROLE_ADMIN' in app.user.roles %}
                Entreprise: Non renseigné <br>
            {% endif %}
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value={{ app.user.id }}>
                    Login: <p id=\"modifierlogin\">{{ app.user.login }}  <button onclick=\"modifierinfos('{{ app.user.login }}', 'modifier')\">modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value={{ app.user.id }}>
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button onclick=\"modifierinfos('******','modifier')\">modifier</button> </p>
            </form>


    </div>
{% endblock %}", "racine/moncompte.html.twig", "/var/www/html/creacosm/templates/racine/moncompte.html.twig");
    }
}
