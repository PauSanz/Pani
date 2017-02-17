<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0c0667108b7526b278f58daca20e3415e962b60926beb668d392a86ebfb5b787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad23c0605fb4f31149097ce2be5cc8b010a382a915556c29102e9cfefe921748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad23c0605fb4f31149097ce2be5cc8b010a382a915556c29102e9cfefe921748->enter($__internal_ad23c0605fb4f31149097ce2be5cc8b010a382a915556c29102e9cfefe921748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f561cb255e9140535b1eddbb469b99fbca6a99744b0d3b8e433a2e605a9cc644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f561cb255e9140535b1eddbb469b99fbca6a99744b0d3b8e433a2e605a9cc644->enter($__internal_f561cb255e9140535b1eddbb469b99fbca6a99744b0d3b8e433a2e605a9cc644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ad23c0605fb4f31149097ce2be5cc8b010a382a915556c29102e9cfefe921748->leave($__internal_ad23c0605fb4f31149097ce2be5cc8b010a382a915556c29102e9cfefe921748_prof);

        
        $__internal_f561cb255e9140535b1eddbb469b99fbca6a99744b0d3b8e433a2e605a9cc644->leave($__internal_f561cb255e9140535b1eddbb469b99fbca6a99744b0d3b8e433a2e605a9cc644_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
