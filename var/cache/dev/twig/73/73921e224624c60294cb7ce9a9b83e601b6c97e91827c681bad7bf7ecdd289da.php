<?php

/* clinicaPaniBundle:Default:apacient.html.twig */
class __TwigTemplate_3f4c2a82c063de85e8f482f17e87671ff11761d7cb57f46a0a55d6380af0f40b extends Twig_Template
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
        $__internal_e31a0ea69d5c542c6ccca07738352f438fdec417b42b968edbe89956f87a5d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31a0ea69d5c542c6ccca07738352f438fdec417b42b968edbe89956f87a5d37->enter($__internal_e31a0ea69d5c542c6ccca07738352f438fdec417b42b968edbe89956f87a5d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_773248d9e520775033eeb5f5a196ed2f65e825c5ae6ece50402cc9f33f948759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773248d9e520775033eeb5f5a196ed2f65e825c5ae6ece50402cc9f33f948759->enter($__internal_773248d9e520775033eeb5f5a196ed2f65e825c5ae6ece50402cc9f33f948759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e31a0ea69d5c542c6ccca07738352f438fdec417b42b968edbe89956f87a5d37->leave($__internal_e31a0ea69d5c542c6ccca07738352f438fdec417b42b968edbe89956f87a5d37_prof);

        
        $__internal_773248d9e520775033eeb5f5a196ed2f65e825c5ae6ece50402cc9f33f948759->leave($__internal_773248d9e520775033eeb5f5a196ed2f65e825c5ae6ece50402cc9f33f948759_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_73fbe48ec642126f9b6db396fe92027731fde871df2bbe1cb68ef15fc52bbe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fbe48ec642126f9b6db396fe92027731fde871df2bbe1cb68ef15fc52bbe47->enter($__internal_73fbe48ec642126f9b6db396fe92027731fde871df2bbe1cb68ef15fc52bbe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_902186c95d60a02f7b94fd034bbd0a2de0e78b297e8065bc04e6ff3c8ab52d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902186c95d60a02f7b94fd034bbd0a2de0e78b297e8065bc04e6ff3c8ab52d96->enter($__internal_902186c95d60a02f7b94fd034bbd0a2de0e78b297e8065bc04e6ff3c8ab52d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_902186c95d60a02f7b94fd034bbd0a2de0e78b297e8065bc04e6ff3c8ab52d96->leave($__internal_902186c95d60a02f7b94fd034bbd0a2de0e78b297e8065bc04e6ff3c8ab52d96_prof);

        
        $__internal_73fbe48ec642126f9b6db396fe92027731fde871df2bbe1cb68ef15fc52bbe47->leave($__internal_73fbe48ec642126f9b6db396fe92027731fde871df2bbe1cb68ef15fc52bbe47_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_465c92c61e368b64558ed1e98730d53a8093b7e1367343ef976b4b3ef32a12cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465c92c61e368b64558ed1e98730d53a8093b7e1367343ef976b4b3ef32a12cf->enter($__internal_465c92c61e368b64558ed1e98730d53a8093b7e1367343ef976b4b3ef32a12cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_561b7b99dffed08fb9e149a6b8ec3b72d562c42b7555dc047b4551d7b4791560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561b7b99dffed08fb9e149a6b8ec3b72d562c42b7555dc047b4551d7b4791560->enter($__internal_561b7b99dffed08fb9e149a6b8ec3b72d562c42b7555dc047b4551d7b4791560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"container\">
        <h1> ";
        // line 5
        echo twig_escape_filter($this->env, ($context["titol"] ?? $this->getContext($context, "titol")), "html", null, true);
        echo "</h1>    
        <div>
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_561b7b99dffed08fb9e149a6b8ec3b72d562c42b7555dc047b4551d7b4791560->leave($__internal_561b7b99dffed08fb9e149a6b8ec3b72d562c42b7555dc047b4551d7b4791560_prof);

        
        $__internal_465c92c61e368b64558ed1e98730d53a8093b7e1367343ef976b4b3ef32a12cf->leave($__internal_465c92c61e368b64558ed1e98730d53a8093b7e1367343ef976b4b3ef32a12cf_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:apacient.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/apacient.html.twig");
    }
}
