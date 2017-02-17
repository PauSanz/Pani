<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_057478bdcf90d85b8ea886c8d9f2b01914788a473d36bee6b30bb02cdcf387ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_11316bb156ef78d8257264d2251afff1bb1546db353171e0c68988baabb9489b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11316bb156ef78d8257264d2251afff1bb1546db353171e0c68988baabb9489b->enter($__internal_11316bb156ef78d8257264d2251afff1bb1546db353171e0c68988baabb9489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e6b32993fefc05640f364b9231e8ce4dc61a875b4b79aefed86cba5f16f8cb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b32993fefc05640f364b9231e8ce4dc61a875b4b79aefed86cba5f16f8cb60->enter($__internal_e6b32993fefc05640f364b9231e8ce4dc61a875b4b79aefed86cba5f16f8cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11316bb156ef78d8257264d2251afff1bb1546db353171e0c68988baabb9489b->leave($__internal_11316bb156ef78d8257264d2251afff1bb1546db353171e0c68988baabb9489b_prof);

        
        $__internal_e6b32993fefc05640f364b9231e8ce4dc61a875b4b79aefed86cba5f16f8cb60->leave($__internal_e6b32993fefc05640f364b9231e8ce4dc61a875b4b79aefed86cba5f16f8cb60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c496e692b82aaf6975e87519a2e6031f49648d3c09b70bb901372c82632fbbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c496e692b82aaf6975e87519a2e6031f49648d3c09b70bb901372c82632fbbe9->enter($__internal_c496e692b82aaf6975e87519a2e6031f49648d3c09b70bb901372c82632fbbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b7f991ccdd6b16ec1404618f904a58bae07351a0264a81e5fb5072ef3facc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7f991ccdd6b16ec1404618f904a58bae07351a0264a81e5fb5072ef3facc5b->enter($__internal_0b7f991ccdd6b16ec1404618f904a58bae07351a0264a81e5fb5072ef3facc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0b7f991ccdd6b16ec1404618f904a58bae07351a0264a81e5fb5072ef3facc5b->leave($__internal_0b7f991ccdd6b16ec1404618f904a58bae07351a0264a81e5fb5072ef3facc5b_prof);

        
        $__internal_c496e692b82aaf6975e87519a2e6031f49648d3c09b70bb901372c82632fbbe9->leave($__internal_c496e692b82aaf6975e87519a2e6031f49648d3c09b70bb901372c82632fbbe9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91585467e0b63df9d2d19ae93855a09b5f49f5087076abeaca45558fd99d601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91585467e0b63df9d2d19ae93855a09b5f49f5087076abeaca45558fd99d601->enter($__internal_c91585467e0b63df9d2d19ae93855a09b5f49f5087076abeaca45558fd99d601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfdfd9798c7ec6744cd5be49439a9f3f6ce2c909cd8452c8ff98882e703c7068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdfd9798c7ec6744cd5be49439a9f3f6ce2c909cd8452c8ff98882e703c7068->enter($__internal_cfdfd9798c7ec6744cd5be49439a9f3f6ce2c909cd8452c8ff98882e703c7068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cfdfd9798c7ec6744cd5be49439a9f3f6ce2c909cd8452c8ff98882e703c7068->leave($__internal_cfdfd9798c7ec6744cd5be49439a9f3f6ce2c909cd8452c8ff98882e703c7068_prof);

        
        $__internal_c91585467e0b63df9d2d19ae93855a09b5f49f5087076abeaca45558fd99d601->leave($__internal_c91585467e0b63df9d2d19ae93855a09b5f49f5087076abeaca45558fd99d601_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
