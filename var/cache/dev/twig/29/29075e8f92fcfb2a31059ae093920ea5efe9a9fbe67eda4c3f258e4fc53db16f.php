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
        $__internal_77a079247346d071e8cd8051defa2d6f3c0b55ee467cd210fc3ebe5fe1e649fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a079247346d071e8cd8051defa2d6f3c0b55ee467cd210fc3ebe5fe1e649fb->enter($__internal_77a079247346d071e8cd8051defa2d6f3c0b55ee467cd210fc3ebe5fe1e649fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c7ffd6268c640306707d06576e4bd41987ef1dde5fcaf7759d96cf0e640bd9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ffd6268c640306707d06576e4bd41987ef1dde5fcaf7759d96cf0e640bd9c2->enter($__internal_c7ffd6268c640306707d06576e4bd41987ef1dde5fcaf7759d96cf0e640bd9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_77a079247346d071e8cd8051defa2d6f3c0b55ee467cd210fc3ebe5fe1e649fb->leave($__internal_77a079247346d071e8cd8051defa2d6f3c0b55ee467cd210fc3ebe5fe1e649fb_prof);

        
        $__internal_c7ffd6268c640306707d06576e4bd41987ef1dde5fcaf7759d96cf0e640bd9c2->leave($__internal_c7ffd6268c640306707d06576e4bd41987ef1dde5fcaf7759d96cf0e640bd9c2_prof);

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