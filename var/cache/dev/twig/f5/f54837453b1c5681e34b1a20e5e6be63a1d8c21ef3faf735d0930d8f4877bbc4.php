<?php

/* @clinicaPani/Default/404.html.twig */
class __TwigTemplate_b0aeda77f8c8b194867a319c8c94cebfc5fe6e4b48ee9a61396cc5bd0b705db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clinicaPaniBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00a651c8852c9c795f435c2ada8bf28db0a3bb95a64da1bfc6d2595c3ea19f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a651c8852c9c795f435c2ada8bf28db0a3bb95a64da1bfc6d2595c3ea19f31->enter($__internal_00a651c8852c9c795f435c2ada8bf28db0a3bb95a64da1bfc6d2595c3ea19f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $__internal_a183937aaf7776093df50d8b55cb848d2404cecefb742ac050ed0134be14cfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a183937aaf7776093df50d8b55cb848d2404cecefb742ac050ed0134be14cfbb->enter($__internal_a183937aaf7776093df50d8b55cb848d2404cecefb742ac050ed0134be14cfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a651c8852c9c795f435c2ada8bf28db0a3bb95a64da1bfc6d2595c3ea19f31->leave($__internal_00a651c8852c9c795f435c2ada8bf28db0a3bb95a64da1bfc6d2595c3ea19f31_prof);

        
        $__internal_a183937aaf7776093df50d8b55cb848d2404cecefb742ac050ed0134be14cfbb->leave($__internal_a183937aaf7776093df50d8b55cb848d2404cecefb742ac050ed0134be14cfbb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbed846e722dc51361dea15612adcb8e7df81a5c04d4556e82d76097962951b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbed846e722dc51361dea15612adcb8e7df81a5c04d4556e82d76097962951b2->enter($__internal_bbed846e722dc51361dea15612adcb8e7df81a5c04d4556e82d76097962951b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_649b32102478be27c6ac4be58db248474b1a64157416d321ad53021a615e4f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649b32102478be27c6ac4be58db248474b1a64157416d321ad53021a615e4f59->enter($__internal_649b32102478be27c6ac4be58db248474b1a64157416d321ad53021a615e4f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_649b32102478be27c6ac4be58db248474b1a64157416d321ad53021a615e4f59->leave($__internal_649b32102478be27c6ac4be58db248474b1a64157416d321ad53021a615e4f59_prof);

        
        $__internal_bbed846e722dc51361dea15612adcb8e7df81a5c04d4556e82d76097962951b2->leave($__internal_bbed846e722dc51361dea15612adcb8e7df81a5c04d4556e82d76097962951b2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e6fb644de7cea9883606bbea982d4138ea8915e2f608ab9ace1e0b9d74055e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fb644de7cea9883606bbea982d4138ea8915e2f608ab9ace1e0b9d74055e8c->enter($__internal_e6fb644de7cea9883606bbea982d4138ea8915e2f608ab9ace1e0b9d74055e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d899e941f7b718ddefb95a5739ec18fa4d2c8737d3f6b79aa6dc4b1ce5a921f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d899e941f7b718ddefb95a5739ec18fa4d2c8737d3f6b79aa6dc4b1ce5a921f1->enter($__internal_d899e941f7b718ddefb95a5739ec18fa4d2c8737d3f6b79aa6dc4b1ce5a921f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_d899e941f7b718ddefb95a5739ec18fa4d2c8737d3f6b79aa6dc4b1ce5a921f1->leave($__internal_d899e941f7b718ddefb95a5739ec18fa4d2c8737d3f6b79aa6dc4b1ce5a921f1_prof);

        
        $__internal_e6fb644de7cea9883606bbea982d4138ea8915e2f608ab9ace1e0b9d74055e8c->leave($__internal_e6fb644de7cea9883606bbea982d4138ea8915e2f608ab9ace1e0b9d74055e8c_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/404.html.twig";
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
        return new Twig_Source("{% extends \"clinicaPaniBundle:Default:index.html.twig \" %}
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
", "@clinicaPani/Default/404.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\404.html.twig");
    }
}
