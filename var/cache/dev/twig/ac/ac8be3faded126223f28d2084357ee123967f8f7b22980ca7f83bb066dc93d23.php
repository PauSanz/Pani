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
        $__internal_ad9999700b1ce01b11a521b4ab816f60e276d153233e84cb939b78e972e58330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9999700b1ce01b11a521b4ab816f60e276d153233e84cb939b78e972e58330->enter($__internal_ad9999700b1ce01b11a521b4ab816f60e276d153233e84cb939b78e972e58330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7aaf43352a76c62de8b0b62f36839b7c16f36ca6b56282cc8ff645af0558066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aaf43352a76c62de8b0b62f36839b7c16f36ca6b56282cc8ff645af0558066->enter($__internal_d7aaf43352a76c62de8b0b62f36839b7c16f36ca6b56282cc8ff645af0558066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9999700b1ce01b11a521b4ab816f60e276d153233e84cb939b78e972e58330->leave($__internal_ad9999700b1ce01b11a521b4ab816f60e276d153233e84cb939b78e972e58330_prof);

        
        $__internal_d7aaf43352a76c62de8b0b62f36839b7c16f36ca6b56282cc8ff645af0558066->leave($__internal_d7aaf43352a76c62de8b0b62f36839b7c16f36ca6b56282cc8ff645af0558066_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fda4806d473e5e050c454d305394b6a934de7ee2ce0eb32c6d024675828c2af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda4806d473e5e050c454d305394b6a934de7ee2ce0eb32c6d024675828c2af3->enter($__internal_fda4806d473e5e050c454d305394b6a934de7ee2ce0eb32c6d024675828c2af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d0709b9c35d5a1f4d25747b2b925446784d647ccba029c279a3ffad53373a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0709b9c35d5a1f4d25747b2b925446784d647ccba029c279a3ffad53373a7d1->enter($__internal_d0709b9c35d5a1f4d25747b2b925446784d647ccba029c279a3ffad53373a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0709b9c35d5a1f4d25747b2b925446784d647ccba029c279a3ffad53373a7d1->leave($__internal_d0709b9c35d5a1f4d25747b2b925446784d647ccba029c279a3ffad53373a7d1_prof);

        
        $__internal_fda4806d473e5e050c454d305394b6a934de7ee2ce0eb32c6d024675828c2af3->leave($__internal_fda4806d473e5e050c454d305394b6a934de7ee2ce0eb32c6d024675828c2af3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_352e4150034724c8d3f4501aeb077dadec30daf38ecf3bd339bc72b4ebbef8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352e4150034724c8d3f4501aeb077dadec30daf38ecf3bd339bc72b4ebbef8fc->enter($__internal_352e4150034724c8d3f4501aeb077dadec30daf38ecf3bd339bc72b4ebbef8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_722bcfd1abe81c4a4cbb6e02a8df2d8a14ed28598b5c038bc9d09de27e83e003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722bcfd1abe81c4a4cbb6e02a8df2d8a14ed28598b5c038bc9d09de27e83e003->enter($__internal_722bcfd1abe81c4a4cbb6e02a8df2d8a14ed28598b5c038bc9d09de27e83e003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_722bcfd1abe81c4a4cbb6e02a8df2d8a14ed28598b5c038bc9d09de27e83e003->leave($__internal_722bcfd1abe81c4a4cbb6e02a8df2d8a14ed28598b5c038bc9d09de27e83e003_prof);

        
        $__internal_352e4150034724c8d3f4501aeb077dadec30daf38ecf3bd339bc72b4ebbef8fc->leave($__internal_352e4150034724c8d3f4501aeb077dadec30daf38ecf3bd339bc72b4ebbef8fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed7b2b7dd64a5d3de8af7a689424ef1b5187582cb284dd496c98c4a6b7fd8957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7b2b7dd64a5d3de8af7a689424ef1b5187582cb284dd496c98c4a6b7fd8957->enter($__internal_ed7b2b7dd64a5d3de8af7a689424ef1b5187582cb284dd496c98c4a6b7fd8957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ffdfce62a8fc7fb9fecb3c405e3db8faffc83206b1598cc8949fe218df769dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdfce62a8fc7fb9fecb3c405e3db8faffc83206b1598cc8949fe218df769dd8->enter($__internal_ffdfce62a8fc7fb9fecb3c405e3db8faffc83206b1598cc8949fe218df769dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffdfce62a8fc7fb9fecb3c405e3db8faffc83206b1598cc8949fe218df769dd8->leave($__internal_ffdfce62a8fc7fb9fecb3c405e3db8faffc83206b1598cc8949fe218df769dd8_prof);

        
        $__internal_ed7b2b7dd64a5d3de8af7a689424ef1b5187582cb284dd496c98c4a6b7fd8957->leave($__internal_ed7b2b7dd64a5d3de8af7a689424ef1b5187582cb284dd496c98c4a6b7fd8957_prof);

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
