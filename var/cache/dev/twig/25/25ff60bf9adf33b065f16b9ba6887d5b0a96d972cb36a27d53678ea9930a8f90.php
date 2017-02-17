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
        $__internal_17253fffcfbc87c1e9f1a8367ee2b31a256e77ba06de21b06b429d33bc812902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17253fffcfbc87c1e9f1a8367ee2b31a256e77ba06de21b06b429d33bc812902->enter($__internal_17253fffcfbc87c1e9f1a8367ee2b31a256e77ba06de21b06b429d33bc812902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b2b9bd9d1b9f6f1d51584b2c2cc1095ea5a34ccf88d8f3e83eb992a4a247c265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b9bd9d1b9f6f1d51584b2c2cc1095ea5a34ccf88d8f3e83eb992a4a247c265->enter($__internal_b2b9bd9d1b9f6f1d51584b2c2cc1095ea5a34ccf88d8f3e83eb992a4a247c265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17253fffcfbc87c1e9f1a8367ee2b31a256e77ba06de21b06b429d33bc812902->leave($__internal_17253fffcfbc87c1e9f1a8367ee2b31a256e77ba06de21b06b429d33bc812902_prof);

        
        $__internal_b2b9bd9d1b9f6f1d51584b2c2cc1095ea5a34ccf88d8f3e83eb992a4a247c265->leave($__internal_b2b9bd9d1b9f6f1d51584b2c2cc1095ea5a34ccf88d8f3e83eb992a4a247c265_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_865f5d9d9d9f0a5ffb7085dadc56d63bb5b1ca89bed11411c9873a2f7ca71369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865f5d9d9d9f0a5ffb7085dadc56d63bb5b1ca89bed11411c9873a2f7ca71369->enter($__internal_865f5d9d9d9f0a5ffb7085dadc56d63bb5b1ca89bed11411c9873a2f7ca71369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ef22cd984bc72587ba850c9152e93c4ef8e07a1a1e39573dda6989ac9a244d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef22cd984bc72587ba850c9152e93c4ef8e07a1a1e39573dda6989ac9a244d1->enter($__internal_0ef22cd984bc72587ba850c9152e93c4ef8e07a1a1e39573dda6989ac9a244d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0ef22cd984bc72587ba850c9152e93c4ef8e07a1a1e39573dda6989ac9a244d1->leave($__internal_0ef22cd984bc72587ba850c9152e93c4ef8e07a1a1e39573dda6989ac9a244d1_prof);

        
        $__internal_865f5d9d9d9f0a5ffb7085dadc56d63bb5b1ca89bed11411c9873a2f7ca71369->leave($__internal_865f5d9d9d9f0a5ffb7085dadc56d63bb5b1ca89bed11411c9873a2f7ca71369_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_304c55fde9d0e99ebf8197b97668715b785782b7633a9d7088e570335e0fa96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304c55fde9d0e99ebf8197b97668715b785782b7633a9d7088e570335e0fa96d->enter($__internal_304c55fde9d0e99ebf8197b97668715b785782b7633a9d7088e570335e0fa96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38c0e8bddd9839c40719ea46afeb6180a53737764af17a1b7ffbdc5824040f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c0e8bddd9839c40719ea46afeb6180a53737764af17a1b7ffbdc5824040f1e->enter($__internal_38c0e8bddd9839c40719ea46afeb6180a53737764af17a1b7ffbdc5824040f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38c0e8bddd9839c40719ea46afeb6180a53737764af17a1b7ffbdc5824040f1e->leave($__internal_38c0e8bddd9839c40719ea46afeb6180a53737764af17a1b7ffbdc5824040f1e_prof);

        
        $__internal_304c55fde9d0e99ebf8197b97668715b785782b7633a9d7088e570335e0fa96d->leave($__internal_304c55fde9d0e99ebf8197b97668715b785782b7633a9d7088e570335e0fa96d_prof);

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
