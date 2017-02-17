<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e340f7fc21c468ae34188b011f0a77ce04653697dac808cfae2fef3a9223058 extends Twig_Template
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
        $__internal_116ba67bcb0f93445b1a8306653e6a7771eb594aeb868a01e8ba272fac72d0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116ba67bcb0f93445b1a8306653e6a7771eb594aeb868a01e8ba272fac72d0fe->enter($__internal_116ba67bcb0f93445b1a8306653e6a7771eb594aeb868a01e8ba272fac72d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_fa1331753eca8094c56bd561c61d1b4656a209e2d8656dc8531c4ba67786bbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1331753eca8094c56bd561c61d1b4656a209e2d8656dc8531c4ba67786bbc4->enter($__internal_fa1331753eca8094c56bd561c61d1b4656a209e2d8656dc8531c4ba67786bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_116ba67bcb0f93445b1a8306653e6a7771eb594aeb868a01e8ba272fac72d0fe->leave($__internal_116ba67bcb0f93445b1a8306653e6a7771eb594aeb868a01e8ba272fac72d0fe_prof);

        
        $__internal_fa1331753eca8094c56bd561c61d1b4656a209e2d8656dc8531c4ba67786bbc4->leave($__internal_fa1331753eca8094c56bd561c61d1b4656a209e2d8656dc8531c4ba67786bbc4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
