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
        $__internal_da601c92e09bf98427f63859b12d2c2c20672b05b47bc8a77f118bce368f4372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da601c92e09bf98427f63859b12d2c2c20672b05b47bc8a77f118bce368f4372->enter($__internal_da601c92e09bf98427f63859b12d2c2c20672b05b47bc8a77f118bce368f4372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_84ad1b1f02c2dd29c468c723ecd1f0483d5ccea42babbc33e259f27fe93ac5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ad1b1f02c2dd29c468c723ecd1f0483d5ccea42babbc33e259f27fe93ac5f0->enter($__internal_84ad1b1f02c2dd29c468c723ecd1f0483d5ccea42babbc33e259f27fe93ac5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_da601c92e09bf98427f63859b12d2c2c20672b05b47bc8a77f118bce368f4372->leave($__internal_da601c92e09bf98427f63859b12d2c2c20672b05b47bc8a77f118bce368f4372_prof);

        
        $__internal_84ad1b1f02c2dd29c468c723ecd1f0483d5ccea42babbc33e259f27fe93ac5f0->leave($__internal_84ad1b1f02c2dd29c468c723ecd1f0483d5ccea42babbc33e259f27fe93ac5f0_prof);

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
