<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e60a21b9f9abb1c8179ac1ee78bb1d1e6bcfe8114974a74ab2d5e0a66993d76 extends Twig_Template
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
        $__internal_adc7380fd2fdee082d52b0803a787bb21695160e576d1dbb907ac94ea7dc15fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc7380fd2fdee082d52b0803a787bb21695160e576d1dbb907ac94ea7dc15fc->enter($__internal_adc7380fd2fdee082d52b0803a787bb21695160e576d1dbb907ac94ea7dc15fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_46e4f91795c669c1b9129cd4a569defaa0e51b0ff82dce4da797b745ba420b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e4f91795c669c1b9129cd4a569defaa0e51b0ff82dce4da797b745ba420b4c->enter($__internal_46e4f91795c669c1b9129cd4a569defaa0e51b0ff82dce4da797b745ba420b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc7380fd2fdee082d52b0803a787bb21695160e576d1dbb907ac94ea7dc15fc->leave($__internal_adc7380fd2fdee082d52b0803a787bb21695160e576d1dbb907ac94ea7dc15fc_prof);

        
        $__internal_46e4f91795c669c1b9129cd4a569defaa0e51b0ff82dce4da797b745ba420b4c->leave($__internal_46e4f91795c669c1b9129cd4a569defaa0e51b0ff82dce4da797b745ba420b4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c6939a0579c82d62f0e604c772a7a3f22af70cf05573ffae16191747bab4553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6939a0579c82d62f0e604c772a7a3f22af70cf05573ffae16191747bab4553->enter($__internal_4c6939a0579c82d62f0e604c772a7a3f22af70cf05573ffae16191747bab4553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_625ac06642c65347dbedf2d9b161b71e38ea2d320baa4c0507e029c8b24e4e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625ac06642c65347dbedf2d9b161b71e38ea2d320baa4c0507e029c8b24e4e3f->enter($__internal_625ac06642c65347dbedf2d9b161b71e38ea2d320baa4c0507e029c8b24e4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_625ac06642c65347dbedf2d9b161b71e38ea2d320baa4c0507e029c8b24e4e3f->leave($__internal_625ac06642c65347dbedf2d9b161b71e38ea2d320baa4c0507e029c8b24e4e3f_prof);

        
        $__internal_4c6939a0579c82d62f0e604c772a7a3f22af70cf05573ffae16191747bab4553->leave($__internal_4c6939a0579c82d62f0e604c772a7a3f22af70cf05573ffae16191747bab4553_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66e686442ce893bfdc36500ca53872079ee5da6299f7027aabab802907beae7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e686442ce893bfdc36500ca53872079ee5da6299f7027aabab802907beae7b->enter($__internal_66e686442ce893bfdc36500ca53872079ee5da6299f7027aabab802907beae7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d8169c54940ddec1ead5f557dd2419ac7890821b09193071fa9fbb19d677bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8169c54940ddec1ead5f557dd2419ac7890821b09193071fa9fbb19d677bf7->enter($__internal_4d8169c54940ddec1ead5f557dd2419ac7890821b09193071fa9fbb19d677bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d8169c54940ddec1ead5f557dd2419ac7890821b09193071fa9fbb19d677bf7->leave($__internal_4d8169c54940ddec1ead5f557dd2419ac7890821b09193071fa9fbb19d677bf7_prof);

        
        $__internal_66e686442ce893bfdc36500ca53872079ee5da6299f7027aabab802907beae7b->leave($__internal_66e686442ce893bfdc36500ca53872079ee5da6299f7027aabab802907beae7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0fb584118ba7b14fd68a6eca0c80e59b7a77ba3025838a57593aac827b899f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fb584118ba7b14fd68a6eca0c80e59b7a77ba3025838a57593aac827b899f1->enter($__internal_d0fb584118ba7b14fd68a6eca0c80e59b7a77ba3025838a57593aac827b899f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2e91518dfb9d8633bf7fb04e0e56550881c6283fcc97b9f8c24d1c512488c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e91518dfb9d8633bf7fb04e0e56550881c6283fcc97b9f8c24d1c512488c4a->enter($__internal_d2e91518dfb9d8633bf7fb04e0e56550881c6283fcc97b9f8c24d1c512488c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2e91518dfb9d8633bf7fb04e0e56550881c6283fcc97b9f8c24d1c512488c4a->leave($__internal_d2e91518dfb9d8633bf7fb04e0e56550881c6283fcc97b9f8c24d1c512488c4a_prof);

        
        $__internal_d0fb584118ba7b14fd68a6eca0c80e59b7a77ba3025838a57593aac827b899f1->leave($__internal_d0fb584118ba7b14fd68a6eca0c80e59b7a77ba3025838a57593aac827b899f1_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
