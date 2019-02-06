<?php

/* programmer/new.twig */
class __TwigTemplate_5917cecc76f1c3201e70eaa31633c00cf71b7e5710e492941942142c391857bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "programmer/new.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/new.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "programmer/new.twig", 2);
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
        echo "    <h1 id=\"create\">Create a Programmer!</h1>

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

        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_new_handle");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 14
        echo $context["macros"]->getform_field("text", "nickname", "Nickname", $this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "nickname", []), "SmilingCoder");
        echo "
                ";
        // line 15
        echo $context["macros"]->getform_field("textarea", "tagLine", "Tag Line", $this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "tagLine", []), "No, sleep, til coding");
        echo "

                <ul class=\"avatar-list js-selectable-tile\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                        <li data-number=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\BattleExtension')->getAvatarPath($context["i"])), "html", null, true);
            echo "\" alt=\"Avatar";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" />
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </ul>
                <input type=\"hidden\" class=\"js-selectable-target\" name=\"avatarNumber\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["programmer"] ?? $this->getContext($context, "programmer")), "avatarNumber", []), "html", null, true);
        echo "\" />

                    <button type=\"submit\" class=\"btn create-buttons\">Compile!</button>
                    <a class=\"cancel-link\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Cancel</a>
            </fieldset>
        </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        jQuery(document).ready(function() {
            \$('.js-selectable-tile').on('click', 'li', function(e) {
                e.preventDefault();

                \$(this).parent().find('li').removeClass('selected');
                \$(this).addClass('selected');

                \$('.js-selectable-target').val(\$(this).data('number'))
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "programmer/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  116 => 33,  104 => 27,  98 => 24,  95 => 23,  84 => 20,  79 => 19,  75 => 18,  69 => 15,  65 => 14,  60 => 12,  56 => 10,  50 => 8,  48 => 7,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
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
    <h1 id=\"create\">Create a Programmer!</h1>

    {% if errors is defined %}
        {{ macros.print_errors(errors) }}
    {% endif %}


        <form action=\"{{ path('programmer_new_handle') }}\" method=\"post\">
            <fieldset>
                {{ macros.form_field('text', 'nickname', 'Nickname', programmer.nickname, 'SmilingCoder') }}
                {{ macros.form_field('textarea', 'tagLine', 'Tag Line', programmer.tagLine, 'No, sleep, til coding') }}

                <ul class=\"avatar-list js-selectable-tile\">
                    {% for i in 1..6 %}
                        <li data-number=\"{{ i }}\">
                            <img src=\"{{ asset(i|avatar_path) }}\" alt=\"Avatar{{ i }}\" />
                        </li>
                    {% endfor %}
                </ul>
                <input type=\"hidden\" class=\"js-selectable-target\" name=\"avatarNumber\" value=\"{{ programmer.avatarNumber }}\" />

                    <button type=\"submit\" class=\"btn create-buttons\">Compile!</button>
                    <a class=\"cancel-link\" href=\"{{ path('homepage') }}\">Cancel</a>
            </fieldset>
        </form>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        jQuery(document).ready(function() {
            \$('.js-selectable-tile').on('click', 'li', function(e) {
                e.preventDefault();

                \$(this).parent().find('li').removeClass('selected');
                \$(this).addClass('selected');

                \$('.js-selectable-target').val(\$(this).data('number'))
            });
        });
    </script>
{% endblock %}", "programmer/new.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/programmer/new.twig");
    }
}
