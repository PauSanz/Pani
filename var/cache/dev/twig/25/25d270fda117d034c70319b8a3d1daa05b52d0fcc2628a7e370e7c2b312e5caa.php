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
        $__internal_72b29875ced7410192b5c93311255e7acebc60825eb0aee616f53c2bd50fbd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b29875ced7410192b5c93311255e7acebc60825eb0aee616f53c2bd50fbd18->enter($__internal_72b29875ced7410192b5c93311255e7acebc60825eb0aee616f53c2bd50fbd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6ec8f440e3295fd2a4d1660a235f895b29cd0353b079f958744eefc78c479542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec8f440e3295fd2a4d1660a235f895b29cd0353b079f958744eefc78c479542->enter($__internal_6ec8f440e3295fd2a4d1660a235f895b29cd0353b079f958744eefc78c479542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_72b29875ced7410192b5c93311255e7acebc60825eb0aee616f53c2bd50fbd18->leave($__internal_72b29875ced7410192b5c93311255e7acebc60825eb0aee616f53c2bd50fbd18_prof);

        
        $__internal_6ec8f440e3295fd2a4d1660a235f895b29cd0353b079f958744eefc78c479542->leave($__internal_6ec8f440e3295fd2a4d1660a235f895b29cd0353b079f958744eefc78c479542_prof);

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
