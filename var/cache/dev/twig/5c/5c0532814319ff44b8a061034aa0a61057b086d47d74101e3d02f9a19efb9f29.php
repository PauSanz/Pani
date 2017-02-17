<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_057478bdcf90d85b8ea886c8d9f2b01914788a473d36bee6b30bb02cdcf387ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d68de931a31408aed0914f3a0fbda587b0a6eec038ea80d852c3ca1d3a3a925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d68de931a31408aed0914f3a0fbda587b0a6eec038ea80d852c3ca1d3a3a925->enter($__internal_2d68de931a31408aed0914f3a0fbda587b0a6eec038ea80d852c3ca1d3a3a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c0ce171873574d4d7dbd7709dead310bad0ff72e83b31a05be496f87e2677eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ce171873574d4d7dbd7709dead310bad0ff72e83b31a05be496f87e2677eb2->enter($__internal_c0ce171873574d4d7dbd7709dead310bad0ff72e83b31a05be496f87e2677eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d68de931a31408aed0914f3a0fbda587b0a6eec038ea80d852c3ca1d3a3a925->leave($__internal_2d68de931a31408aed0914f3a0fbda587b0a6eec038ea80d852c3ca1d3a3a925_prof);

        
        $__internal_c0ce171873574d4d7dbd7709dead310bad0ff72e83b31a05be496f87e2677eb2->leave($__internal_c0ce171873574d4d7dbd7709dead310bad0ff72e83b31a05be496f87e2677eb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b664b552739d95ca017dba412efb7cc69736e251091657d78701bb7361c80f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b664b552739d95ca017dba412efb7cc69736e251091657d78701bb7361c80f6f->enter($__internal_b664b552739d95ca017dba412efb7cc69736e251091657d78701bb7361c80f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f43b7c18bf029e6f9d7f67b2811cc2a73779099cad9344530811fab1fcc8b3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43b7c18bf029e6f9d7f67b2811cc2a73779099cad9344530811fab1fcc8b3b5->enter($__internal_f43b7c18bf029e6f9d7f67b2811cc2a73779099cad9344530811fab1fcc8b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f43b7c18bf029e6f9d7f67b2811cc2a73779099cad9344530811fab1fcc8b3b5->leave($__internal_f43b7c18bf029e6f9d7f67b2811cc2a73779099cad9344530811fab1fcc8b3b5_prof);

        
        $__internal_b664b552739d95ca017dba412efb7cc69736e251091657d78701bb7361c80f6f->leave($__internal_b664b552739d95ca017dba412efb7cc69736e251091657d78701bb7361c80f6f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_94031ab0c31152c81024e9cd168f30c89760196619d7d372c2d35eb395874f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94031ab0c31152c81024e9cd168f30c89760196619d7d372c2d35eb395874f8f->enter($__internal_94031ab0c31152c81024e9cd168f30c89760196619d7d372c2d35eb395874f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e08131a4c8396287dcfd2d0e55e732609e49c0455dafd23bdeddc314d35c340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e08131a4c8396287dcfd2d0e55e732609e49c0455dafd23bdeddc314d35c340->enter($__internal_5e08131a4c8396287dcfd2d0e55e732609e49c0455dafd23bdeddc314d35c340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5e08131a4c8396287dcfd2d0e55e732609e49c0455dafd23bdeddc314d35c340->leave($__internal_5e08131a4c8396287dcfd2d0e55e732609e49c0455dafd23bdeddc314d35c340_prof);

        
        $__internal_94031ab0c31152c81024e9cd168f30c89760196619d7d372c2d35eb395874f8f->leave($__internal_94031ab0c31152c81024e9cd168f30c89760196619d7d372c2d35eb395874f8f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
