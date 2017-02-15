<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b85287031bb9c564b445fdc3f5b40737adb42d1a581a7ba3055773541771e601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85287031bb9c564b445fdc3f5b40737adb42d1a581a7ba3055773541771e601->enter($__internal_b85287031bb9c564b445fdc3f5b40737adb42d1a581a7ba3055773541771e601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e89c35626af586262fb08909ef923e5c1a98ed14bdce0498d3022cdebbe355d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e89c35626af586262fb08909ef923e5c1a98ed14bdce0498d3022cdebbe355d->enter($__internal_2e89c35626af586262fb08909ef923e5c1a98ed14bdce0498d3022cdebbe355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85287031bb9c564b445fdc3f5b40737adb42d1a581a7ba3055773541771e601->leave($__internal_b85287031bb9c564b445fdc3f5b40737adb42d1a581a7ba3055773541771e601_prof);

        
        $__internal_2e89c35626af586262fb08909ef923e5c1a98ed14bdce0498d3022cdebbe355d->leave($__internal_2e89c35626af586262fb08909ef923e5c1a98ed14bdce0498d3022cdebbe355d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17d4496ed135700a78b3244cfbcb1ee30d0b0855d6d61c2254c2db9a9ec82bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d4496ed135700a78b3244cfbcb1ee30d0b0855d6d61c2254c2db9a9ec82bdf->enter($__internal_17d4496ed135700a78b3244cfbcb1ee30d0b0855d6d61c2254c2db9a9ec82bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21d7f119ad9d4d4452e5aa2d952f35c79feb0cd64cbcf2ad33d7ed27fa4bcd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d7f119ad9d4d4452e5aa2d952f35c79feb0cd64cbcf2ad33d7ed27fa4bcd3f->enter($__internal_21d7f119ad9d4d4452e5aa2d952f35c79feb0cd64cbcf2ad33d7ed27fa4bcd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21d7f119ad9d4d4452e5aa2d952f35c79feb0cd64cbcf2ad33d7ed27fa4bcd3f->leave($__internal_21d7f119ad9d4d4452e5aa2d952f35c79feb0cd64cbcf2ad33d7ed27fa4bcd3f_prof);

        
        $__internal_17d4496ed135700a78b3244cfbcb1ee30d0b0855d6d61c2254c2db9a9ec82bdf->leave($__internal_17d4496ed135700a78b3244cfbcb1ee30d0b0855d6d61c2254c2db9a9ec82bdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_391197f22f8ea2a3cb02378f4c63f297a34255f9c69029c92a93f5b6ac5975bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391197f22f8ea2a3cb02378f4c63f297a34255f9c69029c92a93f5b6ac5975bb->enter($__internal_391197f22f8ea2a3cb02378f4c63f297a34255f9c69029c92a93f5b6ac5975bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ca71b939c16807c290c6daebc61bd815d0fee563a2824617d4b4c8dc7e311949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca71b939c16807c290c6daebc61bd815d0fee563a2824617d4b4c8dc7e311949->enter($__internal_ca71b939c16807c290c6daebc61bd815d0fee563a2824617d4b4c8dc7e311949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca71b939c16807c290c6daebc61bd815d0fee563a2824617d4b4c8dc7e311949->leave($__internal_ca71b939c16807c290c6daebc61bd815d0fee563a2824617d4b4c8dc7e311949_prof);

        
        $__internal_391197f22f8ea2a3cb02378f4c63f297a34255f9c69029c92a93f5b6ac5975bb->leave($__internal_391197f22f8ea2a3cb02378f4c63f297a34255f9c69029c92a93f5b6ac5975bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73269539b8572e89136489ba56b1cefe5112a2fc1304f14e524779e57bd10145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73269539b8572e89136489ba56b1cefe5112a2fc1304f14e524779e57bd10145->enter($__internal_73269539b8572e89136489ba56b1cefe5112a2fc1304f14e524779e57bd10145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f26cbbc60a139a24b0c51d58d27384583c9129f5c53793d50f67fda0a2a3c8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26cbbc60a139a24b0c51d58d27384583c9129f5c53793d50f67fda0a2a3c8b4->enter($__internal_f26cbbc60a139a24b0c51d58d27384583c9129f5c53793d50f67fda0a2a3c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f26cbbc60a139a24b0c51d58d27384583c9129f5c53793d50f67fda0a2a3c8b4->leave($__internal_f26cbbc60a139a24b0c51d58d27384583c9129f5c53793d50f67fda0a2a3c8b4_prof);

        
        $__internal_73269539b8572e89136489ba56b1cefe5112a2fc1304f14e524779e57bd10145->leave($__internal_73269539b8572e89136489ba56b1cefe5112a2fc1304f14e524779e57bd10145_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
