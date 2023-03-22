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

        function changementscene(div) {
            switch (div){
                case('infospersos'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'block';
                    document.getElementById(\"messondages\").style.display = 'none';
                    break;
                case('messondages'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'block';
                    break;
                case('sondagesrep'):
                    document.getElementById(\"sondagesrep\").style.display = 'block';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    break;
            }

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
    <br><br>
        <br><button  onclick=\"changementscene('infospersos')\">Mes informations</button>
        ";
        // line 50
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50))) {
            // line 51
            echo "            <button onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "roles", [], "any", false, false, false, 52))) {
            // line 53
            echo "            <button role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
        ";
        }
        // line 55
        echo "    <div id=\"infospersos\">
        <br>
        <h4>Informations personelles</h4>
            Nom: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
        echo " <br>
            Prenom: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "prenom", [], "any", false, false, false, 59), "html", null, true);
        echo " <br>
            Date de naissance: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "datedenaissance", [], "any", false, false, false, 60), "html", null, true);
        echo " <br>
            Ville : ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "ville", [], "any", false, false, false, 61), "html", null, true);
        echo " <br>
            ";
        // line 62
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "roles", [], "any", false, false, false, 62))) {
            // line 63
            echo "                Profession: Non renseigné <br>
            ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "roles", [], "any", false, false, false, 64))) {
            // line 65
            echo "                Entreprise: Non renseigné <br>
            ";
        }
        // line 67
        echo "            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo ">
                    Login: <p id=\"modifierlogin\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "login", [], "any", false, false, false, 69), "html", null, true);
        echo "  <button onclick=\"modifierinfos('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "login", [], "any", false, false, false, 69), "html", null, true);
        echo "', 'modifier')\">modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        echo ">
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button onclick=\"modifierinfos('******','modifier')\">modifier</button> </p>
            </form>

    </div>
    <div id =\"sondagesrep\" style=\"display: none\">
        ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "sondages", [], "any", false, false, false, 78), "count", [], "method", false, false, false, 78) == 0)) {
            // line 79
            echo "            <br><br>
            Vous n'avez répondu à aucun sondage
        ";
        }
        // line 82
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "sondages", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 83
            echo "            <h4>Sondage: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 83), "html", null, true);
            echo "</h4>
            Créé par : ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "createur", [], "any", false, false, false, 84), "prenom", [], "any", false, false, false, 84), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "createur", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
            echo "
            Présentation: <br>
            ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 86), "html", null, true);
            echo "<br>
            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "reponses", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 88
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 88), "sondage", [], "any", false, false, false, 88) == $context["sondage"])) {
                    // line 89
                    echo "                    <fieldset>
                        <legend>";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 90), "intitule", [], "any", false, false, false, 90), "html", null, true);
                    echo " </legend>
                        Vous avez répondu: ";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 91), "html", null, true);
                    echo " <br>
                    </fieldset>
                ";
                }
                // line 94
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </div>

    <div id =\"messondages\" style=\"display: none\">

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
        return array (  261 => 96,  255 => 95,  249 => 94,  243 => 91,  239 => 90,  236 => 89,  233 => 88,  229 => 87,  225 => 86,  218 => 84,  213 => 83,  208 => 82,  203 => 79,  201 => 78,  192 => 72,  184 => 69,  180 => 68,  177 => 67,  173 => 65,  171 => 64,  168 => 63,  166 => 62,  162 => 61,  158 => 60,  154 => 59,  150 => 58,  145 => 55,  141 => 53,  139 => 52,  136 => 51,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte{% endblock %}

{% block body %}
    <script>

        function changementscene(div) {
            switch (div){
                case('infospersos'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'block';
                    document.getElementById(\"messondages\").style.display = 'none';
                    break;
                case('messondages'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'block';
                    break;
                case('sondagesrep'):
                    document.getElementById(\"sondagesrep\").style.display = 'block';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    break;
            }

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
    <br><br>
        <br><button  onclick=\"changementscene('infospersos')\">Mes informations</button>
        {% if 'ROLE_USER' in app.user.roles %}
            <button onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        {% elseif 'ROLE_ADMIN' in app.user.roles %}
            <button role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
        {% endif %}
    <div id=\"infospersos\">
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
    <div id =\"sondagesrep\" style=\"display: none\">
        {%  if app.user.sondages.count() == 0%}
            <br><br>
            Vous n'avez répondu à aucun sondage
        {% endif %}
        {% for sondage in app.user.sondages %}
            <h4>Sondage: {{ sondage.nom }}</h4>
            Créé par : {{ sondage.createur.prenom }} {{ sondage.createur.nom }}
            Présentation: <br>
            {{ sondage.introduction }}<br>
            {% for reponse in app.user.reponses %}
                {% if reponse.question.sondage == sondage %}
                    <fieldset>
                        <legend>{{ reponse.question.intitule }} </legend>
                        Vous avez répondu: {{ reponse.reponse }} <br>
                    </fieldset>
                {% endif %}
            {% endfor %}
        {% endfor %}
    </div>

    <div id =\"messondages\" style=\"display: none\">

    </div>
{% endblock %}", "racine/moncompte.html.twig", "/var/www/html/creacosm/templates/racine/moncompte.html.twig");
    }
}
