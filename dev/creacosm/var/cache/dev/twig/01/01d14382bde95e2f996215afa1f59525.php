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

/* sondage/create.html.twig */
class __TwigTemplate_4a35b6a068ad70150bc4bc5c074f00df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/create.html.twig", 1);
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

        echo "Nouveau sondage";
        
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
        let int = 1;

        function myFunction() {
            int ++
            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + int +\">\";
            document.getElementById(\"demo\"+int).innerHTML += \"<label> Intitulé: <br> <input type=\\\"text\\\" name=\\\"intitule\"+ int+\"\\\"> </label> <br><br> <label for=\\\"type-select\\\">Choisissez un type:</label><br> <select name=\\\"type\"+ int+\"\\\" id=\\\"type-select\\\" onchange=\\\"choixtypebis(value)\\\" > <option value=\\\"\\\">--Choisissez une option--</option> <option value=\\\"multiple\\\">Question à choix multiple</option> <option value=\\\"ouverte\\\">Question ouverte</option> <option value=\\\"oui_non\\\">Question oui/non</option></select> <br><br> <label> Choix: <br> <p id=\\\"typequestion\" + int +\"\\\"></p><p id=\\\"demo\" + (int+1) + \"\\\"><br> </label> <br><br>\";
        }
        function choixtypebis(val) {
            let choix;
            switch (val){
                case \"multiple\":
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse1\\\"><br>Réponse 2 :<input type=\\\"text\\\" name=\\\"reponse2\\\"><br>Réponse 3 :<input type=\\\"text\\\" name=\\\"reponse3\\\"><br>Réponse 4 :<input type=\\\"text\\\" name=\\\"reponse4\\\"><br>\"
                    break
                case \"ouverte\":
                    choix = \"Question ouverte: Aucun affichage disponible\"
                    break
                case \"oui_non\":
                    choix = \"<label>Oui <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"oui\\\" checked> </label> <label>Non <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"non\\\"> </label>\"
                    break
                default:
                    choix =\"\"
                    break
            }
            let id = \"typequestion\" + int
            document.getElementById(id).innerHTML = choix
        }

    </script>

    <h1>Create new Sondage</h1>
    <form action=\"./create\" method=\"POST\">
        <p id =\"cpt\">       <input name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"1\">
        </p>
        <label >Visibilité</label>
        <br>
        <label>public
            <input type=\"radio\" name=\"visibilite\" value=\"public\" checked>
        </label>
        <label>privé
            <input type=\"radio\" name=\"visibilite\" value=\"prive\" required>
        </label>
        <br><br>
        <label> Nom:
            <br>
            <input type=\"text\" name=\"nom\" required>
        </label>
        <br>
        <br>
        <label> Introduction:
            <br>
            <input type=\"text\" name=\"introduction\" style=\"height:140px\" required>
        </label>
        <br>
        ";
        // line 60
        echo twig_include($this->env, $context, "sondage/createquestion.html.twig");
        echo "
        <br>
        <p id=\"demo2\"></p>
        <button type=\"button\" onclick=\"myFunction()\"> + Ajouter une question </button><br><br>

        <button type=\"submit\"> Créer </button>
    </form>


    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 69,  144 => 60,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau sondage{% endblock %}

{% block body %}
    <script>
        let int = 1;

        function myFunction() {
            int ++
            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + int +\">\";
            document.getElementById(\"demo\"+int).innerHTML += \"<label> Intitulé: <br> <input type=\\\"text\\\" name=\\\"intitule\"+ int+\"\\\"> </label> <br><br> <label for=\\\"type-select\\\">Choisissez un type:</label><br> <select name=\\\"type\"+ int+\"\\\" id=\\\"type-select\\\" onchange=\\\"choixtypebis(value)\\\" > <option value=\\\"\\\">--Choisissez une option--</option> <option value=\\\"multiple\\\">Question à choix multiple</option> <option value=\\\"ouverte\\\">Question ouverte</option> <option value=\\\"oui_non\\\">Question oui/non</option></select> <br><br> <label> Choix: <br> <p id=\\\"typequestion\" + int +\"\\\"></p><p id=\\\"demo\" + (int+1) + \"\\\"><br> </label> <br><br>\";
        }
        function choixtypebis(val) {
            let choix;
            switch (val){
                case \"multiple\":
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse1\\\"><br>Réponse 2 :<input type=\\\"text\\\" name=\\\"reponse2\\\"><br>Réponse 3 :<input type=\\\"text\\\" name=\\\"reponse3\\\"><br>Réponse 4 :<input type=\\\"text\\\" name=\\\"reponse4\\\"><br>\"
                    break
                case \"ouverte\":
                    choix = \"Question ouverte: Aucun affichage disponible\"
                    break
                case \"oui_non\":
                    choix = \"<label>Oui <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"oui\\\" checked> </label> <label>Non <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"non\\\"> </label>\"
                    break
                default:
                    choix =\"\"
                    break
            }
            let id = \"typequestion\" + int
            document.getElementById(id).innerHTML = choix
        }

    </script>

    <h1>Create new Sondage</h1>
    <form action=\"./create\" method=\"POST\">
        <p id =\"cpt\">       <input name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"1\">
        </p>
        <label >Visibilité</label>
        <br>
        <label>public
            <input type=\"radio\" name=\"visibilite\" value=\"public\" checked>
        </label>
        <label>privé
            <input type=\"radio\" name=\"visibilite\" value=\"prive\" required>
        </label>
        <br><br>
        <label> Nom:
            <br>
            <input type=\"text\" name=\"nom\" required>
        </label>
        <br>
        <br>
        <label> Introduction:
            <br>
            <input type=\"text\" name=\"introduction\" style=\"height:140px\" required>
        </label>
        <br>
        {{ include('sondage/createquestion.html.twig') }}
        <br>
        <p id=\"demo2\"></p>
        <button type=\"button\" onclick=\"myFunction()\"> + Ajouter une question </button><br><br>

        <button type=\"submit\"> Créer </button>
    </form>


    <a href=\"{{ path('app_sondage_index') }}\">back to list</a>
{% endblock %}", "sondage/create.html.twig", "/var/www/html/creacosm/templates/sondage/create.html.twig");
    }
}
