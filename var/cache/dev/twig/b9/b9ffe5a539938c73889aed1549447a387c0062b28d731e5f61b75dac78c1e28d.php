<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a75bb290bf59fc894ded48eaa95bfcf7c9f466cc9246310ce62cbac919f0eb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75bb290bf59fc894ded48eaa95bfcf7c9f466cc9246310ce62cbac919f0eb7e->enter($__internal_a75bb290bf59fc894ded48eaa95bfcf7c9f466cc9246310ce62cbac919f0eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c9855aa3d70193ca3c05d60d0dcef9447badb091d53e400040803f4e62f98c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9855aa3d70193ca3c05d60d0dcef9447badb091d53e400040803f4e62f98c32->enter($__internal_c9855aa3d70193ca3c05d60d0dcef9447badb091d53e400040803f4e62f98c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75bb290bf59fc894ded48eaa95bfcf7c9f466cc9246310ce62cbac919f0eb7e->leave($__internal_a75bb290bf59fc894ded48eaa95bfcf7c9f466cc9246310ce62cbac919f0eb7e_prof);

        
        $__internal_c9855aa3d70193ca3c05d60d0dcef9447badb091d53e400040803f4e62f98c32->leave($__internal_c9855aa3d70193ca3c05d60d0dcef9447badb091d53e400040803f4e62f98c32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9221701227bb263fbe80fd22c2fa8326c2613e73faf6c969bb57f237930ae3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9221701227bb263fbe80fd22c2fa8326c2613e73faf6c969bb57f237930ae3b->enter($__internal_d9221701227bb263fbe80fd22c2fa8326c2613e73faf6c969bb57f237930ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e55dbee79931bc22746c677ccd5c08f461d09368cef563da93c274e953a3f285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55dbee79931bc22746c677ccd5c08f461d09368cef563da93c274e953a3f285->enter($__internal_e55dbee79931bc22746c677ccd5c08f461d09368cef563da93c274e953a3f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e55dbee79931bc22746c677ccd5c08f461d09368cef563da93c274e953a3f285->leave($__internal_e55dbee79931bc22746c677ccd5c08f461d09368cef563da93c274e953a3f285_prof);

        
        $__internal_d9221701227bb263fbe80fd22c2fa8326c2613e73faf6c969bb57f237930ae3b->leave($__internal_d9221701227bb263fbe80fd22c2fa8326c2613e73faf6c969bb57f237930ae3b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f851600141273f4dc220ed16f3b543d6d2eb837fc498225c46a3c4d580c546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f851600141273f4dc220ed16f3b543d6d2eb837fc498225c46a3c4d580c546->enter($__internal_23f851600141273f4dc220ed16f3b543d6d2eb837fc498225c46a3c4d580c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83aeb3498185dad418ec11c0e5a2007e4b27d954c89f2bf4600823a84ba31992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aeb3498185dad418ec11c0e5a2007e4b27d954c89f2bf4600823a84ba31992->enter($__internal_83aeb3498185dad418ec11c0e5a2007e4b27d954c89f2bf4600823a84ba31992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_83aeb3498185dad418ec11c0e5a2007e4b27d954c89f2bf4600823a84ba31992->leave($__internal_83aeb3498185dad418ec11c0e5a2007e4b27d954c89f2bf4600823a84ba31992_prof);

        
        $__internal_23f851600141273f4dc220ed16f3b543d6d2eb837fc498225c46a3c4d580c546->leave($__internal_23f851600141273f4dc220ed16f3b543d6d2eb837fc498225c46a3c4d580c546_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
