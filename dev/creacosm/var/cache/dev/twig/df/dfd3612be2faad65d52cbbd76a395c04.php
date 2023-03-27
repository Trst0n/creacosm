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
class __TwigTemplate_7223b6ba22dc8c86416e7510e3187600 extends Template
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
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('messondages'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'block';
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('sondagesrep'):
                    document.getElementById(\"sondagesrep\").style.display = 'block';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('messtatistiques'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    document.getElementById(\"messtatistiques\").style.display = 'block';
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
        // function chargementStat(valeur){
        //     document.getElementById(\"statistique\").innerHTML=
        //
        // }
    </script>
    <br><br>
        <br><button  onclick=\"changementscene('infospersos')\">Mes informations</button>
        ";
        // line 63
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63))) {
            // line 64
            echo "            <button onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        ";
        }
        // line 66
        echo "        ";
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "roles", [], "any", false, false, false, 66))) {
            // line 67
            echo "            <button role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
            <button role=\"link\" onclick=\"changementscene('messtatistiques')\">Statistiques</button>
        ";
        }
        // line 70
        echo "
    <div id=\"infospersos\">
        <br>
        <h4>Informations personelles</h4>
            Nom: ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true);
        echo " <br>
            Prenom: ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "prenom", [], "any", false, false, false, 75), "html", null, true);
        echo " <br>
            Date de naissance: ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "datedenaissance", [], "any", false, false, false, 76), "html", null, true);
        echo " <br>
            Ville : ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "ville", [], "any", false, false, false, 77), "html", null, true);
        echo " <br>
            ";
        // line 78
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "roles", [], "any", false, false, false, 78))) {
            // line 79
            echo "                Profession: Non renseigné <br>
            ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "roles", [], "any", false, false, false, 80))) {
            // line 81
            echo "                Entreprise: Non renseigné <br>
            ";
        }
        // line 83
        echo "            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
        echo ">
                    Login: <p id=\"modifierlogin\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "login", [], "any", false, false, false, 85), "html", null, true);
        echo "  <button onclick=\"modifierinfos('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "login", [], "any", false, false, false, 85), "html", null, true);
        echo "', 'modifier')\">modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
        echo ">
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button onclick=\"modifierinfos('******','modifier')\">modifier</button> </p>
            </form>

    </div>
    <div id =\"sondagesrep\" style=\"display: none\">
        ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "sondages", [], "any", false, false, false, 94), "count", [], "method", false, false, false, 94) == 0)) {
            // line 95
            echo "            <br><br>
            Vous n'avez répondu à aucun sondage
        ";
        }
        // line 98
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "sondages", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 99
            echo "            <h4>Sondage: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 99), "html", null, true);
            echo "</h4>
            Créé par : ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 100), "prenom", [], "any", false, false, false, 100), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 100), "nom", [], "any", false, false, false, 100), "html", null, true);
            echo "
            Présentation: <br>
            ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 102), "html", null, true);
            echo "<br><br>
            ";
            // line 103
            $context["reponses"] = [];
            // line 104
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "reponses", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 105
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 105), "sondage", [], "any", false, false, false, 105) == $context["sondage"]) && !twig_in_filter($context["reponse"], (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 105, $this->source); })())))) {
                    // line 106
                    echo "

                    <fieldset>
                        <legend>";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 109), "intitule", [], "any", false, false, false, 109), "html", null, true);
                    echo " </legend>
                        Vous avez répondu: ";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 110), "html", null, true);
                    echo " <br>
                        ";
                    // line 111
                    $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 111, $this->source); })()), [0 => $context["reponse"]]);
                    // line 112
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "reponses", [], "any", false, false, false, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 113
                        echo "                            ";
                        if (((twig_get_attribute($this->env, $this->source, $context["r"], "question", [], "any", false, false, false, 113) == twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 113)) && ($context["r"] != $context["reponse"]))) {
                            // line 114
                            echo "                                Vous avez répondu: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "reponse", [], "any", false, false, false, 114), "html", null, true);
                            echo " <br>
                              ";
                            // line 115
                            $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 115, $this->source); })()), [0 => $context["r"]]);
                            // line 116
                            echo "                            ";
                        }
                        // line 117
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                    </fieldset>


                ";
                }
                // line 122
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "    </div>
    <div id =\"messondages\" style=\"display: none\">
        ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "sondagescree", [], "any", false, false, false, 126), "count", [], "method", false, false, false, 126) == 0)) {
            // line 127
            echo "            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
            echo "\">Créer votre tout premier sondage !</a>

        ";
        } else {
            // line 132
            echo "
        <h4>Vos sondages :</h4>

        <table class=\"block\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Introduction</th>
                <th>Visibilité</th>
                <th>Theme</th>
                <th>Date de céeation</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
        ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "sondagescree", [], "any", false, false, false, 147));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 148
                echo "
            <tr>
                <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 150), "html", null, true);
                echo "</td>
                <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 151), "html", null, true);
                echo "</td>
                <td>";
                // line 152
                echo ((twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 152)) ? ("Public") : ("Privé"));
                echo "</td>
                <td> ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "theme", [], "any", false, false, false, 153), "theme", [], "any", false, false, false, 153), "html", null, true);
                echo "</td>
                <td>";
                // line 154
                ((twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 154)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 154), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 156)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "            </tbody>
        </table>

    </div>
    <div id=\"statistique\">

    </div>
    ";
        }
        // line 171
        echo "    <div id=\"messtatistiques\" style=\"display: none\">
        <h1>Statistiques</h1>
        ";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "sondagescree", [], "any", false, false, false, 173), "count", [], "method", false, false, false, 173) == 0)) {
            // line 174
            echo "            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"";
            // line 176
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
            echo "\">Créer votre tout premier sondage !</a>
        ";
        } else {
            // line 178
            echo "
";
            // line 186
            echo "
";
            // line 188
            echo "
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "user", [], "any", false, false, false, 189), "sondagescree", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 190
                echo "                <h4>Statitique du sondage : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 190), "html", null, true);
                echo "</h4>
                <p id=\"statitique\"></p>
                Créé par : ";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 192), "prenom", [], "any", false, false, false, 192), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 192), "nom", [], "any", false, false, false, 192), "html", null, true);
                echo "
                Présentation: <br>
                ";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 194), "html", null, true);
                echo "<br><br>
                ";
                // line 195
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sondage"], "questions", [], "any", false, false, false, 195));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 196
                    echo "                <fieldset>
                    <legend>";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 197), "html", null, true);
                    echo " </legend>
                    ";
                    // line 198
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 198), "type", [], "any", false, false, false, 198) == "multiple")) {
                        // line 199
                        echo "                        ";
                        $context["nb"] = 0;
                        // line 200
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 200));
                        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                            // line 201
                            echo "                            ";
                            $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 201, $this->source); })()) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 201)));
                            // line 202
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 203
                        echo "                    ";
                    }
                    // line 204
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 204));
                    foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                        // line 205
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 205), "html", null, true);
                        echo "
                        ";
                        // line 206
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 206), "type", [], "any", false, false, false, 206) == "multiple")) {
                            // line 207
                            echo "                            ";
                            if (((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 207, $this->source); })()) == 0)) {
                                // line 208
                                echo "                                0%<br>
                            ";
                            } else {
                                // line 210
                                echo "                                ";
                                echo twig_escape_filter($this->env, ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 210)) / (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 210, $this->source); })())) * 100), "html", null, true);
                                echo "% <br>
                            ";
                            }
                            // line 212
                            echo "                        ";
                        } else {
                            // line 213
                            echo "                            ";
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "utilisateurs", [], "any", false, false, false, 213)) == 0)) {
                                // line 214
                                echo "                                0%<br>
                            ";
                            } else {
                                // line 216
                                echo "                                ";
                                echo twig_escape_filter($this->env, ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 216)) / twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "utilisateurs", [], "any", false, false, false, 216))) * 100), "html", null, true);
                                echo "% <br>
                            ";
                            }
                            // line 218
                            echo "                        ";
                        }
                        // line 219
                        echo "

                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 222
                    echo "
                </fieldset>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "        ";
        }
        // line 227
        echo "    </div>

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
        return array (  548 => 227,  545 => 226,  539 => 225,  531 => 222,  523 => 219,  520 => 218,  514 => 216,  510 => 214,  507 => 213,  504 => 212,  498 => 210,  494 => 208,  491 => 207,  489 => 206,  484 => 205,  479 => 204,  476 => 203,  470 => 202,  467 => 201,  462 => 200,  459 => 199,  457 => 198,  453 => 197,  450 => 196,  446 => 195,  442 => 194,  435 => 192,  429 => 190,  425 => 189,  422 => 188,  419 => 186,  416 => 178,  411 => 176,  407 => 174,  405 => 173,  401 => 171,  391 => 163,  379 => 157,  375 => 156,  370 => 154,  366 => 153,  362 => 152,  358 => 151,  354 => 150,  350 => 148,  346 => 147,  329 => 132,  323 => 129,  319 => 127,  317 => 126,  313 => 124,  307 => 123,  301 => 122,  295 => 118,  289 => 117,  286 => 116,  284 => 115,  279 => 114,  276 => 113,  271 => 112,  269 => 111,  265 => 110,  261 => 109,  256 => 106,  253 => 105,  248 => 104,  246 => 103,  242 => 102,  235 => 100,  230 => 99,  225 => 98,  220 => 95,  218 => 94,  209 => 88,  201 => 85,  197 => 84,  194 => 83,  190 => 81,  188 => 80,  185 => 79,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  167 => 74,  161 => 70,  156 => 67,  153 => 66,  149 => 64,  147 => 63,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('messondages'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'block';
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('sondagesrep'):
                    document.getElementById(\"sondagesrep\").style.display = 'block';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    document.getElementById(\"messtatistiques\").style.display = 'none';
                    break;
                case('messtatistiques'):
                    document.getElementById(\"sondagesrep\").style.display = 'none';
                    document.getElementById(\"infospersos\").style.display = 'none';
                    document.getElementById(\"messondages\").style.display = 'none';
                    document.getElementById(\"messtatistiques\").style.display = 'block';
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
        // function chargementStat(valeur){
        //     document.getElementById(\"statistique\").innerHTML=
        //
        // }
    </script>
    <br><br>
        <br><button  onclick=\"changementscene('infospersos')\">Mes informations</button>
        {% if 'ROLE_USER' in app.user.roles %}
            <button onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        {% endif %}
        {% if 'ROLE_ADMIN' in app.user.roles %}
            <button role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
            <button role=\"link\" onclick=\"changementscene('messtatistiques')\">Statistiques</button>
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
            Créé par : {{ sondage.administrateur.prenom }} {{ sondage.administrateur.nom }}
            Présentation: <br>
            {{ sondage.introduction }}<br><br>
            {% set reponses = [] %}
            {% for reponse in app.user.reponses %}
                {% if reponse.question.sondage == sondage and reponse not in reponses %}


                    <fieldset>
                        <legend>{{ reponse.question.intitule }} </legend>
                        Vous avez répondu: {{ reponse.reponse }} <br>
                        {% set reponses = reponses|merge([reponse]) %}
                        {% for r in app.user.reponses %}
                            {% if r.question == reponse.question and r != reponse %}
                                Vous avez répondu: {{ r.reponse }} <br>
                              {% set reponses = reponses|merge([r]) %}
                            {% endif %}
                        {% endfor %}
                    </fieldset>


                {% endif %}
            {% endfor %}
        {% endfor %}
    </div>
    <div id =\"messondages\" style=\"display: none\">
        {%  if app.user.sondagescree.count() == 0%}
            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"{{ path('app_sondage_new') }}\">Créer votre tout premier sondage !</a>

        {% else %}

        <h4>Vos sondages :</h4>

        <table class=\"block\">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Introduction</th>
                <th>Visibilité</th>
                <th>Theme</th>
                <th>Date de céeation</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
        {% for sondage in app.user.sondagescree %}

            <tr>
                <td>{{ sondage.nom }}</td>
                <td>{{ sondage.introduction }}</td>
                <td>{{ sondage.visibilite ? 'Public' : 'Privé' }}</td>
                <td> {{ sondage.theme.theme }}</td>
                <td>{{ sondage.datecreation ? sondage.datecreation|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_sondage_show', {'id': sondage.id}) }}\">show</a>
                    <a href=\"{{ path('app_sondage_edit', {'id': sondage.id}) }}\">edit</a>
                </td>
            </tr>


        {% endfor %}
            </tbody>
        </table>

    </div>
    <div id=\"statistique\">

    </div>
    {% endif %}
    <div id=\"messtatistiques\" style=\"display: none\">
        <h1>Statistiques</h1>
        {%  if app.user.sondagescree.count() == 0%}
            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"{{ path('app_sondage_new') }}\">Créer votre tout premier sondage !</a>
        {% else %}

{#            <select name=\"theme\" id=\"type-select\" autocomplete=\"off\" onchange=\"\" >#}
{#                <option name=\"age\" value=\"age\">Voir statistique par tranche d'age</option>#}
{#                <option name=\"ville\" value=\"ville\">Voir statistique en fonction de la ville</option>#}
{#                <option name=\"genre\" value=\"genre\">Voir statistique en fonction du genre</option>#}
{#                <option name=\"profession\" value=\"profession\">Voir statistique en fonction de la profession</option>#}
{#                <option name=\"age\" value=\"age\">Voir statistique en fonction de l'age</option>#}
{#                <option name=\"age\" value=\"age\">Voir statistique en fonction de l'age</option>#}

{#            </select>#}

            {% for sondage in app.user.sondagescree %}
                <h4>Statitique du sondage : {{ sondage.nom }}</h4>
                <p id=\"statitique\"></p>
                Créé par : {{ sondage.administrateur.prenom }} {{ sondage.administrateur.nom }}
                Présentation: <br>
                {{ sondage.introduction }}<br><br>
                {% for question in sondage.questions  %}
                <fieldset>
                    <legend>{{question.intitule }} </legend>
                    {% if question.type.type == \"multiple\" %}
                        {% set nb = 0 %}
                        {% for reponse in question.reponses %}
                            {% set nb = nb + reponse.utilisateurs|length %}
                        {% endfor %}
                    {%  endif %}
                    {% for reponse in question.reponses %}
                        {{ reponse.reponse }}
                        {% if question.type.type == \"multiple\" %}
                            {% if nb == 0 %}
                                0%<br>
                            {% else %}
                                {{ reponse.utilisateurs|length /  nb *100}}% <br>
                            {% endif %}
                        {%  else %}
                            {% if sondage.utilisateurs|length == 0 %}
                                0%<br>
                            {% else %}
                                {{ reponse.utilisateurs|length /  sondage.utilisateurs|length *100}}% <br>
                            {% endif %}
                        {% endif %}


                    {% endfor %}

                </fieldset>
                {% endfor %}
            {% endfor %}
        {% endif %}
    </div>

{% endblock %}", "racine/moncompte.html.twig", "/var/www/html/creacosm/templates/racine/moncompte.html.twig");
    }
}
