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
        $__internal_bdd48134c04f2ea919a3bd6b1e23438a463d7a278adf8717637e9872ecc505dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd48134c04f2ea919a3bd6b1e23438a463d7a278adf8717637e9872ecc505dc->enter($__internal_bdd48134c04f2ea919a3bd6b1e23438a463d7a278adf8717637e9872ecc505dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9b281291df31258783a33e254072cd431f413b254e4e429e8e3db30c162170fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b281291df31258783a33e254072cd431f413b254e4e429e8e3db30c162170fa->enter($__internal_9b281291df31258783a33e254072cd431f413b254e4e429e8e3db30c162170fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd48134c04f2ea919a3bd6b1e23438a463d7a278adf8717637e9872ecc505dc->leave($__internal_bdd48134c04f2ea919a3bd6b1e23438a463d7a278adf8717637e9872ecc505dc_prof);

        
        $__internal_9b281291df31258783a33e254072cd431f413b254e4e429e8e3db30c162170fa->leave($__internal_9b281291df31258783a33e254072cd431f413b254e4e429e8e3db30c162170fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd9ec45011212ce5f6b851b515dd305ee018b520650922d3a0410dd9430c414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9ec45011212ce5f6b851b515dd305ee018b520650922d3a0410dd9430c414d->enter($__internal_dd9ec45011212ce5f6b851b515dd305ee018b520650922d3a0410dd9430c414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1da456588ff76440b4055d270a638f7ab582df40c8c792f78e1adf441df4d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da456588ff76440b4055d270a638f7ab582df40c8c792f78e1adf441df4d7b8->enter($__internal_1da456588ff76440b4055d270a638f7ab582df40c8c792f78e1adf441df4d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1da456588ff76440b4055d270a638f7ab582df40c8c792f78e1adf441df4d7b8->leave($__internal_1da456588ff76440b4055d270a638f7ab582df40c8c792f78e1adf441df4d7b8_prof);

        
        $__internal_dd9ec45011212ce5f6b851b515dd305ee018b520650922d3a0410dd9430c414d->leave($__internal_dd9ec45011212ce5f6b851b515dd305ee018b520650922d3a0410dd9430c414d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61dd5bd2d58b0e04cb5e88c25a9ff38285d498ef42cc65363bc0cbd124861e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dd5bd2d58b0e04cb5e88c25a9ff38285d498ef42cc65363bc0cbd124861e71->enter($__internal_61dd5bd2d58b0e04cb5e88c25a9ff38285d498ef42cc65363bc0cbd124861e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7db075c05c6cfbb0e83c7167666ead6c66c5420ec09f477a89f83a1a8bc3699e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db075c05c6cfbb0e83c7167666ead6c66c5420ec09f477a89f83a1a8bc3699e->enter($__internal_7db075c05c6cfbb0e83c7167666ead6c66c5420ec09f477a89f83a1a8bc3699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7db075c05c6cfbb0e83c7167666ead6c66c5420ec09f477a89f83a1a8bc3699e->leave($__internal_7db075c05c6cfbb0e83c7167666ead6c66c5420ec09f477a89f83a1a8bc3699e_prof);

        
        $__internal_61dd5bd2d58b0e04cb5e88c25a9ff38285d498ef42cc65363bc0cbd124861e71->leave($__internal_61dd5bd2d58b0e04cb5e88c25a9ff38285d498ef42cc65363bc0cbd124861e71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cddb216eb5faf8eea866238958825526978b85af85498b18a59e916fe535986e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddb216eb5faf8eea866238958825526978b85af85498b18a59e916fe535986e->enter($__internal_cddb216eb5faf8eea866238958825526978b85af85498b18a59e916fe535986e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_432015524cd48a29c4485b5808e43757426ca0db5fcb85e52e24c0a71de6290d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432015524cd48a29c4485b5808e43757426ca0db5fcb85e52e24c0a71de6290d->enter($__internal_432015524cd48a29c4485b5808e43757426ca0db5fcb85e52e24c0a71de6290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_432015524cd48a29c4485b5808e43757426ca0db5fcb85e52e24c0a71de6290d->leave($__internal_432015524cd48a29c4485b5808e43757426ca0db5fcb85e52e24c0a71de6290d_prof);

        
        $__internal_cddb216eb5faf8eea866238958825526978b85af85498b18a59e916fe535986e->leave($__internal_cddb216eb5faf8eea866238958825526978b85af85498b18a59e916fe535986e_prof);

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
