<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_245737abc667b6eecd30fd82cb34cb59edd674c76fa74fe52bed2f389c2a0814 extends Twig_Template
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
        $__internal_98aeaba832afb90aca88800084d844c7c884b1169e13a64dc4eec0080e14028a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aeaba832afb90aca88800084d844c7c884b1169e13a64dc4eec0080e14028a->enter($__internal_98aeaba832afb90aca88800084d844c7c884b1169e13a64dc4eec0080e14028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a1817ffc8d13c4bdf245dec9f61a157b12e3fa5c50543ef755b139d99be9c654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1817ffc8d13c4bdf245dec9f61a157b12e3fa5c50543ef755b139d99be9c654->enter($__internal_a1817ffc8d13c4bdf245dec9f61a157b12e3fa5c50543ef755b139d99be9c654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_98aeaba832afb90aca88800084d844c7c884b1169e13a64dc4eec0080e14028a->leave($__internal_98aeaba832afb90aca88800084d844c7c884b1169e13a64dc4eec0080e14028a_prof);

        
        $__internal_a1817ffc8d13c4bdf245dec9f61a157b12e3fa5c50543ef755b139d99be9c654->leave($__internal_a1817ffc8d13c4bdf245dec9f61a157b12e3fa5c50543ef755b139d99be9c654_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
