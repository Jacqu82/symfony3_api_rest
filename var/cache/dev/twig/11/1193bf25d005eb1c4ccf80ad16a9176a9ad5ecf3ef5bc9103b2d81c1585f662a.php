<?php

/* layout.twig */
class __TwigTemplate_2bfd20c43efe6df5e9bb08e659f45a45edc00ad537e660a28b6f469bc31b942d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("_macros.twig", "layout.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Add custom CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "basePath", []), "html", null, true);
        echo "/css/styles.css\">
</head>
<body>
    <!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"../img/logo-2.png\" alt=\"code battle logo\" class=\"logo\"></a>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">Code Battles</a>
               ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                <button class = \"navbar-toggle\" data-toggle = \"collapse\" data-target = \"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                </button>
                ";
        } else {
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\"
                               data-toggle=\"dropdown\" href=\"#\">
                                User Info <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    ";
            // line 46
            $context["user"] = $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []);
            // line 47
            echo "                                    <table class=\"table table-striped user-information\">
                                        <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "html", null, true);
            echo "</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"main-console-screen\">
                ";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "session", []), "flashbag", []), "has", [0 => "notice_happy"], "method")) {
            // line 77
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "session", []), "flashbag", []), "get", [0 => "notice_happy"], "method"), true);
            echo "
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "session", []), "flashbag", []), "has", [0 => "notice_sad"], "method")) {
            // line 81
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "session", []), "flashbag", []), "get", [0 => "notice_sad"], "method"), false);
            echo "
                ";
        }
        // line 83
        echo "
                ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "            </div>
        </div>
    </div>

    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "        <script src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 90,  189 => 89,  178 => 84,  169 => 93,  167 => 89,  161 => 85,  159 => 84,  156 => 83,  150 => 81,  148 => 80,  145 => 79,  139 => 77,  137 => 76,  126 => 67,  123 => 66,  117 => 63,  106 => 55,  99 => 51,  93 => 47,  91 => 46,  82 => 39,  80 => 38,  75 => 35,  72 => 34,  64 => 28,  62 => 27,  58 => 26,  54 => 25,  41 => 15,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_macros.twig' as macros -%}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Add custom CSS here -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basePath }}/css/styles.css\">
</head>
<body>
    <!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"{{ path('homepage') }}\"><img src=\"../img/logo-2.png\" alt=\"code battle logo\" class=\"logo\"></a>
                <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">Code Battles</a>
               {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <button class = \"navbar-toggle\" data-toggle = \"collapse\" data-target = \"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                </button>
                {% else %}
                {% endif %}
            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\"
                               data-toggle=\"dropdown\" href=\"#\">
                                User Info <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    {% set user = app.user %}
                                    <table class=\"table table-striped user-information\">
                                        <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ user.email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ user.username }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"{{ path('security_logout') }}\">Logout</a>
                        </li>
                    {% else %}
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"main-console-screen\">
                {% if app.request.session.flashbag.has('notice_happy') %}
                    {{ macros.flashMessage(app.request.session.flashbag.get('notice_happy'), true) }}
                {% endif %}

                {% if app.request.session.flashbag.has('notice_sad') %}
                    {{ macros.flashMessage(app.request.session.flashbag.get('notice_sad'), false) }}
                {% endif %}

                {% block content %}{% endblock %}
            </div>
        </div>
    </div>

    {% block javascripts %}
        <script src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    {% endblock %}
</body>
</html>
", "layout.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/layout.twig");
    }
}
