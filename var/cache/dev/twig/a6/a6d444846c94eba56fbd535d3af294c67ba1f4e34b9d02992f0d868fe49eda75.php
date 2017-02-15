<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
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
        $__internal_d605540a2a1506f078858df6aa85ab7c7edc6750c7083c7e31e439352639f764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d605540a2a1506f078858df6aa85ab7c7edc6750c7083c7e31e439352639f764->enter($__internal_d605540a2a1506f078858df6aa85ab7c7edc6750c7083c7e31e439352639f764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_98f2487496f7c1b7a0fa59d5bdf5113d7b567f61fdbc1170e9c98d2350896c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f2487496f7c1b7a0fa59d5bdf5113d7b567f61fdbc1170e9c98d2350896c4e->enter($__internal_98f2487496f7c1b7a0fa59d5bdf5113d7b567f61fdbc1170e9c98d2350896c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d605540a2a1506f078858df6aa85ab7c7edc6750c7083c7e31e439352639f764->leave($__internal_d605540a2a1506f078858df6aa85ab7c7edc6750c7083c7e31e439352639f764_prof);

        
        $__internal_98f2487496f7c1b7a0fa59d5bdf5113d7b567f61fdbc1170e9c98d2350896c4e->leave($__internal_98f2487496f7c1b7a0fa59d5bdf5113d7b567f61fdbc1170e9c98d2350896c4e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1d89fe8f2ae27bca3fc1704c7629dc89ca82090802f51c301b6064873761e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1d89fe8f2ae27bca3fc1704c7629dc89ca82090802f51c301b6064873761e6->enter($__internal_0f1d89fe8f2ae27bca3fc1704c7629dc89ca82090802f51c301b6064873761e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e87ef919966b1dd2f217b280a57185f8b4994128cc1f06a113695f2bb9cb86fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87ef919966b1dd2f217b280a57185f8b4994128cc1f06a113695f2bb9cb86fe->enter($__internal_e87ef919966b1dd2f217b280a57185f8b4994128cc1f06a113695f2bb9cb86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e87ef919966b1dd2f217b280a57185f8b4994128cc1f06a113695f2bb9cb86fe->leave($__internal_e87ef919966b1dd2f217b280a57185f8b4994128cc1f06a113695f2bb9cb86fe_prof);

        
        $__internal_0f1d89fe8f2ae27bca3fc1704c7629dc89ca82090802f51c301b6064873761e6->leave($__internal_0f1d89fe8f2ae27bca3fc1704c7629dc89ca82090802f51c301b6064873761e6_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
