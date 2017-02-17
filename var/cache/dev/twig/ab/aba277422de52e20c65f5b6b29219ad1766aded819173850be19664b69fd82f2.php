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
        $__internal_06b56ad23a48555758fe4b789684adaeb4bea3fbd3fbe7325314534a2201772b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b56ad23a48555758fe4b789684adaeb4bea3fbd3fbe7325314534a2201772b->enter($__internal_06b56ad23a48555758fe4b789684adaeb4bea3fbd3fbe7325314534a2201772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d6d6751b22d27716266763e399be35bbd1078ea6ad38e07873508cccb6be1f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d6751b22d27716266763e399be35bbd1078ea6ad38e07873508cccb6be1f3f->enter($__internal_d6d6751b22d27716266763e399be35bbd1078ea6ad38e07873508cccb6be1f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b56ad23a48555758fe4b789684adaeb4bea3fbd3fbe7325314534a2201772b->leave($__internal_06b56ad23a48555758fe4b789684adaeb4bea3fbd3fbe7325314534a2201772b_prof);

        
        $__internal_d6d6751b22d27716266763e399be35bbd1078ea6ad38e07873508cccb6be1f3f->leave($__internal_d6d6751b22d27716266763e399be35bbd1078ea6ad38e07873508cccb6be1f3f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9bc48155a580dfdccfac349b2ed462bbb59fc285ce19d6a95b732fb6d65075f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc48155a580dfdccfac349b2ed462bbb59fc285ce19d6a95b732fb6d65075f4->enter($__internal_9bc48155a580dfdccfac349b2ed462bbb59fc285ce19d6a95b732fb6d65075f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_077d070b5e5ae149734c9b7ad6a4bc7a7cce3bf46a52d6880c903a72baa776a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077d070b5e5ae149734c9b7ad6a4bc7a7cce3bf46a52d6880c903a72baa776a8->enter($__internal_077d070b5e5ae149734c9b7ad6a4bc7a7cce3bf46a52d6880c903a72baa776a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_077d070b5e5ae149734c9b7ad6a4bc7a7cce3bf46a52d6880c903a72baa776a8->leave($__internal_077d070b5e5ae149734c9b7ad6a4bc7a7cce3bf46a52d6880c903a72baa776a8_prof);

        
        $__internal_9bc48155a580dfdccfac349b2ed462bbb59fc285ce19d6a95b732fb6d65075f4->leave($__internal_9bc48155a580dfdccfac349b2ed462bbb59fc285ce19d6a95b732fb6d65075f4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd3ec57ebb6476726646bf9bc8c0ca0cec39b53c7a91d82594049aae7af59fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3ec57ebb6476726646bf9bc8c0ca0cec39b53c7a91d82594049aae7af59fea->enter($__internal_fd3ec57ebb6476726646bf9bc8c0ca0cec39b53c7a91d82594049aae7af59fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d58716f1ac32a3bbe955fb2e5e39c7a376adeef266ac0aaaf3de1657be8a9157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58716f1ac32a3bbe955fb2e5e39c7a376adeef266ac0aaaf3de1657be8a9157->enter($__internal_d58716f1ac32a3bbe955fb2e5e39c7a376adeef266ac0aaaf3de1657be8a9157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d58716f1ac32a3bbe955fb2e5e39c7a376adeef266ac0aaaf3de1657be8a9157->leave($__internal_d58716f1ac32a3bbe955fb2e5e39c7a376adeef266ac0aaaf3de1657be8a9157_prof);

        
        $__internal_fd3ec57ebb6476726646bf9bc8c0ca0cec39b53c7a91d82594049aae7af59fea->leave($__internal_fd3ec57ebb6476726646bf9bc8c0ca0cec39b53c7a91d82594049aae7af59fea_prof);

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
