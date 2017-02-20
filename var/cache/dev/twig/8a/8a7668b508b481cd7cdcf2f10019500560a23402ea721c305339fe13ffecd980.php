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
        $__internal_64bc47c8b03d727d2ae8ce33d1bbec863030e40deb4dc8f0046b04803c3504d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bc47c8b03d727d2ae8ce33d1bbec863030e40deb4dc8f0046b04803c3504d7->enter($__internal_64bc47c8b03d727d2ae8ce33d1bbec863030e40deb4dc8f0046b04803c3504d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c0634211723da77b868492710ebf80e139f96a2f69c37f3c4b17b3245b2f2d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0634211723da77b868492710ebf80e139f96a2f69c37f3c4b17b3245b2f2d6b->enter($__internal_c0634211723da77b868492710ebf80e139f96a2f69c37f3c4b17b3245b2f2d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64bc47c8b03d727d2ae8ce33d1bbec863030e40deb4dc8f0046b04803c3504d7->leave($__internal_64bc47c8b03d727d2ae8ce33d1bbec863030e40deb4dc8f0046b04803c3504d7_prof);

        
        $__internal_c0634211723da77b868492710ebf80e139f96a2f69c37f3c4b17b3245b2f2d6b->leave($__internal_c0634211723da77b868492710ebf80e139f96a2f69c37f3c4b17b3245b2f2d6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15035b4f75ca2c2f2970e7a9a8bf7f2e0f6aee678e129fb99a2c4cc83f3f7a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15035b4f75ca2c2f2970e7a9a8bf7f2e0f6aee678e129fb99a2c4cc83f3f7a7e->enter($__internal_15035b4f75ca2c2f2970e7a9a8bf7f2e0f6aee678e129fb99a2c4cc83f3f7a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_793865ad4d0c687417fc933e92fa57a42be6f75b0bfacba9553421bfd78bb851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793865ad4d0c687417fc933e92fa57a42be6f75b0bfacba9553421bfd78bb851->enter($__internal_793865ad4d0c687417fc933e92fa57a42be6f75b0bfacba9553421bfd78bb851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_793865ad4d0c687417fc933e92fa57a42be6f75b0bfacba9553421bfd78bb851->leave($__internal_793865ad4d0c687417fc933e92fa57a42be6f75b0bfacba9553421bfd78bb851_prof);

        
        $__internal_15035b4f75ca2c2f2970e7a9a8bf7f2e0f6aee678e129fb99a2c4cc83f3f7a7e->leave($__internal_15035b4f75ca2c2f2970e7a9a8bf7f2e0f6aee678e129fb99a2c4cc83f3f7a7e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_726ef45858b1ff66d421a6838d3e63f65e62d1a5228960201ee8a488f7c3d72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726ef45858b1ff66d421a6838d3e63f65e62d1a5228960201ee8a488f7c3d72a->enter($__internal_726ef45858b1ff66d421a6838d3e63f65e62d1a5228960201ee8a488f7c3d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1d7d5974470dd3c9155c9cefb5a7c54db00f4161cf5b2e3147be069113de5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d7d5974470dd3c9155c9cefb5a7c54db00f4161cf5b2e3147be069113de5d7->enter($__internal_c1d7d5974470dd3c9155c9cefb5a7c54db00f4161cf5b2e3147be069113de5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c1d7d5974470dd3c9155c9cefb5a7c54db00f4161cf5b2e3147be069113de5d7->leave($__internal_c1d7d5974470dd3c9155c9cefb5a7c54db00f4161cf5b2e3147be069113de5d7_prof);

        
        $__internal_726ef45858b1ff66d421a6838d3e63f65e62d1a5228960201ee8a488f7c3d72a->leave($__internal_726ef45858b1ff66d421a6838d3e63f65e62d1a5228960201ee8a488f7c3d72a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_230721b946d19a324b179aec246981f7f82a202e76af55017a8861b70cc0c4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230721b946d19a324b179aec246981f7f82a202e76af55017a8861b70cc0c4cd->enter($__internal_230721b946d19a324b179aec246981f7f82a202e76af55017a8861b70cc0c4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34c27c12d9b31cce63794e916d68ce98cc4250fa840d3bf0c658c39a8ef2e582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c27c12d9b31cce63794e916d68ce98cc4250fa840d3bf0c658c39a8ef2e582->enter($__internal_34c27c12d9b31cce63794e916d68ce98cc4250fa840d3bf0c658c39a8ef2e582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_34c27c12d9b31cce63794e916d68ce98cc4250fa840d3bf0c658c39a8ef2e582->leave($__internal_34c27c12d9b31cce63794e916d68ce98cc4250fa840d3bf0c658c39a8ef2e582_prof);

        
        $__internal_230721b946d19a324b179aec246981f7f82a202e76af55017a8861b70cc0c4cd->leave($__internal_230721b946d19a324b179aec246981f7f82a202e76af55017a8861b70cc0c4cd_prof);

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
