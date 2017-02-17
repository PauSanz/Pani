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
        $__internal_85b8e3e480ff6e392d9521e0da6e78dfdb78ce58f0e89bbe36a560bf95b67046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b8e3e480ff6e392d9521e0da6e78dfdb78ce58f0e89bbe36a560bf95b67046->enter($__internal_85b8e3e480ff6e392d9521e0da6e78dfdb78ce58f0e89bbe36a560bf95b67046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_16ac0f9d420b8f0559aa9933ba790fb8c25b80194459b6ab32caa8127460d10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ac0f9d420b8f0559aa9933ba790fb8c25b80194459b6ab32caa8127460d10c->enter($__internal_16ac0f9d420b8f0559aa9933ba790fb8c25b80194459b6ab32caa8127460d10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_85b8e3e480ff6e392d9521e0da6e78dfdb78ce58f0e89bbe36a560bf95b67046->leave($__internal_85b8e3e480ff6e392d9521e0da6e78dfdb78ce58f0e89bbe36a560bf95b67046_prof);

        
        $__internal_16ac0f9d420b8f0559aa9933ba790fb8c25b80194459b6ab32caa8127460d10c->leave($__internal_16ac0f9d420b8f0559aa9933ba790fb8c25b80194459b6ab32caa8127460d10c_prof);

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
