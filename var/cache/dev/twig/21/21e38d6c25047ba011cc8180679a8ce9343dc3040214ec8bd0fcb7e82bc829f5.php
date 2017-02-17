<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5d8fc3e296f87608a0eb96a2f850f1c091ee04cd5fbe7bd843c4b4f2ec3dee3 extends Twig_Template
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
        $__internal_b3ce838cdb8ee16ebb799d01fe061d7f3483cfdaf14ff7a70a18e5adb6cae48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ce838cdb8ee16ebb799d01fe061d7f3483cfdaf14ff7a70a18e5adb6cae48c->enter($__internal_b3ce838cdb8ee16ebb799d01fe061d7f3483cfdaf14ff7a70a18e5adb6cae48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_297fd529f2da8dc206d2eaa09303f52e9418bf2588c06148b497d7d9a0b4f912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297fd529f2da8dc206d2eaa09303f52e9418bf2588c06148b497d7d9a0b4f912->enter($__internal_297fd529f2da8dc206d2eaa09303f52e9418bf2588c06148b497d7d9a0b4f912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b3ce838cdb8ee16ebb799d01fe061d7f3483cfdaf14ff7a70a18e5adb6cae48c->leave($__internal_b3ce838cdb8ee16ebb799d01fe061d7f3483cfdaf14ff7a70a18e5adb6cae48c_prof);

        
        $__internal_297fd529f2da8dc206d2eaa09303f52e9418bf2588c06148b497d7d9a0b4f912->leave($__internal_297fd529f2da8dc206d2eaa09303f52e9418bf2588c06148b497d7d9a0b4f912_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
