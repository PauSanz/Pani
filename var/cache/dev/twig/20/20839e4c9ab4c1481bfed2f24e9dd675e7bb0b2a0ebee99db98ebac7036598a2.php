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
        $__internal_c59fa97e277e0dabb507a7ca3f8d3d6983417842e27900f88432ce9aa9a3b173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59fa97e277e0dabb507a7ca3f8d3d6983417842e27900f88432ce9aa9a3b173->enter($__internal_c59fa97e277e0dabb507a7ca3f8d3d6983417842e27900f88432ce9aa9a3b173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e90fb2deeac85f111508a6c4db21f7396ec762bd919d08acc0b051e4ec6898f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90fb2deeac85f111508a6c4db21f7396ec762bd919d08acc0b051e4ec6898f8->enter($__internal_e90fb2deeac85f111508a6c4db21f7396ec762bd919d08acc0b051e4ec6898f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c59fa97e277e0dabb507a7ca3f8d3d6983417842e27900f88432ce9aa9a3b173->leave($__internal_c59fa97e277e0dabb507a7ca3f8d3d6983417842e27900f88432ce9aa9a3b173_prof);

        
        $__internal_e90fb2deeac85f111508a6c4db21f7396ec762bd919d08acc0b051e4ec6898f8->leave($__internal_e90fb2deeac85f111508a6c4db21f7396ec762bd919d08acc0b051e4ec6898f8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_aef3822b3cf9d12804b46ce2d298ddfa21bb325e59e435352620b6694365e4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef3822b3cf9d12804b46ce2d298ddfa21bb325e59e435352620b6694365e4ff->enter($__internal_aef3822b3cf9d12804b46ce2d298ddfa21bb325e59e435352620b6694365e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_054abf2a058c1cd144269322afab2c1c69afe935abf729f2a2b42902fe77d3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054abf2a058c1cd144269322afab2c1c69afe935abf729f2a2b42902fe77d3bd->enter($__internal_054abf2a058c1cd144269322afab2c1c69afe935abf729f2a2b42902fe77d3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_054abf2a058c1cd144269322afab2c1c69afe935abf729f2a2b42902fe77d3bd->leave($__internal_054abf2a058c1cd144269322afab2c1c69afe935abf729f2a2b42902fe77d3bd_prof);

        
        $__internal_aef3822b3cf9d12804b46ce2d298ddfa21bb325e59e435352620b6694365e4ff->leave($__internal_aef3822b3cf9d12804b46ce2d298ddfa21bb325e59e435352620b6694365e4ff_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88b562bd6509f812c93f3ace6935e37c5edf4f912045fde2940351316571cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88b562bd6509f812c93f3ace6935e37c5edf4f912045fde2940351316571cae->enter($__internal_d88b562bd6509f812c93f3ace6935e37c5edf4f912045fde2940351316571cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_187dee4fdd76e66f8f3dd9f0d1803871db0f1401394df687a5b64321605292c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187dee4fdd76e66f8f3dd9f0d1803871db0f1401394df687a5b64321605292c1->enter($__internal_187dee4fdd76e66f8f3dd9f0d1803871db0f1401394df687a5b64321605292c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_187dee4fdd76e66f8f3dd9f0d1803871db0f1401394df687a5b64321605292c1->leave($__internal_187dee4fdd76e66f8f3dd9f0d1803871db0f1401394df687a5b64321605292c1_prof);

        
        $__internal_d88b562bd6509f812c93f3ace6935e37c5edf4f912045fde2940351316571cae->leave($__internal_d88b562bd6509f812c93f3ace6935e37c5edf4f912045fde2940351316571cae_prof);

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
