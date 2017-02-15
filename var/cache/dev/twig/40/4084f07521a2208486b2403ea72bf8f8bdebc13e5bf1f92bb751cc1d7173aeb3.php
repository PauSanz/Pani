<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4605bf05efe8f32a08493f79fd99b767097142122862dfe55af220441a895efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_cbfea13a26993e4a455fc632516dba886f523aebf5a2cc9070232cdf4f8376a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfea13a26993e4a455fc632516dba886f523aebf5a2cc9070232cdf4f8376a9->enter($__internal_cbfea13a26993e4a455fc632516dba886f523aebf5a2cc9070232cdf4f8376a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1f78893a4005b04f22c2b0bec55f630b008dd9256bd348efc6e3d511f33b2df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f78893a4005b04f22c2b0bec55f630b008dd9256bd348efc6e3d511f33b2df1->enter($__internal_1f78893a4005b04f22c2b0bec55f630b008dd9256bd348efc6e3d511f33b2df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfea13a26993e4a455fc632516dba886f523aebf5a2cc9070232cdf4f8376a9->leave($__internal_cbfea13a26993e4a455fc632516dba886f523aebf5a2cc9070232cdf4f8376a9_prof);

        
        $__internal_1f78893a4005b04f22c2b0bec55f630b008dd9256bd348efc6e3d511f33b2df1->leave($__internal_1f78893a4005b04f22c2b0bec55f630b008dd9256bd348efc6e3d511f33b2df1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed6fc776a5ff83aeed05d8f94b32d44a10743d59ee600a86d0008a2d3f06b348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6fc776a5ff83aeed05d8f94b32d44a10743d59ee600a86d0008a2d3f06b348->enter($__internal_ed6fc776a5ff83aeed05d8f94b32d44a10743d59ee600a86d0008a2d3f06b348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa473520a876ddb09240e0f1958800d596728ef52582ec7e516772b6ceefda08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa473520a876ddb09240e0f1958800d596728ef52582ec7e516772b6ceefda08->enter($__internal_fa473520a876ddb09240e0f1958800d596728ef52582ec7e516772b6ceefda08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa473520a876ddb09240e0f1958800d596728ef52582ec7e516772b6ceefda08->leave($__internal_fa473520a876ddb09240e0f1958800d596728ef52582ec7e516772b6ceefda08_prof);

        
        $__internal_ed6fc776a5ff83aeed05d8f94b32d44a10743d59ee600a86d0008a2d3f06b348->leave($__internal_ed6fc776a5ff83aeed05d8f94b32d44a10743d59ee600a86d0008a2d3f06b348_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cddd451e4a161ab796d3483a349ad3da5bb0d44e95b594ca933d77ecc3245c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddd451e4a161ab796d3483a349ad3da5bb0d44e95b594ca933d77ecc3245c84->enter($__internal_cddd451e4a161ab796d3483a349ad3da5bb0d44e95b594ca933d77ecc3245c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea69dc75f0617fd352eaa58517f3a3e1529005aa42c3d41033ed940c1b8d888e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea69dc75f0617fd352eaa58517f3a3e1529005aa42c3d41033ed940c1b8d888e->enter($__internal_ea69dc75f0617fd352eaa58517f3a3e1529005aa42c3d41033ed940c1b8d888e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_ea69dc75f0617fd352eaa58517f3a3e1529005aa42c3d41033ed940c1b8d888e->leave($__internal_ea69dc75f0617fd352eaa58517f3a3e1529005aa42c3d41033ed940c1b8d888e_prof);

        
        $__internal_cddd451e4a161ab796d3483a349ad3da5bb0d44e95b594ca933d77ecc3245c84->leave($__internal_cddd451e4a161ab796d3483a349ad3da5bb0d44e95b594ca933d77ecc3245c84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
