<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_42cff5b1d618a1f1a99ec0c2e1b3fc3d1e8c18aec7b7fd311830e102a1bfeeba extends Twig_Template
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
        $__internal_08dd3de171f0b397fb50c1670d2e07910135e594972b77d89c8eb5f5df4b5a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08dd3de171f0b397fb50c1670d2e07910135e594972b77d89c8eb5f5df4b5a02->enter($__internal_08dd3de171f0b397fb50c1670d2e07910135e594972b77d89c8eb5f5df4b5a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_501ecdc34ec31ae035611ac670a7602d8bde8b487a87fecd5730cfa8ebae2aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501ecdc34ec31ae035611ac670a7602d8bde8b487a87fecd5730cfa8ebae2aac->enter($__internal_501ecdc34ec31ae035611ac670a7602d8bde8b487a87fecd5730cfa8ebae2aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_08dd3de171f0b397fb50c1670d2e07910135e594972b77d89c8eb5f5df4b5a02->leave($__internal_08dd3de171f0b397fb50c1670d2e07910135e594972b77d89c8eb5f5df4b5a02_prof);

        
        $__internal_501ecdc34ec31ae035611ac670a7602d8bde8b487a87fecd5730cfa8ebae2aac->leave($__internal_501ecdc34ec31ae035611ac670a7602d8bde8b487a87fecd5730cfa8ebae2aac_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
