<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5aa29c1fe51ae25357839f6e8b20104a32a26b903c4c00d324997060cbad9ff6 extends Twig_Template
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
        $__internal_d36d034f9e4ae1c531574c86530612a10f5fe8d72a1c3265a74caf6396d5aa53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36d034f9e4ae1c531574c86530612a10f5fe8d72a1c3265a74caf6396d5aa53->enter($__internal_d36d034f9e4ae1c531574c86530612a10f5fe8d72a1c3265a74caf6396d5aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f2964d9c0a8d31bf5316dcc1c83e0901332ccea9480b433845d1ee4c2009fe42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2964d9c0a8d31bf5316dcc1c83e0901332ccea9480b433845d1ee4c2009fe42->enter($__internal_f2964d9c0a8d31bf5316dcc1c83e0901332ccea9480b433845d1ee4c2009fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d36d034f9e4ae1c531574c86530612a10f5fe8d72a1c3265a74caf6396d5aa53->leave($__internal_d36d034f9e4ae1c531574c86530612a10f5fe8d72a1c3265a74caf6396d5aa53_prof);

        
        $__internal_f2964d9c0a8d31bf5316dcc1c83e0901332ccea9480b433845d1ee4c2009fe42->leave($__internal_f2964d9c0a8d31bf5316dcc1c83e0901332ccea9480b433845d1ee4c2009fe42_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
