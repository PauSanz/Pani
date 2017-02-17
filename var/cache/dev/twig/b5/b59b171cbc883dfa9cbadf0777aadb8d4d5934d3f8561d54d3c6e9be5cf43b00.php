<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b61b6d4b2311c6a1b78b3f98bdff4cbcf7218a103aabcdd7a573ad5b5daaf7e8 extends Twig_Template
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
        $__internal_340b1452972d4d6d9a87db67342f485d7c76229eeda3f2521fac478624723657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340b1452972d4d6d9a87db67342f485d7c76229eeda3f2521fac478624723657->enter($__internal_340b1452972d4d6d9a87db67342f485d7c76229eeda3f2521fac478624723657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1aa70d00fa67d38c091ee060477cd41833c599153d1d84877a258112a4a47bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa70d00fa67d38c091ee060477cd41833c599153d1d84877a258112a4a47bc9->enter($__internal_1aa70d00fa67d38c091ee060477cd41833c599153d1d84877a258112a4a47bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340b1452972d4d6d9a87db67342f485d7c76229eeda3f2521fac478624723657->leave($__internal_340b1452972d4d6d9a87db67342f485d7c76229eeda3f2521fac478624723657_prof);

        
        $__internal_1aa70d00fa67d38c091ee060477cd41833c599153d1d84877a258112a4a47bc9->leave($__internal_1aa70d00fa67d38c091ee060477cd41833c599153d1d84877a258112a4a47bc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6eb52e27334754753f3e24e0fb3c7b1b8f7fa5936794a2256645713a4d35f334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb52e27334754753f3e24e0fb3c7b1b8f7fa5936794a2256645713a4d35f334->enter($__internal_6eb52e27334754753f3e24e0fb3c7b1b8f7fa5936794a2256645713a4d35f334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19a99a0e0ae5f53e80a3fd6ed09f2a4f35b8b226a5c37f7cc17273ccc8f03028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a99a0e0ae5f53e80a3fd6ed09f2a4f35b8b226a5c37f7cc17273ccc8f03028->enter($__internal_19a99a0e0ae5f53e80a3fd6ed09f2a4f35b8b226a5c37f7cc17273ccc8f03028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19a99a0e0ae5f53e80a3fd6ed09f2a4f35b8b226a5c37f7cc17273ccc8f03028->leave($__internal_19a99a0e0ae5f53e80a3fd6ed09f2a4f35b8b226a5c37f7cc17273ccc8f03028_prof);

        
        $__internal_6eb52e27334754753f3e24e0fb3c7b1b8f7fa5936794a2256645713a4d35f334->leave($__internal_6eb52e27334754753f3e24e0fb3c7b1b8f7fa5936794a2256645713a4d35f334_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd3d12eb8c3338896aeff20ae0f6e6c16abb06864c752e31e9000063318ea9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3d12eb8c3338896aeff20ae0f6e6c16abb06864c752e31e9000063318ea9b1->enter($__internal_fd3d12eb8c3338896aeff20ae0f6e6c16abb06864c752e31e9000063318ea9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e890fadb8edd3d8b9d11caffaa8f3abf8b609a7ad859b7893e256c5d04b774e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e890fadb8edd3d8b9d11caffaa8f3abf8b609a7ad859b7893e256c5d04b774e->enter($__internal_4e890fadb8edd3d8b9d11caffaa8f3abf8b609a7ad859b7893e256c5d04b774e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4e890fadb8edd3d8b9d11caffaa8f3abf8b609a7ad859b7893e256c5d04b774e->leave($__internal_4e890fadb8edd3d8b9d11caffaa8f3abf8b609a7ad859b7893e256c5d04b774e_prof);

        
        $__internal_fd3d12eb8c3338896aeff20ae0f6e6c16abb06864c752e31e9000063318ea9b1->leave($__internal_fd3d12eb8c3338896aeff20ae0f6e6c16abb06864c752e31e9000063318ea9b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7414c877064d86606a449f0c99d28e650d29bff2ecd1bfc124a32c466d45eb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7414c877064d86606a449f0c99d28e650d29bff2ecd1bfc124a32c466d45eb69->enter($__internal_7414c877064d86606a449f0c99d28e650d29bff2ecd1bfc124a32c466d45eb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5c8d1a39699f1c364fe0a4ef75c900061a078af9dc0fd8dea82bd8f6b4457aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c8d1a39699f1c364fe0a4ef75c900061a078af9dc0fd8dea82bd8f6b4457aa->enter($__internal_f5c8d1a39699f1c364fe0a4ef75c900061a078af9dc0fd8dea82bd8f6b4457aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f5c8d1a39699f1c364fe0a4ef75c900061a078af9dc0fd8dea82bd8f6b4457aa->leave($__internal_f5c8d1a39699f1c364fe0a4ef75c900061a078af9dc0fd8dea82bd8f6b4457aa_prof);

        
        $__internal_7414c877064d86606a449f0c99d28e650d29bff2ecd1bfc124a32c466d45eb69->leave($__internal_7414c877064d86606a449f0c99d28e650d29bff2ecd1bfc124a32c466d45eb69_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
