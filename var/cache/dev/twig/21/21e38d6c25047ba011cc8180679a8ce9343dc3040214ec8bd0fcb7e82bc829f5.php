<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d5d8fc3e296f87608a0eb96a2f850f1c091ee04cd5fbe7bd843c4b4f2ec3dee3 extends Twig_Template
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
        $__internal_cc85ce690b41500dc5ffed386e5325fc99a22c15711ecef9408048888dc00aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc85ce690b41500dc5ffed386e5325fc99a22c15711ecef9408048888dc00aaa->enter($__internal_cc85ce690b41500dc5ffed386e5325fc99a22c15711ecef9408048888dc00aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f32062d2111b00a3bf32158c698c5e5bdd7db2825ab6df9cf3e5acdae1e75cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32062d2111b00a3bf32158c698c5e5bdd7db2825ab6df9cf3e5acdae1e75cf9->enter($__internal_f32062d2111b00a3bf32158c698c5e5bdd7db2825ab6df9cf3e5acdae1e75cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc85ce690b41500dc5ffed386e5325fc99a22c15711ecef9408048888dc00aaa->leave($__internal_cc85ce690b41500dc5ffed386e5325fc99a22c15711ecef9408048888dc00aaa_prof);

        
        $__internal_f32062d2111b00a3bf32158c698c5e5bdd7db2825ab6df9cf3e5acdae1e75cf9->leave($__internal_f32062d2111b00a3bf32158c698c5e5bdd7db2825ab6df9cf3e5acdae1e75cf9_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
