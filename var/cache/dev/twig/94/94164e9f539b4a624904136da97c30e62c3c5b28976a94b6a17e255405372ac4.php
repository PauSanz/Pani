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
        $__internal_3fbfa60023d83e2e3ba3d8651cb73b9099eb391859fec9694bf3d69927413f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbfa60023d83e2e3ba3d8651cb73b9099eb391859fec9694bf3d69927413f41->enter($__internal_3fbfa60023d83e2e3ba3d8651cb73b9099eb391859fec9694bf3d69927413f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef5f55b91ae5c030cfba3ec05c7b2b848d962a0d67dfb1fe773933bc2a539a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5f55b91ae5c030cfba3ec05c7b2b848d962a0d67dfb1fe773933bc2a539a38->enter($__internal_ef5f55b91ae5c030cfba3ec05c7b2b848d962a0d67dfb1fe773933bc2a539a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fbfa60023d83e2e3ba3d8651cb73b9099eb391859fec9694bf3d69927413f41->leave($__internal_3fbfa60023d83e2e3ba3d8651cb73b9099eb391859fec9694bf3d69927413f41_prof);

        
        $__internal_ef5f55b91ae5c030cfba3ec05c7b2b848d962a0d67dfb1fe773933bc2a539a38->leave($__internal_ef5f55b91ae5c030cfba3ec05c7b2b848d962a0d67dfb1fe773933bc2a539a38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f70b0b7984530c882ed3512cc487f3c2dbc22e1af48354dd11574a37c778fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f70b0b7984530c882ed3512cc487f3c2dbc22e1af48354dd11574a37c778fb2->enter($__internal_9f70b0b7984530c882ed3512cc487f3c2dbc22e1af48354dd11574a37c778fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d0f1dc6cb2f98fa0ab2de7e71c235e666ad79c0d913df6fb265eb17c46b5217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0f1dc6cb2f98fa0ab2de7e71c235e666ad79c0d913df6fb265eb17c46b5217->enter($__internal_8d0f1dc6cb2f98fa0ab2de7e71c235e666ad79c0d913df6fb265eb17c46b5217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d0f1dc6cb2f98fa0ab2de7e71c235e666ad79c0d913df6fb265eb17c46b5217->leave($__internal_8d0f1dc6cb2f98fa0ab2de7e71c235e666ad79c0d913df6fb265eb17c46b5217_prof);

        
        $__internal_9f70b0b7984530c882ed3512cc487f3c2dbc22e1af48354dd11574a37c778fb2->leave($__internal_9f70b0b7984530c882ed3512cc487f3c2dbc22e1af48354dd11574a37c778fb2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f8f47e3df90ed7c9f894eb0a14b9e0ea0593e62843e817fbddfa9d6e92e327e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8f47e3df90ed7c9f894eb0a14b9e0ea0593e62843e817fbddfa9d6e92e327e->enter($__internal_2f8f47e3df90ed7c9f894eb0a14b9e0ea0593e62843e817fbddfa9d6e92e327e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fca72ce57067b806e7bb73be8f502f55a4e4d2fd8a92fd034525adb7386500d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca72ce57067b806e7bb73be8f502f55a4e4d2fd8a92fd034525adb7386500d3->enter($__internal_fca72ce57067b806e7bb73be8f502f55a4e4d2fd8a92fd034525adb7386500d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fca72ce57067b806e7bb73be8f502f55a4e4d2fd8a92fd034525adb7386500d3->leave($__internal_fca72ce57067b806e7bb73be8f502f55a4e4d2fd8a92fd034525adb7386500d3_prof);

        
        $__internal_2f8f47e3df90ed7c9f894eb0a14b9e0ea0593e62843e817fbddfa9d6e92e327e->leave($__internal_2f8f47e3df90ed7c9f894eb0a14b9e0ea0593e62843e817fbddfa9d6e92e327e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adea4d5f2cefaf03828248cb04ed69bfdf5406dd8908b9f988642dec9731cdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adea4d5f2cefaf03828248cb04ed69bfdf5406dd8908b9f988642dec9731cdc3->enter($__internal_adea4d5f2cefaf03828248cb04ed69bfdf5406dd8908b9f988642dec9731cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eeecf7d50e300335d7d1b54eed3dc06a537fbe90fa3582c6ffe97bd776af6633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeecf7d50e300335d7d1b54eed3dc06a537fbe90fa3582c6ffe97bd776af6633->enter($__internal_eeecf7d50e300335d7d1b54eed3dc06a537fbe90fa3582c6ffe97bd776af6633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eeecf7d50e300335d7d1b54eed3dc06a537fbe90fa3582c6ffe97bd776af6633->leave($__internal_eeecf7d50e300335d7d1b54eed3dc06a537fbe90fa3582c6ffe97bd776af6633_prof);

        
        $__internal_adea4d5f2cefaf03828248cb04ed69bfdf5406dd8908b9f988642dec9731cdc3->leave($__internal_adea4d5f2cefaf03828248cb04ed69bfdf5406dd8908b9f988642dec9731cdc3_prof);

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
