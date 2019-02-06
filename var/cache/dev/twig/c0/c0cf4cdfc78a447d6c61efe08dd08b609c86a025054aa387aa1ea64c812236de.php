<?php

/* user/register.twig */
class __TwigTemplate_7394531243a097c4a51af160f989272a93964c573d8b959b4704ba6641c3c79b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "user/register.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "user/register.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Start Battling Projects!</h1>

    ";
        // line 7
        if ((isset($context["errors"]) || array_key_exists("errors", $context))) {
            // line 8
            echo "        ";
            echo $context["macros"]->getprint_errors(($context["errors"] ?? $this->getContext($context, "errors")));
            echo "
    ";
        }
        // line 10
        echo "
        <form class=\"form-register\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 13
        echo $context["macros"]->getform_field("email", "email", "Email", $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "foo@example.com");
        echo "
                ";
        // line 14
        echo $context["macros"]->getform_field("text", "username", "Username", $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", []), "herocoder");
        echo "
                ";
        // line 15
        echo $context["macros"]->getform_field("password", "plainPassword", "Password", "", "");
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Battle</button>
                    <a class=\"cancel-link\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Cancel</a>
                </div>
            </fieldset>
        </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  55 => 10,  49 => 8,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}
{% import '_macros.twig' as macros %}

{% block content %}
    <h1>Start Battling Projects!</h1>

    {% if errors is defined %}
        {{ macros.print_errors(errors) }}
    {% endif %}

        <form class=\"form-register\" action=\"{{ path('user_register') }}\" method=\"post\">
            <fieldset>
                {{ macros.form_field('email', 'email', 'Email', user.email, 'foo@example.com') }}
                {{ macros.form_field('text', 'username', 'Username', user.username, 'herocoder') }}
                {{ macros.form_field('password', 'plainPassword', 'Password', '', '') }}
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Battle</button>
                    <a class=\"cancel-link\" href=\"{{ path('homepage') }}\">Cancel</a>
                </div>
            </fieldset>
        </form>
{% endblock %}
", "user/register.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/user/register.twig");
    }
}
