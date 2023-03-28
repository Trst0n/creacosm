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

/* layer/navbar.html.twig */
class __TwigTemplate_4587076ba9db009e1b1214b8bc119f53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layer/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layer/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-dark  navbar-expand-lg navbar-light\" style=\"background-color: #0a53be\">
    <div class=\"container-fluid collapse navbar-collapse\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon navbar-light\"></span>
        </button>
        <div class=\"container-fluid collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
                </li>
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sondage_index");
            echo "\">Sondages</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moncompte");
            echo "\">Mon compte</a>
                    </li>
                    ";
            // line 19
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "roles", [], "any", false, false, false, 19))) {
                // line 20
                echo "
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_theme");
                echo "\">Theme</a>
                        </li>
                    ";
            }
            // line 25
            echo "                ";
        }
        // line 26
        echo "
            </ul>
            <div class=\"d-flex\">
                <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'\" class=\"nav-link btn btn-danger\">
                            Déconnexion
                        </button>
                    </li>
                    ";
        } else {
            // line 37
            echo "

                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "'\"
                                style=\"margin-right: 10px; padding-left: 20px;padding-right: 20px\"
                                class=\"nav-link btn btn-outline-success\">
                            Connexion
                        </button>

                    </li>
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "'\" class=\"nav-link btn btn-success\">
                            Inscription
                        </button>

                    </li>

                </ul>
                ";
        }
        // line 56
        echo "            </div>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layer/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  125 => 48,  114 => 40,  109 => 37,  101 => 32,  98 => 31,  96 => 30,  90 => 26,  87 => 25,  81 => 22,  77 => 20,  75 => 19,  70 => 17,  64 => 14,  61 => 13,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark  navbar-expand-lg navbar-light\" style=\"background-color: #0a53be\">
    <div class=\"container-fluid collapse navbar-collapse\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon navbar-light\"></span>
        </button>
        <div class=\"container-fluid collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_accueil') }}\">Accueil</a>
                </li>
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\"  href=\"{{ path('app_sondage_index') }}\">Sondages</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_moncompte') }}\">Mon compte</a>
                    </li>
                    {% if \"ROLE_ADMIN\" in app.user.roles %}

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_theme') }}\">Theme</a>
                        </li>
                    {% endif %}
                {% endif %}

            </ul>
            <div class=\"d-flex\">
                <ul class=\"navbar-nav  me-auto mb-2 mb-lg-0\">
                    {% if app.user %}
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_logout') }}'\" class=\"nav-link btn btn-danger\">
                            Déconnexion
                        </button>
                    </li>
                    {% else %}


                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_login') }}'\"
                                style=\"margin-right: 10px; padding-left: 20px;padding-right: 20px\"
                                class=\"nav-link btn btn-outline-success\">
                            Connexion
                        </button>

                    </li>
                    <li class=\"nav-item\">
                        <button onclick=\"location.href='{{ path('app_register') }}'\" class=\"nav-link btn btn-success\">
                            Inscription
                        </button>

                    </li>

                </ul>
                {% endif %}
            </div>
        </div>
    </div>
</nav>", "layer/navbar.html.twig", "/var/www/html/creacosm/templates/layer/navbar.html.twig");
    }
}
