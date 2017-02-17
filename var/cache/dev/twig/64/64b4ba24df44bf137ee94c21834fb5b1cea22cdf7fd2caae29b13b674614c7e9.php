<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbaf76eca2085d1117095d2b0d91c777308f0d050dadfe8e7a444dd9303f037f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaf76eca2085d1117095d2b0d91c777308f0d050dadfe8e7a444dd9303f037f->enter($__internal_fbaf76eca2085d1117095d2b0d91c777308f0d050dadfe8e7a444dd9303f037f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ab511ae3eed9246d92fb7870d4973823faa8939a20564f8aafa6fd2f572cae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab511ae3eed9246d92fb7870d4973823faa8939a20564f8aafa6fd2f572cae7->enter($__internal_3ab511ae3eed9246d92fb7870d4973823faa8939a20564f8aafa6fd2f572cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbaf76eca2085d1117095d2b0d91c777308f0d050dadfe8e7a444dd9303f037f->leave($__internal_fbaf76eca2085d1117095d2b0d91c777308f0d050dadfe8e7a444dd9303f037f_prof);

        
        $__internal_3ab511ae3eed9246d92fb7870d4973823faa8939a20564f8aafa6fd2f572cae7->leave($__internal_3ab511ae3eed9246d92fb7870d4973823faa8939a20564f8aafa6fd2f572cae7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60718b1ecdb84bed378f15515a2a8fee357a538ae1bc310ea8fcc49d69e7b24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60718b1ecdb84bed378f15515a2a8fee357a538ae1bc310ea8fcc49d69e7b24f->enter($__internal_60718b1ecdb84bed378f15515a2a8fee357a538ae1bc310ea8fcc49d69e7b24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8fa30a7706941916ebbdfd30260c7d9fb3848d199d6bd7ba39749d34ba8d5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fa30a7706941916ebbdfd30260c7d9fb3848d199d6bd7ba39749d34ba8d5e0->enter($__internal_b8fa30a7706941916ebbdfd30260c7d9fb3848d199d6bd7ba39749d34ba8d5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b8fa30a7706941916ebbdfd30260c7d9fb3848d199d6bd7ba39749d34ba8d5e0->leave($__internal_b8fa30a7706941916ebbdfd30260c7d9fb3848d199d6bd7ba39749d34ba8d5e0_prof);

        
        $__internal_60718b1ecdb84bed378f15515a2a8fee357a538ae1bc310ea8fcc49d69e7b24f->leave($__internal_60718b1ecdb84bed378f15515a2a8fee357a538ae1bc310ea8fcc49d69e7b24f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9ce2870bf79c2daac4ba281b737245d102dbf3d7606a4a2a4736a0718e03afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ce2870bf79c2daac4ba281b737245d102dbf3d7606a4a2a4736a0718e03afb->enter($__internal_a9ce2870bf79c2daac4ba281b737245d102dbf3d7606a4a2a4736a0718e03afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0a3b3f8166f4a781ef473b729a2156a1f9368d065e70822f8dab90ffb514c248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3b3f8166f4a781ef473b729a2156a1f9368d065e70822f8dab90ffb514c248->enter($__internal_0a3b3f8166f4a781ef473b729a2156a1f9368d065e70822f8dab90ffb514c248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0a3b3f8166f4a781ef473b729a2156a1f9368d065e70822f8dab90ffb514c248->leave($__internal_0a3b3f8166f4a781ef473b729a2156a1f9368d065e70822f8dab90ffb514c248_prof);

        
        $__internal_a9ce2870bf79c2daac4ba281b737245d102dbf3d7606a4a2a4736a0718e03afb->leave($__internal_a9ce2870bf79c2daac4ba281b737245d102dbf3d7606a4a2a4736a0718e03afb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93085e3b0bf3867a9ec6ebdf6e481652ac5f773cd027f4c57a6700acef912248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93085e3b0bf3867a9ec6ebdf6e481652ac5f773cd027f4c57a6700acef912248->enter($__internal_93085e3b0bf3867a9ec6ebdf6e481652ac5f773cd027f4c57a6700acef912248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce19c08ab43ce3052e5a03de3e6f58b3d22f91965949e03d26aa86cdf63b248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce19c08ab43ce3052e5a03de3e6f58b3d22f91965949e03d26aa86cdf63b248b->enter($__internal_ce19c08ab43ce3052e5a03de3e6f58b3d22f91965949e03d26aa86cdf63b248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ce19c08ab43ce3052e5a03de3e6f58b3d22f91965949e03d26aa86cdf63b248b->leave($__internal_ce19c08ab43ce3052e5a03de3e6f58b3d22f91965949e03d26aa86cdf63b248b_prof);

        
        $__internal_93085e3b0bf3867a9ec6ebdf6e481652ac5f773cd027f4c57a6700acef912248->leave($__internal_93085e3b0bf3867a9ec6ebdf6e481652ac5f773cd027f4c57a6700acef912248_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
