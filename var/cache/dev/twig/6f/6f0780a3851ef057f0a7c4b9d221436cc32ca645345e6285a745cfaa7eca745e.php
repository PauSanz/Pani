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
        $__internal_a2c1cdcc7c29e2f169a3daea9fcca4b6a69c8125700b998ebc60effa3b98e26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c1cdcc7c29e2f169a3daea9fcca4b6a69c8125700b998ebc60effa3b98e26d->enter($__internal_a2c1cdcc7c29e2f169a3daea9fcca4b6a69c8125700b998ebc60effa3b98e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $__internal_2d6d009f04317188952d6fcfd140c3e69fc045c5b72f4b82d05e5ab1f275edd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6d009f04317188952d6fcfd140c3e69fc045c5b72f4b82d05e5ab1f275edd6->enter($__internal_2d6d009f04317188952d6fcfd140c3e69fc045c5b72f4b82d05e5ab1f275edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c1cdcc7c29e2f169a3daea9fcca4b6a69c8125700b998ebc60effa3b98e26d->leave($__internal_a2c1cdcc7c29e2f169a3daea9fcca4b6a69c8125700b998ebc60effa3b98e26d_prof);

        
        $__internal_2d6d009f04317188952d6fcfd140c3e69fc045c5b72f4b82d05e5ab1f275edd6->leave($__internal_2d6d009f04317188952d6fcfd140c3e69fc045c5b72f4b82d05e5ab1f275edd6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8634158098d88727cd89101ee452118c19018cc3a1058826a4f59d52b0e59c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8634158098d88727cd89101ee452118c19018cc3a1058826a4f59d52b0e59c54->enter($__internal_8634158098d88727cd89101ee452118c19018cc3a1058826a4f59d52b0e59c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd82df3db9a068227649528e3864f8612415616b3e10f3aec0211b5d06b3d61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd82df3db9a068227649528e3864f8612415616b3e10f3aec0211b5d06b3d61d->enter($__internal_cd82df3db9a068227649528e3864f8612415616b3e10f3aec0211b5d06b3d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_cd82df3db9a068227649528e3864f8612415616b3e10f3aec0211b5d06b3d61d->leave($__internal_cd82df3db9a068227649528e3864f8612415616b3e10f3aec0211b5d06b3d61d_prof);

        
        $__internal_8634158098d88727cd89101ee452118c19018cc3a1058826a4f59d52b0e59c54->leave($__internal_8634158098d88727cd89101ee452118c19018cc3a1058826a4f59d52b0e59c54_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ff64394535ec030b2693287bf19d826ef905375c768647906e45733791c19420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff64394535ec030b2693287bf19d826ef905375c768647906e45733791c19420->enter($__internal_ff64394535ec030b2693287bf19d826ef905375c768647906e45733791c19420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_84a064bdc03c50ffa1b1017f2d202e241843549084f908efada83faf79c4c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a064bdc03c50ffa1b1017f2d202e241843549084f908efada83faf79c4c78a->enter($__internal_84a064bdc03c50ffa1b1017f2d202e241843549084f908efada83faf79c4c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_84a064bdc03c50ffa1b1017f2d202e241843549084f908efada83faf79c4c78a->leave($__internal_84a064bdc03c50ffa1b1017f2d202e241843549084f908efada83faf79c4c78a_prof);

        
        $__internal_ff64394535ec030b2693287bf19d826ef905375c768647906e45733791c19420->leave($__internal_ff64394535ec030b2693287bf19d826ef905375c768647906e45733791c19420_prof);

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
