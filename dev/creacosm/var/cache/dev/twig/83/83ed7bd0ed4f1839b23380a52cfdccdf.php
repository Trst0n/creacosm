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
class __TwigTemplate_4787accef830fe2ad547508306e4f83e extends Template
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

    <div class=\"container\">
        <div class=\"align-middle\" style=\"margin-top: 3%\">

    <h1>Modifier Sondage</h1>

    <form  action=\"./edited\" id =\"form\" method=\"POST\">
        <p id =\"cpt\">       <input  name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 106, $this->source); })()), "questions", [], "any", false, false, false, 106), "count", [], "method", false, false, false, 106), "html", null, true);
        echo "\"></p>
        <p id =\"newq\">       <input name=\"newquestion\" id=\"newquestion\" type=\"hidden\" value =\"0\"></p>

        <label > Nom du sondage : </label><input class=\"form-control\" name=\"nom\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 109, $this->source); })()), "nom", [], "any", false, false, false, 109), "html", null, true);
        echo "\"><br><br>
        <!-- <label> Createur du sondage :</label><br><br>-->
        <label> Introduction: </label><br><textarea class=\"form-control\" name=\"introduction\" rows=\"5\" cols=\"33\" style=\"resize:none;\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 111, $this->source); })()), "introduction", [], "any", false, false, false, 111), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 111, $this->source); })()), "introduction", [], "any", false, false, false, 111), "html", null, true);
        echo "</textarea><br><br>
        <label >Visibilité</label>
        <br>
        ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 114, $this->source); })()), "visibilite", [], "any", false, false, false, 114)) {
            // line 115
            echo "            <label>public
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"public\" checked>
            </label>
            <label>privé
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"prive\" >
            </label>
        ";
        } else {
            // line 122
            echo "            <label>public
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"public\" >
            </label>
            <label>privé
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"prive\" checked>
            </label>
        ";
        }
        // line 129
        echo "        <br>
        ";
        // line 130
        $context["numquestion"] = 1;
        // line 131
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sondage"]) || array_key_exists("sondage", $context) ? $context["sondage"] : (function () { throw new RuntimeError('Variable "sondage" does not exist.', 131, $this->source); })()), "questions", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 132
            echo "            <div id=\"question";
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 132, $this->source); })()), "html", null, true);
            echo "\">
                <br>
                <label>Nom:</label> <input  class=\"form-control\" name=\"question";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 134), "html", null, true);
            echo "\" ><br>

                <label>Visuel :</label>
                ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 137)) {
                // line 138
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 138), "visuel", [], "any", false, false, false, 138) != "")) {
                    // line 139
                    echo "                <input class=\"form-control\" name=\"image";
                    echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 139, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "visuel", [], "any", false, false, false, 139), "visuel", [], "any", false, false, false, 139), "html", null, true);
                    echo "\" ><br>
                    ";
                }
                // line 141
                echo "                ";
            } else {
                // line 142
                echo "                    <input class=\"form-control\" name=\"image";
                echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 142, $this->source); })()), "html", null, true);
                echo "\" value=\"\" ><br>
                    ";
            }
            // line 144
            echo "
                    <label>Type de la question : ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 145), "type", [], "any", false, false, false, 145), "html", null, true);
            echo "</label><br>
                ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 146), "type", [], "any", false, false, false, 146) == "multiple")) {
                // line 147
                echo "                    ";
                $context["i"] = 1;
                // line 148
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 148));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 149
                    echo "                        <br>
                        <label>Reponse ";
                    // line 150
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo " :</label><input class=\"form-control\" name=\"reponse";
                    echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 150, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 150), "html", null, true);
                    echo "\"><br>
                        ";
                    // line 151
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 151, $this->source); })()) + 1);
                    // line 152
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "
                ";
            }
            // line 155
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 155), "type", [], "any", false, false, false, 155) == "unique")) {
                // line 156
                echo "                    ";
                $context["i"] = 1;
                // line 157
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 157));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 158
                    echo "                        <label>Reponse ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 158, $this->source); })()), "html", null, true);
                    echo " :</label><input  class=\"form-control\" name=\"reponse";
                    echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 158, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 158, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 158), "html", null, true);
                    echo "\"><br>
                        ";
                    // line 159
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 159, $this->source); })()) + 1);
                    // line 160
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "
                ";
            }
            // line 163
            echo "                <p id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\">
                    <input  name=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\" value=\"true\" type=\"hidden\"></p>
                <button type=\"button\" class=\"btn btn-outline-danger\" value=\"Masquer\" onclick=\"masquer('question";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 165, $this->source); })()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 165), "html", null, true);
            echo "');\" > Supprimer la question </button><br>
            </div>
            ";
            // line 167
            $context["numquestion"] = ((isset($context["numquestion"]) || array_key_exists("numquestion", $context) ? $context["numquestion"] : (function () { throw new RuntimeError('Variable "numquestion" does not exist.', 167, $this->source); })()) + 1);
            // line 168
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
        <p id=\"demo1\"></p>
        <p id=\"removequest\"></p>
        <button class=\"btn btn-success\" type=\"button\" onclick=\"ajoutQ()\" > + Ajouter une question </button><br><br>


        <button class=\"btn btn-primary\" type=\"submit\">Valider modification</button>
    </form>
            <br>
            ";
        // line 178
        echo twig_include($this->env, $context, "sondage/_delete_form.html.twig");
        echo "
<br>
            <a class=\"btn btn-outline-dark\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">Retour</a>
            <br>
        </div>
    </div>
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
        return array (  390 => 180,  385 => 178,  374 => 169,  368 => 168,  366 => 167,  359 => 165,  355 => 164,  350 => 163,  346 => 161,  340 => 160,  338 => 159,  328 => 158,  323 => 157,  320 => 156,  317 => 155,  313 => 153,  307 => 152,  305 => 151,  296 => 150,  293 => 149,  288 => 148,  285 => 147,  283 => 146,  279 => 145,  276 => 144,  270 => 142,  267 => 141,  259 => 139,  256 => 138,  254 => 137,  246 => 134,  240 => 132,  235 => 131,  233 => 130,  230 => 129,  221 => 122,  212 => 115,  210 => 114,  202 => 111,  197 => 109,  191 => 106,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
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

    <div class=\"container\">
        <div class=\"align-middle\" style=\"margin-top: 3%\">

    <h1>Modifier Sondage</h1>

    <form  action=\"./edited\" id =\"form\" method=\"POST\">
        <p id =\"cpt\">       <input  name=\"nbquestion\" id=\"nbquestion\" type=\"hidden\" value =\"{{ sondage.questions.count() }}\"></p>
        <p id =\"newq\">       <input name=\"newquestion\" id=\"newquestion\" type=\"hidden\" value =\"0\"></p>

        <label > Nom du sondage : </label><input class=\"form-control\" name=\"nom\" value=\"{{ sondage.nom }}\"><br><br>
        <!-- <label> Createur du sondage :</label><br><br>-->
        <label> Introduction: </label><br><textarea class=\"form-control\" name=\"introduction\" rows=\"5\" cols=\"33\" style=\"resize:none;\" value=\"{{ sondage.introduction }}\">{{ sondage.introduction }}</textarea><br><br>
        <label >Visibilité</label>
        <br>
        {% if sondage.visibilite %}
            <label>public
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"public\" checked>
            </label>
            <label>privé
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"prive\" >
            </label>
        {% else %}
            <label>public
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"public\" >
            </label>
            <label>privé
                <input class=\"form-check-input\" type=\"radio\" name=\"visibilite\" value=\"prive\" checked>
            </label>
        {% endif %}
        <br>
        {% set numquestion = 1 %}
        {% for question in sondage.questions %}
            <div id=\"question{{ numquestion }}\">
                <br>
                <label>Nom:</label> <input  class=\"form-control\" name=\"question{{ numquestion }}\" value=\"{{ question.intitule }}\" ><br>

                <label>Visuel :</label>
                {% if question.visuel %}
                {% if question.visuel.visuel != \"\" %}
                <input class=\"form-control\" name=\"image{{ numquestion }}\" value=\"{{ question.visuel.visuel }}\" ><br>
                    {% endif %}
                {% else %}
                    <input class=\"form-control\" name=\"image{{ numquestion }}\" value=\"\" ><br>
                    {% endif %}

                    <label>Type de la question : {{ question.type.type }}</label><br>
                {% if question.type.type == \"multiple\" %}
                    {% set i = 1 %}
                    {% for reponse in question.reponses %}
                        <br>
                        <label>Reponse {{ i }} :</label><input class=\"form-control\" name=\"reponse{{ numquestion }}{{ i }}\" value=\"{{ reponse.reponse }}\"><br>
                        {% set i = i + 1 %}
                    {% endfor %}

                {% endif %}
                {% if question.type.type == \"unique\" %}
                    {% set i = 1 %}
                    {% for reponse in question.reponses %}
                        <label>Reponse {{ i }} :</label><input  class=\"form-control\" name=\"reponse{{ numquestion }}{{ i }}\" value=\"{{ reponse.reponse }}\"><br>
                        {% set i = i + 1 %}
                    {% endfor %}

                {% endif %}
                <p id=\"{{ question.id }}\">
                    <input  name=\"{{ question.id }}\" value=\"true\" type=\"hidden\"></p>
                <button type=\"button\" class=\"btn btn-outline-danger\" value=\"Masquer\" onclick=\"masquer('question{{ numquestion }}','{{ question.id }}');\" > Supprimer la question </button><br>
            </div>
            {% set numquestion = numquestion + 1 %}
        {% endfor %}

        <p id=\"demo1\"></p>
        <p id=\"removequest\"></p>
        <button class=\"btn btn-success\" type=\"button\" onclick=\"ajoutQ()\" > + Ajouter une question </button><br><br>


        <button class=\"btn btn-primary\" type=\"submit\">Valider modification</button>
    </form>
            <br>
            {{ include('sondage/_delete_form.html.twig') }}
<br>
            <a class=\"btn btn-outline-dark\" href=\"{{ path('app_sondage_index') }}\">Retour</a>
            <br>
        </div>
    </div>
{% endblock %}", "sondage/edit.html.twig", "/var/www/html/creacosm/templates/sondage/edit.html.twig");
    }
}
