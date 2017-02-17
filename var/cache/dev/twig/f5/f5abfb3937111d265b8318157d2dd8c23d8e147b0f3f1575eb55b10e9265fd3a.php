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
        $__internal_800a057769b8b94d6d7b8dd993b0e3d4acef3c14cf480f6944c9d4757cbb5b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800a057769b8b94d6d7b8dd993b0e3d4acef3c14cf480f6944c9d4757cbb5b82->enter($__internal_800a057769b8b94d6d7b8dd993b0e3d4acef3c14cf480f6944c9d4757cbb5b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $__internal_8b78bc7a9b3759663425fa9753b3bc2c9857f8bec31b193b55e7a43547d4e3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b78bc7a9b3759663425fa9753b3bc2c9857f8bec31b193b55e7a43547d4e3db->enter($__internal_8b78bc7a9b3759663425fa9753b3bc2c9857f8bec31b193b55e7a43547d4e3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:apacient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800a057769b8b94d6d7b8dd993b0e3d4acef3c14cf480f6944c9d4757cbb5b82->leave($__internal_800a057769b8b94d6d7b8dd993b0e3d4acef3c14cf480f6944c9d4757cbb5b82_prof);

        
        $__internal_8b78bc7a9b3759663425fa9753b3bc2c9857f8bec31b193b55e7a43547d4e3db->leave($__internal_8b78bc7a9b3759663425fa9753b3bc2c9857f8bec31b193b55e7a43547d4e3db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_673f729c8862bfc614a5e63acffe4adac384290fa563a57e0e4782778ad0493b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673f729c8862bfc614a5e63acffe4adac384290fa563a57e0e4782778ad0493b->enter($__internal_673f729c8862bfc614a5e63acffe4adac384290fa563a57e0e4782778ad0493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_991fb721cbc9e71cd2d0c04a4dd6a176307b23ea120d65216c77fbb2b5e19760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991fb721cbc9e71cd2d0c04a4dd6a176307b23ea120d65216c77fbb2b5e19760->enter($__internal_991fb721cbc9e71cd2d0c04a4dd6a176307b23ea120d65216c77fbb2b5e19760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_991fb721cbc9e71cd2d0c04a4dd6a176307b23ea120d65216c77fbb2b5e19760->leave($__internal_991fb721cbc9e71cd2d0c04a4dd6a176307b23ea120d65216c77fbb2b5e19760_prof);

        
        $__internal_673f729c8862bfc614a5e63acffe4adac384290fa563a57e0e4782778ad0493b->leave($__internal_673f729c8862bfc614a5e63acffe4adac384290fa563a57e0e4782778ad0493b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4925f5056ae1ba7a3deb4079b3f9c030d2906201e283ce1286d9be47c2e8de4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4925f5056ae1ba7a3deb4079b3f9c030d2906201e283ce1286d9be47c2e8de4e->enter($__internal_4925f5056ae1ba7a3deb4079b3f9c030d2906201e283ce1286d9be47c2e8de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_282c51eb322add5ef16f711de308f93e9209f390c193f63af999a553edd9b1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282c51eb322add5ef16f711de308f93e9209f390c193f63af999a553edd9b1ed->enter($__internal_282c51eb322add5ef16f711de308f93e9209f390c193f63af999a553edd9b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_282c51eb322add5ef16f711de308f93e9209f390c193f63af999a553edd9b1ed->leave($__internal_282c51eb322add5ef16f711de308f93e9209f390c193f63af999a553edd9b1ed_prof);

        
        $__internal_4925f5056ae1ba7a3deb4079b3f9c030d2906201e283ce1286d9be47c2e8de4e->leave($__internal_4925f5056ae1ba7a3deb4079b3f9c030d2906201e283ce1286d9be47c2e8de4e_prof);

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
