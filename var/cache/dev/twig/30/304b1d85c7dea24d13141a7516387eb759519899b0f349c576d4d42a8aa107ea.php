<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6eb7046263c5461761d070dcf6b04bc2907fc632c9cdc719aca96e9e4c0adc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eb7046263c5461761d070dcf6b04bc2907fc632c9cdc719aca96e9e4c0adc4->enter($__internal_c6eb7046263c5461761d070dcf6b04bc2907fc632c9cdc719aca96e9e4c0adc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8d2501f8260e807c4492f80a11712edea86520a1468290fd1c705073b0df7c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2501f8260e807c4492f80a11712edea86520a1468290fd1c705073b0df7c24->enter($__internal_8d2501f8260e807c4492f80a11712edea86520a1468290fd1c705073b0df7c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6eb7046263c5461761d070dcf6b04bc2907fc632c9cdc719aca96e9e4c0adc4->leave($__internal_c6eb7046263c5461761d070dcf6b04bc2907fc632c9cdc719aca96e9e4c0adc4_prof);

        
        $__internal_8d2501f8260e807c4492f80a11712edea86520a1468290fd1c705073b0df7c24->leave($__internal_8d2501f8260e807c4492f80a11712edea86520a1468290fd1c705073b0df7c24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2d2faa4dd7048ea21b22690da6247bec59f7cba486919d979e0787e8ccef0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d2faa4dd7048ea21b22690da6247bec59f7cba486919d979e0787e8ccef0ad->enter($__internal_a2d2faa4dd7048ea21b22690da6247bec59f7cba486919d979e0787e8ccef0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_857430a284fcbc972ed4a16b9ee04430f0870f875ec08ecb9470fd9b9f8c67b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857430a284fcbc972ed4a16b9ee04430f0870f875ec08ecb9470fd9b9f8c67b7->enter($__internal_857430a284fcbc972ed4a16b9ee04430f0870f875ec08ecb9470fd9b9f8c67b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_857430a284fcbc972ed4a16b9ee04430f0870f875ec08ecb9470fd9b9f8c67b7->leave($__internal_857430a284fcbc972ed4a16b9ee04430f0870f875ec08ecb9470fd9b9f8c67b7_prof);

        
        $__internal_a2d2faa4dd7048ea21b22690da6247bec59f7cba486919d979e0787e8ccef0ad->leave($__internal_a2d2faa4dd7048ea21b22690da6247bec59f7cba486919d979e0787e8ccef0ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3b9d6c063e42ea4c5658c5971b36e802050bd417458b9b1ac40ad8619a14fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b9d6c063e42ea4c5658c5971b36e802050bd417458b9b1ac40ad8619a14fd2->enter($__internal_c3b9d6c063e42ea4c5658c5971b36e802050bd417458b9b1ac40ad8619a14fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2be59dfd4c9fe4a94e45b0229645b5a02e5eb438752810e42dd9c753afa2b1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be59dfd4c9fe4a94e45b0229645b5a02e5eb438752810e42dd9c753afa2b1ae->enter($__internal_2be59dfd4c9fe4a94e45b0229645b5a02e5eb438752810e42dd9c753afa2b1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2be59dfd4c9fe4a94e45b0229645b5a02e5eb438752810e42dd9c753afa2b1ae->leave($__internal_2be59dfd4c9fe4a94e45b0229645b5a02e5eb438752810e42dd9c753afa2b1ae_prof);

        
        $__internal_c3b9d6c063e42ea4c5658c5971b36e802050bd417458b9b1ac40ad8619a14fd2->leave($__internal_c3b9d6c063e42ea4c5658c5971b36e802050bd417458b9b1ac40ad8619a14fd2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adf116840959b74f6bc013ad97c3e7672a544a00c1c5ef9ef1ba0bdf89d5ec93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf116840959b74f6bc013ad97c3e7672a544a00c1c5ef9ef1ba0bdf89d5ec93->enter($__internal_adf116840959b74f6bc013ad97c3e7672a544a00c1c5ef9ef1ba0bdf89d5ec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3142c0c16ece8c785696af52274afe3495fdef5b566e7f81830a81c6dba777eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3142c0c16ece8c785696af52274afe3495fdef5b566e7f81830a81c6dba777eb->enter($__internal_3142c0c16ece8c785696af52274afe3495fdef5b566e7f81830a81c6dba777eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3142c0c16ece8c785696af52274afe3495fdef5b566e7f81830a81c6dba777eb->leave($__internal_3142c0c16ece8c785696af52274afe3495fdef5b566e7f81830a81c6dba777eb_prof);

        
        $__internal_adf116840959b74f6bc013ad97c3e7672a544a00c1c5ef9ef1ba0bdf89d5ec93->leave($__internal_adf116840959b74f6bc013ad97c3e7672a544a00c1c5ef9ef1ba0bdf89d5ec93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
