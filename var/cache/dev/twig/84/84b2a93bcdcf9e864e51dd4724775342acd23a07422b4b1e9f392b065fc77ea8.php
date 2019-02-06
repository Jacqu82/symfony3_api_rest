<?php

/* tokens/new.twig */
class __TwigTemplate_0e72061b1b89911d102d1db709a965f4c434e0a7e37c4fb0c27d5cb8252b8a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "tokens/new.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/new.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "tokens/new.twig", 2);
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
        echo "    <h1>Create a personal API token!</h1>

    ";
        // line 7
        echo $context["macros"]->getprint_errors(($context["errors"] ?? $this->getContext($context, "errors")));
        echo "

    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_new");
        echo "\" method=\"post\" class=\"form\">
        <fieldset>
            ";
        // line 11
        echo $context["macros"]->getform_field("textarea", "notes", "Notes", $this->getAttribute(($context["token"] ?? $this->getContext($context, "token")), "notes", []), "Some notes about how you'll use this token");
        echo "
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Tokenify-me!</button>
                <a class=\"cancel-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens");
        echo "\">Cancel</a>
            </div>
        </fieldset>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tokens/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 11,  52 => 9,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
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
    <h1>Create a personal API token!</h1>

    {{ macros.print_errors(errors) }}

    <form action=\"{{ path('user_tokens_new') }}\" method=\"post\" class=\"form\">
        <fieldset>
            {{ macros.form_field('textarea', 'notes', 'Notes', token.notes, 'Some notes about how you\\'ll use this token') }}
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Tokenify-me!</button>
                <a class=\"cancel-link\" href=\"{{ path('user_tokens') }}\">Cancel</a>
            </div>
        </fieldset>
    </form>
{% endblock %}
", "tokens/new.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/tokens/new.twig");
    }
}
