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
        $__internal_9a69ba947a5453109a71dd45e7ed6a90681a78c85b670ca100e17b89a6e5488e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a69ba947a5453109a71dd45e7ed6a90681a78c85b670ca100e17b89a6e5488e->enter($__internal_9a69ba947a5453109a71dd45e7ed6a90681a78c85b670ca100e17b89a6e5488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_14d8985c9c0ce471e4d2bc99890d1567676f6a9236966a3f3e17fa06213125fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d8985c9c0ce471e4d2bc99890d1567676f6a9236966a3f3e17fa06213125fb->enter($__internal_14d8985c9c0ce471e4d2bc99890d1567676f6a9236966a3f3e17fa06213125fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a69ba947a5453109a71dd45e7ed6a90681a78c85b670ca100e17b89a6e5488e->leave($__internal_9a69ba947a5453109a71dd45e7ed6a90681a78c85b670ca100e17b89a6e5488e_prof);

        
        $__internal_14d8985c9c0ce471e4d2bc99890d1567676f6a9236966a3f3e17fa06213125fb->leave($__internal_14d8985c9c0ce471e4d2bc99890d1567676f6a9236966a3f3e17fa06213125fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3648d54d285bc60e4e87ee8b38596afcbf8b4ed299af08c800c292a87ac622e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3648d54d285bc60e4e87ee8b38596afcbf8b4ed299af08c800c292a87ac622e->enter($__internal_f3648d54d285bc60e4e87ee8b38596afcbf8b4ed299af08c800c292a87ac622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d2f55da2a320c09cb98e095a4ed6a990b9afe4240c3f75479b4f0765682cf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2f55da2a320c09cb98e095a4ed6a990b9afe4240c3f75479b4f0765682cf15->enter($__internal_4d2f55da2a320c09cb98e095a4ed6a990b9afe4240c3f75479b4f0765682cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d2f55da2a320c09cb98e095a4ed6a990b9afe4240c3f75479b4f0765682cf15->leave($__internal_4d2f55da2a320c09cb98e095a4ed6a990b9afe4240c3f75479b4f0765682cf15_prof);

        
        $__internal_f3648d54d285bc60e4e87ee8b38596afcbf8b4ed299af08c800c292a87ac622e->leave($__internal_f3648d54d285bc60e4e87ee8b38596afcbf8b4ed299af08c800c292a87ac622e_prof);

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
