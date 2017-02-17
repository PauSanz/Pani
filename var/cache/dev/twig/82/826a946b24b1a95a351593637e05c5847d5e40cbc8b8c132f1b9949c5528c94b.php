<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0848ea48b99295e47a9f6c24c38a7898512be2ad0ddcdf3b0d827acc7c55d453 extends Twig_Template
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
        $__internal_7b118437997a75871be3ce3c2e6482ed47ecece1f0d97396284b868bff1194bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b118437997a75871be3ce3c2e6482ed47ecece1f0d97396284b868bff1194bc->enter($__internal_7b118437997a75871be3ce3c2e6482ed47ecece1f0d97396284b868bff1194bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_6b1426c7684e83aa72117c75449fe76c0623d3dccc99e3b7f8cc0fc079cfdcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1426c7684e83aa72117c75449fe76c0623d3dccc99e3b7f8cc0fc079cfdcee->enter($__internal_6b1426c7684e83aa72117c75449fe76c0623d3dccc99e3b7f8cc0fc079cfdcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7b118437997a75871be3ce3c2e6482ed47ecece1f0d97396284b868bff1194bc->leave($__internal_7b118437997a75871be3ce3c2e6482ed47ecece1f0d97396284b868bff1194bc_prof);

        
        $__internal_6b1426c7684e83aa72117c75449fe76c0623d3dccc99e3b7f8cc0fc079cfdcee->leave($__internal_6b1426c7684e83aa72117c75449fe76c0623d3dccc99e3b7f8cc0fc079cfdcee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
