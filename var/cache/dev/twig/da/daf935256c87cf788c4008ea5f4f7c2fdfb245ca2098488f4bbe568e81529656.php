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
        $__internal_9c0b524525b91b9b29369c94eb438c36951b85d5e990edf2e1155c67ee1cb4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0b524525b91b9b29369c94eb438c36951b85d5e990edf2e1155c67ee1cb4ac->enter($__internal_9c0b524525b91b9b29369c94eb438c36951b85d5e990edf2e1155c67ee1cb4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d7b1291e0cbdbb7953479bc204f39533faca5d9b1c6728061635c12a38acdbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b1291e0cbdbb7953479bc204f39533faca5d9b1c6728061635c12a38acdbc4->enter($__internal_d7b1291e0cbdbb7953479bc204f39533faca5d9b1c6728061635c12a38acdbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0b524525b91b9b29369c94eb438c36951b85d5e990edf2e1155c67ee1cb4ac->leave($__internal_9c0b524525b91b9b29369c94eb438c36951b85d5e990edf2e1155c67ee1cb4ac_prof);

        
        $__internal_d7b1291e0cbdbb7953479bc204f39533faca5d9b1c6728061635c12a38acdbc4->leave($__internal_d7b1291e0cbdbb7953479bc204f39533faca5d9b1c6728061635c12a38acdbc4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bbb17409c6f93157c754597f2fff6905b5d3ae1987f50b82d0c5f511288fb2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb17409c6f93157c754597f2fff6905b5d3ae1987f50b82d0c5f511288fb2cc->enter($__internal_bbb17409c6f93157c754597f2fff6905b5d3ae1987f50b82d0c5f511288fb2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_20939be49cc10f9d0cef2da1c8afb4d37a4ea8f76c3ce4afceecb32850c4453e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20939be49cc10f9d0cef2da1c8afb4d37a4ea8f76c3ce4afceecb32850c4453e->enter($__internal_20939be49cc10f9d0cef2da1c8afb4d37a4ea8f76c3ce4afceecb32850c4453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_20939be49cc10f9d0cef2da1c8afb4d37a4ea8f76c3ce4afceecb32850c4453e->leave($__internal_20939be49cc10f9d0cef2da1c8afb4d37a4ea8f76c3ce4afceecb32850c4453e_prof);

        
        $__internal_bbb17409c6f93157c754597f2fff6905b5d3ae1987f50b82d0c5f511288fb2cc->leave($__internal_bbb17409c6f93157c754597f2fff6905b5d3ae1987f50b82d0c5f511288fb2cc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_219f43576cb9fe86f26e8bfe9b14de446fc506ed7630d65d93d50aedfee0d05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219f43576cb9fe86f26e8bfe9b14de446fc506ed7630d65d93d50aedfee0d05e->enter($__internal_219f43576cb9fe86f26e8bfe9b14de446fc506ed7630d65d93d50aedfee0d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05770153b41a4cb8e4c63bfb064fc3fdffc9a62b8b8e06f1822a8e8c45a5157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05770153b41a4cb8e4c63bfb064fc3fdffc9a62b8b8e06f1822a8e8c45a5157f->enter($__internal_05770153b41a4cb8e4c63bfb064fc3fdffc9a62b8b8e06f1822a8e8c45a5157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_05770153b41a4cb8e4c63bfb064fc3fdffc9a62b8b8e06f1822a8e8c45a5157f->leave($__internal_05770153b41a4cb8e4c63bfb064fc3fdffc9a62b8b8e06f1822a8e8c45a5157f_prof);

        
        $__internal_219f43576cb9fe86f26e8bfe9b14de446fc506ed7630d65d93d50aedfee0d05e->leave($__internal_219f43576cb9fe86f26e8bfe9b14de446fc506ed7630d65d93d50aedfee0d05e_prof);

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
