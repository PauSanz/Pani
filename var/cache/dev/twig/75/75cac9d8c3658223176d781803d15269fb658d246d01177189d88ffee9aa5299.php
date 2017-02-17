<?php

/* @clinicaPani/Default/apacient.html.twig */
class __TwigTemplate_1b734158a59ad896946a00dcdee99514dcc63231e79872f17bf610875a247739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/apacient.html.twig", 1);
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
        $__internal_6a1adfb6f884743d705e66a3a90fc7f46f8775ef1e9f32ee070afa176eff1923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1adfb6f884743d705e66a3a90fc7f46f8775ef1e9f32ee070afa176eff1923->enter($__internal_6a1adfb6f884743d705e66a3a90fc7f46f8775ef1e9f32ee070afa176eff1923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/apacient.html.twig"));

        $__internal_7256c488a641e91d76473c7778ceffb57bad4661b4cc7f3f9917fdec8efe61da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256c488a641e91d76473c7778ceffb57bad4661b4cc7f3f9917fdec8efe61da->enter($__internal_7256c488a641e91d76473c7778ceffb57bad4661b4cc7f3f9917fdec8efe61da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1adfb6f884743d705e66a3a90fc7f46f8775ef1e9f32ee070afa176eff1923->leave($__internal_6a1adfb6f884743d705e66a3a90fc7f46f8775ef1e9f32ee070afa176eff1923_prof);

        
        $__internal_7256c488a641e91d76473c7778ceffb57bad4661b4cc7f3f9917fdec8efe61da->leave($__internal_7256c488a641e91d76473c7778ceffb57bad4661b4cc7f3f9917fdec8efe61da_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1187eef45bf55a5ec8b14bc3029f96d5bfb994d25ac65b6eb43aa1c379aea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1187eef45bf55a5ec8b14bc3029f96d5bfb994d25ac65b6eb43aa1c379aea7->enter($__internal_8a1187eef45bf55a5ec8b14bc3029f96d5bfb994d25ac65b6eb43aa1c379aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a656c1e896eea5099acc19cced3b0514dc89863ac79aca5eadad0a85ad656246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a656c1e896eea5099acc19cced3b0514dc89863ac79aca5eadad0a85ad656246->enter($__internal_a656c1e896eea5099acc19cced3b0514dc89863ac79aca5eadad0a85ad656246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_a656c1e896eea5099acc19cced3b0514dc89863ac79aca5eadad0a85ad656246->leave($__internal_a656c1e896eea5099acc19cced3b0514dc89863ac79aca5eadad0a85ad656246_prof);

        
        $__internal_8a1187eef45bf55a5ec8b14bc3029f96d5bfb994d25ac65b6eb43aa1c379aea7->leave($__internal_8a1187eef45bf55a5ec8b14bc3029f96d5bfb994d25ac65b6eb43aa1c379aea7_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_02c220d8633a36fbf92282921a1672d2a12a2fd080dd38831ef0b105a61f727e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c220d8633a36fbf92282921a1672d2a12a2fd080dd38831ef0b105a61f727e->enter($__internal_02c220d8633a36fbf92282921a1672d2a12a2fd080dd38831ef0b105a61f727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_34aa3cf0d1f6ae365c7f7cc3a9a828c665d3b7b64259f6444c1cefc280df3e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34aa3cf0d1f6ae365c7f7cc3a9a828c665d3b7b64259f6444c1cefc280df3e23->enter($__internal_34aa3cf0d1f6ae365c7f7cc3a9a828c665d3b7b64259f6444c1cefc280df3e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_34aa3cf0d1f6ae365c7f7cc3a9a828c665d3b7b64259f6444c1cefc280df3e23->leave($__internal_34aa3cf0d1f6ae365c7f7cc3a9a828c665d3b7b64259f6444c1cefc280df3e23_prof);

        
        $__internal_02c220d8633a36fbf92282921a1672d2a12a2fd080dd38831ef0b105a61f727e->leave($__internal_02c220d8633a36fbf92282921a1672d2a12a2fd080dd38831ef0b105a61f727e_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/apacient.html.twig";
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
{% endblock %}", "@clinicaPani/Default/apacient.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\apacient.html.twig");
    }
}
