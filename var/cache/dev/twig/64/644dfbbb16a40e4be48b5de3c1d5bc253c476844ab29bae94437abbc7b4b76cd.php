<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9308a8ccba52188e80c554863505af1a2dee7de0f104544430be61cf936a5a28 extends Twig_Template
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
        $__internal_cdb510df38ea3b08ae3fdb5d87594d52355c783747fb4347d5ed0b4f18d9e26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb510df38ea3b08ae3fdb5d87594d52355c783747fb4347d5ed0b4f18d9e26a->enter($__internal_cdb510df38ea3b08ae3fdb5d87594d52355c783747fb4347d5ed0b4f18d9e26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6e99a6cb668a1036dd9fb7dbd57b8d5bb5303528754f0b1b780f62c2f016c9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e99a6cb668a1036dd9fb7dbd57b8d5bb5303528754f0b1b780f62c2f016c9e4->enter($__internal_6e99a6cb668a1036dd9fb7dbd57b8d5bb5303528754f0b1b780f62c2f016c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cdb510df38ea3b08ae3fdb5d87594d52355c783747fb4347d5ed0b4f18d9e26a->leave($__internal_cdb510df38ea3b08ae3fdb5d87594d52355c783747fb4347d5ed0b4f18d9e26a_prof);

        
        $__internal_6e99a6cb668a1036dd9fb7dbd57b8d5bb5303528754f0b1b780f62c2f016c9e4->leave($__internal_6e99a6cb668a1036dd9fb7dbd57b8d5bb5303528754f0b1b780f62c2f016c9e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
