<?php

/* clinicaPaniBundle:Default:404.html.twig */
class __TwigTemplate_eb66e4c93dba3d9cc27a315a76176c82688f86974f4e48919f25f0a7c22dd10e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MusicShopFrontendBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MusicShopFrontendBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33072007ff1d3e18b69f653e53170a96f01eb124dae9078f67f847e72e8149fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33072007ff1d3e18b69f653e53170a96f01eb124dae9078f67f847e72e8149fe->enter($__internal_33072007ff1d3e18b69f653e53170a96f01eb124dae9078f67f847e72e8149fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_31dc80808015baaac440082fd7020360a09da105203e4c10bcdf12ea87bacd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dc80808015baaac440082fd7020360a09da105203e4c10bcdf12ea87bacd74->enter($__internal_31dc80808015baaac440082fd7020360a09da105203e4c10bcdf12ea87bacd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33072007ff1d3e18b69f653e53170a96f01eb124dae9078f67f847e72e8149fe->leave($__internal_33072007ff1d3e18b69f653e53170a96f01eb124dae9078f67f847e72e8149fe_prof);

        
        $__internal_31dc80808015baaac440082fd7020360a09da105203e4c10bcdf12ea87bacd74->leave($__internal_31dc80808015baaac440082fd7020360a09da105203e4c10bcdf12ea87bacd74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99f2c1ef1b813034239d747029ae46becb80cea796c1709270e36e6c69858f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f2c1ef1b813034239d747029ae46becb80cea796c1709270e36e6c69858f72->enter($__internal_99f2c1ef1b813034239d747029ae46becb80cea796c1709270e36e6c69858f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57f5ae77eff67b51ee289c3bf66e5de4287adfb0cef310e12abaaff21cf9e1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f5ae77eff67b51ee289c3bf66e5de4287adfb0cef310e12abaaff21cf9e1bc->enter($__internal_57f5ae77eff67b51ee289c3bf66e5de4287adfb0cef310e12abaaff21cf9e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_57f5ae77eff67b51ee289c3bf66e5de4287adfb0cef310e12abaaff21cf9e1bc->leave($__internal_57f5ae77eff67b51ee289c3bf66e5de4287adfb0cef310e12abaaff21cf9e1bc_prof);

        
        $__internal_99f2c1ef1b813034239d747029ae46becb80cea796c1709270e36e6c69858f72->leave($__internal_99f2c1ef1b813034239d747029ae46becb80cea796c1709270e36e6c69858f72_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_97bfafb8d01a424e969d868ce51d3448d3cf79ba8a56f30c376e65e103484782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bfafb8d01a424e969d868ce51d3448d3cf79ba8a56f30c376e65e103484782->enter($__internal_97bfafb8d01a424e969d868ce51d3448d3cf79ba8a56f30c376e65e103484782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4e21994f29db98b0cac024d32fbdb2cf9fe501ef6e7f31592f349a3c485d47e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e21994f29db98b0cac024d32fbdb2cf9fe501ef6e7f31592f349a3c485d47e0->enter($__internal_4e21994f29db98b0cac024d32fbdb2cf9fe501ef6e7f31592f349a3c485d47e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">Ups!</h4>
            </div>
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <p>";
        // line 11
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_4e21994f29db98b0cac024d32fbdb2cf9fe501ef6e7f31592f349a3c485d47e0->leave($__internal_4e21994f29db98b0cac024d32fbdb2cf9fe501ef6e7f31592f349a3c485d47e0_prof);

        
        $__internal_97bfafb8d01a424e969d868ce51d3448d3cf79ba8a56f30c376e65e103484782->leave($__internal_97bfafb8d01a424e969d868ce51d3448d3cf79ba8a56f30c376e65e103484782_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MusicShopFrontendBundle:Default:index.html.twig \" %}
{% block title %}Ups!{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">Ups!</h4>
            </div>
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <p>{{ message }}</p>
            </div>
        </div>
    </div>
{% endblock %}
", "clinicaPaniBundle:Default:404.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/404.html.twig");
    }
}
