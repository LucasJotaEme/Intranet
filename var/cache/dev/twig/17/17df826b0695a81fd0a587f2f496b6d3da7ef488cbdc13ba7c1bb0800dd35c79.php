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

/* sistema/acceso.html.twig */
class __TwigTemplate_3161a30298a65ad0af5b361491155158551979554eb442dd2f037ca44d90bf97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/acceso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sistema/acceso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sistema/acceso.html.twig", 1);
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
    

    <div style=\"margin:auto;padding-left:40px;\">
        <div class=\"col-md-8 container-fluid\">
            <h3 class=\"margin-bottom:10px;\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"Logo unraf\">Sistemas internos</h3>
        </div>
    </div>

    <div class=\"modal fade\" id=\"ventanaModal\">
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

    <div class=\"row\" style=\"margin:auto;padding-left:40px;\">
    
        <div id=\"sistemas\" class=\"container-fluid col-10\">
            ";
        // line 78
        $context["contador"] = 1;
        // line 79
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sistemas"]) || array_key_exists("sistemas", $context) ? $context["sistemas"] : (function () { throw new RuntimeError('Variable "sistemas" does not exist.', 79, $this->source); })()));
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
            // line 80
            echo "                ";
            $context["idContador"] = ("card" . (isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 80, $this->source); })()));
            // line 81
            echo "
                ";
            // line 82
            if (0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82) % 2), 0)) {
                // line 83
                echo "
                <div style=\"margin-left:20px;margin-bottom:10px;  margin-right: 10px;\" id=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["idContador"]) || array_key_exists("idContador", $context) ? $context["idContador"] : (function () { throw new RuntimeError('Variable "idContador" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 85
                $context["contador"] = ((isset($context["contador"]) || array_key_exists("contador", $context) ? $context["contador"] : (function () { throw new RuntimeError('Variable "contador" does not exist.', 85, $this->source); })()) + 1);
                echo "    
                    
                    ";
                // line 87
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 87, $this->source); })()))) {
                    echo "                                        
                    <div class=\"card cuadroSistema front\">
                    ";
                } else {
                    // line 90
                    echo "                    <div class=\"card cuadroSistemaGris front\">
                    ";
                }
                // line 92
                echo "                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card-img-bottom\">
                                ";
                // line 95
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 95, $this->source); })()))) {
                    echo "                                        
                                    <img class=\"card-img-top  imagenSistema\" src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 96))), "html", null, true);
                    echo "\" alt=\"Imagen del sistema\">
                                ";
                } else {
                    // line 98
                    echo "                                    <img class=\"card-img-top imagenGris\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 98))), "html", null, true);
                    echo "\" alt=\"Imagen del sistema\">
                                ";
                }
                // line 100
                echo "                            </div>
                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-block\">
                                ";
                // line 105
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 105, $this->source); })()))) {
                    // line 106
                    echo "                                    <h2 class=\"card-title\" style=\"text-align:center;padding-top: 10px;color:white;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 106), "html", null, true);
                    echo "</h2>
                                    <hr style=\"background-color:white;\">
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "palabra1", [], "any", false, false, false, 108), "html", null, true);
                    echo "</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "palabra2", [], "any", false, false, false, 109), "html", null, true);
                    echo "</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "palabra3", [], "any", false, false, false, 110), "html", null, true);
                    echo "</p>
                                ";
                } else {
                    // line 112
                    echo "                                    <h2 class=\"card-title\" style=\"color:#15374F;padding-top:10px;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "nombre", [], "any", false, false, false, 112), "html", null, true);
                    echo "</h2>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Agregar, editar y eliminar tu compra.</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Seguir tus licitaciones.</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Algún otro más</p>
                                ";
                }
                // line 117
                echo "                            </div>
                        </div>

                      </div>
                    </div>
                    ";
                // line 122
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 122, $this->source); })()))) {
                    echo "                                        
                    <div class=\"card cuadroSistema back\">
                    ";
                } else {
                    // line 125
                    echo "                    <div class=\"card cuadroSistemaGris back\">
                    ";
                }
                // line 127
                echo "                        <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card-img-bottom\">
                                ";
                // line 130
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 130, $this->source); })()))) {
                    echo "                                        
                                    <img class=\"card-img-top  imagenSistema\" src=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 131))), "html", null, true);
                    echo "\" alt=\"Imagen del sistema\">
                                ";
                } else {
                    // line 133
                    echo "                                    <img class=\"card-img-top imagenGris\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["sistema"], "logo", [], "any", false, false, false, 133))), "html", null, true);
                    echo "\" alt=\"Imagen del sistema\">
                                ";
                }
                // line 135
                echo "                            </div>
                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-block\">
                                ";
                // line 140
                if (twig_in_filter($context["sistema"], (isset($context["sistemasUsuario"]) || array_key_exists("sistemasUsuario", $context) ? $context["sistemasUsuario"] : (function () { throw new RuntimeError('Variable "sistemasUsuario" does not exist.', 140, $this->source); })()))) {
                    // line 141
                    echo "                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 141), "html", null, true);
                    echo "</p>
                                    <a class=\"btn btn-light btn-lg\" style=\"padding-left:45px; padding-right:45px;background-color: #fcb819;border:none;\"  href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("direccionamiento", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                    echo "\">Conectar</a><br><br>
                                ";
                } else {
                    // line 144
                    echo "                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sistema"], "descripcion", [], "any", false, false, false, 144), "html", null, true);
                    echo "</p>
                                    <h5 style=\"color:#15374F;\"><b>No tienes permisos para ingresar a este sistema</b></h5>
                                ";
                }
                // line 147
                echo "                                
                                ";
                // line 148
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 149
                    echo "                                    <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modificarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                    echo "\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/editar.png"), "html", null, true);
                    echo "\" alt=\"Card image cap\"></a>
                                    <a class=\"btn btn-danger\"  href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarSistema", ["id" => twig_get_attribute($this->env, $this->source, $context["sistema"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                    echo "\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/eliminar.png"), "html", null, true);
                    echo "\" width=\"10\"alt=\"Card image cap\"></a> 
                                ";
                }
                // line 152
                echo "                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  ";
            } else {
                // line 159
                echo "                      
                  ";
            }
            // line 161
            echo "            ";
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
            // line 162
            echo "                <h2>No hay sistemas disponibles.</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sistema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                </div>
            
        
        
        
    </div>
    <h5 style=\"margin-left:15px;color:grey;padding-top:13px;\">Los permisos se solicitan a <b style=\"color:#FEB413;\">soporte@unraf.edu.ar</b></h5>
    <div class=\"container\">
        ";
        // line 173
        echo "    </div>

    ";
        // line 175
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 178
        echo "    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 176
        echo "        ";
        $this->displayParentBlock("notificaciones", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sistema/acceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 176,  536 => 175,  524 => 178,  522 => 175,  518 => 173,  508 => 164,  501 => 162,  488 => 161,  484 => 159,  475 => 152,  468 => 150,  461 => 149,  459 => 148,  456 => 147,  449 => 144,  444 => 142,  439 => 141,  437 => 140,  430 => 135,  424 => 133,  419 => 131,  415 => 130,  410 => 127,  406 => 125,  400 => 122,  393 => 117,  384 => 112,  379 => 110,  375 => 109,  371 => 108,  365 => 106,  363 => 105,  356 => 100,  350 => 98,  345 => 96,  341 => 95,  336 => 92,  332 => 90,  326 => 87,  321 => 85,  317 => 84,  314 => 83,  312 => 82,  309 => 81,  306 => 80,  287 => 79,  285 => 78,  270 => 65,  261 => 62,  247 => 60,  243 => 58,  240 => 57,  238 => 56,  233 => 54,  226 => 52,  223 => 51,  205 => 50,  188 => 36,  178 => 28,  175 => 26,  161 => 15,  151 => 14,  138 => 12,  128 => 11,  115 => 9,  105 => 8,  92 => 5,  82 => 4,  63 => 3,  40 => 1,);
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
    

    <div style=\"margin:auto;padding-left:40px;\">
        <div class=\"col-md-8 container-fluid\">
            <h3 class=\"margin-bottom:10px;\"><img src=\"{{ asset(\"img/iconoUnraf.png\") }}\" width=\"30\" height=\"30\" alt=\"Logo unraf\">Sistemas internos</h3>
        </div>
    </div>

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

    <div class=\"row\" style=\"margin:auto;padding-left:40px;\">
    
        <div id=\"sistemas\" class=\"container-fluid col-10\">
            {% set contador=1 %}
            {% for sistema in sistemas %}
                {% set idContador='card' ~ contador %}

                {% if loop.index %2 == 0 %}

                <div style=\"margin-left:20px;margin-bottom:10px;  margin-right: 10px;\" id=\"{{idContador}}\">
                    {% set contador = contador + 1 %}    
                    
                    {% if sistema in sistemasUsuario %}                                        
                    <div class=\"card cuadroSistema front\">
                    {% else %}
                    <div class=\"card cuadroSistemaGris front\">
                    {% endif %}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card-img-bottom\">
                                {% if sistema in sistemasUsuario %}                                        
                                    <img class=\"card-img-top  imagenSistema\" src=\"{{asset(('uploads/'~ sistema.logo))}}\" alt=\"Imagen del sistema\">
                                {% else %}
                                    <img class=\"card-img-top imagenGris\" src=\"{{asset(('uploads/'~ sistema.logo))}}\" alt=\"Imagen del sistema\">
                                {% endif %}
                            </div>
                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-block\">
                                {% if sistema in sistemasUsuario %}
                                    <h2 class=\"card-title\" style=\"text-align:center;padding-top: 10px;color:white;\">{{ sistema.nombre }}</h2>
                                    <hr style=\"background-color:white;\">
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#{{sistema.palabra1}}</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#{{sistema.palabra2}}</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">#{{sistema.palabra3}}</p>
                                {% else %}
                                    <h2 class=\"card-title\" style=\"color:#15374F;padding-top:10px;\">{{ sistema.nombre }}</h2>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Agregar, editar y eliminar tu compra.</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Seguir tus licitaciones.</p>
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\"># Algún otro más</p>
                                {% endif %}
                            </div>
                        </div>

                      </div>
                    </div>
                    {% if sistema in sistemasUsuario %}                                        
                    <div class=\"card cuadroSistema back\">
                    {% else %}
                    <div class=\"card cuadroSistemaGris back\">
                    {% endif %}
                        <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"card-img-bottom\">
                                {% if sistema in sistemasUsuario %}                                        
                                    <img class=\"card-img-top  imagenSistema\" src=\"{{asset(('uploads/'~ sistema.logo))}}\" alt=\"Imagen del sistema\">
                                {% else %}
                                    <img class=\"card-img-top imagenGris\" src=\"{{asset(('uploads/'~ sistema.logo))}}\" alt=\"Imagen del sistema\">
                                {% endif %}
                            </div>
                            
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-block\">
                                {% if sistema in sistemasUsuario %}
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">{{ sistema.descripcion }}</p>
                                    <a class=\"btn btn-light btn-lg\" style=\"padding-left:45px; padding-right:45px;background-color: #fcb819;border:none;\"  href=\"{{ path('direccionamiento', {'id': sistema.id}) }}\">Conectar</a><br><br>
                                {% else %}
                                    <p class=\"card-text\" style=\"color:white;padding-top:10px;\">{{ sistema.descripcion }}</p>
                                    <h5 style=\"color:#15374F;\"><b>No tienes permisos para ingresar a este sistema</b></h5>
                                {% endif %}
                                
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a class=\"btn btn-dark\" data-toggle=\"editar\" href=\"{{path('modificarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"editar\" style=\"width:25px;\" src=\"{{ asset(\"img/editar.png\") }}\" alt=\"Card image cap\"></a>
                                    <a class=\"btn btn-danger\"  href=\"{{path('eliminarSistema', {'id': sistema.id})}}\"><img class=\"card-img-top\" title=\"borrar\" style=\"width:25px;\" src=\"{{ asset(\"img/eliminar.png\") }}\" width=\"10\"alt=\"Card image cap\"></a> 
                                {% endif %}
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  {% else %}
                      
                  {% endif %}
            {% else %}
                <h2>No hay sistemas disponibles.</h2>
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

", "sistema/acceso.html.twig", "/var/www/html/Intranet/templates/sistema/acceso.html.twig");
    }
}
