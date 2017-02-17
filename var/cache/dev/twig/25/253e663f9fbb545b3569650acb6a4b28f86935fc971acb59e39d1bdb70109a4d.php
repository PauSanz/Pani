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
        $__internal_a46f962419d2de1a3fff7f04bcf144c2c2527c9fc022018711b2bdda1707ca90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46f962419d2de1a3fff7f04bcf144c2c2527c9fc022018711b2bdda1707ca90->enter($__internal_a46f962419d2de1a3fff7f04bcf144c2c2527c9fc022018711b2bdda1707ca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_67dbe1c2aff3dd68a4109566f7dccb3e4711d99180864d22df96cfbec26b5847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dbe1c2aff3dd68a4109566f7dccb3e4711d99180864d22df96cfbec26b5847->enter($__internal_67dbe1c2aff3dd68a4109566f7dccb3e4711d99180864d22df96cfbec26b5847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46f962419d2de1a3fff7f04bcf144c2c2527c9fc022018711b2bdda1707ca90->leave($__internal_a46f962419d2de1a3fff7f04bcf144c2c2527c9fc022018711b2bdda1707ca90_prof);

        
        $__internal_67dbe1c2aff3dd68a4109566f7dccb3e4711d99180864d22df96cfbec26b5847->leave($__internal_67dbe1c2aff3dd68a4109566f7dccb3e4711d99180864d22df96cfbec26b5847_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21f068df1f4d32620bae9a6e50330d06cecd2bff50a8f4da529ae0bb73019e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f068df1f4d32620bae9a6e50330d06cecd2bff50a8f4da529ae0bb73019e09->enter($__internal_21f068df1f4d32620bae9a6e50330d06cecd2bff50a8f4da529ae0bb73019e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e45e8cb095485ab4685532c7ad85b9c01cf1c5b6430d2bd164c4914061088aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45e8cb095485ab4685532c7ad85b9c01cf1c5b6430d2bd164c4914061088aca->enter($__internal_e45e8cb095485ab4685532c7ad85b9c01cf1c5b6430d2bd164c4914061088aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e45e8cb095485ab4685532c7ad85b9c01cf1c5b6430d2bd164c4914061088aca->leave($__internal_e45e8cb095485ab4685532c7ad85b9c01cf1c5b6430d2bd164c4914061088aca_prof);

        
        $__internal_21f068df1f4d32620bae9a6e50330d06cecd2bff50a8f4da529ae0bb73019e09->leave($__internal_21f068df1f4d32620bae9a6e50330d06cecd2bff50a8f4da529ae0bb73019e09_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15daca0aa30e97476f369263c84a983783ce2e49a44a63f8b190c0a055ad9fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15daca0aa30e97476f369263c84a983783ce2e49a44a63f8b190c0a055ad9fed->enter($__internal_15daca0aa30e97476f369263c84a983783ce2e49a44a63f8b190c0a055ad9fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88c645dacbc65296dd17a034e98d943881abe4ab699e539859afe0d77fc13b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c645dacbc65296dd17a034e98d943881abe4ab699e539859afe0d77fc13b41->enter($__internal_88c645dacbc65296dd17a034e98d943881abe4ab699e539859afe0d77fc13b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88c645dacbc65296dd17a034e98d943881abe4ab699e539859afe0d77fc13b41->leave($__internal_88c645dacbc65296dd17a034e98d943881abe4ab699e539859afe0d77fc13b41_prof);

        
        $__internal_15daca0aa30e97476f369263c84a983783ce2e49a44a63f8b190c0a055ad9fed->leave($__internal_15daca0aa30e97476f369263c84a983783ce2e49a44a63f8b190c0a055ad9fed_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf935524c7789dbf255fddd1c39492cceff8d5ca582b782504f0f604ae68b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf935524c7789dbf255fddd1c39492cceff8d5ca582b782504f0f604ae68b26->enter($__internal_caf935524c7789dbf255fddd1c39492cceff8d5ca582b782504f0f604ae68b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41765b210fa675a980951a750b8ec44621e268d025b045b1f951149e88abaf1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41765b210fa675a980951a750b8ec44621e268d025b045b1f951149e88abaf1b->enter($__internal_41765b210fa675a980951a750b8ec44621e268d025b045b1f951149e88abaf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_41765b210fa675a980951a750b8ec44621e268d025b045b1f951149e88abaf1b->leave($__internal_41765b210fa675a980951a750b8ec44621e268d025b045b1f951149e88abaf1b_prof);

        
        $__internal_caf935524c7789dbf255fddd1c39492cceff8d5ca582b782504f0f604ae68b26->leave($__internal_caf935524c7789dbf255fddd1c39492cceff8d5ca582b782504f0f604ae68b26_prof);

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
