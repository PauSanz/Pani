<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_889940a131771f41338e478c4e6f61faa39fb1be43e520bb2b6cf886595092a8 extends Twig_Template
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
        $__internal_5a94f52bba39e26fd189b0262bed10c56135309d0f5744d900cabb26bd7f0163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a94f52bba39e26fd189b0262bed10c56135309d0f5744d900cabb26bd7f0163->enter($__internal_5a94f52bba39e26fd189b0262bed10c56135309d0f5744d900cabb26bd7f0163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_cb5f91f312371da6ac7ddc9375be1878dcf58df05367127e689fc58d693dfd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5f91f312371da6ac7ddc9375be1878dcf58df05367127e689fc58d693dfd74->enter($__internal_cb5f91f312371da6ac7ddc9375be1878dcf58df05367127e689fc58d693dfd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5a94f52bba39e26fd189b0262bed10c56135309d0f5744d900cabb26bd7f0163->leave($__internal_5a94f52bba39e26fd189b0262bed10c56135309d0f5744d900cabb26bd7f0163_prof);

        
        $__internal_cb5f91f312371da6ac7ddc9375be1878dcf58df05367127e689fc58d693dfd74->leave($__internal_cb5f91f312371da6ac7ddc9375be1878dcf58df05367127e689fc58d693dfd74_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
