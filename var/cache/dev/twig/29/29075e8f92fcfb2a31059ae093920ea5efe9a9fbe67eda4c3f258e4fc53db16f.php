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
        $__internal_8728464debc68d5e0df2ba717c76a5cd1315ba437da27594ce09d4e5041e75d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8728464debc68d5e0df2ba717c76a5cd1315ba437da27594ce09d4e5041e75d2->enter($__internal_8728464debc68d5e0df2ba717c76a5cd1315ba437da27594ce09d4e5041e75d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_669d2b67cf97a0ad0e79db36123bb1dd54b084095fcac131195cc78183b95d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669d2b67cf97a0ad0e79db36123bb1dd54b084095fcac131195cc78183b95d3b->enter($__internal_669d2b67cf97a0ad0e79db36123bb1dd54b084095fcac131195cc78183b95d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8728464debc68d5e0df2ba717c76a5cd1315ba437da27594ce09d4e5041e75d2->leave($__internal_8728464debc68d5e0df2ba717c76a5cd1315ba437da27594ce09d4e5041e75d2_prof);

        
        $__internal_669d2b67cf97a0ad0e79db36123bb1dd54b084095fcac131195cc78183b95d3b->leave($__internal_669d2b67cf97a0ad0e79db36123bb1dd54b084095fcac131195cc78183b95d3b_prof);

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
