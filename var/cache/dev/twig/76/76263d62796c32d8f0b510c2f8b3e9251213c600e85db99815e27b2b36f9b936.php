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
        $__internal_c217fa743eb0dab7294a75a646754b5f1c7dbf1610a49a4f2359a1771bbe27a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c217fa743eb0dab7294a75a646754b5f1c7dbf1610a49a4f2359a1771bbe27a2->enter($__internal_c217fa743eb0dab7294a75a646754b5f1c7dbf1610a49a4f2359a1771bbe27a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_44939be9c33888b9d58b98e5200f60743b379b7298b9744d802a26a51b64c1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44939be9c33888b9d58b98e5200f60743b379b7298b9744d802a26a51b64c1db->enter($__internal_44939be9c33888b9d58b98e5200f60743b379b7298b9744d802a26a51b64c1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c217fa743eb0dab7294a75a646754b5f1c7dbf1610a49a4f2359a1771bbe27a2->leave($__internal_c217fa743eb0dab7294a75a646754b5f1c7dbf1610a49a4f2359a1771bbe27a2_prof);

        
        $__internal_44939be9c33888b9d58b98e5200f60743b379b7298b9744d802a26a51b64c1db->leave($__internal_44939be9c33888b9d58b98e5200f60743b379b7298b9744d802a26a51b64c1db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2d500ce2e8fb90cccc6ba157af554b387520fec188e6497ab342de8e9ddb8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d500ce2e8fb90cccc6ba157af554b387520fec188e6497ab342de8e9ddb8ec->enter($__internal_c2d500ce2e8fb90cccc6ba157af554b387520fec188e6497ab342de8e9ddb8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce750a460e71328b3c695fa216121ad49d108560b7ba449993758af45026c836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce750a460e71328b3c695fa216121ad49d108560b7ba449993758af45026c836->enter($__internal_ce750a460e71328b3c695fa216121ad49d108560b7ba449993758af45026c836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ce750a460e71328b3c695fa216121ad49d108560b7ba449993758af45026c836->leave($__internal_ce750a460e71328b3c695fa216121ad49d108560b7ba449993758af45026c836_prof);

        
        $__internal_c2d500ce2e8fb90cccc6ba157af554b387520fec188e6497ab342de8e9ddb8ec->leave($__internal_c2d500ce2e8fb90cccc6ba157af554b387520fec188e6497ab342de8e9ddb8ec_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d48fa4c4aede2c1041e5cf10a9ca8772fea39e759fde7156608522f6247901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d48fa4c4aede2c1041e5cf10a9ca8772fea39e759fde7156608522f6247901->enter($__internal_74d48fa4c4aede2c1041e5cf10a9ca8772fea39e759fde7156608522f6247901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8dd40948356104be4507ef2f79ad4ef6e447a30b2f000f475cb7c22ca719d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dd40948356104be4507ef2f79ad4ef6e447a30b2f000f475cb7c22ca719d8e->enter($__internal_a8dd40948356104be4507ef2f79ad4ef6e447a30b2f000f475cb7c22ca719d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8dd40948356104be4507ef2f79ad4ef6e447a30b2f000f475cb7c22ca719d8e->leave($__internal_a8dd40948356104be4507ef2f79ad4ef6e447a30b2f000f475cb7c22ca719d8e_prof);

        
        $__internal_74d48fa4c4aede2c1041e5cf10a9ca8772fea39e759fde7156608522f6247901->leave($__internal_74d48fa4c4aede2c1041e5cf10a9ca8772fea39e759fde7156608522f6247901_prof);

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
