<?php

/* battle/show.twig */
class __TwigTemplate_ebfb533b25e66d4f2343906157425167b7836edda962f1db7faed3a18a146aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "battle/show.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/show.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "battle/show.twig", 2);
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
        echo "    <h1 class=\"battle-result\">Battle:</h1>
    <p class=\"results\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "nickname", []), "html", null, true);
        echo " vs. ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", []), "html", null, true);
        echo "</p>

    <h3 id=\"winner\">Winner: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["battle"] ?? $this->getContext($context, "battle")), "didProgrammerWin", [])) ? ($this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "nickname", [])) : ($this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "name", []))), "html", null, true);
        echo "</h3>

    <div id=\"battle-notes\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["battle"] ?? $this->getContext($context, "battle")), "notes", []), "html", null, true);
        echo "
    </div>

    ";
        // line 14
        if (($this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "user", []) == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []))) {
            // line 15
            echo "        <div style=\"margin-top: 20px;\">
        <hr>
        <div class=\"battle-btns\">
            <a class=\"btn btn-small btn-start-battle\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", ["nickname" => $this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "nickname", [])]), "html", null, true);
            echo "\">Fight again</a>
            <a class=\"btn btn-small btn-surrender\" href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Retreat!</a>
        </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "battle/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  72 => 18,  67 => 15,  65 => 14,  59 => 11,  53 => 8,  46 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
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
    <h1 class=\"battle-result\">Battle:</h1>
    <p class=\"results\">{{ programmer.nickname }} vs. {{ project.name }}</p>

    <h3 id=\"winner\">Winner: {{ battle.didProgrammerWin ? programmer.nickname : project.name }}</h3>

    <div id=\"battle-notes\">
        {{ battle.notes }}
    </div>

    {% if programmer.user == app.user %}
        <div style=\"margin-top: 20px;\">
        <hr>
        <div class=\"battle-btns\">
            <a class=\"btn btn-small btn-start-battle\" href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\">Fight again</a>
            <a class=\"btn btn-small btn-surrender\" href=\"{{ path('homepage') }}\">Retreat!</a>
        </div>
        </div>
    {% endif %}
{% endblock %}
", "battle/show.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/battle/show.twig");
    }
}
