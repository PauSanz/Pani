<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
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
        $__internal_d1e79f604b7f30a83957d64e5add294f36827804334d817bae89d39df6742466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e79f604b7f30a83957d64e5add294f36827804334d817bae89d39df6742466->enter($__internal_d1e79f604b7f30a83957d64e5add294f36827804334d817bae89d39df6742466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a7178d8228095bdb2d91ad0f00b2b8f7b237728f9d2e454b71d1c8d4acb3c110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7178d8228095bdb2d91ad0f00b2b8f7b237728f9d2e454b71d1c8d4acb3c110->enter($__internal_a7178d8228095bdb2d91ad0f00b2b8f7b237728f9d2e454b71d1c8d4acb3c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e79f604b7f30a83957d64e5add294f36827804334d817bae89d39df6742466->leave($__internal_d1e79f604b7f30a83957d64e5add294f36827804334d817bae89d39df6742466_prof);

        
        $__internal_a7178d8228095bdb2d91ad0f00b2b8f7b237728f9d2e454b71d1c8d4acb3c110->leave($__internal_a7178d8228095bdb2d91ad0f00b2b8f7b237728f9d2e454b71d1c8d4acb3c110_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93109b2d25fdbac69ed2914e4eaad26b4cad3998479c8a956c1ddbd1d3f4bec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93109b2d25fdbac69ed2914e4eaad26b4cad3998479c8a956c1ddbd1d3f4bec2->enter($__internal_93109b2d25fdbac69ed2914e4eaad26b4cad3998479c8a956c1ddbd1d3f4bec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9727c9294d3881cc2ab2570d113ab419a7498fdec1e4eda78ec19e829c8310d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9727c9294d3881cc2ab2570d113ab419a7498fdec1e4eda78ec19e829c8310d0->enter($__internal_9727c9294d3881cc2ab2570d113ab419a7498fdec1e4eda78ec19e829c8310d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9727c9294d3881cc2ab2570d113ab419a7498fdec1e4eda78ec19e829c8310d0->leave($__internal_9727c9294d3881cc2ab2570d113ab419a7498fdec1e4eda78ec19e829c8310d0_prof);

        
        $__internal_93109b2d25fdbac69ed2914e4eaad26b4cad3998479c8a956c1ddbd1d3f4bec2->leave($__internal_93109b2d25fdbac69ed2914e4eaad26b4cad3998479c8a956c1ddbd1d3f4bec2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_90a3ffe605f46ca60168948bc3e04a13f20eab4823b1980b33e265095d6981fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a3ffe605f46ca60168948bc3e04a13f20eab4823b1980b33e265095d6981fd->enter($__internal_90a3ffe605f46ca60168948bc3e04a13f20eab4823b1980b33e265095d6981fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1030aa0e789ef77a71f177267a059dc80f0912e20e29929884102ed3c43fa3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1030aa0e789ef77a71f177267a059dc80f0912e20e29929884102ed3c43fa3d6->enter($__internal_1030aa0e789ef77a71f177267a059dc80f0912e20e29929884102ed3c43fa3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1030aa0e789ef77a71f177267a059dc80f0912e20e29929884102ed3c43fa3d6->leave($__internal_1030aa0e789ef77a71f177267a059dc80f0912e20e29929884102ed3c43fa3d6_prof);

        
        $__internal_90a3ffe605f46ca60168948bc3e04a13f20eab4823b1980b33e265095d6981fd->leave($__internal_90a3ffe605f46ca60168948bc3e04a13f20eab4823b1980b33e265095d6981fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82c96413e9f8761701e18a1addf207991201a2194690ae4494d319a847af96b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c96413e9f8761701e18a1addf207991201a2194690ae4494d319a847af96b8->enter($__internal_82c96413e9f8761701e18a1addf207991201a2194690ae4494d319a847af96b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b572d95f0407b176a4d959f9c94f1a77c4c555a25a5fec7190ac7ac427ee6663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b572d95f0407b176a4d959f9c94f1a77c4c555a25a5fec7190ac7ac427ee6663->enter($__internal_b572d95f0407b176a4d959f9c94f1a77c4c555a25a5fec7190ac7ac427ee6663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b572d95f0407b176a4d959f9c94f1a77c4c555a25a5fec7190ac7ac427ee6663->leave($__internal_b572d95f0407b176a4d959f9c94f1a77c4c555a25a5fec7190ac7ac427ee6663_prof);

        
        $__internal_82c96413e9f8761701e18a1addf207991201a2194690ae4494d319a847af96b8->leave($__internal_82c96413e9f8761701e18a1addf207991201a2194690ae4494d319a847af96b8_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
