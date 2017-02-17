<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_822f2919a17980553449eaea0ecdb79c7c80cdece5f90af3b967f820b1a85983 extends Twig_Template
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
        $__internal_d1c60b9f39bbba581fb4c9c6c5ee3b206ed306be558a0c1b80fdd4bd4d290673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c60b9f39bbba581fb4c9c6c5ee3b206ed306be558a0c1b80fdd4bd4d290673->enter($__internal_d1c60b9f39bbba581fb4c9c6c5ee3b206ed306be558a0c1b80fdd4bd4d290673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f8f1aac9dfba1361f356f3801b27f13cc5c5bd071cf8d4c678c8ee196a41667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f1aac9dfba1361f356f3801b27f13cc5c5bd071cf8d4c678c8ee196a41667d->enter($__internal_f8f1aac9dfba1361f356f3801b27f13cc5c5bd071cf8d4c678c8ee196a41667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d1c60b9f39bbba581fb4c9c6c5ee3b206ed306be558a0c1b80fdd4bd4d290673->leave($__internal_d1c60b9f39bbba581fb4c9c6c5ee3b206ed306be558a0c1b80fdd4bd4d290673_prof);

        
        $__internal_f8f1aac9dfba1361f356f3801b27f13cc5c5bd071cf8d4c678c8ee196a41667d->leave($__internal_f8f1aac9dfba1361f356f3801b27f13cc5c5bd071cf8d4c678c8ee196a41667d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
