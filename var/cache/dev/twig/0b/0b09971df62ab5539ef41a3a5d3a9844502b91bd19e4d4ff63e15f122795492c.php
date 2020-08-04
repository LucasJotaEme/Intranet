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

/* sistema/nuevoSistema.html.twig */
class __TwigTemplate_18dd50c96709e6c8fa10623411c43ac20a8db79f8c5c512ed70f2d04112969c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/nuevoSistema.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/nuevoSistema.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sistema/nuevoSistema.html.twig", 1);
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

        echo "Hello SistemaController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <div>
        <h3 style=\"text-align:center;\">Sistemas >> Nuevo sistema</h3>
    </div>
    <div style=\"background-color:white\" class=\"container formularioSistema\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-4\">
                <img class=\"card-img-top rounded imagenSistemaBorde\" id=\"imagen\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . (isset($context["imagen"]) || array_key_exists("imagen", $context) ? $context["imagen"] : (function () { throw new RuntimeError('Variable "imagen" does not exist.', 18, $this->source); })()))), "html", null, true);
        echo "\" alt=\"Imagen del sistema\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 21, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Nombre:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "nombre", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Imágen:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "logo", [], "any", false, false, false, 35), 'widget', ["attr" => ["accept" => " application / pdf, .png, .jpg, .ico ", "class" => " form-control campoForm"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>URL:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), "url", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
        </div>
        
        <div class=\"form-group row\">
            <div class=\"col-sm-2 col-form-label\">
                <h5>Descripción:</h5>
            </div>
            <div class=\"col-sm-10 espaciado \">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), "descripcion", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
            </div>
        </div>
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-5\">
            <a class=\"container-fluid btn btn-secondary\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
        echo "\">Cancelar</a>
        </div>
        <div class=\"col-sm-7\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 61, $this->source); })()), "Crear", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "container-fluid btn btn-primary colorBoton"]]);
        echo "
        </div>
    </div>
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 64, $this->source); })()), 'form_end');
        echo "  
    </div>
    
    </div>
</div>
    
    ";
        // line 70
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 73
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 71
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sistema/nuevoSistema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 71,  196 => 70,  185 => 73,  183 => 70,  174 => 64,  168 => 61,  162 => 58,  153 => 52,  141 => 43,  130 => 35,  119 => 27,  110 => 21,  104 => 18,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello SistemaController!{% endblock %}

{% block body %}
{{ parent() }}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <div>
        <h3 style=\"text-align:center;\">Sistemas >> Nuevo sistema</h3>
    </div>
    <div style=\"background-color:white\" class=\"container formularioSistema\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-4\">
                <img class=\"card-img-top rounded imagenSistemaBorde\" id=\"imagen\" src=\"{{asset(('uploads/'~ imagen))}}\" alt=\"Imagen del sistema\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Nombre:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    {{ form_widget(formulario.nombre, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Imágen:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      {{form_widget ( formulario.logo , { attr : { accept : ' application / pdf, .png, .jpg, .ico ' , class : ' form-control campoForm' }})}}
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>URL:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    {{ form_widget(formulario.url, {attr: {class: 'form-control campoForm'} })}}
                </div>
        </div>
        
        <div class=\"form-group row\">
            <div class=\"col-sm-2 col-form-label\">
                <h5>Descripción:</h5>
            </div>
            <div class=\"col-sm-10 espaciado \">
                {{ form_widget(formulario.descripcion, {attr: {class: 'form-control campoForm'} })}}
            </div>
        </div>
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-5\">
            <a class=\"container-fluid btn btn-secondary\" href=\"{{ path('sistemas') }}\">Cancelar</a>
        </div>
        <div class=\"col-sm-7\">
            {{ form_widget(formulario.Crear, {attr: {class: 'container-fluid btn btn-primary colorBoton'} })}}
        </div>
    </div>
    {{ form_end(formulario) }}  
    </div>
    
    </div>
</div>
    
    {% block notificaciones %}
        {{ parent() }}
    {% endblock notificaciones %}

{% endblock %}
", "sistema/nuevoSistema.html.twig", "/var/www/html/Intranet/templates/sistema/nuevoSistema.html.twig");
    }
}
