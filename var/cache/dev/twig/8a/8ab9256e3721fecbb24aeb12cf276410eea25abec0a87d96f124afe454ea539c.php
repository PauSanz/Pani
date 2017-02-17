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
        $__internal_10118f1fdccf74c4196cea908a7540c4ebfe058795882cdb28ec5f9cc7d44ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10118f1fdccf74c4196cea908a7540c4ebfe058795882cdb28ec5f9cc7d44ef4->enter($__internal_10118f1fdccf74c4196cea908a7540c4ebfe058795882cdb28ec5f9cc7d44ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_96113e2aa0a827e1988f65f36e7996cb9ad2a9ad815b9fd51b62a40732223423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96113e2aa0a827e1988f65f36e7996cb9ad2a9ad815b9fd51b62a40732223423->enter($__internal_96113e2aa0a827e1988f65f36e7996cb9ad2a9ad815b9fd51b62a40732223423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_10118f1fdccf74c4196cea908a7540c4ebfe058795882cdb28ec5f9cc7d44ef4->leave($__internal_10118f1fdccf74c4196cea908a7540c4ebfe058795882cdb28ec5f9cc7d44ef4_prof);

        
        $__internal_96113e2aa0a827e1988f65f36e7996cb9ad2a9ad815b9fd51b62a40732223423->leave($__internal_96113e2aa0a827e1988f65f36e7996cb9ad2a9ad815b9fd51b62a40732223423_prof);

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
