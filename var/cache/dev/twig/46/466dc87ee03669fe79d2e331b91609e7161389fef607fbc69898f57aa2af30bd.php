<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5024325f9bf7acd9b001f7a18df9137a99e4219a4f9185ef6f0f9a51cbd3e836 extends Twig_Template
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
        $__internal_446ccd131da5a270497fddb4a636ab9d49b7c9af4def8f1c44ebe62c906e5789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446ccd131da5a270497fddb4a636ab9d49b7c9af4def8f1c44ebe62c906e5789->enter($__internal_446ccd131da5a270497fddb4a636ab9d49b7c9af4def8f1c44ebe62c906e5789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_083d43d0ed230df80aab6f8aaa922e3547cc0dd0e070d3a3497d034f8a89c5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083d43d0ed230df80aab6f8aaa922e3547cc0dd0e070d3a3497d034f8a89c5b7->enter($__internal_083d43d0ed230df80aab6f8aaa922e3547cc0dd0e070d3a3497d034f8a89c5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_446ccd131da5a270497fddb4a636ab9d49b7c9af4def8f1c44ebe62c906e5789->leave($__internal_446ccd131da5a270497fddb4a636ab9d49b7c9af4def8f1c44ebe62c906e5789_prof);

        
        $__internal_083d43d0ed230df80aab6f8aaa922e3547cc0dd0e070d3a3497d034f8a89c5b7->leave($__internal_083d43d0ed230df80aab6f8aaa922e3547cc0dd0e070d3a3497d034f8a89c5b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
