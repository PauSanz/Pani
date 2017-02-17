<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_66e8bae2ef0bd2c2153a91118f4d3f9ab9780394776fc2a701e2dabe733a3f1a extends Twig_Template
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
        $__internal_bb57df378e47a1da2532b9afba06ac0335f429d719b5becf28da96d10822277b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb57df378e47a1da2532b9afba06ac0335f429d719b5becf28da96d10822277b->enter($__internal_bb57df378e47a1da2532b9afba06ac0335f429d719b5becf28da96d10822277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_07379bd33e286240a34e18ca157852945b6ff19c7a3af06962be3cf318014a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07379bd33e286240a34e18ca157852945b6ff19c7a3af06962be3cf318014a42->enter($__internal_07379bd33e286240a34e18ca157852945b6ff19c7a3af06962be3cf318014a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb57df378e47a1da2532b9afba06ac0335f429d719b5becf28da96d10822277b->leave($__internal_bb57df378e47a1da2532b9afba06ac0335f429d719b5becf28da96d10822277b_prof);

        
        $__internal_07379bd33e286240a34e18ca157852945b6ff19c7a3af06962be3cf318014a42->leave($__internal_07379bd33e286240a34e18ca157852945b6ff19c7a3af06962be3cf318014a42_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a636f2cd2e0b222a4ce2f3389010c13ee4105132222f55d62e06f103bd3fe4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a636f2cd2e0b222a4ce2f3389010c13ee4105132222f55d62e06f103bd3fe4ce->enter($__internal_a636f2cd2e0b222a4ce2f3389010c13ee4105132222f55d62e06f103bd3fe4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4321940cf0c96894b1c133e7400291a2b2e7b45c993995b57d020462f48c52af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4321940cf0c96894b1c133e7400291a2b2e7b45c993995b57d020462f48c52af->enter($__internal_4321940cf0c96894b1c133e7400291a2b2e7b45c993995b57d020462f48c52af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4321940cf0c96894b1c133e7400291a2b2e7b45c993995b57d020462f48c52af->leave($__internal_4321940cf0c96894b1c133e7400291a2b2e7b45c993995b57d020462f48c52af_prof);

        
        $__internal_a636f2cd2e0b222a4ce2f3389010c13ee4105132222f55d62e06f103bd3fe4ce->leave($__internal_a636f2cd2e0b222a4ce2f3389010c13ee4105132222f55d62e06f103bd3fe4ce_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
