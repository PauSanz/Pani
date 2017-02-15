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
        $__internal_6d2312b9dd3b74123ea65ddc5d0312c444a0a71cc5968ecd7be7988b1f196890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2312b9dd3b74123ea65ddc5d0312c444a0a71cc5968ecd7be7988b1f196890->enter($__internal_6d2312b9dd3b74123ea65ddc5d0312c444a0a71cc5968ecd7be7988b1f196890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_efe469b33e70c2fe9e78b2c379e5af0244a7a5aaacf0322e066f1e5a0a519672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe469b33e70c2fe9e78b2c379e5af0244a7a5aaacf0322e066f1e5a0a519672->enter($__internal_efe469b33e70c2fe9e78b2c379e5af0244a7a5aaacf0322e066f1e5a0a519672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6d2312b9dd3b74123ea65ddc5d0312c444a0a71cc5968ecd7be7988b1f196890->leave($__internal_6d2312b9dd3b74123ea65ddc5d0312c444a0a71cc5968ecd7be7988b1f196890_prof);

        
        $__internal_efe469b33e70c2fe9e78b2c379e5af0244a7a5aaacf0322e066f1e5a0a519672->leave($__internal_efe469b33e70c2fe9e78b2c379e5af0244a7a5aaacf0322e066f1e5a0a519672_prof);

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
