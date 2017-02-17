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
        $__internal_cb54a97d30c9345c0344bf2fff4b63ad3ad6e8c1ab046d1bea9d62f5598a292f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb54a97d30c9345c0344bf2fff4b63ad3ad6e8c1ab046d1bea9d62f5598a292f->enter($__internal_cb54a97d30c9345c0344bf2fff4b63ad3ad6e8c1ab046d1bea9d62f5598a292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2697f3481f450d9433f41e2f23a10c130c76d409a1910cc28ab126d8c97d82c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2697f3481f450d9433f41e2f23a10c130c76d409a1910cc28ab126d8c97d82c5->enter($__internal_2697f3481f450d9433f41e2f23a10c130c76d409a1910cc28ab126d8c97d82c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb54a97d30c9345c0344bf2fff4b63ad3ad6e8c1ab046d1bea9d62f5598a292f->leave($__internal_cb54a97d30c9345c0344bf2fff4b63ad3ad6e8c1ab046d1bea9d62f5598a292f_prof);

        
        $__internal_2697f3481f450d9433f41e2f23a10c130c76d409a1910cc28ab126d8c97d82c5->leave($__internal_2697f3481f450d9433f41e2f23a10c130c76d409a1910cc28ab126d8c97d82c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9882cbe00e2bff396aad9369ad4f33627932eda688c2cdc696e76afaa51c227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9882cbe00e2bff396aad9369ad4f33627932eda688c2cdc696e76afaa51c227->enter($__internal_c9882cbe00e2bff396aad9369ad4f33627932eda688c2cdc696e76afaa51c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4170ed28b2643bc37a5dd3f29aaba808118d0b39d9b48b70f1d91ce6a5f11f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4170ed28b2643bc37a5dd3f29aaba808118d0b39d9b48b70f1d91ce6a5f11f5d->enter($__internal_4170ed28b2643bc37a5dd3f29aaba808118d0b39d9b48b70f1d91ce6a5f11f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4170ed28b2643bc37a5dd3f29aaba808118d0b39d9b48b70f1d91ce6a5f11f5d->leave($__internal_4170ed28b2643bc37a5dd3f29aaba808118d0b39d9b48b70f1d91ce6a5f11f5d_prof);

        
        $__internal_c9882cbe00e2bff396aad9369ad4f33627932eda688c2cdc696e76afaa51c227->leave($__internal_c9882cbe00e2bff396aad9369ad4f33627932eda688c2cdc696e76afaa51c227_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f196418754f16490e42fe18dab18b30db1a8c99612761c220f5ca124456f0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f196418754f16490e42fe18dab18b30db1a8c99612761c220f5ca124456f0e3->enter($__internal_7f196418754f16490e42fe18dab18b30db1a8c99612761c220f5ca124456f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1527588801e6cbd71a6694f9aa2413af3fe8ebd56c8681c826b42539e060efb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1527588801e6cbd71a6694f9aa2413af3fe8ebd56c8681c826b42539e060efb1->enter($__internal_1527588801e6cbd71a6694f9aa2413af3fe8ebd56c8681c826b42539e060efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1527588801e6cbd71a6694f9aa2413af3fe8ebd56c8681c826b42539e060efb1->leave($__internal_1527588801e6cbd71a6694f9aa2413af3fe8ebd56c8681c826b42539e060efb1_prof);

        
        $__internal_7f196418754f16490e42fe18dab18b30db1a8c99612761c220f5ca124456f0e3->leave($__internal_7f196418754f16490e42fe18dab18b30db1a8c99612761c220f5ca124456f0e3_prof);

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
