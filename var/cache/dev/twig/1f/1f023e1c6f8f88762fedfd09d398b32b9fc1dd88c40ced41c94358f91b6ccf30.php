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
        $__internal_d23787a20e258d03917528b351dda56b9f32fa40bd8b02ae13ab5977816aa352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23787a20e258d03917528b351dda56b9f32fa40bd8b02ae13ab5977816aa352->enter($__internal_d23787a20e258d03917528b351dda56b9f32fa40bd8b02ae13ab5977816aa352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3a9d42be7b58788de8348b2bf9ce8c16e6b664bca772658902045dfb98b23d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9d42be7b58788de8348b2bf9ce8c16e6b664bca772658902045dfb98b23d4f->enter($__internal_3a9d42be7b58788de8348b2bf9ce8c16e6b664bca772658902045dfb98b23d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d23787a20e258d03917528b351dda56b9f32fa40bd8b02ae13ab5977816aa352->leave($__internal_d23787a20e258d03917528b351dda56b9f32fa40bd8b02ae13ab5977816aa352_prof);

        
        $__internal_3a9d42be7b58788de8348b2bf9ce8c16e6b664bca772658902045dfb98b23d4f->leave($__internal_3a9d42be7b58788de8348b2bf9ce8c16e6b664bca772658902045dfb98b23d4f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4211e79d712e2decab5ba3687a1ce4495b2ca80a2187ae19b6108403d42769a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4211e79d712e2decab5ba3687a1ce4495b2ca80a2187ae19b6108403d42769a->enter($__internal_a4211e79d712e2decab5ba3687a1ce4495b2ca80a2187ae19b6108403d42769a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ed85086cbda71a74ee66b900c9448fa5b3cc0291ab0cf356002eb016f987af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed85086cbda71a74ee66b900c9448fa5b3cc0291ab0cf356002eb016f987af8->enter($__internal_8ed85086cbda71a74ee66b900c9448fa5b3cc0291ab0cf356002eb016f987af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ed85086cbda71a74ee66b900c9448fa5b3cc0291ab0cf356002eb016f987af8->leave($__internal_8ed85086cbda71a74ee66b900c9448fa5b3cc0291ab0cf356002eb016f987af8_prof);

        
        $__internal_a4211e79d712e2decab5ba3687a1ce4495b2ca80a2187ae19b6108403d42769a->leave($__internal_a4211e79d712e2decab5ba3687a1ce4495b2ca80a2187ae19b6108403d42769a_prof);

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
