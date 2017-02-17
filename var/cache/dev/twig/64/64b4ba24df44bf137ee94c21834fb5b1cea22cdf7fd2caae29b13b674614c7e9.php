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
        $__internal_f4aeae5910cdd6a88d1e852de86e75b9dc4c5cc034fcf77a80617c0ca8ca1f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4aeae5910cdd6a88d1e852de86e75b9dc4c5cc034fcf77a80617c0ca8ca1f79->enter($__internal_f4aeae5910cdd6a88d1e852de86e75b9dc4c5cc034fcf77a80617c0ca8ca1f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff94f6d31194da84279ae02d16ca3eec7a423cdf67832dff8c54bfbb43447c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff94f6d31194da84279ae02d16ca3eec7a423cdf67832dff8c54bfbb43447c60->enter($__internal_ff94f6d31194da84279ae02d16ca3eec7a423cdf67832dff8c54bfbb43447c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4aeae5910cdd6a88d1e852de86e75b9dc4c5cc034fcf77a80617c0ca8ca1f79->leave($__internal_f4aeae5910cdd6a88d1e852de86e75b9dc4c5cc034fcf77a80617c0ca8ca1f79_prof);

        
        $__internal_ff94f6d31194da84279ae02d16ca3eec7a423cdf67832dff8c54bfbb43447c60->leave($__internal_ff94f6d31194da84279ae02d16ca3eec7a423cdf67832dff8c54bfbb43447c60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6ff9aa565a267651730031bfd929dcbc5fe826df0d5017aef7b3b8b412ae12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ff9aa565a267651730031bfd929dcbc5fe826df0d5017aef7b3b8b412ae12a->enter($__internal_f6ff9aa565a267651730031bfd929dcbc5fe826df0d5017aef7b3b8b412ae12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e2d51afaf4a9c25056c49e1ea17f6543dcdad4812597042a59b238b9616d41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2d51afaf4a9c25056c49e1ea17f6543dcdad4812597042a59b238b9616d41f->enter($__internal_6e2d51afaf4a9c25056c49e1ea17f6543dcdad4812597042a59b238b9616d41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6e2d51afaf4a9c25056c49e1ea17f6543dcdad4812597042a59b238b9616d41f->leave($__internal_6e2d51afaf4a9c25056c49e1ea17f6543dcdad4812597042a59b238b9616d41f_prof);

        
        $__internal_f6ff9aa565a267651730031bfd929dcbc5fe826df0d5017aef7b3b8b412ae12a->leave($__internal_f6ff9aa565a267651730031bfd929dcbc5fe826df0d5017aef7b3b8b412ae12a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f6b79a8fe566c90b2d7cc03e587843b7a275817aae2be1f1eb52f3a4125945e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b79a8fe566c90b2d7cc03e587843b7a275817aae2be1f1eb52f3a4125945e3->enter($__internal_f6b79a8fe566c90b2d7cc03e587843b7a275817aae2be1f1eb52f3a4125945e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bbcc0f91abb4e149bad3d6e63fa8bac8ed0134c534c097bd9425a786e24bb5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcc0f91abb4e149bad3d6e63fa8bac8ed0134c534c097bd9425a786e24bb5da->enter($__internal_bbcc0f91abb4e149bad3d6e63fa8bac8ed0134c534c097bd9425a786e24bb5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bbcc0f91abb4e149bad3d6e63fa8bac8ed0134c534c097bd9425a786e24bb5da->leave($__internal_bbcc0f91abb4e149bad3d6e63fa8bac8ed0134c534c097bd9425a786e24bb5da_prof);

        
        $__internal_f6b79a8fe566c90b2d7cc03e587843b7a275817aae2be1f1eb52f3a4125945e3->leave($__internal_f6b79a8fe566c90b2d7cc03e587843b7a275817aae2be1f1eb52f3a4125945e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4edd1ade688aa9fab183a22c6bde404924cdba399c6611bce5ea9a5514ca77bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edd1ade688aa9fab183a22c6bde404924cdba399c6611bce5ea9a5514ca77bb->enter($__internal_4edd1ade688aa9fab183a22c6bde404924cdba399c6611bce5ea9a5514ca77bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bfd09c41d033ed9199bd5752e81c7e2ccd9e0675f5cc729a79214da9b73c82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfd09c41d033ed9199bd5752e81c7e2ccd9e0675f5cc729a79214da9b73c82d->enter($__internal_2bfd09c41d033ed9199bd5752e81c7e2ccd9e0675f5cc729a79214da9b73c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2bfd09c41d033ed9199bd5752e81c7e2ccd9e0675f5cc729a79214da9b73c82d->leave($__internal_2bfd09c41d033ed9199bd5752e81c7e2ccd9e0675f5cc729a79214da9b73c82d_prof);

        
        $__internal_4edd1ade688aa9fab183a22c6bde404924cdba399c6611bce5ea9a5514ca77bb->leave($__internal_4edd1ade688aa9fab183a22c6bde404924cdba399c6611bce5ea9a5514ca77bb_prof);

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
