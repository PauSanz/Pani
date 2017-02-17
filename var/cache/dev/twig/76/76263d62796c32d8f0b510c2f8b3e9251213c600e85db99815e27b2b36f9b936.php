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
        $__internal_ead6533038084d38009d75c1e9b14f9a7a7d46988c33da32ba0a4a86fa03a7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead6533038084d38009d75c1e9b14f9a7a7d46988c33da32ba0a4a86fa03a7ed->enter($__internal_ead6533038084d38009d75c1e9b14f9a7a7d46988c33da32ba0a4a86fa03a7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b6bfb9e768b36a5d4d20dac3a947405d3e2992b0793171aabf6ae4333bdeca30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bfb9e768b36a5d4d20dac3a947405d3e2992b0793171aabf6ae4333bdeca30->enter($__internal_b6bfb9e768b36a5d4d20dac3a947405d3e2992b0793171aabf6ae4333bdeca30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead6533038084d38009d75c1e9b14f9a7a7d46988c33da32ba0a4a86fa03a7ed->leave($__internal_ead6533038084d38009d75c1e9b14f9a7a7d46988c33da32ba0a4a86fa03a7ed_prof);

        
        $__internal_b6bfb9e768b36a5d4d20dac3a947405d3e2992b0793171aabf6ae4333bdeca30->leave($__internal_b6bfb9e768b36a5d4d20dac3a947405d3e2992b0793171aabf6ae4333bdeca30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_030c1c64debef86bd76b97e1958bcbb0e355475dcef00d93f6e44a81b600f74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030c1c64debef86bd76b97e1958bcbb0e355475dcef00d93f6e44a81b600f74c->enter($__internal_030c1c64debef86bd76b97e1958bcbb0e355475dcef00d93f6e44a81b600f74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1a97cd0b7dcd2f3ede2265e4c67f27ec6c8416982bba7016261aee9b0e923c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a97cd0b7dcd2f3ede2265e4c67f27ec6c8416982bba7016261aee9b0e923c8->enter($__internal_d1a97cd0b7dcd2f3ede2265e4c67f27ec6c8416982bba7016261aee9b0e923c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d1a97cd0b7dcd2f3ede2265e4c67f27ec6c8416982bba7016261aee9b0e923c8->leave($__internal_d1a97cd0b7dcd2f3ede2265e4c67f27ec6c8416982bba7016261aee9b0e923c8_prof);

        
        $__internal_030c1c64debef86bd76b97e1958bcbb0e355475dcef00d93f6e44a81b600f74c->leave($__internal_030c1c64debef86bd76b97e1958bcbb0e355475dcef00d93f6e44a81b600f74c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ad246f0c9f0e6bee2b7e3b318f59251885b1a2b80e15ff616299bf52cdd103d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad246f0c9f0e6bee2b7e3b318f59251885b1a2b80e15ff616299bf52cdd103d->enter($__internal_3ad246f0c9f0e6bee2b7e3b318f59251885b1a2b80e15ff616299bf52cdd103d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d09ee4edbb04cf2cb76831f0f96c6320158abf1d957cf1c1cb384494cd9c935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d09ee4edbb04cf2cb76831f0f96c6320158abf1d957cf1c1cb384494cd9c935->enter($__internal_3d09ee4edbb04cf2cb76831f0f96c6320158abf1d957cf1c1cb384494cd9c935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d09ee4edbb04cf2cb76831f0f96c6320158abf1d957cf1c1cb384494cd9c935->leave($__internal_3d09ee4edbb04cf2cb76831f0f96c6320158abf1d957cf1c1cb384494cd9c935_prof);

        
        $__internal_3ad246f0c9f0e6bee2b7e3b318f59251885b1a2b80e15ff616299bf52cdd103d->leave($__internal_3ad246f0c9f0e6bee2b7e3b318f59251885b1a2b80e15ff616299bf52cdd103d_prof);

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
