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
        $__internal_20eabb096c721e7469a780ff5328be21d4931eebeb657c40681ff2628caf391e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eabb096c721e7469a780ff5328be21d4931eebeb657c40681ff2628caf391e->enter($__internal_20eabb096c721e7469a780ff5328be21d4931eebeb657c40681ff2628caf391e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d149953cecccb2945c11446c7e7102ab7267cace82c0b799133ece25bd0ee2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d149953cecccb2945c11446c7e7102ab7267cace82c0b799133ece25bd0ee2e9->enter($__internal_d149953cecccb2945c11446c7e7102ab7267cace82c0b799133ece25bd0ee2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_20eabb096c721e7469a780ff5328be21d4931eebeb657c40681ff2628caf391e->leave($__internal_20eabb096c721e7469a780ff5328be21d4931eebeb657c40681ff2628caf391e_prof);

        
        $__internal_d149953cecccb2945c11446c7e7102ab7267cace82c0b799133ece25bd0ee2e9->leave($__internal_d149953cecccb2945c11446c7e7102ab7267cace82c0b799133ece25bd0ee2e9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a3e1be24f3ffe69b65951af54cb3471feb6cc38ae501d0822091febc3aa155b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3e1be24f3ffe69b65951af54cb3471feb6cc38ae501d0822091febc3aa155b->enter($__internal_7a3e1be24f3ffe69b65951af54cb3471feb6cc38ae501d0822091febc3aa155b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b93041b40c883df4ee32e7c1bd8d6645172c66b653bbf701616a21d4607d94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b93041b40c883df4ee32e7c1bd8d6645172c66b653bbf701616a21d4607d94a->enter($__internal_6b93041b40c883df4ee32e7c1bd8d6645172c66b653bbf701616a21d4607d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b93041b40c883df4ee32e7c1bd8d6645172c66b653bbf701616a21d4607d94a->leave($__internal_6b93041b40c883df4ee32e7c1bd8d6645172c66b653bbf701616a21d4607d94a_prof);

        
        $__internal_7a3e1be24f3ffe69b65951af54cb3471feb6cc38ae501d0822091febc3aa155b->leave($__internal_7a3e1be24f3ffe69b65951af54cb3471feb6cc38ae501d0822091febc3aa155b_prof);

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
