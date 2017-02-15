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
        $__internal_bd04bf10cfcc76e910225b2c1487f6132e14d5d30df42d59758d50354523db84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04bf10cfcc76e910225b2c1487f6132e14d5d30df42d59758d50354523db84->enter($__internal_bd04bf10cfcc76e910225b2c1487f6132e14d5d30df42d59758d50354523db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e7d5de4df53ca469680527bd92046837b247566d1232351a448a5caae8cbf5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d5de4df53ca469680527bd92046837b247566d1232351a448a5caae8cbf5b7->enter($__internal_e7d5de4df53ca469680527bd92046837b247566d1232351a448a5caae8cbf5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_bd04bf10cfcc76e910225b2c1487f6132e14d5d30df42d59758d50354523db84->leave($__internal_bd04bf10cfcc76e910225b2c1487f6132e14d5d30df42d59758d50354523db84_prof);

        
        $__internal_e7d5de4df53ca469680527bd92046837b247566d1232351a448a5caae8cbf5b7->leave($__internal_e7d5de4df53ca469680527bd92046837b247566d1232351a448a5caae8cbf5b7_prof);

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
