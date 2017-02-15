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
        $__internal_b3a9e59457d8882ce072d48ec11e249005fc6a1320b2f484f6d5b8d16ca5cd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a9e59457d8882ce072d48ec11e249005fc6a1320b2f484f6d5b8d16ca5cd69->enter($__internal_b3a9e59457d8882ce072d48ec11e249005fc6a1320b2f484f6d5b8d16ca5cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d456882a3e91b5d2bb858531de4c3dec4f44db6d596417c99b7961fa37aab074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d456882a3e91b5d2bb858531de4c3dec4f44db6d596417c99b7961fa37aab074->enter($__internal_d456882a3e91b5d2bb858531de4c3dec4f44db6d596417c99b7961fa37aab074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a9e59457d8882ce072d48ec11e249005fc6a1320b2f484f6d5b8d16ca5cd69->leave($__internal_b3a9e59457d8882ce072d48ec11e249005fc6a1320b2f484f6d5b8d16ca5cd69_prof);

        
        $__internal_d456882a3e91b5d2bb858531de4c3dec4f44db6d596417c99b7961fa37aab074->leave($__internal_d456882a3e91b5d2bb858531de4c3dec4f44db6d596417c99b7961fa37aab074_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0bdbfd0c6088adc9346d829257248aace4b7880527008c07a08784c10340792f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdbfd0c6088adc9346d829257248aace4b7880527008c07a08784c10340792f->enter($__internal_0bdbfd0c6088adc9346d829257248aace4b7880527008c07a08784c10340792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2078fa5e70b2ed7206979ca525707bbd8f8871e69f1eb818dc297b0121f4724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2078fa5e70b2ed7206979ca525707bbd8f8871e69f1eb818dc297b0121f4724b->enter($__internal_2078fa5e70b2ed7206979ca525707bbd8f8871e69f1eb818dc297b0121f4724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2078fa5e70b2ed7206979ca525707bbd8f8871e69f1eb818dc297b0121f4724b->leave($__internal_2078fa5e70b2ed7206979ca525707bbd8f8871e69f1eb818dc297b0121f4724b_prof);

        
        $__internal_0bdbfd0c6088adc9346d829257248aace4b7880527008c07a08784c10340792f->leave($__internal_0bdbfd0c6088adc9346d829257248aace4b7880527008c07a08784c10340792f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d820d69497e8c8b59f3d49e3ccdacd7ff5fc31c9b97e79945ccde74d7c82cf24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d820d69497e8c8b59f3d49e3ccdacd7ff5fc31c9b97e79945ccde74d7c82cf24->enter($__internal_d820d69497e8c8b59f3d49e3ccdacd7ff5fc31c9b97e79945ccde74d7c82cf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04ac285fa9df6077f8c5772987e9da1f048051511ada360c3a6c443e59ed390a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac285fa9df6077f8c5772987e9da1f048051511ada360c3a6c443e59ed390a->enter($__internal_04ac285fa9df6077f8c5772987e9da1f048051511ada360c3a6c443e59ed390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_04ac285fa9df6077f8c5772987e9da1f048051511ada360c3a6c443e59ed390a->leave($__internal_04ac285fa9df6077f8c5772987e9da1f048051511ada360c3a6c443e59ed390a_prof);

        
        $__internal_d820d69497e8c8b59f3d49e3ccdacd7ff5fc31c9b97e79945ccde74d7c82cf24->leave($__internal_d820d69497e8c8b59f3d49e3ccdacd7ff5fc31c9b97e79945ccde74d7c82cf24_prof);

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
