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
        $__internal_dbd3cbf6fc7616b2465bbe683e4a21afecb1617ebd605f77977099b3f13f2016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd3cbf6fc7616b2465bbe683e4a21afecb1617ebd605f77977099b3f13f2016->enter($__internal_dbd3cbf6fc7616b2465bbe683e4a21afecb1617ebd605f77977099b3f13f2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $__internal_3036515fab8634055e9cfce607f15c7315095e0ab08b5943c8790527cceb4eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3036515fab8634055e9cfce607f15c7315095e0ab08b5943c8790527cceb4eaa->enter($__internal_3036515fab8634055e9cfce607f15c7315095e0ab08b5943c8790527cceb4eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd3cbf6fc7616b2465bbe683e4a21afecb1617ebd605f77977099b3f13f2016->leave($__internal_dbd3cbf6fc7616b2465bbe683e4a21afecb1617ebd605f77977099b3f13f2016_prof);

        
        $__internal_3036515fab8634055e9cfce607f15c7315095e0ab08b5943c8790527cceb4eaa->leave($__internal_3036515fab8634055e9cfce607f15c7315095e0ab08b5943c8790527cceb4eaa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36f4fe8b148cbacf3853106e0432a6bc302eb720ae458bb1cd24ced6b2b22b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36f4fe8b148cbacf3853106e0432a6bc302eb720ae458bb1cd24ced6b2b22b4->enter($__internal_d36f4fe8b148cbacf3853106e0432a6bc302eb720ae458bb1cd24ced6b2b22b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a1c4c4c90687d390f2e339bc5292748d90fb54e236946376ffbec45e9f7c91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1c4c4c90687d390f2e339bc5292748d90fb54e236946376ffbec45e9f7c91b->enter($__internal_9a1c4c4c90687d390f2e339bc5292748d90fb54e236946376ffbec45e9f7c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_9a1c4c4c90687d390f2e339bc5292748d90fb54e236946376ffbec45e9f7c91b->leave($__internal_9a1c4c4c90687d390f2e339bc5292748d90fb54e236946376ffbec45e9f7c91b_prof);

        
        $__internal_d36f4fe8b148cbacf3853106e0432a6bc302eb720ae458bb1cd24ced6b2b22b4->leave($__internal_d36f4fe8b148cbacf3853106e0432a6bc302eb720ae458bb1cd24ced6b2b22b4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d3c8553c3dfc43d7a2123be35263035094735fd35e0e120267180db276e11745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c8553c3dfc43d7a2123be35263035094735fd35e0e120267180db276e11745->enter($__internal_d3c8553c3dfc43d7a2123be35263035094735fd35e0e120267180db276e11745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e14ee4fa76e4e80e0fedb9a68f40774442dcdabda52247011e6d3a9a57e19a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14ee4fa76e4e80e0fedb9a68f40774442dcdabda52247011e6d3a9a57e19a01->enter($__internal_e14ee4fa76e4e80e0fedb9a68f40774442dcdabda52247011e6d3a9a57e19a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e14ee4fa76e4e80e0fedb9a68f40774442dcdabda52247011e6d3a9a57e19a01->leave($__internal_e14ee4fa76e4e80e0fedb9a68f40774442dcdabda52247011e6d3a9a57e19a01_prof);

        
        $__internal_d3c8553c3dfc43d7a2123be35263035094735fd35e0e120267180db276e11745->leave($__internal_d3c8553c3dfc43d7a2123be35263035094735fd35e0e120267180db276e11745_prof);

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
