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
        $__internal_c27b9645927af448360500a082f7d1181207327dabd519462f9d9a10a95bbf62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27b9645927af448360500a082f7d1181207327dabd519462f9d9a10a95bbf62->enter($__internal_c27b9645927af448360500a082f7d1181207327dabd519462f9d9a10a95bbf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3a45bd878dd8ec08c911bd6f926236b7e0ec44de43eea54ce829aa9342a458ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a45bd878dd8ec08c911bd6f926236b7e0ec44de43eea54ce829aa9342a458ff->enter($__internal_3a45bd878dd8ec08c911bd6f926236b7e0ec44de43eea54ce829aa9342a458ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27b9645927af448360500a082f7d1181207327dabd519462f9d9a10a95bbf62->leave($__internal_c27b9645927af448360500a082f7d1181207327dabd519462f9d9a10a95bbf62_prof);

        
        $__internal_3a45bd878dd8ec08c911bd6f926236b7e0ec44de43eea54ce829aa9342a458ff->leave($__internal_3a45bd878dd8ec08c911bd6f926236b7e0ec44de43eea54ce829aa9342a458ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcc251efe466fb774c7af24cead9b7a1e78587c4ccdab97477a2e73f20185dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc251efe466fb774c7af24cead9b7a1e78587c4ccdab97477a2e73f20185dec->enter($__internal_fcc251efe466fb774c7af24cead9b7a1e78587c4ccdab97477a2e73f20185dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f5a8a34b3ee501af9a8f7f124668f41134f7cb032265a257b138b799a4a624b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a8a34b3ee501af9a8f7f124668f41134f7cb032265a257b138b799a4a624b5->enter($__internal_f5a8a34b3ee501af9a8f7f124668f41134f7cb032265a257b138b799a4a624b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5a8a34b3ee501af9a8f7f124668f41134f7cb032265a257b138b799a4a624b5->leave($__internal_f5a8a34b3ee501af9a8f7f124668f41134f7cb032265a257b138b799a4a624b5_prof);

        
        $__internal_fcc251efe466fb774c7af24cead9b7a1e78587c4ccdab97477a2e73f20185dec->leave($__internal_fcc251efe466fb774c7af24cead9b7a1e78587c4ccdab97477a2e73f20185dec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f804d63f8e825084fdc9ef22bc4ea11b8dd93b1a5853eaec7aec3b803a5e37b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f804d63f8e825084fdc9ef22bc4ea11b8dd93b1a5853eaec7aec3b803a5e37b2->enter($__internal_f804d63f8e825084fdc9ef22bc4ea11b8dd93b1a5853eaec7aec3b803a5e37b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c4ba8866e3b7b3eaccdc8111d00cc2c7462506a6ccdecf323b71148f55a6314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4ba8866e3b7b3eaccdc8111d00cc2c7462506a6ccdecf323b71148f55a6314->enter($__internal_6c4ba8866e3b7b3eaccdc8111d00cc2c7462506a6ccdecf323b71148f55a6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c4ba8866e3b7b3eaccdc8111d00cc2c7462506a6ccdecf323b71148f55a6314->leave($__internal_6c4ba8866e3b7b3eaccdc8111d00cc2c7462506a6ccdecf323b71148f55a6314_prof);

        
        $__internal_f804d63f8e825084fdc9ef22bc4ea11b8dd93b1a5853eaec7aec3b803a5e37b2->leave($__internal_f804d63f8e825084fdc9ef22bc4ea11b8dd93b1a5853eaec7aec3b803a5e37b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45d4f9ae18b63621344fbf0c88d99462ddd03990b91d553d05053bd1c87ee198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d4f9ae18b63621344fbf0c88d99462ddd03990b91d553d05053bd1c87ee198->enter($__internal_45d4f9ae18b63621344fbf0c88d99462ddd03990b91d553d05053bd1c87ee198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6670a17f86dc0c1ba1cf12cf2404a3d0273eebeac4fe6f2eb26a75ffdad8d38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6670a17f86dc0c1ba1cf12cf2404a3d0273eebeac4fe6f2eb26a75ffdad8d38f->enter($__internal_6670a17f86dc0c1ba1cf12cf2404a3d0273eebeac4fe6f2eb26a75ffdad8d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6670a17f86dc0c1ba1cf12cf2404a3d0273eebeac4fe6f2eb26a75ffdad8d38f->leave($__internal_6670a17f86dc0c1ba1cf12cf2404a3d0273eebeac4fe6f2eb26a75ffdad8d38f_prof);

        
        $__internal_45d4f9ae18b63621344fbf0c88d99462ddd03990b91d553d05053bd1c87ee198->leave($__internal_45d4f9ae18b63621344fbf0c88d99462ddd03990b91d553d05053bd1c87ee198_prof);

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
