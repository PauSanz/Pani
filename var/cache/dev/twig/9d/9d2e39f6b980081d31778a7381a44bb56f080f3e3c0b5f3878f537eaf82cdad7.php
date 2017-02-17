<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2ebb90987bdd5b574901d6edc93fb47590ae08b0d8ea4947a9c936d191a84f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_280eac205f3747e8e9f1107d44aaeb9161f81c50ec9a6687a7601c35e8da0a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280eac205f3747e8e9f1107d44aaeb9161f81c50ec9a6687a7601c35e8da0a07->enter($__internal_280eac205f3747e8e9f1107d44aaeb9161f81c50ec9a6687a7601c35e8da0a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8de4037d40621e8f9d0a9bd878e1e36ce4acebcbc5386b01a8b0ba70b0111fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de4037d40621e8f9d0a9bd878e1e36ce4acebcbc5386b01a8b0ba70b0111fc9->enter($__internal_8de4037d40621e8f9d0a9bd878e1e36ce4acebcbc5386b01a8b0ba70b0111fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280eac205f3747e8e9f1107d44aaeb9161f81c50ec9a6687a7601c35e8da0a07->leave($__internal_280eac205f3747e8e9f1107d44aaeb9161f81c50ec9a6687a7601c35e8da0a07_prof);

        
        $__internal_8de4037d40621e8f9d0a9bd878e1e36ce4acebcbc5386b01a8b0ba70b0111fc9->leave($__internal_8de4037d40621e8f9d0a9bd878e1e36ce4acebcbc5386b01a8b0ba70b0111fc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf5ae92bd1d166353b75d5f33cfbf9d6300668c04fad5e621e9acedb5a36341f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5ae92bd1d166353b75d5f33cfbf9d6300668c04fad5e621e9acedb5a36341f->enter($__internal_cf5ae92bd1d166353b75d5f33cfbf9d6300668c04fad5e621e9acedb5a36341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efbe5d2d3dab03edd64d09984ed18b4b896613006a7a97930c5a1beffd3dfd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbe5d2d3dab03edd64d09984ed18b4b896613006a7a97930c5a1beffd3dfd0b->enter($__internal_efbe5d2d3dab03edd64d09984ed18b4b896613006a7a97930c5a1beffd3dfd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_efbe5d2d3dab03edd64d09984ed18b4b896613006a7a97930c5a1beffd3dfd0b->leave($__internal_efbe5d2d3dab03edd64d09984ed18b4b896613006a7a97930c5a1beffd3dfd0b_prof);

        
        $__internal_cf5ae92bd1d166353b75d5f33cfbf9d6300668c04fad5e621e9acedb5a36341f->leave($__internal_cf5ae92bd1d166353b75d5f33cfbf9d6300668c04fad5e621e9acedb5a36341f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb75212d03cede1fbc5e29f2ce3ed36d13ac494a26019749e712e7ba56e2486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb75212d03cede1fbc5e29f2ce3ed36d13ac494a26019749e712e7ba56e2486->enter($__internal_ccb75212d03cede1fbc5e29f2ce3ed36d13ac494a26019749e712e7ba56e2486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06da03b7f787b546a5d0f2b0d7b98ad58dfefbf571ad9482c79dd321b82cd371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06da03b7f787b546a5d0f2b0d7b98ad58dfefbf571ad9482c79dd321b82cd371->enter($__internal_06da03b7f787b546a5d0f2b0d7b98ad58dfefbf571ad9482c79dd321b82cd371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_06da03b7f787b546a5d0f2b0d7b98ad58dfefbf571ad9482c79dd321b82cd371->leave($__internal_06da03b7f787b546a5d0f2b0d7b98ad58dfefbf571ad9482c79dd321b82cd371_prof);

        
        $__internal_ccb75212d03cede1fbc5e29f2ce3ed36d13ac494a26019749e712e7ba56e2486->leave($__internal_ccb75212d03cede1fbc5e29f2ce3ed36d13ac494a26019749e712e7ba56e2486_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
