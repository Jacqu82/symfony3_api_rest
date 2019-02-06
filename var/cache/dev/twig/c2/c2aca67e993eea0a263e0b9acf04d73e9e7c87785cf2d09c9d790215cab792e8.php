<?php

/* _macros.twig */
class __TwigTemplate_00455b3075831190e5a60754baeb9e183ee6ed5fb9f6a9ed5e8017eae6f4e100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_macros.twig"));

        // line 17
        echo "
";
        // line 28
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function getprint_errors($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "print_errors"));

            // line 3
            echo "
    ";
            // line 4
            if ( !twig_test_empty(($context["errors"] ?? $this->getContext($context, "errors")))) {
                // line 5
                echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 9
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "                </div>
            </div>
        </div>
    ";
            }
            // line 15
            echo "
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getform_field($__type__ = null, $__name__ = null, $__label__ = null, $__value__ = null, $__placeholder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "placeholder" => $__placeholder__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_field"));

            // line 19
            echo "    <div class=\"form-group\">
        <label for=\"form-";
            // line 20
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" class=\"control-label\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "</label>
        ";
            // line 21
            if ((($context["type"] ?? $this->getContext($context, "type")) == "textarea")) {
                // line 22
                echo "            <textarea name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "</textarea>
        ";
            } else {
                // line 24
                echo "            <input type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getflashMessage($__messages__ = null, $__isPositive__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "isPositive" => $__isPositive__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashMessage"));

            // line 30
            echo "    <div class=\"alert alert-warning flash-message\">
        ";
            // line 31
            if (($context["isPositive"] ?? $this->getContext($context, "isPositive"))) {
                // line 32
                echo "            <i class=\"fa fa-bolt\"></i>
        ";
            } else {
                // line 34
                echo "            <i class=\"fa fa-exclamation-triangle\"></i>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                echo "            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 40,  207 => 38,  203 => 37,  200 => 36,  196 => 34,  192 => 32,  190 => 31,  187 => 30,  171 => 29,  152 => 26,  138 => 24,  126 => 22,  124 => 21,  118 => 20,  115 => 19,  96 => 18,  77 => 15,  71 => 11,  62 => 9,  58 => 8,  53 => 5,  51 => 4,  48 => 3,  33 => 2,  25 => 28,  22 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Included above forms to print errors easily #}
{% macro print_errors(errors) %}

    {% if errors is not empty %}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    {% for error in errors %}
                        <p>{{ error }}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}

{% endmacro %}

{% macro form_field(type, name, label, value, placeholder) %}
    <div class=\"form-group\">
        <label for=\"form-{{ name }}\" class=\"control-label\">{{ label }}</label>
        {% if type == 'textarea' %}
            <textarea name=\"{{ name }}\" class=\"form-control\" id=\"form-{{ name }}\" placeholder=\"{{ placeholder }}\">{{ value }}</textarea>
        {% else %}
            <input type=\"{{ type }}\" class=\"form-control\" id=\"form-{{ name }}\" name=\"{{ name }}\" placeholder=\"{{ placeholder }}\" value=\"{{ value }}\" />
        {% endif %}
    </div>
{% endmacro %}

{% macro flashMessage(messages, isPositive) %}
    <div class=\"alert alert-warning flash-message\">
        {% if isPositive %}
            <i class=\"fa fa-bolt\"></i>
        {% else %}
            <i class=\"fa fa-exclamation-triangle\"></i>
        {% endif %}

        {% for message in messages %}
            {{ message }}
        {% endfor %}
    </div>
{% endmacro %}", "_macros.twig", "/home/jaca/Workspace/Symfony/KNP/RestApi_2/RestApi_sf3/app/Resources/views/_macros.twig");
    }
}
