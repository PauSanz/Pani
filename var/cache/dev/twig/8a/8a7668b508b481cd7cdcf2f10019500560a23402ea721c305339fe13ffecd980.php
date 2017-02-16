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
        $__internal_0e4ec4310316c030e99b41086e2993823a1409d4ca365b7217c3b9ce0c988806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4ec4310316c030e99b41086e2993823a1409d4ca365b7217c3b9ce0c988806->enter($__internal_0e4ec4310316c030e99b41086e2993823a1409d4ca365b7217c3b9ce0c988806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c32481e7ff2176804a4ee7f0a4980ff84f85c807bbd1a797574657fc7fea50fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32481e7ff2176804a4ee7f0a4980ff84f85c807bbd1a797574657fc7fea50fa->enter($__internal_c32481e7ff2176804a4ee7f0a4980ff84f85c807bbd1a797574657fc7fea50fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4ec4310316c030e99b41086e2993823a1409d4ca365b7217c3b9ce0c988806->leave($__internal_0e4ec4310316c030e99b41086e2993823a1409d4ca365b7217c3b9ce0c988806_prof);

        
        $__internal_c32481e7ff2176804a4ee7f0a4980ff84f85c807bbd1a797574657fc7fea50fa->leave($__internal_c32481e7ff2176804a4ee7f0a4980ff84f85c807bbd1a797574657fc7fea50fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9756a69b32538169e07773339692d87fce9232633c6cc845588c6972c7726f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9756a69b32538169e07773339692d87fce9232633c6cc845588c6972c7726f6e->enter($__internal_9756a69b32538169e07773339692d87fce9232633c6cc845588c6972c7726f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1f58b4b307cc951e585b07a66b6e2536f45f4584f9194bcd3d359f195a4f73dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58b4b307cc951e585b07a66b6e2536f45f4584f9194bcd3d359f195a4f73dc->enter($__internal_1f58b4b307cc951e585b07a66b6e2536f45f4584f9194bcd3d359f195a4f73dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1f58b4b307cc951e585b07a66b6e2536f45f4584f9194bcd3d359f195a4f73dc->leave($__internal_1f58b4b307cc951e585b07a66b6e2536f45f4584f9194bcd3d359f195a4f73dc_prof);

        
        $__internal_9756a69b32538169e07773339692d87fce9232633c6cc845588c6972c7726f6e->leave($__internal_9756a69b32538169e07773339692d87fce9232633c6cc845588c6972c7726f6e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a760983eace1f817fe60e94be408f3b0a9cd685123acb66c5191e21dbd38728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a760983eace1f817fe60e94be408f3b0a9cd685123acb66c5191e21dbd38728->enter($__internal_2a760983eace1f817fe60e94be408f3b0a9cd685123acb66c5191e21dbd38728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5f42f179dcce7bf9fdf6da4512a38d92df55917d6ba2c4ffe510d93bbd1d19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f42f179dcce7bf9fdf6da4512a38d92df55917d6ba2c4ffe510d93bbd1d19f->enter($__internal_a5f42f179dcce7bf9fdf6da4512a38d92df55917d6ba2c4ffe510d93bbd1d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a5f42f179dcce7bf9fdf6da4512a38d92df55917d6ba2c4ffe510d93bbd1d19f->leave($__internal_a5f42f179dcce7bf9fdf6da4512a38d92df55917d6ba2c4ffe510d93bbd1d19f_prof);

        
        $__internal_2a760983eace1f817fe60e94be408f3b0a9cd685123acb66c5191e21dbd38728->leave($__internal_2a760983eace1f817fe60e94be408f3b0a9cd685123acb66c5191e21dbd38728_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_528f4549dde76c0f7c1c1a47b057277e87418c94cdc9ba21f0d629c0fb170c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528f4549dde76c0f7c1c1a47b057277e87418c94cdc9ba21f0d629c0fb170c4c->enter($__internal_528f4549dde76c0f7c1c1a47b057277e87418c94cdc9ba21f0d629c0fb170c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d733e07d9d8c625eb302a0be100c2142c4a3f26bc402a9c3288a5bd95e0d4a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d733e07d9d8c625eb302a0be100c2142c4a3f26bc402a9c3288a5bd95e0d4a36->enter($__internal_d733e07d9d8c625eb302a0be100c2142c4a3f26bc402a9c3288a5bd95e0d4a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d733e07d9d8c625eb302a0be100c2142c4a3f26bc402a9c3288a5bd95e0d4a36->leave($__internal_d733e07d9d8c625eb302a0be100c2142c4a3f26bc402a9c3288a5bd95e0d4a36_prof);

        
        $__internal_528f4549dde76c0f7c1c1a47b057277e87418c94cdc9ba21f0d629c0fb170c4c->leave($__internal_528f4549dde76c0f7c1c1a47b057277e87418c94cdc9ba21f0d629c0fb170c4c_prof);

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
