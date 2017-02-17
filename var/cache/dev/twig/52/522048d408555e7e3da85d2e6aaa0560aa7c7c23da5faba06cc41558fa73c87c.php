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
        $__internal_332971120f0f82a3a30e66ba6f2ae20ac7b9be22a9d0a1a04fa7970981e3fa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_332971120f0f82a3a30e66ba6f2ae20ac7b9be22a9d0a1a04fa7970981e3fa03->enter($__internal_332971120f0f82a3a30e66ba6f2ae20ac7b9be22a9d0a1a04fa7970981e3fa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_dd7e761cfd501676dac0b7b08d8aef841f7a374ee950e9afc0669ac8c1a5813f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7e761cfd501676dac0b7b08d8aef841f7a374ee950e9afc0669ac8c1a5813f->enter($__internal_dd7e761cfd501676dac0b7b08d8aef841f7a374ee950e9afc0669ac8c1a5813f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_332971120f0f82a3a30e66ba6f2ae20ac7b9be22a9d0a1a04fa7970981e3fa03->leave($__internal_332971120f0f82a3a30e66ba6f2ae20ac7b9be22a9d0a1a04fa7970981e3fa03_prof);

        
        $__internal_dd7e761cfd501676dac0b7b08d8aef841f7a374ee950e9afc0669ac8c1a5813f->leave($__internal_dd7e761cfd501676dac0b7b08d8aef841f7a374ee950e9afc0669ac8c1a5813f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc9168242648b22860991eb7b1fa0107625f7872313d22d36c3b3cb8bcf854b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9168242648b22860991eb7b1fa0107625f7872313d22d36c3b3cb8bcf854b1->enter($__internal_dc9168242648b22860991eb7b1fa0107625f7872313d22d36c3b3cb8bcf854b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aeea11f5cfe5b2175936b6a31431e3ef3037182b108f80e73654c43604624e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeea11f5cfe5b2175936b6a31431e3ef3037182b108f80e73654c43604624e5a->enter($__internal_aeea11f5cfe5b2175936b6a31431e3ef3037182b108f80e73654c43604624e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aeea11f5cfe5b2175936b6a31431e3ef3037182b108f80e73654c43604624e5a->leave($__internal_aeea11f5cfe5b2175936b6a31431e3ef3037182b108f80e73654c43604624e5a_prof);

        
        $__internal_dc9168242648b22860991eb7b1fa0107625f7872313d22d36c3b3cb8bcf854b1->leave($__internal_dc9168242648b22860991eb7b1fa0107625f7872313d22d36c3b3cb8bcf854b1_prof);

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
