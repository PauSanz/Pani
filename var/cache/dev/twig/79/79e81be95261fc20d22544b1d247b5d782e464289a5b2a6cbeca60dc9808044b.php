<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_8aadcec5ef468d31267be6f15924e622b061ecbce50e9d0eafed0a9680868b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aadcec5ef468d31267be6f15924e622b061ecbce50e9d0eafed0a9680868b26->enter($__internal_8aadcec5ef468d31267be6f15924e622b061ecbce50e9d0eafed0a9680868b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4bd0920a4ddf96fee6591b67f11056124030342ecff82f78f07877eacd509cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd0920a4ddf96fee6591b67f11056124030342ecff82f78f07877eacd509cde->enter($__internal_4bd0920a4ddf96fee6591b67f11056124030342ecff82f78f07877eacd509cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aadcec5ef468d31267be6f15924e622b061ecbce50e9d0eafed0a9680868b26->leave($__internal_8aadcec5ef468d31267be6f15924e622b061ecbce50e9d0eafed0a9680868b26_prof);

        
        $__internal_4bd0920a4ddf96fee6591b67f11056124030342ecff82f78f07877eacd509cde->leave($__internal_4bd0920a4ddf96fee6591b67f11056124030342ecff82f78f07877eacd509cde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_181d25d61effe59225c63176aa2ca7b9ec4476d7334d1cb8c8ac866679230b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181d25d61effe59225c63176aa2ca7b9ec4476d7334d1cb8c8ac866679230b79->enter($__internal_181d25d61effe59225c63176aa2ca7b9ec4476d7334d1cb8c8ac866679230b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50db00ee7b05685a39b60c8f17d3a56625afc62b0430c449fce07d8f7b747447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50db00ee7b05685a39b60c8f17d3a56625afc62b0430c449fce07d8f7b747447->enter($__internal_50db00ee7b05685a39b60c8f17d3a56625afc62b0430c449fce07d8f7b747447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_50db00ee7b05685a39b60c8f17d3a56625afc62b0430c449fce07d8f7b747447->leave($__internal_50db00ee7b05685a39b60c8f17d3a56625afc62b0430c449fce07d8f7b747447_prof);

        
        $__internal_181d25d61effe59225c63176aa2ca7b9ec4476d7334d1cb8c8ac866679230b79->leave($__internal_181d25d61effe59225c63176aa2ca7b9ec4476d7334d1cb8c8ac866679230b79_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d35a04d1bb25d23c887f08e4255ece1e72bef4a96a469722c92fc0abd80a6b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35a04d1bb25d23c887f08e4255ece1e72bef4a96a469722c92fc0abd80a6b91->enter($__internal_d35a04d1bb25d23c887f08e4255ece1e72bef4a96a469722c92fc0abd80a6b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48a7f4354af4e41239d1fb74584872890aca4b863160811fd6a1132f0fabbc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a7f4354af4e41239d1fb74584872890aca4b863160811fd6a1132f0fabbc10->enter($__internal_48a7f4354af4e41239d1fb74584872890aca4b863160811fd6a1132f0fabbc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48a7f4354af4e41239d1fb74584872890aca4b863160811fd6a1132f0fabbc10->leave($__internal_48a7f4354af4e41239d1fb74584872890aca4b863160811fd6a1132f0fabbc10_prof);

        
        $__internal_d35a04d1bb25d23c887f08e4255ece1e72bef4a96a469722c92fc0abd80a6b91->leave($__internal_d35a04d1bb25d23c887f08e4255ece1e72bef4a96a469722c92fc0abd80a6b91_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6951a4676c38b1343b6ed6fa13fd754f7334cb3810e76fd3f3ac4d7726a6286c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6951a4676c38b1343b6ed6fa13fd754f7334cb3810e76fd3f3ac4d7726a6286c->enter($__internal_6951a4676c38b1343b6ed6fa13fd754f7334cb3810e76fd3f3ac4d7726a6286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_622561b7f29ac3ba2c5f80c5f7c76eb2aad5c3799874afea8167a3f8f456de45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622561b7f29ac3ba2c5f80c5f7c76eb2aad5c3799874afea8167a3f8f456de45->enter($__internal_622561b7f29ac3ba2c5f80c5f7c76eb2aad5c3799874afea8167a3f8f456de45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_622561b7f29ac3ba2c5f80c5f7c76eb2aad5c3799874afea8167a3f8f456de45->leave($__internal_622561b7f29ac3ba2c5f80c5f7c76eb2aad5c3799874afea8167a3f8f456de45_prof);

        
        $__internal_6951a4676c38b1343b6ed6fa13fd754f7334cb3810e76fd3f3ac4d7726a6286c->leave($__internal_6951a4676c38b1343b6ed6fa13fd754f7334cb3810e76fd3f3ac4d7726a6286c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
