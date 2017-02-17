<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_294620237de638b947629706539a2a9037c8b4303178dec4bdd4b59a447df148 extends Twig_Template
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
        $__internal_0d64cc30b7cc7d53c518e3c47665556941796c35217cea61e07dd00f24ea38fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d64cc30b7cc7d53c518e3c47665556941796c35217cea61e07dd00f24ea38fe->enter($__internal_0d64cc30b7cc7d53c518e3c47665556941796c35217cea61e07dd00f24ea38fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fc2f6d05ba46b2ddb4f0fb5b11b4ae84688aff52a797dced76de72a5294d0563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2f6d05ba46b2ddb4f0fb5b11b4ae84688aff52a797dced76de72a5294d0563->enter($__internal_fc2f6d05ba46b2ddb4f0fb5b11b4ae84688aff52a797dced76de72a5294d0563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0d64cc30b7cc7d53c518e3c47665556941796c35217cea61e07dd00f24ea38fe->leave($__internal_0d64cc30b7cc7d53c518e3c47665556941796c35217cea61e07dd00f24ea38fe_prof);

        
        $__internal_fc2f6d05ba46b2ddb4f0fb5b11b4ae84688aff52a797dced76de72a5294d0563->leave($__internal_fc2f6d05ba46b2ddb4f0fb5b11b4ae84688aff52a797dced76de72a5294d0563_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
