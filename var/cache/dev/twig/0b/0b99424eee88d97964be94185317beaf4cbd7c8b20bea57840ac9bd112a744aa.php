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
        $__internal_199f89f0d7e08685e8d1761a5926ab499d7e62f370aea221b2cbd7a6a9dbb1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199f89f0d7e08685e8d1761a5926ab499d7e62f370aea221b2cbd7a6a9dbb1f3->enter($__internal_199f89f0d7e08685e8d1761a5926ab499d7e62f370aea221b2cbd7a6a9dbb1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4b08940e721b69e15e0d7ad92c6eaad168aa78ea3ed0515f70c8faefd32700ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b08940e721b69e15e0d7ad92c6eaad168aa78ea3ed0515f70c8faefd32700ef->enter($__internal_4b08940e721b69e15e0d7ad92c6eaad168aa78ea3ed0515f70c8faefd32700ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199f89f0d7e08685e8d1761a5926ab499d7e62f370aea221b2cbd7a6a9dbb1f3->leave($__internal_199f89f0d7e08685e8d1761a5926ab499d7e62f370aea221b2cbd7a6a9dbb1f3_prof);

        
        $__internal_4b08940e721b69e15e0d7ad92c6eaad168aa78ea3ed0515f70c8faefd32700ef->leave($__internal_4b08940e721b69e15e0d7ad92c6eaad168aa78ea3ed0515f70c8faefd32700ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a49a8a4388a4cdae2fd04ece0b7ac57e2f9ff5e61345d9e275e7ccd4a002698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a49a8a4388a4cdae2fd04ece0b7ac57e2f9ff5e61345d9e275e7ccd4a002698->enter($__internal_0a49a8a4388a4cdae2fd04ece0b7ac57e2f9ff5e61345d9e275e7ccd4a002698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e90c6aa699fcc9b1bce0415364f7bf9ea86cebf860d06f5f40f8f402d45306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e90c6aa699fcc9b1bce0415364f7bf9ea86cebf860d06f5f40f8f402d45306a->enter($__internal_8e90c6aa699fcc9b1bce0415364f7bf9ea86cebf860d06f5f40f8f402d45306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e90c6aa699fcc9b1bce0415364f7bf9ea86cebf860d06f5f40f8f402d45306a->leave($__internal_8e90c6aa699fcc9b1bce0415364f7bf9ea86cebf860d06f5f40f8f402d45306a_prof);

        
        $__internal_0a49a8a4388a4cdae2fd04ece0b7ac57e2f9ff5e61345d9e275e7ccd4a002698->leave($__internal_0a49a8a4388a4cdae2fd04ece0b7ac57e2f9ff5e61345d9e275e7ccd4a002698_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca25eb78770033184e74ec7145a6143e6c7694cfe70344d0751fd86040f8cf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca25eb78770033184e74ec7145a6143e6c7694cfe70344d0751fd86040f8cf71->enter($__internal_ca25eb78770033184e74ec7145a6143e6c7694cfe70344d0751fd86040f8cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_280ffdaf942245dde66c066e4c8cfd566c4658e4fe6d5a2598c22f8ba5224153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280ffdaf942245dde66c066e4c8cfd566c4658e4fe6d5a2598c22f8ba5224153->enter($__internal_280ffdaf942245dde66c066e4c8cfd566c4658e4fe6d5a2598c22f8ba5224153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_280ffdaf942245dde66c066e4c8cfd566c4658e4fe6d5a2598c22f8ba5224153->leave($__internal_280ffdaf942245dde66c066e4c8cfd566c4658e4fe6d5a2598c22f8ba5224153_prof);

        
        $__internal_ca25eb78770033184e74ec7145a6143e6c7694cfe70344d0751fd86040f8cf71->leave($__internal_ca25eb78770033184e74ec7145a6143e6c7694cfe70344d0751fd86040f8cf71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6468ae1fa2f4c91bd6be3142a16d91894caa7a7cb403266de7c9c8bbe4f95e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6468ae1fa2f4c91bd6be3142a16d91894caa7a7cb403266de7c9c8bbe4f95e9c->enter($__internal_6468ae1fa2f4c91bd6be3142a16d91894caa7a7cb403266de7c9c8bbe4f95e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43cdcceda04dce1d7e18870f6fa0b7ca6c0d03baf2a0d8d0df21f1d39ac52ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cdcceda04dce1d7e18870f6fa0b7ca6c0d03baf2a0d8d0df21f1d39ac52ac7->enter($__internal_43cdcceda04dce1d7e18870f6fa0b7ca6c0d03baf2a0d8d0df21f1d39ac52ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43cdcceda04dce1d7e18870f6fa0b7ca6c0d03baf2a0d8d0df21f1d39ac52ac7->leave($__internal_43cdcceda04dce1d7e18870f6fa0b7ca6c0d03baf2a0d8d0df21f1d39ac52ac7_prof);

        
        $__internal_6468ae1fa2f4c91bd6be3142a16d91894caa7a7cb403266de7c9c8bbe4f95e9c->leave($__internal_6468ae1fa2f4c91bd6be3142a16d91894caa7a7cb403266de7c9c8bbe4f95e9c_prof);

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
