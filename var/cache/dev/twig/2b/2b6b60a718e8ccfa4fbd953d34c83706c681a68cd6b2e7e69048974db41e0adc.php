<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3a842eec62f3ec16ab599d30652a0e5497c9e37be6c9a09291313bbae4ed9035 extends Twig_Template
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
        $__internal_f68d7af987ad455bdf198ad8b0cf9ed6f8012d81fee76e01c2a3df55bcbc4d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68d7af987ad455bdf198ad8b0cf9ed6f8012d81fee76e01c2a3df55bcbc4d2a->enter($__internal_f68d7af987ad455bdf198ad8b0cf9ed6f8012d81fee76e01c2a3df55bcbc4d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0aea59ea01b3384931014b1662f562ff4d66efc01e1121c5d0499e7fd8761354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aea59ea01b3384931014b1662f562ff4d66efc01e1121c5d0499e7fd8761354->enter($__internal_0aea59ea01b3384931014b1662f562ff4d66efc01e1121c5d0499e7fd8761354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f68d7af987ad455bdf198ad8b0cf9ed6f8012d81fee76e01c2a3df55bcbc4d2a->leave($__internal_f68d7af987ad455bdf198ad8b0cf9ed6f8012d81fee76e01c2a3df55bcbc4d2a_prof);

        
        $__internal_0aea59ea01b3384931014b1662f562ff4d66efc01e1121c5d0499e7fd8761354->leave($__internal_0aea59ea01b3384931014b1662f562ff4d66efc01e1121c5d0499e7fd8761354_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
