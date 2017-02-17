<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_7b47758ef2429949768489bfd8c436fa3a3dca2f353da7d1344facc0f5c061cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b47758ef2429949768489bfd8c436fa3a3dca2f353da7d1344facc0f5c061cd->enter($__internal_7b47758ef2429949768489bfd8c436fa3a3dca2f353da7d1344facc0f5c061cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2c81f46cd44a305b8ee56e0ac3911f4cba65763f62990f3f1a28bfa7df2e1674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c81f46cd44a305b8ee56e0ac3911f4cba65763f62990f3f1a28bfa7df2e1674->enter($__internal_2c81f46cd44a305b8ee56e0ac3911f4cba65763f62990f3f1a28bfa7df2e1674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b47758ef2429949768489bfd8c436fa3a3dca2f353da7d1344facc0f5c061cd->leave($__internal_7b47758ef2429949768489bfd8c436fa3a3dca2f353da7d1344facc0f5c061cd_prof);

        
        $__internal_2c81f46cd44a305b8ee56e0ac3911f4cba65763f62990f3f1a28bfa7df2e1674->leave($__internal_2c81f46cd44a305b8ee56e0ac3911f4cba65763f62990f3f1a28bfa7df2e1674_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e3e13041d1c14bd1f9c7d2d9d94ebda093f8c3f19d85575c7807038834d14bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e13041d1c14bd1f9c7d2d9d94ebda093f8c3f19d85575c7807038834d14bbf->enter($__internal_e3e13041d1c14bd1f9c7d2d9d94ebda093f8c3f19d85575c7807038834d14bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_213d2f2e0703a9f0c2aa8f9104600914db5b014ca3cd5a24a369a26ba531c70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213d2f2e0703a9f0c2aa8f9104600914db5b014ca3cd5a24a369a26ba531c70e->enter($__internal_213d2f2e0703a9f0c2aa8f9104600914db5b014ca3cd5a24a369a26ba531c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_213d2f2e0703a9f0c2aa8f9104600914db5b014ca3cd5a24a369a26ba531c70e->leave($__internal_213d2f2e0703a9f0c2aa8f9104600914db5b014ca3cd5a24a369a26ba531c70e_prof);

        
        $__internal_e3e13041d1c14bd1f9c7d2d9d94ebda093f8c3f19d85575c7807038834d14bbf->leave($__internal_e3e13041d1c14bd1f9c7d2d9d94ebda093f8c3f19d85575c7807038834d14bbf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1038010d08b0e8419fcd42abc17084e657e8b6b5d1c642d104d0043a69c56d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1038010d08b0e8419fcd42abc17084e657e8b6b5d1c642d104d0043a69c56d1->enter($__internal_f1038010d08b0e8419fcd42abc17084e657e8b6b5d1c642d104d0043a69c56d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e997e638bb590c2a77d273d6e5561270b2fbcc092819e1bab363814fb8e8d0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e997e638bb590c2a77d273d6e5561270b2fbcc092819e1bab363814fb8e8d0a3->enter($__internal_e997e638bb590c2a77d273d6e5561270b2fbcc092819e1bab363814fb8e8d0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e997e638bb590c2a77d273d6e5561270b2fbcc092819e1bab363814fb8e8d0a3->leave($__internal_e997e638bb590c2a77d273d6e5561270b2fbcc092819e1bab363814fb8e8d0a3_prof);

        
        $__internal_f1038010d08b0e8419fcd42abc17084e657e8b6b5d1c642d104d0043a69c56d1->leave($__internal_f1038010d08b0e8419fcd42abc17084e657e8b6b5d1c642d104d0043a69c56d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d50a60cc5e209dd10917e7f8a28eda462d41d25952b4c527854a405497eff1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50a60cc5e209dd10917e7f8a28eda462d41d25952b4c527854a405497eff1f1->enter($__internal_d50a60cc5e209dd10917e7f8a28eda462d41d25952b4c527854a405497eff1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e2aab448c9e9dfada9de4f3b5795d900a36865542bed2f09a775c48472b992c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2aab448c9e9dfada9de4f3b5795d900a36865542bed2f09a775c48472b992c->enter($__internal_0e2aab448c9e9dfada9de4f3b5795d900a36865542bed2f09a775c48472b992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e2aab448c9e9dfada9de4f3b5795d900a36865542bed2f09a775c48472b992c->leave($__internal_0e2aab448c9e9dfada9de4f3b5795d900a36865542bed2f09a775c48472b992c_prof);

        
        $__internal_d50a60cc5e209dd10917e7f8a28eda462d41d25952b4c527854a405497eff1f1->leave($__internal_d50a60cc5e209dd10917e7f8a28eda462d41d25952b4c527854a405497eff1f1_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
