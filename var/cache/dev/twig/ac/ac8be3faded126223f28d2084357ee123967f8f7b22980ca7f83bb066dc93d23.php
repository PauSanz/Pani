<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_988aefc2230e40786c80f666a8333c172e7cb07a7802c5eba2b6c329ef5ab121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988aefc2230e40786c80f666a8333c172e7cb07a7802c5eba2b6c329ef5ab121->enter($__internal_988aefc2230e40786c80f666a8333c172e7cb07a7802c5eba2b6c329ef5ab121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_118b7090be8262dc243c8e1bfce6dda8f0bc8dbdc80c1fea7e03f423b1676e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118b7090be8262dc243c8e1bfce6dda8f0bc8dbdc80c1fea7e03f423b1676e0b->enter($__internal_118b7090be8262dc243c8e1bfce6dda8f0bc8dbdc80c1fea7e03f423b1676e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_988aefc2230e40786c80f666a8333c172e7cb07a7802c5eba2b6c329ef5ab121->leave($__internal_988aefc2230e40786c80f666a8333c172e7cb07a7802c5eba2b6c329ef5ab121_prof);

        
        $__internal_118b7090be8262dc243c8e1bfce6dda8f0bc8dbdc80c1fea7e03f423b1676e0b->leave($__internal_118b7090be8262dc243c8e1bfce6dda8f0bc8dbdc80c1fea7e03f423b1676e0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62b4de9769ec33da03aff5e79e959234ed2a4f5095074e4636e1caaa91da5711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b4de9769ec33da03aff5e79e959234ed2a4f5095074e4636e1caaa91da5711->enter($__internal_62b4de9769ec33da03aff5e79e959234ed2a4f5095074e4636e1caaa91da5711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e83b343eb37e7999e2b576095f28a067c51a1b150b8b971e35b36c606750a832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83b343eb37e7999e2b576095f28a067c51a1b150b8b971e35b36c606750a832->enter($__internal_e83b343eb37e7999e2b576095f28a067c51a1b150b8b971e35b36c606750a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e83b343eb37e7999e2b576095f28a067c51a1b150b8b971e35b36c606750a832->leave($__internal_e83b343eb37e7999e2b576095f28a067c51a1b150b8b971e35b36c606750a832_prof);

        
        $__internal_62b4de9769ec33da03aff5e79e959234ed2a4f5095074e4636e1caaa91da5711->leave($__internal_62b4de9769ec33da03aff5e79e959234ed2a4f5095074e4636e1caaa91da5711_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6867229489d1362e9761b0e01ef9f022fa895cf42f7953b8b52f9d59cae729e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6867229489d1362e9761b0e01ef9f022fa895cf42f7953b8b52f9d59cae729e->enter($__internal_b6867229489d1362e9761b0e01ef9f022fa895cf42f7953b8b52f9d59cae729e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3fe8decc47054548c3cbd1ea5bc2c0a5bb0ecb695ad0ce646dc7270b946efa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe8decc47054548c3cbd1ea5bc2c0a5bb0ecb695ad0ce646dc7270b946efa25->enter($__internal_3fe8decc47054548c3cbd1ea5bc2c0a5bb0ecb695ad0ce646dc7270b946efa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3fe8decc47054548c3cbd1ea5bc2c0a5bb0ecb695ad0ce646dc7270b946efa25->leave($__internal_3fe8decc47054548c3cbd1ea5bc2c0a5bb0ecb695ad0ce646dc7270b946efa25_prof);

        
        $__internal_b6867229489d1362e9761b0e01ef9f022fa895cf42f7953b8b52f9d59cae729e->leave($__internal_b6867229489d1362e9761b0e01ef9f022fa895cf42f7953b8b52f9d59cae729e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ada99cc75a7f998933343716a19348a75d736a044458443cc30fffd277eadb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada99cc75a7f998933343716a19348a75d736a044458443cc30fffd277eadb54->enter($__internal_ada99cc75a7f998933343716a19348a75d736a044458443cc30fffd277eadb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c05dcd0ee8eaf7d0fa14c9747b0b761226078219a752647c532366b11646095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c05dcd0ee8eaf7d0fa14c9747b0b761226078219a752647c532366b11646095->enter($__internal_7c05dcd0ee8eaf7d0fa14c9747b0b761226078219a752647c532366b11646095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c05dcd0ee8eaf7d0fa14c9747b0b761226078219a752647c532366b11646095->leave($__internal_7c05dcd0ee8eaf7d0fa14c9747b0b761226078219a752647c532366b11646095_prof);

        
        $__internal_ada99cc75a7f998933343716a19348a75d736a044458443cc30fffd277eadb54->leave($__internal_ada99cc75a7f998933343716a19348a75d736a044458443cc30fffd277eadb54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
