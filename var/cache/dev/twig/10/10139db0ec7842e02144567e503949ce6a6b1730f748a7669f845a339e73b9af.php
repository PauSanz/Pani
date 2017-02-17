<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e340f7fc21c468ae34188b011f0a77ce04653697dac808cfae2fef3a9223058 extends Twig_Template
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
        $__internal_90de7f3d211868de3b69288559b498c6e8915039d92a404806bc4739e6fb4ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90de7f3d211868de3b69288559b498c6e8915039d92a404806bc4739e6fb4ae4->enter($__internal_90de7f3d211868de3b69288559b498c6e8915039d92a404806bc4739e6fb4ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5eb8a94f3f261ec96cd0729ded60f18e5b785f6a6d975fa52d44e0e5107b657c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb8a94f3f261ec96cd0729ded60f18e5b785f6a6d975fa52d44e0e5107b657c->enter($__internal_5eb8a94f3f261ec96cd0729ded60f18e5b785f6a6d975fa52d44e0e5107b657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_90de7f3d211868de3b69288559b498c6e8915039d92a404806bc4739e6fb4ae4->leave($__internal_90de7f3d211868de3b69288559b498c6e8915039d92a404806bc4739e6fb4ae4_prof);

        
        $__internal_5eb8a94f3f261ec96cd0729ded60f18e5b785f6a6d975fa52d44e0e5107b657c->leave($__internal_5eb8a94f3f261ec96cd0729ded60f18e5b785f6a6d975fa52d44e0e5107b657c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
