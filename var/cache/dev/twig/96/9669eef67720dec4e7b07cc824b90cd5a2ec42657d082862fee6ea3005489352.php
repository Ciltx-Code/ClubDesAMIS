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

/* login/index.html.twig */
class __TwigTemplate_d41d4f5acccb1caf78c54a59e19518d708b5273524ded34a4699608397b427cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Expulsions Locatives";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script>
        function resetError(){
            document.getElementById('error').style.display=\"none\";
        }
    </script>
    <div class=\"container\">
        <div style=\"display: flex; justify-content: center;margin-bottom: -50px\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Griffe PN.png"), "html", null, true);
        echo "\" style=\"width: 15%;\"  alt=\"\">
        </div>
        <h1 style=\"color: white;font-size: 40px; font-weight: lighter;text-align: center; \">
            Gestion des expulsions locatives
        </h1>
        <div class=\"bg-primary p-4\" style=\"text-align: center; width: 50%; margin: 5% auto; border-radius: 25px; border: 2px solid white\">
            <form method=\"post\" action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                <h1 class=\"h3 mb-3 font-weight-normal\" style=\"color: white\">Veuillez vous connecter</h1>
                <div style=\"display: block; color: white; width: 100%\">
                    <div style=\"margin: auto\">
                        <label for=\"util\" class=\"field field_v2 mt-3\">
                            <span class=\"field__label-wrap\">
                                    <span class=\"field__label\">Nom d'utilisateur</span>
                                </span>
                            <input type=\"text\" class=\"field__input\" id=\"util\" name=\"_username\" autocomplete=\"off\">

                        </label>
                    </div>

                    <div style=\"width: 450px; margin: auto\" >
                        <label for=\"mdp\" class=\"field field_v2 mt-3\">
                            <span class=\"field__label-wrap\">
                                    <span class=\"field__label\">Mot de passe</span>
                            </span>
                            <input type=\"password\" class=\"field__input\" id=\"mdp\" name=\"_password\" autocomplete=\"off\">
                        </label>
                    </div>
                    ";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                        <div class=\"mt-4\" id=\"error\" style=\"color: red;width: 40%; height: 20%; margin: auto  \">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageData", [], "any", false, false, false, 39), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 41
        echo "                    <input type=\"hidden\" name=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" value=\"/\">
                    <button class=\"btn btn-outline-light mt-5\" type=\"submit\">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  132 => 39,  130 => 38,  106 => 17,  97 => 11,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Expulsions Locatives{% endblock %}
{% block body %}
    <script>
        function resetError(){
            document.getElementById('error').style.display=\"none\";
        }
    </script>
    <div class=\"container\">
        <div style=\"display: flex; justify-content: center;margin-bottom: -50px\">
            <img src=\"{{ asset('images/Griffe PN.png') }}\" style=\"width: 15%;\"  alt=\"\">
        </div>
        <h1 style=\"color: white;font-size: 40px; font-weight: lighter;text-align: center; \">
            Gestion des expulsions locatives
        </h1>
        <div class=\"bg-primary p-4\" style=\"text-align: center; width: 50%; margin: 5% auto; border-radius: 25px; border: 2px solid white\">
            <form method=\"post\" action=\"{{ path('login') }}\">
                <h1 class=\"h3 mb-3 font-weight-normal\" style=\"color: white\">Veuillez vous connecter</h1>
                <div style=\"display: block; color: white; width: 100%\">
                    <div style=\"margin: auto\">
                        <label for=\"util\" class=\"field field_v2 mt-3\">
                            <span class=\"field__label-wrap\">
                                    <span class=\"field__label\">Nom d'utilisateur</span>
                                </span>
                            <input type=\"text\" class=\"field__input\" id=\"util\" name=\"_username\" autocomplete=\"off\">

                        </label>
                    </div>

                    <div style=\"width: 450px; margin: auto\" >
                        <label for=\"mdp\" class=\"field field_v2 mt-3\">
                            <span class=\"field__label-wrap\">
                                    <span class=\"field__label\">Mot de passe</span>
                            </span>
                            <input type=\"password\" class=\"field__input\" id=\"mdp\" name=\"_password\" autocomplete=\"off\">
                        </label>
                    </div>
                    {% if error %}
                        <div class=\"mt-4\" id=\"error\" style=\"color: red;width: 40%; height: 20%; margin: auto  \">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <input type=\"hidden\" name=\"{{ path('index') }}\" value=\"/\">
                    <button class=\"btn btn-outline-light mt-5\" type=\"submit\">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "login/index.html.twig", "C:\\wamp64\\www\\ClubDesAMIS\\templates\\login\\index.html.twig");
    }
}
