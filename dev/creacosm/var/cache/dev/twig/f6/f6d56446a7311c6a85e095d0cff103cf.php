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

/* sondage/createquestion.html.twig */
class __TwigTemplate_a779091025884a455608cb5083411acc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/createquestion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/createquestion.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <script>
        function choixtype(val) {
            let choix;
            switch (val){
                case \"multiple\" :
                    type = \"multiple\"
                    choix = \" Réponse 1 :<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-1\\\"><br><p id =\\\"1-2\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse2(1,2)\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"unique\" :
                    type = \"unique\"
                    choix = \" Réponse 1 :<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-1\\\"><br><p id =\\\"1-2\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse2(1,2)\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"ouverte\":
                    type = \"ouverte\"
                    choix = \"<label>Question ouverte: Aucun affichage disponible</label> \"
                    break
                case \"oui_non\":
                    type = \"oui_non\"
                    choix = \"<label>Question oui/non: Aucun affichage disponible</label>\"
                    break
                default:
                    type = \"\"
                    choix =\"\"
                    break
            }
            document.getElementById(\"typequestion1\").innerHTML = choix
        }

        function newreponse2(nbquest, nbrep) {
            nbquestion++
            document.getElementById(nbquest + \"-\" + nbrep).innerHTML = \"Réponse \" + nbquestion + \":<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-\" + nbquestion + \"\\\"><br><p id=\\\"\" + nbquest + \"-\" + (nbrep + 1) + \"\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse(\" + nbquest + \",\" + (nbrep + 1) + \")\\\"> + Ajouter une reponse </button><button class=\\\"btn  btn-danger\\\" type=\\\"button\\\" onclick=\\\"removereponse(\" + nbquest + \",\" + (nbrep) + \")\\\"> - Supprimer une reponse </button></p>\"
        }

    </script>


    <p style=\"font-style: italic ; font-size: 18px\">Create new Question</p>
    <label> Intitulé:     </label>
    <br>
        <input class=\"form-control\" type=\"text\" name=\"intitule1\" autocomplete=\"off\">
    <br><br>
    <label> Image: </label> <br> <input class=\"form-control\" type=\"text\" name=\"image1\">
    <br><br>

    <label for=\"type-select\">Choisissez un type:</label><br>

    <select class=\"form-select\" name=\"type1\" id=\"type-select\" autocomplete=\"off\" onchange=\"choixtype(value)\">
        <option value=\"\">--Choisissez une option--</option>
        <option value=\"multiple\">Question à choix multiple</option>
        <option value=\"unique\">Question à choix unique</option>
        <option value=\"ouverte\">Question ouverte</option>
        <option value=\"oui_non\">Question oui/non</option>
    </select>

    <br><br>

    <label> Choix de reponse:
        <br>
        <p id =\"typequestion1\"> Choisissez une option ci dessus</p>

    </label>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/createquestion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 3,  75 => 2,  57 => 1,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}{% endblock %}
{% block body %}

    <script>
        function choixtype(val) {
            let choix;
            switch (val){
                case \"multiple\" :
                    type = \"multiple\"
                    choix = \" Réponse 1 :<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-1\\\"><br><p id =\\\"1-2\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse2(1,2)\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"unique\" :
                    type = \"unique\"
                    choix = \" Réponse 1 :<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-1\\\"><br><p id =\\\"1-2\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse2(1,2)\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"ouverte\":
                    type = \"ouverte\"
                    choix = \"<label>Question ouverte: Aucun affichage disponible</label> \"
                    break
                case \"oui_non\":
                    type = \"oui_non\"
                    choix = \"<label>Question oui/non: Aucun affichage disponible</label>\"
                    break
                default:
                    type = \"\"
                    choix =\"\"
                    break
            }
            document.getElementById(\"typequestion1\").innerHTML = choix
        }

        function newreponse2(nbquest, nbrep) {
            nbquestion++
            document.getElementById(nbquest + \"-\" + nbrep).innerHTML = \"Réponse \" + nbquestion + \":<input class=\\\"form-control\\\" type=\\\"text\\\" name=\\\"reponse1-\" + nbquestion + \"\\\"><br><p id=\\\"\" + nbquest + \"-\" + (nbrep + 1) + \"\\\"><button class=\\\"btn  btn-success\\\" type=\\\"button\\\" onclick=\\\"newreponse(\" + nbquest + \",\" + (nbrep + 1) + \")\\\"> + Ajouter une reponse </button><button class=\\\"btn  btn-danger\\\" type=\\\"button\\\" onclick=\\\"removereponse(\" + nbquest + \",\" + (nbrep) + \")\\\"> - Supprimer une reponse </button></p>\"
        }

    </script>


    <p style=\"font-style: italic ; font-size: 18px\">Create new Question</p>
    <label> Intitulé:     </label>
    <br>
        <input class=\"form-control\" type=\"text\" name=\"intitule1\" autocomplete=\"off\">
    <br><br>
    <label> Image: </label> <br> <input class=\"form-control\" type=\"text\" name=\"image1\">
    <br><br>

    <label for=\"type-select\">Choisissez un type:</label><br>

    <select class=\"form-select\" name=\"type1\" id=\"type-select\" autocomplete=\"off\" onchange=\"choixtype(value)\">
        <option value=\"\">--Choisissez une option--</option>
        <option value=\"multiple\">Question à choix multiple</option>
        <option value=\"unique\">Question à choix unique</option>
        <option value=\"ouverte\">Question ouverte</option>
        <option value=\"oui_non\">Question oui/non</option>
    </select>

    <br><br>

    <label> Choix de reponse:
        <br>
        <p id =\"typequestion1\"> Choisissez une option ci dessus</p>

    </label>

{% endblock %}", "sondage/createquestion.html.twig", "/var/www/html/creacosm/templates/sondage/createquestion.html.twig");
    }
}
