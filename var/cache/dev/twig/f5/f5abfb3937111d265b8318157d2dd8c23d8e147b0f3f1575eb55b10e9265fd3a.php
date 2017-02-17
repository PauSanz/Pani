<?php

/* clinicaPaniBundle:Default:apacient.html.twig */
class __TwigTemplate_77dcea89838043e6edb7fd4f77f7faea8c328bf0555a8980919d4995080501a4 extends Twig_Template
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
        $__internal_e9b16fd0f98a6ba5706fbc61aae8aecab4ebcf7a5cd25b5ff099c6a880e8dcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b16fd0f98a6ba5706fbc61aae8aecab4ebcf7a5cd25b5ff099c6a880e8dcd2->enter($__internal_e9b16fd0f98a6ba5706fbc61aae8aecab4ebcf7a5cd25b5ff099c6a880e8dcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_09d00f1b963f2fc0179038e7b70b48ea9193a5698352f289c7afbd763e265888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d00f1b963f2fc0179038e7b70b48ea9193a5698352f289c7afbd763e265888->enter($__internal_09d00f1b963f2fc0179038e7b70b48ea9193a5698352f289c7afbd763e265888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b16fd0f98a6ba5706fbc61aae8aecab4ebcf7a5cd25b5ff099c6a880e8dcd2->leave($__internal_e9b16fd0f98a6ba5706fbc61aae8aecab4ebcf7a5cd25b5ff099c6a880e8dcd2_prof);

        
        $__internal_09d00f1b963f2fc0179038e7b70b48ea9193a5698352f289c7afbd763e265888->leave($__internal_09d00f1b963f2fc0179038e7b70b48ea9193a5698352f289c7afbd763e265888_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a915ac31c29c9a6c1a847219718e459f95bc3a687a1037e0fa7d1154262e2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a915ac31c29c9a6c1a847219718e459f95bc3a687a1037e0fa7d1154262e2a5->enter($__internal_3a915ac31c29c9a6c1a847219718e459f95bc3a687a1037e0fa7d1154262e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08b6e1f3af6b286c0ca1668306385e2b6319cd0791d83cbe1262c98c1bb910e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b6e1f3af6b286c0ca1668306385e2b6319cd0791d83cbe1262c98c1bb910e8->enter($__internal_08b6e1f3af6b286c0ca1668306385e2b6319cd0791d83cbe1262c98c1bb910e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_08b6e1f3af6b286c0ca1668306385e2b6319cd0791d83cbe1262c98c1bb910e8->leave($__internal_08b6e1f3af6b286c0ca1668306385e2b6319cd0791d83cbe1262c98c1bb910e8_prof);

        
        $__internal_3a915ac31c29c9a6c1a847219718e459f95bc3a687a1037e0fa7d1154262e2a5->leave($__internal_3a915ac31c29c9a6c1a847219718e459f95bc3a687a1037e0fa7d1154262e2a5_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_59a53241176cf70534d5152edb6584cef88b10b025f90f2ccd54f3721e442935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a53241176cf70534d5152edb6584cef88b10b025f90f2ccd54f3721e442935->enter($__internal_59a53241176cf70534d5152edb6584cef88b10b025f90f2ccd54f3721e442935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_fb9c6fc6e81257b4bebef615f110f6a0ef82da388913b6a0958b723d959d3841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9c6fc6e81257b4bebef615f110f6a0ef82da388913b6a0958b723d959d3841->enter($__internal_fb9c6fc6e81257b4bebef615f110f6a0ef82da388913b6a0958b723d959d3841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_fb9c6fc6e81257b4bebef615f110f6a0ef82da388913b6a0958b723d959d3841->leave($__internal_fb9c6fc6e81257b4bebef615f110f6a0ef82da388913b6a0958b723d959d3841_prof);

        
        $__internal_59a53241176cf70534d5152edb6584cef88b10b025f90f2ccd54f3721e442935->leave($__internal_59a53241176cf70534d5152edb6584cef88b10b025f90f2ccd54f3721e442935_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:apacient.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/apacient.html.twig");
    }
}
