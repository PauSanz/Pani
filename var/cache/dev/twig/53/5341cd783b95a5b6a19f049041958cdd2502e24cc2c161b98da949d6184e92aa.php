<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c45e061129a3653ab749d926862102f15aee4f46db2177fe640462604ef6a47 extends Twig_Template
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
        $__internal_d0ed890e9dd977b6b2216d5144dff539e17f8e0a8e158b8bc3f6ef62b012ee9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed890e9dd977b6b2216d5144dff539e17f8e0a8e158b8bc3f6ef62b012ee9f->enter($__internal_d0ed890e9dd977b6b2216d5144dff539e17f8e0a8e158b8bc3f6ef62b012ee9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_0606380337306bd353fffe786fd151f1edf970b7f8b229fec19cc66b6225f528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0606380337306bd353fffe786fd151f1edf970b7f8b229fec19cc66b6225f528->enter($__internal_0606380337306bd353fffe786fd151f1edf970b7f8b229fec19cc66b6225f528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d0ed890e9dd977b6b2216d5144dff539e17f8e0a8e158b8bc3f6ef62b012ee9f->leave($__internal_d0ed890e9dd977b6b2216d5144dff539e17f8e0a8e158b8bc3f6ef62b012ee9f_prof);

        
        $__internal_0606380337306bd353fffe786fd151f1edf970b7f8b229fec19cc66b6225f528->leave($__internal_0606380337306bd353fffe786fd151f1edf970b7f8b229fec19cc66b6225f528_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
