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
        $__internal_03947041eb9ba58ca17eedc20789fc3ec61ed06bac6064c6c9db52dbc16da5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03947041eb9ba58ca17eedc20789fc3ec61ed06bac6064c6c9db52dbc16da5fb->enter($__internal_03947041eb9ba58ca17eedc20789fc3ec61ed06bac6064c6c9db52dbc16da5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5b387cd667130b0967a8e5d5c93560f08ca2fc6bfa0ee29de6bdc214669c8dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b387cd667130b0967a8e5d5c93560f08ca2fc6bfa0ee29de6bdc214669c8dae->enter($__internal_5b387cd667130b0967a8e5d5c93560f08ca2fc6bfa0ee29de6bdc214669c8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03947041eb9ba58ca17eedc20789fc3ec61ed06bac6064c6c9db52dbc16da5fb->leave($__internal_03947041eb9ba58ca17eedc20789fc3ec61ed06bac6064c6c9db52dbc16da5fb_prof);

        
        $__internal_5b387cd667130b0967a8e5d5c93560f08ca2fc6bfa0ee29de6bdc214669c8dae->leave($__internal_5b387cd667130b0967a8e5d5c93560f08ca2fc6bfa0ee29de6bdc214669c8dae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_806e12e38445312c21e2f4f50f83b1d1a114496ea39af185e67c7a9ab32a54d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806e12e38445312c21e2f4f50f83b1d1a114496ea39af185e67c7a9ab32a54d4->enter($__internal_806e12e38445312c21e2f4f50f83b1d1a114496ea39af185e67c7a9ab32a54d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e846939d3761f54a6d318fb8c3cbe22051e0a7a5f4e8241fb442235a5309d65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e846939d3761f54a6d318fb8c3cbe22051e0a7a5f4e8241fb442235a5309d65c->enter($__internal_e846939d3761f54a6d318fb8c3cbe22051e0a7a5f4e8241fb442235a5309d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e846939d3761f54a6d318fb8c3cbe22051e0a7a5f4e8241fb442235a5309d65c->leave($__internal_e846939d3761f54a6d318fb8c3cbe22051e0a7a5f4e8241fb442235a5309d65c_prof);

        
        $__internal_806e12e38445312c21e2f4f50f83b1d1a114496ea39af185e67c7a9ab32a54d4->leave($__internal_806e12e38445312c21e2f4f50f83b1d1a114496ea39af185e67c7a9ab32a54d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57fef8fadd7bd49301bcc28b7a990e7030990debdf96f784cca176a090417014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fef8fadd7bd49301bcc28b7a990e7030990debdf96f784cca176a090417014->enter($__internal_57fef8fadd7bd49301bcc28b7a990e7030990debdf96f784cca176a090417014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c97c0d559b4313aab7fda58937e765c82adb2aba00cdb40865550d294a9d58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c97c0d559b4313aab7fda58937e765c82adb2aba00cdb40865550d294a9d58c->enter($__internal_2c97c0d559b4313aab7fda58937e765c82adb2aba00cdb40865550d294a9d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c97c0d559b4313aab7fda58937e765c82adb2aba00cdb40865550d294a9d58c->leave($__internal_2c97c0d559b4313aab7fda58937e765c82adb2aba00cdb40865550d294a9d58c_prof);

        
        $__internal_57fef8fadd7bd49301bcc28b7a990e7030990debdf96f784cca176a090417014->leave($__internal_57fef8fadd7bd49301bcc28b7a990e7030990debdf96f784cca176a090417014_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11df5d8a547f0f16819d4c17f7cc904b8d8bd02f81e7a250a08041b51a9ed1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11df5d8a547f0f16819d4c17f7cc904b8d8bd02f81e7a250a08041b51a9ed1fe->enter($__internal_11df5d8a547f0f16819d4c17f7cc904b8d8bd02f81e7a250a08041b51a9ed1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3958dfa7bb4b02f54b708439d37e842824cd54ced11c01bd03ffa0087333444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3958dfa7bb4b02f54b708439d37e842824cd54ced11c01bd03ffa0087333444->enter($__internal_e3958dfa7bb4b02f54b708439d37e842824cd54ced11c01bd03ffa0087333444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e3958dfa7bb4b02f54b708439d37e842824cd54ced11c01bd03ffa0087333444->leave($__internal_e3958dfa7bb4b02f54b708439d37e842824cd54ced11c01bd03ffa0087333444_prof);

        
        $__internal_11df5d8a547f0f16819d4c17f7cc904b8d8bd02f81e7a250a08041b51a9ed1fe->leave($__internal_11df5d8a547f0f16819d4c17f7cc904b8d8bd02f81e7a250a08041b51a9ed1fe_prof);

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
