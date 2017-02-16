<?php

/* clinicaPaniBundle:Default:404.html.twig */
class __TwigTemplate_eb66e4c93dba3d9cc27a315a76176c82688f86974f4e48919f25f0a7c22dd10e extends Twig_Template
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
        $__internal_ffbd0cedc5245ff81c7b202dcb4d793b828ff90fdccd21a9f7ee2dc32e50e56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbd0cedc5245ff81c7b202dcb4d793b828ff90fdccd21a9f7ee2dc32e50e56c->enter($__internal_ffbd0cedc5245ff81c7b202dcb4d793b828ff90fdccd21a9f7ee2dc32e50e56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_40c18489f1737eead08a0ad0ab0833360c32300721336413e5417d94cb284ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c18489f1737eead08a0ad0ab0833360c32300721336413e5417d94cb284ace->enter($__internal_40c18489f1737eead08a0ad0ab0833360c32300721336413e5417d94cb284ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffbd0cedc5245ff81c7b202dcb4d793b828ff90fdccd21a9f7ee2dc32e50e56c->leave($__internal_ffbd0cedc5245ff81c7b202dcb4d793b828ff90fdccd21a9f7ee2dc32e50e56c_prof);

        
        $__internal_40c18489f1737eead08a0ad0ab0833360c32300721336413e5417d94cb284ace->leave($__internal_40c18489f1737eead08a0ad0ab0833360c32300721336413e5417d94cb284ace_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3f214aa9a80bc87d2b3af26dc548ee6fb3b24bb7f63aa71b8b4a2338c2ceef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f214aa9a80bc87d2b3af26dc548ee6fb3b24bb7f63aa71b8b4a2338c2ceef8->enter($__internal_d3f214aa9a80bc87d2b3af26dc548ee6fb3b24bb7f63aa71b8b4a2338c2ceef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ec8d98f88cafd8b30bd251d04072bbe9741788fe45afacb58c82e30121ea15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec8d98f88cafd8b30bd251d04072bbe9741788fe45afacb58c82e30121ea15e->enter($__internal_7ec8d98f88cafd8b30bd251d04072bbe9741788fe45afacb58c82e30121ea15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_7ec8d98f88cafd8b30bd251d04072bbe9741788fe45afacb58c82e30121ea15e->leave($__internal_7ec8d98f88cafd8b30bd251d04072bbe9741788fe45afacb58c82e30121ea15e_prof);

        
        $__internal_d3f214aa9a80bc87d2b3af26dc548ee6fb3b24bb7f63aa71b8b4a2338c2ceef8->leave($__internal_d3f214aa9a80bc87d2b3af26dc548ee6fb3b24bb7f63aa71b8b4a2338c2ceef8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4c14499e63d3f87b46a16444ec025b11b2e2f555c02cb6bd38f036da00d9840c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c14499e63d3f87b46a16444ec025b11b2e2f555c02cb6bd38f036da00d9840c->enter($__internal_4c14499e63d3f87b46a16444ec025b11b2e2f555c02cb6bd38f036da00d9840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_881683e384985005a81015b3941cdc456d64830182f88d8b597427963c25da35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881683e384985005a81015b3941cdc456d64830182f88d8b597427963c25da35->enter($__internal_881683e384985005a81015b3941cdc456d64830182f88d8b597427963c25da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_881683e384985005a81015b3941cdc456d64830182f88d8b597427963c25da35->leave($__internal_881683e384985005a81015b3941cdc456d64830182f88d8b597427963c25da35_prof);

        
        $__internal_4c14499e63d3f87b46a16444ec025b11b2e2f555c02cb6bd38f036da00d9840c->leave($__internal_4c14499e63d3f87b46a16444ec025b11b2e2f555c02cb6bd38f036da00d9840c_prof);

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
", "clinicaPaniBundle:Default:404.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/404.html.twig");
    }
}
