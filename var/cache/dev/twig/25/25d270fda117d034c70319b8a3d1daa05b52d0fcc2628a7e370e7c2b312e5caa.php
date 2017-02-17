<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48d9a140dbdd2a82d0f0f3384bf26717bb6c632e5405846ff3c606e797f62e52 extends Twig_Template
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
        $__internal_2e48c7de355d620f4bae3248a6e6bf7ad104e52cc0d3e93b75dce208d52a23ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e48c7de355d620f4bae3248a6e6bf7ad104e52cc0d3e93b75dce208d52a23ac->enter($__internal_2e48c7de355d620f4bae3248a6e6bf7ad104e52cc0d3e93b75dce208d52a23ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_862d06b74288c03c6f84bbbfc2a5ac082f18419a8788f82fa4c2594fce8ce142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862d06b74288c03c6f84bbbfc2a5ac082f18419a8788f82fa4c2594fce8ce142->enter($__internal_862d06b74288c03c6f84bbbfc2a5ac082f18419a8788f82fa4c2594fce8ce142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2e48c7de355d620f4bae3248a6e6bf7ad104e52cc0d3e93b75dce208d52a23ac->leave($__internal_2e48c7de355d620f4bae3248a6e6bf7ad104e52cc0d3e93b75dce208d52a23ac_prof);

        
        $__internal_862d06b74288c03c6f84bbbfc2a5ac082f18419a8788f82fa4c2594fce8ce142->leave($__internal_862d06b74288c03c6f84bbbfc2a5ac082f18419a8788f82fa4c2594fce8ce142_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
