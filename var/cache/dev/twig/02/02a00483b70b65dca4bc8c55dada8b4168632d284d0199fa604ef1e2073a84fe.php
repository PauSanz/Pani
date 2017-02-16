<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e7540d81a0e2a51f719f2be6c96bcbe60caad8cc1a0ee074d0b04f979bd7d8cb extends Twig_Template
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
        $__internal_a0ae090611de160bec3d593fb6a5ee6b048a677febd5ce2bbb02eced7c86da79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ae090611de160bec3d593fb6a5ee6b048a677febd5ce2bbb02eced7c86da79->enter($__internal_a0ae090611de160bec3d593fb6a5ee6b048a677febd5ce2bbb02eced7c86da79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2b79d50c0936382596c209833dcd30143deb4456fab917b33e86d1bbd345c0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b79d50c0936382596c209833dcd30143deb4456fab917b33e86d1bbd345c0a0->enter($__internal_2b79d50c0936382596c209833dcd30143deb4456fab917b33e86d1bbd345c0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a0ae090611de160bec3d593fb6a5ee6b048a677febd5ce2bbb02eced7c86da79->leave($__internal_a0ae090611de160bec3d593fb6a5ee6b048a677febd5ce2bbb02eced7c86da79_prof);

        
        $__internal_2b79d50c0936382596c209833dcd30143deb4456fab917b33e86d1bbd345c0a0->leave($__internal_2b79d50c0936382596c209833dcd30143deb4456fab917b33e86d1bbd345c0a0_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
