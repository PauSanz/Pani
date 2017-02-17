<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54bede8d25740bf2748913733190288ffaff91cd97a63bd4aec2585517a65e0e extends Twig_Template
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
        $__internal_aa3346050e7819e4da037f0b3b73e4a716171d11262c763fea7fc7f9e027279a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3346050e7819e4da037f0b3b73e4a716171d11262c763fea7fc7f9e027279a->enter($__internal_aa3346050e7819e4da037f0b3b73e4a716171d11262c763fea7fc7f9e027279a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_70f5bd1054b86721e173444894e8882c2f0099a5bbdbc77ba0bd5e5309da8372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f5bd1054b86721e173444894e8882c2f0099a5bbdbc77ba0bd5e5309da8372->enter($__internal_70f5bd1054b86721e173444894e8882c2f0099a5bbdbc77ba0bd5e5309da8372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3346050e7819e4da037f0b3b73e4a716171d11262c763fea7fc7f9e027279a->leave($__internal_aa3346050e7819e4da037f0b3b73e4a716171d11262c763fea7fc7f9e027279a_prof);

        
        $__internal_70f5bd1054b86721e173444894e8882c2f0099a5bbdbc77ba0bd5e5309da8372->leave($__internal_70f5bd1054b86721e173444894e8882c2f0099a5bbdbc77ba0bd5e5309da8372_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_971d69c497e795b2749af75937cdb1800042b39d6e36c229f74413095137d1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971d69c497e795b2749af75937cdb1800042b39d6e36c229f74413095137d1d5->enter($__internal_971d69c497e795b2749af75937cdb1800042b39d6e36c229f74413095137d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d73d0eeab93776169476a61639aaa80b62523e69686843627bd47869ec11efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d73d0eeab93776169476a61639aaa80b62523e69686843627bd47869ec11efa->enter($__internal_8d73d0eeab93776169476a61639aaa80b62523e69686843627bd47869ec11efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d73d0eeab93776169476a61639aaa80b62523e69686843627bd47869ec11efa->leave($__internal_8d73d0eeab93776169476a61639aaa80b62523e69686843627bd47869ec11efa_prof);

        
        $__internal_971d69c497e795b2749af75937cdb1800042b39d6e36c229f74413095137d1d5->leave($__internal_971d69c497e795b2749af75937cdb1800042b39d6e36c229f74413095137d1d5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b42eb65371485b5a78b66f1c62eec017a24a449c53629685cca04f78ec2332ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42eb65371485b5a78b66f1c62eec017a24a449c53629685cca04f78ec2332ef->enter($__internal_b42eb65371485b5a78b66f1c62eec017a24a449c53629685cca04f78ec2332ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ee92426f7af826ffe758ab9b6590d0ce594b5939effc770353608c3f971f680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee92426f7af826ffe758ab9b6590d0ce594b5939effc770353608c3f971f680->enter($__internal_0ee92426f7af826ffe758ab9b6590d0ce594b5939effc770353608c3f971f680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ee92426f7af826ffe758ab9b6590d0ce594b5939effc770353608c3f971f680->leave($__internal_0ee92426f7af826ffe758ab9b6590d0ce594b5939effc770353608c3f971f680_prof);

        
        $__internal_b42eb65371485b5a78b66f1c62eec017a24a449c53629685cca04f78ec2332ef->leave($__internal_b42eb65371485b5a78b66f1c62eec017a24a449c53629685cca04f78ec2332ef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_576d81a88dc47a974ab6ce16c11a6ce9becbec755d7078982440a83446ec3159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576d81a88dc47a974ab6ce16c11a6ce9becbec755d7078982440a83446ec3159->enter($__internal_576d81a88dc47a974ab6ce16c11a6ce9becbec755d7078982440a83446ec3159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c20984a7d58fb4cd1c7991faec2717b4790f915473b7cca58ed0b69bf503f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c20984a7d58fb4cd1c7991faec2717b4790f915473b7cca58ed0b69bf503f64->enter($__internal_1c20984a7d58fb4cd1c7991faec2717b4790f915473b7cca58ed0b69bf503f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1c20984a7d58fb4cd1c7991faec2717b4790f915473b7cca58ed0b69bf503f64->leave($__internal_1c20984a7d58fb4cd1c7991faec2717b4790f915473b7cca58ed0b69bf503f64_prof);

        
        $__internal_576d81a88dc47a974ab6ce16c11a6ce9becbec755d7078982440a83446ec3159->leave($__internal_576d81a88dc47a974ab6ce16c11a6ce9becbec755d7078982440a83446ec3159_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
