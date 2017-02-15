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
        $__internal_cd98e5a23eab8ed02af8d2332c8db3f7ea9d7f83bfb36f53fbd5d0278f191027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd98e5a23eab8ed02af8d2332c8db3f7ea9d7f83bfb36f53fbd5d0278f191027->enter($__internal_cd98e5a23eab8ed02af8d2332c8db3f7ea9d7f83bfb36f53fbd5d0278f191027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_914e04d4eb2b86f748e23cd2d4a2e7597fca6faf7846a1094aeeaafe60fe0533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914e04d4eb2b86f748e23cd2d4a2e7597fca6faf7846a1094aeeaafe60fe0533->enter($__internal_914e04d4eb2b86f748e23cd2d4a2e7597fca6faf7846a1094aeeaafe60fe0533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_cd98e5a23eab8ed02af8d2332c8db3f7ea9d7f83bfb36f53fbd5d0278f191027->leave($__internal_cd98e5a23eab8ed02af8d2332c8db3f7ea9d7f83bfb36f53fbd5d0278f191027_prof);

        
        $__internal_914e04d4eb2b86f748e23cd2d4a2e7597fca6faf7846a1094aeeaafe60fe0533->leave($__internal_914e04d4eb2b86f748e23cd2d4a2e7597fca6faf7846a1094aeeaafe60fe0533_prof);

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
