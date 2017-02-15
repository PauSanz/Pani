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
        $__internal_90226bd8eb1c82d39a67dbdc7f54990d143c504ea3894c28a1c90c58397fc21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90226bd8eb1c82d39a67dbdc7f54990d143c504ea3894c28a1c90c58397fc21f->enter($__internal_90226bd8eb1c82d39a67dbdc7f54990d143c504ea3894c28a1c90c58397fc21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2c2f4639303428ee6a8195a59c737f29d279119d373289a545d42f3b6e1e56bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2f4639303428ee6a8195a59c737f29d279119d373289a545d42f3b6e1e56bb->enter($__internal_2c2f4639303428ee6a8195a59c737f29d279119d373289a545d42f3b6e1e56bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90226bd8eb1c82d39a67dbdc7f54990d143c504ea3894c28a1c90c58397fc21f->leave($__internal_90226bd8eb1c82d39a67dbdc7f54990d143c504ea3894c28a1c90c58397fc21f_prof);

        
        $__internal_2c2f4639303428ee6a8195a59c737f29d279119d373289a545d42f3b6e1e56bb->leave($__internal_2c2f4639303428ee6a8195a59c737f29d279119d373289a545d42f3b6e1e56bb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f00aad04d705e55e17444674d3b4fc2eee1ea7568df11e565f430689783add2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00aad04d705e55e17444674d3b4fc2eee1ea7568df11e565f430689783add2d->enter($__internal_f00aad04d705e55e17444674d3b4fc2eee1ea7568df11e565f430689783add2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d365a76ecdb5c3b3b73f8dd375dc3502691f629fe1e9b3e5d43f9b89211ab476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d365a76ecdb5c3b3b73f8dd375dc3502691f629fe1e9b3e5d43f9b89211ab476->enter($__internal_d365a76ecdb5c3b3b73f8dd375dc3502691f629fe1e9b3e5d43f9b89211ab476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d365a76ecdb5c3b3b73f8dd375dc3502691f629fe1e9b3e5d43f9b89211ab476->leave($__internal_d365a76ecdb5c3b3b73f8dd375dc3502691f629fe1e9b3e5d43f9b89211ab476_prof);

        
        $__internal_f00aad04d705e55e17444674d3b4fc2eee1ea7568df11e565f430689783add2d->leave($__internal_f00aad04d705e55e17444674d3b4fc2eee1ea7568df11e565f430689783add2d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57761ea6d60db217bec2c646ccf804a3264fa61efe18ff749356238020dcdc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57761ea6d60db217bec2c646ccf804a3264fa61efe18ff749356238020dcdc28->enter($__internal_57761ea6d60db217bec2c646ccf804a3264fa61efe18ff749356238020dcdc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf87dc2748cdd81dccfb3f48ec637ee17c318c2213a638848b0ccaed0d004c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf87dc2748cdd81dccfb3f48ec637ee17c318c2213a638848b0ccaed0d004c53->enter($__internal_bf87dc2748cdd81dccfb3f48ec637ee17c318c2213a638848b0ccaed0d004c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bf87dc2748cdd81dccfb3f48ec637ee17c318c2213a638848b0ccaed0d004c53->leave($__internal_bf87dc2748cdd81dccfb3f48ec637ee17c318c2213a638848b0ccaed0d004c53_prof);

        
        $__internal_57761ea6d60db217bec2c646ccf804a3264fa61efe18ff749356238020dcdc28->leave($__internal_57761ea6d60db217bec2c646ccf804a3264fa61efe18ff749356238020dcdc28_prof);

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
