<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2e89820d082dacb7436a4f5257153955b82787f5da4deb67f71b751e6bae902c extends Twig_Template
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
        $__internal_f31fb4d7d8ae5476e86a4b492fd8b32e0c72410fb24b443fb2d34ec41c40654c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31fb4d7d8ae5476e86a4b492fd8b32e0c72410fb24b443fb2d34ec41c40654c->enter($__internal_f31fb4d7d8ae5476e86a4b492fd8b32e0c72410fb24b443fb2d34ec41c40654c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5492919dfaac52469883fe0e7103fcc529597d720fbfd5479e84d837debc102b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5492919dfaac52469883fe0e7103fcc529597d720fbfd5479e84d837debc102b->enter($__internal_5492919dfaac52469883fe0e7103fcc529597d720fbfd5479e84d837debc102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f31fb4d7d8ae5476e86a4b492fd8b32e0c72410fb24b443fb2d34ec41c40654c->leave($__internal_f31fb4d7d8ae5476e86a4b492fd8b32e0c72410fb24b443fb2d34ec41c40654c_prof);

        
        $__internal_5492919dfaac52469883fe0e7103fcc529597d720fbfd5479e84d837debc102b->leave($__internal_5492919dfaac52469883fe0e7103fcc529597d720fbfd5479e84d837debc102b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
