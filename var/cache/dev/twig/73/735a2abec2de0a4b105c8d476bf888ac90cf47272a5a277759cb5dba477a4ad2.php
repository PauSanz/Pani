<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_17c5cdf1c0d665c42a758eb9df8aeb1a047e9429f2f285c16d81c9c9ee531f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9497de8a81cb0bffbc59232479328767e4a1f3f5c263f03b2a2b5ee6a37df85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9497de8a81cb0bffbc59232479328767e4a1f3f5c263f03b2a2b5ee6a37df85->enter($__internal_f9497de8a81cb0bffbc59232479328767e4a1f3f5c263f03b2a2b5ee6a37df85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0591efe8e859e8b4abc310021516f6deaa83d9c4b7a05f4fad2404f5a4dfdd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0591efe8e859e8b4abc310021516f6deaa83d9c4b7a05f4fad2404f5a4dfdd19->enter($__internal_0591efe8e859e8b4abc310021516f6deaa83d9c4b7a05f4fad2404f5a4dfdd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9497de8a81cb0bffbc59232479328767e4a1f3f5c263f03b2a2b5ee6a37df85->leave($__internal_f9497de8a81cb0bffbc59232479328767e4a1f3f5c263f03b2a2b5ee6a37df85_prof);

        
        $__internal_0591efe8e859e8b4abc310021516f6deaa83d9c4b7a05f4fad2404f5a4dfdd19->leave($__internal_0591efe8e859e8b4abc310021516f6deaa83d9c4b7a05f4fad2404f5a4dfdd19_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b23e2d49722cb24898754ee30eaf0fa3915bedd8e5fce397b8ace8f6c0d57737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23e2d49722cb24898754ee30eaf0fa3915bedd8e5fce397b8ace8f6c0d57737->enter($__internal_b23e2d49722cb24898754ee30eaf0fa3915bedd8e5fce397b8ace8f6c0d57737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9a49d95f0cc6e434131ad9adcc8b1f916afa24fc58fa9b56a022717de398187e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a49d95f0cc6e434131ad9adcc8b1f916afa24fc58fa9b56a022717de398187e->enter($__internal_9a49d95f0cc6e434131ad9adcc8b1f916afa24fc58fa9b56a022717de398187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9a49d95f0cc6e434131ad9adcc8b1f916afa24fc58fa9b56a022717de398187e->leave($__internal_9a49d95f0cc6e434131ad9adcc8b1f916afa24fc58fa9b56a022717de398187e_prof);

        
        $__internal_b23e2d49722cb24898754ee30eaf0fa3915bedd8e5fce397b8ace8f6c0d57737->leave($__internal_b23e2d49722cb24898754ee30eaf0fa3915bedd8e5fce397b8ace8f6c0d57737_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c13850bd5e8db91e4516322c9c87fbb019810618d44cbab447e63b1b6ab42762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13850bd5e8db91e4516322c9c87fbb019810618d44cbab447e63b1b6ab42762->enter($__internal_c13850bd5e8db91e4516322c9c87fbb019810618d44cbab447e63b1b6ab42762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c9d06421c30b3bebcf020c0b7f9c28f25dc8e6a48414dab34c36ed085389f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9d06421c30b3bebcf020c0b7f9c28f25dc8e6a48414dab34c36ed085389f97->enter($__internal_8c9d06421c30b3bebcf020c0b7f9c28f25dc8e6a48414dab34c36ed085389f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8c9d06421c30b3bebcf020c0b7f9c28f25dc8e6a48414dab34c36ed085389f97->leave($__internal_8c9d06421c30b3bebcf020c0b7f9c28f25dc8e6a48414dab34c36ed085389f97_prof);

        
        $__internal_c13850bd5e8db91e4516322c9c87fbb019810618d44cbab447e63b1b6ab42762->leave($__internal_c13850bd5e8db91e4516322c9c87fbb019810618d44cbab447e63b1b6ab42762_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
