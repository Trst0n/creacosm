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
        }
        // line 53
        echo "        ";
        if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "roles", [], "any", false, false, false, 53))) {
            // line 54
            echo "            <button role=\"link\" onclick=\"changementscene('messondages')\">Mes Sondages</button>
        ";
        }
        // line 56
        echo "    <div id=\"infospersos\">
        <br>
        <h4>Informations personelles</h4>
            Nom: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "nom", [], "any", false, false, false, 59), "html", null, true);
        echo " <br>
            Prenom: ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
        echo " <br>
            Date de naissance: ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "datedenaissance", [], "any", false, false, false, 61), "html", null, true);
        echo " <br>
            Ville : ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "ville", [], "any", false, false, false, 62), "html", null, true);
        echo " <br>
            ";
        // line 63
        if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63))) {
            // line 64
            echo "                Profession: Non renseigné <br>
            ";
        } elseif (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "roles", [], "any", false, false, false, 65))) {
            // line 66
            echo "                Entreprise: Non renseigné <br>
            ";
        }
        // line 68
        echo "            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
        echo ">
                    Login: <p id=\"modifierlogin\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "login", [], "any", false, false, false, 70), "html", null, true);
        echo "  <button onclick=\"modifierinfos('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "login", [], "any", false, false, false, 70), "html", null, true);
        echo "', 'modifier')\">modifier</button> </p>
            </form> <br>
            <form action=\"./setmoncompte\" method=\"post\">
                <input name=\"iduser\" type=\"hidden\" value=";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        echo ">
                    Mot de passe: <p id=\"modifierpassword\"> ****** <button onclick=\"modifierinfos('******','modifier')\">modifier</button> </p>
            </form>

    </div>
    <div id =\"sondagesrep\" style=\"display: none\">
        ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "sondages", [], "any", false, false, false, 79), "count", [], "method", false, false, false, 79) == 0)) {
            // line 80
            echo "            <br><br>
            Vous n'avez répondu à aucun sondage
        ";
        }
        // line 83
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "sondages", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
            // line 84
            echo "            <h4>Sondage: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 84), "html", null, true);
            echo "</h4>
            Créé par : ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 85), "prenom", [], "any", false, false, false, 85), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "administrateur", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
            echo "
            Présentation: <br>
            ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 87), "html", null, true);
            echo "<br><br>
            ";
            // line 88
            $context["reponses"] = [];
            // line 89
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "reponses", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 90
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 90), "sondage", [], "any", false, false, false, 90) == $context["sondage"]) && !twig_in_filter($context["reponse"], (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 90, $this->source); })())))) {
                    // line 91
                    echo "

                    <fieldset>
                        <legend>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 94), "intitule", [], "any", false, false, false, 94), "html", null, true);
                    echo " </legend>
                        Vous avez répondu: ";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 95), "html", null, true);
                    echo " <br>
                        ";
                    // line 96
                    $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 96, $this->source); })()), [0 => $context["reponse"]]);
                    // line 97
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "reponses", [], "any", false, false, false, 97));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 98
                        echo "                            ";
                        if (((twig_get_attribute($this->env, $this->source, $context["r"], "question", [], "any", false, false, false, 98) == twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 98)) && ($context["r"] != $context["reponse"]))) {
                            // line 99
                            echo "                                Vous avez répondu: ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "reponse", [], "any", false, false, false, 99), "html", null, true);
                            echo " <br>
                              ";
                            // line 100
                            $context["reponses"] = twig_array_merge((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 100, $this->source); })()), [0 => $context["r"]]);
                            // line 101
                            echo "                            ";
                        }
                        // line 102
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "                    </fieldset>


                ";
                }
                // line 107
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>

    <div id =\"messondages\" style=\"display: none\">
        ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "sondagescree", [], "any", false, false, false, 112), "count", [], "method", false, false, false, 112) == 0)) {
            // line 113
            echo "            <br><br>
            Vous n'avez créé encore aucun sondage !
            <a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_new");
            echo "\">Créer votre tout premier sondage !</a>

        ";
        } else {
            // line 118
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
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "sondagescree", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["sondage"]) {
                // line 134
                echo "
            <tr>
                <td>";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "nom", [], "any", false, false, false, 136), "html", null, true);
                echo "</td>
                <td>";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "introduction", [], "any", false, false, false, 137), "html", null, true);
                echo "</td>
                <td>";
                // line 138
                echo ((twig_get_attribute($this->env, $this->source, $context["sondage"], "visibilite", [], "any", false, false, false, 138)) ? ("Public") : ("Privé"));
                echo "</td>
                <td> ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sondage"], "theme", [], "any", false, false, false, 139), "theme", [], "any", false, false, false, 139), "html", null, true);
                echo "</td>
                <td>";
                // line 140
                ((twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 140)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sondage"], "datecreation", [], "any", false, false, false, 140), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                echo "\">show</a>
                    <a href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sondage"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                echo "\">edit</a>
                </td>
            </tr>


        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sondage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            </tbody>
        </table>

    </div>
    <div id=\"statistique\">

    </div>
    ";
        }
        
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
        return array (  377 => 149,  365 => 143,  361 => 142,  356 => 140,  352 => 139,  348 => 138,  344 => 137,  340 => 136,  336 => 134,  332 => 133,  315 => 118,  309 => 115,  305 => 113,  303 => 112,  298 => 109,  292 => 108,  286 => 107,  280 => 103,  274 => 102,  271 => 101,  269 => 100,  264 => 99,  261 => 98,  256 => 97,  254 => 96,  250 => 95,  246 => 94,  241 => 91,  238 => 90,  233 => 89,  231 => 88,  227 => 87,  220 => 85,  215 => 84,  210 => 83,  205 => 80,  203 => 79,  194 => 73,  186 => 70,  182 => 69,  179 => 68,  175 => 66,  173 => 65,  170 => 64,  168 => 63,  164 => 62,  160 => 61,  156 => 60,  152 => 59,  147 => 56,  143 => 54,  140 => 53,  136 => 51,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        {% endif %}
        {% if 'ROLE_ADMIN' in app.user.roles %}
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
{% endblock %}", "racine/moncompte.html.twig", "/var/www/html/creacosm/templates/racine/moncompte.html.twig");
    }
}
