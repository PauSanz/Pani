<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_40df67741578d54b35b6004de75a416918301e5588bf5404228bee7b1eb72344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40df67741578d54b35b6004de75a416918301e5588bf5404228bee7b1eb72344->enter($__internal_40df67741578d54b35b6004de75a416918301e5588bf5404228bee7b1eb72344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_31239621c915a2420fb62f81e8f6834068227cf071d785eb4c39b17ed7f729a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31239621c915a2420fb62f81e8f6834068227cf071d785eb4c39b17ed7f729a0->enter($__internal_31239621c915a2420fb62f81e8f6834068227cf071d785eb4c39b17ed7f729a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40df67741578d54b35b6004de75a416918301e5588bf5404228bee7b1eb72344->leave($__internal_40df67741578d54b35b6004de75a416918301e5588bf5404228bee7b1eb72344_prof);

        
        $__internal_31239621c915a2420fb62f81e8f6834068227cf071d785eb4c39b17ed7f729a0->leave($__internal_31239621c915a2420fb62f81e8f6834068227cf071d785eb4c39b17ed7f729a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b53f2a4a5a69eb58dc1ccdc9095bc62404be363801bf4c07232ef8e036000f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53f2a4a5a69eb58dc1ccdc9095bc62404be363801bf4c07232ef8e036000f8f->enter($__internal_b53f2a4a5a69eb58dc1ccdc9095bc62404be363801bf4c07232ef8e036000f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22f31f176e8cec7e15266bb351d6461423195f44025f28fa9487f12c15d166bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f31f176e8cec7e15266bb351d6461423195f44025f28fa9487f12c15d166bc->enter($__internal_22f31f176e8cec7e15266bb351d6461423195f44025f28fa9487f12c15d166bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22f31f176e8cec7e15266bb351d6461423195f44025f28fa9487f12c15d166bc->leave($__internal_22f31f176e8cec7e15266bb351d6461423195f44025f28fa9487f12c15d166bc_prof);

        
        $__internal_b53f2a4a5a69eb58dc1ccdc9095bc62404be363801bf4c07232ef8e036000f8f->leave($__internal_b53f2a4a5a69eb58dc1ccdc9095bc62404be363801bf4c07232ef8e036000f8f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0daecb4dcbb940fddf7aa8f5f26bbc54e44d744705ea0f955cd022809a6e7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0daecb4dcbb940fddf7aa8f5f26bbc54e44d744705ea0f955cd022809a6e7cf->enter($__internal_d0daecb4dcbb940fddf7aa8f5f26bbc54e44d744705ea0f955cd022809a6e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b14d57e61d9cc540db3189c3d564a3505c480e40f77e21fa3aa352f681243405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14d57e61d9cc540db3189c3d564a3505c480e40f77e21fa3aa352f681243405->enter($__internal_b14d57e61d9cc540db3189c3d564a3505c480e40f77e21fa3aa352f681243405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b14d57e61d9cc540db3189c3d564a3505c480e40f77e21fa3aa352f681243405->leave($__internal_b14d57e61d9cc540db3189c3d564a3505c480e40f77e21fa3aa352f681243405_prof);

        
        $__internal_d0daecb4dcbb940fddf7aa8f5f26bbc54e44d744705ea0f955cd022809a6e7cf->leave($__internal_d0daecb4dcbb940fddf7aa8f5f26bbc54e44d744705ea0f955cd022809a6e7cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e5ea614992f3860447846408cb78cd10bfff2fc4e77609ce772ff5da54aafaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5ea614992f3860447846408cb78cd10bfff2fc4e77609ce772ff5da54aafaa->enter($__internal_1e5ea614992f3860447846408cb78cd10bfff2fc4e77609ce772ff5da54aafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a9f972090aba343d5ca391e1927e3ae2753257f30aa1800336ac54522442ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9f972090aba343d5ca391e1927e3ae2753257f30aa1800336ac54522442ce0->enter($__internal_9a9f972090aba343d5ca391e1927e3ae2753257f30aa1800336ac54522442ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a9f972090aba343d5ca391e1927e3ae2753257f30aa1800336ac54522442ce0->leave($__internal_9a9f972090aba343d5ca391e1927e3ae2753257f30aa1800336ac54522442ce0_prof);

        
        $__internal_1e5ea614992f3860447846408cb78cd10bfff2fc4e77609ce772ff5da54aafaa->leave($__internal_1e5ea614992f3860447846408cb78cd10bfff2fc4e77609ce772ff5da54aafaa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
