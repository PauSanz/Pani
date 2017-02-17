<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_b7442681ebcbe2f4da75915bc744d42da5a118616a9154d5d4105bb4f8821fc0 extends Twig_Template
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
        $__internal_dfec2e8e72037fd625a9f5a65e01932866252fbc407438fa27a93d4a6bbbe968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfec2e8e72037fd625a9f5a65e01932866252fbc407438fa27a93d4a6bbbe968->enter($__internal_dfec2e8e72037fd625a9f5a65e01932866252fbc407438fa27a93d4a6bbbe968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_0140f16a4af3e2c1c40fd418fc03a2a3f7c7806fd2362fd10caf9971a6d5283f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0140f16a4af3e2c1c40fd418fc03a2a3f7c7806fd2362fd10caf9971a6d5283f->enter($__internal_0140f16a4af3e2c1c40fd418fc03a2a3f7c7806fd2362fd10caf9971a6d5283f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_dfec2e8e72037fd625a9f5a65e01932866252fbc407438fa27a93d4a6bbbe968->leave($__internal_dfec2e8e72037fd625a9f5a65e01932866252fbc407438fa27a93d4a6bbbe968_prof);

        
        $__internal_0140f16a4af3e2c1c40fd418fc03a2a3f7c7806fd2362fd10caf9971a6d5283f->leave($__internal_0140f16a4af3e2c1c40fd418fc03a2a3f7c7806fd2362fd10caf9971a6d5283f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
