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
        $__internal_56f4ae295dd1f30dd9313a3bd0e11077d5b96536bfcf2f4bc99a0e262ce2f528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f4ae295dd1f30dd9313a3bd0e11077d5b96536bfcf2f4bc99a0e262ce2f528->enter($__internal_56f4ae295dd1f30dd9313a3bd0e11077d5b96536bfcf2f4bc99a0e262ce2f528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_eaa9addd62546847f6acd63ec213a3d0b36475399ccf379244371d311d624139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa9addd62546847f6acd63ec213a3d0b36475399ccf379244371d311d624139->enter($__internal_eaa9addd62546847f6acd63ec213a3d0b36475399ccf379244371d311d624139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_56f4ae295dd1f30dd9313a3bd0e11077d5b96536bfcf2f4bc99a0e262ce2f528->leave($__internal_56f4ae295dd1f30dd9313a3bd0e11077d5b96536bfcf2f4bc99a0e262ce2f528_prof);

        
        $__internal_eaa9addd62546847f6acd63ec213a3d0b36475399ccf379244371d311d624139->leave($__internal_eaa9addd62546847f6acd63ec213a3d0b36475399ccf379244371d311d624139_prof);

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
