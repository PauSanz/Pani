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
        $__internal_4cf1595a19ee68b213ea99657fc7d86d0cf0fee0ab9db4b11767d1005087be37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf1595a19ee68b213ea99657fc7d86d0cf0fee0ab9db4b11767d1005087be37->enter($__internal_4cf1595a19ee68b213ea99657fc7d86d0cf0fee0ab9db4b11767d1005087be37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $__internal_3810688593f5ab65f8c07c4f15a826436297c0add1510921d8d9eacb79f41f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3810688593f5ab65f8c07c4f15a826436297c0add1510921d8d9eacb79f41f36->enter($__internal_3810688593f5ab65f8c07c4f15a826436297c0add1510921d8d9eacb79f41f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf1595a19ee68b213ea99657fc7d86d0cf0fee0ab9db4b11767d1005087be37->leave($__internal_4cf1595a19ee68b213ea99657fc7d86d0cf0fee0ab9db4b11767d1005087be37_prof);

        
        $__internal_3810688593f5ab65f8c07c4f15a826436297c0add1510921d8d9eacb79f41f36->leave($__internal_3810688593f5ab65f8c07c4f15a826436297c0add1510921d8d9eacb79f41f36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db92a8a381118f9934ed0ec0dd79e955dc225a03b70cc24b7717e1b218eef78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db92a8a381118f9934ed0ec0dd79e955dc225a03b70cc24b7717e1b218eef78d->enter($__internal_db92a8a381118f9934ed0ec0dd79e955dc225a03b70cc24b7717e1b218eef78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94d6209b35bbfe628c45fa88ce70d4c0bab6487789a622a12cc04bb99ce7f624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d6209b35bbfe628c45fa88ce70d4c0bab6487789a622a12cc04bb99ce7f624->enter($__internal_94d6209b35bbfe628c45fa88ce70d4c0bab6487789a622a12cc04bb99ce7f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94d6209b35bbfe628c45fa88ce70d4c0bab6487789a622a12cc04bb99ce7f624->leave($__internal_94d6209b35bbfe628c45fa88ce70d4c0bab6487789a622a12cc04bb99ce7f624_prof);

        
        $__internal_db92a8a381118f9934ed0ec0dd79e955dc225a03b70cc24b7717e1b218eef78d->leave($__internal_db92a8a381118f9934ed0ec0dd79e955dc225a03b70cc24b7717e1b218eef78d_prof);

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
