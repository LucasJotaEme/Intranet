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

/* excel/index.html.twig */
class __TwigTemplate_2333f932318aaa8e2d87fda80ebb9eff34f1c79123175052045b14ae3615b7c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "excel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "excel/index.html.twig", 1);
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

        echo "Intranet- Nueva novedad";
        
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
<div>
    <div>
        <h3 style=\"text-align:center;\">Generar excel</h3>
    </div>
    <div style=\"background-color:white;color:#1D6F42;\" class=\"container\">
        <div class=\"row\">
            <div style=\"text-align:center;padding-top:25px;\" class=\"col-xs-4 col-md-4\">
                <img  src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/excel.svg"), "html", null, true);
        echo "\" title=\"Novedad nueva\" width=\"140\" height=\"140\" alt=\"\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Turno:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "turno", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Llamado:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "llamado", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>

\t    <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Año:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "anio", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>

            
                        
        </div>
        
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-6\">
            <a class=\"container-fluid btn btn-primary colorBoton\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
        echo "\">Generar turnos</a>
        </div>
        <div class=\"col-sm-6\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), "Generar", [], "any", false, false, false, 54), 'widget', ["attr" => ["name" => "asdasd", "class" => "container-fluid btn btn-primary colorBoton"]]);
        echo "
        </div>
    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), 'form_end');
        echo "  
    </div>
    
    </div>
</div>
    
    ";
        // line 63
        $this->displayBlock('notificaciones', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 64
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "excel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 64,  173 => 63,  164 => 57,  158 => 54,  152 => 51,  138 => 40,  126 => 31,  115 => 23,  106 => 17,  100 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intranet- Nueva novedad{% endblock %}

{% block body %}
{{ parent() }}
<div>
    <div>
        <h3 style=\"text-align:center;\">Generar excel</h3>
    </div>
    <div style=\"background-color:white;color:#1D6F42;\" class=\"container\">
        <div class=\"row\">
            <div style=\"text-align:center;padding-top:25px;\" class=\"col-xs-4 col-md-4\">
                <img  src=\"{{ asset(\"svg/excel.svg\") }}\" title=\"Novedad nueva\" width=\"140\" height=\"140\" alt=\"\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Turno:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    {{ form_widget(formulario.turno, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Llamado:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      {{ form_widget(formulario.llamado, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>

\t    <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Año:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      {{ form_widget(formulario.anio, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>

            
                        
        </div>
        
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-6\">
            <a class=\"container-fluid btn btn-primary colorBoton\" href=\"{{ path('sistemas') }}\">Generar turnos</a>
        </div>
        <div class=\"col-sm-6\">
            {{ form_widget(formulario.Generar, {attr: {name: 'asdasd' , class: 'container-fluid btn btn-primary colorBoton'}})}}
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
", "excel/index.html.twig", "/var/www/html/Intranet/templates/excel/index.html.twig");
    }
}
