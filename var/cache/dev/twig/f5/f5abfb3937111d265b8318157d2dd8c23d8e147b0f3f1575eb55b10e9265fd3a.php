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
        $__internal_17cfbfeda1540ce9f4e809d54dfb19a071b6f1e3f75d2d162797225d7b9fa1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cfbfeda1540ce9f4e809d54dfb19a071b6f1e3f75d2d162797225d7b9fa1d9->enter($__internal_17cfbfeda1540ce9f4e809d54dfb19a071b6f1e3f75d2d162797225d7b9fa1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_80ab71c7284177251ddc53baa50d2ae0b66c54514357f6e44952370ebd624237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ab71c7284177251ddc53baa50d2ae0b66c54514357f6e44952370ebd624237->enter($__internal_80ab71c7284177251ddc53baa50d2ae0b66c54514357f6e44952370ebd624237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cfbfeda1540ce9f4e809d54dfb19a071b6f1e3f75d2d162797225d7b9fa1d9->leave($__internal_17cfbfeda1540ce9f4e809d54dfb19a071b6f1e3f75d2d162797225d7b9fa1d9_prof);

        
        $__internal_80ab71c7284177251ddc53baa50d2ae0b66c54514357f6e44952370ebd624237->leave($__internal_80ab71c7284177251ddc53baa50d2ae0b66c54514357f6e44952370ebd624237_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_80fb55300bed5894aedacd836c9e83723f84a607f6c200eb1937ea0527ca694b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fb55300bed5894aedacd836c9e83723f84a607f6c200eb1937ea0527ca694b->enter($__internal_80fb55300bed5894aedacd836c9e83723f84a607f6c200eb1937ea0527ca694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ee683406f122655ae6db5937b193a07a33e9c662a3e273e06288502d9f1303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee683406f122655ae6db5937b193a07a33e9c662a3e273e06288502d9f1303f->enter($__internal_0ee683406f122655ae6db5937b193a07a33e9c662a3e273e06288502d9f1303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_0ee683406f122655ae6db5937b193a07a33e9c662a3e273e06288502d9f1303f->leave($__internal_0ee683406f122655ae6db5937b193a07a33e9c662a3e273e06288502d9f1303f_prof);

        
        $__internal_80fb55300bed5894aedacd836c9e83723f84a607f6c200eb1937ea0527ca694b->leave($__internal_80fb55300bed5894aedacd836c9e83723f84a607f6c200eb1937ea0527ca694b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4abbd9fa1d663aaa249cc65218ef3097d156740b5247babc399cd98bdbdda303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abbd9fa1d663aaa249cc65218ef3097d156740b5247babc399cd98bdbdda303->enter($__internal_4abbd9fa1d663aaa249cc65218ef3097d156740b5247babc399cd98bdbdda303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1b47aa16365a0735bf6e31cb35050f4935e9f03f939a2cbffc2c4e670bf5e60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b47aa16365a0735bf6e31cb35050f4935e9f03f939a2cbffc2c4e670bf5e60a->enter($__internal_1b47aa16365a0735bf6e31cb35050f4935e9f03f939a2cbffc2c4e670bf5e60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_1b47aa16365a0735bf6e31cb35050f4935e9f03f939a2cbffc2c4e670bf5e60a->leave($__internal_1b47aa16365a0735bf6e31cb35050f4935e9f03f939a2cbffc2c4e670bf5e60a_prof);

        
        $__internal_4abbd9fa1d663aaa249cc65218ef3097d156740b5247babc399cd98bdbdda303->leave($__internal_4abbd9fa1d663aaa249cc65218ef3097d156740b5247babc399cd98bdbdda303_prof);

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
