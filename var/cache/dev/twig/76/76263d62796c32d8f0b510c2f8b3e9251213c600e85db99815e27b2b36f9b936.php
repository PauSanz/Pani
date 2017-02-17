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
        $__internal_790905dcfa7ab0bb6f5ec259e22a8fbe37b9ee80ecb807073ba2a764e4905d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790905dcfa7ab0bb6f5ec259e22a8fbe37b9ee80ecb807073ba2a764e4905d38->enter($__internal_790905dcfa7ab0bb6f5ec259e22a8fbe37b9ee80ecb807073ba2a764e4905d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_188e883d4e17f8bf1f04756251fa4df342270a0702029f9786fe53f447ba3582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188e883d4e17f8bf1f04756251fa4df342270a0702029f9786fe53f447ba3582->enter($__internal_188e883d4e17f8bf1f04756251fa4df342270a0702029f9786fe53f447ba3582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790905dcfa7ab0bb6f5ec259e22a8fbe37b9ee80ecb807073ba2a764e4905d38->leave($__internal_790905dcfa7ab0bb6f5ec259e22a8fbe37b9ee80ecb807073ba2a764e4905d38_prof);

        
        $__internal_188e883d4e17f8bf1f04756251fa4df342270a0702029f9786fe53f447ba3582->leave($__internal_188e883d4e17f8bf1f04756251fa4df342270a0702029f9786fe53f447ba3582_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2eef4eaf2db6b80dde31c729e1e9a500b373c8327b8c416400f3edd70a89df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2eef4eaf2db6b80dde31c729e1e9a500b373c8327b8c416400f3edd70a89df4->enter($__internal_f2eef4eaf2db6b80dde31c729e1e9a500b373c8327b8c416400f3edd70a89df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_379152b10ced96c920322f0d70f4c61e939c3c0942e550d8db30184461752ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379152b10ced96c920322f0d70f4c61e939c3c0942e550d8db30184461752ad0->enter($__internal_379152b10ced96c920322f0d70f4c61e939c3c0942e550d8db30184461752ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_379152b10ced96c920322f0d70f4c61e939c3c0942e550d8db30184461752ad0->leave($__internal_379152b10ced96c920322f0d70f4c61e939c3c0942e550d8db30184461752ad0_prof);

        
        $__internal_f2eef4eaf2db6b80dde31c729e1e9a500b373c8327b8c416400f3edd70a89df4->leave($__internal_f2eef4eaf2db6b80dde31c729e1e9a500b373c8327b8c416400f3edd70a89df4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_caab3ccaeaf418f9ac7012a14fb126dd56f0e44fb8fbb0040860c6765e20802b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caab3ccaeaf418f9ac7012a14fb126dd56f0e44fb8fbb0040860c6765e20802b->enter($__internal_caab3ccaeaf418f9ac7012a14fb126dd56f0e44fb8fbb0040860c6765e20802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2999dc73023b15adb1d6074c1df6b224d8e7c4689461d0c342ff1802ee58edf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2999dc73023b15adb1d6074c1df6b224d8e7c4689461d0c342ff1802ee58edf9->enter($__internal_2999dc73023b15adb1d6074c1df6b224d8e7c4689461d0c342ff1802ee58edf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2999dc73023b15adb1d6074c1df6b224d8e7c4689461d0c342ff1802ee58edf9->leave($__internal_2999dc73023b15adb1d6074c1df6b224d8e7c4689461d0c342ff1802ee58edf9_prof);

        
        $__internal_caab3ccaeaf418f9ac7012a14fb126dd56f0e44fb8fbb0040860c6765e20802b->leave($__internal_caab3ccaeaf418f9ac7012a14fb126dd56f0e44fb8fbb0040860c6765e20802b_prof);

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
