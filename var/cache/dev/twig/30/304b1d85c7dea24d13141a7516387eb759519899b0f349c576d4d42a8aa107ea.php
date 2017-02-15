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
        $__internal_27a380b5b1e92e712af4300e2c50ca76a1d56c5db96a103644064e88428efa5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a380b5b1e92e712af4300e2c50ca76a1d56c5db96a103644064e88428efa5a->enter($__internal_27a380b5b1e92e712af4300e2c50ca76a1d56c5db96a103644064e88428efa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_61278fb3f2a72423650fb8740e32f55cf9a019e2b4da89d3b72f7476ebc02d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61278fb3f2a72423650fb8740e32f55cf9a019e2b4da89d3b72f7476ebc02d85->enter($__internal_61278fb3f2a72423650fb8740e32f55cf9a019e2b4da89d3b72f7476ebc02d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27a380b5b1e92e712af4300e2c50ca76a1d56c5db96a103644064e88428efa5a->leave($__internal_27a380b5b1e92e712af4300e2c50ca76a1d56c5db96a103644064e88428efa5a_prof);

        
        $__internal_61278fb3f2a72423650fb8740e32f55cf9a019e2b4da89d3b72f7476ebc02d85->leave($__internal_61278fb3f2a72423650fb8740e32f55cf9a019e2b4da89d3b72f7476ebc02d85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91fd0e07373e1d5b55a499fceb51a0c639a15d94ca55a6e80e33f0bb5ac493ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fd0e07373e1d5b55a499fceb51a0c639a15d94ca55a6e80e33f0bb5ac493ae->enter($__internal_91fd0e07373e1d5b55a499fceb51a0c639a15d94ca55a6e80e33f0bb5ac493ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ad186c336f776fcb42298019c32e735468a1b9621833c8e509ebd575ca297d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad186c336f776fcb42298019c32e735468a1b9621833c8e509ebd575ca297d74->enter($__internal_ad186c336f776fcb42298019c32e735468a1b9621833c8e509ebd575ca297d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad186c336f776fcb42298019c32e735468a1b9621833c8e509ebd575ca297d74->leave($__internal_ad186c336f776fcb42298019c32e735468a1b9621833c8e509ebd575ca297d74_prof);

        
        $__internal_91fd0e07373e1d5b55a499fceb51a0c639a15d94ca55a6e80e33f0bb5ac493ae->leave($__internal_91fd0e07373e1d5b55a499fceb51a0c639a15d94ca55a6e80e33f0bb5ac493ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1082c110c9f54c4ecff9e33d059d5c66f21848196e878039b40c6b8bfa4ae70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1082c110c9f54c4ecff9e33d059d5c66f21848196e878039b40c6b8bfa4ae70d->enter($__internal_1082c110c9f54c4ecff9e33d059d5c66f21848196e878039b40c6b8bfa4ae70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_167d09c7b7ba34a7c20614289d3e0f711ff59c03b0c0373dd167d2684acbeca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167d09c7b7ba34a7c20614289d3e0f711ff59c03b0c0373dd167d2684acbeca6->enter($__internal_167d09c7b7ba34a7c20614289d3e0f711ff59c03b0c0373dd167d2684acbeca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_167d09c7b7ba34a7c20614289d3e0f711ff59c03b0c0373dd167d2684acbeca6->leave($__internal_167d09c7b7ba34a7c20614289d3e0f711ff59c03b0c0373dd167d2684acbeca6_prof);

        
        $__internal_1082c110c9f54c4ecff9e33d059d5c66f21848196e878039b40c6b8bfa4ae70d->leave($__internal_1082c110c9f54c4ecff9e33d059d5c66f21848196e878039b40c6b8bfa4ae70d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8eecb611c5e6c898545f303f8c03cc87b99047ae2f723b0f1c2af68983806882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eecb611c5e6c898545f303f8c03cc87b99047ae2f723b0f1c2af68983806882->enter($__internal_8eecb611c5e6c898545f303f8c03cc87b99047ae2f723b0f1c2af68983806882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cef9280a158f848d9f8a1e228c7f1205aefff2defadd045eb7eafc9416ebfec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef9280a158f848d9f8a1e228c7f1205aefff2defadd045eb7eafc9416ebfec0->enter($__internal_cef9280a158f848d9f8a1e228c7f1205aefff2defadd045eb7eafc9416ebfec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cef9280a158f848d9f8a1e228c7f1205aefff2defadd045eb7eafc9416ebfec0->leave($__internal_cef9280a158f848d9f8a1e228c7f1205aefff2defadd045eb7eafc9416ebfec0_prof);

        
        $__internal_8eecb611c5e6c898545f303f8c03cc87b99047ae2f723b0f1c2af68983806882->leave($__internal_8eecb611c5e6c898545f303f8c03cc87b99047ae2f723b0f1c2af68983806882_prof);

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
