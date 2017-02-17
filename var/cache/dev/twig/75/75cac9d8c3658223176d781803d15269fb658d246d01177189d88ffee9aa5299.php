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
        $__internal_86fbe86e6a8e45e3796dc0b31864885ff09b5f09a639dcc4a20766f2da450e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fbe86e6a8e45e3796dc0b31864885ff09b5f09a639dcc4a20766f2da450e26->enter($__internal_86fbe86e6a8e45e3796dc0b31864885ff09b5f09a639dcc4a20766f2da450e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/apacient.html.twig"));

        $__internal_066b892b556dd954c1a016df4d8ece95fd5b25efa12c0c7206088df4a851755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066b892b556dd954c1a016df4d8ece95fd5b25efa12c0c7206088df4a851755d->enter($__internal_066b892b556dd954c1a016df4d8ece95fd5b25efa12c0c7206088df4a851755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86fbe86e6a8e45e3796dc0b31864885ff09b5f09a639dcc4a20766f2da450e26->leave($__internal_86fbe86e6a8e45e3796dc0b31864885ff09b5f09a639dcc4a20766f2da450e26_prof);

        
        $__internal_066b892b556dd954c1a016df4d8ece95fd5b25efa12c0c7206088df4a851755d->leave($__internal_066b892b556dd954c1a016df4d8ece95fd5b25efa12c0c7206088df4a851755d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd9f365a1943a343f0a65bbbd247b2cdfb997bab57a37d60a7ea6ef2ce9c3ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9f365a1943a343f0a65bbbd247b2cdfb997bab57a37d60a7ea6ef2ce9c3ec9->enter($__internal_dd9f365a1943a343f0a65bbbd247b2cdfb997bab57a37d60a7ea6ef2ce9c3ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be615e4e1bdc00603c3772a82073e4d13acdebcc31b1d053958a52c5e13b5194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be615e4e1bdc00603c3772a82073e4d13acdebcc31b1d053958a52c5e13b5194->enter($__internal_be615e4e1bdc00603c3772a82073e4d13acdebcc31b1d053958a52c5e13b5194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_be615e4e1bdc00603c3772a82073e4d13acdebcc31b1d053958a52c5e13b5194->leave($__internal_be615e4e1bdc00603c3772a82073e4d13acdebcc31b1d053958a52c5e13b5194_prof);

        
        $__internal_dd9f365a1943a343f0a65bbbd247b2cdfb997bab57a37d60a7ea6ef2ce9c3ec9->leave($__internal_dd9f365a1943a343f0a65bbbd247b2cdfb997bab57a37d60a7ea6ef2ce9c3ec9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_116734abcec838e32852577bf7a714603a03fdb7b3ae35b9c99f6196894d6010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116734abcec838e32852577bf7a714603a03fdb7b3ae35b9c99f6196894d6010->enter($__internal_116734abcec838e32852577bf7a714603a03fdb7b3ae35b9c99f6196894d6010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_274f7439db9cd51264343341aae759e5f3686dc98dbc8fc2a31016dbaf4ec341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274f7439db9cd51264343341aae759e5f3686dc98dbc8fc2a31016dbaf4ec341->enter($__internal_274f7439db9cd51264343341aae759e5f3686dc98dbc8fc2a31016dbaf4ec341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_274f7439db9cd51264343341aae759e5f3686dc98dbc8fc2a31016dbaf4ec341->leave($__internal_274f7439db9cd51264343341aae759e5f3686dc98dbc8fc2a31016dbaf4ec341_prof);

        
        $__internal_116734abcec838e32852577bf7a714603a03fdb7b3ae35b9c99f6196894d6010->leave($__internal_116734abcec838e32852577bf7a714603a03fdb7b3ae35b9c99f6196894d6010_prof);

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
