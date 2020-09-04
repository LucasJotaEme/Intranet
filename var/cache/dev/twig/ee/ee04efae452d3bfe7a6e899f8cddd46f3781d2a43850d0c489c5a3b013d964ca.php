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

/* base.html.twig */
class __TwigTemplate_673ac66f51df2a800dec9a5360f8c80dc15587b1ffc1305bfdd3fa7914ef85ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'icon' => [$this, 'block_icon'],
            'body' => [$this, 'block_body'],
            'notificaciones' => [$this, 'block_notificaciones'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('icon', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "    </body>
    
    ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 156
        echo "    
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Intranet";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
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
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <nav class=\"navbar navbar-expand-md navbar-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 21
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "pathinfo", [], "any", false, false, false, 21), "/user/sistemas")) {
            // line 22
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/home.svg"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        ";
        } else {
            // line 24
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/home-blanco.svg"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        ";
        }
        // line 26
        echo "        
        <div class=\"w-100 order-1 order-md-0 dual-collapse2\">
            ";
        // line 29
        echo "        </div>
        <div class=\"collapse navbar-collapse dual-collapse2 mx-auto order-3\">
            <ul class=\"navbar-nav ml-auto \">
                
                ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                <li class=\"nav-item dropdown  \">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
            // line 36
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "pathinfo", [], "any", false, false, false, 36), "/admin/nuevoSistema")) {
                // line 37
                echo "                        <b style=\"border-bottom:2px solid grey;\">Sistemas</b>
                        ";
            } else {
                // line 39
                echo "                        Sistemas
                        ";
            }
            // line 41
            echo "                    </a>
                    <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"formMenu dropdown-item\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoSistema");
            echo "\">Nuevo sistema</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
            echo "\">
                    ";
            // line 48
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "pathinfo", [], "any", false, false, false, 48), "/superadmin/usuarios")) {
                // line 49
                echo "                        <b style=\"border-bottom:2px solid grey;\">Usuarios</b>
                        ";
            } else {
                // line 51
                echo "                        Usuarios
                        ";
            }
            // line 53
            echo "                    </a>
                </li>
                
                ";
        }
        // line 57
        echo "            </ul>
        </div>
        <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" href=\"#ventanaModal1\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/signoPreguntaRedondo.svg"), "html", null, true);
        echo "\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cerrarSesion.png"), "html", null, true);
        echo "\" width=\"19\" height=\"19\" alt=\"Sesion\"> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    ";
        // line 73
        echo "    <div class=\"modal fade\" id=\"ventanaModal1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/signoPreguntaRedondo.svg"), "html", null, true);
        echo "\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\">
                    <h5 style=\"color:#0F9FA8;margin-left:10px;\" class=\"modal-title\">Soporte técnico/Errores/Permisos</h5>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <h6 style=\"color:#306086;\">Motivo de consulta:</h6>
                        <select id=\"selectMotivo\" class=\"form-control campoForm\">
                            <option>Permisos</option>
                            <option>Errores en la web</option>
                            <option>Soporte técnico</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <h6 style=\"color:#306086;\">Descripción:</h6>
                        <textarea class=\"form-control campoForm\" id=\"inputMensaje\" placeholder=\"Ingrese el mensaje..\"></textarea>
                        <p id=\"avisoMensaje\" style=\"color:red;text-align:center;\"></p>
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <a onclick=\"envioMail()\" class=\"btn container\" style=\"text-align:center;background-color:#306086;color:white;\" >
\t\t    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("svg/telegram.svg"), "html", null, true);
        echo "\" title=\"Enviar\" width=\"25\" height=\"25\" alt=\"Sesion\">

\t\t    </a>
                </div>

            </div>
        </div>
    </div>
                    
    ";
        // line 109
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 129
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 110
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [0 => "correcto"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "            <div id=\"notificacion\" class=\"container alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 113
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 116));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 117
            echo "            <div id=\"notificacion\" class=\"container alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 119
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 123
            echo "            <div id=\"notificacion\" class=\"container alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 125
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/comportamientos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accionesDinamicas.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        ";
        // line 154
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 154,  423 => 139,  419 => 138,  413 => 134,  403 => 133,  393 => 128,  384 => 125,  380 => 123,  375 => 122,  366 => 119,  362 => 117,  357 => 116,  348 => 113,  344 => 111,  339 => 110,  329 => 109,  318 => 129,  316 => 109,  304 => 100,  279 => 78,  272 => 73,  260 => 65,  254 => 62,  247 => 57,  241 => 53,  237 => 51,  233 => 49,  231 => 48,  227 => 47,  220 => 43,  216 => 41,  212 => 39,  208 => 37,  206 => 36,  202 => 34,  200 => 33,  194 => 29,  190 => 26,  182 => 24,  174 => 22,  172 => 21,  166 => 17,  156 => 16,  143 => 12,  133 => 11,  121 => 9,  118 => 8,  108 => 7,  89 => 6,  77 => 156,  75 => 133,  71 => 131,  69 => 16,  65 => 14,  62 => 11,  60 => 7,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Intranet{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
            <link href=\"{{ asset(\"css/estilo.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock %}
        {% block icon %}
            <link rel=\"icon\" href=\"{{ asset(\"img/iconoUnraf.png\") }}\">
        {% endblock icon %}
    </head>
    <body>
    {% block body %}
    <nav class=\"navbar navbar-expand-md navbar-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        {% if app.request.pathinfo == \"/user/sistemas\" %}
        <a class=\"navbar-brand\" href=\"{{path('sistemas')}}\"><img src=\"{{ asset(\"svg/home.svg\") }}\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        {% else %}
        <a class=\"navbar-brand\" href=\"{{path('sistemas')}}\"><img src=\"{{ asset(\"svg/home-blanco.svg\") }}\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        {% endif %}
        
        <div class=\"w-100 order-1 order-md-0 dual-collapse2\">
            {# Este div es para dejar centrado Los botones #}
        </div>
        <div class=\"collapse navbar-collapse dual-collapse2 mx-auto order-3\">
            <ul class=\"navbar-nav ml-auto \">
                
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown  \">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {% if app.request.pathinfo == \"/admin/nuevoSistema\" %}
                        <b style=\"border-bottom:2px solid grey;\">Sistemas</b>
                        {% else %}
                        Sistemas
                        {% endif %}
                    </a>
                    <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"formMenu dropdown-item\" href=\"{{ path('nuevoSistema') }}\">Nuevo sistema</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('usuarios') }}\">
                    {% if app.request.pathinfo == \"/superadmin/usuarios\" %}
                        <b style=\"border-bottom:2px solid grey;\">Usuarios</b>
                        {% else %}
                        Usuarios
                        {% endif %}
                    </a>
                </li>
                
                {% endif %}
            </ul>
        </div>
        <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" href=\"#ventanaModal1\"><img src=\"{{ asset(\"svg/signoPreguntaRedondo.svg\") }}\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\"><img src=\"{{ asset(\"img/cerrarSesion.png\") }}\" width=\"19\" height=\"19\" alt=\"Sesion\"> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    {# Modal de SOPORTE #}
    <div class=\"modal fade\" id=\"ventanaModal1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <img src=\"{{ asset(\"svg/signoPreguntaRedondo.svg\") }}\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\">
                    <h5 style=\"color:#0F9FA8;margin-left:10px;\" class=\"modal-title\">Soporte técnico/Errores/Permisos</h5>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <h6 style=\"color:#306086;\">Motivo de consulta:</h6>
                        <select id=\"selectMotivo\" class=\"form-control campoForm\">
                            <option>Permisos</option>
                            <option>Errores en la web</option>
                            <option>Soporte técnico</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <h6 style=\"color:#306086;\">Descripción:</h6>
                        <textarea class=\"form-control campoForm\" id=\"inputMensaje\" placeholder=\"Ingrese el mensaje..\"></textarea>
                        <p id=\"avisoMensaje\" style=\"color:red;text-align:center;\"></p>
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <a onclick=\"envioMail()\" class=\"btn container\" style=\"text-align:center;background-color:#306086;color:white;\" >
\t\t    <img src=\"{{ asset(\"svg/telegram.svg\") }}\" title=\"Enviar\" width=\"25\" height=\"25\" alt=\"Sesion\">

\t\t    </a>
                </div>

            </div>
        </div>
    </div>
                    
    {% block notificaciones %}
        {% for message in app.flashes('correcto') %}
            <div id=\"notificacion\" class=\"container alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div id=\"notificacion\" class=\"container alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('warning') %}
            <div id=\"notificacion\" class=\"container alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
    {% endblock notificaciones %}
    
    {% endblock %}
    </body>
    
    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset(\"js/comportamientos.js\") }}\"></script>
        <script src=\"{{ asset(\"js/accionesDinamicas.js\") }}\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        {# <script type=\"text/javascript\">
            \$('picker').daterangerpicker({
               singleDatePicker:true,
               timePicker: true,
               timePickerSeconds: true,
               timePicker24hour: true,
               locale:{
                   format: 'YYYY-MM-DD hh:mm:ss'
               }
            });
        </script> #}

    {% endblock %}
    
</html>
", "base.html.twig", "/var/www/html/Intranet/templates/base.html.twig");
    }
}
