<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee7ce78304f74bedcd0670b569fdab196fdab50ca1b04defafd694a089c2000e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7ce78304f74bedcd0670b569fdab196fdab50ca1b04defafd694a089c2000e->enter($__internal_ee7ce78304f74bedcd0670b569fdab196fdab50ca1b04defafd694a089c2000e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_786336b6eabca063ccee9794843564b4ea237b3a9d1b20941e85d9b934276883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786336b6eabca063ccee9794843564b4ea237b3a9d1b20941e85d9b934276883->enter($__internal_786336b6eabca063ccee9794843564b4ea237b3a9d1b20941e85d9b934276883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee7ce78304f74bedcd0670b569fdab196fdab50ca1b04defafd694a089c2000e->leave($__internal_ee7ce78304f74bedcd0670b569fdab196fdab50ca1b04defafd694a089c2000e_prof);

        
        $__internal_786336b6eabca063ccee9794843564b4ea237b3a9d1b20941e85d9b934276883->leave($__internal_786336b6eabca063ccee9794843564b4ea237b3a9d1b20941e85d9b934276883_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89c739262eafe18d6eb1e123d78d70d0f3daa60305e8c4fb4f39203071211353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c739262eafe18d6eb1e123d78d70d0f3daa60305e8c4fb4f39203071211353->enter($__internal_89c739262eafe18d6eb1e123d78d70d0f3daa60305e8c4fb4f39203071211353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ebab8560dd7b302db6f649988733c6ca5b31fa33b613f6b91c7dd1176d37d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebab8560dd7b302db6f649988733c6ca5b31fa33b613f6b91c7dd1176d37d13->enter($__internal_8ebab8560dd7b302db6f649988733c6ca5b31fa33b613f6b91c7dd1176d37d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8ebab8560dd7b302db6f649988733c6ca5b31fa33b613f6b91c7dd1176d37d13->leave($__internal_8ebab8560dd7b302db6f649988733c6ca5b31fa33b613f6b91c7dd1176d37d13_prof);

        
        $__internal_89c739262eafe18d6eb1e123d78d70d0f3daa60305e8c4fb4f39203071211353->leave($__internal_89c739262eafe18d6eb1e123d78d70d0f3daa60305e8c4fb4f39203071211353_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6d661dc34a24150151fea54c4b4f7e86097b8c06ac560e36b00707fd7aeb58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d661dc34a24150151fea54c4b4f7e86097b8c06ac560e36b00707fd7aeb58b->enter($__internal_e6d661dc34a24150151fea54c4b4f7e86097b8c06ac560e36b00707fd7aeb58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4238d9f2acb2a91e088c82c9b0679ae6f0b3f325c49fcd2e66710e5577e8e367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4238d9f2acb2a91e088c82c9b0679ae6f0b3f325c49fcd2e66710e5577e8e367->enter($__internal_4238d9f2acb2a91e088c82c9b0679ae6f0b3f325c49fcd2e66710e5577e8e367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4238d9f2acb2a91e088c82c9b0679ae6f0b3f325c49fcd2e66710e5577e8e367->leave($__internal_4238d9f2acb2a91e088c82c9b0679ae6f0b3f325c49fcd2e66710e5577e8e367_prof);

        
        $__internal_e6d661dc34a24150151fea54c4b4f7e86097b8c06ac560e36b00707fd7aeb58b->leave($__internal_e6d661dc34a24150151fea54c4b4f7e86097b8c06ac560e36b00707fd7aeb58b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
