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
        $__internal_f10aea16e5abcb861eb0ceccb38a39f7c5fb3aaf0ee7083e21ea14a12412665c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10aea16e5abcb861eb0ceccb38a39f7c5fb3aaf0ee7083e21ea14a12412665c->enter($__internal_f10aea16e5abcb861eb0ceccb38a39f7c5fb3aaf0ee7083e21ea14a12412665c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_50583dde76930db22bce9f8426e5e616d89b976c73aea9eb03fab8258d586c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50583dde76930db22bce9f8426e5e616d89b976c73aea9eb03fab8258d586c10->enter($__internal_50583dde76930db22bce9f8426e5e616d89b976c73aea9eb03fab8258d586c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10aea16e5abcb861eb0ceccb38a39f7c5fb3aaf0ee7083e21ea14a12412665c->leave($__internal_f10aea16e5abcb861eb0ceccb38a39f7c5fb3aaf0ee7083e21ea14a12412665c_prof);

        
        $__internal_50583dde76930db22bce9f8426e5e616d89b976c73aea9eb03fab8258d586c10->leave($__internal_50583dde76930db22bce9f8426e5e616d89b976c73aea9eb03fab8258d586c10_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_55071f5c9380b1d30aa2e84c47c3176c0d9e370f8045ef69e0f9c76c60cb7dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55071f5c9380b1d30aa2e84c47c3176c0d9e370f8045ef69e0f9c76c60cb7dac->enter($__internal_55071f5c9380b1d30aa2e84c47c3176c0d9e370f8045ef69e0f9c76c60cb7dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bd8799b91f0b87c9344f6a572bd978ac1203a73c671e02d02cb9691676759b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8799b91f0b87c9344f6a572bd978ac1203a73c671e02d02cb9691676759b5->enter($__internal_6bd8799b91f0b87c9344f6a572bd978ac1203a73c671e02d02cb9691676759b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_6bd8799b91f0b87c9344f6a572bd978ac1203a73c671e02d02cb9691676759b5->leave($__internal_6bd8799b91f0b87c9344f6a572bd978ac1203a73c671e02d02cb9691676759b5_prof);

        
        $__internal_55071f5c9380b1d30aa2e84c47c3176c0d9e370f8045ef69e0f9c76c60cb7dac->leave($__internal_55071f5c9380b1d30aa2e84c47c3176c0d9e370f8045ef69e0f9c76c60cb7dac_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6c31734c4d19cb0d7aae789361cf98e18c018a4a5f3a9092d096366b41fcf553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c31734c4d19cb0d7aae789361cf98e18c018a4a5f3a9092d096366b41fcf553->enter($__internal_6c31734c4d19cb0d7aae789361cf98e18c018a4a5f3a9092d096366b41fcf553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_93dc1acb57645255c2a0612f88f3d5497a32763d754a0eabe05da79d5eabc9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93dc1acb57645255c2a0612f88f3d5497a32763d754a0eabe05da79d5eabc9a8->enter($__internal_93dc1acb57645255c2a0612f88f3d5497a32763d754a0eabe05da79d5eabc9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_93dc1acb57645255c2a0612f88f3d5497a32763d754a0eabe05da79d5eabc9a8->leave($__internal_93dc1acb57645255c2a0612f88f3d5497a32763d754a0eabe05da79d5eabc9a8_prof);

        
        $__internal_6c31734c4d19cb0d7aae789361cf98e18c018a4a5f3a9092d096366b41fcf553->leave($__internal_6c31734c4d19cb0d7aae789361cf98e18c018a4a5f3a9092d096366b41fcf553_prof);

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
