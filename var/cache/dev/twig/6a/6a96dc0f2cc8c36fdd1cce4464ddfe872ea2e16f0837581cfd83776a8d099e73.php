<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_133c100e45592e23d99a4c315bb0d2b7361fbfb09a8c923bdf732d987973e451 extends Twig_Template
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
        $__internal_c7739eaaad76debd567e7c0c5e0efb8af9bf5093276a5634e22002c5fa85fb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7739eaaad76debd567e7c0c5e0efb8af9bf5093276a5634e22002c5fa85fb17->enter($__internal_c7739eaaad76debd567e7c0c5e0efb8af9bf5093276a5634e22002c5fa85fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5c333a65812df296b02fc2a1afd25bfc504be2f55f6a768c368dfe42cf94e976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c333a65812df296b02fc2a1afd25bfc504be2f55f6a768c368dfe42cf94e976->enter($__internal_5c333a65812df296b02fc2a1afd25bfc504be2f55f6a768c368dfe42cf94e976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c7739eaaad76debd567e7c0c5e0efb8af9bf5093276a5634e22002c5fa85fb17->leave($__internal_c7739eaaad76debd567e7c0c5e0efb8af9bf5093276a5634e22002c5fa85fb17_prof);

        
        $__internal_5c333a65812df296b02fc2a1afd25bfc504be2f55f6a768c368dfe42cf94e976->leave($__internal_5c333a65812df296b02fc2a1afd25bfc504be2f55f6a768c368dfe42cf94e976_prof);

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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
