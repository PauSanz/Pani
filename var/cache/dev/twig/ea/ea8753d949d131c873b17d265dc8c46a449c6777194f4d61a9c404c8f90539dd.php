<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f0f06e433ec143ef21bc214e9c967e0f4bb2fd3dc910a86dec11f21110be4dad extends Twig_Template
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
        $__internal_dcaf8e107f4e57fa8e33a6dcca367cc9147eefbe5f64a94e42849e518fc6811a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcaf8e107f4e57fa8e33a6dcca367cc9147eefbe5f64a94e42849e518fc6811a->enter($__internal_dcaf8e107f4e57fa8e33a6dcca367cc9147eefbe5f64a94e42849e518fc6811a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e82e1b2c8b6bd7fef8ca5b61ca5ef41a74857d591e892ee4339f4790c5b99921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82e1b2c8b6bd7fef8ca5b61ca5ef41a74857d591e892ee4339f4790c5b99921->enter($__internal_e82e1b2c8b6bd7fef8ca5b61ca5ef41a74857d591e892ee4339f4790c5b99921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_dcaf8e107f4e57fa8e33a6dcca367cc9147eefbe5f64a94e42849e518fc6811a->leave($__internal_dcaf8e107f4e57fa8e33a6dcca367cc9147eefbe5f64a94e42849e518fc6811a_prof);

        
        $__internal_e82e1b2c8b6bd7fef8ca5b61ca5ef41a74857d591e892ee4339f4790c5b99921->leave($__internal_e82e1b2c8b6bd7fef8ca5b61ca5ef41a74857d591e892ee4339f4790c5b99921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
