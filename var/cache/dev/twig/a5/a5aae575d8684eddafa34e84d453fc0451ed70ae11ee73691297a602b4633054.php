<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8194a599aa93377ae64ff891f5b4c375ec6e24ab0764360bbd25b21e80490061 extends Twig_Template
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
        $__internal_74d1abd8b7636974ac0f2da1af152ffcab7046fbaa85126f77f39318f0e16846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d1abd8b7636974ac0f2da1af152ffcab7046fbaa85126f77f39318f0e16846->enter($__internal_74d1abd8b7636974ac0f2da1af152ffcab7046fbaa85126f77f39318f0e16846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ae8f6f0dcd01de9cd4a5705ed9e977b2524a1420fc101d8fd54fcf0acb4303b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8f6f0dcd01de9cd4a5705ed9e977b2524a1420fc101d8fd54fcf0acb4303b0->enter($__internal_ae8f6f0dcd01de9cd4a5705ed9e977b2524a1420fc101d8fd54fcf0acb4303b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_74d1abd8b7636974ac0f2da1af152ffcab7046fbaa85126f77f39318f0e16846->leave($__internal_74d1abd8b7636974ac0f2da1af152ffcab7046fbaa85126f77f39318f0e16846_prof);

        
        $__internal_ae8f6f0dcd01de9cd4a5705ed9e977b2524a1420fc101d8fd54fcf0acb4303b0->leave($__internal_ae8f6f0dcd01de9cd4a5705ed9e977b2524a1420fc101d8fd54fcf0acb4303b0_prof);

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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
