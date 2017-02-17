<?php

/* :client:new.html.twig */
class __TwigTemplate_c9c2d235376b6586b5fcf5cadd59aa14b2cc142d493ce82414c9084eed8d8b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:new.html.twig", 1);
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
        $__internal_dc442fb0ac55d9d70baa65206254062c1efb86f187b7cb4521fc19c8bb3d5ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc442fb0ac55d9d70baa65206254062c1efb86f187b7cb4521fc19c8bb3d5ee3->enter($__internal_dc442fb0ac55d9d70baa65206254062c1efb86f187b7cb4521fc19c8bb3d5ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_b7b2aca7f81c7c9a4739b090c31395b70359679a1e6988844bb7d1d277b1a5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b2aca7f81c7c9a4739b090c31395b70359679a1e6988844bb7d1d277b1a5ea->enter($__internal_b7b2aca7f81c7c9a4739b090c31395b70359679a1e6988844bb7d1d277b1a5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc442fb0ac55d9d70baa65206254062c1efb86f187b7cb4521fc19c8bb3d5ee3->leave($__internal_dc442fb0ac55d9d70baa65206254062c1efb86f187b7cb4521fc19c8bb3d5ee3_prof);

        
        $__internal_b7b2aca7f81c7c9a4739b090c31395b70359679a1e6988844bb7d1d277b1a5ea->leave($__internal_b7b2aca7f81c7c9a4739b090c31395b70359679a1e6988844bb7d1d277b1a5ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a365190d241da0119c96204c1f877135c6f99e6dd424fd66b530dd877f7ac6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a365190d241da0119c96204c1f877135c6f99e6dd424fd66b530dd877f7ac6e0->enter($__internal_a365190d241da0119c96204c1f877135c6f99e6dd424fd66b530dd877f7ac6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32f99f36298def9f5f95795a846e3dc542c9d73c38acfe0544bbb3ff9efdbfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f99f36298def9f5f95795a846e3dc542c9d73c38acfe0544bbb3ff9efdbfc5->enter($__internal_32f99f36298def9f5f95795a846e3dc542c9d73c38acfe0544bbb3ff9efdbfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32f99f36298def9f5f95795a846e3dc542c9d73c38acfe0544bbb3ff9efdbfc5->leave($__internal_32f99f36298def9f5f95795a846e3dc542c9d73c38acfe0544bbb3ff9efdbfc5_prof);

        
        $__internal_a365190d241da0119c96204c1f877135c6f99e6dd424fd66b530dd877f7ac6e0->leave($__internal_a365190d241da0119c96204c1f877135c6f99e6dd424fd66b530dd877f7ac6e0_prof);

    }

    public function getTemplateName()
    {
        return ":client:new.html.twig";
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
", ":client:new.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/client/new.html.twig");
    }
}
