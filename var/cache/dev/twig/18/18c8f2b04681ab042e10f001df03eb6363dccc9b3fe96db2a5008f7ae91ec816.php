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

/* usuarios/usuarios.html.twig */
class __TwigTemplate_745d20b128de1a087703241b2b4d83f973a1d6682120483a333fff2baec93777 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuarios/usuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuarios/usuarios.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/usuarios.html.twig", 1);
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
        <h3 style=\"text-align:center;\">Administración de ROLES<b></b></h3>
    </div>
    <div  style=\"padding:10px; margin:10px;\">
        <div >
            <b> CANTIDAD DE USUARIOS: ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 27, $this->source); })())), "html", null, true);
        echo "</b>
        </div>
        <hr>
        <div style=\"margin-top:5px;\">
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), 'form_start', ["enctype" => "multipart/form-data"]);
        echo "
            <div class=\"container campoForm\" style=\"text-align:center;\">
                
                <div style=\"\" class=\"form-group row\">
                    <div class=\"col-sm-6\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "buscar", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control campoForm", "placeholder" => "Escriba el email.."]]);
        echo "  
                    </div>
                    <div class=\"col-sm-6\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 39, $this->source); })()), "Buscar", [], "any", false, false, false, 39), 'widget', ["attr" => ["style" => "background-color: #fc447c;color:white;", "class" => "form-control campoForm btn"]]);
        echo "  
                    </div>
                </div>
            
            </div>
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
            
        </div>
    </div>
    <table style=\"text-align:center;\" class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Última conexión</th>
        <th scope=\"col\">Rol</th>
        <th scope=\"col\">Cambio de rol</th>
        </tr>
    </thead>
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 59
            echo "        <tbody style=\"\">
            <tr>
            <th scope=\"row\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            echo "</th>
            <td><h6 style=\"color:#fc447c\">";
            // line 62
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, false, 62), ["@unraf.edu.ar" => ""]), "html", null, true);
            echo "</h6></td>
            <td><h6 style=\"color:#fc447c\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "ultimoAcceso", [], "any", false, false, false, 63), "d/m H:i"), "html", null, true);
            echo "</h6></td>
            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["usuario"], "roles", [], "any", false, false, false, 64));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 65
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                <td><p style=\"color:#2B2B2B\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $context["rol"], 5, twig_length_filter($this->env, $context["rol"])), "html", null, true);
                    echo "</p></td>
                    ";
                    // line 67
                    if (0 === twig_compare($context["rol"], "ROLE_SUPERADMIN")) {
                        // line 68
                        echo "                    <td>
                        <a href=\"";
                        // line 69
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                        echo "\" class=\"btn btn-dark\">User</a>
                        <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Admin</a>
                    </td>
                    ";
                    } elseif (0 === twig_compare(                    // line 72
$context["rol"], "ROLE_ADMIN")) {
                        // line 73
                        echo "                    <td>
                        <a href=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioSuperAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                        echo "\" class=\"btn btn-success\">Superadmin</a>
                        <a href=\"";
                        // line 75
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioUser", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                        echo "\" class=\"btn btn-dark\">User</a>
                    </td>
                    ";
                    } else {
                        // line 78
                        echo "                    <td>
                        <a href=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                        echo "\" class=\"btn btn-primary\">Admin</a>
                        <a href=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambioSuperAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                        echo "\" class=\"btn btn-success\">SuperAdmin</a>
                    </td>
                    ";
                    }
                    // line 83
                    echo "            ";
                }
                echo "  
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </tr>
        </tbody>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 88
            echo "        <div class=\"row\" style=\"margin:20px;\">
            <h3 style=\"color:grey;\">No se encontraron usuarios</h3>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "  
    
    </div>
    ";
        // line 94
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 97
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 95
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 95,  383 => 94,  372 => 97,  370 => 94,  365 => 91,  356 => 88,  341 => 85,  324 => 83,  318 => 80,  314 => 79,  311 => 78,  305 => 75,  301 => 74,  298 => 73,  296 => 72,  291 => 70,  287 => 69,  284 => 68,  282 => 67,  277 => 66,  274 => 65,  257 => 64,  253 => 63,  249 => 62,  245 => 61,  241 => 59,  223 => 58,  206 => 44,  198 => 39,  192 => 36,  184 => 31,  177 => 27,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
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
        <h3 style=\"text-align:center;\">Administración de ROLES<b></b></h3>
    </div>
    <div  style=\"padding:10px; margin:10px;\">
        <div >
            <b> CANTIDAD DE USUARIOS: {{ usuarios|length }}</b>
        </div>
        <hr>
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
    </div>
    <table style=\"text-align:center;\" class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Email</th>
        <th scope=\"col\">Última conexión</th>
        <th scope=\"col\">Rol</th>
        <th scope=\"col\">Cambio de rol</th>
        </tr>
    </thead>
    {% for usuario in usuarios %}
        <tbody style=\"\">
            <tr>
            <th scope=\"row\">{{ loop.index }}</th>
            <td><h6 style=\"color:#fc447c\">{{ usuario.email|replace({'@unraf.edu.ar': ''})}}</h6></td>
            <td><h6 style=\"color:#fc447c\">{{ usuario.ultimoAcceso|date(\"d/m H:i\")}}</h6></td>
            {% for rol in usuario.roles %}
            {% if loop.last %}
                <td><p style=\"color:#2B2B2B\">{{ rol|slice(5,rol|length)}}</p></td>
                    {% if rol==\"ROLE_SUPERADMIN\" %}
                    <td>
                        <a href=\"{{path('cambioUser', {'id': usuario.id})}}\" class=\"btn btn-dark\">User</a>
                        <a href=\"{{path('cambioAdmin',{'id': usuario.id})}}\" class=\"btn btn-primary\">Admin</a>
                    </td>
                    {% elseif rol==\"ROLE_ADMIN\" %}
                    <td>
                        <a href=\"{{path('cambioSuperAdmin',{'id': usuario.id})}}\" class=\"btn btn-success\">Superadmin</a>
                        <a href=\"{{path('cambioUser',{'id': usuario.id})}}\" class=\"btn btn-dark\">User</a>
                    </td>
                    {% else %}
                    <td>
                        <a href=\"{{path('cambioAdmin', {'id': usuario.id})}}\" class=\"btn btn-primary\">Admin</a>
                        <a href=\"{{path('cambioSuperAdmin',{'id': usuario.id})}}\" class=\"btn btn-success\">SuperAdmin</a>
                    </td>
                    {% endif %}
            {% endif %}  
            {% endfor %}
            </tr>
        </tbody>
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
", "usuarios/usuarios.html.twig", "/var/www/html/Intranet/templates/usuarios/usuarios.html.twig");
    }
}
