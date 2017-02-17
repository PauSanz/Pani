<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_80d6a99a23793ca81696969ea4f35323e35ed20ee3e4b7d0d0c3359762f4ed7d extends Twig_Template
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
        $__internal_84c2191cb6d77fbbbeef957e29bdf659e697937a7060e5d6c20cc20ce0b8208d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c2191cb6d77fbbbeef957e29bdf659e697937a7060e5d6c20cc20ce0b8208d->enter($__internal_84c2191cb6d77fbbbeef957e29bdf659e697937a7060e5d6c20cc20ce0b8208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b0d5f41d1ad8820320f7c93497397873c5d2cd1a554f30e04efce5ab564bdd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d5f41d1ad8820320f7c93497397873c5d2cd1a554f30e04efce5ab564bdd27->enter($__internal_b0d5f41d1ad8820320f7c93497397873c5d2cd1a554f30e04efce5ab564bdd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_84c2191cb6d77fbbbeef957e29bdf659e697937a7060e5d6c20cc20ce0b8208d->leave($__internal_84c2191cb6d77fbbbeef957e29bdf659e697937a7060e5d6c20cc20ce0b8208d_prof);

        
        $__internal_b0d5f41d1ad8820320f7c93497397873c5d2cd1a554f30e04efce5ab564bdd27->leave($__internal_b0d5f41d1ad8820320f7c93497397873c5d2cd1a554f30e04efce5ab564bdd27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
