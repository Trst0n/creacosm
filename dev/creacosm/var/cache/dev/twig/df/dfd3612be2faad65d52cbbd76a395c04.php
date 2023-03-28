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
                    document.getElementById(\"modifierpassword\").innerHTML= \"<input class=\\\"form-control\\\"  name=\\\"password\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button class=\\\"btn btn-outline-success\\\" type='submit' >Valider</button><button class=\\\"btn btn-outline-danger\\\" onclick=\\\"modifierinfos('******','reset')\\\">Annuler</button>\"
                }
                else{

                    document.getElementById(\"modifierpassword\").innerHTML= \"****** <button class=\\\"btn btn-outline-secondary\\\" onclick=\\\"modifierinfos('******','modifier')\\\">Modifier</button>\"
                }
            }else{
                if(option === 'modifier'){
                    document.getElementById(\"modifierlogin\").innerHTML= \"<br><input class=\\\"form-control\\\" name=\\\"login\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button class=\\\"btn btn-outline-success\\\" type='submit'> Valider </button>  <button class=\\\"btn btn-outline-danger\\\" onclick=\\\"modifierinfos('\"+ information +\"','reset')\\\">Annuler</button>\"
                }
                else{
                    document.getElementById(\"modifierlogin\").innerHTML=  information +\"<button class=\\\"btn btn-outline-secondary\\\"  onclick=\\\"modifierinfos('\" + information + \"','modifier')\\\">Modifier</button>\"
                }
            }
        }
        // function chargementStat(valeur){
        //     document.getElementById(\"statistique\").innerHTML=
        //
        // }
    </script>
    <br><br>
    <div class=\"container   \">
        <div class=\"align-middle\" style=\"margin-top: 1%\">
    <h1>Mon Compte</h1>
        <br><button class=\"btn btn-secondary\" onclick=\"changementscene('infospersos')\">Mes informations</button>
        ";
        // line 66
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "roles", [], "any", false, false, false, 66))) {
            // line 67
            echo "            <button class=\"btn btn-secondary\" onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        ";
        }
        // line 69
        echo "        ";
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "roles", [], "any", false, false, false, 69))) {
            // line 70
            echo "            <button class=\"btn btn-secondary\" role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
            <button class=\"btn btn-secondary\" role=\"link\" onclick=\"changementscene('messtatistiques')\">Statistiques</button>
        ";
        }
        // line 73
        echo "
    <div id=\"infospersos\">
        <br>
        <h1>Informations personelles</h1>
            Nom: ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
        echo " <br>
            Prenom: ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
        echo " <br>
            Date de naissance: ";
        // line 79
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "datedenaissance", [], "any", false, false, false, 79)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "datedenaissance", [], "any", false, false, false, 79), "Y-m-d"), "html", null, true))) : (print ("")));
        echo " <br>

        Ville : ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "ville", [], "any", false, false, false, 81), "html", null, true);
        echo " <br>
            ";
        // line 82
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "roles", [], "any", false, false, false, 82))) {
            // line 83
            echo "                Profession: Non renseigné <br>
            ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "roles", [], "any", false, false, false, 84))) {
            // line 85
            echo "                Entreprise: Non renseigné <br>
            ";
        }
        // line 87
        echo "            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
        echo ">
                    Login: <p id=\"modifierlogin\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "login", [], "any", false, false, false, 89), "html", null, true);
        echo "  <button class=\"btn btn-outline-secondary\" onclick=\"modifierinfos('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "login", [], "any", false, false, false, 89), "html", null, true);
        echo "', 'modifier')\">Modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        echo ">
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button class=\"btn btn-outline-secondary\" onclick=\"modifierinfos('******','modifier')\">Modifier</button> </p>
            </form>

    </div>
    <div id =\"sondagesrep\" style=\"display: none\">
        ";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "sondages", [], "any", false, false, false, 98), "count", [], "method", false, false, false, 98) == 0)) {
            // line 99
            echo "            <br><br>
            Vous n'avez répondu à aucun sondage
        ";
        }
        // line 102
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "sondages", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 103
            echo "            <h4>Sondage: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 103), "html", null, true);
            echo "</h4>
            Créé par : ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 104), "prenom", [], "any", false, false, false, 104), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
            echo "
            Présentation: <br>
            ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 106), "html", null, true);
            echo "<br><br>
            ";
            // line 107
            $context["reponses"] = [];
            // line 108
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "reponses", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 109
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 109), "sondage", [], "any", false, false, false, 109) == $context["sondage"]) && !twig_in_filter($context["reponse"], (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 109, $this->source); })())))) {
                    // line 110
                    echo "

                    <fieldset>
                        <legend>";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 113), "intitule", [], "any", false, false, false, 113), "html", null, true);
                    echo " </legend>
                        Vous avez répondu: ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 114), "html", null, true);
                    echo " <br>
                        ";
                    // line 115
                    $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 115, $this->source); })()), [0 => $context["reponse"]]);
                    // line 116
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "reponses", [], "any", false, false, false, 116));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 117
                        echo "                            ";
                        if (((twig_get_attribute($this->env, $this->source, $context["r"], "question", [], "any", false, false, false, 117) == twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 117)) && ($context["r"] != $context["reponse"]))) {
                            // line 118
                            echo "                                Vous avez répondu: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "reponse", [], "any", false, false, false, 118), "html", null, true);
                            echo " <br>
                              ";
                            // line 119
                            $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 119, $this->source); })()), [0 => $context["r"]]);
                            // line 120
                            echo "                            ";
                        }
                        // line 121
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                    </fieldset>


                ";
                }
                // line 126
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    </div>
    <div id =\"messondages\" style=\"display: none\">
        ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "sondagescree", [], "any", false, false, false, 130), "count", [], "method", false, false, false, 130) == 0)) {
            // line 131
            echo "            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
            echo "\">Créer votre tout premier sondage !</a>

        ";
        } else {
            // line 136
            echo "        <br>
        <h1>Vos sondages :</h1>
        <table class=\"t\">

        <table class=\"block table table-striped\">
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
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), "sondagescree", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 153
                echo "
            <tr>
                <td>";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 155), "html", null, true);
                echo "</td>
                <td>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 156), "html", null, true);
                echo "</td>
                <td>";
                // line 157
                echo ((twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 157)) ? ("Public") : ("Privé"));
                echo "</td>
                <td> ";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "theme", [], "any", false, false, false, 158), "theme", [], "any", false, false, false, 158), "html", null, true);
                echo "</td>
                <td>";
                // line 159
                ((twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 159)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 159), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    <a class=\"btn btn-outline-info\" href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 161)]), "html", null, true);
                echo "\">Voir</a>
                    <a class=\"btn btn-outline-secondary\"  href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 162)]), "html", null, true);
                echo "\">Modifier</a>
                </td>
            </tr>


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "            </tbody>
        </table>

    </div>
    <div id=\"statistique\">

    </div>
    ";
        }
        // line 176
        echo "    <div id=\"messtatistiques\" style=\"display: none\">
        <br>
        <h1>Statistiques</h1>
        ";
        // line 179
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "sondagescree", [], "any", false, false, false, 179), "count", [], "method", false, false, false, 179) == 0)) {
            // line 180
            echo "            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
            echo "\">Créer votre tout premier sondage !</a>
        ";
        } else {
            // line 184
            echo "
";
            // line 192
            echo "
";
            // line 194
            echo "
            ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "sondagescree", [], "any", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 196
                echo "                <h4>Statitique du sondage : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 196), "html", null, true);
                echo "</h4>
                <p id=\"statitique\"></p>
                Créé par : ";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 198), "prenom", [], "any", false, false, false, 198), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 198), "nom", [], "any", false, false, false, 198), "html", null, true);
                echo "
                Présentation: <br>
                ";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 200), "html", null, true);
                echo "<br><br>
                ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sondage"], "questions", [], "any", false, false, false, 201));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 202
                    echo "                <fieldset>
                    <legend>";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "intitule", [], "any", false, false, false, 203), "html", null, true);
                    echo " </legend>
                    ";
                    // line 204
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 204), "type", [], "any", false, false, false, 204) == "multiple")) {
                        // line 205
                        echo "                        ";
                        $context["nb"] = 0;
                        // line 206
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 206));
                        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                            // line 207
                            echo "                            ";
                            $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 207, $this->source); })()) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 207)));
                            // line 208
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 209
                        echo "                    ";
                    }
                    // line 210
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 210));
                    foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                        // line 211
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 211), "html", null, true);
                        echo "
                        ";
                        // line 212
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 212), "type", [], "any", false, false, false, 212) == "multiple")) {
                            // line 213
                            echo "                            ";
                            if (((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 213, $this->source); })()) == 0)) {
                                // line 214
                                echo "                                0%<br>
                            ";
                            } else {
                                // line 216
                                echo "                                ";
                                echo twig_escape_filter($this->env, ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 216)) / (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 216, $this->source); })())) * 100), "html", null, true);
                                echo "% <br>
                            ";
                            }
                            // line 218
                            echo "                        ";
                        } else {
                            // line 219
                            echo "                            ";
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "utilisateurs", [], "any", false, false, false, 219)) == 0)) {
                                // line 220
                                echo "                                0%<br>
                            ";
                            } else {
                                // line 222
                                echo "                                ";
                                echo twig_escape_filter($this->env, ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "utilisateurs", [], "any", false, false, false, 222)) / twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "utilisateurs", [], "any", false, false, false, 222))) * 100), "html", null, true);
                                echo "% <br>
                            ";
                            }
                            // line 224
                            echo "                        ";
                        }
                        // line 225
                        echo "

                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "
                </fieldset>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        ";
        }
        // line 233
        echo "    </div>
        </div>
        <br>
        <a class=\"btn btn-outline-dark\" href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
        echo "\">Retour</a>

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
        return array (  559 => 236,  554 => 233,  551 => 232,  545 => 231,  537 => 228,  529 => 225,  526 => 224,  520 => 222,  516 => 220,  513 => 219,  510 => 218,  504 => 216,  500 => 214,  497 => 213,  495 => 212,  490 => 211,  485 => 210,  482 => 209,  476 => 208,  473 => 207,  468 => 206,  465 => 205,  463 => 204,  459 => 203,  456 => 202,  452 => 201,  448 => 200,  441 => 198,  435 => 196,  431 => 195,  428 => 194,  425 => 192,  422 => 184,  417 => 182,  413 => 180,  411 => 179,  406 => 176,  396 => 168,  384 => 162,  380 => 161,  375 => 159,  371 => 158,  367 => 157,  363 => 156,  359 => 155,  355 => 153,  351 => 152,  333 => 136,  327 => 133,  323 => 131,  321 => 130,  317 => 128,  311 => 127,  305 => 126,  299 => 122,  293 => 121,  290 => 120,  288 => 119,  283 => 118,  280 => 117,  275 => 116,  273 => 115,  269 => 114,  265 => 113,  260 => 110,  257 => 109,  252 => 108,  250 => 107,  246 => 106,  239 => 104,  234 => 103,  229 => 102,  224 => 99,  222 => 98,  213 => 92,  205 => 89,  201 => 88,  198 => 87,  194 => 85,  192 => 84,  189 => 83,  187 => 82,  183 => 81,  178 => 79,  174 => 78,  170 => 77,  164 => 73,  159 => 70,  156 => 69,  152 => 67,  150 => 66,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    document.getElementById(\"modifierpassword\").innerHTML= \"<input class=\\\"form-control\\\"  name=\\\"password\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button class=\\\"btn btn-outline-success\\\" type='submit' >Valider</button><button class=\\\"btn btn-outline-danger\\\" onclick=\\\"modifierinfos('******','reset')\\\">Annuler</button>\"
                }
                else{

                    document.getElementById(\"modifierpassword\").innerHTML= \"****** <button class=\\\"btn btn-outline-secondary\\\" onclick=\\\"modifierinfos('******','modifier')\\\">Modifier</button>\"
                }
            }else{
                if(option === 'modifier'){
                    document.getElementById(\"modifierlogin\").innerHTML= \"<br><input class=\\\"form-control\\\" name=\\\"login\\\" type=\\\"text\\\" value=\\\"\" + information + \"\\\"/><button class=\\\"btn btn-outline-success\\\" type='submit'> Valider </button>  <button class=\\\"btn btn-outline-danger\\\" onclick=\\\"modifierinfos('\"+ information +\"','reset')\\\">Annuler</button>\"
                }
                else{
                    document.getElementById(\"modifierlogin\").innerHTML=  information +\"<button class=\\\"btn btn-outline-secondary\\\"  onclick=\\\"modifierinfos('\" + information + \"','modifier')\\\">Modifier</button>\"
                }
            }
        }
        // function chargementStat(valeur){
        //     document.getElementById(\"statistique\").innerHTML=
        //
        // }
    </script>
    <br><br>
    <div class=\"container   \">
        <div class=\"align-middle\" style=\"margin-top: 1%\">
    <h1>Mon Compte</h1>
        <br><button class=\"btn btn-secondary\" onclick=\"changementscene('infospersos')\">Mes informations</button>
        {% if 'ROLE_USER' in app.user.roles %}
            <button class=\"btn btn-secondary\" onclick=\"changementscene('sondagesrep')\">Sondages repondus</button>
        {% endif %}
        {% if 'ROLE_ADMIN' in app.user.roles %}
            <button class=\"btn btn-secondary\" role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
            <button class=\"btn btn-secondary\" role=\"link\" onclick=\"changementscene('messtatistiques')\">Statistiques</button>
        {% endif %}

    <div id=\"infospersos\">
        <br>
        <h1>Informations personelles</h1>
            Nom: {{ app.user.nom }} <br>
            Prenom: {{ app.user.prenom }} <br>
            Date de naissance: {{ app.user.datedenaissance ? app.user.datedenaissance|date('Y-m-d') : ''  }} <br>

        Ville : {{ app.user.ville }} <br>
            {% if 'ROLE_USER' in app.user.roles %}
                Profession: Non renseigné <br>
            {% elseif 'ROLE_ADMIN' in app.user.roles %}
                Entreprise: Non renseigné <br>
            {% endif %}
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value={{ app.user.id }}>
                    Login: <p id=\"modifierlogin\">{{ app.user.login }}  <button class=\"btn btn-outline-secondary\" onclick=\"modifierinfos('{{ app.user.login }}', 'modifier')\">Modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value={{ app.user.id }}>
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button class=\"btn btn-outline-secondary\" onclick=\"modifierinfos('******','modifier')\">Modifier</button> </p>
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
        <br>
        <h1>Vos sondages :</h1>
        <table class=\"t\">

        <table class=\"block table table-striped\">
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
                    <a class=\"btn btn-outline-info\" href=\"{{ path('app_sondage_show', {'id': sondage.id}) }}\">Voir</a>
                    <a class=\"btn btn-outline-secondary\"  href=\"{{ path('app_sondage_edit', {'id': sondage.id}) }}\">Modifier</a>
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
        <br>
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
        </div>
        <br>
        <a class=\"btn btn-outline-dark\" href=\"{{ path('app_sondage_index') }}\">Retour</a>

    </div>


{% endblock %}", "racine/moncompte.html.twig", "/var/www/html/creacosm/templates/racine/moncompte.html.twig");
    }
}
