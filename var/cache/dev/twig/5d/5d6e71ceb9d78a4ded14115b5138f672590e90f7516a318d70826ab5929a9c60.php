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

/* novedades/nuevaNovedad.html.twig */
class __TwigTemplate_8c07ba65aab7b5a4cc96a2e0a73767489abef1f279027f5939c491eea717022b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "novedades/nuevaNovedad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "novedades/nuevaNovedad.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "novedades/nuevaNovedad.html.twig", 1);
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
        <h3 style=\"text-align:center;\">Novedades >> novedad UNRaf</h3>
    </div>
    <div style=\"background-color:white\" class=\"container formularioSistema\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-4\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/megaAviso.svg"), "html", null, true);
        echo "\" title=\"Novedad nueva\" width=\"60\" height=\"60\" alt=\"\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Título:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "titulo", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Descripción:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "descripcion", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control campoForm"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Fecha publicación:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 41, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 41), "day", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 44), "month", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 47, $this->source); })()), "fechaPublicacion", [], "any", false, false, false, 47), "year", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Fecha caducidad:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 60), "day", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 63, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 63), "month", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control "]]);
        echo "  
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 66, $this->source); })()), "fechaCaducidad", [], "any", false, false, false, 66), "year", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "  
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-5\">
            <a class=\"container-fluid btn btn-secondary\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
        echo "\">Cancelar</a>
        </div>
        <div class=\"col-sm-7\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 80, $this->source); })()), "Aceptar", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "container-fluid btn btn-primary colorBoton"]]);
        echo "
        </div>
    </div>
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 83, $this->source); })()), 'form_end');
        echo "  
    </div>
    
    </div>
</div>
    
    ";
        // line 89
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

        // line 90
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "novedades/nuevaNovedad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 90,  214 => 89,  205 => 83,  199 => 80,  193 => 77,  179 => 66,  173 => 63,  167 => 60,  151 => 47,  145 => 44,  139 => 41,  126 => 31,  115 => 23,  106 => 17,  100 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intranet- Nueva novedad{% endblock %}

{% block body %}
{{ parent() }}
<div>
    <div>
        <h3 style=\"text-align:center;\">Novedades >> novedad UNRaf</h3>
    </div>
    <div style=\"background-color:white\" class=\"container formularioSistema\">
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-4\">
                <img src=\"{{ asset(\"svg/megaAviso.svg\") }}\" title=\"Novedad nueva\" width=\"60\" height=\"60\" alt=\"\">
            </div>
        <div class=\"col-xs-8 col-md-8\">
            {{ form_start(formulario, {'enctype':'multipart/form-data'})}}
            <div style=\"margin-top: 30px;\" class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Título:</h5>
                </div>
                <div class=\"col-sm-10 espaciado\">
                    {{ form_widget(formulario.titulo, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-2 col-form-label\">
                    <h5>Descripción:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                      {{ form_widget(formulario.descripcion, {attr: {class: 'form-control campoForm'} })}}
                </div>
            </div>
            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Fecha publicación:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.day, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.month, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaPublicacion.year, {attr: {class: 'form-control'} }) }}  
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <div class=\"col-sm-2 col-form-label\">
                    <h5>Fecha caducidad:</h5>
                </div>
                <div class=\"col-sm-10 espaciado \">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.day, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.month, {attr: {class: 'form-control '} }) }}  
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(formulario.fechaCaducidad.year, {attr: {class: 'form-control'} }) }}  
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class=\"row container-fluid\">
        <div class=\"col-sm-5\">
            <a class=\"container-fluid btn btn-secondary\" href=\"{{ path('sistemas') }}\">Cancelar</a>
        </div>
        <div class=\"col-sm-7\">
            {{ form_widget(formulario.Aceptar, {attr: {class: 'container-fluid btn btn-primary colorBoton'} })}}
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
", "novedades/nuevaNovedad.html.twig", "/var/www/html/Intranet/templates/novedades/nuevaNovedad.html.twig");
    }
}
