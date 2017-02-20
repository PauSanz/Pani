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
        $__internal_15a5fbdaeb7e1254b4cd0896c864d3ca9a7c1b28d0ef4e0fd03518dc5d1e7a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a5fbdaeb7e1254b4cd0896c864d3ca9a7c1b28d0ef4e0fd03518dc5d1e7a35->enter($__internal_15a5fbdaeb7e1254b4cd0896c864d3ca9a7c1b28d0ef4e0fd03518dc5d1e7a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_02433489049d682e0eef50249a860bd5bb248f1719119f9f9c2b40a9edce8346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02433489049d682e0eef50249a860bd5bb248f1719119f9f9c2b40a9edce8346->enter($__internal_02433489049d682e0eef50249a860bd5bb248f1719119f9f9c2b40a9edce8346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a5fbdaeb7e1254b4cd0896c864d3ca9a7c1b28d0ef4e0fd03518dc5d1e7a35->leave($__internal_15a5fbdaeb7e1254b4cd0896c864d3ca9a7c1b28d0ef4e0fd03518dc5d1e7a35_prof);

        
        $__internal_02433489049d682e0eef50249a860bd5bb248f1719119f9f9c2b40a9edce8346->leave($__internal_02433489049d682e0eef50249a860bd5bb248f1719119f9f9c2b40a9edce8346_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d5d9091bfb3dd9ebdb78f0405687d776e1fd39842eba7cca96839d39fcb2ec9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d9091bfb3dd9ebdb78f0405687d776e1fd39842eba7cca96839d39fcb2ec9a->enter($__internal_d5d9091bfb3dd9ebdb78f0405687d776e1fd39842eba7cca96839d39fcb2ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2dbcc996ad633d8d6e4752432b927d1c6c6b0c3e6acfe1f3ad01b666a4901cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbcc996ad633d8d6e4752432b927d1c6c6b0c3e6acfe1f3ad01b666a4901cc2->enter($__internal_2dbcc996ad633d8d6e4752432b927d1c6c6b0c3e6acfe1f3ad01b666a4901cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2dbcc996ad633d8d6e4752432b927d1c6c6b0c3e6acfe1f3ad01b666a4901cc2->leave($__internal_2dbcc996ad633d8d6e4752432b927d1c6c6b0c3e6acfe1f3ad01b666a4901cc2_prof);

        
        $__internal_d5d9091bfb3dd9ebdb78f0405687d776e1fd39842eba7cca96839d39fcb2ec9a->leave($__internal_d5d9091bfb3dd9ebdb78f0405687d776e1fd39842eba7cca96839d39fcb2ec9a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f7f2697aabe757f49f1d083997d7b5082ad98923f70ec87db42501211ce36f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7f2697aabe757f49f1d083997d7b5082ad98923f70ec87db42501211ce36f6->enter($__internal_2f7f2697aabe757f49f1d083997d7b5082ad98923f70ec87db42501211ce36f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f81f26e36ab6be59bf5f47ea65ba4d02add5c1401f62b254e8304e590829de90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f26e36ab6be59bf5f47ea65ba4d02add5c1401f62b254e8304e590829de90->enter($__internal_f81f26e36ab6be59bf5f47ea65ba4d02add5c1401f62b254e8304e590829de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f81f26e36ab6be59bf5f47ea65ba4d02add5c1401f62b254e8304e590829de90->leave($__internal_f81f26e36ab6be59bf5f47ea65ba4d02add5c1401f62b254e8304e590829de90_prof);

        
        $__internal_2f7f2697aabe757f49f1d083997d7b5082ad98923f70ec87db42501211ce36f6->leave($__internal_2f7f2697aabe757f49f1d083997d7b5082ad98923f70ec87db42501211ce36f6_prof);

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
