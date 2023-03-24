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

/* sondage/edit.html.twig */
class __TwigTemplate_6d18da65f7f858c6043ef81db4ab749c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sondage/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sondage/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <script>
        let nbQ = 0;
        let nbR = 1;
        let T =\"\"

        function ajoutQ() {
            let i = parseInt(document.getElementById(\"nbquestion\").value)+1;
            nbQ++
            if(T === \"multiple\"){
                document.getElementById(nbQ + \"-\" + (nbR+1)).innerHTML=\"\";
            }
            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + i +\">\";


            document.getElementById(\"newq\").innerHTML = \"<input name=\\\"newquestion\\\" id=\\\"newquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";

            document.getElementById(\"demo\"+nbQ).innerHTML += \"<label> Intitulé: <br> <input type=\\\"text\\\" name=\\\"intitule\"+ nbQ+\"\\\"> </label> <br><br> <label> Image: <br> <input type=\\\"text\\\" name=\\\"image\"+ nbQ+\"\\\"> <br><br> </label> <label for=\\\"type-select\\\">Choisissez un type:</label><br> <select name=\\\"type\"+ nbQ+\"\\\" id=\\\"type-select\\\" autocomplete='off' onchange=\\\"choix(value,\"+ nbQ+ \")\\\" > <option value=\\\"\\\">--Choisissez une option--</option> <option value=\\\"unique\\\">Question à choix unique</option><option value=\\\"multiple\\\">Question à choix multiple</option> <option value=\\\"ouverte\\\">Question ouverte</option> <option value=\\\"oui_non\\\">Question oui/non</option></select> <br><br> <label> Choix: <br> <p id=\\\"typequestion\" + nbQ +\"\\\"></p><p id=\\\"demo\" + (nbQ+1) + \"\\\"><br> </label> <br><br>\";

            if (nbQ >= 1){
                document.getElementById(\"removequest\").innerHTML = \"<button type=\\\"button\\\" onclick=\\\"suprquest(\" + nbQ + \")\\\"> - Supprimer une question </button>\"
            }

        }
        function choix(val, id) {
            let choix;
            switch (val){
                case \"multiple\":
                    T = \"multiple\"
                    nbR =1
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse\"+nbQ+ \"-\"+nbR+\"\\\"><br><p id =\\\"\" + nbQ + \"-\" + (nbR+1) +\"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbQ + \",\" + (nbR + 1)+ \")\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"unique\":
                    T = \"unique\"
                    nbR =1
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse\"+nbQ+ \"-\"+nbR+\"\\\"><br><p id =\\\"\" + nbQ + \"-\" + (nbR+1) +\"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbQ + \",\" + (nbR + 1)+ \")\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"ouverte\":
                    T = \"ouverte\"
                    choix = \"Question ouverte: Aucun affichage disponible\"
                    break
                case \"oui_non\":
                    T = \"oui_non\"
                    choix = \"<label>Oui <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"oui\\\" checked> </label> <label>Non <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"non\\\"> </label>\"
                    break
                default:
                    T = \"\"
                    choix =\"\"
                    break
            }
            let idbis = \"typequestion\" + id
            document.getElementById(idbis).innerHTML = choix
        }
        function ajoutrep(nbquest, nbrep){
            nbR ++
            console.log(\"ajout\",nbR)

            document.getElementById(nbquest + \"-\" + nbrep).innerHTML = \"Réponse \"+nbR+\":<input type=\\\"text\\\" name=\\\"reponse\"+ nbQ + \"-\" +nbR+\"\\\"><br><p id=\\\"\"+ nbquest + \"-\" + (nbrep+1) + \"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbquest +\",\" + (nbrep+1) +\")\\\"> + Ajouter une reponse </button><button type=\\\"button\\\" onclick=\\\"supprRep(\"+ nbquest +\",\" + (nbrep)+\")\\\"> - Supprimer une reponse </button></p>\"
        }
        function supprRep(quest, rep){
            nbR --
            console.log(nbR)
            if (nbR === 1){
                document.getElementById(quest + \"-\" + rep).innerHTML=\"<button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ quest +\",\" + (rep) +\")\\\"> + Ajouter une reponse </button>\"
            }else{
                document.getElementById(quest + \"-\" + rep).innerHTML=\"<button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ quest +\",\" + (rep) +\")\\\"> + Ajouter une reponse </button><button type=\\\"button\\\" onclick=\\\"supprRep(\"+ quest +\",\" + (rep-1)+ \")\\\"> - Supprimer une reponse </button>\"

            }
        }
        function suprquest(id){
            nbQ --
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + i +\">\";
            document.getElementById(\"demo\"+ id).innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";
            document.getElementById(\"newq\").innerHTML = \"<input name=\\\"newquestion\\\" id=\\\"newquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";


            if (nbQ !== 0) {
                document.getElementById(\"removequest\").innerHTML = \"<button type=\\\"button\\\" onclick=\\\"suprquest(\" + nbQ + \")\\\"> - Supprimer une question </button>\"
            }
            else{
                document.getElementById(\"removequest\").innerHTML = \"\"
            }
        }

        function masquer(div,question) {
            document.getElementById(div).style.display = 'none';
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(question).innerHTML=\"<input name=\\\"\"+ question +\"\\\" value=\\\"false\\\" type=\\\"hidden\\\">\";
            document.getElementById(\"cpt\").innerHTML= \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\\\"\"+ i +\"\\\">\"
        }

    </script>


    <h1>Edit Sondage</h1>
    <form action=\"./edited\" id =\"form\" method=\"POST\">
        <p id =\"cpt\">       <input name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 103, $this->source); })()), "questions", [], "any", false, false, false, 103), "count", [], "method", false, false, false, 103), "html", null, true);
        echo "\"></p>
        <p id =\"newq\">       <input name=\"newquestion\" id=\"newquestion\" type=\"hidden\" value =\"0\"></p>

        <label> Nom du sondage : </label><input name=\"nom\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 106, $this->source); })()), "nom", [], "any", false, false, false, 106), "html", null, true);
        echo "\"><br><br>
        <!-- <label> Createur du sondage :</label><br><br>-->
        <label> Introduction: </label><br><textarea name=\"introduction\" rows=\"5\" cols=\"33\" style=\"resize:none;\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 108, $this->source); })()), "introduction", [], "any", false, false, false, 108), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 108, $this->source); })()), "introduction", [], "any", false, false, false, 108), "html", null, true);
        echo "</textarea><br><br>
        <label >Visibilité</label>
        <br>
        ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 111, $this->source); })()), "visibilite", [], "any", false, false, false, 111)) {
            // line 112
            echo "            <label>public
                <input type=\"radio\" name=\"visibilite\" value=\"public\" checked>
            </label>
            <label>privé
                <input type=\"radio\" name=\"visibilite\" value=\"prive\" >
            </label>
        ";
        } else {
            // line 119
            echo "            <label>public
                <input type=\"radio\" name=\"visibilite\" value=\"public\" >
            </label>
            <label>privé
                <input type=\"radio\" name=\"visibilite\" value=\"prive\" checked>
            </label>
        ";
        }
        // line 126
        echo "        <br>
        ";
        // line 127
        $context["numquestion"] = 1;
        // line 128
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 128, $this->source); })()), "questions", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 129
            echo "            <div id=\"question";
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "\">
                <label>Nom:</label> <input name=\"question";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 130, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 130), "html", null, true);
            echo "\" ><br>
                <label>Visuel :</label> <input name=\"image";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 131, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 131), "visuel", [], "any", false, false, false, 131), "html", null, true);
            echo "\" ><br>

                <label>Type de la question : ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 133), "type", [], "any", false, false, false, 133), "html", null, true);
            echo "</label><br>
                ";
            // line 134
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 134), "type", [], "any", false, false, false, 134) == "multiple")) {
                // line 135
                echo "                    ";
                $context["i"] = 1;
                // line 136
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 137
                    echo "                        <label>Reponse ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 137, $this->source); })()), "html", null, true);
                    echo " :</label><input  name=\"reponse";
                    echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 137, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 137, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 137), "html", null, true);
                    echo "\"><br>
                        ";
                    // line 138
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 138, $this->source); })()) + 1);
                    // line 139
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "
                ";
            }
            // line 142
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 142), "type", [], "any", false, false, false, 142) == "unique")) {
                // line 143
                echo "                    ";
                $context["i"] = 1;
                // line 144
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 144));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 145
                    echo "                        <label>Reponse ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 145, $this->source); })()), "html", null, true);
                    echo " :</label><input  name=\"reponse";
                    echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 145, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 145, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 145), "html", null, true);
                    echo "\"><br>
                        ";
                    // line 146
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 146, $this->source); })()) + 1);
                    // line 147
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "
                ";
            }
            // line 150
            echo "                <p id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 150), "html", null, true);
            echo "\">
                    <input name=\"";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "\" value=\"true\" type=\"hidden\"></p>
                <button type=\"button\"  value=\"Masquer\" onclick=\"masquer('question";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 152, $this->source); })()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "');\" > Supprimer la question </button><br>
            </div>
            ";
            // line 154
            $context["numquestion"] = ((isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 154, $this->source); })()) + 1);
            // line 155
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
        <p id=\"demo1\"></p>
        <p id=\"removequest\"></p>
        <button type=\"button\" onclick=\"ajoutQ()\" > + Ajouter une question </button><br><br>


        <button type=\"submit\">Valider modification</button>
    </form>

    <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">back to list</a>

    ";
        // line 167
        echo twig_include($this->env, $context, "sondage/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sondage/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 167,  359 => 165,  348 => 156,  342 => 155,  340 => 154,  333 => 152,  329 => 151,  324 => 150,  320 => 148,  314 => 147,  312 => 146,  302 => 145,  297 => 144,  294 => 143,  291 => 142,  287 => 140,  281 => 139,  279 => 138,  269 => 137,  264 => 136,  261 => 135,  259 => 134,  255 => 133,  248 => 131,  242 => 130,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  218 => 119,  209 => 112,  207 => 111,  199 => 108,  194 => 106,  188 => 103,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Edit Sondage{% endblock %}

{% block body %}
    <script>
        let nbQ = 0;
        let nbR = 1;
        let T =\"\"

        function ajoutQ() {
            let i = parseInt(document.getElementById(\"nbquestion\").value)+1;
            nbQ++
            if(T === \"multiple\"){
                document.getElementById(nbQ + \"-\" + (nbR+1)).innerHTML=\"\";
            }
            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + i +\">\";


            document.getElementById(\"newq\").innerHTML = \"<input name=\\\"newquestion\\\" id=\\\"newquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";

            document.getElementById(\"demo\"+nbQ).innerHTML += \"<label> Intitulé: <br> <input type=\\\"text\\\" name=\\\"intitule\"+ nbQ+\"\\\"> </label> <br><br> <label> Image: <br> <input type=\\\"text\\\" name=\\\"image\"+ nbQ+\"\\\"> <br><br> </label> <label for=\\\"type-select\\\">Choisissez un type:</label><br> <select name=\\\"type\"+ nbQ+\"\\\" id=\\\"type-select\\\" autocomplete='off' onchange=\\\"choix(value,\"+ nbQ+ \")\\\" > <option value=\\\"\\\">--Choisissez une option--</option> <option value=\\\"unique\\\">Question à choix unique</option><option value=\\\"multiple\\\">Question à choix multiple</option> <option value=\\\"ouverte\\\">Question ouverte</option> <option value=\\\"oui_non\\\">Question oui/non</option></select> <br><br> <label> Choix: <br> <p id=\\\"typequestion\" + nbQ +\"\\\"></p><p id=\\\"demo\" + (nbQ+1) + \"\\\"><br> </label> <br><br>\";

            if (nbQ >= 1){
                document.getElementById(\"removequest\").innerHTML = \"<button type=\\\"button\\\" onclick=\\\"suprquest(\" + nbQ + \")\\\"> - Supprimer une question </button>\"
            }

        }
        function choix(val, id) {
            let choix;
            switch (val){
                case \"multiple\":
                    T = \"multiple\"
                    nbR =1
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse\"+nbQ+ \"-\"+nbR+\"\\\"><br><p id =\\\"\" + nbQ + \"-\" + (nbR+1) +\"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbQ + \",\" + (nbR + 1)+ \")\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"unique\":
                    T = \"unique\"
                    nbR =1
                    choix = \"Réponse 1 :<input type=\\\"text\\\" name=\\\"reponse\"+nbQ+ \"-\"+nbR+\"\\\"><br><p id =\\\"\" + nbQ + \"-\" + (nbR+1) +\"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbQ + \",\" + (nbR + 1)+ \")\\\"> + Ajouter une reponse </button></p><br>\"
                    break
                case \"ouverte\":
                    T = \"ouverte\"
                    choix = \"Question ouverte: Aucun affichage disponible\"
                    break
                case \"oui_non\":
                    T = \"oui_non\"
                    choix = \"<label>Oui <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"oui\\\" checked> </label> <label>Non <input type=\\\"radio\\\" name=\\\"visibilite\\\" value=\\\"non\\\"> </label>\"
                    break
                default:
                    T = \"\"
                    choix =\"\"
                    break
            }
            let idbis = \"typequestion\" + id
            document.getElementById(idbis).innerHTML = choix
        }
        function ajoutrep(nbquest, nbrep){
            nbR ++
            console.log(\"ajout\",nbR)

            document.getElementById(nbquest + \"-\" + nbrep).innerHTML = \"Réponse \"+nbR+\":<input type=\\\"text\\\" name=\\\"reponse\"+ nbQ + \"-\" +nbR+\"\\\"><br><p id=\\\"\"+ nbquest + \"-\" + (nbrep+1) + \"\\\"><button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ nbquest +\",\" + (nbrep+1) +\")\\\"> + Ajouter une reponse </button><button type=\\\"button\\\" onclick=\\\"supprRep(\"+ nbquest +\",\" + (nbrep)+\")\\\"> - Supprimer une reponse </button></p>\"
        }
        function supprRep(quest, rep){
            nbR --
            console.log(nbR)
            if (nbR === 1){
                document.getElementById(quest + \"-\" + rep).innerHTML=\"<button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ quest +\",\" + (rep) +\")\\\"> + Ajouter une reponse </button>\"
            }else{
                document.getElementById(quest + \"-\" + rep).innerHTML=\"<button type=\\\"button\\\" onclick=\\\"ajoutrep(\"+ quest +\",\" + (rep) +\")\\\"> + Ajouter une reponse </button><button type=\\\"button\\\" onclick=\\\"supprRep(\"+ quest +\",\" + (rep-1)+ \")\\\"> - Supprimer une reponse </button>\"

            }
        }
        function suprquest(id){
            nbQ --
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(\"cpt\").innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + i +\">\";
            document.getElementById(\"demo\"+ id).innerHTML = \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";
            document.getElementById(\"newq\").innerHTML = \"<input name=\\\"newquestion\\\" id=\\\"newquestion\\\" type=\\\"hidden\\\" value =\" + nbQ +\">\";


            if (nbQ !== 0) {
                document.getElementById(\"removequest\").innerHTML = \"<button type=\\\"button\\\" onclick=\\\"suprquest(\" + nbQ + \")\\\"> - Supprimer une question </button>\"
            }
            else{
                document.getElementById(\"removequest\").innerHTML = \"\"
            }
        }

        function masquer(div,question) {
            document.getElementById(div).style.display = 'none';
            let i = parseInt(document.getElementById(\"nbquestion\").value)-1;

            document.getElementById(question).innerHTML=\"<input name=\\\"\"+ question +\"\\\" value=\\\"false\\\" type=\\\"hidden\\\">\";
            document.getElementById(\"cpt\").innerHTML= \"<input name=\\\"nbquestion\\\" id=\\\"nbquestion\\\" type=\\\"hidden\\\" value =\\\"\"+ i +\"\\\">\"
        }

    </script>


    <h1>Edit Sondage</h1>
    <form action=\"./edited\" id =\"form\" method=\"POST\">
        <p id =\"cpt\">       <input name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"{{ sondage.questions.count() }}\"></p>
        <p id =\"newq\">       <input name=\"newquestion\" id=\"newquestion\" type=\"hidden\" value =\"0\"></p>

        <label> Nom du sondage : </label><input name=\"nom\" value=\"{{ sondage.nom }}\"><br><br>
        <!-- <label> Createur du sondage :</label><br><br>-->
        <label> Introduction: </label><br><textarea name=\"introduction\" rows=\"5\" cols=\"33\" style=\"resize:none;\" value=\"{{ sondage.introduction }}\">{{ sondage.introduction }}</textarea><br><br>
        <label >Visibilité</label>
        <br>
        {% if sondage.visibilite %}
            <label>public
                <input type=\"radio\" name=\"visibilite\" value=\"public\" checked>
            </label>
            <label>privé
                <input type=\"radio\" name=\"visibilite\" value=\"prive\" >
            </label>
        {% else %}
            <label>public
                <input type=\"radio\" name=\"visibilite\" value=\"public\" >
            </label>
            <label>privé
                <input type=\"radio\" name=\"visibilite\" value=\"prive\" checked>
            </label>
        {% endif %}
        <br>
        {% set numquestion = 1 %}
        {% for question in sondage.questions %}
            <div id=\"question{{ numquestion }}\">
                <label>Nom:</label> <input name=\"question{{ numquestion }}\" value=\"{{ question.intitule }}\" ><br>
                <label>Visuel :</label> <input name=\"image{{ numquestion }}\" value=\"{{ question.visuel.visuel }}\" ><br>

                <label>Type de la question : {{ question.type.type }}</label><br>
                {% if question.type.type == \"multiple\" %}
                    {% set i = 1 %}
                    {% for reponse in question.reponses %}
                        <label>Reponse {{ i }} :</label><input  name=\"reponse{{ numquestion }}{{ i }}\" value=\"{{ reponse.reponse }}\"><br>
                        {% set i = i + 1 %}
                    {% endfor %}

                {% endif %}
                {% if question.type.type == \"unique\" %}
                    {% set i = 1 %}
                    {% for reponse in question.reponses %}
                        <label>Reponse {{ i }} :</label><input  name=\"reponse{{ numquestion }}{{ i }}\" value=\"{{ reponse.reponse }}\"><br>
                        {% set i = i + 1 %}
                    {% endfor %}

                {% endif %}
                <p id=\"{{ question.id }}\">
                    <input name=\"{{ question.id }}\" value=\"true\" type=\"hidden\"></p>
                <button type=\"button\"  value=\"Masquer\" onclick=\"masquer('question{{ numquestion }}','{{ question.id }}');\" > Supprimer la question </button><br>
            </div>
            {% set numquestion = numquestion + 1 %}
        {% endfor %}

        <p id=\"demo1\"></p>
        <p id=\"removequest\"></p>
        <button type=\"button\" onclick=\"ajoutQ()\" > + Ajouter une question </button><br><br>


        <button type=\"submit\">Valider modification</button>
    </form>

    <a href=\"{{ path('app_sondage_index') }}\">back to list</a>

    {{ include('sondage/_delete_form.html.twig') }}
{% endblock %}", "sondage/edit.html.twig", "/var/www/html/creacosm/templates/sondage/edit.html.twig");
    }
}
