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

/* permisos/permisos.html.twig */
class __TwigTemplate_76b01927575842b057de76514e407ee66a494c11803a9aff0e1529fafb532522 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'icon' => [$this, 'block_icon'],
            'body' => [$this, 'block_body'],
            'notificaciones' => [$this, 'block_notificaciones'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permisos/permisos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "permisos/permisos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "permisos/permisos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet - Editar sistema";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 12
        echo "    ";
        $this->displayParentBlock("icon", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <div>
        <h3 style=\"text-align:center;\">Permisos a <b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), "html", null, true);
        echo "</b></h3>
    </div>
    <div style=\"text-align:center;\">
        <img class=\"card-img-top  imagenSistema\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 25, $this->source); })()), "logo", [], "any", false, false, false, 25))), "html", null, true);
        echo "\" alt=\"Imagen del sistema\">
    </div>
    <div  style=\"padding:10px; margin:10px;\">
        <div >
            <b> USUARIOS PERMITIDOS: ";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 29, $this->source); })()), "usuarios", [], "any", false, false, false, 29)), "html", null, true);
        echo " DE ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 29, $this->source); })())), "html", null, true);
        echo " </b>
        </div>
        <div style=\"margin-top:5px;\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div class=\"container campoForm\" style=\"text-align:center;\">
                
                <div style=\"\" class=\"form-group row\">
                    <div class=\"col-sm-6\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "buscar", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Escriba el email.."]]);
        echo "  
                    </div>
                    <div class=\"col-sm-6\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "Buscar", [], "any", false, false, false, 40), 'widget', ["attr" => ["style" => "background-color: #fc447c;color:white;", "class" => "form-control campoForm btn"]]);
        echo "  
                    </div>
                </div>
            
            </div>
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
            
        </div>

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 50
            echo "    ";
            // line 51
            echo "        <div class=\"row\" style=\"margin:20px;border-bottom: solid 1.5px grey;\">
            <div class=\"col-8\">
                <h5 style=\"color:#2B2B2B;margin-top:10px;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo "</h5>
            </div>
            ";
            // line 55
            if (twig_in_filter($context["usuario"], twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 55, $this->source); })()), "usuarios", [], "any", false, false, false, 55))) {
                echo "   
                <div class=\"col-4\" style=\"text-align:center;margin-bottom: 10px;\">
                    <a class=\"btn btn-danger\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quitarPermiso", ["idSistema" => twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "idUsuario" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">Quitar</a>
                </div>
            ";
            } else {
                // line 60
                echo "                <div class=\"col-4\" style=\"text-align:center;margin-bottom: 10px;\">
                    <a class=\"btn\" style=\"background-color:#0F9FA8;color:white;\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agregarPermiso", ["idSistema" => twig_get_attribute($this->env, $this->source, (isset($context["sistema"]) || array_key_exists("sistema", $context) ? $context["sistema"] : (function () { throw new RuntimeError('Variable "sistema" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "idUsuario" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\">Agregar</a>
                </div>
            ";
            }
            // line 64
            echo "        </div>
    ";
            // line 66
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "        <div class=\"row\" style=\"margin:20px;\">
            <h3 style=\"color:grey;\">No se encontraron usuarios</h3>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  

    </div>
    ";
        // line 73
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 76
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 74
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "permisos/permisos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 74,  293 => 73,  282 => 76,  280 => 73,  275 => 70,  266 => 67,  261 => 66,  258 => 64,  252 => 61,  249 => 60,  243 => 57,  238 => 55,  233 => 53,  229 => 51,  227 => 50,  222 => 49,  215 => 45,  207 => 40,  201 => 37,  193 => 32,  185 => 29,  178 => 25,  172 => 22,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intranet - Editar sistema{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
{% block icon %}
    {{ parent() }}
{% endblock %}
{% block body %}
    {{ parent() }}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <div>
        <h3 style=\"text-align:center;\">Permisos a <b>{{sistema.nombre}}</b></h3>
    </div>
    <div style=\"text-align:center;\">
        <img class=\"card-img-top  imagenSistema\" src=\"{{asset(('uploads/'~ sistema.logo))}}\" alt=\"Imagen del sistema\">
    </div>
    <div  style=\"padding:10px; margin:10px;\">
        <div >
            <b> USUARIOS PERMITIDOS: {{ sistema.usuarios|length }} DE {{ usuarios|length }} </b>
        </div>
        <div style=\"margin-top:5px;\">
            {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div class=\"container campoForm\" style=\"text-align:center;\">
                
                <div style=\"\" class=\"form-group row\">
                    <div class=\"col-sm-6\">
                        {{ form_widget(formulario.buscar, {attr: {class: 'form-control campoForm' , placeholder: 'Escriba el email..'} }) }}  
                    </div>
                    <div class=\"col-sm-6\">
                        {{ form_widget(formulario.Buscar, {attr: {style: 'background-color: #fc447c;color:white;',class: 'form-control campoForm btn'} }) }}  
                    </div>
                </div>
            
            </div>
            {{ form_end(formulario) }}
            
        </div>

    {% for usuario in usuarios %}
    {# {% if usuario in sistema.usuarios %}   #}
        <div class=\"row\" style=\"margin:20px;border-bottom: solid 1.5px grey;\">
            <div class=\"col-8\">
                <h5 style=\"color:#2B2B2B;margin-top:10px;\">{{ usuario.email }}</h5>
            </div>
            {% if usuario in sistema.usuarios %}   
                <div class=\"col-4\" style=\"text-align:center;margin-bottom: 10px;\">
                    <a class=\"btn btn-danger\" href=\"{{path('quitarPermiso', {'idSistema': sistema.id, 'idUsuario': usuario.id})}}\">Quitar</a>
                </div>
            {% else %}
                <div class=\"col-4\" style=\"text-align:center;margin-bottom: 10px;\">
                    <a class=\"btn\" style=\"background-color:#0F9FA8;color:white;\" href=\"{{path('agregarPermiso', {'idSistema': sistema.id, 'idUsuario': usuario.id})}}\">Agregar</a>
                </div>
            {% endif %}
        </div>
    {# {% endif %}   #}
    {% else %}
        <div class=\"row\" style=\"margin:20px;\">
            <h3 style=\"color:grey;\">No se encontraron usuarios</h3>
        </div>
    {% endfor %}  

    </div>
    {% block notificaciones %}
        {{ parent() }}
    {% endblock notificaciones %}
</div>
{% endblock %}
", "permisos/permisos.html.twig", "/var/www/html/Intranet/templates/permisos/permisos.html.twig");
    }
}
