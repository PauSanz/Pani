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
        $__internal_313fb6398beaa5c16f9bb8f25dc140c50719e640a9c90b2f2d5e71616cce62d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313fb6398beaa5c16f9bb8f25dc140c50719e640a9c90b2f2d5e71616cce62d5->enter($__internal_313fb6398beaa5c16f9bb8f25dc140c50719e640a9c90b2f2d5e71616cce62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_2f4114c30f53eee347dcc3d94ba895d5d04cb4fa90dc07162729a084d3503561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4114c30f53eee347dcc3d94ba895d5d04cb4fa90dc07162729a084d3503561->enter($__internal_2f4114c30f53eee347dcc3d94ba895d5d04cb4fa90dc07162729a084d3503561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313fb6398beaa5c16f9bb8f25dc140c50719e640a9c90b2f2d5e71616cce62d5->leave($__internal_313fb6398beaa5c16f9bb8f25dc140c50719e640a9c90b2f2d5e71616cce62d5_prof);

        
        $__internal_2f4114c30f53eee347dcc3d94ba895d5d04cb4fa90dc07162729a084d3503561->leave($__internal_2f4114c30f53eee347dcc3d94ba895d5d04cb4fa90dc07162729a084d3503561_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b578136eb6088744ffae7413e79c2c615596073ee51708d69422d0725a19c64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b578136eb6088744ffae7413e79c2c615596073ee51708d69422d0725a19c64b->enter($__internal_b578136eb6088744ffae7413e79c2c615596073ee51708d69422d0725a19c64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_000be2319593ec9be7132306fd0a02417c3281e6f6ee9fe493830ef0cc224937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000be2319593ec9be7132306fd0a02417c3281e6f6ee9fe493830ef0cc224937->enter($__internal_000be2319593ec9be7132306fd0a02417c3281e6f6ee9fe493830ef0cc224937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_000be2319593ec9be7132306fd0a02417c3281e6f6ee9fe493830ef0cc224937->leave($__internal_000be2319593ec9be7132306fd0a02417c3281e6f6ee9fe493830ef0cc224937_prof);

        
        $__internal_b578136eb6088744ffae7413e79c2c615596073ee51708d69422d0725a19c64b->leave($__internal_b578136eb6088744ffae7413e79c2c615596073ee51708d69422d0725a19c64b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_09ab261f6cd7c006efee1c2823d8c75283c1297b50c5ff330fe46687873cb313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ab261f6cd7c006efee1c2823d8c75283c1297b50c5ff330fe46687873cb313->enter($__internal_09ab261f6cd7c006efee1c2823d8c75283c1297b50c5ff330fe46687873cb313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_835badfeeb2391446558f31911480ecd7ace4834024965e73bc2853a81cf6e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835badfeeb2391446558f31911480ecd7ace4834024965e73bc2853a81cf6e21->enter($__internal_835badfeeb2391446558f31911480ecd7ace4834024965e73bc2853a81cf6e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_835badfeeb2391446558f31911480ecd7ace4834024965e73bc2853a81cf6e21->leave($__internal_835badfeeb2391446558f31911480ecd7ace4834024965e73bc2853a81cf6e21_prof);

        
        $__internal_09ab261f6cd7c006efee1c2823d8c75283c1297b50c5ff330fe46687873cb313->leave($__internal_09ab261f6cd7c006efee1c2823d8c75283c1297b50c5ff330fe46687873cb313_prof);

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
