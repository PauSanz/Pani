<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_ec6cc7cd8caf111b88a0249d02ea92f6a9675ab989f77a38fb9ad90399c73a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6cc7cd8caf111b88a0249d02ea92f6a9675ab989f77a38fb9ad90399c73a91->enter($__internal_ec6cc7cd8caf111b88a0249d02ea92f6a9675ab989f77a38fb9ad90399c73a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1e3d392dae5ade0af2e0a11057dad203968f36dfc7c05ee0172c33b6cc0b0aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3d392dae5ade0af2e0a11057dad203968f36dfc7c05ee0172c33b6cc0b0aa4->enter($__internal_1e3d392dae5ade0af2e0a11057dad203968f36dfc7c05ee0172c33b6cc0b0aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6cc7cd8caf111b88a0249d02ea92f6a9675ab989f77a38fb9ad90399c73a91->leave($__internal_ec6cc7cd8caf111b88a0249d02ea92f6a9675ab989f77a38fb9ad90399c73a91_prof);

        
        $__internal_1e3d392dae5ade0af2e0a11057dad203968f36dfc7c05ee0172c33b6cc0b0aa4->leave($__internal_1e3d392dae5ade0af2e0a11057dad203968f36dfc7c05ee0172c33b6cc0b0aa4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6891c263cd1b464b21b0c44449b5989edb400a0f624a878f6efbcd401031fad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6891c263cd1b464b21b0c44449b5989edb400a0f624a878f6efbcd401031fad2->enter($__internal_6891c263cd1b464b21b0c44449b5989edb400a0f624a878f6efbcd401031fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb8e5694af6fd63d9fe4efe75f98478e3f2965203eb5a4f1b088aa5b68c02ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8e5694af6fd63d9fe4efe75f98478e3f2965203eb5a4f1b088aa5b68c02ae4->enter($__internal_cb8e5694af6fd63d9fe4efe75f98478e3f2965203eb5a4f1b088aa5b68c02ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cb8e5694af6fd63d9fe4efe75f98478e3f2965203eb5a4f1b088aa5b68c02ae4->leave($__internal_cb8e5694af6fd63d9fe4efe75f98478e3f2965203eb5a4f1b088aa5b68c02ae4_prof);

        
        $__internal_6891c263cd1b464b21b0c44449b5989edb400a0f624a878f6efbcd401031fad2->leave($__internal_6891c263cd1b464b21b0c44449b5989edb400a0f624a878f6efbcd401031fad2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74597333dc0d6bed37d8d474fb2051cb8afc676e74343dc4cf967e05064a2e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74597333dc0d6bed37d8d474fb2051cb8afc676e74343dc4cf967e05064a2e61->enter($__internal_74597333dc0d6bed37d8d474fb2051cb8afc676e74343dc4cf967e05064a2e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37c7a40a94348e3a7c066ae7b2448ca85e8fd4f645ff373d36c6e40922775e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c7a40a94348e3a7c066ae7b2448ca85e8fd4f645ff373d36c6e40922775e13->enter($__internal_37c7a40a94348e3a7c066ae7b2448ca85e8fd4f645ff373d36c6e40922775e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_37c7a40a94348e3a7c066ae7b2448ca85e8fd4f645ff373d36c6e40922775e13->leave($__internal_37c7a40a94348e3a7c066ae7b2448ca85e8fd4f645ff373d36c6e40922775e13_prof);

        
        $__internal_74597333dc0d6bed37d8d474fb2051cb8afc676e74343dc4cf967e05064a2e61->leave($__internal_74597333dc0d6bed37d8d474fb2051cb8afc676e74343dc4cf967e05064a2e61_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c088a6be732e7cb0ac08daf6fe9c4ed7603d0b6cf13e2d0b7d63d767cebdddec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c088a6be732e7cb0ac08daf6fe9c4ed7603d0b6cf13e2d0b7d63d767cebdddec->enter($__internal_c088a6be732e7cb0ac08daf6fe9c4ed7603d0b6cf13e2d0b7d63d767cebdddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_731a574cd30461de3ee47bdd8f1ea07306ff8b5c1780a42bd3ae59f711f4de4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731a574cd30461de3ee47bdd8f1ea07306ff8b5c1780a42bd3ae59f711f4de4b->enter($__internal_731a574cd30461de3ee47bdd8f1ea07306ff8b5c1780a42bd3ae59f711f4de4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_731a574cd30461de3ee47bdd8f1ea07306ff8b5c1780a42bd3ae59f711f4de4b->leave($__internal_731a574cd30461de3ee47bdd8f1ea07306ff8b5c1780a42bd3ae59f711f4de4b_prof);

        
        $__internal_c088a6be732e7cb0ac08daf6fe9c4ed7603d0b6cf13e2d0b7d63d767cebdddec->leave($__internal_c088a6be732e7cb0ac08daf6fe9c4ed7603d0b6cf13e2d0b7d63d767cebdddec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
