<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
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
        $__internal_8105ffec526f49e3acf92e1dedbeb49b3934a341c53a933f20f343d3fc31fc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8105ffec526f49e3acf92e1dedbeb49b3934a341c53a933f20f343d3fc31fc97->enter($__internal_8105ffec526f49e3acf92e1dedbeb49b3934a341c53a933f20f343d3fc31fc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d90f454a1bc537628e7b4d408633ae15c32d2e8e53b0f07e19c7d8b425e66100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90f454a1bc537628e7b4d408633ae15c32d2e8e53b0f07e19c7d8b425e66100->enter($__internal_d90f454a1bc537628e7b4d408633ae15c32d2e8e53b0f07e19c7d8b425e66100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8105ffec526f49e3acf92e1dedbeb49b3934a341c53a933f20f343d3fc31fc97->leave($__internal_8105ffec526f49e3acf92e1dedbeb49b3934a341c53a933f20f343d3fc31fc97_prof);

        
        $__internal_d90f454a1bc537628e7b4d408633ae15c32d2e8e53b0f07e19c7d8b425e66100->leave($__internal_d90f454a1bc537628e7b4d408633ae15c32d2e8e53b0f07e19c7d8b425e66100_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c13edae7517e344302facf6609ce0ffa2f43902b987d88ee9f29e84e9f1f38a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13edae7517e344302facf6609ce0ffa2f43902b987d88ee9f29e84e9f1f38a6->enter($__internal_c13edae7517e344302facf6609ce0ffa2f43902b987d88ee9f29e84e9f1f38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99c156fe72276929917a77c89c32e96ec6511e6358907472bdbf94a6801601ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c156fe72276929917a77c89c32e96ec6511e6358907472bdbf94a6801601ff->enter($__internal_99c156fe72276929917a77c89c32e96ec6511e6358907472bdbf94a6801601ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_99c156fe72276929917a77c89c32e96ec6511e6358907472bdbf94a6801601ff->leave($__internal_99c156fe72276929917a77c89c32e96ec6511e6358907472bdbf94a6801601ff_prof);

        
        $__internal_c13edae7517e344302facf6609ce0ffa2f43902b987d88ee9f29e84e9f1f38a6->leave($__internal_c13edae7517e344302facf6609ce0ffa2f43902b987d88ee9f29e84e9f1f38a6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44bf90ae6da03cff2046ed735dd0174d0cd0aa7f3da1f9de63a7bb6dd12523c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bf90ae6da03cff2046ed735dd0174d0cd0aa7f3da1f9de63a7bb6dd12523c3->enter($__internal_44bf90ae6da03cff2046ed735dd0174d0cd0aa7f3da1f9de63a7bb6dd12523c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5fb61cbc84319624237a2aa47a1c5019c2c5ee35040369d377168c90a96a5b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb61cbc84319624237a2aa47a1c5019c2c5ee35040369d377168c90a96a5b03->enter($__internal_5fb61cbc84319624237a2aa47a1c5019c2c5ee35040369d377168c90a96a5b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5fb61cbc84319624237a2aa47a1c5019c2c5ee35040369d377168c90a96a5b03->leave($__internal_5fb61cbc84319624237a2aa47a1c5019c2c5ee35040369d377168c90a96a5b03_prof);

        
        $__internal_44bf90ae6da03cff2046ed735dd0174d0cd0aa7f3da1f9de63a7bb6dd12523c3->leave($__internal_44bf90ae6da03cff2046ed735dd0174d0cd0aa7f3da1f9de63a7bb6dd12523c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_480c2957b48b089c3d3ae5972faec415833d1bd0bfad24be2be041ce95b6cf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480c2957b48b089c3d3ae5972faec415833d1bd0bfad24be2be041ce95b6cf98->enter($__internal_480c2957b48b089c3d3ae5972faec415833d1bd0bfad24be2be041ce95b6cf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ed8547ec8823522a19f0b57c9818fd6c6f99d88dbac7ba2fb314d7c6e903049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed8547ec8823522a19f0b57c9818fd6c6f99d88dbac7ba2fb314d7c6e903049->enter($__internal_3ed8547ec8823522a19f0b57c9818fd6c6f99d88dbac7ba2fb314d7c6e903049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3ed8547ec8823522a19f0b57c9818fd6c6f99d88dbac7ba2fb314d7c6e903049->leave($__internal_3ed8547ec8823522a19f0b57c9818fd6c6f99d88dbac7ba2fb314d7c6e903049_prof);

        
        $__internal_480c2957b48b089c3d3ae5972faec415833d1bd0bfad24be2be041ce95b6cf98->leave($__internal_480c2957b48b089c3d3ae5972faec415833d1bd0bfad24be2be041ce95b6cf98_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
