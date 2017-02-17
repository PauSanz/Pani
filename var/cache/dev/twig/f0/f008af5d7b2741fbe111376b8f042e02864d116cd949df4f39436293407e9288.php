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
        $__internal_512ea9a376d9146103b6c79511b366f854cc9e2771da252611de8ff3d0cfeb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512ea9a376d9146103b6c79511b366f854cc9e2771da252611de8ff3d0cfeb7e->enter($__internal_512ea9a376d9146103b6c79511b366f854cc9e2771da252611de8ff3d0cfeb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_db5ec567c879e1711e3e92712002ba41c50b140d3abb8d5180e3cf9659b26210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5ec567c879e1711e3e92712002ba41c50b140d3abb8d5180e3cf9659b26210->enter($__internal_db5ec567c879e1711e3e92712002ba41c50b140d3abb8d5180e3cf9659b26210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_512ea9a376d9146103b6c79511b366f854cc9e2771da252611de8ff3d0cfeb7e->leave($__internal_512ea9a376d9146103b6c79511b366f854cc9e2771da252611de8ff3d0cfeb7e_prof);

        
        $__internal_db5ec567c879e1711e3e92712002ba41c50b140d3abb8d5180e3cf9659b26210->leave($__internal_db5ec567c879e1711e3e92712002ba41c50b140d3abb8d5180e3cf9659b26210_prof);

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
