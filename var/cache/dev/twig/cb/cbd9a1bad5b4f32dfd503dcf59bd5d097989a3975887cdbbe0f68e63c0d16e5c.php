<?php

/* clinicaPaniBundle:Default:404.html.twig */
class __TwigTemplate_e7d91ed7c26fc51bc7ed303fe1bf1c5f1eac134154ac2070fcc2dab9faf1b17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:404.html.twig", 1);
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
        $__internal_6943d66c4e922948a1f354ea8c0f5e9ef1bd57dec7b964598a3e196ef592a2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6943d66c4e922948a1f354ea8c0f5e9ef1bd57dec7b964598a3e196ef592a2f0->enter($__internal_6943d66c4e922948a1f354ea8c0f5e9ef1bd57dec7b964598a3e196ef592a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_ba1a4c1a46d2c37c3f64d0d34805bafe38150fd0ad35302e0cb291c1450409c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1a4c1a46d2c37c3f64d0d34805bafe38150fd0ad35302e0cb291c1450409c4->enter($__internal_ba1a4c1a46d2c37c3f64d0d34805bafe38150fd0ad35302e0cb291c1450409c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6943d66c4e922948a1f354ea8c0f5e9ef1bd57dec7b964598a3e196ef592a2f0->leave($__internal_6943d66c4e922948a1f354ea8c0f5e9ef1bd57dec7b964598a3e196ef592a2f0_prof);

        
        $__internal_ba1a4c1a46d2c37c3f64d0d34805bafe38150fd0ad35302e0cb291c1450409c4->leave($__internal_ba1a4c1a46d2c37c3f64d0d34805bafe38150fd0ad35302e0cb291c1450409c4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bf8da16ef7717b684a7742b899d9e45bc5b30a8ad816feb07aca8ad30994adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf8da16ef7717b684a7742b899d9e45bc5b30a8ad816feb07aca8ad30994adc->enter($__internal_9bf8da16ef7717b684a7742b899d9e45bc5b30a8ad816feb07aca8ad30994adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4280bf95d0247a5105c3066fbc15d5a6925ce0073ed0f111d1a866e3a1e939c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4280bf95d0247a5105c3066fbc15d5a6925ce0073ed0f111d1a866e3a1e939c->enter($__internal_d4280bf95d0247a5105c3066fbc15d5a6925ce0073ed0f111d1a866e3a1e939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_d4280bf95d0247a5105c3066fbc15d5a6925ce0073ed0f111d1a866e3a1e939c->leave($__internal_d4280bf95d0247a5105c3066fbc15d5a6925ce0073ed0f111d1a866e3a1e939c_prof);

        
        $__internal_9bf8da16ef7717b684a7742b899d9e45bc5b30a8ad816feb07aca8ad30994adc->leave($__internal_9bf8da16ef7717b684a7742b899d9e45bc5b30a8ad816feb07aca8ad30994adc_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3a0e19ec9c096c75f96f3cb4ed173257adf4defc4be66ac4deb5b8efba3424a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0e19ec9c096c75f96f3cb4ed173257adf4defc4be66ac4deb5b8efba3424a6->enter($__internal_3a0e19ec9c096c75f96f3cb4ed173257adf4defc4be66ac4deb5b8efba3424a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_3365c63d4014b4b52249c53dfcb5458927f43d5b283ba7c03d97048284fedf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3365c63d4014b4b52249c53dfcb5458927f43d5b283ba7c03d97048284fedf23->enter($__internal_3365c63d4014b4b52249c53dfcb5458927f43d5b283ba7c03d97048284fedf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3365c63d4014b4b52249c53dfcb5458927f43d5b283ba7c03d97048284fedf23->leave($__internal_3365c63d4014b4b52249c53dfcb5458927f43d5b283ba7c03d97048284fedf23_prof);

        
        $__internal_3a0e19ec9c096c75f96f3cb4ed173257adf4defc4be66ac4deb5b8efba3424a6->leave($__internal_3a0e19ec9c096c75f96f3cb4ed173257adf4defc4be66ac4deb5b8efba3424a6_prof);

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
", "clinicaPaniBundle:Default:404.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\404.html.twig");
    }
}
