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
        $__internal_b91cd93ef2f6be4cffc79cd95c7a9e0f1959952abff828f078c4dd6225ad054a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91cd93ef2f6be4cffc79cd95c7a9e0f1959952abff828f078c4dd6225ad054a->enter($__internal_b91cd93ef2f6be4cffc79cd95c7a9e0f1959952abff828f078c4dd6225ad054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fa849304ea29e2e2cf9ed5533e9617fb45233368b4f820afcca1cdaca62e95f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa849304ea29e2e2cf9ed5533e9617fb45233368b4f820afcca1cdaca62e95f4->enter($__internal_fa849304ea29e2e2cf9ed5533e9617fb45233368b4f820afcca1cdaca62e95f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b91cd93ef2f6be4cffc79cd95c7a9e0f1959952abff828f078c4dd6225ad054a->leave($__internal_b91cd93ef2f6be4cffc79cd95c7a9e0f1959952abff828f078c4dd6225ad054a_prof);

        
        $__internal_fa849304ea29e2e2cf9ed5533e9617fb45233368b4f820afcca1cdaca62e95f4->leave($__internal_fa849304ea29e2e2cf9ed5533e9617fb45233368b4f820afcca1cdaca62e95f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5a9ea942566e251cf56ad90c2db8e14ee569215cbe0b84b1f858300f63b3b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a9ea942566e251cf56ad90c2db8e14ee569215cbe0b84b1f858300f63b3b0c->enter($__internal_f5a9ea942566e251cf56ad90c2db8e14ee569215cbe0b84b1f858300f63b3b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93a90f54ef1567479e3ed86a1c30a956d92055fb39940fc5fa1d933a658a6787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a90f54ef1567479e3ed86a1c30a956d92055fb39940fc5fa1d933a658a6787->enter($__internal_93a90f54ef1567479e3ed86a1c30a956d92055fb39940fc5fa1d933a658a6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_93a90f54ef1567479e3ed86a1c30a956d92055fb39940fc5fa1d933a658a6787->leave($__internal_93a90f54ef1567479e3ed86a1c30a956d92055fb39940fc5fa1d933a658a6787_prof);

        
        $__internal_f5a9ea942566e251cf56ad90c2db8e14ee569215cbe0b84b1f858300f63b3b0c->leave($__internal_f5a9ea942566e251cf56ad90c2db8e14ee569215cbe0b84b1f858300f63b3b0c_prof);

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
