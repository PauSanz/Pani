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
        $__internal_9a04f27e59885e76edbe3bf833f74229f7c332daa0f9a1c192065fb78e2f60d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a04f27e59885e76edbe3bf833f74229f7c332daa0f9a1c192065fb78e2f60d5->enter($__internal_9a04f27e59885e76edbe3bf833f74229f7c332daa0f9a1c192065fb78e2f60d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_35fd871caa637f2b05afbc024adb6889b72eec5cc0c10581dbe3dad92b656860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fd871caa637f2b05afbc024adb6889b72eec5cc0c10581dbe3dad92b656860->enter($__internal_35fd871caa637f2b05afbc024adb6889b72eec5cc0c10581dbe3dad92b656860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a04f27e59885e76edbe3bf833f74229f7c332daa0f9a1c192065fb78e2f60d5->leave($__internal_9a04f27e59885e76edbe3bf833f74229f7c332daa0f9a1c192065fb78e2f60d5_prof);

        
        $__internal_35fd871caa637f2b05afbc024adb6889b72eec5cc0c10581dbe3dad92b656860->leave($__internal_35fd871caa637f2b05afbc024adb6889b72eec5cc0c10581dbe3dad92b656860_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04e000a0a976d3d2364c5b2ec50a04faba65a19f1bf417d72681b0b6a89c8939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e000a0a976d3d2364c5b2ec50a04faba65a19f1bf417d72681b0b6a89c8939->enter($__internal_04e000a0a976d3d2364c5b2ec50a04faba65a19f1bf417d72681b0b6a89c8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f8879688f605a51e5ab8c1292764aa23217c8925e6533ddd2b7b71301b33009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8879688f605a51e5ab8c1292764aa23217c8925e6533ddd2b7b71301b33009->enter($__internal_5f8879688f605a51e5ab8c1292764aa23217c8925e6533ddd2b7b71301b33009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5f8879688f605a51e5ab8c1292764aa23217c8925e6533ddd2b7b71301b33009->leave($__internal_5f8879688f605a51e5ab8c1292764aa23217c8925e6533ddd2b7b71301b33009_prof);

        
        $__internal_04e000a0a976d3d2364c5b2ec50a04faba65a19f1bf417d72681b0b6a89c8939->leave($__internal_04e000a0a976d3d2364c5b2ec50a04faba65a19f1bf417d72681b0b6a89c8939_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce06ec1d492d29f7f87ed092f676c4408aacf1c670177eee9854c113b72a5d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce06ec1d492d29f7f87ed092f676c4408aacf1c670177eee9854c113b72a5d15->enter($__internal_ce06ec1d492d29f7f87ed092f676c4408aacf1c670177eee9854c113b72a5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_107719f5933bcf981a5ff483a904664a84828822fa24944d2227c24cd03c2639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107719f5933bcf981a5ff483a904664a84828822fa24944d2227c24cd03c2639->enter($__internal_107719f5933bcf981a5ff483a904664a84828822fa24944d2227c24cd03c2639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_107719f5933bcf981a5ff483a904664a84828822fa24944d2227c24cd03c2639->leave($__internal_107719f5933bcf981a5ff483a904664a84828822fa24944d2227c24cd03c2639_prof);

        
        $__internal_ce06ec1d492d29f7f87ed092f676c4408aacf1c670177eee9854c113b72a5d15->leave($__internal_ce06ec1d492d29f7f87ed092f676c4408aacf1c670177eee9854c113b72a5d15_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5284142dcc9fc7a17b313d8db7db943b1a839d2afaf8ea3f80217f14b56003f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5284142dcc9fc7a17b313d8db7db943b1a839d2afaf8ea3f80217f14b56003f9->enter($__internal_5284142dcc9fc7a17b313d8db7db943b1a839d2afaf8ea3f80217f14b56003f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b7036709e45a1aec93db9fec885de5407dd28be0df012b3f15792b2373b55bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7036709e45a1aec93db9fec885de5407dd28be0df012b3f15792b2373b55bb->enter($__internal_6b7036709e45a1aec93db9fec885de5407dd28be0df012b3f15792b2373b55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6b7036709e45a1aec93db9fec885de5407dd28be0df012b3f15792b2373b55bb->leave($__internal_6b7036709e45a1aec93db9fec885de5407dd28be0df012b3f15792b2373b55bb_prof);

        
        $__internal_5284142dcc9fc7a17b313d8db7db943b1a839d2afaf8ea3f80217f14b56003f9->leave($__internal_5284142dcc9fc7a17b313d8db7db943b1a839d2afaf8ea3f80217f14b56003f9_prof);

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
