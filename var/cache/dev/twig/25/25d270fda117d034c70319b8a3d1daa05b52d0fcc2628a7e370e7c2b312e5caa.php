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
        $__internal_5c15bd07e175d78bb38e6ad6acf70da4d18cbc3d42ed246282d0cffcec13ee22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c15bd07e175d78bb38e6ad6acf70da4d18cbc3d42ed246282d0cffcec13ee22->enter($__internal_5c15bd07e175d78bb38e6ad6acf70da4d18cbc3d42ed246282d0cffcec13ee22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_64e35d8c223efb999847fc18390ea8cd9ba21bb8cd3ceee574199a028e822a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e35d8c223efb999847fc18390ea8cd9ba21bb8cd3ceee574199a028e822a25->enter($__internal_64e35d8c223efb999847fc18390ea8cd9ba21bb8cd3ceee574199a028e822a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5c15bd07e175d78bb38e6ad6acf70da4d18cbc3d42ed246282d0cffcec13ee22->leave($__internal_5c15bd07e175d78bb38e6ad6acf70da4d18cbc3d42ed246282d0cffcec13ee22_prof);

        
        $__internal_64e35d8c223efb999847fc18390ea8cd9ba21bb8cd3ceee574199a028e822a25->leave($__internal_64e35d8c223efb999847fc18390ea8cd9ba21bb8cd3ceee574199a028e822a25_prof);

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
