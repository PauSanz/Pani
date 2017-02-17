<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3ef180f7cf420af9489c2d5dc041c2e1ceae1ddd3fa89dc4635cf0fabb08ef99 extends Twig_Template
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
        $__internal_d1b7f78cb3aac4f207ebfda71a2ee28515bd4cfc3f63d9c4b6331bcf739a66c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b7f78cb3aac4f207ebfda71a2ee28515bd4cfc3f63d9c4b6331bcf739a66c0->enter($__internal_d1b7f78cb3aac4f207ebfda71a2ee28515bd4cfc3f63d9c4b6331bcf739a66c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4652e0397521659bb86c054a1169e121cce1d53001f494f10e2ac2cd9f80ebe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4652e0397521659bb86c054a1169e121cce1d53001f494f10e2ac2cd9f80ebe4->enter($__internal_4652e0397521659bb86c054a1169e121cce1d53001f494f10e2ac2cd9f80ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b7f78cb3aac4f207ebfda71a2ee28515bd4cfc3f63d9c4b6331bcf739a66c0->leave($__internal_d1b7f78cb3aac4f207ebfda71a2ee28515bd4cfc3f63d9c4b6331bcf739a66c0_prof);

        
        $__internal_4652e0397521659bb86c054a1169e121cce1d53001f494f10e2ac2cd9f80ebe4->leave($__internal_4652e0397521659bb86c054a1169e121cce1d53001f494f10e2ac2cd9f80ebe4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_09e5a37fec859a685c38efa31e66271bfd8cd36b961a1869cfd80252f2ab6b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e5a37fec859a685c38efa31e66271bfd8cd36b961a1869cfd80252f2ab6b5c->enter($__internal_09e5a37fec859a685c38efa31e66271bfd8cd36b961a1869cfd80252f2ab6b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ba4fbbd60a5734b8ae6349ae56bde8196d4ab807855bdd74cbfd19b04dc62185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4fbbd60a5734b8ae6349ae56bde8196d4ab807855bdd74cbfd19b04dc62185->enter($__internal_ba4fbbd60a5734b8ae6349ae56bde8196d4ab807855bdd74cbfd19b04dc62185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ba4fbbd60a5734b8ae6349ae56bde8196d4ab807855bdd74cbfd19b04dc62185->leave($__internal_ba4fbbd60a5734b8ae6349ae56bde8196d4ab807855bdd74cbfd19b04dc62185_prof);

        
        $__internal_09e5a37fec859a685c38efa31e66271bfd8cd36b961a1869cfd80252f2ab6b5c->leave($__internal_09e5a37fec859a685c38efa31e66271bfd8cd36b961a1869cfd80252f2ab6b5c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7db37d3bc13adb697b0deeec5c6100b1ac5c76d7aaa079a1786d691700842681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db37d3bc13adb697b0deeec5c6100b1ac5c76d7aaa079a1786d691700842681->enter($__internal_7db37d3bc13adb697b0deeec5c6100b1ac5c76d7aaa079a1786d691700842681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a4c559711636ab77c4c1d73350a95b86e34b1fc591b63c4b98ca7719da1458d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c559711636ab77c4c1d73350a95b86e34b1fc591b63c4b98ca7719da1458d8->enter($__internal_a4c559711636ab77c4c1d73350a95b86e34b1fc591b63c4b98ca7719da1458d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a4c559711636ab77c4c1d73350a95b86e34b1fc591b63c4b98ca7719da1458d8->leave($__internal_a4c559711636ab77c4c1d73350a95b86e34b1fc591b63c4b98ca7719da1458d8_prof);

        
        $__internal_7db37d3bc13adb697b0deeec5c6100b1ac5c76d7aaa079a1786d691700842681->leave($__internal_7db37d3bc13adb697b0deeec5c6100b1ac5c76d7aaa079a1786d691700842681_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
