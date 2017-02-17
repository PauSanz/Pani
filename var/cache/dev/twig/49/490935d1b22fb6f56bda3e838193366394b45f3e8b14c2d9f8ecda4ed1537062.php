<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8bd0d709545c2e0eff3699e9dee149826229f8811ac78dddb18b7dfce31ebdb2 extends Twig_Template
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
        $__internal_0b1e8dd854c8424084f644741d057fcf5e79d687767b57fc9ecf2ba4ec27853b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1e8dd854c8424084f644741d057fcf5e79d687767b57fc9ecf2ba4ec27853b->enter($__internal_0b1e8dd854c8424084f644741d057fcf5e79d687767b57fc9ecf2ba4ec27853b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_08bca4004c5a6e098b199589d8a9b230bc235e35104ba88699e760ff028e9475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bca4004c5a6e098b199589d8a9b230bc235e35104ba88699e760ff028e9475->enter($__internal_08bca4004c5a6e098b199589d8a9b230bc235e35104ba88699e760ff028e9475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b1e8dd854c8424084f644741d057fcf5e79d687767b57fc9ecf2ba4ec27853b->leave($__internal_0b1e8dd854c8424084f644741d057fcf5e79d687767b57fc9ecf2ba4ec27853b_prof);

        
        $__internal_08bca4004c5a6e098b199589d8a9b230bc235e35104ba88699e760ff028e9475->leave($__internal_08bca4004c5a6e098b199589d8a9b230bc235e35104ba88699e760ff028e9475_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
