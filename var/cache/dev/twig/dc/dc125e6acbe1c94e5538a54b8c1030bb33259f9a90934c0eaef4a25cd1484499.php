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
        $__internal_da6b26ba8bf459b4c51a10d2430c136ff964323887b14b503c79b02bb54ae43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6b26ba8bf459b4c51a10d2430c136ff964323887b14b503c79b02bb54ae43b->enter($__internal_da6b26ba8bf459b4c51a10d2430c136ff964323887b14b503c79b02bb54ae43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1abd514af16483c9a17388d28cfdc77e874be945467563dd686789828284aa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abd514af16483c9a17388d28cfdc77e874be945467563dd686789828284aa58->enter($__internal_1abd514af16483c9a17388d28cfdc77e874be945467563dd686789828284aa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_da6b26ba8bf459b4c51a10d2430c136ff964323887b14b503c79b02bb54ae43b->leave($__internal_da6b26ba8bf459b4c51a10d2430c136ff964323887b14b503c79b02bb54ae43b_prof);

        
        $__internal_1abd514af16483c9a17388d28cfdc77e874be945467563dd686789828284aa58->leave($__internal_1abd514af16483c9a17388d28cfdc77e874be945467563dd686789828284aa58_prof);

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
