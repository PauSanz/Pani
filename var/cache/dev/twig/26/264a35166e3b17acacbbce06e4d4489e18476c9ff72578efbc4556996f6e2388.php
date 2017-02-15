<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3f48c6c940bb8f0567bcfd028bd31985df1c656c600e5b12ac11d792101de412 extends Twig_Template
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
        $__internal_fa17144c4edf8a71387b0cea9ea92e0137ed7b3c6d04a01529d23b50b97af918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa17144c4edf8a71387b0cea9ea92e0137ed7b3c6d04a01529d23b50b97af918->enter($__internal_fa17144c4edf8a71387b0cea9ea92e0137ed7b3c6d04a01529d23b50b97af918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6c75d15bd66a3d277b032960ebb3ad47ff1fa45523b7d95f0565d92e5b253ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c75d15bd66a3d277b032960ebb3ad47ff1fa45523b7d95f0565d92e5b253ab5->enter($__internal_6c75d15bd66a3d277b032960ebb3ad47ff1fa45523b7d95f0565d92e5b253ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_fa17144c4edf8a71387b0cea9ea92e0137ed7b3c6d04a01529d23b50b97af918->leave($__internal_fa17144c4edf8a71387b0cea9ea92e0137ed7b3c6d04a01529d23b50b97af918_prof);

        
        $__internal_6c75d15bd66a3d277b032960ebb3ad47ff1fa45523b7d95f0565d92e5b253ab5->leave($__internal_6c75d15bd66a3d277b032960ebb3ad47ff1fa45523b7d95f0565d92e5b253ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
