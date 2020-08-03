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
    <div style=\"margin-left:10px;margin-top:-20px;margin-bottom:20px;\">
        <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn\" >Ver novedades</a>
        ";
        // line 36
        echo "    </div>

    <div style=\"margin:auto;\">
        <div class=\"container-fluid\">
            <h3><img style=\"padding-bottom:5px;\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\" width=\"30\" alt=\"Logo unraf\">SISTEMAS INTERNOS</h3>
        </div>
    </div>

    ";
        // line 45
        echo "    <div class=\"modal fade\" id=\"ventanaModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Últimas novedades</h3>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>

                <div style=\"border-left: 3px solid #516878 \" class=\"modal-body\">
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) || array_key_exists("novedades", $context) ? $context["novedades"] : (function () { throw new RuntimeError('Variable "novedades" does not exist.', 55, $this->source); })()));
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
            // line 56
            echo "                        <div>
                            <h6 style=\"color:grey;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "fecha", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
            echo " - N° ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "numeroDocumento", [], "any", false, false, false, 57), "html", null, true);
            echo "</h6>
                            <div style=\"margin:10px;color:grey;\">
                                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "titulo", [], "any", false, false, false, 59), "html", null, true);
            echo "
                            </div>
                            ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 61)) {
                // line 62
                echo "                            ";
            } else {
                // line 63
                echo "                                <hr>
                            ";
            }
            // line 65
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
            // line 67
            echo "                        <div style=\"margin:20px;\">
                            <h3 style=\"color:grey;\">No hay novedades aún.</h3>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    


    <div id=\"sistemas\" class=\"divSistemas\">
        ";
        // line 84
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 84, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sistema"]) {
            // line 85
            echo "            ";
            if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85) - 1) % 3), 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 85))) {
                // line 86
                echo "            <div class=\"row\">
            ";
            }
            // line 88
            echo "                <div class=\"container col-xs-4 col-md-4\">  
                    ";
            // line 89
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 89, $this->source); })()))) {
                echo "                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    ";
            } else {
                // line 92
                echo "                    <div class=\"box-part text-center cuadroSistemaGris\">
                    ";
            }
            // line 94
            echo "
                    <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 95))), "html", null, true);
            echo "\" style=\"width:20%;\" class=\" imagenSistema \"></img>
                    <div class=\"title\">
                        <h4 style=\"color:#306086\"><b>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 97), "html", null, true);
            echo "</b></h4>
                    </div>
                        ";
            // line 99
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 99, $this->source); })()))) {
                echo "                                        
                            <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("direccionamiento", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\">Ingresar</a>
                        ";
            } else {
                // line 102
                echo "                            <button class=\"btn\" style=\"background-color: grey;color:white;\">Ingresar</button>
                        ";
            }
            // line 104
            echo "
                    ";
            // line 105
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 106
                echo "                        <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/editar.png"), "html", null, true);
                echo "\" alt=\"Card image cap\"></a>
                        <a class=\"btn btn-danger\"  href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eliminar.png"), "html", null, true);
                echo "\" width=\"10\"alt=\"Card image cap\"></a> 
                        ";
                // line 108
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN")) {
                    // line 109
                    echo "                            <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPermisos", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                    echo "\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/permisos2.png"), "html", null, true);
                    echo "\" alt=\"Card image cap\"></a>
                        ";
                }
                // line 111
                echo "                    ";
            }
            echo "               
                    <div class=\"text\">
                        <span style=\"color:grey;\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 113), "html", null, true);
            echo "</span>
                    </div>
                    </div>
                </div>
                ";
            // line 117
            if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 117) % 3), 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 117))) {
                // line 118
                echo "                </div>
                ";
            }
            // line 119
            echo "    
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
            // line 121
            echo "                <h2>Acá deberían aparecer los sistemas, pero no hay</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
            </div>
  
    </div>

    ";
        // line 128
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 131
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 129
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
        return array (  451 => 129,  441 => 128,  430 => 131,  428 => 128,  421 => 123,  414 => 121,  400 => 119,  396 => 118,  394 => 117,  387 => 113,  381 => 111,  373 => 109,  371 => 108,  365 => 107,  358 => 106,  356 => 105,  353 => 104,  349 => 102,  344 => 100,  340 => 99,  335 => 97,  330 => 95,  327 => 94,  323 => 92,  317 => 89,  314 => 88,  310 => 86,  307 => 85,  288 => 84,  273 => 70,  264 => 67,  250 => 65,  246 => 63,  243 => 62,  241 => 61,  236 => 59,  229 => 57,  226 => 56,  208 => 55,  196 => 45,  189 => 40,  183 => 36,  178 => 28,  175 => 26,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
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

    <div style=\"margin-left:10px;margin-top:-20px;margin-bottom:20px;\">
        <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn\" >Ver novedades</a>
        {#{% for rol in app.user.roles %}
            {% if loop.last %}
                <td><p style=\"color:grey\">Rol: {{ rol|slice(5,rol|length)}}</p></td>
            {% endif %}
        {% endfor %}#}
    </div>

    <div style=\"margin:auto;\">
        <div class=\"container-fluid\">
            <h3><img style=\"padding-bottom:5px;\" src=\"{{ asset(\"img/iconoUnraf.png\") }}\" width=\"30\" alt=\"Logo unraf\">SISTEMAS INTERNOS</h3>
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
                        <div style=\"margin:20px;\">
                            <h3 style=\"color:grey;\">No hay novedades aún.</h3>
                        </div>
                    {% endfor %}    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    


    <div id=\"sistemas\" class=\"divSistemas\">
        {# Parte donde aparecen los sistemas #}
        {% for sistema in sistemas %}
            {% if (loop.index -1) % 3 == 0 or loop.first %}
            <div class=\"row\">
            {% endif %}
                <div class=\"container col-xs-4 col-md-4\">  
                    {% if sistema in sistemasUsuario %}                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    {% else %}
                    <div class=\"box-part text-center cuadroSistemaGris\">
                    {% endif %}

                    <img src=\"{{asset(('uploads/'~ sistema.logo))}}\" style=\"width:20%;\" class=\" imagenSistema \"></img>
                    <div class=\"title\">
                        <h4 style=\"color:#306086\"><b>{{sistema.nombre}}</b></h4>
                    </div>
                        {% if sistema in sistemasUsuario %}                                        
                            <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"{{ path('direccionamiento', {'id': sistema.id}) }}\">Ingresar</a>
                        {% else %}
                            <button class=\"btn\" style=\"background-color: grey;color:white;\">Ingresar</button>
                        {% endif %}

                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"{{path('modificarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"{{ asset(\"img/editar.png\") }}\" alt=\"Card image cap\"></a>
                        <a class=\"btn btn-danger\"  href=\"{{path('eliminarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"{{ asset(\"img/eliminar.png\") }}\" width=\"10\"alt=\"Card image cap\"></a> 
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            <a class=\"btn btn-warning\" href=\"{{path('verPermisos', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"{{ asset(\"img/permisos2.png\") }}\" alt=\"Card image cap\"></a>
                        {% endif %}
                    {% endif %}               
                    <div class=\"text\">
                        <span style=\"color:grey;\">{{sistema.descripcion}}</span>
                    </div>
                    </div>
                </div>
                {% if loop.index % 3 == 0 or loop.last %}
                </div>
                {% endif %}    
            {% else %}
                <h2>Acá deberían aparecer los sistemas, pero no hay</h2>
            {% endfor %}

            </div>
  
    </div>

    {% block notificaciones %}
        {{ parent() }}
    {% endblock notificaciones %}

{% endblock %}

", "sistema/acceso.html copy.twig", "/var/www/html/Intranet/templates/sistema/acceso.html copy.twig");
    }
}
