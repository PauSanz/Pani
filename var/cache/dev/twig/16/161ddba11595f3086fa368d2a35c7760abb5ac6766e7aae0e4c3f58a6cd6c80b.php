<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_20f36ce34f678de2064a002ebae39d4801c8ea7ed6b200715bc4688c0b891659 extends Twig_Template
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
        $__internal_9ca9cb88a26be258608ceb91ba8904fe7f5102c93cef323d68955037812b1665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca9cb88a26be258608ceb91ba8904fe7f5102c93cef323d68955037812b1665->enter($__internal_9ca9cb88a26be258608ceb91ba8904fe7f5102c93cef323d68955037812b1665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_98ffeaae68bf877c6a1ffce6725c74e68e7e105f74356308a8e9a42909c6cacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ffeaae68bf877c6a1ffce6725c74e68e7e105f74356308a8e9a42909c6cacf->enter($__internal_98ffeaae68bf877c6a1ffce6725c74e68e7e105f74356308a8e9a42909c6cacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9ca9cb88a26be258608ceb91ba8904fe7f5102c93cef323d68955037812b1665->leave($__internal_9ca9cb88a26be258608ceb91ba8904fe7f5102c93cef323d68955037812b1665_prof);

        
        $__internal_98ffeaae68bf877c6a1ffce6725c74e68e7e105f74356308a8e9a42909c6cacf->leave($__internal_98ffeaae68bf877c6a1ffce6725c74e68e7e105f74356308a8e9a42909c6cacf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
