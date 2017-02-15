<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_35dda62958d97826c4833b58a9730c1920fe21417245577fcb1517daec7743bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_75bc7d779fe25b49946ae57cafb0b0af330badef2838a3e336deea6c5a2ca40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bc7d779fe25b49946ae57cafb0b0af330badef2838a3e336deea6c5a2ca40e->enter($__internal_75bc7d779fe25b49946ae57cafb0b0af330badef2838a3e336deea6c5a2ca40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_79acff7f290da2661124a34a403abc269a75d1144d64cb036b9a3fc395626989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79acff7f290da2661124a34a403abc269a75d1144d64cb036b9a3fc395626989->enter($__internal_79acff7f290da2661124a34a403abc269a75d1144d64cb036b9a3fc395626989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bc7d779fe25b49946ae57cafb0b0af330badef2838a3e336deea6c5a2ca40e->leave($__internal_75bc7d779fe25b49946ae57cafb0b0af330badef2838a3e336deea6c5a2ca40e_prof);

        
        $__internal_79acff7f290da2661124a34a403abc269a75d1144d64cb036b9a3fc395626989->leave($__internal_79acff7f290da2661124a34a403abc269a75d1144d64cb036b9a3fc395626989_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9577af5f38cfde61937a93e55380339245ca11c9bc8896aca0a5291cf9fdfb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9577af5f38cfde61937a93e55380339245ca11c9bc8896aca0a5291cf9fdfb19->enter($__internal_9577af5f38cfde61937a93e55380339245ca11c9bc8896aca0a5291cf9fdfb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5936bba5c180c09ae93fa06790ba9e5ba397949dbc0b41b9bebaa762645ef6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5936bba5c180c09ae93fa06790ba9e5ba397949dbc0b41b9bebaa762645ef6e2->enter($__internal_5936bba5c180c09ae93fa06790ba9e5ba397949dbc0b41b9bebaa762645ef6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5936bba5c180c09ae93fa06790ba9e5ba397949dbc0b41b9bebaa762645ef6e2->leave($__internal_5936bba5c180c09ae93fa06790ba9e5ba397949dbc0b41b9bebaa762645ef6e2_prof);

        
        $__internal_9577af5f38cfde61937a93e55380339245ca11c9bc8896aca0a5291cf9fdfb19->leave($__internal_9577af5f38cfde61937a93e55380339245ca11c9bc8896aca0a5291cf9fdfb19_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d5f766849286285bac06ec9888dc7dcd5700fa3504a97f42a57527e2dfbd1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5f766849286285bac06ec9888dc7dcd5700fa3504a97f42a57527e2dfbd1db->enter($__internal_4d5f766849286285bac06ec9888dc7dcd5700fa3504a97f42a57527e2dfbd1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aae597ff9b3fb029db18328a77c0eb0f6ed5ff48010834db9547f85280596079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae597ff9b3fb029db18328a77c0eb0f6ed5ff48010834db9547f85280596079->enter($__internal_aae597ff9b3fb029db18328a77c0eb0f6ed5ff48010834db9547f85280596079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aae597ff9b3fb029db18328a77c0eb0f6ed5ff48010834db9547f85280596079->leave($__internal_aae597ff9b3fb029db18328a77c0eb0f6ed5ff48010834db9547f85280596079_prof);

        
        $__internal_4d5f766849286285bac06ec9888dc7dcd5700fa3504a97f42a57527e2dfbd1db->leave($__internal_4d5f766849286285bac06ec9888dc7dcd5700fa3504a97f42a57527e2dfbd1db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
