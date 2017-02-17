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
        $__internal_4f9a1631801ea1b3f26c8189e6cd8ae119eae795e1897b8641a9efbbf2431361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9a1631801ea1b3f26c8189e6cd8ae119eae795e1897b8641a9efbbf2431361->enter($__internal_4f9a1631801ea1b3f26c8189e6cd8ae119eae795e1897b8641a9efbbf2431361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7eeea7ef7f14c911f66764d6188efa21e9043a87ddf951f4ea7d02e1a2882d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eeea7ef7f14c911f66764d6188efa21e9043a87ddf951f4ea7d02e1a2882d6a->enter($__internal_7eeea7ef7f14c911f66764d6188efa21e9043a87ddf951f4ea7d02e1a2882d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4f9a1631801ea1b3f26c8189e6cd8ae119eae795e1897b8641a9efbbf2431361->leave($__internal_4f9a1631801ea1b3f26c8189e6cd8ae119eae795e1897b8641a9efbbf2431361_prof);

        
        $__internal_7eeea7ef7f14c911f66764d6188efa21e9043a87ddf951f4ea7d02e1a2882d6a->leave($__internal_7eeea7ef7f14c911f66764d6188efa21e9043a87ddf951f4ea7d02e1a2882d6a_prof);

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
