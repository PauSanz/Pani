<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
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
        $__internal_019e953ce9a200b3c9592419c8583c832e000907bdddd9fc246cee0a0ad7857a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019e953ce9a200b3c9592419c8583c832e000907bdddd9fc246cee0a0ad7857a->enter($__internal_019e953ce9a200b3c9592419c8583c832e000907bdddd9fc246cee0a0ad7857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4dd8a46e9e03b8fc6ea1f2c2714de4f1194426250c3a67955142d62a49ecddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd8a46e9e03b8fc6ea1f2c2714de4f1194426250c3a67955142d62a49ecddde->enter($__internal_4dd8a46e9e03b8fc6ea1f2c2714de4f1194426250c3a67955142d62a49ecddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019e953ce9a200b3c9592419c8583c832e000907bdddd9fc246cee0a0ad7857a->leave($__internal_019e953ce9a200b3c9592419c8583c832e000907bdddd9fc246cee0a0ad7857a_prof);

        
        $__internal_4dd8a46e9e03b8fc6ea1f2c2714de4f1194426250c3a67955142d62a49ecddde->leave($__internal_4dd8a46e9e03b8fc6ea1f2c2714de4f1194426250c3a67955142d62a49ecddde_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74e3dba2354bab8146b1de8f93b319f261bff61edb4f6014d350881b39a29c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e3dba2354bab8146b1de8f93b319f261bff61edb4f6014d350881b39a29c1f->enter($__internal_74e3dba2354bab8146b1de8f93b319f261bff61edb4f6014d350881b39a29c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_863b84a7f8b151d39c56811bf6cb9ca5a8b8e21393be767375e2d17c79d7c7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b84a7f8b151d39c56811bf6cb9ca5a8b8e21393be767375e2d17c79d7c7bc->enter($__internal_863b84a7f8b151d39c56811bf6cb9ca5a8b8e21393be767375e2d17c79d7c7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_863b84a7f8b151d39c56811bf6cb9ca5a8b8e21393be767375e2d17c79d7c7bc->leave($__internal_863b84a7f8b151d39c56811bf6cb9ca5a8b8e21393be767375e2d17c79d7c7bc_prof);

        
        $__internal_74e3dba2354bab8146b1de8f93b319f261bff61edb4f6014d350881b39a29c1f->leave($__internal_74e3dba2354bab8146b1de8f93b319f261bff61edb4f6014d350881b39a29c1f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_743e44d197859d740420f69d6cd6509796455783a2af992a4396e40433d7cf12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743e44d197859d740420f69d6cd6509796455783a2af992a4396e40433d7cf12->enter($__internal_743e44d197859d740420f69d6cd6509796455783a2af992a4396e40433d7cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15fbe4b9e26cb586e7e7f0da908eca48f6b1f6df5efacfcffc5911c156503b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fbe4b9e26cb586e7e7f0da908eca48f6b1f6df5efacfcffc5911c156503b48->enter($__internal_15fbe4b9e26cb586e7e7f0da908eca48f6b1f6df5efacfcffc5911c156503b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15fbe4b9e26cb586e7e7f0da908eca48f6b1f6df5efacfcffc5911c156503b48->leave($__internal_15fbe4b9e26cb586e7e7f0da908eca48f6b1f6df5efacfcffc5911c156503b48_prof);

        
        $__internal_743e44d197859d740420f69d6cd6509796455783a2af992a4396e40433d7cf12->leave($__internal_743e44d197859d740420f69d6cd6509796455783a2af992a4396e40433d7cf12_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_506653ad50403ea8878ba9b3a5c20f3e1ad963e85072c468f1cf3db7e74c2f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506653ad50403ea8878ba9b3a5c20f3e1ad963e85072c468f1cf3db7e74c2f3d->enter($__internal_506653ad50403ea8878ba9b3a5c20f3e1ad963e85072c468f1cf3db7e74c2f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a11f3a15f645d859c9abb4a6cd5847bb36bfaef9c034255b21f93bcd287a0d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11f3a15f645d859c9abb4a6cd5847bb36bfaef9c034255b21f93bcd287a0d79->enter($__internal_a11f3a15f645d859c9abb4a6cd5847bb36bfaef9c034255b21f93bcd287a0d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a11f3a15f645d859c9abb4a6cd5847bb36bfaef9c034255b21f93bcd287a0d79->leave($__internal_a11f3a15f645d859c9abb4a6cd5847bb36bfaef9c034255b21f93bcd287a0d79_prof);

        
        $__internal_506653ad50403ea8878ba9b3a5c20f3e1ad963e85072c468f1cf3db7e74c2f3d->leave($__internal_506653ad50403ea8878ba9b3a5c20f3e1ad963e85072c468f1cf3db7e74c2f3d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
