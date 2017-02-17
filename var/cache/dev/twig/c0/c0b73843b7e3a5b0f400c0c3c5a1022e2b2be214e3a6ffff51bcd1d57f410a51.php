<?php

/* client/new.html.twig */
class __TwigTemplate_2eabfee2200b8297f431d6f5fe167715174602c46e3221a75a37357ff4701a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79bb0fede5753805503b3222272800cfa774f42a262097b20da2d4196823c525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bb0fede5753805503b3222272800cfa774f42a262097b20da2d4196823c525->enter($__internal_79bb0fede5753805503b3222272800cfa774f42a262097b20da2d4196823c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_0fe46f55bf552c02258dd88bd045a5391ae810d72e5edc43f1646c864fb869b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe46f55bf552c02258dd88bd045a5391ae810d72e5edc43f1646c864fb869b6->enter($__internal_0fe46f55bf552c02258dd88bd045a5391ae810d72e5edc43f1646c864fb869b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79bb0fede5753805503b3222272800cfa774f42a262097b20da2d4196823c525->leave($__internal_79bb0fede5753805503b3222272800cfa774f42a262097b20da2d4196823c525_prof);

        
        $__internal_0fe46f55bf552c02258dd88bd045a5391ae810d72e5edc43f1646c864fb869b6->leave($__internal_0fe46f55bf552c02258dd88bd045a5391ae810d72e5edc43f1646c864fb869b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741c7a8ea145622794103cb9b2344b565cb9dc87c9b9d3e8501cdf82a7aae09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741c7a8ea145622794103cb9b2344b565cb9dc87c9b9d3e8501cdf82a7aae09a->enter($__internal_741c7a8ea145622794103cb9b2344b565cb9dc87c9b9d3e8501cdf82a7aae09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58d8d41f482642550e00139585f3f76b09c315f5ec8f228e13799c1856d33e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d8d41f482642550e00139585f3f76b09c315f5ec8f228e13799c1856d33e65->enter($__internal_58d8d41f482642550e00139585f3f76b09c315f5ec8f228e13799c1856d33e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_58d8d41f482642550e00139585f3f76b09c315f5ec8f228e13799c1856d33e65->leave($__internal_58d8d41f482642550e00139585f3f76b09c315f5ec8f228e13799c1856d33e65_prof);

        
        $__internal_741c7a8ea145622794103cb9b2344b565cb9dc87c9b9d3e8501cdf82a7aae09a->leave($__internal_741c7a8ea145622794103cb9b2344b565cb9dc87c9b9d3e8501cdf82a7aae09a_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Client creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "client/new.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\client\\new.html.twig");
    }
}
