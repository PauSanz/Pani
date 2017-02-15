<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_79c0471e5c4b10970234bfc093c58b72468c30af266c5539b1df79d5116b353a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c0471e5c4b10970234bfc093c58b72468c30af266c5539b1df79d5116b353a->enter($__internal_79c0471e5c4b10970234bfc093c58b72468c30af266c5539b1df79d5116b353a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_446bb9e9af835d02c7deb9ed1c766238cd4ce876826ee1c059918d1120f136da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446bb9e9af835d02c7deb9ed1c766238cd4ce876826ee1c059918d1120f136da->enter($__internal_446bb9e9af835d02c7deb9ed1c766238cd4ce876826ee1c059918d1120f136da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79c0471e5c4b10970234bfc093c58b72468c30af266c5539b1df79d5116b353a->leave($__internal_79c0471e5c4b10970234bfc093c58b72468c30af266c5539b1df79d5116b353a_prof);

        
        $__internal_446bb9e9af835d02c7deb9ed1c766238cd4ce876826ee1c059918d1120f136da->leave($__internal_446bb9e9af835d02c7deb9ed1c766238cd4ce876826ee1c059918d1120f136da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7e07c897ae4047726f6df3ab8838626b6cd8e1a48222ca1926b5c7a8a5961b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e07c897ae4047726f6df3ab8838626b6cd8e1a48222ca1926b5c7a8a5961b8->enter($__internal_b7e07c897ae4047726f6df3ab8838626b6cd8e1a48222ca1926b5c7a8a5961b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd1885ea54bb3c9670b21f81629e17da1dd866389dca97a7340a0163cdd0b7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1885ea54bb3c9670b21f81629e17da1dd866389dca97a7340a0163cdd0b7b6->enter($__internal_dd1885ea54bb3c9670b21f81629e17da1dd866389dca97a7340a0163cdd0b7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dd1885ea54bb3c9670b21f81629e17da1dd866389dca97a7340a0163cdd0b7b6->leave($__internal_dd1885ea54bb3c9670b21f81629e17da1dd866389dca97a7340a0163cdd0b7b6_prof);

        
        $__internal_b7e07c897ae4047726f6df3ab8838626b6cd8e1a48222ca1926b5c7a8a5961b8->leave($__internal_b7e07c897ae4047726f6df3ab8838626b6cd8e1a48222ca1926b5c7a8a5961b8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_78a5b3d98fe52ec3b7c284a878d903ee45d1fcf58051377858a53bf67103d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a5b3d98fe52ec3b7c284a878d903ee45d1fcf58051377858a53bf67103d816->enter($__internal_78a5b3d98fe52ec3b7c284a878d903ee45d1fcf58051377858a53bf67103d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f24c3dcffb4bca26744a0b35c872c486681654b1eebed0ea8e7728fc351d5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f24c3dcffb4bca26744a0b35c872c486681654b1eebed0ea8e7728fc351d5fa->enter($__internal_4f24c3dcffb4bca26744a0b35c872c486681654b1eebed0ea8e7728fc351d5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f24c3dcffb4bca26744a0b35c872c486681654b1eebed0ea8e7728fc351d5fa->leave($__internal_4f24c3dcffb4bca26744a0b35c872c486681654b1eebed0ea8e7728fc351d5fa_prof);

        
        $__internal_78a5b3d98fe52ec3b7c284a878d903ee45d1fcf58051377858a53bf67103d816->leave($__internal_78a5b3d98fe52ec3b7c284a878d903ee45d1fcf58051377858a53bf67103d816_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_96400848903c8851d6c1c1f6e297820aeb03cc0720bec4cbf126503e1915d13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96400848903c8851d6c1c1f6e297820aeb03cc0720bec4cbf126503e1915d13d->enter($__internal_96400848903c8851d6c1c1f6e297820aeb03cc0720bec4cbf126503e1915d13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0e1721f0b2c61f8b678a96ac566ce9cfd00a987dc020444170160b733502e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e1721f0b2c61f8b678a96ac566ce9cfd00a987dc020444170160b733502e81->enter($__internal_f0e1721f0b2c61f8b678a96ac566ce9cfd00a987dc020444170160b733502e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f0e1721f0b2c61f8b678a96ac566ce9cfd00a987dc020444170160b733502e81->leave($__internal_f0e1721f0b2c61f8b678a96ac566ce9cfd00a987dc020444170160b733502e81_prof);

        
        $__internal_96400848903c8851d6c1c1f6e297820aeb03cc0720bec4cbf126503e1915d13d->leave($__internal_96400848903c8851d6c1c1f6e297820aeb03cc0720bec4cbf126503e1915d13d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
