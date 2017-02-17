<?php

/* client/edit.html.twig */
class __TwigTemplate_1f71fcc62618d2dfeeffd8d5d23ab67366ccefe66ea7f6f5de1f427835698d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_e48fd632eab715ef30a2719114d70ffe59742b758704521d43a7f7b47c70d777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48fd632eab715ef30a2719114d70ffe59742b758704521d43a7f7b47c70d777->enter($__internal_e48fd632eab715ef30a2719114d70ffe59742b758704521d43a7f7b47c70d777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_6aaaa59ee1a3e84cdf92765769ea8d15552062174653f080b300b7e937c4087a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaaa59ee1a3e84cdf92765769ea8d15552062174653f080b300b7e937c4087a->enter($__internal_6aaaa59ee1a3e84cdf92765769ea8d15552062174653f080b300b7e937c4087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48fd632eab715ef30a2719114d70ffe59742b758704521d43a7f7b47c70d777->leave($__internal_e48fd632eab715ef30a2719114d70ffe59742b758704521d43a7f7b47c70d777_prof);

        
        $__internal_6aaaa59ee1a3e84cdf92765769ea8d15552062174653f080b300b7e937c4087a->leave($__internal_6aaaa59ee1a3e84cdf92765769ea8d15552062174653f080b300b7e937c4087a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c3b9262109c609e2debce7bbbf9998c67310ca68be4fec08f73b8a69326e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c3b9262109c609e2debce7bbbf9998c67310ca68be4fec08f73b8a69326e4b->enter($__internal_43c3b9262109c609e2debce7bbbf9998c67310ca68be4fec08f73b8a69326e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5d5abd43cccd9e6be934d2c741803a4a3b6fd5a54f2072d9bb7a6706681cd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d5abd43cccd9e6be934d2c741803a4a3b6fd5a54f2072d9bb7a6706681cd41->enter($__internal_b5d5abd43cccd9e6be934d2c741803a4a3b6fd5a54f2072d9bb7a6706681cd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5d5abd43cccd9e6be934d2c741803a4a3b6fd5a54f2072d9bb7a6706681cd41->leave($__internal_b5d5abd43cccd9e6be934d2c741803a4a3b6fd5a54f2072d9bb7a6706681cd41_prof);

        
        $__internal_43c3b9262109c609e2debce7bbbf9998c67310ca68be4fec08f73b8a69326e4b->leave($__internal_43c3b9262109c609e2debce7bbbf9998c67310ca68be4fec08f73b8a69326e4b_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
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
", "client/edit.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\client\\edit.html.twig");
    }
}
