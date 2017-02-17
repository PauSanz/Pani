<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_9ca40dd69a4ae85bf29392554ff65c96dcd27fe8b99adbc7969191f1214e1bed extends Twig_Template
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
        $__internal_196f9af90f15c658f0339ed52b21b4af6b3bf89a9351d4ff9da533a2a280ed17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196f9af90f15c658f0339ed52b21b4af6b3bf89a9351d4ff9da533a2a280ed17->enter($__internal_196f9af90f15c658f0339ed52b21b4af6b3bf89a9351d4ff9da533a2a280ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_cf455d3c1cbf7cba460f2478ee9c13618dd30788101a1c82fa0c4ff2803c8d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf455d3c1cbf7cba460f2478ee9c13618dd30788101a1c82fa0c4ff2803c8d84->enter($__internal_cf455d3c1cbf7cba460f2478ee9c13618dd30788101a1c82fa0c4ff2803c8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_196f9af90f15c658f0339ed52b21b4af6b3bf89a9351d4ff9da533a2a280ed17->leave($__internal_196f9af90f15c658f0339ed52b21b4af6b3bf89a9351d4ff9da533a2a280ed17_prof);

        
        $__internal_cf455d3c1cbf7cba460f2478ee9c13618dd30788101a1c82fa0c4ff2803c8d84->leave($__internal_cf455d3c1cbf7cba460f2478ee9c13618dd30788101a1c82fa0c4ff2803c8d84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
