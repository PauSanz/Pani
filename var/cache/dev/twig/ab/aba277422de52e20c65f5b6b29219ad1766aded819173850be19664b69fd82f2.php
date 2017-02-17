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
        $__internal_0626bbbdd5ddc341d3e5eda23cbeae17e7a792d7089f432428e3e6522f34ec07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0626bbbdd5ddc341d3e5eda23cbeae17e7a792d7089f432428e3e6522f34ec07->enter($__internal_0626bbbdd5ddc341d3e5eda23cbeae17e7a792d7089f432428e3e6522f34ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_556e72d6b4e2aeb522a47082078ddbdab0ca4688872616cb9c97bac2318732dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556e72d6b4e2aeb522a47082078ddbdab0ca4688872616cb9c97bac2318732dc->enter($__internal_556e72d6b4e2aeb522a47082078ddbdab0ca4688872616cb9c97bac2318732dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0626bbbdd5ddc341d3e5eda23cbeae17e7a792d7089f432428e3e6522f34ec07->leave($__internal_0626bbbdd5ddc341d3e5eda23cbeae17e7a792d7089f432428e3e6522f34ec07_prof);

        
        $__internal_556e72d6b4e2aeb522a47082078ddbdab0ca4688872616cb9c97bac2318732dc->leave($__internal_556e72d6b4e2aeb522a47082078ddbdab0ca4688872616cb9c97bac2318732dc_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0b29a3fc077a2c099d8de4d3c6b2de05b5aba8de1b708da89e8a5295c439a4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b29a3fc077a2c099d8de4d3c6b2de05b5aba8de1b708da89e8a5295c439a4de->enter($__internal_0b29a3fc077a2c099d8de4d3c6b2de05b5aba8de1b708da89e8a5295c439a4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c84874d60f3cc0572e7f1079fa3fb022012ddd5233eed016c4cbe68a91289f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84874d60f3cc0572e7f1079fa3fb022012ddd5233eed016c4cbe68a91289f31->enter($__internal_c84874d60f3cc0572e7f1079fa3fb022012ddd5233eed016c4cbe68a91289f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c84874d60f3cc0572e7f1079fa3fb022012ddd5233eed016c4cbe68a91289f31->leave($__internal_c84874d60f3cc0572e7f1079fa3fb022012ddd5233eed016c4cbe68a91289f31_prof);

        
        $__internal_0b29a3fc077a2c099d8de4d3c6b2de05b5aba8de1b708da89e8a5295c439a4de->leave($__internal_0b29a3fc077a2c099d8de4d3c6b2de05b5aba8de1b708da89e8a5295c439a4de_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae7aa31c76d64434f3e73326d13475351cdad53f28f209aa539a9aa8551114b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7aa31c76d64434f3e73326d13475351cdad53f28f209aa539a9aa8551114b5->enter($__internal_ae7aa31c76d64434f3e73326d13475351cdad53f28f209aa539a9aa8551114b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32321ff68ac93afc5bc7244c82e64387afc45643c46ac9e0ed327cfc8455241c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32321ff68ac93afc5bc7244c82e64387afc45643c46ac9e0ed327cfc8455241c->enter($__internal_32321ff68ac93afc5bc7244c82e64387afc45643c46ac9e0ed327cfc8455241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_32321ff68ac93afc5bc7244c82e64387afc45643c46ac9e0ed327cfc8455241c->leave($__internal_32321ff68ac93afc5bc7244c82e64387afc45643c46ac9e0ed327cfc8455241c_prof);

        
        $__internal_ae7aa31c76d64434f3e73326d13475351cdad53f28f209aa539a9aa8551114b5->leave($__internal_ae7aa31c76d64434f3e73326d13475351cdad53f28f209aa539a9aa8551114b5_prof);

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
