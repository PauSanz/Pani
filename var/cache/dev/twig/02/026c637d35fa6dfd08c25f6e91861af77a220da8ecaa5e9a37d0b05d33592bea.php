<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0c0667108b7526b278f58daca20e3415e962b60926beb668d392a86ebfb5b787 extends Twig_Template
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
        $__internal_0510de47bd4e48174124a4cf630bd35f3da93ed589fda6d9e9ccc0d4a7d1d28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0510de47bd4e48174124a4cf630bd35f3da93ed589fda6d9e9ccc0d4a7d1d28c->enter($__internal_0510de47bd4e48174124a4cf630bd35f3da93ed589fda6d9e9ccc0d4a7d1d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f83ee44fe076e09eefa00cdfbda967f0b7c1eabfe3a9c611848d145c04d897f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83ee44fe076e09eefa00cdfbda967f0b7c1eabfe3a9c611848d145c04d897f3->enter($__internal_f83ee44fe076e09eefa00cdfbda967f0b7c1eabfe3a9c611848d145c04d897f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0510de47bd4e48174124a4cf630bd35f3da93ed589fda6d9e9ccc0d4a7d1d28c->leave($__internal_0510de47bd4e48174124a4cf630bd35f3da93ed589fda6d9e9ccc0d4a7d1d28c_prof);

        
        $__internal_f83ee44fe076e09eefa00cdfbda967f0b7c1eabfe3a9c611848d145c04d897f3->leave($__internal_f83ee44fe076e09eefa00cdfbda967f0b7c1eabfe3a9c611848d145c04d897f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
