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
        $__internal_8727fe39c781ee1e6a38e59904c643d3cbf71ba3300c8738e0ee7e4be9697bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8727fe39c781ee1e6a38e59904c643d3cbf71ba3300c8738e0ee7e4be9697bba->enter($__internal_8727fe39c781ee1e6a38e59904c643d3cbf71ba3300c8738e0ee7e4be9697bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_09e41c6fb809364abd2957cf681e7a854791320e099bf0f537175511fb09fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e41c6fb809364abd2957cf681e7a854791320e099bf0f537175511fb09fdfb->enter($__internal_09e41c6fb809364abd2957cf681e7a854791320e099bf0f537175511fb09fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8727fe39c781ee1e6a38e59904c643d3cbf71ba3300c8738e0ee7e4be9697bba->leave($__internal_8727fe39c781ee1e6a38e59904c643d3cbf71ba3300c8738e0ee7e4be9697bba_prof);

        
        $__internal_09e41c6fb809364abd2957cf681e7a854791320e099bf0f537175511fb09fdfb->leave($__internal_09e41c6fb809364abd2957cf681e7a854791320e099bf0f537175511fb09fdfb_prof);

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
