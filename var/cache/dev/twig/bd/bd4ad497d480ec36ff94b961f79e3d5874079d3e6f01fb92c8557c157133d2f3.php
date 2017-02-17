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
        $__internal_6a2ba7356cc1177208ce222dca8cf6b20e42f02a5d486c9ac02881f1b3a6c578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2ba7356cc1177208ce222dca8cf6b20e42f02a5d486c9ac02881f1b3a6c578->enter($__internal_6a2ba7356cc1177208ce222dca8cf6b20e42f02a5d486c9ac02881f1b3a6c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1ff6440fd2bb44082d0c01e224cc43b50eaf373caaf48ba8a6e454d88b237265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff6440fd2bb44082d0c01e224cc43b50eaf373caaf48ba8a6e454d88b237265->enter($__internal_1ff6440fd2bb44082d0c01e224cc43b50eaf373caaf48ba8a6e454d88b237265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6a2ba7356cc1177208ce222dca8cf6b20e42f02a5d486c9ac02881f1b3a6c578->leave($__internal_6a2ba7356cc1177208ce222dca8cf6b20e42f02a5d486c9ac02881f1b3a6c578_prof);

        
        $__internal_1ff6440fd2bb44082d0c01e224cc43b50eaf373caaf48ba8a6e454d88b237265->leave($__internal_1ff6440fd2bb44082d0c01e224cc43b50eaf373caaf48ba8a6e454d88b237265_prof);

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
