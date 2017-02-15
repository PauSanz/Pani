<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8194a599aa93377ae64ff891f5b4c375ec6e24ab0764360bbd25b21e80490061 extends Twig_Template
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
        $__internal_9def5cc39e6ff8b9fda23f613c1cd9af1f720e125fd9c1c1c4412930f54ae936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9def5cc39e6ff8b9fda23f613c1cd9af1f720e125fd9c1c1c4412930f54ae936->enter($__internal_9def5cc39e6ff8b9fda23f613c1cd9af1f720e125fd9c1c1c4412930f54ae936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_4eeb9f4e6b6007c183e99b95bbad98bb2e4006bf5d8f43ec7c95d393f913b809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eeb9f4e6b6007c183e99b95bbad98bb2e4006bf5d8f43ec7c95d393f913b809->enter($__internal_4eeb9f4e6b6007c183e99b95bbad98bb2e4006bf5d8f43ec7c95d393f913b809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9def5cc39e6ff8b9fda23f613c1cd9af1f720e125fd9c1c1c4412930f54ae936->leave($__internal_9def5cc39e6ff8b9fda23f613c1cd9af1f720e125fd9c1c1c4412930f54ae936_prof);

        
        $__internal_4eeb9f4e6b6007c183e99b95bbad98bb2e4006bf5d8f43ec7c95d393f913b809->leave($__internal_4eeb9f4e6b6007c183e99b95bbad98bb2e4006bf5d8f43ec7c95d393f913b809_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
