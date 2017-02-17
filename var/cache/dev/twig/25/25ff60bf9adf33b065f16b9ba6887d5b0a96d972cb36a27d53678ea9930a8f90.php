<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd1dba4fb6a778294c47686bf80f695d13ccbf28ca5ac67a6f977fa42b51b2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_946fe083e009685dde2c988e8b79a31c0df1a5522383f0f9d457f092aa276200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946fe083e009685dde2c988e8b79a31c0df1a5522383f0f9d457f092aa276200->enter($__internal_946fe083e009685dde2c988e8b79a31c0df1a5522383f0f9d457f092aa276200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_417b4fd9a702c14edd57130a96ec972d892bfc26ab873310199dee3b92a106c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417b4fd9a702c14edd57130a96ec972d892bfc26ab873310199dee3b92a106c0->enter($__internal_417b4fd9a702c14edd57130a96ec972d892bfc26ab873310199dee3b92a106c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946fe083e009685dde2c988e8b79a31c0df1a5522383f0f9d457f092aa276200->leave($__internal_946fe083e009685dde2c988e8b79a31c0df1a5522383f0f9d457f092aa276200_prof);

        
        $__internal_417b4fd9a702c14edd57130a96ec972d892bfc26ab873310199dee3b92a106c0->leave($__internal_417b4fd9a702c14edd57130a96ec972d892bfc26ab873310199dee3b92a106c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbd99fb25748b589d05da2e59982d249ee9a9f18400f5093253f66e5168fcd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd99fb25748b589d05da2e59982d249ee9a9f18400f5093253f66e5168fcd7a->enter($__internal_cbd99fb25748b589d05da2e59982d249ee9a9f18400f5093253f66e5168fcd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fe52563f57c7f764d08d33cabcd2620655a3bad2cda502444910c2fe0651b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe52563f57c7f764d08d33cabcd2620655a3bad2cda502444910c2fe0651b02->enter($__internal_2fe52563f57c7f764d08d33cabcd2620655a3bad2cda502444910c2fe0651b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2fe52563f57c7f764d08d33cabcd2620655a3bad2cda502444910c2fe0651b02->leave($__internal_2fe52563f57c7f764d08d33cabcd2620655a3bad2cda502444910c2fe0651b02_prof);

        
        $__internal_cbd99fb25748b589d05da2e59982d249ee9a9f18400f5093253f66e5168fcd7a->leave($__internal_cbd99fb25748b589d05da2e59982d249ee9a9f18400f5093253f66e5168fcd7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_419e59136c289e5f4fac3f5eae585033bdd3ed8be7df8e7d9f292afc9b55bb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419e59136c289e5f4fac3f5eae585033bdd3ed8be7df8e7d9f292afc9b55bb74->enter($__internal_419e59136c289e5f4fac3f5eae585033bdd3ed8be7df8e7d9f292afc9b55bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3b5b5236a0e38c04ffb7e80dc8c8551e0c5fc933049ad0792b52626d97d4332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b5b5236a0e38c04ffb7e80dc8c8551e0c5fc933049ad0792b52626d97d4332->enter($__internal_a3b5b5236a0e38c04ffb7e80dc8c8551e0c5fc933049ad0792b52626d97d4332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a3b5b5236a0e38c04ffb7e80dc8c8551e0c5fc933049ad0792b52626d97d4332->leave($__internal_a3b5b5236a0e38c04ffb7e80dc8c8551e0c5fc933049ad0792b52626d97d4332_prof);

        
        $__internal_419e59136c289e5f4fac3f5eae585033bdd3ed8be7df8e7d9f292afc9b55bb74->leave($__internal_419e59136c289e5f4fac3f5eae585033bdd3ed8be7df8e7d9f292afc9b55bb74_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
