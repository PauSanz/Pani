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
        $__internal_f02de752a689008786b3bf33aa552d4e47390240f9adb459579753c078d2cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02de752a689008786b3bf33aa552d4e47390240f9adb459579753c078d2cd5c->enter($__internal_f02de752a689008786b3bf33aa552d4e47390240f9adb459579753c078d2cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9c305457115b885080ed6446727f002183d20808656397bf31ba28c8d5347c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c305457115b885080ed6446727f002183d20808656397bf31ba28c8d5347c94->enter($__internal_9c305457115b885080ed6446727f002183d20808656397bf31ba28c8d5347c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02de752a689008786b3bf33aa552d4e47390240f9adb459579753c078d2cd5c->leave($__internal_f02de752a689008786b3bf33aa552d4e47390240f9adb459579753c078d2cd5c_prof);

        
        $__internal_9c305457115b885080ed6446727f002183d20808656397bf31ba28c8d5347c94->leave($__internal_9c305457115b885080ed6446727f002183d20808656397bf31ba28c8d5347c94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab8b6c6b45d2339cbb1fc2a06d0439bbe024ab8e75cdfce424b9772b149665a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8b6c6b45d2339cbb1fc2a06d0439bbe024ab8e75cdfce424b9772b149665a6->enter($__internal_ab8b6c6b45d2339cbb1fc2a06d0439bbe024ab8e75cdfce424b9772b149665a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9aed6ab5fa38af8f6b0bcb291ff329480c7545cf0b334f7e273825306e8ad30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aed6ab5fa38af8f6b0bcb291ff329480c7545cf0b334f7e273825306e8ad30c->enter($__internal_9aed6ab5fa38af8f6b0bcb291ff329480c7545cf0b334f7e273825306e8ad30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aed6ab5fa38af8f6b0bcb291ff329480c7545cf0b334f7e273825306e8ad30c->leave($__internal_9aed6ab5fa38af8f6b0bcb291ff329480c7545cf0b334f7e273825306e8ad30c_prof);

        
        $__internal_ab8b6c6b45d2339cbb1fc2a06d0439bbe024ab8e75cdfce424b9772b149665a6->leave($__internal_ab8b6c6b45d2339cbb1fc2a06d0439bbe024ab8e75cdfce424b9772b149665a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2cbbdaf0327f04a5a931510d647b3e7d4a57055a0eeaf3ef4af909dfa80fb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cbbdaf0327f04a5a931510d647b3e7d4a57055a0eeaf3ef4af909dfa80fb22->enter($__internal_c2cbbdaf0327f04a5a931510d647b3e7d4a57055a0eeaf3ef4af909dfa80fb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d63e71a9a792ae42d67b50887acc1b38ba969c21af167d8db1517ddc4146f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d63e71a9a792ae42d67b50887acc1b38ba969c21af167d8db1517ddc4146f2f->enter($__internal_0d63e71a9a792ae42d67b50887acc1b38ba969c21af167d8db1517ddc4146f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d63e71a9a792ae42d67b50887acc1b38ba969c21af167d8db1517ddc4146f2f->leave($__internal_0d63e71a9a792ae42d67b50887acc1b38ba969c21af167d8db1517ddc4146f2f_prof);

        
        $__internal_c2cbbdaf0327f04a5a931510d647b3e7d4a57055a0eeaf3ef4af909dfa80fb22->leave($__internal_c2cbbdaf0327f04a5a931510d647b3e7d4a57055a0eeaf3ef4af909dfa80fb22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30363f764c45b873a7cc44d0aa10f6d3fd498cf2363c8a9bb6f664909eee4cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30363f764c45b873a7cc44d0aa10f6d3fd498cf2363c8a9bb6f664909eee4cbe->enter($__internal_30363f764c45b873a7cc44d0aa10f6d3fd498cf2363c8a9bb6f664909eee4cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91aae5671f2f03a60444685234294c7386a5081ffce460dfd25f4a28240095cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aae5671f2f03a60444685234294c7386a5081ffce460dfd25f4a28240095cd->enter($__internal_91aae5671f2f03a60444685234294c7386a5081ffce460dfd25f4a28240095cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91aae5671f2f03a60444685234294c7386a5081ffce460dfd25f4a28240095cd->leave($__internal_91aae5671f2f03a60444685234294c7386a5081ffce460dfd25f4a28240095cd_prof);

        
        $__internal_30363f764c45b873a7cc44d0aa10f6d3fd498cf2363c8a9bb6f664909eee4cbe->leave($__internal_30363f764c45b873a7cc44d0aa10f6d3fd498cf2363c8a9bb6f664909eee4cbe_prof);

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
