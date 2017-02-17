<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8d913fc55c5c65d9f355c8f9b32af7975a352a934ea9380e4808914e1cd82e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d913fc55c5c65d9f355c8f9b32af7975a352a934ea9380e4808914e1cd82e33->enter($__internal_8d913fc55c5c65d9f355c8f9b32af7975a352a934ea9380e4808914e1cd82e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6b4b210bdb1b06d1af5d0b33ba60f903cef9e4a23178b677adc4b8727804cab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4b210bdb1b06d1af5d0b33ba60f903cef9e4a23178b677adc4b8727804cab0->enter($__internal_6b4b210bdb1b06d1af5d0b33ba60f903cef9e4a23178b677adc4b8727804cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d913fc55c5c65d9f355c8f9b32af7975a352a934ea9380e4808914e1cd82e33->leave($__internal_8d913fc55c5c65d9f355c8f9b32af7975a352a934ea9380e4808914e1cd82e33_prof);

        
        $__internal_6b4b210bdb1b06d1af5d0b33ba60f903cef9e4a23178b677adc4b8727804cab0->leave($__internal_6b4b210bdb1b06d1af5d0b33ba60f903cef9e4a23178b677adc4b8727804cab0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_502fb419b9487bc80b1175b720ab18461c760075337fd1b56f3975bd5ea92d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502fb419b9487bc80b1175b720ab18461c760075337fd1b56f3975bd5ea92d19->enter($__internal_502fb419b9487bc80b1175b720ab18461c760075337fd1b56f3975bd5ea92d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ef2657ca572ae892e791948cb7ac775e1e51a8b2c00120838deac3a4c496539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef2657ca572ae892e791948cb7ac775e1e51a8b2c00120838deac3a4c496539->enter($__internal_0ef2657ca572ae892e791948cb7ac775e1e51a8b2c00120838deac3a4c496539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ef2657ca572ae892e791948cb7ac775e1e51a8b2c00120838deac3a4c496539->leave($__internal_0ef2657ca572ae892e791948cb7ac775e1e51a8b2c00120838deac3a4c496539_prof);

        
        $__internal_502fb419b9487bc80b1175b720ab18461c760075337fd1b56f3975bd5ea92d19->leave($__internal_502fb419b9487bc80b1175b720ab18461c760075337fd1b56f3975bd5ea92d19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f10380049b5b748c30384e0e88761f8cd99afbfe98e4c0f202fe0784a7cef6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10380049b5b748c30384e0e88761f8cd99afbfe98e4c0f202fe0784a7cef6b1->enter($__internal_f10380049b5b748c30384e0e88761f8cd99afbfe98e4c0f202fe0784a7cef6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51a402e6b0263750c459fff7a49402f870c9aa2a596ccb074bc4b446c7184e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a402e6b0263750c459fff7a49402f870c9aa2a596ccb074bc4b446c7184e04->enter($__internal_51a402e6b0263750c459fff7a49402f870c9aa2a596ccb074bc4b446c7184e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51a402e6b0263750c459fff7a49402f870c9aa2a596ccb074bc4b446c7184e04->leave($__internal_51a402e6b0263750c459fff7a49402f870c9aa2a596ccb074bc4b446c7184e04_prof);

        
        $__internal_f10380049b5b748c30384e0e88761f8cd99afbfe98e4c0f202fe0784a7cef6b1->leave($__internal_f10380049b5b748c30384e0e88761f8cd99afbfe98e4c0f202fe0784a7cef6b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_973458547c3728d0638a0f7cea222f60fffee28b9e52c50450fa0ac0d5d1ea65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973458547c3728d0638a0f7cea222f60fffee28b9e52c50450fa0ac0d5d1ea65->enter($__internal_973458547c3728d0638a0f7cea222f60fffee28b9e52c50450fa0ac0d5d1ea65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f13578f9e309ffa7980a86bc2b9663842618a8ff6a6c26d4bd38a5131be0cca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13578f9e309ffa7980a86bc2b9663842618a8ff6a6c26d4bd38a5131be0cca1->enter($__internal_f13578f9e309ffa7980a86bc2b9663842618a8ff6a6c26d4bd38a5131be0cca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f13578f9e309ffa7980a86bc2b9663842618a8ff6a6c26d4bd38a5131be0cca1->leave($__internal_f13578f9e309ffa7980a86bc2b9663842618a8ff6a6c26d4bd38a5131be0cca1_prof);

        
        $__internal_973458547c3728d0638a0f7cea222f60fffee28b9e52c50450fa0ac0d5d1ea65->leave($__internal_973458547c3728d0638a0f7cea222f60fffee28b9e52c50450fa0ac0d5d1ea65_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
