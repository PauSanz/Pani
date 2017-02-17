<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0efabb0a254e1dd77f2b0e483f9f953b2fd764cdf747306ef18b67c0ba03caa8 extends Twig_Template
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
        $__internal_561f6314543eb143e1b36ba3518b6178863062c3553f96477ea93f3124ac83c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561f6314543eb143e1b36ba3518b6178863062c3553f96477ea93f3124ac83c0->enter($__internal_561f6314543eb143e1b36ba3518b6178863062c3553f96477ea93f3124ac83c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e924dd6b2710ba1473b9bdd49503c49f474cb76826e4f8e3d54ba1c833ca3165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e924dd6b2710ba1473b9bdd49503c49f474cb76826e4f8e3d54ba1c833ca3165->enter($__internal_e924dd6b2710ba1473b9bdd49503c49f474cb76826e4f8e3d54ba1c833ca3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_561f6314543eb143e1b36ba3518b6178863062c3553f96477ea93f3124ac83c0->leave($__internal_561f6314543eb143e1b36ba3518b6178863062c3553f96477ea93f3124ac83c0_prof);

        
        $__internal_e924dd6b2710ba1473b9bdd49503c49f474cb76826e4f8e3d54ba1c833ca3165->leave($__internal_e924dd6b2710ba1473b9bdd49503c49f474cb76826e4f8e3d54ba1c833ca3165_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
