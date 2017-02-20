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
        $__internal_8175279626571d536ced887f0c4f84eecaf026786d97284ad43408e82ae37d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8175279626571d536ced887f0c4f84eecaf026786d97284ad43408e82ae37d1c->enter($__internal_8175279626571d536ced887f0c4f84eecaf026786d97284ad43408e82ae37d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ee2ab9852d05fe88447d73c895d4360fc30a833279fa641b585d98f52b068165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2ab9852d05fe88447d73c895d4360fc30a833279fa641b585d98f52b068165->enter($__internal_ee2ab9852d05fe88447d73c895d4360fc30a833279fa641b585d98f52b068165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8175279626571d536ced887f0c4f84eecaf026786d97284ad43408e82ae37d1c->leave($__internal_8175279626571d536ced887f0c4f84eecaf026786d97284ad43408e82ae37d1c_prof);

        
        $__internal_ee2ab9852d05fe88447d73c895d4360fc30a833279fa641b585d98f52b068165->leave($__internal_ee2ab9852d05fe88447d73c895d4360fc30a833279fa641b585d98f52b068165_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2718a9d6e83c3d6013eb652b090762536b4234bc015fa495fa653b9549f7854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2718a9d6e83c3d6013eb652b090762536b4234bc015fa495fa653b9549f7854->enter($__internal_c2718a9d6e83c3d6013eb652b090762536b4234bc015fa495fa653b9549f7854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3d70e1d40cac6c1d689c79feb62c9a6e21663f262fe6987a826f32f69337c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d70e1d40cac6c1d689c79feb62c9a6e21663f262fe6987a826f32f69337c9b->enter($__internal_e3d70e1d40cac6c1d689c79feb62c9a6e21663f262fe6987a826f32f69337c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e3d70e1d40cac6c1d689c79feb62c9a6e21663f262fe6987a826f32f69337c9b->leave($__internal_e3d70e1d40cac6c1d689c79feb62c9a6e21663f262fe6987a826f32f69337c9b_prof);

        
        $__internal_c2718a9d6e83c3d6013eb652b090762536b4234bc015fa495fa653b9549f7854->leave($__internal_c2718a9d6e83c3d6013eb652b090762536b4234bc015fa495fa653b9549f7854_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf207823c8b077540dffaf15b3be191f1686e745abd08b642a0d932d30b69bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf207823c8b077540dffaf15b3be191f1686e745abd08b642a0d932d30b69bf2->enter($__internal_cf207823c8b077540dffaf15b3be191f1686e745abd08b642a0d932d30b69bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52f2ec9457a1d43a60f62b8c7851ec1bb0572e335a9378b63e666f3557924ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f2ec9457a1d43a60f62b8c7851ec1bb0572e335a9378b63e666f3557924ad7->enter($__internal_52f2ec9457a1d43a60f62b8c7851ec1bb0572e335a9378b63e666f3557924ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_52f2ec9457a1d43a60f62b8c7851ec1bb0572e335a9378b63e666f3557924ad7->leave($__internal_52f2ec9457a1d43a60f62b8c7851ec1bb0572e335a9378b63e666f3557924ad7_prof);

        
        $__internal_cf207823c8b077540dffaf15b3be191f1686e745abd08b642a0d932d30b69bf2->leave($__internal_cf207823c8b077540dffaf15b3be191f1686e745abd08b642a0d932d30b69bf2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9ec89a2d231299ca9e7998015ff83ab336b6267bb1d33bbab30c1910b8fe0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ec89a2d231299ca9e7998015ff83ab336b6267bb1d33bbab30c1910b8fe0df->enter($__internal_a9ec89a2d231299ca9e7998015ff83ab336b6267bb1d33bbab30c1910b8fe0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93b11f5839536ae76c5abc1e3ccf4fd472bcf614abae024a5fdda4c31f52d422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b11f5839536ae76c5abc1e3ccf4fd472bcf614abae024a5fdda4c31f52d422->enter($__internal_93b11f5839536ae76c5abc1e3ccf4fd472bcf614abae024a5fdda4c31f52d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_93b11f5839536ae76c5abc1e3ccf4fd472bcf614abae024a5fdda4c31f52d422->leave($__internal_93b11f5839536ae76c5abc1e3ccf4fd472bcf614abae024a5fdda4c31f52d422_prof);

        
        $__internal_a9ec89a2d231299ca9e7998015ff83ab336b6267bb1d33bbab30c1910b8fe0df->leave($__internal_a9ec89a2d231299ca9e7998015ff83ab336b6267bb1d33bbab30c1910b8fe0df_prof);

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
