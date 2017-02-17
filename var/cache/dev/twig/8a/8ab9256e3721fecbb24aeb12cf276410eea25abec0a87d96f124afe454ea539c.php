<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d6205aa200191499e338b35e586f74564abb8cd01f8fa93ad85bae60e70facc9 extends Twig_Template
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
        $__internal_dc0c540d4edd085a07ebe4cdd6ba62bcc7eaeb58ca9376668901f58e3443fe95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0c540d4edd085a07ebe4cdd6ba62bcc7eaeb58ca9376668901f58e3443fe95->enter($__internal_dc0c540d4edd085a07ebe4cdd6ba62bcc7eaeb58ca9376668901f58e3443fe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4827ce04a3b026dbf31f0cbfc49fa8b130c27ccf5f6a426bd9a0f9733576079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4827ce04a3b026dbf31f0cbfc49fa8b130c27ccf5f6a426bd9a0f9733576079d->enter($__internal_4827ce04a3b026dbf31f0cbfc49fa8b130c27ccf5f6a426bd9a0f9733576079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dc0c540d4edd085a07ebe4cdd6ba62bcc7eaeb58ca9376668901f58e3443fe95->leave($__internal_dc0c540d4edd085a07ebe4cdd6ba62bcc7eaeb58ca9376668901f58e3443fe95_prof);

        
        $__internal_4827ce04a3b026dbf31f0cbfc49fa8b130c27ccf5f6a426bd9a0f9733576079d->leave($__internal_4827ce04a3b026dbf31f0cbfc49fa8b130c27ccf5f6a426bd9a0f9733576079d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
