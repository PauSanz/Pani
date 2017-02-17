<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_231257d9426afdf8548b03ab6b3040d726d4e0f02bcbd26c8b9ef5d6663b4d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_956e6b9682129f8d47597181b94159352e5e7228ae75396f98e814a5fc8b534e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956e6b9682129f8d47597181b94159352e5e7228ae75396f98e814a5fc8b534e->enter($__internal_956e6b9682129f8d47597181b94159352e5e7228ae75396f98e814a5fc8b534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b76143dfd4f0873a7ec4eedaecf3436edc9c4a681a7fe191fa94b4d7b4f4a9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76143dfd4f0873a7ec4eedaecf3436edc9c4a681a7fe191fa94b4d7b4f4a9d7->enter($__internal_b76143dfd4f0873a7ec4eedaecf3436edc9c4a681a7fe191fa94b4d7b4f4a9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956e6b9682129f8d47597181b94159352e5e7228ae75396f98e814a5fc8b534e->leave($__internal_956e6b9682129f8d47597181b94159352e5e7228ae75396f98e814a5fc8b534e_prof);

        
        $__internal_b76143dfd4f0873a7ec4eedaecf3436edc9c4a681a7fe191fa94b4d7b4f4a9d7->leave($__internal_b76143dfd4f0873a7ec4eedaecf3436edc9c4a681a7fe191fa94b4d7b4f4a9d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98aa2290938bbaa04811b375b417789a6685fa844a0ede52da25d483168ee222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aa2290938bbaa04811b375b417789a6685fa844a0ede52da25d483168ee222->enter($__internal_98aa2290938bbaa04811b375b417789a6685fa844a0ede52da25d483168ee222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee0e7af773e9a3a9bfbd37fd88e97bc1f87d74817cef3c9a58ef3a4146a858e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0e7af773e9a3a9bfbd37fd88e97bc1f87d74817cef3c9a58ef3a4146a858e5->enter($__internal_ee0e7af773e9a3a9bfbd37fd88e97bc1f87d74817cef3c9a58ef3a4146a858e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ee0e7af773e9a3a9bfbd37fd88e97bc1f87d74817cef3c9a58ef3a4146a858e5->leave($__internal_ee0e7af773e9a3a9bfbd37fd88e97bc1f87d74817cef3c9a58ef3a4146a858e5_prof);

        
        $__internal_98aa2290938bbaa04811b375b417789a6685fa844a0ede52da25d483168ee222->leave($__internal_98aa2290938bbaa04811b375b417789a6685fa844a0ede52da25d483168ee222_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5929c26062ba38558123eea0f93e29526671d03add98923e85d3a5d3429b744a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5929c26062ba38558123eea0f93e29526671d03add98923e85d3a5d3429b744a->enter($__internal_5929c26062ba38558123eea0f93e29526671d03add98923e85d3a5d3429b744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fe5fdc3c8adc0b3d43afc0ee125a0d974acf7230674b87c2b5b44bb1a6d3132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe5fdc3c8adc0b3d43afc0ee125a0d974acf7230674b87c2b5b44bb1a6d3132->enter($__internal_6fe5fdc3c8adc0b3d43afc0ee125a0d974acf7230674b87c2b5b44bb1a6d3132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6fe5fdc3c8adc0b3d43afc0ee125a0d974acf7230674b87c2b5b44bb1a6d3132->leave($__internal_6fe5fdc3c8adc0b3d43afc0ee125a0d974acf7230674b87c2b5b44bb1a6d3132_prof);

        
        $__internal_5929c26062ba38558123eea0f93e29526671d03add98923e85d3a5d3429b744a->leave($__internal_5929c26062ba38558123eea0f93e29526671d03add98923e85d3a5d3429b744a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9a4f729521437bebd5697a9dd755fab14e18bcd0019f42338fdab901a8db79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a4f729521437bebd5697a9dd755fab14e18bcd0019f42338fdab901a8db79f->enter($__internal_c9a4f729521437bebd5697a9dd755fab14e18bcd0019f42338fdab901a8db79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73958fb62cb826a0e3153c4decf44b8f97fc1f532737ea9eca293ee54f1c3135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73958fb62cb826a0e3153c4decf44b8f97fc1f532737ea9eca293ee54f1c3135->enter($__internal_73958fb62cb826a0e3153c4decf44b8f97fc1f532737ea9eca293ee54f1c3135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_73958fb62cb826a0e3153c4decf44b8f97fc1f532737ea9eca293ee54f1c3135->leave($__internal_73958fb62cb826a0e3153c4decf44b8f97fc1f532737ea9eca293ee54f1c3135_prof);

        
        $__internal_c9a4f729521437bebd5697a9dd755fab14e18bcd0019f42338fdab901a8db79f->leave($__internal_c9a4f729521437bebd5697a9dd755fab14e18bcd0019f42338fdab901a8db79f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
