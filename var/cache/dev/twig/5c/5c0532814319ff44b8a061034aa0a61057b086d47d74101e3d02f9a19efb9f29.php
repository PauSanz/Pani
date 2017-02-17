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
        $__internal_126c25a95a439910073dc9b6e203a097ed18c2ab397d4cfc98595925826f0a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126c25a95a439910073dc9b6e203a097ed18c2ab397d4cfc98595925826f0a3d->enter($__internal_126c25a95a439910073dc9b6e203a097ed18c2ab397d4cfc98595925826f0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_eae1696f2972ec07c8973c105759038280dc7f0214a3b99b49d7e2762fb3bf99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae1696f2972ec07c8973c105759038280dc7f0214a3b99b49d7e2762fb3bf99->enter($__internal_eae1696f2972ec07c8973c105759038280dc7f0214a3b99b49d7e2762fb3bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_126c25a95a439910073dc9b6e203a097ed18c2ab397d4cfc98595925826f0a3d->leave($__internal_126c25a95a439910073dc9b6e203a097ed18c2ab397d4cfc98595925826f0a3d_prof);

        
        $__internal_eae1696f2972ec07c8973c105759038280dc7f0214a3b99b49d7e2762fb3bf99->leave($__internal_eae1696f2972ec07c8973c105759038280dc7f0214a3b99b49d7e2762fb3bf99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23d1805ceca4106be44153be227d381fcdbb080fbcc2d4dabee8793bb8107ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d1805ceca4106be44153be227d381fcdbb080fbcc2d4dabee8793bb8107ba6->enter($__internal_23d1805ceca4106be44153be227d381fcdbb080fbcc2d4dabee8793bb8107ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c31b86092007abaf504ef2e806a3416431ad36370bc987567e5704a3cf8f1e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31b86092007abaf504ef2e806a3416431ad36370bc987567e5704a3cf8f1e08->enter($__internal_c31b86092007abaf504ef2e806a3416431ad36370bc987567e5704a3cf8f1e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c31b86092007abaf504ef2e806a3416431ad36370bc987567e5704a3cf8f1e08->leave($__internal_c31b86092007abaf504ef2e806a3416431ad36370bc987567e5704a3cf8f1e08_prof);

        
        $__internal_23d1805ceca4106be44153be227d381fcdbb080fbcc2d4dabee8793bb8107ba6->leave($__internal_23d1805ceca4106be44153be227d381fcdbb080fbcc2d4dabee8793bb8107ba6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_538547c6fb1b691fcf2b99e187833df19fe2153b9f8b94c7724ab4ee10750c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538547c6fb1b691fcf2b99e187833df19fe2153b9f8b94c7724ab4ee10750c76->enter($__internal_538547c6fb1b691fcf2b99e187833df19fe2153b9f8b94c7724ab4ee10750c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a02aa27aeca1d8a35186ea401acd37afb78ff08c51c28bbea9bd6fcbc87015a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02aa27aeca1d8a35186ea401acd37afb78ff08c51c28bbea9bd6fcbc87015a9->enter($__internal_a02aa27aeca1d8a35186ea401acd37afb78ff08c51c28bbea9bd6fcbc87015a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a02aa27aeca1d8a35186ea401acd37afb78ff08c51c28bbea9bd6fcbc87015a9->leave($__internal_a02aa27aeca1d8a35186ea401acd37afb78ff08c51c28bbea9bd6fcbc87015a9_prof);

        
        $__internal_538547c6fb1b691fcf2b99e187833df19fe2153b9f8b94c7724ab4ee10750c76->leave($__internal_538547c6fb1b691fcf2b99e187833df19fe2153b9f8b94c7724ab4ee10750c76_prof);

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
