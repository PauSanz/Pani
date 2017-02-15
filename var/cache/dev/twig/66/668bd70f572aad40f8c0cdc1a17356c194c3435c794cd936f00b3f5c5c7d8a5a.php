<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a79f0d8985131b7fd6629c0b42a71c3246af87c6dd2461ca402b35cacff6d159 extends Twig_Template
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
        $__internal_9ce63eac610a4f4015d6f04966b8b549572799e4ba2827088ce4fe0e7c52897b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce63eac610a4f4015d6f04966b8b549572799e4ba2827088ce4fe0e7c52897b->enter($__internal_9ce63eac610a4f4015d6f04966b8b549572799e4ba2827088ce4fe0e7c52897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1c3a94812a24cd487915967089e98c8cde35c5c16a11044a8b19ad257dd683eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3a94812a24cd487915967089e98c8cde35c5c16a11044a8b19ad257dd683eb->enter($__internal_1c3a94812a24cd487915967089e98c8cde35c5c16a11044a8b19ad257dd683eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9ce63eac610a4f4015d6f04966b8b549572799e4ba2827088ce4fe0e7c52897b->leave($__internal_9ce63eac610a4f4015d6f04966b8b549572799e4ba2827088ce4fe0e7c52897b_prof);

        
        $__internal_1c3a94812a24cd487915967089e98c8cde35c5c16a11044a8b19ad257dd683eb->leave($__internal_1c3a94812a24cd487915967089e98c8cde35c5c16a11044a8b19ad257dd683eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
