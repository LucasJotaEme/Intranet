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
        // line 13
        echo "        ";
        $this->displayBlock('icon', $context, $blocks);
        // line 16
        echo "    </head>
    <body>
    ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "    </body>
    
    ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
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

    // line 13
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        // line 14
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/iconoUnraf.png"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <nav class=\"navbar navbar-expand-md navbar-light\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sistemas");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/home.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        <div class=\"w-100 order-1 order-md-0 dual-collapse2\">
            ";
        // line 26
        echo "        </div>
        <div class=\"collapse navbar-collapse dual-collapse2 mx-auto order-3\">
            <ul class=\"navbar-nav ml-auto \">
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                <li class=\"nav-item dropdown  \">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Sistemas
                    </a>
                    <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"formMenu dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nuevoSistema");
            echo "\">Nuevo sistema</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
            echo "\">Usuarios</a>
                </li>
                
                ";
        }
        // line 43
        echo "            </ul>
        </div>
        <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" href=\"#ventanaModal1\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/soporte.jpg"), "html", null, true);
        echo "\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 51
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
        // line 59
        echo "    <div class=\"modal fade\" id=\"ventanaModal1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content scroll\">

                <div class=\"modal-header\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/soporte.jpg"), "html", null, true);
        echo "\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\">
                    <h5 style=\"color:#0F9FA8;margin-left:10px;\" class=\"modal-title\">Soporte técnico/Errores/Permisos</h5>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <h6 style=\"color:#0F9FA8;\">Mensaje:</h6>
                        <select id=\"selectMotivo\" class=\"form-control\">
                            <option>Permisos</option>
                            <option>Errores en la web</option>
                            <option>Soporte técnico</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <h6 style=\"color:#0F9FA8;\">Mensaje:</h6>
                        <textarea class=\"form-control\" id=\"inputMensaje\" placeholder=\"Ingrese el mensaje..\"></textarea>
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <a onclick=\"envioMail()\" class=\"btn container\" data-dismiss=\"modal\" style=\"text-align:center;background-color:#516878;color:white;\" >Enviar</a>
                </div>

            </div>
        </div>
    </div>
                    
    ";
        // line 91
        $this->displayBlock('notificaciones', $context, $blocks);
        // line 111
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_notificaciones($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notificaciones"));

        // line 92
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [0 => "correcto"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "            <div id=\"notificacion\" class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 95
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "            <div id=\"notificacion\" class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 101
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 105
            echo "            <div id=\"notificacion\" class=\"alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 107
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/comportamientos.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accionesDinamicas.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        ";
        // line 135
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
        return array (  384 => 135,  377 => 120,  373 => 119,  368 => 116,  358 => 115,  348 => 110,  339 => 107,  335 => 105,  330 => 104,  321 => 101,  317 => 99,  312 => 98,  303 => 95,  299 => 93,  294 => 92,  284 => 91,  273 => 111,  271 => 91,  241 => 64,  234 => 59,  222 => 51,  216 => 48,  209 => 43,  202 => 39,  195 => 35,  188 => 30,  186 => 29,  181 => 26,  174 => 23,  168 => 19,  158 => 18,  145 => 14,  135 => 13,  121 => 9,  118 => 8,  108 => 7,  89 => 6,  77 => 137,  75 => 115,  71 => 113,  69 => 18,  65 => 16,  62 => 13,  60 => 7,  56 => 6,  49 => 1,);
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
        <a class=\"navbar-brand\" href=\"{{path('sistemas')}}\"><img src=\"{{ asset(\"img/home.png\") }}\" width=\"30\" height=\"30\" alt=\"Home\"></a>
        <div class=\"w-100 order-1 order-md-0 dual-collapse2\">
            {# Este div es para dejar centrado Los botones #}
        </div>
        <div class=\"collapse navbar-collapse dual-collapse2 mx-auto order-3\">
            <ul class=\"navbar-nav ml-auto \">
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown  \">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Sistemas
                    </a>
                    <div class=\"dropdown-menu itemMenu\" aria-labelledby=\"navbarDropdownMenuLink\">
                      <a class=\"formMenu dropdown-item\" href=\"{{ path('nuevoSistema') }}\">Nuevo sistema</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('usuarios') }}\">Usuarios</a>
                </li>
                
                {% endif %}
            </ul>
        </div>
        <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"modal\" href=\"#ventanaModal1\"><img src=\"{{ asset(\"img/soporte.jpg\") }}\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\"></a>
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
                    <img src=\"{{ asset(\"img/soporte.jpg\") }}\" title=\"Soporte técnico\" width=\"25\" height=\"25\" alt=\"Sesion\">
                    <h5 style=\"color:#0F9FA8;margin-left:10px;\" class=\"modal-title\">Soporte técnico/Errores/Permisos</h5>
                    <button class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <h6 style=\"color:#0F9FA8;\">Mensaje:</h6>
                        <select id=\"selectMotivo\" class=\"form-control\">
                            <option>Permisos</option>
                            <option>Errores en la web</option>
                            <option>Soporte técnico</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <h6 style=\"color:#0F9FA8;\">Mensaje:</h6>
                        <textarea class=\"form-control\" id=\"inputMensaje\" placeholder=\"Ingrese el mensaje..\"></textarea>
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <a onclick=\"envioMail()\" class=\"btn container\" data-dismiss=\"modal\" style=\"text-align:center;background-color:#516878;color:white;\" >Enviar</a>
                </div>

            </div>
        </div>
    </div>
                    
    {% block notificaciones %}
        {% for message in app.flashes('correcto') %}
            <div id=\"notificacion\" class=\"alert alert-info alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div id=\"notificacion\" class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('warning') %}
            <div id=\"notificacion\" class=\"alert alert-warning alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ message }}
            </div>
        {% endfor %}
    {% endblock notificaciones %}
    
    {% endblock %}
    </body>
    
    {% block javascripts %}
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
