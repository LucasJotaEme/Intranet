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
";
        // line 17
        echo "
";
        // line 19
        echo "        
    <div style=\"margin-left:10px;margin-top:-20px;margin-bottom:20px;\">
        
        <h4 style=\"color:#0F9FA8\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/megaAviso.svg"), "html", null, true);
        echo "\" title=\"Novedades\" width=\"25\" height=\"25\" alt=\"\"> Novedades</h4>
        <div style=\"margin-left:6px;\" class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
            <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary active\" >Gestión</a>
            <a href=\"#ventanaModalUNRaf\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary\" >UNRaf</a>
        </div>
            ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevaNovedad");
            echo "\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/plus.svg"), "html", null, true);
            echo "\" title=\"Novedad nueva\" width=\"20\" height=\"20\" alt=\"\">Nueva</a>
                <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excel");
            echo "\" style=\"background-color:#1D6F42;color:white;\" class=\"btn btn-secondary\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/excel.svg"), "html", null, true);
            echo "\" title=\"Novedad nueva\" width=\"20\" height=\"20\" alt=\"\"> Mesa examenes</a>
            ";
        }
        // line 31
        echo "        
        <hr>
        ";
        // line 38
        echo "    </div>

    <div style=\"margin:auto;\">
        <div class=\"container-fluid\">
            <h3><img style=\"padding-bottom:5px;\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/server.svg"), "html", null, true);
        echo "\" width=\"30\" alt=\"Logo unraf\"> Sistemas internos</h3>
        </div>
    </div>

    ";
        // line 47
        echo "    <div class=\"modal fade\" id=\"ventanaModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Últimas novedades</h3>
                    <button class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <div style=\"border-left: 3px solid #516878\" class=\"modal-body\">
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["novedades"]) || array_key_exists("novedades", $context) ? $context["novedades"] : (function () { throw new RuntimeError('Variable "novedades" does not exist.', 57, $this->source); })()));
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
            // line 58
            echo "                        <div>
                            <h6 style=\"color:grey;\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "fecha", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
            echo " - N° ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "numeroDocumento", [], "any", false, false, false, 59), "html", null, true);
            echo "</h6>
                            <div style=\"margin:10px;color:grey;\">
                                ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "titulo", [], "any", false, false, false, 61), "html", null, true);
            echo "
                            </div>
                            ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 63)) {
                // line 64
                echo "                            ";
            } else {
                // line 65
                echo "                                <hr>
                            ";
            }
            // line 67
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
            // line 69
            echo "                        <div style=\"margin:20px;\">
                            <h3 style=\"color:grey;\">No hay novedades aún.</h3>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    ";
        // line 82
        echo "

    ";
        // line 85
        echo "    <div class=\"modal fade\" id=\"ventanaModalUNRaf\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div style=\"\" class=\"modal-header\">
                    <h3 class=\"modal-title\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/campana.svg"), "html", null, true);
        echo "\" title=\"Novedades\" width=\"25\" height=\"25\" alt=\"\"> Novedades UNRaf</h3>
                    <button class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["novedadesUNRaf"]) || array_key_exists("novedadesUNRaf", $context) ? $context["novedadesUNRaf"] : (function () { throw new RuntimeError('Variable "novedadesUNRaf" does not exist.', 95, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["novedad"]) {
            // line 96
            echo "                        <div class=\"divNovedad\">
                            <h6 style=\"color:#535353;\">";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "fechaPublicacion", [], "any", false, false, false, 97), "d/m/Y"), "html", null, true);
            echo "</h6>
                            <h6 style=\"color:#535353;\"><b>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "titulo", [], "any", false, false, false, 98), "html", null, true);
            echo "</b></h6>
                            <div style=\"color:#535353;\">
                                ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["novedad"], "descripcion", [], "any", false, false, false, 100), "html", null, true);
            echo "
                                ";
            // line 101
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 102
                echo "                                <br>
                                <a style=\"content-right\" href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarNovedad", ["id" => twig_get_attribute($this->env, $this->source, $context["novedad"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/pencil.svg"), "html", null, true);
                echo "\" title=\"Editar\" width=\"20\" height=\"20\" alt=\"\"></a>
                                ";
            }
            // line 105
            echo "                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                        <div style=\"margin:20px;\">
                            <h3 style=\"color:grey;\">No hay novedades aún.</h3>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['novedad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "    
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn container\" style=\"text-align:center;background-color:#516878;color:white;\" data-dismiss=\"modal\">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    ";
        // line 121
        echo "    
    

    <div id=\"sistemas\" class=\"divSistemas\">
        ";
        // line 126
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 126, $this->source); })()));
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
            // line 127
            echo "            ";
            if ((0 === twig_compare(((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 127) - 1) % 4), 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 127))) {
                // line 128
                echo "            <div class=\"row\">
            ";
            }
            // line 130
            echo "                <div class=\"container col-xs-3 col-md-3\">  
                    ";
            // line 131
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 131, $this->source); })()))) {
                echo "                                        
                    <div class=\"box-part text-center cuadroSistema\">
                    ";
            } else {
                // line 134
                echo "                    <div class=\"box-part text-center cuadroSistemaGris\">
                    ";
            }
            // line 136
            echo "
                    <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 137))), "html", null, true);
            echo "\" style=\"width:20%;\" class=\" imagenSistema \"></img>
                    <div class=\"title\">
                        <h4 style=\"color:#306086\"><b>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 139), "html", null, true);
            echo "</b></h4>
                    </div>
                        ";
            // line 141
            if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 141, $this->source); })()))) {
                echo "                                        
                            <a class=\"btn\" style=\"background-color: #0F9FA8;color:white;\"  href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("direccionamiento", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                echo "\">Ingresar</a>
                        ";
            } else {
                // line 144
                echo "                            <button class=\"btn\" style=\"background-color: grey;color:white;\">Ingresar</button>
                        ";
            }
            // line 146
            echo "
                    ";
            // line 147
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 148
                echo "                        <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/editar.png"), "html", null, true);
                echo "\" alt=\"Card image cap\"></a>
                        <a class=\"btn btn-danger\"  href=\"";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                echo "\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eliminar.png"), "html", null, true);
                echo "\" width=\"10\"alt=\"Card image cap\"></a> 
                        ";
                // line 150
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN")) {
                    // line 151
                    echo "                            <a class=\"btn btn-warning\" style=\"background-color:#FEB413;\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verPermisos", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                    echo "\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/llave.svg"), "html", null, true);
                    echo "\" alt=\"Card image cap\"></a>
                        ";
                }
                // line 153
                echo "                    ";
            }
            echo "               
                    <div class=\"text\">
                        <span style=\"color:grey;\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 155), "html", null, true);
            echo "</span>
                    </div>
                    </div>
                </div>
                ";
            // line 159
            if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159) % 4), 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 159))) {
                // line 160
                echo "                </div>
                ";
            }
            // line 161
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
            // line 163
            echo "                <h2>Acá deberían aparecer los sistemas, pero no hay</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
            </div>
    </div>

    ";
        // line 169
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 172
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 170
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
        return array (  550 => 170,  540 => 169,  529 => 172,  527 => 169,  521 => 165,  514 => 163,  500 => 161,  496 => 160,  494 => 159,  487 => 155,  481 => 153,  473 => 151,  471 => 150,  465 => 149,  458 => 148,  456 => 147,  453 => 146,  449 => 144,  444 => 142,  440 => 141,  435 => 139,  430 => 137,  427 => 136,  423 => 134,  417 => 131,  414 => 130,  410 => 128,  407 => 127,  388 => 126,  382 => 121,  371 => 111,  362 => 108,  355 => 105,  348 => 103,  345 => 102,  343 => 101,  339 => 100,  334 => 98,  330 => 97,  327 => 96,  322 => 95,  314 => 90,  307 => 85,  303 => 82,  292 => 72,  283 => 69,  269 => 67,  265 => 65,  262 => 64,  260 => 63,  255 => 61,  248 => 59,  245 => 58,  227 => 57,  215 => 47,  208 => 42,  202 => 38,  198 => 31,  191 => 29,  184 => 28,  182 => 27,  174 => 22,  169 => 19,  166 => 17,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
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
{#<a class=\"btn btn-info\" style=\"margin:10px;\" href=\"{{ path(\"app_logout\") }}\">Cerrar sesión</a>#}

{# Recorrido de los sistemas del usuario, recibido por parametro #}
        
    <div style=\"margin-left:10px;margin-top:-20px;margin-bottom:20px;\">
        
        <h4 style=\"color:#0F9FA8\"><img src=\"{{ asset(\"svg/megaAviso.svg\") }}\" title=\"Novedades\" width=\"25\" height=\"25\" alt=\"\"> Novedades</h4>
        <div style=\"margin-left:6px;\" class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
            <a href=\"#ventanaModal\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary active\" >Gestión</a>
            <a href=\"#ventanaModalUNRaf\" data-toggle=\"modal\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary\" >UNRaf</a>
        </div>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{path('nuevaNovedad')}}\" style=\"background-color:#516878;color:white;\" class=\"btn btn-secondary\" ><img src=\"{{ asset(\"svg/plus.svg\") }}\" title=\"Novedad nueva\" width=\"20\" height=\"20\" alt=\"\">Nueva</a>
                <a href=\"{{path('excel')}}\" style=\"background-color:#1D6F42;color:white;\" class=\"btn btn-secondary\" ><img src=\"{{ asset(\"svg/excel.svg\") }}\" title=\"Novedad nueva\" width=\"20\" height=\"20\" alt=\"\"> Mesa examenes</a>
            {% endif %}
        
        <hr>
        {#{% for rol in app.user.roles %}
            {% if loop.last %}
                <td><p style=\"color:grey\">Rol: {{ rol|slice(5,rol|length)}}</p></td>
            {% endif %}
        {% endfor %}#}
    </div>

    <div style=\"margin:auto;\">
        <div class=\"container-fluid\">
            <h3><img style=\"padding-bottom:5px;\" src=\"{{ asset(\"svg/server.svg\") }}\" width=\"30\" alt=\"Logo unraf\"> Sistemas internos</h3>
        </div>
    </div>

    {# Modal de novedades #}
    <div class=\"modal fade\" id=\"ventanaModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <h3 class=\"modal-title\">Últimas novedades</h3>
                    <button class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <div style=\"border-left: 3px solid #516878\" class=\"modal-body\">
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
    {# ............ #}


    {# Modal de novedadesUNRaf #}
    <div class=\"modal fade\" id=\"ventanaModalUNRaf\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"basicModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div style=\"\" class=\"modal-header\">
                    <h3 class=\"modal-title\"><img src=\"{{ asset(\"svg/campana.svg\") }}\" title=\"Novedades\" width=\"25\" height=\"25\" alt=\"\"> Novedades UNRaf</h3>
                    <button class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>

                <div class=\"modal-body\">
                    {% for novedad in novedadesUNRaf %}
                        <div class=\"divNovedad\">
                            <h6 style=\"color:#535353;\">{{ novedad.fechaPublicacion|date(\"d/m/Y\") }}</h6>
                            <h6 style=\"color:#535353;\"><b>{{novedad.titulo}}</b></h6>
                            <div style=\"color:#535353;\">
                                {{novedad.descripcion}}
                                {% if is_granted('ROLE_ADMIN') %}
                                <br>
                                <a style=\"content-right\" href=\"{{ path('modificarNovedad', {'id': novedad.id}) }}\"><img src=\"{{ asset(\"svg/pencil.svg\") }}\" title=\"Editar\" width=\"20\" height=\"20\" alt=\"\"></a>
                                {% endif %}
                            </div>
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
    {# ............. #}
    
    

    <div id=\"sistemas\" class=\"divSistemas\">
        {# Parte donde aparecen los sistemas #}
        {% for sistema in sistemas %}
            {% if (loop.index -1) % 4 == 0 or loop.first %}
            <div class=\"row\">
            {% endif %}
                <div class=\"container col-xs-3 col-md-3\">  
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
                            <a class=\"btn btn-warning\" style=\"background-color:#FEB413;\" href=\"{{path('verPermisos', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"permisos\" style=\"width:25px;\" src=\"{{ asset(\"svg/llave.svg\") }}\" alt=\"Card image cap\"></a>
                        {% endif %}
                    {% endif %}               
                    <div class=\"text\">
                        <span style=\"color:grey;\">{{sistema.descripcion}}</span>
                    </div>
                    </div>
                </div>
                {% if loop.index % 4 == 0 or loop.last %}
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
