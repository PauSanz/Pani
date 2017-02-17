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
        $__internal_c2ce2e38eb804926efb9fb786cce391ee48cc02aebe7460527f57b0faebb9ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ce2e38eb804926efb9fb786cce391ee48cc02aebe7460527f57b0faebb9ada->enter($__internal_c2ce2e38eb804926efb9fb786cce391ee48cc02aebe7460527f57b0faebb9ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_059c402f37ca5c0d34aa3552103277b87a3221b924ccc33471ed8627ddff686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059c402f37ca5c0d34aa3552103277b87a3221b924ccc33471ed8627ddff686d->enter($__internal_059c402f37ca5c0d34aa3552103277b87a3221b924ccc33471ed8627ddff686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ce2e38eb804926efb9fb786cce391ee48cc02aebe7460527f57b0faebb9ada->leave($__internal_c2ce2e38eb804926efb9fb786cce391ee48cc02aebe7460527f57b0faebb9ada_prof);

        
        $__internal_059c402f37ca5c0d34aa3552103277b87a3221b924ccc33471ed8627ddff686d->leave($__internal_059c402f37ca5c0d34aa3552103277b87a3221b924ccc33471ed8627ddff686d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1c3c902e19c1764e897aa1ce3681ad1033985f6b40289b35db72c7fd606db6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c3c902e19c1764e897aa1ce3681ad1033985f6b40289b35db72c7fd606db6b->enter($__internal_b1c3c902e19c1764e897aa1ce3681ad1033985f6b40289b35db72c7fd606db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87c9609b5b2a0b77a8e45e7ee469fd9b5de7d24001448573fe64e7cc761cba04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c9609b5b2a0b77a8e45e7ee469fd9b5de7d24001448573fe64e7cc761cba04->enter($__internal_87c9609b5b2a0b77a8e45e7ee469fd9b5de7d24001448573fe64e7cc761cba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_87c9609b5b2a0b77a8e45e7ee469fd9b5de7d24001448573fe64e7cc761cba04->leave($__internal_87c9609b5b2a0b77a8e45e7ee469fd9b5de7d24001448573fe64e7cc761cba04_prof);

        
        $__internal_b1c3c902e19c1764e897aa1ce3681ad1033985f6b40289b35db72c7fd606db6b->leave($__internal_b1c3c902e19c1764e897aa1ce3681ad1033985f6b40289b35db72c7fd606db6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d3b444dbd3a2fcff73a8deb48f0186c31db2f99f6ee1a9773f9b2fa4bf4f6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3b444dbd3a2fcff73a8deb48f0186c31db2f99f6ee1a9773f9b2fa4bf4f6e4->enter($__internal_6d3b444dbd3a2fcff73a8deb48f0186c31db2f99f6ee1a9773f9b2fa4bf4f6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36786cd50e7039137e3f4b318eecb02d0368633b4907a2030234c9fc9577f991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36786cd50e7039137e3f4b318eecb02d0368633b4907a2030234c9fc9577f991->enter($__internal_36786cd50e7039137e3f4b318eecb02d0368633b4907a2030234c9fc9577f991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_36786cd50e7039137e3f4b318eecb02d0368633b4907a2030234c9fc9577f991->leave($__internal_36786cd50e7039137e3f4b318eecb02d0368633b4907a2030234c9fc9577f991_prof);

        
        $__internal_6d3b444dbd3a2fcff73a8deb48f0186c31db2f99f6ee1a9773f9b2fa4bf4f6e4->leave($__internal_6d3b444dbd3a2fcff73a8deb48f0186c31db2f99f6ee1a9773f9b2fa4bf4f6e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d2997512dae28e139204c1b8df713947ff1ed621d015b391b58461e383ecfaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2997512dae28e139204c1b8df713947ff1ed621d015b391b58461e383ecfaf->enter($__internal_2d2997512dae28e139204c1b8df713947ff1ed621d015b391b58461e383ecfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2df530621a0e034617c550d54f5a92ce0ff1ae4121e2ab124af4578db7312eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df530621a0e034617c550d54f5a92ce0ff1ae4121e2ab124af4578db7312eaa->enter($__internal_2df530621a0e034617c550d54f5a92ce0ff1ae4121e2ab124af4578db7312eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2df530621a0e034617c550d54f5a92ce0ff1ae4121e2ab124af4578db7312eaa->leave($__internal_2df530621a0e034617c550d54f5a92ce0ff1ae4121e2ab124af4578db7312eaa_prof);

        
        $__internal_2d2997512dae28e139204c1b8df713947ff1ed621d015b391b58461e383ecfaf->leave($__internal_2d2997512dae28e139204c1b8df713947ff1ed621d015b391b58461e383ecfaf_prof);

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
