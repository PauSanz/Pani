<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_482170560928885b13281afc77b75879daee511d68bdfa1948a5fad4b86674c8 extends Twig_Template
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
        $__internal_63211d0772a83159d4b419827c2043a1ac4e99c187e22c999d1b1a95cda3b9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63211d0772a83159d4b419827c2043a1ac4e99c187e22c999d1b1a95cda3b9be->enter($__internal_63211d0772a83159d4b419827c2043a1ac4e99c187e22c999d1b1a95cda3b9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c1f2bb466008bcef88b94c574f7bfc8fdefc6d8bba3fd430d7daf004c68a82cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f2bb466008bcef88b94c574f7bfc8fdefc6d8bba3fd430d7daf004c68a82cc->enter($__internal_c1f2bb466008bcef88b94c574f7bfc8fdefc6d8bba3fd430d7daf004c68a82cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_63211d0772a83159d4b419827c2043a1ac4e99c187e22c999d1b1a95cda3b9be->leave($__internal_63211d0772a83159d4b419827c2043a1ac4e99c187e22c999d1b1a95cda3b9be_prof);

        
        $__internal_c1f2bb466008bcef88b94c574f7bfc8fdefc6d8bba3fd430d7daf004c68a82cc->leave($__internal_c1f2bb466008bcef88b94c574f7bfc8fdefc6d8bba3fd430d7daf004c68a82cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
