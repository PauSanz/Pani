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
        $__internal_db229136f80aec7cdc7158b88c689bab37b18bc188a9f62133aadcfb1b01dddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db229136f80aec7cdc7158b88c689bab37b18bc188a9f62133aadcfb1b01dddc->enter($__internal_db229136f80aec7cdc7158b88c689bab37b18bc188a9f62133aadcfb1b01dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_31e5be3944f15a65fba5845cde7e9d4562b0d6b1a912387932ab1f5ba47722cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e5be3944f15a65fba5845cde7e9d4562b0d6b1a912387932ab1f5ba47722cf->enter($__internal_31e5be3944f15a65fba5845cde7e9d4562b0d6b1a912387932ab1f5ba47722cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db229136f80aec7cdc7158b88c689bab37b18bc188a9f62133aadcfb1b01dddc->leave($__internal_db229136f80aec7cdc7158b88c689bab37b18bc188a9f62133aadcfb1b01dddc_prof);

        
        $__internal_31e5be3944f15a65fba5845cde7e9d4562b0d6b1a912387932ab1f5ba47722cf->leave($__internal_31e5be3944f15a65fba5845cde7e9d4562b0d6b1a912387932ab1f5ba47722cf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_241e0060dc02555afe8819a4e04d76e5e6c1c24fe13f659f6ecde475df2c24cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241e0060dc02555afe8819a4e04d76e5e6c1c24fe13f659f6ecde475df2c24cf->enter($__internal_241e0060dc02555afe8819a4e04d76e5e6c1c24fe13f659f6ecde475df2c24cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_909b9c355199c99e4590257d098c043cfebf366ef25f767f090206b97a185af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909b9c355199c99e4590257d098c043cfebf366ef25f767f090206b97a185af0->enter($__internal_909b9c355199c99e4590257d098c043cfebf366ef25f767f090206b97a185af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_909b9c355199c99e4590257d098c043cfebf366ef25f767f090206b97a185af0->leave($__internal_909b9c355199c99e4590257d098c043cfebf366ef25f767f090206b97a185af0_prof);

        
        $__internal_241e0060dc02555afe8819a4e04d76e5e6c1c24fe13f659f6ecde475df2c24cf->leave($__internal_241e0060dc02555afe8819a4e04d76e5e6c1c24fe13f659f6ecde475df2c24cf_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f78c7cf8037ceb9dbc68d2003d33e11adfa60e80d22a6f6a0edac342e4c55e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78c7cf8037ceb9dbc68d2003d33e11adfa60e80d22a6f6a0edac342e4c55e3c->enter($__internal_f78c7cf8037ceb9dbc68d2003d33e11adfa60e80d22a6f6a0edac342e4c55e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8218b1c517f2a2e6ffa1fde6cdb97794b0b38365b4dcc239052dc09796a0ac27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8218b1c517f2a2e6ffa1fde6cdb97794b0b38365b4dcc239052dc09796a0ac27->enter($__internal_8218b1c517f2a2e6ffa1fde6cdb97794b0b38365b4dcc239052dc09796a0ac27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8218b1c517f2a2e6ffa1fde6cdb97794b0b38365b4dcc239052dc09796a0ac27->leave($__internal_8218b1c517f2a2e6ffa1fde6cdb97794b0b38365b4dcc239052dc09796a0ac27_prof);

        
        $__internal_f78c7cf8037ceb9dbc68d2003d33e11adfa60e80d22a6f6a0edac342e4c55e3c->leave($__internal_f78c7cf8037ceb9dbc68d2003d33e11adfa60e80d22a6f6a0edac342e4c55e3c_prof);

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
