<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4931b092f408a251789e2546d162e4ea5ce94bf5b939888fd4ea9be4cd915e57 extends Twig_Template
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
        $__internal_010276ccbd03d699fd65917dcbe04960bf0c84c84f023bd80fc0c59405d042bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010276ccbd03d699fd65917dcbe04960bf0c84c84f023bd80fc0c59405d042bd->enter($__internal_010276ccbd03d699fd65917dcbe04960bf0c84c84f023bd80fc0c59405d042bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c192f4147677d54c9d6c23173d526b4e5a4d91d18cdf6411e178113a297912c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c192f4147677d54c9d6c23173d526b4e5a4d91d18cdf6411e178113a297912c6->enter($__internal_c192f4147677d54c9d6c23173d526b4e5a4d91d18cdf6411e178113a297912c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_010276ccbd03d699fd65917dcbe04960bf0c84c84f023bd80fc0c59405d042bd->leave($__internal_010276ccbd03d699fd65917dcbe04960bf0c84c84f023bd80fc0c59405d042bd_prof);

        
        $__internal_c192f4147677d54c9d6c23173d526b4e5a4d91d18cdf6411e178113a297912c6->leave($__internal_c192f4147677d54c9d6c23173d526b4e5a4d91d18cdf6411e178113a297912c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
