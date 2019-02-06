<?php

/* programmer/choose.twig */
class __TwigTemplate_f5713622b5c34c30e2c31a664af9af2d52bc7f8c7d4b51684299c7998890249c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "programmer/choose.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/choose.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "programmer/choose.twig", 2);
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
        echo "    <h1>Choose a programmer</h1>
    <hr>
    <ul class=\"programmers-list\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["programmers"] ?? $this->getContext($context, "programmers")));
        foreach ($context['_seq'] as $context["_key"] => $context["programmer"]) {
            // line 9
            echo "            <li>
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", ["nickname" => $this->getAttribute($context["programmer"], "nickname", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmer"], "nickname", []), "html", null, true);
            echo " </a><br>
                <a class=\"programmers-list-img\"href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", ["nickname" => $this->getAttribute($context["programmer"], "nickname", [])]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\BattleExtension')->getAvatarPath($this->getAttribute($context["programmer"], "avatarNumber", []))), "html", null, true);
            echo "\" alt=\"Avatar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmer"], "avatarNumber", []), "html", null, true);
            echo "\" /></a>
                
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
    <div class=\"choose-button\">
    <a class=\"btn btn-small btn-surrender\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Retreat</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "programmer/choose.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  75 => 15,  61 => 11,  55 => 10,  52 => 9,  48 => 8,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
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
    <h1>Choose a programmer</h1>
    <hr>
    <ul class=\"programmers-list\">
        {% for programmer in programmers %}
            <li>
                <a href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\">{{ programmer.nickname }} </a><br>
                <a class=\"programmers-list-img\"href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\"><img src=\"{{ asset(programmer.avatarNumber|avatar_path) }}\" alt=\"Avatar{{ programmer.avatarNumber }}\" /></a>
                
            </li>
        {% endfor %}
    </ul>
    <div class=\"choose-button\">
    <a class=\"btn btn-small btn-surrender\" href=\"{{ path('homepage') }}\">Retreat</a>
    </div>

{% endblock %}
", "programmer/choose.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/programmer/choose.twig");
    }
}
