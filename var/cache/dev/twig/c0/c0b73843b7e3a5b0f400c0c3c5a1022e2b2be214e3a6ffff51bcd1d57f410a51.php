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
        $__internal_aaed0b82c3ece85f7f6b5c0dec5a77c707e0e0483f55c05d297c5aa27e50c285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaed0b82c3ece85f7f6b5c0dec5a77c707e0e0483f55c05d297c5aa27e50c285->enter($__internal_aaed0b82c3ece85f7f6b5c0dec5a77c707e0e0483f55c05d297c5aa27e50c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_ddd189a16c6382e9249064ccc1852b0c8f3b19d64e9535f590c080f8d71f41ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd189a16c6382e9249064ccc1852b0c8f3b19d64e9535f590c080f8d71f41ea->enter($__internal_ddd189a16c6382e9249064ccc1852b0c8f3b19d64e9535f590c080f8d71f41ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaed0b82c3ece85f7f6b5c0dec5a77c707e0e0483f55c05d297c5aa27e50c285->leave($__internal_aaed0b82c3ece85f7f6b5c0dec5a77c707e0e0483f55c05d297c5aa27e50c285_prof);

        
        $__internal_ddd189a16c6382e9249064ccc1852b0c8f3b19d64e9535f590c080f8d71f41ea->leave($__internal_ddd189a16c6382e9249064ccc1852b0c8f3b19d64e9535f590c080f8d71f41ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da270f8cdc5b75b4222b26bbff2c9602a04df8b4e0c82b1b5dfeb3e3561299e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da270f8cdc5b75b4222b26bbff2c9602a04df8b4e0c82b1b5dfeb3e3561299e0->enter($__internal_da270f8cdc5b75b4222b26bbff2c9602a04df8b4e0c82b1b5dfeb3e3561299e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed309f38304928d778fababf192174ba7b80598029aa0d925349f353dc11c76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed309f38304928d778fababf192174ba7b80598029aa0d925349f353dc11c76e->enter($__internal_ed309f38304928d778fababf192174ba7b80598029aa0d925349f353dc11c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed309f38304928d778fababf192174ba7b80598029aa0d925349f353dc11c76e->leave($__internal_ed309f38304928d778fababf192174ba7b80598029aa0d925349f353dc11c76e_prof);

        
        $__internal_da270f8cdc5b75b4222b26bbff2c9602a04df8b4e0c82b1b5dfeb3e3561299e0->leave($__internal_da270f8cdc5b75b4222b26bbff2c9602a04df8b4e0c82b1b5dfeb3e3561299e0_prof);

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
