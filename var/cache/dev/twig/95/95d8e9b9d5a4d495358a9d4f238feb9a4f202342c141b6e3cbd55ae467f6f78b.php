<?php

/* tokens/index.twig */
class __TwigTemplate_fc887f6aeba655306a805733c8ecbf0b1e78b57163726e7dea8c1467274f311a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "tokens/index.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/index.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "tokens/index.twig", 2);
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
        echo "
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_new");
        echo "\" class=\"btn btn-default btn-xs pull-right btn-header-margin\">Add a token</a>

    <h1>API Tokens!</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Token</th>
                <th>Notes</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? $this->getContext($context, "tokens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
            // line 20
            echo "                <tr>
                    <td>
                        <div style=\"word-wrap: break-word; width: 130px;\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "token", []), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "notes", []), "html", null, true);
            echo "</td>
                    <td>
                        <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_delete", ["token" => $this->getAttribute($context["token"], "token", [])]), "html", null, true);
            echo "\" method=\"POST\">
                            <button type=\"submit\" class=\"btn btn-xs btn-danger\">&times;</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"4\" class=\"text-center\">Looks like you're fresh out of API tokens <i class=\"fa fa-frown-o\"></i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['token'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tokens/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  94 => 34,  83 => 28,  78 => 26,  72 => 23,  67 => 20,  62 => 19,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
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

    <a href=\"{{ path('user_tokens_new') }}\" class=\"btn btn-default btn-xs pull-right btn-header-margin\">Add a token</a>

    <h1>API Tokens!</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Token</th>
                <th>Notes</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for token in tokens %}
                <tr>
                    <td>
                        <div style=\"word-wrap: break-word; width: 130px;\">
                            {{ token.token }}
                        </div>
                    </td>
                    <td>{{ token.notes }}</td>
                    <td>
                        <form action=\"{{ path('user_tokens_delete', {'token': token.token}) }}\" method=\"POST\">
                            <button type=\"submit\" class=\"btn btn-xs btn-danger\">&times;</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center\">Looks like you're fresh out of API tokens <i class=\"fa fa-frown-o\"></i></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "tokens/index.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/tokens/index.twig");
    }
}
