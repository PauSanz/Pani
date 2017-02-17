<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f4e1a530875719e2a321231d3e9ebcc2435b31852ba14835009c158ce5499c84 extends Twig_Template
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
        $__internal_66ba8c3c776f42f7896d2c86ebe205409f55421e74621ec02da5a29631cd50ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ba8c3c776f42f7896d2c86ebe205409f55421e74621ec02da5a29631cd50ca->enter($__internal_66ba8c3c776f42f7896d2c86ebe205409f55421e74621ec02da5a29631cd50ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_14be6a0a5f033515cbd15e8012cc3f7d0811d263c631c2d437a4332c8b34245e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14be6a0a5f033515cbd15e8012cc3f7d0811d263c631c2d437a4332c8b34245e->enter($__internal_14be6a0a5f033515cbd15e8012cc3f7d0811d263c631c2d437a4332c8b34245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ba8c3c776f42f7896d2c86ebe205409f55421e74621ec02da5a29631cd50ca->leave($__internal_66ba8c3c776f42f7896d2c86ebe205409f55421e74621ec02da5a29631cd50ca_prof);

        
        $__internal_14be6a0a5f033515cbd15e8012cc3f7d0811d263c631c2d437a4332c8b34245e->leave($__internal_14be6a0a5f033515cbd15e8012cc3f7d0811d263c631c2d437a4332c8b34245e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ae8affb67f08a965c5a178dea6ed7722cd8b1a6faf366d7af99485fe73cc74f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8affb67f08a965c5a178dea6ed7722cd8b1a6faf366d7af99485fe73cc74f3->enter($__internal_ae8affb67f08a965c5a178dea6ed7722cd8b1a6faf366d7af99485fe73cc74f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_320778712da300ed5c067c6165a6802abd1b864856ec885c881390895ce39113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320778712da300ed5c067c6165a6802abd1b864856ec885c881390895ce39113->enter($__internal_320778712da300ed5c067c6165a6802abd1b864856ec885c881390895ce39113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_320778712da300ed5c067c6165a6802abd1b864856ec885c881390895ce39113->leave($__internal_320778712da300ed5c067c6165a6802abd1b864856ec885c881390895ce39113_prof);

        
        $__internal_ae8affb67f08a965c5a178dea6ed7722cd8b1a6faf366d7af99485fe73cc74f3->leave($__internal_ae8affb67f08a965c5a178dea6ed7722cd8b1a6faf366d7af99485fe73cc74f3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9046aa77e30a9f62a424dcde7eed21b29515c8f10f6f41ebf38921cd1db6c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9046aa77e30a9f62a424dcde7eed21b29515c8f10f6f41ebf38921cd1db6c90->enter($__internal_e9046aa77e30a9f62a424dcde7eed21b29515c8f10f6f41ebf38921cd1db6c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_284772bee1d7d521177ef3149bc701613528d35724055438a350a6bc48d2a22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284772bee1d7d521177ef3149bc701613528d35724055438a350a6bc48d2a22b->enter($__internal_284772bee1d7d521177ef3149bc701613528d35724055438a350a6bc48d2a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_284772bee1d7d521177ef3149bc701613528d35724055438a350a6bc48d2a22b->leave($__internal_284772bee1d7d521177ef3149bc701613528d35724055438a350a6bc48d2a22b_prof);

        
        $__internal_e9046aa77e30a9f62a424dcde7eed21b29515c8f10f6f41ebf38921cd1db6c90->leave($__internal_e9046aa77e30a9f62a424dcde7eed21b29515c8f10f6f41ebf38921cd1db6c90_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
