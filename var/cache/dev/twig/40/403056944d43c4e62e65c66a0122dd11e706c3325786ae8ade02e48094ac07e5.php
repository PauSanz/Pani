<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
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
        $__internal_e0988a3ce21af7da2f280726ad4d212443e6bd8cb4b0a6e976a399d098717135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0988a3ce21af7da2f280726ad4d212443e6bd8cb4b0a6e976a399d098717135->enter($__internal_e0988a3ce21af7da2f280726ad4d212443e6bd8cb4b0a6e976a399d098717135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ad5cdab5ffba599d239f370d4b62d8c3e911a7cf3923050452d1196690d0aa99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5cdab5ffba599d239f370d4b62d8c3e911a7cf3923050452d1196690d0aa99->enter($__internal_ad5cdab5ffba599d239f370d4b62d8c3e911a7cf3923050452d1196690d0aa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0988a3ce21af7da2f280726ad4d212443e6bd8cb4b0a6e976a399d098717135->leave($__internal_e0988a3ce21af7da2f280726ad4d212443e6bd8cb4b0a6e976a399d098717135_prof);

        
        $__internal_ad5cdab5ffba599d239f370d4b62d8c3e911a7cf3923050452d1196690d0aa99->leave($__internal_ad5cdab5ffba599d239f370d4b62d8c3e911a7cf3923050452d1196690d0aa99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a62bf7584677df1a5ebd6f7ffb45def5de82a9080606a76462a211638b17632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a62bf7584677df1a5ebd6f7ffb45def5de82a9080606a76462a211638b17632->enter($__internal_5a62bf7584677df1a5ebd6f7ffb45def5de82a9080606a76462a211638b17632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1a7249f0a61f862dcf22e4bd2a6fbcc351522a731aa5de897bba152e69e6a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a7249f0a61f862dcf22e4bd2a6fbcc351522a731aa5de897bba152e69e6a5d->enter($__internal_e1a7249f0a61f862dcf22e4bd2a6fbcc351522a731aa5de897bba152e69e6a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e1a7249f0a61f862dcf22e4bd2a6fbcc351522a731aa5de897bba152e69e6a5d->leave($__internal_e1a7249f0a61f862dcf22e4bd2a6fbcc351522a731aa5de897bba152e69e6a5d_prof);

        
        $__internal_5a62bf7584677df1a5ebd6f7ffb45def5de82a9080606a76462a211638b17632->leave($__internal_5a62bf7584677df1a5ebd6f7ffb45def5de82a9080606a76462a211638b17632_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09dd41e4af6e65b8271435bb6be5eae557f22911cb9db6366e4bc0ee5c2cf6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dd41e4af6e65b8271435bb6be5eae557f22911cb9db6366e4bc0ee5c2cf6fb->enter($__internal_09dd41e4af6e65b8271435bb6be5eae557f22911cb9db6366e4bc0ee5c2cf6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_761cd5ab674f8eae605da2f4becb7350c53fc3b669e0e8a1952c1b317a8b9416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761cd5ab674f8eae605da2f4becb7350c53fc3b669e0e8a1952c1b317a8b9416->enter($__internal_761cd5ab674f8eae605da2f4becb7350c53fc3b669e0e8a1952c1b317a8b9416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_761cd5ab674f8eae605da2f4becb7350c53fc3b669e0e8a1952c1b317a8b9416->leave($__internal_761cd5ab674f8eae605da2f4becb7350c53fc3b669e0e8a1952c1b317a8b9416_prof);

        
        $__internal_09dd41e4af6e65b8271435bb6be5eae557f22911cb9db6366e4bc0ee5c2cf6fb->leave($__internal_09dd41e4af6e65b8271435bb6be5eae557f22911cb9db6366e4bc0ee5c2cf6fb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9cd93cb09bd989b868d5b629db45b2ac655ea445a8dc4c2db80d128481fac6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cd93cb09bd989b868d5b629db45b2ac655ea445a8dc4c2db80d128481fac6f->enter($__internal_b9cd93cb09bd989b868d5b629db45b2ac655ea445a8dc4c2db80d128481fac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff42bb806d7bfb47a9227dc9ed970a0232dfa53417711a8697d507ecad1902d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff42bb806d7bfb47a9227dc9ed970a0232dfa53417711a8697d507ecad1902d6->enter($__internal_ff42bb806d7bfb47a9227dc9ed970a0232dfa53417711a8697d507ecad1902d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ff42bb806d7bfb47a9227dc9ed970a0232dfa53417711a8697d507ecad1902d6->leave($__internal_ff42bb806d7bfb47a9227dc9ed970a0232dfa53417711a8697d507ecad1902d6_prof);

        
        $__internal_b9cd93cb09bd989b868d5b629db45b2ac655ea445a8dc4c2db80d128481fac6f->leave($__internal_b9cd93cb09bd989b868d5b629db45b2ac655ea445a8dc4c2db80d128481fac6f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
