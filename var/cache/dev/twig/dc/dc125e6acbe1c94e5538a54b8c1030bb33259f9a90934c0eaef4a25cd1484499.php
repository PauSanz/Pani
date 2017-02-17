<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07ab2b47a7c7384585cd46d73a30e58ea94ed9487b1d7d18a4c7b4ad9bf56b9a extends Twig_Template
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
        $__internal_804f230ba843517cf2f6dbb1dcb74ba9d7a0565f43dcf8a6bfbc02ae1616b56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804f230ba843517cf2f6dbb1dcb74ba9d7a0565f43dcf8a6bfbc02ae1616b56b->enter($__internal_804f230ba843517cf2f6dbb1dcb74ba9d7a0565f43dcf8a6bfbc02ae1616b56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_06ea171ea6d2b5d65748f7f7f36d02e99ad5fba40ce8c49ad10c127be6e8d43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ea171ea6d2b5d65748f7f7f36d02e99ad5fba40ce8c49ad10c127be6e8d43a->enter($__internal_06ea171ea6d2b5d65748f7f7f36d02e99ad5fba40ce8c49ad10c127be6e8d43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_804f230ba843517cf2f6dbb1dcb74ba9d7a0565f43dcf8a6bfbc02ae1616b56b->leave($__internal_804f230ba843517cf2f6dbb1dcb74ba9d7a0565f43dcf8a6bfbc02ae1616b56b_prof);

        
        $__internal_06ea171ea6d2b5d65748f7f7f36d02e99ad5fba40ce8c49ad10c127be6e8d43a->leave($__internal_06ea171ea6d2b5d65748f7f7f36d02e99ad5fba40ce8c49ad10c127be6e8d43a_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
