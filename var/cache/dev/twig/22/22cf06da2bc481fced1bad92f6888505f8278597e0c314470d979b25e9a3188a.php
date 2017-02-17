<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8f229c4ee0b268503cb5986d907bd7f0ff2ceb09b8af8d8ef212d7088726996 extends Twig_Template
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
        $__internal_122b4e0406cf8b70475a139c51575db5f7b9d5d3a24087f3fbde1554e5eff948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122b4e0406cf8b70475a139c51575db5f7b9d5d3a24087f3fbde1554e5eff948->enter($__internal_122b4e0406cf8b70475a139c51575db5f7b9d5d3a24087f3fbde1554e5eff948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7e7f8e2450a802ed4f65c1691a0d0f78fc50c69ae957c3679f29c95ad5e5bdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7f8e2450a802ed4f65c1691a0d0f78fc50c69ae957c3679f29c95ad5e5bdff->enter($__internal_7e7f8e2450a802ed4f65c1691a0d0f78fc50c69ae957c3679f29c95ad5e5bdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_122b4e0406cf8b70475a139c51575db5f7b9d5d3a24087f3fbde1554e5eff948->leave($__internal_122b4e0406cf8b70475a139c51575db5f7b9d5d3a24087f3fbde1554e5eff948_prof);

        
        $__internal_7e7f8e2450a802ed4f65c1691a0d0f78fc50c69ae957c3679f29c95ad5e5bdff->leave($__internal_7e7f8e2450a802ed4f65c1691a0d0f78fc50c69ae957c3679f29c95ad5e5bdff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
