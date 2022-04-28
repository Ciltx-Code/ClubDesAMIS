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

/* user/_form.html.twig */
class __TwigTemplate_ce924b1f6aebe41885dfc605a5691715860efc7099ac5fc1d0ce813fd36b001d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<script>
    function resetPlaceholderPassword(){
        let str = document.getElementById(\"user_password\").value;
        if(str === \"\"){
            document.getElementById(\"user_password\").value =\"*********\";
        }
    }

    function removePlaceholderPassword(){
        let str = document.getElementById(\"user_password\").value;
        if(str === \"*********\"){
            document.getElementById(\"user_password\").value =\"\";
        }
    }
</script>
<div class=\"addForm\">
    <form name=\"UserForm\">
        <div id=\"UserForm\" class=\"mt-3\">
            ";
        // line 20
        if ((0 === twig_compare((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "ajout"))) {
            // line 21
            echo "                <h3>Ajout d'un utilisateur</h3>
            ";
        } else {
            // line 23
            echo "                <h3>Modification d'un utilisateur</h3>
            ";
        }
        // line 25
        echo "            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Email</span>
                    </span>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "field__input", "autocomplete" => "off"]]);
        echo "
                </label>
            </div>
            <div>
                <label class=\"field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Mot de passe</span>
                    </span>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), 'widget', ["attr" => ["type" => "password", "name" => "userPassword", "id" => "userPassword", "class" => "field__input", "autocomplete" => "off", "onfocusin" => "removePlaceholderPassword()", "onfocusout" => "resetPlaceholderPassword()", "value" => "*********"]]);
        echo "
                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Nom</span>
                    </span>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "field__input", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Prénom</span>
                    </span>
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "field__input", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Téléphone fixe</span>
                    </span>
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "telFixe", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "field__input", "maxlength" => "10", "minlength" => "10", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Téléphone portable</span>
                    </span>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "telPortable", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "field__input", "maxlength" => "10", "minlength" => "10", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Num Adresse</span>
                    </span>
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "numAdresse", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "field__input", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Num Adresse</span>
                    </span>
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "villeAdresse", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "field__input", "autocomplete" => "off"]]);
        echo "

                </label>
            </div>
            <div class=\"mt-3\">
                <label>
                    Rôles :
                    <select>
                            <option value=\"user\">Utilisateur</option>
                            <option value=\"admin\">Administrateur</option>
                    </select>
                </label>
            </div>
        </div>
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "_token", [], "any", false, false, false, 105), 'row');
        echo "
        <div class=\"mb-3 mx-3 mt-3\">
            <button class=\"btn mx-3 btn-outline-dark\">";
        // line 107
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 107, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
        </div>
    </form>
</div>
";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 111,  186 => 107,  181 => 105,  164 => 91,  152 => 82,  140 => 73,  128 => 64,  116 => 55,  104 => 46,  93 => 38,  82 => 30,  75 => 25,  71 => 23,  67 => 21,  65 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<script>
    function resetPlaceholderPassword(){
        let str = document.getElementById(\"user_password\").value;
        if(str === \"\"){
            document.getElementById(\"user_password\").value =\"*********\";
        }
    }

    function removePlaceholderPassword(){
        let str = document.getElementById(\"user_password\").value;
        if(str === \"*********\"){
            document.getElementById(\"user_password\").value =\"\";
        }
    }
</script>
<div class=\"addForm\">
    <form name=\"UserForm\">
        <div id=\"UserForm\" class=\"mt-3\">
            {% if action == \"ajout\" %}
                <h3>Ajout d'un utilisateur</h3>
            {% else %}
                <h3>Modification d'un utilisateur</h3>
            {% endif %}
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Email</span>
                    </span>
                    {{ form_widget(form.email, {'attr': {'class': 'field__input', 'autocomplete' : 'off'} } ) }}
                </label>
            </div>
            <div>
                <label class=\"field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Mot de passe</span>
                    </span>
                    {{ form_widget(form.password, {'attr': { 'type' : 'password' , 'name' : 'userPassword', 'id' : 'userPassword' , 'class': 'field__input','autocomplete' : 'off', 'onfocusin' : 'removePlaceholderPassword()', 'onfocusout' : 'resetPlaceholderPassword()',  'value' : '*********'   } } ) }}
                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Nom</span>
                    </span>
                    {{ form_widget(form.nom, {'attr': {'class': 'field__input', 'autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Prénom</span>
                    </span>
                    {{ form_widget(form.prenom, {'attr': {'class': 'field__input', 'autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Téléphone fixe</span>
                    </span>
                    {{ form_widget(form.telFixe, {'attr': {'class': 'field__input',  'maxlength' : '10', 'minlength' : '10','autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\" >
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Téléphone portable</span>
                    </span>
                    {{ form_widget(form.telPortable, {'attr': {'class': 'field__input',  'maxlength' : '10', 'minlength' : '10','autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Num Adresse</span>
                    </span>
                    {{ form_widget(form.numAdresse, {'attr': {'class': 'field__input','autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div>
                <label class=\"required field field_v2 mt-3\">
                    <span class=\"field__label-wrap\">
                        <span class=\"field__label\">Num Adresse</span>
                    </span>
                    {{ form_widget(form.villeAdresse, {'attr': {'class': 'field__input','autocomplete' : 'off'} } ) }}

                </label>
            </div>
            <div class=\"mt-3\">
                <label>
                    Rôles :
                    <select>
                            <option value=\"user\">Utilisateur</option>
                            <option value=\"admin\">Administrateur</option>
                    </select>
                </label>
            </div>
        </div>
        {{ form_row(form._token) }}
        <div class=\"mb-3 mx-3 mt-3\">
            <button class=\"btn mx-3 btn-outline-dark\">{{ button_label|default('Enregistrer') }}</button>
        </div>
    </form>
</div>
{{ form_end(form) }}
", "user/_form.html.twig", "E:\\BTSSIO A2\\ClubAmis\\templates\\user\\_form.html.twig");
    }
}
