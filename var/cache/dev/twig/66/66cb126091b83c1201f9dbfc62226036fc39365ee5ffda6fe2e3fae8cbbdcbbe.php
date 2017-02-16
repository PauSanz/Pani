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
        $__internal_71e68d1a98f8ee0b76af9c8cf49167db1afd317e0f2b6625897ca010d59428a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e68d1a98f8ee0b76af9c8cf49167db1afd317e0f2b6625897ca010d59428a6->enter($__internal_71e68d1a98f8ee0b76af9c8cf49167db1afd317e0f2b6625897ca010d59428a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8c63b49824b3b4b0071a5de49249ca7753f75684b2a54460d317ea696addfdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c63b49824b3b4b0071a5de49249ca7753f75684b2a54460d317ea696addfdbb->enter($__internal_8c63b49824b3b4b0071a5de49249ca7753f75684b2a54460d317ea696addfdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e68d1a98f8ee0b76af9c8cf49167db1afd317e0f2b6625897ca010d59428a6->leave($__internal_71e68d1a98f8ee0b76af9c8cf49167db1afd317e0f2b6625897ca010d59428a6_prof);

        
        $__internal_8c63b49824b3b4b0071a5de49249ca7753f75684b2a54460d317ea696addfdbb->leave($__internal_8c63b49824b3b4b0071a5de49249ca7753f75684b2a54460d317ea696addfdbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8af625b834485ff2de6085229d3193b66e35073ea02aad587d07612ffc0b7b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af625b834485ff2de6085229d3193b66e35073ea02aad587d07612ffc0b7b63->enter($__internal_8af625b834485ff2de6085229d3193b66e35073ea02aad587d07612ffc0b7b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f03d8ac4bc5632792cfb4017a6364e96ea7311578db0c71788dd87114f6ab2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f03d8ac4bc5632792cfb4017a6364e96ea7311578db0c71788dd87114f6ab2f->enter($__internal_0f03d8ac4bc5632792cfb4017a6364e96ea7311578db0c71788dd87114f6ab2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0f03d8ac4bc5632792cfb4017a6364e96ea7311578db0c71788dd87114f6ab2f->leave($__internal_0f03d8ac4bc5632792cfb4017a6364e96ea7311578db0c71788dd87114f6ab2f_prof);

        
        $__internal_8af625b834485ff2de6085229d3193b66e35073ea02aad587d07612ffc0b7b63->leave($__internal_8af625b834485ff2de6085229d3193b66e35073ea02aad587d07612ffc0b7b63_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3737e3ec5363f8af8c2f6cde9536ae6e9341dd70648f2b9bfae39aed4bbc9a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3737e3ec5363f8af8c2f6cde9536ae6e9341dd70648f2b9bfae39aed4bbc9a5f->enter($__internal_3737e3ec5363f8af8c2f6cde9536ae6e9341dd70648f2b9bfae39aed4bbc9a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e455e3aa8b7d852fbf3f95c1d8c04b96a5a3ceadceb32da0172ef962410570b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e455e3aa8b7d852fbf3f95c1d8c04b96a5a3ceadceb32da0172ef962410570b4->enter($__internal_e455e3aa8b7d852fbf3f95c1d8c04b96a5a3ceadceb32da0172ef962410570b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e455e3aa8b7d852fbf3f95c1d8c04b96a5a3ceadceb32da0172ef962410570b4->leave($__internal_e455e3aa8b7d852fbf3f95c1d8c04b96a5a3ceadceb32da0172ef962410570b4_prof);

        
        $__internal_3737e3ec5363f8af8c2f6cde9536ae6e9341dd70648f2b9bfae39aed4bbc9a5f->leave($__internal_3737e3ec5363f8af8c2f6cde9536ae6e9341dd70648f2b9bfae39aed4bbc9a5f_prof);

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
