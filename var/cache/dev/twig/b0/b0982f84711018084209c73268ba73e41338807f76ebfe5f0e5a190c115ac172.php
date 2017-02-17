<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0efabb0a254e1dd77f2b0e483f9f953b2fd764cdf747306ef18b67c0ba03caa8 extends Twig_Template
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
        $__internal_f0029b4eca2d3cab4fb66f5267ab867c196129389b8aeb0caa1ddf20b49808f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0029b4eca2d3cab4fb66f5267ab867c196129389b8aeb0caa1ddf20b49808f9->enter($__internal_f0029b4eca2d3cab4fb66f5267ab867c196129389b8aeb0caa1ddf20b49808f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_89d91f63d1d448b94b751ddb94448e1efc98c24b35f6a2fd91baab5f50de1169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d91f63d1d448b94b751ddb94448e1efc98c24b35f6a2fd91baab5f50de1169->enter($__internal_89d91f63d1d448b94b751ddb94448e1efc98c24b35f6a2fd91baab5f50de1169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f0029b4eca2d3cab4fb66f5267ab867c196129389b8aeb0caa1ddf20b49808f9->leave($__internal_f0029b4eca2d3cab4fb66f5267ab867c196129389b8aeb0caa1ddf20b49808f9_prof);

        
        $__internal_89d91f63d1d448b94b751ddb94448e1efc98c24b35f6a2fd91baab5f50de1169->leave($__internal_89d91f63d1d448b94b751ddb94448e1efc98c24b35f6a2fd91baab5f50de1169_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
