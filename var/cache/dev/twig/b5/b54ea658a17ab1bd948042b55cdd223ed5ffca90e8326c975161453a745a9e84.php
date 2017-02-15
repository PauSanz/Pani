<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_53280a268a68fc54ebde0b432141ee99db6dd55df24f137d95535bf542548d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53280a268a68fc54ebde0b432141ee99db6dd55df24f137d95535bf542548d4e->enter($__internal_53280a268a68fc54ebde0b432141ee99db6dd55df24f137d95535bf542548d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_653f7c77e866b7d8ac39f89658293bae5c7eac97f815f8f1bb40a1f6ec3261e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653f7c77e866b7d8ac39f89658293bae5c7eac97f815f8f1bb40a1f6ec3261e3->enter($__internal_653f7c77e866b7d8ac39f89658293bae5c7eac97f815f8f1bb40a1f6ec3261e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53280a268a68fc54ebde0b432141ee99db6dd55df24f137d95535bf542548d4e->leave($__internal_53280a268a68fc54ebde0b432141ee99db6dd55df24f137d95535bf542548d4e_prof);

        
        $__internal_653f7c77e866b7d8ac39f89658293bae5c7eac97f815f8f1bb40a1f6ec3261e3->leave($__internal_653f7c77e866b7d8ac39f89658293bae5c7eac97f815f8f1bb40a1f6ec3261e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e229a66ed702016dcd90045188649a7bf6e40ef9ec35c1f4a1964d871afc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e229a66ed702016dcd90045188649a7bf6e40ef9ec35c1f4a1964d871afc1b->enter($__internal_68e229a66ed702016dcd90045188649a7bf6e40ef9ec35c1f4a1964d871afc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6df54d9e9927170d59bbd895f47833c5231527e6e4c26704adc0dcdfa7ebcb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df54d9e9927170d59bbd895f47833c5231527e6e4c26704adc0dcdfa7ebcb61->enter($__internal_6df54d9e9927170d59bbd895f47833c5231527e6e4c26704adc0dcdfa7ebcb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6df54d9e9927170d59bbd895f47833c5231527e6e4c26704adc0dcdfa7ebcb61->leave($__internal_6df54d9e9927170d59bbd895f47833c5231527e6e4c26704adc0dcdfa7ebcb61_prof);

        
        $__internal_68e229a66ed702016dcd90045188649a7bf6e40ef9ec35c1f4a1964d871afc1b->leave($__internal_68e229a66ed702016dcd90045188649a7bf6e40ef9ec35c1f4a1964d871afc1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16404dc4ec148ccde76119150c639a58409cf748ec1ecc7c0ed2bf8fcc8b5f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16404dc4ec148ccde76119150c639a58409cf748ec1ecc7c0ed2bf8fcc8b5f2c->enter($__internal_16404dc4ec148ccde76119150c639a58409cf748ec1ecc7c0ed2bf8fcc8b5f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcbd4096cd0addd627dcd7a5e4c26197022f8249cfa98487e88f2f80e9a0d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbd4096cd0addd627dcd7a5e4c26197022f8249cfa98487e88f2f80e9a0d005->enter($__internal_dcbd4096cd0addd627dcd7a5e4c26197022f8249cfa98487e88f2f80e9a0d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_dcbd4096cd0addd627dcd7a5e4c26197022f8249cfa98487e88f2f80e9a0d005->leave($__internal_dcbd4096cd0addd627dcd7a5e4c26197022f8249cfa98487e88f2f80e9a0d005_prof);

        
        $__internal_16404dc4ec148ccde76119150c639a58409cf748ec1ecc7c0ed2bf8fcc8b5f2c->leave($__internal_16404dc4ec148ccde76119150c639a58409cf748ec1ecc7c0ed2bf8fcc8b5f2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
