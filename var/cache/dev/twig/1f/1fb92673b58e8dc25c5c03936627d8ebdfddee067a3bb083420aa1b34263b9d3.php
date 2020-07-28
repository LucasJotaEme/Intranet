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

/* sistema/acceso.html copy.twig */
class __TwigTemplate_ce93cc0cb54332f74e7964a9de6c9c57424e64a7afe2ffe506ad0f08ba18efb2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/acceso.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/acceso.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sistema/acceso.html copy.twig", 1);
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

        echo "Intranet - Sistemas";
        
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

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
";
        // line 26
        echo "
";
        // line 28
        echo "
    <div style=\"margin-left:10px;margin-top:-20px;\">
        <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn\" >Ver novedades</a>
    </div>

    <div style=\"margin:auto;\">
        <div class=\"col-md-10 container-fluid\">
            <h3 class=\"margin-bottom:10px;\"><img style=\"padding-bottom:5px;\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\" width=\"30\" alt=\"Logo unraf\">SISTEMAS INTERNOS</h3>
        </div>
    </div>

    ";
        // line 40
        echo "    <div class=\"modal fade\" id=\"ventanaModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Últimas novedades</h3>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>

                <div style=\"border-left: 3px solid #516878 \" class=\"modal-body\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) || array_key_exists("novedades", $context) ? $context["novedades"] : (function () { throw new RuntimeError('Variable "novedades" does not exist.', 50, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["novedad"]) {
            // line 51
            echo "                        <div>
                            <h6 style=\"color:grey;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "fecha", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
            echo " - N° ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "numeroDocumento", [], "any", false, false, false, 52), "html", null, true);
            echo "</h6>
                            <div style=\"margin:10px;color:grey;\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "titulo", [], "any", false, false, false, 54), "html", null, true);
            echo "
                            </div>
                            ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 56)) {
                // line 57
                echo "                            ";
            } else {
                // line 58
                echo "                                <hr>
                            ";
            }
            // line 60
            echo "                        </div>
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
            // line 62
            echo "                        <div>
                            <h4>No hay novedades aquí</h4>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    


    <div id=\"sistemas\" class=\"row\" style=\"margin:auto;border-bottom: 3px solid #2B2B2B\">
        ";
        // line 79
        echo "        <div  class=\"container-fluid col-xs-4 col-md-4\">
            ";
        // line 80
        $context["contador"] = 1;
        // line 81
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 81, $this->source); })()), (twig_length_filter($this->env, (isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 81, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 81, $this->source); })()))));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sistema"]) {
            // line 82
            echo "                
                ";
            // line 83
            $context["idContador"] = ("card" . (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 83, $this->source); })()));
            // line 84
            echo "
                <div id=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["idContador"]) || array_key_exists("idContador", $context) ? $context["idContador"] : (function () { throw new RuntimeError('Variable "idContador" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 86
            $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 86, $this->source); })()) + 1);
            echo "    
                    
                    ";
            // line 88
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 88, $this->source); })()))) {
                echo "                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    ";
            } else {
                // line 91
                echo "                    <div class=\"box-part text-center cuadroSistemaGris\">
                    ";
            }
            // line 93
            echo "                            
                        <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 94))), "html", null, true);
            echo "\" class=\" imagenSistema \"></img>
                        
                        <div class=\"title\">
                            <h4 style=\"color:#306086\"><b>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 97), "html", null, true);
            echo "</b></h4>
                        </div>
                        
                        <div class=\"text\">
                            <span style=\"color:grey;\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 101), "html", null, true);
            echo "</span>
                        </div>

                        <hr>
                        <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("direccionamiento", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">Ingresar</a>

                        ";
            // line 107
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 108
                echo "                            <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/editar.png"), "html", null, true);
                echo "\" alt=\"Card image cap\"></a>
                            <a class=\"btn btn-danger\"  href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eliminar.png"), "html", null, true);
                echo "\" width=\"10\"alt=\"Card image cap\"></a> 
                        ";
            }
            // line 111
            echo "                            
                    </div>
                </div>
                    
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "                <h2>Acá deberían aparecer los sistemas, pero no hay</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </div>

            ";
        // line 121
        echo "            <div  class=\"container-fluid col-xs-4 col-md-4\">
            ";
        // line 122
        $context["contador"] = 1;
        // line 123
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 123, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 123, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["sistema"]) {
            // line 124
            echo "                
                ";
            // line 125
            $context["idContador"] = ("card" . (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 125, $this->source); })()));
            // line 126
            echo "
                <div id=\"";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["idContador"]) || array_key_exists("idContador", $context) ? $context["idContador"] : (function () { throw new RuntimeError('Variable "idContador" does not exist.', 127, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 128
            $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 128, $this->source); })()) + 1);
            echo "    
                    
                    ";
            // line 130
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 130, $this->source); })()))) {
                echo "                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    ";
            } else {
                // line 133
                echo "                    <div class=\"box-part text-center cuadroSistemaGris\">
                    ";
            }
            // line 135
            echo "                            
                        <img src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 136))), "html", null, true);
            echo "\" class=\" imagenSistema \"></img>
                        
                        <div class=\"title\">
                            <h4 style=\"color:#306086\"><b>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 139), "html", null, true);
            echo "</b></h4>
                        </div>
                        
                        <div class=\"text\">
                            <span style=\"color:grey;\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
                        </div>

                        <hr>
                        ";
            // line 147
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 147, $this->source); })()))) {
                echo "                                        
                            <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("direccionamiento", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\">Ingresar</a>
                        ";
            } else {
                // line 150
                echo "                            <button class=\"btn\" style=\"background-color: grey;color:white;\">Ingresar</button>
                        ";
            }
            // line 152
            echo "
                        ";
            // line 153
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 154
                echo "                            <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 154)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/editar.png"), "html", null, true);
                echo "\" alt=\"Card image cap\"></a>
                            <a class=\"btn btn-danger\"  href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eliminar.png"), "html", null, true);
                echo "\" width=\"10\"alt=\"Card image cap\"></a> 
                        ";
            }
            // line 157
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 158
                echo "                            <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPermisos", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/permisos2.png"), "html", null, true);
                echo "\" alt=\"Card image cap\"></a>
                        ";
            }
            // line 160
            echo "                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "            </div>
  
    </div>
    <h5 style=\"margin-left:15px;color:grey;padding-top:13px;\">Los permisos se solicitan a <b style=\"color:#FEB413;\">soporte@unraf.edu.ar</b></h5>
    <div class=\"container\">
        ";
        // line 170
        echo "    </div>

    ";
        // line 172
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 175
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 172
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 173
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sistema/acceso.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 173,  524 => 172,  513 => 175,  511 => 172,  507 => 170,  500 => 164,  491 => 160,  483 => 158,  480 => 157,  473 => 155,  466 => 154,  464 => 153,  461 => 152,  457 => 150,  452 => 148,  448 => 147,  441 => 143,  434 => 139,  428 => 136,  425 => 135,  421 => 133,  415 => 130,  410 => 128,  406 => 127,  403 => 126,  401 => 125,  398 => 124,  393 => 123,  391 => 122,  388 => 121,  384 => 118,  377 => 116,  368 => 111,  361 => 109,  354 => 108,  352 => 107,  347 => 105,  340 => 101,  333 => 97,  327 => 94,  324 => 93,  320 => 91,  314 => 88,  309 => 86,  305 => 85,  302 => 84,  300 => 83,  297 => 82,  291 => 81,  289 => 80,  286 => 79,  271 => 65,  262 => 62,  248 => 60,  244 => 58,  241 => 57,  239 => 56,  234 => 54,  227 => 52,  224 => 51,  206 => 50,  194 => 40,  187 => 35,  178 => 28,  175 => 26,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intranet - Sistemas{% endblock %}
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

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
{#<a class=\"btn btn-info\" style=\"margin:10px;\" href=\"{{ path(\"app_logout\") }}\">Cerrar sesión</a>#}

{# Recorrido de los sistemas del usuario, recibido por parametro #}

    <div style=\"margin-left:10px;margin-top:-20px;\">
        <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn\" >Ver novedades</a>
    </div>

    <div style=\"margin:auto;\">
        <div class=\"col-md-10 container-fluid\">
            <h3 class=\"margin-bottom:10px;\"><img style=\"padding-bottom:5px;\" src=\"{{ asset(\"img/iconoUnraf.png\") }}\" width=\"30\" alt=\"Logo unraf\">SISTEMAS INTERNOS</h3>
        </div>
    </div>

    {# Modal de novedades #}
    <div class=\"modal fade\" id=\"ventanaModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Últimas novedades</h3>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>

                <div style=\"border-left: 3px solid #516878 \" class=\"modal-body\">
                    {% for novedad in novedades %}
                        <div>
                            <h6 style=\"color:grey;\">{{ novedad.fecha|date(\"d/m/Y\") }} - N° {{novedad.numeroDocumento}}</h6>
                            <div style=\"margin:10px;color:grey;\">
                                {{novedad.titulo}}
                            </div>
                            {% if loop.last %}
                            {% else %}
                                <hr>
                            {% endif %}
                        </div>
                    {% else %}
                        <div>
                            <h4>No hay novedades aquí</h4>
                        </div>
                    {% endfor %}    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    


    <div id=\"sistemas\" class=\"row\" style=\"margin:auto;border-bottom: 3px solid #2B2B2B\">
        {# Parte izquierda en donde aparecen los sistemas #}
        <div  class=\"container-fluid col-xs-4 col-md-4\">
            {% set contador=1 %}
            {% for sistema in sistemas |slice((sistemas|length)/2,sistemas|length) %}
                
                {% set idContador='card' ~ contador %}

                <div id=\"{{idContador}}\">
                    {% set contador = contador + 1 %}    
                    
                    {% if sistema in sistemasUsuario %}                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    {% else %}
                    <div class=\"box-part text-center cuadroSistemaGris\">
                    {% endif %}
                            
                        <img src=\"{{asset(('uploads/'~ sistema.logo))}}\" class=\" imagenSistema \"></img>
                        
                        <div class=\"title\">
                            <h4 style=\"color:#306086\"><b>{{sistema.nombre}}</b></h4>
                        </div>
                        
                        <div class=\"text\">
                            <span style=\"color:grey;\">{{sistema.descripcion}}</span>
                        </div>

                        <hr>
                        <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"{{ path('direccionamiento', {'id': sistema.id}) }}\">Ingresar</a>

                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"{{path('modificarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"{{ asset(\"img/editar.png\") }}\" alt=\"Card image cap\"></a>
                            <a class=\"btn btn-danger\"  href=\"{{path('eliminarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"{{ asset(\"img/eliminar.png\") }}\" width=\"10\"alt=\"Card image cap\"></a> 
                        {% endif %}
                            
                    </div>
                </div>
                    
            {% else %}
                <h2>Acá deberían aparecer los sistemas, pero no hay</h2>
            {% endfor %}
            </div>

            {# Parte derecha en donde aparecen los sistemas #}
            <div  class=\"container-fluid col-xs-4 col-md-4\">
            {% set contador=1 %}
            {% for sistema in sistemas |slice(0,(sistemas|length)/2) %}
                
                {% set idContador='card' ~ contador %}

                <div id=\"{{idContador}}\">
                    {% set contador = contador + 1 %}    
                    
                    {% if sistema in sistemasUsuario %}                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    {% else %}
                    <div class=\"box-part text-center cuadroSistemaGris\">
                    {% endif %}
                            
                        <img src=\"{{asset(('uploads/'~ sistema.logo))}}\" class=\" imagenSistema \"></img>
                        
                        <div class=\"title\">
                            <h4 style=\"color:#306086\"><b>{{sistema.nombre}}</b></h4>
                        </div>
                        
                        <div class=\"text\">
                            <span style=\"color:grey;\">{{sistema.descripcion}}</span>
                        </div>

                        <hr>
                        {% if sistema in sistemasUsuario %}                                        
                            <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"{{ path('direccionamiento', {'id': sistema.id}) }}\">Ingresar</a>
                        {% else %}
                            <button class=\"btn\" style=\"background-color: grey;color:white;\">Ingresar</button>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"{{path('modificarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"{{ asset(\"img/editar.png\") }}\" alt=\"Card image cap\"></a>
                            <a class=\"btn btn-danger\"  href=\"{{path('eliminarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"{{ asset(\"img/eliminar.png\") }}\" width=\"10\"alt=\"Card image cap\"></a> 
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn btn-warning\" href=\"{{path('verPermisos', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"{{ asset(\"img/permisos2.png\") }}\" alt=\"Card image cap\"></a>
                        {% endif %}
                    </div>
                </div>

            {% endfor %}
            </div>
  
    </div>
    <h5 style=\"margin-left:15px;color:grey;padding-top:13px;\">Los permisos se solicitan a <b style=\"color:#FEB413;\">soporte@unraf.edu.ar</b></h5>
    <div class=\"container\">
        {#<a class=\"btn btn-primary\" href=\"{{ path(\"app_logout\") }}\">Volver</a>#}
    </div>

    {% block notificaciones %}
        {{ parent() }}
    {% endblock notificaciones %}

{% endblock %}

", "sistema/acceso.html copy.twig", "/var/www/html/Intranet/templates/sistema/acceso.html copy.twig");
    }
}
