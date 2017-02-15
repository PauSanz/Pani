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
        $__internal_c5e4d1e0c43eb97d8f0c6ce9d332c7669cade2d412f96cdcbf9da586829a8f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e4d1e0c43eb97d8f0c6ce9d332c7669cade2d412f96cdcbf9da586829a8f8c->enter($__internal_c5e4d1e0c43eb97d8f0c6ce9d332c7669cade2d412f96cdcbf9da586829a8f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b5e306c2ea162026f085ff430fc6048d19bcb572e333033d12dd8dedaf2d662d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e306c2ea162026f085ff430fc6048d19bcb572e333033d12dd8dedaf2d662d->enter($__internal_b5e306c2ea162026f085ff430fc6048d19bcb572e333033d12dd8dedaf2d662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e4d1e0c43eb97d8f0c6ce9d332c7669cade2d412f96cdcbf9da586829a8f8c->leave($__internal_c5e4d1e0c43eb97d8f0c6ce9d332c7669cade2d412f96cdcbf9da586829a8f8c_prof);

        
        $__internal_b5e306c2ea162026f085ff430fc6048d19bcb572e333033d12dd8dedaf2d662d->leave($__internal_b5e306c2ea162026f085ff430fc6048d19bcb572e333033d12dd8dedaf2d662d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d194c56c8ba4bd39c5bf7bb76efca5fed0d7a7ab6ba44c79e25ff101e1d89ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d194c56c8ba4bd39c5bf7bb76efca5fed0d7a7ab6ba44c79e25ff101e1d89ef->enter($__internal_7d194c56c8ba4bd39c5bf7bb76efca5fed0d7a7ab6ba44c79e25ff101e1d89ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d23ed0f8795b1a391d83633eaade66a6decd0cf4d9522b1f5b7f999a17449e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23ed0f8795b1a391d83633eaade66a6decd0cf4d9522b1f5b7f999a17449e65->enter($__internal_d23ed0f8795b1a391d83633eaade66a6decd0cf4d9522b1f5b7f999a17449e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d23ed0f8795b1a391d83633eaade66a6decd0cf4d9522b1f5b7f999a17449e65->leave($__internal_d23ed0f8795b1a391d83633eaade66a6decd0cf4d9522b1f5b7f999a17449e65_prof);

        
        $__internal_7d194c56c8ba4bd39c5bf7bb76efca5fed0d7a7ab6ba44c79e25ff101e1d89ef->leave($__internal_7d194c56c8ba4bd39c5bf7bb76efca5fed0d7a7ab6ba44c79e25ff101e1d89ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89a898b4b4e261f4e17b0aff452b7c8b38d1168d8881892c5fbae0bba196e64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a898b4b4e261f4e17b0aff452b7c8b38d1168d8881892c5fbae0bba196e64d->enter($__internal_89a898b4b4e261f4e17b0aff452b7c8b38d1168d8881892c5fbae0bba196e64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5126aa0aa1aaf043e0ab0e9fba41f50d42d2c7fb74e80699baa4ba4826e90724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5126aa0aa1aaf043e0ab0e9fba41f50d42d2c7fb74e80699baa4ba4826e90724->enter($__internal_5126aa0aa1aaf043e0ab0e9fba41f50d42d2c7fb74e80699baa4ba4826e90724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5126aa0aa1aaf043e0ab0e9fba41f50d42d2c7fb74e80699baa4ba4826e90724->leave($__internal_5126aa0aa1aaf043e0ab0e9fba41f50d42d2c7fb74e80699baa4ba4826e90724_prof);

        
        $__internal_89a898b4b4e261f4e17b0aff452b7c8b38d1168d8881892c5fbae0bba196e64d->leave($__internal_89a898b4b4e261f4e17b0aff452b7c8b38d1168d8881892c5fbae0bba196e64d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5233cb305e7cb6338833cf6bc51c11d2a7d38d5992757a8fbfbfe817105f844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5233cb305e7cb6338833cf6bc51c11d2a7d38d5992757a8fbfbfe817105f844->enter($__internal_d5233cb305e7cb6338833cf6bc51c11d2a7d38d5992757a8fbfbfe817105f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f37c517ea7063e378cf3d3f5599098323ece8d618d180a43bcc934eece15f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f37c517ea7063e378cf3d3f5599098323ece8d618d180a43bcc934eece15f42->enter($__internal_8f37c517ea7063e378cf3d3f5599098323ece8d618d180a43bcc934eece15f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8f37c517ea7063e378cf3d3f5599098323ece8d618d180a43bcc934eece15f42->leave($__internal_8f37c517ea7063e378cf3d3f5599098323ece8d618d180a43bcc934eece15f42_prof);

        
        $__internal_d5233cb305e7cb6338833cf6bc51c11d2a7d38d5992757a8fbfbfe817105f844->leave($__internal_d5233cb305e7cb6338833cf6bc51c11d2a7d38d5992757a8fbfbfe817105f844_prof);

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
