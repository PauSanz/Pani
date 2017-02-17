<?php

/* clinicaPaniBundle:Default:404.html.twig */
class __TwigTemplate_733899b15f57e9b26539a81c85d7276bed9cce9baa48cb44ad5174820cfcece5 extends Twig_Template
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
        $__internal_d4de0b9fbcb1abe38b9b8149fe36ee87cadbd73131cc5ba9884a907d80bdfe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4de0b9fbcb1abe38b9b8149fe36ee87cadbd73131cc5ba9884a907d80bdfe32->enter($__internal_d4de0b9fbcb1abe38b9b8149fe36ee87cadbd73131cc5ba9884a907d80bdfe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_4b58b96b712daaee2608314a6b0cf7bb923ee7e2cbbc8e2bc68dc51f6dcbc61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b58b96b712daaee2608314a6b0cf7bb923ee7e2cbbc8e2bc68dc51f6dcbc61a->enter($__internal_4b58b96b712daaee2608314a6b0cf7bb923ee7e2cbbc8e2bc68dc51f6dcbc61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4de0b9fbcb1abe38b9b8149fe36ee87cadbd73131cc5ba9884a907d80bdfe32->leave($__internal_d4de0b9fbcb1abe38b9b8149fe36ee87cadbd73131cc5ba9884a907d80bdfe32_prof);

        
        $__internal_4b58b96b712daaee2608314a6b0cf7bb923ee7e2cbbc8e2bc68dc51f6dcbc61a->leave($__internal_4b58b96b712daaee2608314a6b0cf7bb923ee7e2cbbc8e2bc68dc51f6dcbc61a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9997620a69f795c5ace02b744c5da4a8ca835522966fe218942594040a16280b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9997620a69f795c5ace02b744c5da4a8ca835522966fe218942594040a16280b->enter($__internal_9997620a69f795c5ace02b744c5da4a8ca835522966fe218942594040a16280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_595f47bc9a2e4db2e7da5feec60e85430d80cce5b9fea169cae94d9e63104a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595f47bc9a2e4db2e7da5feec60e85430d80cce5b9fea169cae94d9e63104a8f->enter($__internal_595f47bc9a2e4db2e7da5feec60e85430d80cce5b9fea169cae94d9e63104a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_595f47bc9a2e4db2e7da5feec60e85430d80cce5b9fea169cae94d9e63104a8f->leave($__internal_595f47bc9a2e4db2e7da5feec60e85430d80cce5b9fea169cae94d9e63104a8f_prof);

        
        $__internal_9997620a69f795c5ace02b744c5da4a8ca835522966fe218942594040a16280b->leave($__internal_9997620a69f795c5ace02b744c5da4a8ca835522966fe218942594040a16280b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0d9a1b7e3108a3ad7e78d0948c3f33b5124d53288390a110e75935e85519dc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9a1b7e3108a3ad7e78d0948c3f33b5124d53288390a110e75935e85519dc08->enter($__internal_0d9a1b7e3108a3ad7e78d0948c3f33b5124d53288390a110e75935e85519dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_595bf105f762c115574c282e5194df0afa108708bb6b31506bfaf04c7bee8dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595bf105f762c115574c282e5194df0afa108708bb6b31506bfaf04c7bee8dcb->enter($__internal_595bf105f762c115574c282e5194df0afa108708bb6b31506bfaf04c7bee8dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_595bf105f762c115574c282e5194df0afa108708bb6b31506bfaf04c7bee8dcb->leave($__internal_595bf105f762c115574c282e5194df0afa108708bb6b31506bfaf04c7bee8dcb_prof);

        
        $__internal_0d9a1b7e3108a3ad7e78d0948c3f33b5124d53288390a110e75935e85519dc08->leave($__internal_0d9a1b7e3108a3ad7e78d0948c3f33b5124d53288390a110e75935e85519dc08_prof);

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
", "clinicaPaniBundle:Default:404.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/404.html.twig");
    }
}
