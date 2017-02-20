<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35dda62958d97826c4833b58a9730c1920fe21417245577fcb1517daec7743bc extends Twig_Template
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
        $__internal_d006f9d0d0d9d7e01fa2235448052875734fbd271a077d0c1f3b914c668b31bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d006f9d0d0d9d7e01fa2235448052875734fbd271a077d0c1f3b914c668b31bf->enter($__internal_d006f9d0d0d9d7e01fa2235448052875734fbd271a077d0c1f3b914c668b31bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f84331c88b8d79d4d5281e425856009fcf2da0c43c60754a9536f62f7d716668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84331c88b8d79d4d5281e425856009fcf2da0c43c60754a9536f62f7d716668->enter($__internal_f84331c88b8d79d4d5281e425856009fcf2da0c43c60754a9536f62f7d716668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d006f9d0d0d9d7e01fa2235448052875734fbd271a077d0c1f3b914c668b31bf->leave($__internal_d006f9d0d0d9d7e01fa2235448052875734fbd271a077d0c1f3b914c668b31bf_prof);

        
        $__internal_f84331c88b8d79d4d5281e425856009fcf2da0c43c60754a9536f62f7d716668->leave($__internal_f84331c88b8d79d4d5281e425856009fcf2da0c43c60754a9536f62f7d716668_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00528d4b3c2ba5fd3ab0f8f12ebcd209e19fdb242ee0e0ac8baab3b5a40a0730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00528d4b3c2ba5fd3ab0f8f12ebcd209e19fdb242ee0e0ac8baab3b5a40a0730->enter($__internal_00528d4b3c2ba5fd3ab0f8f12ebcd209e19fdb242ee0e0ac8baab3b5a40a0730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a82206449444aa7843b4dcab0954bbb77a0de01198145271236499276f9d88ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82206449444aa7843b4dcab0954bbb77a0de01198145271236499276f9d88ad->enter($__internal_a82206449444aa7843b4dcab0954bbb77a0de01198145271236499276f9d88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a82206449444aa7843b4dcab0954bbb77a0de01198145271236499276f9d88ad->leave($__internal_a82206449444aa7843b4dcab0954bbb77a0de01198145271236499276f9d88ad_prof);

        
        $__internal_00528d4b3c2ba5fd3ab0f8f12ebcd209e19fdb242ee0e0ac8baab3b5a40a0730->leave($__internal_00528d4b3c2ba5fd3ab0f8f12ebcd209e19fdb242ee0e0ac8baab3b5a40a0730_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a72c70fe1ff110d9d78b9307d4f372bb0c07b41846c836dfa531ebc99cd5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a72c70fe1ff110d9d78b9307d4f372bb0c07b41846c836dfa531ebc99cd5d1->enter($__internal_17a72c70fe1ff110d9d78b9307d4f372bb0c07b41846c836dfa531ebc99cd5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c6c0f6b17ca24026348378140663a41d36c48ffd08c1b79788f7042c93ff625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6c0f6b17ca24026348378140663a41d36c48ffd08c1b79788f7042c93ff625->enter($__internal_9c6c0f6b17ca24026348378140663a41d36c48ffd08c1b79788f7042c93ff625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c6c0f6b17ca24026348378140663a41d36c48ffd08c1b79788f7042c93ff625->leave($__internal_9c6c0f6b17ca24026348378140663a41d36c48ffd08c1b79788f7042c93ff625_prof);

        
        $__internal_17a72c70fe1ff110d9d78b9307d4f372bb0c07b41846c836dfa531ebc99cd5d1->leave($__internal_17a72c70fe1ff110d9d78b9307d4f372bb0c07b41846c836dfa531ebc99cd5d1_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
