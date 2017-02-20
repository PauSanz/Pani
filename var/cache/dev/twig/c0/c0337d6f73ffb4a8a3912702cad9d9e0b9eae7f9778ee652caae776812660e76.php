<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_78f67a704d2b325701142713a2600289ce56704a3e17e9ef90af7e128d948e90 extends Twig_Template
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
        $__internal_d0e1398eb84e4cc16b3fa72c27f6d5f1188e6d80e2cd3bf64d3b98880e59b81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e1398eb84e4cc16b3fa72c27f6d5f1188e6d80e2cd3bf64d3b98880e59b81e->enter($__internal_d0e1398eb84e4cc16b3fa72c27f6d5f1188e6d80e2cd3bf64d3b98880e59b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_76355bd67ec96d5ba0989d722f83b7996556fe9b805b85836083c752ef1587a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76355bd67ec96d5ba0989d722f83b7996556fe9b805b85836083c752ef1587a2->enter($__internal_76355bd67ec96d5ba0989d722f83b7996556fe9b805b85836083c752ef1587a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_d0e1398eb84e4cc16b3fa72c27f6d5f1188e6d80e2cd3bf64d3b98880e59b81e->leave($__internal_d0e1398eb84e4cc16b3fa72c27f6d5f1188e6d80e2cd3bf64d3b98880e59b81e_prof);

        
        $__internal_76355bd67ec96d5ba0989d722f83b7996556fe9b805b85836083c752ef1587a2->leave($__internal_76355bd67ec96d5ba0989d722f83b7996556fe9b805b85836083c752ef1587a2_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
