<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9cf4ecfd74a1037bf1f0d06394a435916895ee5ce6b501033ff54a9c01b03044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_ff8e9899b129b615a4602cd2fdfddb30fd498b7346a9fdd585cf4649fbfe919b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8e9899b129b615a4602cd2fdfddb30fd498b7346a9fdd585cf4649fbfe919b->enter($__internal_ff8e9899b129b615a4602cd2fdfddb30fd498b7346a9fdd585cf4649fbfe919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6ff05239454391250df2ae8d2e38c66fbb64d3dbe879ccbe478539a2b7936c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff05239454391250df2ae8d2e38c66fbb64d3dbe879ccbe478539a2b7936c11->enter($__internal_6ff05239454391250df2ae8d2e38c66fbb64d3dbe879ccbe478539a2b7936c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8e9899b129b615a4602cd2fdfddb30fd498b7346a9fdd585cf4649fbfe919b->leave($__internal_ff8e9899b129b615a4602cd2fdfddb30fd498b7346a9fdd585cf4649fbfe919b_prof);

        
        $__internal_6ff05239454391250df2ae8d2e38c66fbb64d3dbe879ccbe478539a2b7936c11->leave($__internal_6ff05239454391250df2ae8d2e38c66fbb64d3dbe879ccbe478539a2b7936c11_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_13ec6cfb37870fb2b74325e8e5e69bf0396135847874d1c41e34616d45fc7831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ec6cfb37870fb2b74325e8e5e69bf0396135847874d1c41e34616d45fc7831->enter($__internal_13ec6cfb37870fb2b74325e8e5e69bf0396135847874d1c41e34616d45fc7831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ff46afbda7c1ba5627dd4a4a9c3c1878e5daeb1d36b9574886d4df72eac45437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff46afbda7c1ba5627dd4a4a9c3c1878e5daeb1d36b9574886d4df72eac45437->enter($__internal_ff46afbda7c1ba5627dd4a4a9c3c1878e5daeb1d36b9574886d4df72eac45437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ff46afbda7c1ba5627dd4a4a9c3c1878e5daeb1d36b9574886d4df72eac45437->leave($__internal_ff46afbda7c1ba5627dd4a4a9c3c1878e5daeb1d36b9574886d4df72eac45437_prof);

        
        $__internal_13ec6cfb37870fb2b74325e8e5e69bf0396135847874d1c41e34616d45fc7831->leave($__internal_13ec6cfb37870fb2b74325e8e5e69bf0396135847874d1c41e34616d45fc7831_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfa7f072bb962c3dbbfde09d5d1e249a10b7f3e68d013e24827e8b42ea6b0138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa7f072bb962c3dbbfde09d5d1e249a10b7f3e68d013e24827e8b42ea6b0138->enter($__internal_cfa7f072bb962c3dbbfde09d5d1e249a10b7f3e68d013e24827e8b42ea6b0138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d8a0270c032a38a65cbd1cc9465af6172523612af6638e329b5b7d3a937fd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8a0270c032a38a65cbd1cc9465af6172523612af6638e329b5b7d3a937fd29->enter($__internal_7d8a0270c032a38a65cbd1cc9465af6172523612af6638e329b5b7d3a937fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7d8a0270c032a38a65cbd1cc9465af6172523612af6638e329b5b7d3a937fd29->leave($__internal_7d8a0270c032a38a65cbd1cc9465af6172523612af6638e329b5b7d3a937fd29_prof);

        
        $__internal_cfa7f072bb962c3dbbfde09d5d1e249a10b7f3e68d013e24827e8b42ea6b0138->leave($__internal_cfa7f072bb962c3dbbfde09d5d1e249a10b7f3e68d013e24827e8b42ea6b0138_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
