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
        $__internal_a19e90a1679d1d6065a470dbf7a5c024aa266dffc8c10803075da963f1943b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19e90a1679d1d6065a470dbf7a5c024aa266dffc8c10803075da963f1943b00->enter($__internal_a19e90a1679d1d6065a470dbf7a5c024aa266dffc8c10803075da963f1943b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6617d9ebb694ba4056f5f01b974b2761196a954d625f9070361b478184da387f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6617d9ebb694ba4056f5f01b974b2761196a954d625f9070361b478184da387f->enter($__internal_6617d9ebb694ba4056f5f01b974b2761196a954d625f9070361b478184da387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19e90a1679d1d6065a470dbf7a5c024aa266dffc8c10803075da963f1943b00->leave($__internal_a19e90a1679d1d6065a470dbf7a5c024aa266dffc8c10803075da963f1943b00_prof);

        
        $__internal_6617d9ebb694ba4056f5f01b974b2761196a954d625f9070361b478184da387f->leave($__internal_6617d9ebb694ba4056f5f01b974b2761196a954d625f9070361b478184da387f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6d2e5ce267652fb7aec8e6459af4ad9dacf34264ea93e4f6f0eac54efc8b908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d2e5ce267652fb7aec8e6459af4ad9dacf34264ea93e4f6f0eac54efc8b908->enter($__internal_c6d2e5ce267652fb7aec8e6459af4ad9dacf34264ea93e4f6f0eac54efc8b908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a8f8dd216eb514cc07237cb0d8a754c0e0fba2538b1bee9c312c5784f43355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8f8dd216eb514cc07237cb0d8a754c0e0fba2538b1bee9c312c5784f43355e->enter($__internal_0a8f8dd216eb514cc07237cb0d8a754c0e0fba2538b1bee9c312c5784f43355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0a8f8dd216eb514cc07237cb0d8a754c0e0fba2538b1bee9c312c5784f43355e->leave($__internal_0a8f8dd216eb514cc07237cb0d8a754c0e0fba2538b1bee9c312c5784f43355e_prof);

        
        $__internal_c6d2e5ce267652fb7aec8e6459af4ad9dacf34264ea93e4f6f0eac54efc8b908->leave($__internal_c6d2e5ce267652fb7aec8e6459af4ad9dacf34264ea93e4f6f0eac54efc8b908_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af796a01cb72790eeeddf96d270d35fc41a0c2a4d35bd627da37a3e21796fd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af796a01cb72790eeeddf96d270d35fc41a0c2a4d35bd627da37a3e21796fd38->enter($__internal_af796a01cb72790eeeddf96d270d35fc41a0c2a4d35bd627da37a3e21796fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adfac5e0b67c8396465a4d09a667ae1500948dd1af9a82baf581e3cb526905a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfac5e0b67c8396465a4d09a667ae1500948dd1af9a82baf581e3cb526905a4->enter($__internal_adfac5e0b67c8396465a4d09a667ae1500948dd1af9a82baf581e3cb526905a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_adfac5e0b67c8396465a4d09a667ae1500948dd1af9a82baf581e3cb526905a4->leave($__internal_adfac5e0b67c8396465a4d09a667ae1500948dd1af9a82baf581e3cb526905a4_prof);

        
        $__internal_af796a01cb72790eeeddf96d270d35fc41a0c2a4d35bd627da37a3e21796fd38->leave($__internal_af796a01cb72790eeeddf96d270d35fc41a0c2a4d35bd627da37a3e21796fd38_prof);

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
