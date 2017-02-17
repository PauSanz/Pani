<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_822f2919a17980553449eaea0ecdb79c7c80cdece5f90af3b967f820b1a85983 extends Twig_Template
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
        $__internal_506d70dd44297f74331aa4d1ce1750b0444e3c08e7acf02034704ffddb063a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506d70dd44297f74331aa4d1ce1750b0444e3c08e7acf02034704ffddb063a2a->enter($__internal_506d70dd44297f74331aa4d1ce1750b0444e3c08e7acf02034704ffddb063a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f97c6cc4ec12f5126649ec4921bc4d796233c4ef818ecb0d0291f6a4c87a7a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97c6cc4ec12f5126649ec4921bc4d796233c4ef818ecb0d0291f6a4c87a7a1a->enter($__internal_f97c6cc4ec12f5126649ec4921bc4d796233c4ef818ecb0d0291f6a4c87a7a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_506d70dd44297f74331aa4d1ce1750b0444e3c08e7acf02034704ffddb063a2a->leave($__internal_506d70dd44297f74331aa4d1ce1750b0444e3c08e7acf02034704ffddb063a2a_prof);

        
        $__internal_f97c6cc4ec12f5126649ec4921bc4d796233c4ef818ecb0d0291f6a4c87a7a1a->leave($__internal_f97c6cc4ec12f5126649ec4921bc4d796233c4ef818ecb0d0291f6a4c87a7a1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
