<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_05d5f23bb60f8f5480e89cecd36b816689189ece8b021478b2a8ca486daaa7d0 extends Twig_Template
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
        $__internal_b4fc8985b1bb6c7715bed58b24617d22b2b8e2b694413b8c84de1f326d1c63a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fc8985b1bb6c7715bed58b24617d22b2b8e2b694413b8c84de1f326d1c63a4->enter($__internal_b4fc8985b1bb6c7715bed58b24617d22b2b8e2b694413b8c84de1f326d1c63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5b0e811d87043a50a33dc90f376cd6c38534e641996d97693a26be7af3f1cdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0e811d87043a50a33dc90f376cd6c38534e641996d97693a26be7af3f1cdc9->enter($__internal_5b0e811d87043a50a33dc90f376cd6c38534e641996d97693a26be7af3f1cdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b4fc8985b1bb6c7715bed58b24617d22b2b8e2b694413b8c84de1f326d1c63a4->leave($__internal_b4fc8985b1bb6c7715bed58b24617d22b2b8e2b694413b8c84de1f326d1c63a4_prof);

        
        $__internal_5b0e811d87043a50a33dc90f376cd6c38534e641996d97693a26be7af3f1cdc9->leave($__internal_5b0e811d87043a50a33dc90f376cd6c38534e641996d97693a26be7af3f1cdc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
