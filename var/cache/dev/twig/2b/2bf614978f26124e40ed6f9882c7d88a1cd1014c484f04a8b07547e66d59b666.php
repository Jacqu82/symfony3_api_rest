<?php

/* battle/list.twig */
class __TwigTemplate_f3f29141ba88509396f6648c368d9d791883844ff5b5e01d19b2c6b95c943baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "battle/list.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/list.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "battle/list.twig", 2);
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
        echo "    <h1>Epic Battles Fought</h1>

    <table class=\"table table-bordered table-striped\" id=\"battle-table\">
        <thead>
            <tr>
                <th>Programmer</th>
                <th>Project</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["battles"] ?? $this->getContext($context, "battles")));
        foreach ($context['_seq'] as $context["_key"] => $context["battle"]) {
            // line 17
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", ["nickname" => $this->getAttribute($this->getAttribute($context["battle"], "programmer", []), "nickname", [])]), "html", null, true);
            echo "\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["battle"], "programmer", []), "nickname", []), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["battle"], "project", []), "name", []), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a
                            href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("battle_show", ["id" => $this->getAttribute($context["battle"], "id", [])]), "html", null, true);
            echo "\"
                            data-toggle=\"tooltip\"
                            title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["battle"], "notes", []), "html", null, true);
            echo "\"
                            class=\"js-tooltip label label-";
            // line 31
            echo (($this->getAttribute($context["battle"], "didProgrammerWin", [])) ? ("success") : ("danger"));
            echo "\"
                            style=\"display: block;\"
                        >
                            <i class=\"fa fa-thumbs-";
            // line 34
            echo (($this->getAttribute($context["battle"], "didProgrammerWin", [])) ? ("up") : ("down"));
            echo "\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['battle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        jQuery(document).ready(function() {
            \$('#battle-table .js-tooltip').tooltip();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "battle/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  118 => 43,  109 => 39,  98 => 34,  92 => 31,  88 => 30,  83 => 28,  76 => 24,  69 => 20,  65 => 19,  61 => 17,  57 => 16,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
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
    <h1>Epic Battles Fought</h1>

    <table class=\"table table-bordered table-striped\" id=\"battle-table\">
        <thead>
            <tr>
                <th>Programmer</th>
                <th>Project</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for battle in battles %}
                <tr>
                    <td>
                        <a href=\"{{ path('programmer_show', {'nickname': battle.programmer.nickname}) }}\">
                            {{ battle.programmer.nickname }}
                        </a>
                    </td>
                    <td>
                        {{ battle.project.name }}
                    </td>
                    <td>
                        <a
                            href=\"{{ path('battle_show', {id: battle.id}) }}\"
                            data-toggle=\"tooltip\"
                            title=\"{{ battle.notes }}\"
                            class=\"js-tooltip label label-{{ battle.didProgrammerWin ? 'success' : 'danger' }}\"
                            style=\"display: block;\"
                        >
                            <i class=\"fa fa-thumbs-{{ battle.didProgrammerWin ? 'up' : 'down' }}\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        jQuery(document).ready(function() {
            \$('#battle-table .js-tooltip').tooltip();
        });
    </script>
{% endblock %}", "battle/list.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/battle/list.twig");
    }
}
