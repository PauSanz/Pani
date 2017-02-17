<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8f229c4ee0b268503cb5986d907bd7f0ff2ceb09b8af8d8ef212d7088726996 extends Twig_Template
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
        $__internal_33eaa45907affaf5dfd2611e2984d7a813783f00eebf300426c3730b0bd07cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33eaa45907affaf5dfd2611e2984d7a813783f00eebf300426c3730b0bd07cf3->enter($__internal_33eaa45907affaf5dfd2611e2984d7a813783f00eebf300426c3730b0bd07cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_78576c0f2b8fb37db293035555f038e51b2a938c59a70cc92bc80fe8cf578056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78576c0f2b8fb37db293035555f038e51b2a938c59a70cc92bc80fe8cf578056->enter($__internal_78576c0f2b8fb37db293035555f038e51b2a938c59a70cc92bc80fe8cf578056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_33eaa45907affaf5dfd2611e2984d7a813783f00eebf300426c3730b0bd07cf3->leave($__internal_33eaa45907affaf5dfd2611e2984d7a813783f00eebf300426c3730b0bd07cf3_prof);

        
        $__internal_78576c0f2b8fb37db293035555f038e51b2a938c59a70cc92bc80fe8cf578056->leave($__internal_78576c0f2b8fb37db293035555f038e51b2a938c59a70cc92bc80fe8cf578056_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
