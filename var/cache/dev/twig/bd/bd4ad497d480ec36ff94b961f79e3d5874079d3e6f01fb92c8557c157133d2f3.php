<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bba644c250feb8fb328919e8985ef1a90e4a5e9714a9d826e71df8c21de31ab9 extends Twig_Template
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
        $__internal_64d9782c4671766265a9737cc998ba6e5429eda6f65c5c36ea633ddbe3156d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d9782c4671766265a9737cc998ba6e5429eda6f65c5c36ea633ddbe3156d36->enter($__internal_64d9782c4671766265a9737cc998ba6e5429eda6f65c5c36ea633ddbe3156d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d28e95c678a9ac0b51aa656b01f477867789d5b851e051932db09e1f56fda533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28e95c678a9ac0b51aa656b01f477867789d5b851e051932db09e1f56fda533->enter($__internal_d28e95c678a9ac0b51aa656b01f477867789d5b851e051932db09e1f56fda533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_64d9782c4671766265a9737cc998ba6e5429eda6f65c5c36ea633ddbe3156d36->leave($__internal_64d9782c4671766265a9737cc998ba6e5429eda6f65c5c36ea633ddbe3156d36_prof);

        
        $__internal_d28e95c678a9ac0b51aa656b01f477867789d5b851e051932db09e1f56fda533->leave($__internal_d28e95c678a9ac0b51aa656b01f477867789d5b851e051932db09e1f56fda533_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
