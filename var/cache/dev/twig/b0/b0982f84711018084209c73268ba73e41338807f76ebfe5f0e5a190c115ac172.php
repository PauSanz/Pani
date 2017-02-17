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
        $__internal_5154d70e17ed27a914b1ec8b2e8248a2c85a443ab6da59c697a939e0c7b7df2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5154d70e17ed27a914b1ec8b2e8248a2c85a443ab6da59c697a939e0c7b7df2d->enter($__internal_5154d70e17ed27a914b1ec8b2e8248a2c85a443ab6da59c697a939e0c7b7df2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b7d6723030a0d2f1e1c67c584cab6164e67dab38faba5f849d7c333a14a14e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d6723030a0d2f1e1c67c584cab6164e67dab38faba5f849d7c333a14a14e5a->enter($__internal_b7d6723030a0d2f1e1c67c584cab6164e67dab38faba5f849d7c333a14a14e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5154d70e17ed27a914b1ec8b2e8248a2c85a443ab6da59c697a939e0c7b7df2d->leave($__internal_5154d70e17ed27a914b1ec8b2e8248a2c85a443ab6da59c697a939e0c7b7df2d_prof);

        
        $__internal_b7d6723030a0d2f1e1c67c584cab6164e67dab38faba5f849d7c333a14a14e5a->leave($__internal_b7d6723030a0d2f1e1c67c584cab6164e67dab38faba5f849d7c333a14a14e5a_prof);

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
