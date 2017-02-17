<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deaf84387804f983f536b2148d97baa1f821895251e92db3f06215e7a1a3d1cc extends Twig_Template
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
        $__internal_eb0b659f644d9a095bee4f0d7f411237267175b008463dbe9beb737e470b6b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0b659f644d9a095bee4f0d7f411237267175b008463dbe9beb737e470b6b8d->enter($__internal_eb0b659f644d9a095bee4f0d7f411237267175b008463dbe9beb737e470b6b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6bee881ab8260fe7e65f81cb69ccf4568a7f26420970753d7163777a39a0db69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bee881ab8260fe7e65f81cb69ccf4568a7f26420970753d7163777a39a0db69->enter($__internal_6bee881ab8260fe7e65f81cb69ccf4568a7f26420970753d7163777a39a0db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eb0b659f644d9a095bee4f0d7f411237267175b008463dbe9beb737e470b6b8d->leave($__internal_eb0b659f644d9a095bee4f0d7f411237267175b008463dbe9beb737e470b6b8d_prof);

        
        $__internal_6bee881ab8260fe7e65f81cb69ccf4568a7f26420970753d7163777a39a0db69->leave($__internal_6bee881ab8260fe7e65f81cb69ccf4568a7f26420970753d7163777a39a0db69_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6a5a1268b96251d3e353d513625cbd38e3121e8dd7ef88e6dcfa7d9a8feea9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a5a1268b96251d3e353d513625cbd38e3121e8dd7ef88e6dcfa7d9a8feea9c->enter($__internal_a6a5a1268b96251d3e353d513625cbd38e3121e8dd7ef88e6dcfa7d9a8feea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5a81fd7a6a5f7e37e46083688d3e1116b1be2db9eda52d5214ab87a358898b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a81fd7a6a5f7e37e46083688d3e1116b1be2db9eda52d5214ab87a358898b6->enter($__internal_b5a81fd7a6a5f7e37e46083688d3e1116b1be2db9eda52d5214ab87a358898b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5a81fd7a6a5f7e37e46083688d3e1116b1be2db9eda52d5214ab87a358898b6->leave($__internal_b5a81fd7a6a5f7e37e46083688d3e1116b1be2db9eda52d5214ab87a358898b6_prof);

        
        $__internal_a6a5a1268b96251d3e353d513625cbd38e3121e8dd7ef88e6dcfa7d9a8feea9c->leave($__internal_a6a5a1268b96251d3e353d513625cbd38e3121e8dd7ef88e6dcfa7d9a8feea9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
