<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c5150770fe5fa02ed2e32c1dade0cf9602ba848a9973fbcb3ed6b0fa94c7cf13 extends Twig_Template
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
        $__internal_e4acbac935e8fd99f03b020324bc3dd5b012a5cc6f7316848295c5901de1f35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4acbac935e8fd99f03b020324bc3dd5b012a5cc6f7316848295c5901de1f35e->enter($__internal_e4acbac935e8fd99f03b020324bc3dd5b012a5cc6f7316848295c5901de1f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_88179026252f25a5df26acddb54797a9b18b09cb2b5ffc7de420a83014dbc01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88179026252f25a5df26acddb54797a9b18b09cb2b5ffc7de420a83014dbc01b->enter($__internal_88179026252f25a5df26acddb54797a9b18b09cb2b5ffc7de420a83014dbc01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e4acbac935e8fd99f03b020324bc3dd5b012a5cc6f7316848295c5901de1f35e->leave($__internal_e4acbac935e8fd99f03b020324bc3dd5b012a5cc6f7316848295c5901de1f35e_prof);

        
        $__internal_88179026252f25a5df26acddb54797a9b18b09cb2b5ffc7de420a83014dbc01b->leave($__internal_88179026252f25a5df26acddb54797a9b18b09cb2b5ffc7de420a83014dbc01b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
