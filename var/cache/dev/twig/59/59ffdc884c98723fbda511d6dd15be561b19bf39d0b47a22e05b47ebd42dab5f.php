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
        $__internal_341246f76657d1f0e0c793718cd26f65682e545344f333de33115a86225d79b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341246f76657d1f0e0c793718cd26f65682e545344f333de33115a86225d79b8->enter($__internal_341246f76657d1f0e0c793718cd26f65682e545344f333de33115a86225d79b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_8e8a7ab034c207e80c74d36afde37c2fdef110a0d8fefc65d4f38a2222d3a74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8a7ab034c207e80c74d36afde37c2fdef110a0d8fefc65d4f38a2222d3a74f->enter($__internal_8e8a7ab034c207e80c74d36afde37c2fdef110a0d8fefc65d4f38a2222d3a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_341246f76657d1f0e0c793718cd26f65682e545344f333de33115a86225d79b8->leave($__internal_341246f76657d1f0e0c793718cd26f65682e545344f333de33115a86225d79b8_prof);

        
        $__internal_8e8a7ab034c207e80c74d36afde37c2fdef110a0d8fefc65d4f38a2222d3a74f->leave($__internal_8e8a7ab034c207e80c74d36afde37c2fdef110a0d8fefc65d4f38a2222d3a74f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4654ae98a9fe50058914df701f975ada60ce287b94934dbd887a73f0f5223150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4654ae98a9fe50058914df701f975ada60ce287b94934dbd887a73f0f5223150->enter($__internal_4654ae98a9fe50058914df701f975ada60ce287b94934dbd887a73f0f5223150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85abffbb80fc1d61f616ae05c2c154c98ba8b5a1d08311d5b5ae4f1b396356f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85abffbb80fc1d61f616ae05c2c154c98ba8b5a1d08311d5b5ae4f1b396356f3->enter($__internal_85abffbb80fc1d61f616ae05c2c154c98ba8b5a1d08311d5b5ae4f1b396356f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_85abffbb80fc1d61f616ae05c2c154c98ba8b5a1d08311d5b5ae4f1b396356f3->leave($__internal_85abffbb80fc1d61f616ae05c2c154c98ba8b5a1d08311d5b5ae4f1b396356f3_prof);

        
        $__internal_4654ae98a9fe50058914df701f975ada60ce287b94934dbd887a73f0f5223150->leave($__internal_4654ae98a9fe50058914df701f975ada60ce287b94934dbd887a73f0f5223150_prof);

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
