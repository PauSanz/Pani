<?php

/* clinicaPaniBundle:Default:404.html.twig */
class __TwigTemplate_733899b15f57e9b26539a81c85d7276bed9cce9baa48cb44ad5174820cfcece5 extends Twig_Template
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
        $__internal_52f40d9b696eb73ad84274a9f447dc33eae3cf53fe1ec00ced5bf310aa735ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f40d9b696eb73ad84274a9f447dc33eae3cf53fe1ec00ced5bf310aa735ae9->enter($__internal_52f40d9b696eb73ad84274a9f447dc33eae3cf53fe1ec00ced5bf310aa735ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_9e428a7eaf37f2ed7de52eb267e2d8a256374bb01dde095df2a29dca0841aaf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e428a7eaf37f2ed7de52eb267e2d8a256374bb01dde095df2a29dca0841aaf6->enter($__internal_9e428a7eaf37f2ed7de52eb267e2d8a256374bb01dde095df2a29dca0841aaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f40d9b696eb73ad84274a9f447dc33eae3cf53fe1ec00ced5bf310aa735ae9->leave($__internal_52f40d9b696eb73ad84274a9f447dc33eae3cf53fe1ec00ced5bf310aa735ae9_prof);

        
        $__internal_9e428a7eaf37f2ed7de52eb267e2d8a256374bb01dde095df2a29dca0841aaf6->leave($__internal_9e428a7eaf37f2ed7de52eb267e2d8a256374bb01dde095df2a29dca0841aaf6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4409d47507abc8bc1f9abdcb153144936086879235d713d2721930949d8513e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4409d47507abc8bc1f9abdcb153144936086879235d713d2721930949d8513e3->enter($__internal_4409d47507abc8bc1f9abdcb153144936086879235d713d2721930949d8513e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fd79c61986c693821b26ce08cca243ee07e79d5d2c284e648588d3224ca0cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd79c61986c693821b26ce08cca243ee07e79d5d2c284e648588d3224ca0cd1->enter($__internal_2fd79c61986c693821b26ce08cca243ee07e79d5d2c284e648588d3224ca0cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_2fd79c61986c693821b26ce08cca243ee07e79d5d2c284e648588d3224ca0cd1->leave($__internal_2fd79c61986c693821b26ce08cca243ee07e79d5d2c284e648588d3224ca0cd1_prof);

        
        $__internal_4409d47507abc8bc1f9abdcb153144936086879235d713d2721930949d8513e3->leave($__internal_4409d47507abc8bc1f9abdcb153144936086879235d713d2721930949d8513e3_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_444a47010a491f3e23bedf646fb9290f60ef7a3425ea6cbffcf9cca320b5b138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444a47010a491f3e23bedf646fb9290f60ef7a3425ea6cbffcf9cca320b5b138->enter($__internal_444a47010a491f3e23bedf646fb9290f60ef7a3425ea6cbffcf9cca320b5b138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_327650a70ff8e469e086ea9ef8967d468ebbdac399b51657eea1fbbab56267f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327650a70ff8e469e086ea9ef8967d468ebbdac399b51657eea1fbbab56267f8->enter($__internal_327650a70ff8e469e086ea9ef8967d468ebbdac399b51657eea1fbbab56267f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_327650a70ff8e469e086ea9ef8967d468ebbdac399b51657eea1fbbab56267f8->leave($__internal_327650a70ff8e469e086ea9ef8967d468ebbdac399b51657eea1fbbab56267f8_prof);

        
        $__internal_444a47010a491f3e23bedf646fb9290f60ef7a3425ea6cbffcf9cca320b5b138->leave($__internal_444a47010a491f3e23bedf646fb9290f60ef7a3425ea6cbffcf9cca320b5b138_prof);

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
", "clinicaPaniBundle:Default:404.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/404.html.twig");
    }
}
