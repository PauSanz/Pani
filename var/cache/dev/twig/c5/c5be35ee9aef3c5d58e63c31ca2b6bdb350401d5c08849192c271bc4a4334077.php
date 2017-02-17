<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2e89820d082dacb7436a4f5257153955b82787f5da4deb67f71b751e6bae902c extends Twig_Template
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
        $__internal_c5f84b283d711ce2f9d61db60c4bc103ff699425381ca143611baff7a9961395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f84b283d711ce2f9d61db60c4bc103ff699425381ca143611baff7a9961395->enter($__internal_c5f84b283d711ce2f9d61db60c4bc103ff699425381ca143611baff7a9961395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_20a0b71214c422f464a91e95366c14e4d62e51b95a26f1081417d87042c895d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a0b71214c422f464a91e95366c14e4d62e51b95a26f1081417d87042c895d4->enter($__internal_20a0b71214c422f464a91e95366c14e4d62e51b95a26f1081417d87042c895d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c5f84b283d711ce2f9d61db60c4bc103ff699425381ca143611baff7a9961395->leave($__internal_c5f84b283d711ce2f9d61db60c4bc103ff699425381ca143611baff7a9961395_prof);

        
        $__internal_20a0b71214c422f464a91e95366c14e4d62e51b95a26f1081417d87042c895d4->leave($__internal_20a0b71214c422f464a91e95366c14e4d62e51b95a26f1081417d87042c895d4_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
