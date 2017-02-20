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
        $__internal_2a4bc8547d1f99861c03d8299680f3975ffd17571dc735197be65c175bea36ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4bc8547d1f99861c03d8299680f3975ffd17571dc735197be65c175bea36ae->enter($__internal_2a4bc8547d1f99861c03d8299680f3975ffd17571dc735197be65c175bea36ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b712cbd668f1a5e4645bce28dc3fa5b847d9dd586dcf8be9e33a772e132d9f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b712cbd668f1a5e4645bce28dc3fa5b847d9dd586dcf8be9e33a772e132d9f16->enter($__internal_b712cbd668f1a5e4645bce28dc3fa5b847d9dd586dcf8be9e33a772e132d9f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2a4bc8547d1f99861c03d8299680f3975ffd17571dc735197be65c175bea36ae->leave($__internal_2a4bc8547d1f99861c03d8299680f3975ffd17571dc735197be65c175bea36ae_prof);

        
        $__internal_b712cbd668f1a5e4645bce28dc3fa5b847d9dd586dcf8be9e33a772e132d9f16->leave($__internal_b712cbd668f1a5e4645bce28dc3fa5b847d9dd586dcf8be9e33a772e132d9f16_prof);

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
