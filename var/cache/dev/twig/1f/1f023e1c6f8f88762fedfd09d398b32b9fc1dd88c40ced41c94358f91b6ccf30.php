<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98a9a4396d6e89c7b6d1714fa615b21d3f45d75d12f624041c54d4d2d30fe328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0b7f00d91dd767b7f9c5fdb5ba73e8236af9f3125e345924332a3f2db7ebd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0b7f00d91dd767b7f9c5fdb5ba73e8236af9f3125e345924332a3f2db7ebd8->enter($__internal_7b0b7f00d91dd767b7f9c5fdb5ba73e8236af9f3125e345924332a3f2db7ebd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_eb3fab33f9da497d063c173c3502d1f21703691739a4184ab723b4043af8a30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3fab33f9da497d063c173c3502d1f21703691739a4184ab723b4043af8a30c->enter($__internal_eb3fab33f9da497d063c173c3502d1f21703691739a4184ab723b4043af8a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7b0b7f00d91dd767b7f9c5fdb5ba73e8236af9f3125e345924332a3f2db7ebd8->leave($__internal_7b0b7f00d91dd767b7f9c5fdb5ba73e8236af9f3125e345924332a3f2db7ebd8_prof);

        
        $__internal_eb3fab33f9da497d063c173c3502d1f21703691739a4184ab723b4043af8a30c->leave($__internal_eb3fab33f9da497d063c173c3502d1f21703691739a4184ab723b4043af8a30c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dbf7569ec922eefaa25e3319b4099f7d88ae4578404fe0a57ffd16674187804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbf7569ec922eefaa25e3319b4099f7d88ae4578404fe0a57ffd16674187804->enter($__internal_4dbf7569ec922eefaa25e3319b4099f7d88ae4578404fe0a57ffd16674187804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6395f866d8accfbb8db04e3caeec23cd394df10b00754f17da4cefd4cf04fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6395f866d8accfbb8db04e3caeec23cd394df10b00754f17da4cefd4cf04fd5->enter($__internal_f6395f866d8accfbb8db04e3caeec23cd394df10b00754f17da4cefd4cf04fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6395f866d8accfbb8db04e3caeec23cd394df10b00754f17da4cefd4cf04fd5->leave($__internal_f6395f866d8accfbb8db04e3caeec23cd394df10b00754f17da4cefd4cf04fd5_prof);

        
        $__internal_4dbf7569ec922eefaa25e3319b4099f7d88ae4578404fe0a57ffd16674187804->leave($__internal_4dbf7569ec922eefaa25e3319b4099f7d88ae4578404fe0a57ffd16674187804_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
