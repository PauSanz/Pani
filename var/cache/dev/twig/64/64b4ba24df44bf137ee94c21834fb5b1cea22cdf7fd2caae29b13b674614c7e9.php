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
        $__internal_e508ccf77b381edd1c61408449ce0cb0df416c6a8abf76e3ee20d9bfcfbc55ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e508ccf77b381edd1c61408449ce0cb0df416c6a8abf76e3ee20d9bfcfbc55ed->enter($__internal_e508ccf77b381edd1c61408449ce0cb0df416c6a8abf76e3ee20d9bfcfbc55ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ea6b2308dfd81f4caa282e78b1d318c7e4e204cf167d77b693b1a4079970fcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6b2308dfd81f4caa282e78b1d318c7e4e204cf167d77b693b1a4079970fcc5->enter($__internal_ea6b2308dfd81f4caa282e78b1d318c7e4e204cf167d77b693b1a4079970fcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e508ccf77b381edd1c61408449ce0cb0df416c6a8abf76e3ee20d9bfcfbc55ed->leave($__internal_e508ccf77b381edd1c61408449ce0cb0df416c6a8abf76e3ee20d9bfcfbc55ed_prof);

        
        $__internal_ea6b2308dfd81f4caa282e78b1d318c7e4e204cf167d77b693b1a4079970fcc5->leave($__internal_ea6b2308dfd81f4caa282e78b1d318c7e4e204cf167d77b693b1a4079970fcc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_890daa6286b9df93488e0de552fd93735d3751a0eb5bbb70770e3e45d597f4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890daa6286b9df93488e0de552fd93735d3751a0eb5bbb70770e3e45d597f4ba->enter($__internal_890daa6286b9df93488e0de552fd93735d3751a0eb5bbb70770e3e45d597f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99c864268d46778f138c38a9f31823b728b02aad676d7f28f7d7eab5c57aac75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c864268d46778f138c38a9f31823b728b02aad676d7f28f7d7eab5c57aac75->enter($__internal_99c864268d46778f138c38a9f31823b728b02aad676d7f28f7d7eab5c57aac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_99c864268d46778f138c38a9f31823b728b02aad676d7f28f7d7eab5c57aac75->leave($__internal_99c864268d46778f138c38a9f31823b728b02aad676d7f28f7d7eab5c57aac75_prof);

        
        $__internal_890daa6286b9df93488e0de552fd93735d3751a0eb5bbb70770e3e45d597f4ba->leave($__internal_890daa6286b9df93488e0de552fd93735d3751a0eb5bbb70770e3e45d597f4ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0838da782aabfe199765be55e2e5ad8e60a64e6682a0867cef56a0affffdbaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0838da782aabfe199765be55e2e5ad8e60a64e6682a0867cef56a0affffdbaea->enter($__internal_0838da782aabfe199765be55e2e5ad8e60a64e6682a0867cef56a0affffdbaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09132db546824f99bfd5b04cb990d5a59479e2d860fcbcad162fe18522b274fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09132db546824f99bfd5b04cb990d5a59479e2d860fcbcad162fe18522b274fa->enter($__internal_09132db546824f99bfd5b04cb990d5a59479e2d860fcbcad162fe18522b274fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_09132db546824f99bfd5b04cb990d5a59479e2d860fcbcad162fe18522b274fa->leave($__internal_09132db546824f99bfd5b04cb990d5a59479e2d860fcbcad162fe18522b274fa_prof);

        
        $__internal_0838da782aabfe199765be55e2e5ad8e60a64e6682a0867cef56a0affffdbaea->leave($__internal_0838da782aabfe199765be55e2e5ad8e60a64e6682a0867cef56a0affffdbaea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2032bdfd9120c6df2bbf5ded4586f3cf3e3209dd1e43a3feb3f735e24e9df167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2032bdfd9120c6df2bbf5ded4586f3cf3e3209dd1e43a3feb3f735e24e9df167->enter($__internal_2032bdfd9120c6df2bbf5ded4586f3cf3e3209dd1e43a3feb3f735e24e9df167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dac855e8f9cdf5c76970045d1c9eaec83f8f8b5721207d46e7fea12a69d0548f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac855e8f9cdf5c76970045d1c9eaec83f8f8b5721207d46e7fea12a69d0548f->enter($__internal_dac855e8f9cdf5c76970045d1c9eaec83f8f8b5721207d46e7fea12a69d0548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dac855e8f9cdf5c76970045d1c9eaec83f8f8b5721207d46e7fea12a69d0548f->leave($__internal_dac855e8f9cdf5c76970045d1c9eaec83f8f8b5721207d46e7fea12a69d0548f_prof);

        
        $__internal_2032bdfd9120c6df2bbf5ded4586f3cf3e3209dd1e43a3feb3f735e24e9df167->leave($__internal_2032bdfd9120c6df2bbf5ded4586f3cf3e3209dd1e43a3feb3f735e24e9df167_prof);

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
