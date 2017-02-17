<?php

/* clinicaPaniBundle:Default:apacient.html.twig */
class __TwigTemplate_1b734158a59ad896946a00dcdee99514dcc63231e79872f17bf610875a247739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:apacient.html.twig", 1);
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
        $__internal_faba1299b4744a477fef5461a5d50337e14e7b108ccd1aae5a18ebe7bdfb8fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faba1299b4744a477fef5461a5d50337e14e7b108ccd1aae5a18ebe7bdfb8fbf->enter($__internal_faba1299b4744a477fef5461a5d50337e14e7b108ccd1aae5a18ebe7bdfb8fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_14667ff8bf7b3d99a72c189467e4f270697dbf8fdc3f6e2c9e003134eae4422d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14667ff8bf7b3d99a72c189467e4f270697dbf8fdc3f6e2c9e003134eae4422d->enter($__internal_14667ff8bf7b3d99a72c189467e4f270697dbf8fdc3f6e2c9e003134eae4422d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faba1299b4744a477fef5461a5d50337e14e7b108ccd1aae5a18ebe7bdfb8fbf->leave($__internal_faba1299b4744a477fef5461a5d50337e14e7b108ccd1aae5a18ebe7bdfb8fbf_prof);

        
        $__internal_14667ff8bf7b3d99a72c189467e4f270697dbf8fdc3f6e2c9e003134eae4422d->leave($__internal_14667ff8bf7b3d99a72c189467e4f270697dbf8fdc3f6e2c9e003134eae4422d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_42c82660596e24902bb4a5342771df4eaeed23abd483973b83b0c8a4bfcf05b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c82660596e24902bb4a5342771df4eaeed23abd483973b83b0c8a4bfcf05b9->enter($__internal_42c82660596e24902bb4a5342771df4eaeed23abd483973b83b0c8a4bfcf05b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_432c014be7cc2703ff0ba547189ebb78dce585c45c9a0a7477423c784bf3c6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432c014be7cc2703ff0ba547189ebb78dce585c45c9a0a7477423c784bf3c6dd->enter($__internal_432c014be7cc2703ff0ba547189ebb78dce585c45c9a0a7477423c784bf3c6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_432c014be7cc2703ff0ba547189ebb78dce585c45c9a0a7477423c784bf3c6dd->leave($__internal_432c014be7cc2703ff0ba547189ebb78dce585c45c9a0a7477423c784bf3c6dd_prof);

        
        $__internal_42c82660596e24902bb4a5342771df4eaeed23abd483973b83b0c8a4bfcf05b9->leave($__internal_42c82660596e24902bb4a5342771df4eaeed23abd483973b83b0c8a4bfcf05b9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e010f084a962e9e28d1a0ff5ec682f667ed13a09f3f02d4322bb494f18edf76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e010f084a962e9e28d1a0ff5ec682f667ed13a09f3f02d4322bb494f18edf76c->enter($__internal_e010f084a962e9e28d1a0ff5ec682f667ed13a09f3f02d4322bb494f18edf76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1d6998804ea00dd86110c8d3706acb5f2438dc3819162f713f4da3d98f18e9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6998804ea00dd86110c8d3706acb5f2438dc3819162f713f4da3d98f18e9f3->enter($__internal_1d6998804ea00dd86110c8d3706acb5f2438dc3819162f713f4da3d98f18e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"container\">
        <h1> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["titol"]) ? $context["titol"] : $this->getContext($context, "titol")), "html", null, true);
        echo "</h1>    
        <div>
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_1d6998804ea00dd86110c8d3706acb5f2438dc3819162f713f4da3d98f18e9f3->leave($__internal_1d6998804ea00dd86110c8d3706acb5f2438dc3819162f713f4da3d98f18e9f3_prof);

        
        $__internal_e010f084a962e9e28d1a0ff5ec682f667ed13a09f3f02d4322bb494f18edf76c->leave($__internal_e010f084a962e9e28d1a0ff5ec682f667ed13a09f3f02d4322bb494f18edf76c_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:apacient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 9,  80 => 8,  76 => 7,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Pacients{% endblock %}
{% block page_content %}
    <div class=\"container\">
        <h1> {{ titol }}</h1>    
        <div>
            {{ form_start(form)}}
            {{ form_widget(form)}}
            {{ form_end(form)}}
        </div>
    </div>
{% endblock %}", "clinicaPaniBundle:Default:apacient.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\apacient.html.twig");
    }
}
