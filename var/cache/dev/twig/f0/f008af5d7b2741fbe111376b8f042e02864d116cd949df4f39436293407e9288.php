<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d1620b0add2ff514f6b7199facb9af3ee9dd63c3d79346b2cbda402fa4054c8a extends Twig_Template
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
        $__internal_e17a457465e788a3684f9ceaa0071c54f128a42b102caca7adf127c764ae90c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17a457465e788a3684f9ceaa0071c54f128a42b102caca7adf127c764ae90c0->enter($__internal_e17a457465e788a3684f9ceaa0071c54f128a42b102caca7adf127c764ae90c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d82a5941a4afe3e178894fab37d5cd4ca5cd8cd3cf6591249b84600901efb12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82a5941a4afe3e178894fab37d5cd4ca5cd8cd3cf6591249b84600901efb12f->enter($__internal_d82a5941a4afe3e178894fab37d5cd4ca5cd8cd3cf6591249b84600901efb12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e17a457465e788a3684f9ceaa0071c54f128a42b102caca7adf127c764ae90c0->leave($__internal_e17a457465e788a3684f9ceaa0071c54f128a42b102caca7adf127c764ae90c0_prof);

        
        $__internal_d82a5941a4afe3e178894fab37d5cd4ca5cd8cd3cf6591249b84600901efb12f->leave($__internal_d82a5941a4afe3e178894fab37d5cd4ca5cd8cd3cf6591249b84600901efb12f_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
