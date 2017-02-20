<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_821fe71f6b611b36aeb9f4dc4bf6e1b91656da10c9e3660b6a02316e0bcfca30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f79d48dc890c0e6deaf45f33fede0435719361ed99f673421ab38a11d27be609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79d48dc890c0e6deaf45f33fede0435719361ed99f673421ab38a11d27be609->enter($__internal_f79d48dc890c0e6deaf45f33fede0435719361ed99f673421ab38a11d27be609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f8112d688e4456997966509a4634a43bd9846ac28bf35ff812a3858d23ba08fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8112d688e4456997966509a4634a43bd9846ac28bf35ff812a3858d23ba08fa->enter($__internal_f8112d688e4456997966509a4634a43bd9846ac28bf35ff812a3858d23ba08fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f79d48dc890c0e6deaf45f33fede0435719361ed99f673421ab38a11d27be609->leave($__internal_f79d48dc890c0e6deaf45f33fede0435719361ed99f673421ab38a11d27be609_prof);

        
        $__internal_f8112d688e4456997966509a4634a43bd9846ac28bf35ff812a3858d23ba08fa->leave($__internal_f8112d688e4456997966509a4634a43bd9846ac28bf35ff812a3858d23ba08fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
