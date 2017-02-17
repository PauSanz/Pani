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
        $__internal_17580f104569bfaa3ab297bd3bbf37f39f6bbfe0c0ff03933c9abcf2c1697fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17580f104569bfaa3ab297bd3bbf37f39f6bbfe0c0ff03933c9abcf2c1697fd5->enter($__internal_17580f104569bfaa3ab297bd3bbf37f39f6bbfe0c0ff03933c9abcf2c1697fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_55a1ceead9ed7ab0a9e67c13df8433f0844a7397db3541e419eef70709150530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a1ceead9ed7ab0a9e67c13df8433f0844a7397db3541e419eef70709150530->enter($__internal_55a1ceead9ed7ab0a9e67c13df8433f0844a7397db3541e419eef70709150530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_17580f104569bfaa3ab297bd3bbf37f39f6bbfe0c0ff03933c9abcf2c1697fd5->leave($__internal_17580f104569bfaa3ab297bd3bbf37f39f6bbfe0c0ff03933c9abcf2c1697fd5_prof);

        
        $__internal_55a1ceead9ed7ab0a9e67c13df8433f0844a7397db3541e419eef70709150530->leave($__internal_55a1ceead9ed7ab0a9e67c13df8433f0844a7397db3541e419eef70709150530_prof);

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
