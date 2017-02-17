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
        $__internal_98bda1f0d8dd10008ef9309a8eb29c64c67ec23b2092541db97bbcddf3781b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bda1f0d8dd10008ef9309a8eb29c64c67ec23b2092541db97bbcddf3781b49->enter($__internal_98bda1f0d8dd10008ef9309a8eb29c64c67ec23b2092541db97bbcddf3781b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $__internal_f647187b18edff370f4cfa770daeb958466622e19bdce5baf0ee9a449d452c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f647187b18edff370f4cfa770daeb958466622e19bdce5baf0ee9a449d452c0f->enter($__internal_f647187b18edff370f4cfa770daeb958466622e19bdce5baf0ee9a449d452c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bda1f0d8dd10008ef9309a8eb29c64c67ec23b2092541db97bbcddf3781b49->leave($__internal_98bda1f0d8dd10008ef9309a8eb29c64c67ec23b2092541db97bbcddf3781b49_prof);

        
        $__internal_f647187b18edff370f4cfa770daeb958466622e19bdce5baf0ee9a449d452c0f->leave($__internal_f647187b18edff370f4cfa770daeb958466622e19bdce5baf0ee9a449d452c0f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2395927a5d2eb64536bf93bfe31cf668b417e7553b5ea36270cfbeb466373d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2395927a5d2eb64536bf93bfe31cf668b417e7553b5ea36270cfbeb466373d81->enter($__internal_2395927a5d2eb64536bf93bfe31cf668b417e7553b5ea36270cfbeb466373d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efae835ec287d0151b802646e23ddca220e3c62c9da81c60cb382ae297e52fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efae835ec287d0151b802646e23ddca220e3c62c9da81c60cb382ae297e52fbe->enter($__internal_efae835ec287d0151b802646e23ddca220e3c62c9da81c60cb382ae297e52fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_efae835ec287d0151b802646e23ddca220e3c62c9da81c60cb382ae297e52fbe->leave($__internal_efae835ec287d0151b802646e23ddca220e3c62c9da81c60cb382ae297e52fbe_prof);

        
        $__internal_2395927a5d2eb64536bf93bfe31cf668b417e7553b5ea36270cfbeb466373d81->leave($__internal_2395927a5d2eb64536bf93bfe31cf668b417e7553b5ea36270cfbeb466373d81_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c6d0c36ffb668766a64c9a1524fd8c69fcefd0fa2bf42992b031faa9beef38cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d0c36ffb668766a64c9a1524fd8c69fcefd0fa2bf42992b031faa9beef38cb->enter($__internal_c6d0c36ffb668766a64c9a1524fd8c69fcefd0fa2bf42992b031faa9beef38cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_b1b450981d7b7a670e4dbf074a684f4a6c342cdfbda7a832d0b95bacac2adfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b450981d7b7a670e4dbf074a684f4a6c342cdfbda7a832d0b95bacac2adfef->enter($__internal_b1b450981d7b7a670e4dbf074a684f4a6c342cdfbda7a832d0b95bacac2adfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b1b450981d7b7a670e4dbf074a684f4a6c342cdfbda7a832d0b95bacac2adfef->leave($__internal_b1b450981d7b7a670e4dbf074a684f4a6c342cdfbda7a832d0b95bacac2adfef_prof);

        
        $__internal_c6d0c36ffb668766a64c9a1524fd8c69fcefd0fa2bf42992b031faa9beef38cb->leave($__internal_c6d0c36ffb668766a64c9a1524fd8c69fcefd0fa2bf42992b031faa9beef38cb_prof);

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
