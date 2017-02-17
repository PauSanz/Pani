<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5145ff72f6a3e76e148ff39b58ac40e49140d53b1948a05da82a690f8b1e8636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1bda9ff2de2ab0067bff38093008adb0b718a6af5d69c2ce16142afc8ca6239a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bda9ff2de2ab0067bff38093008adb0b718a6af5d69c2ce16142afc8ca6239a->enter($__internal_1bda9ff2de2ab0067bff38093008adb0b718a6af5d69c2ce16142afc8ca6239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2a1385ef308c0b6b7f312cb9940badc91d11c34d2a7d6f35f7a93b0d4236ae73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1385ef308c0b6b7f312cb9940badc91d11c34d2a7d6f35f7a93b0d4236ae73->enter($__internal_2a1385ef308c0b6b7f312cb9940badc91d11c34d2a7d6f35f7a93b0d4236ae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bda9ff2de2ab0067bff38093008adb0b718a6af5d69c2ce16142afc8ca6239a->leave($__internal_1bda9ff2de2ab0067bff38093008adb0b718a6af5d69c2ce16142afc8ca6239a_prof);

        
        $__internal_2a1385ef308c0b6b7f312cb9940badc91d11c34d2a7d6f35f7a93b0d4236ae73->leave($__internal_2a1385ef308c0b6b7f312cb9940badc91d11c34d2a7d6f35f7a93b0d4236ae73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_620291376dcdf698442887f0b1fda5b6db4a77ce26ec3d707fedc1c7862e8123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620291376dcdf698442887f0b1fda5b6db4a77ce26ec3d707fedc1c7862e8123->enter($__internal_620291376dcdf698442887f0b1fda5b6db4a77ce26ec3d707fedc1c7862e8123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27092580c5f0aa95799640714c321dd788fd7f6fe210aa6ee492b708e53637cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27092580c5f0aa95799640714c321dd788fd7f6fe210aa6ee492b708e53637cc->enter($__internal_27092580c5f0aa95799640714c321dd788fd7f6fe210aa6ee492b708e53637cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_27092580c5f0aa95799640714c321dd788fd7f6fe210aa6ee492b708e53637cc->leave($__internal_27092580c5f0aa95799640714c321dd788fd7f6fe210aa6ee492b708e53637cc_prof);

        
        $__internal_620291376dcdf698442887f0b1fda5b6db4a77ce26ec3d707fedc1c7862e8123->leave($__internal_620291376dcdf698442887f0b1fda5b6db4a77ce26ec3d707fedc1c7862e8123_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ca56d67950389f30e22254e20980839a900b60e9f5380154c1a85050b7b2654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca56d67950389f30e22254e20980839a900b60e9f5380154c1a85050b7b2654->enter($__internal_3ca56d67950389f30e22254e20980839a900b60e9f5380154c1a85050b7b2654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e80e8767075fe30d27b861c481cc5ae48fa34bd1a344ce0392f42b76f0dea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e80e8767075fe30d27b861c481cc5ae48fa34bd1a344ce0392f42b76f0dea44->enter($__internal_3e80e8767075fe30d27b861c481cc5ae48fa34bd1a344ce0392f42b76f0dea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3e80e8767075fe30d27b861c481cc5ae48fa34bd1a344ce0392f42b76f0dea44->leave($__internal_3e80e8767075fe30d27b861c481cc5ae48fa34bd1a344ce0392f42b76f0dea44_prof);

        
        $__internal_3ca56d67950389f30e22254e20980839a900b60e9f5380154c1a85050b7b2654->leave($__internal_3ca56d67950389f30e22254e20980839a900b60e9f5380154c1a85050b7b2654_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b02326021fc969bda1a3447972290e7e8227c2ea3854178e6901b73393fc575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b02326021fc969bda1a3447972290e7e8227c2ea3854178e6901b73393fc575->enter($__internal_8b02326021fc969bda1a3447972290e7e8227c2ea3854178e6901b73393fc575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b53a3d017e400f07b788d1d1ed9d9467a82a5d2ce0a0d70d0d00cdfe2250874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b53a3d017e400f07b788d1d1ed9d9467a82a5d2ce0a0d70d0d00cdfe2250874->enter($__internal_1b53a3d017e400f07b788d1d1ed9d9467a82a5d2ce0a0d70d0d00cdfe2250874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1b53a3d017e400f07b788d1d1ed9d9467a82a5d2ce0a0d70d0d00cdfe2250874->leave($__internal_1b53a3d017e400f07b788d1d1ed9d9467a82a5d2ce0a0d70d0d00cdfe2250874_prof);

        
        $__internal_8b02326021fc969bda1a3447972290e7e8227c2ea3854178e6901b73393fc575->leave($__internal_8b02326021fc969bda1a3447972290e7e8227c2ea3854178e6901b73393fc575_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
