<?php

/* :client:edit.html.twig */
class __TwigTemplate_48cec0ebc76ff57c09187d4ac4a81f037fbb38c897d69ed278320240b8cdfdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:edit.html.twig", 1);
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
        $__internal_5185500cef832a12a52a0f1445d19ff081c7e076027cc8f64b3cba5783582bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5185500cef832a12a52a0f1445d19ff081c7e076027cc8f64b3cba5783582bad->enter($__internal_5185500cef832a12a52a0f1445d19ff081c7e076027cc8f64b3cba5783582bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_f5f9c08a70c51d806bcf21b9a2bda7908e938e550b25d3d3053b0843eee55111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f9c08a70c51d806bcf21b9a2bda7908e938e550b25d3d3053b0843eee55111->enter($__internal_f5f9c08a70c51d806bcf21b9a2bda7908e938e550b25d3d3053b0843eee55111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5185500cef832a12a52a0f1445d19ff081c7e076027cc8f64b3cba5783582bad->leave($__internal_5185500cef832a12a52a0f1445d19ff081c7e076027cc8f64b3cba5783582bad_prof);

        
        $__internal_f5f9c08a70c51d806bcf21b9a2bda7908e938e550b25d3d3053b0843eee55111->leave($__internal_f5f9c08a70c51d806bcf21b9a2bda7908e938e550b25d3d3053b0843eee55111_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b0804f1cb842a4a813d047dba3d45c9431ce97ec0f6000428731672717fad7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0804f1cb842a4a813d047dba3d45c9431ce97ec0f6000428731672717fad7a->enter($__internal_2b0804f1cb842a4a813d047dba3d45c9431ce97ec0f6000428731672717fad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f98bb33249eeb2758766626d78411aa39923031500546d72276e423728863f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98bb33249eeb2758766626d78411aa39923031500546d72276e423728863f4d->enter($__internal_f98bb33249eeb2758766626d78411aa39923031500546d72276e423728863f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f98bb33249eeb2758766626d78411aa39923031500546d72276e423728863f4d->leave($__internal_f98bb33249eeb2758766626d78411aa39923031500546d72276e423728863f4d_prof);

        
        $__internal_2b0804f1cb842a4a813d047dba3d45c9431ce97ec0f6000428731672717fad7a->leave($__internal_2b0804f1cb842a4a813d047dba3d45c9431ce97ec0f6000428731672717fad7a_prof);

    }

    public function getTemplateName()
    {
        return ":client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:edit.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/client/edit.html.twig");
    }
}
