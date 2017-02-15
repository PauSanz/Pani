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
        $__internal_f41fcbea936b94ad322acebfee3fcc57cd1834a8370a29cb7ffc6ed1ebcb4ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41fcbea936b94ad322acebfee3fcc57cd1834a8370a29cb7ffc6ed1ebcb4ae0->enter($__internal_f41fcbea936b94ad322acebfee3fcc57cd1834a8370a29cb7ffc6ed1ebcb4ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c64c2ef78856951302da814550ffe47b72390f4fa6b7535a1238bd4df4540086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64c2ef78856951302da814550ffe47b72390f4fa6b7535a1238bd4df4540086->enter($__internal_c64c2ef78856951302da814550ffe47b72390f4fa6b7535a1238bd4df4540086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f41fcbea936b94ad322acebfee3fcc57cd1834a8370a29cb7ffc6ed1ebcb4ae0->leave($__internal_f41fcbea936b94ad322acebfee3fcc57cd1834a8370a29cb7ffc6ed1ebcb4ae0_prof);

        
        $__internal_c64c2ef78856951302da814550ffe47b72390f4fa6b7535a1238bd4df4540086->leave($__internal_c64c2ef78856951302da814550ffe47b72390f4fa6b7535a1238bd4df4540086_prof);

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
