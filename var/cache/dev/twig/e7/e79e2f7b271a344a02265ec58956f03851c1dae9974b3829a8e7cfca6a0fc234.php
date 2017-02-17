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
        $__internal_55ff7f8d34c628e2942011a394e62d3662b7701ea6ee7756e038254a3e16f58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ff7f8d34c628e2942011a394e62d3662b7701ea6ee7756e038254a3e16f58d->enter($__internal_55ff7f8d34c628e2942011a394e62d3662b7701ea6ee7756e038254a3e16f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $__internal_3e0f534558b7e1f38d13a298508c8a843d3d954e49063cd7d68fac805696a220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0f534558b7e1f38d13a298508c8a843d3d954e49063cd7d68fac805696a220->enter($__internal_3e0f534558b7e1f38d13a298508c8a843d3d954e49063cd7d68fac805696a220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ff7f8d34c628e2942011a394e62d3662b7701ea6ee7756e038254a3e16f58d->leave($__internal_55ff7f8d34c628e2942011a394e62d3662b7701ea6ee7756e038254a3e16f58d_prof);

        
        $__internal_3e0f534558b7e1f38d13a298508c8a843d3d954e49063cd7d68fac805696a220->leave($__internal_3e0f534558b7e1f38d13a298508c8a843d3d954e49063cd7d68fac805696a220_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_895198b93fc0b3dac7120f99056801a59c6e5d9a601cfa8fd3f2701f8fe41f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895198b93fc0b3dac7120f99056801a59c6e5d9a601cfa8fd3f2701f8fe41f07->enter($__internal_895198b93fc0b3dac7120f99056801a59c6e5d9a601cfa8fd3f2701f8fe41f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ced1a58d6cd919e3861039bbb9b8dcf39323e965a51419fac0fc585d76ad39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ced1a58d6cd919e3861039bbb9b8dcf39323e965a51419fac0fc585d76ad39f->enter($__internal_9ced1a58d6cd919e3861039bbb9b8dcf39323e965a51419fac0fc585d76ad39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ced1a58d6cd919e3861039bbb9b8dcf39323e965a51419fac0fc585d76ad39f->leave($__internal_9ced1a58d6cd919e3861039bbb9b8dcf39323e965a51419fac0fc585d76ad39f_prof);

        
        $__internal_895198b93fc0b3dac7120f99056801a59c6e5d9a601cfa8fd3f2701f8fe41f07->leave($__internal_895198b93fc0b3dac7120f99056801a59c6e5d9a601cfa8fd3f2701f8fe41f07_prof);

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
