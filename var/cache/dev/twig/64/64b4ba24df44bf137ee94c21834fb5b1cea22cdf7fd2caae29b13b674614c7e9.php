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
        $__internal_cdea746fb5dbcc4ef13ce6fa3d6fc4c6eb41ebdbdda8a28c424b90f9a6cc798a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdea746fb5dbcc4ef13ce6fa3d6fc4c6eb41ebdbdda8a28c424b90f9a6cc798a->enter($__internal_cdea746fb5dbcc4ef13ce6fa3d6fc4c6eb41ebdbdda8a28c424b90f9a6cc798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2b84eee3acb4bdd7880c893336c35f6d9bef7cc630e846b1abd87024642899ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b84eee3acb4bdd7880c893336c35f6d9bef7cc630e846b1abd87024642899ac->enter($__internal_2b84eee3acb4bdd7880c893336c35f6d9bef7cc630e846b1abd87024642899ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdea746fb5dbcc4ef13ce6fa3d6fc4c6eb41ebdbdda8a28c424b90f9a6cc798a->leave($__internal_cdea746fb5dbcc4ef13ce6fa3d6fc4c6eb41ebdbdda8a28c424b90f9a6cc798a_prof);

        
        $__internal_2b84eee3acb4bdd7880c893336c35f6d9bef7cc630e846b1abd87024642899ac->leave($__internal_2b84eee3acb4bdd7880c893336c35f6d9bef7cc630e846b1abd87024642899ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a79a403ef31efaf2167072530a9540f7e5257e7c2a9aca2a37c046173e5e2343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79a403ef31efaf2167072530a9540f7e5257e7c2a9aca2a37c046173e5e2343->enter($__internal_a79a403ef31efaf2167072530a9540f7e5257e7c2a9aca2a37c046173e5e2343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84a70022c922567f5c3bc059f821a2556e3108f9db90e27a601a49b1deb875fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a70022c922567f5c3bc059f821a2556e3108f9db90e27a601a49b1deb875fa->enter($__internal_84a70022c922567f5c3bc059f821a2556e3108f9db90e27a601a49b1deb875fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_84a70022c922567f5c3bc059f821a2556e3108f9db90e27a601a49b1deb875fa->leave($__internal_84a70022c922567f5c3bc059f821a2556e3108f9db90e27a601a49b1deb875fa_prof);

        
        $__internal_a79a403ef31efaf2167072530a9540f7e5257e7c2a9aca2a37c046173e5e2343->leave($__internal_a79a403ef31efaf2167072530a9540f7e5257e7c2a9aca2a37c046173e5e2343_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27bfa45c1ea529de32794818d6943e402fe6a9080195707e8078ad013a76786c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bfa45c1ea529de32794818d6943e402fe6a9080195707e8078ad013a76786c->enter($__internal_27bfa45c1ea529de32794818d6943e402fe6a9080195707e8078ad013a76786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_612f6d048070c626f42bd3563329ff50d89d7f5a4a0cf3d6afedff01df6f246f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612f6d048070c626f42bd3563329ff50d89d7f5a4a0cf3d6afedff01df6f246f->enter($__internal_612f6d048070c626f42bd3563329ff50d89d7f5a4a0cf3d6afedff01df6f246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_612f6d048070c626f42bd3563329ff50d89d7f5a4a0cf3d6afedff01df6f246f->leave($__internal_612f6d048070c626f42bd3563329ff50d89d7f5a4a0cf3d6afedff01df6f246f_prof);

        
        $__internal_27bfa45c1ea529de32794818d6943e402fe6a9080195707e8078ad013a76786c->leave($__internal_27bfa45c1ea529de32794818d6943e402fe6a9080195707e8078ad013a76786c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_062951f8fe7a3697d129832142f30b6e6afef6cad7455062d748047060ae1064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062951f8fe7a3697d129832142f30b6e6afef6cad7455062d748047060ae1064->enter($__internal_062951f8fe7a3697d129832142f30b6e6afef6cad7455062d748047060ae1064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0029a872ea82c7200ca97f37c586af1c56d69f48c431737f45cd0f0ad4ebd961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0029a872ea82c7200ca97f37c586af1c56d69f48c431737f45cd0f0ad4ebd961->enter($__internal_0029a872ea82c7200ca97f37c586af1c56d69f48c431737f45cd0f0ad4ebd961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0029a872ea82c7200ca97f37c586af1c56d69f48c431737f45cd0f0ad4ebd961->leave($__internal_0029a872ea82c7200ca97f37c586af1c56d69f48c431737f45cd0f0ad4ebd961_prof);

        
        $__internal_062951f8fe7a3697d129832142f30b6e6afef6cad7455062d748047060ae1064->leave($__internal_062951f8fe7a3697d129832142f30b6e6afef6cad7455062d748047060ae1064_prof);

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
