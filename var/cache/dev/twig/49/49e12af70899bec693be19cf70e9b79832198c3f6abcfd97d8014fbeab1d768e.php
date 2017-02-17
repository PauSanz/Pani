<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_47b72d709afbaad1aba59698a190926678d72da0b8d80b74d5e6fc3e49982194 extends Twig_Template
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
        $__internal_aed3929195b573bda4e6f60e3d1b1a78ff50b510d26f881d7f0ff05514ea1f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed3929195b573bda4e6f60e3d1b1a78ff50b510d26f881d7f0ff05514ea1f00->enter($__internal_aed3929195b573bda4e6f60e3d1b1a78ff50b510d26f881d7f0ff05514ea1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8be2cd2cdcc505eb15489b590c6f9c992de533306cfab0717d46963f93c8703a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be2cd2cdcc505eb15489b590c6f9c992de533306cfab0717d46963f93c8703a->enter($__internal_8be2cd2cdcc505eb15489b590c6f9c992de533306cfab0717d46963f93c8703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_aed3929195b573bda4e6f60e3d1b1a78ff50b510d26f881d7f0ff05514ea1f00->leave($__internal_aed3929195b573bda4e6f60e3d1b1a78ff50b510d26f881d7f0ff05514ea1f00_prof);

        
        $__internal_8be2cd2cdcc505eb15489b590c6f9c992de533306cfab0717d46963f93c8703a->leave($__internal_8be2cd2cdcc505eb15489b590c6f9c992de533306cfab0717d46963f93c8703a_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
