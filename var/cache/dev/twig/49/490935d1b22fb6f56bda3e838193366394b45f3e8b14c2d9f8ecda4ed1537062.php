<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8bd0d709545c2e0eff3699e9dee149826229f8811ac78dddb18b7dfce31ebdb2 extends Twig_Template
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
        $__internal_fa9653969799247a1399c5794cfa89e8a1ae0cf265900248e5026d090c1eba2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9653969799247a1399c5794cfa89e8a1ae0cf265900248e5026d090c1eba2f->enter($__internal_fa9653969799247a1399c5794cfa89e8a1ae0cf265900248e5026d090c1eba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_77054e5258231ea482e9ccd116a5986b577c082ac202c9c18c2cd877c95f93a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77054e5258231ea482e9ccd116a5986b577c082ac202c9c18c2cd877c95f93a3->enter($__internal_77054e5258231ea482e9ccd116a5986b577c082ac202c9c18c2cd877c95f93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fa9653969799247a1399c5794cfa89e8a1ae0cf265900248e5026d090c1eba2f->leave($__internal_fa9653969799247a1399c5794cfa89e8a1ae0cf265900248e5026d090c1eba2f_prof);

        
        $__internal_77054e5258231ea482e9ccd116a5986b577c082ac202c9c18c2cd877c95f93a3->leave($__internal_77054e5258231ea482e9ccd116a5986b577c082ac202c9c18c2cd877c95f93a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
