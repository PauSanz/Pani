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
        $__internal_5f3892ea1586d7b792dc20f2f64671191b4ac7092c369b881c14a19606ce2633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3892ea1586d7b792dc20f2f64671191b4ac7092c369b881c14a19606ce2633->enter($__internal_5f3892ea1586d7b792dc20f2f64671191b4ac7092c369b881c14a19606ce2633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_52ec66c1bf1e573fa68fc352d38e3bb8c57e4e52017e712f31eea0b745b3dce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ec66c1bf1e573fa68fc352d38e3bb8c57e4e52017e712f31eea0b745b3dce9->enter($__internal_52ec66c1bf1e573fa68fc352d38e3bb8c57e4e52017e712f31eea0b745b3dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5f3892ea1586d7b792dc20f2f64671191b4ac7092c369b881c14a19606ce2633->leave($__internal_5f3892ea1586d7b792dc20f2f64671191b4ac7092c369b881c14a19606ce2633_prof);

        
        $__internal_52ec66c1bf1e573fa68fc352d38e3bb8c57e4e52017e712f31eea0b745b3dce9->leave($__internal_52ec66c1bf1e573fa68fc352d38e3bb8c57e4e52017e712f31eea0b745b3dce9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7d5ec96fad12deada71c5e0dc37fb7453a77a2bd5c72efee4df66107b89c2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d5ec96fad12deada71c5e0dc37fb7453a77a2bd5c72efee4df66107b89c2ae->enter($__internal_f7d5ec96fad12deada71c5e0dc37fb7453a77a2bd5c72efee4df66107b89c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9289d2e2e9319d6835519ff3bb1607c90fba510e08831d091204976aca8d139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9289d2e2e9319d6835519ff3bb1607c90fba510e08831d091204976aca8d139f->enter($__internal_9289d2e2e9319d6835519ff3bb1607c90fba510e08831d091204976aca8d139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9289d2e2e9319d6835519ff3bb1607c90fba510e08831d091204976aca8d139f->leave($__internal_9289d2e2e9319d6835519ff3bb1607c90fba510e08831d091204976aca8d139f_prof);

        
        $__internal_f7d5ec96fad12deada71c5e0dc37fb7453a77a2bd5c72efee4df66107b89c2ae->leave($__internal_f7d5ec96fad12deada71c5e0dc37fb7453a77a2bd5c72efee4df66107b89c2ae_prof);

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
