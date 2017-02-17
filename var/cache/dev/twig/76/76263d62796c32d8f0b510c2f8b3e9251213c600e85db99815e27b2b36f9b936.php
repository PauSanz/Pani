<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f883b6a7c0dbfac7b8c4653515fe37fe9d3d7508a4afdf9ff4b8c355492cc82b extends Twig_Template
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
        $__internal_724530c634ada58c3f9172f2ffe3115607628e2695405b86b6a064e5b75d27a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724530c634ada58c3f9172f2ffe3115607628e2695405b86b6a064e5b75d27a5->enter($__internal_724530c634ada58c3f9172f2ffe3115607628e2695405b86b6a064e5b75d27a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3a814efa4c01c33829bd6068acc1bfcc7450cfdae6171ca67e50a3ad921adc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a814efa4c01c33829bd6068acc1bfcc7450cfdae6171ca67e50a3ad921adc20->enter($__internal_3a814efa4c01c33829bd6068acc1bfcc7450cfdae6171ca67e50a3ad921adc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_724530c634ada58c3f9172f2ffe3115607628e2695405b86b6a064e5b75d27a5->leave($__internal_724530c634ada58c3f9172f2ffe3115607628e2695405b86b6a064e5b75d27a5_prof);

        
        $__internal_3a814efa4c01c33829bd6068acc1bfcc7450cfdae6171ca67e50a3ad921adc20->leave($__internal_3a814efa4c01c33829bd6068acc1bfcc7450cfdae6171ca67e50a3ad921adc20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fba5a2f336c9575f01e4c61c6409dd4f5fbb98756103746bdf6ba69bfa25933e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba5a2f336c9575f01e4c61c6409dd4f5fbb98756103746bdf6ba69bfa25933e->enter($__internal_fba5a2f336c9575f01e4c61c6409dd4f5fbb98756103746bdf6ba69bfa25933e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7ef1f0c6f01813056340a1cf4a58e45aa678d8676a9c8daaa00ef2d4825759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ef1f0c6f01813056340a1cf4a58e45aa678d8676a9c8daaa00ef2d4825759a->enter($__internal_f7ef1f0c6f01813056340a1cf4a58e45aa678d8676a9c8daaa00ef2d4825759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f7ef1f0c6f01813056340a1cf4a58e45aa678d8676a9c8daaa00ef2d4825759a->leave($__internal_f7ef1f0c6f01813056340a1cf4a58e45aa678d8676a9c8daaa00ef2d4825759a_prof);

        
        $__internal_fba5a2f336c9575f01e4c61c6409dd4f5fbb98756103746bdf6ba69bfa25933e->leave($__internal_fba5a2f336c9575f01e4c61c6409dd4f5fbb98756103746bdf6ba69bfa25933e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_760785f2ef40d7bf7d04248cf76b186b1f402ab066f74c560e489df802488287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760785f2ef40d7bf7d04248cf76b186b1f402ab066f74c560e489df802488287->enter($__internal_760785f2ef40d7bf7d04248cf76b186b1f402ab066f74c560e489df802488287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6a9ed9b1c91093638b842eb092a8a5f19eaa71cac2e3c01f2e3d9c3b9d13334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a9ed9b1c91093638b842eb092a8a5f19eaa71cac2e3c01f2e3d9c3b9d13334->enter($__internal_b6a9ed9b1c91093638b842eb092a8a5f19eaa71cac2e3c01f2e3d9c3b9d13334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6a9ed9b1c91093638b842eb092a8a5f19eaa71cac2e3c01f2e3d9c3b9d13334->leave($__internal_b6a9ed9b1c91093638b842eb092a8a5f19eaa71cac2e3c01f2e3d9c3b9d13334_prof);

        
        $__internal_760785f2ef40d7bf7d04248cf76b186b1f402ab066f74c560e489df802488287->leave($__internal_760785f2ef40d7bf7d04248cf76b186b1f402ab066f74c560e489df802488287_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
