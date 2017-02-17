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
        $__internal_2e4647624da99d0bdd4e9c96a4c3b7f8ef0d85876ad5ccecf209989be03c3234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4647624da99d0bdd4e9c96a4c3b7f8ef0d85876ad5ccecf209989be03c3234->enter($__internal_2e4647624da99d0bdd4e9c96a4c3b7f8ef0d85876ad5ccecf209989be03c3234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_23cc7ea7da23aadbc9e58179970e006c6990c0e8aa99a73ef7c10c88682187a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cc7ea7da23aadbc9e58179970e006c6990c0e8aa99a73ef7c10c88682187a0->enter($__internal_23cc7ea7da23aadbc9e58179970e006c6990c0e8aa99a73ef7c10c88682187a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4647624da99d0bdd4e9c96a4c3b7f8ef0d85876ad5ccecf209989be03c3234->leave($__internal_2e4647624da99d0bdd4e9c96a4c3b7f8ef0d85876ad5ccecf209989be03c3234_prof);

        
        $__internal_23cc7ea7da23aadbc9e58179970e006c6990c0e8aa99a73ef7c10c88682187a0->leave($__internal_23cc7ea7da23aadbc9e58179970e006c6990c0e8aa99a73ef7c10c88682187a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec6be304e22604be2f320a690b0e75cc02a377b7fa64e29dec77b0159c8462ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6be304e22604be2f320a690b0e75cc02a377b7fa64e29dec77b0159c8462ac->enter($__internal_ec6be304e22604be2f320a690b0e75cc02a377b7fa64e29dec77b0159c8462ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b45b952feb68a64f9d5d783bc54a54faac04a5bf7d608fe206497dc8940b5724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45b952feb68a64f9d5d783bc54a54faac04a5bf7d608fe206497dc8940b5724->enter($__internal_b45b952feb68a64f9d5d783bc54a54faac04a5bf7d608fe206497dc8940b5724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b45b952feb68a64f9d5d783bc54a54faac04a5bf7d608fe206497dc8940b5724->leave($__internal_b45b952feb68a64f9d5d783bc54a54faac04a5bf7d608fe206497dc8940b5724_prof);

        
        $__internal_ec6be304e22604be2f320a690b0e75cc02a377b7fa64e29dec77b0159c8462ac->leave($__internal_ec6be304e22604be2f320a690b0e75cc02a377b7fa64e29dec77b0159c8462ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01fb364ba48bf4f68897f13bac48d01af25d28c13ff0e5a463a732d42d692002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fb364ba48bf4f68897f13bac48d01af25d28c13ff0e5a463a732d42d692002->enter($__internal_01fb364ba48bf4f68897f13bac48d01af25d28c13ff0e5a463a732d42d692002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbcb62b3b69eead0581a5b6935af96aea765abe746164a28a5711d2c40d547af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcb62b3b69eead0581a5b6935af96aea765abe746164a28a5711d2c40d547af->enter($__internal_dbcb62b3b69eead0581a5b6935af96aea765abe746164a28a5711d2c40d547af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbcb62b3b69eead0581a5b6935af96aea765abe746164a28a5711d2c40d547af->leave($__internal_dbcb62b3b69eead0581a5b6935af96aea765abe746164a28a5711d2c40d547af_prof);

        
        $__internal_01fb364ba48bf4f68897f13bac48d01af25d28c13ff0e5a463a732d42d692002->leave($__internal_01fb364ba48bf4f68897f13bac48d01af25d28c13ff0e5a463a732d42d692002_prof);

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
