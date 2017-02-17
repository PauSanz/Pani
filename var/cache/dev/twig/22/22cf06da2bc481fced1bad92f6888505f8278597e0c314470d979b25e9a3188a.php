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
        $__internal_a0de49b4a38319fe0fc06e399a37e003a1a25d874cdffbaa13068534d8b76b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0de49b4a38319fe0fc06e399a37e003a1a25d874cdffbaa13068534d8b76b90->enter($__internal_a0de49b4a38319fe0fc06e399a37e003a1a25d874cdffbaa13068534d8b76b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cc79651b043ce947054bb47cc2274f94be70a8cbb1bb1e2587df72647a4a6c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc79651b043ce947054bb47cc2274f94be70a8cbb1bb1e2587df72647a4a6c5b->enter($__internal_cc79651b043ce947054bb47cc2274f94be70a8cbb1bb1e2587df72647a4a6c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a0de49b4a38319fe0fc06e399a37e003a1a25d874cdffbaa13068534d8b76b90->leave($__internal_a0de49b4a38319fe0fc06e399a37e003a1a25d874cdffbaa13068534d8b76b90_prof);

        
        $__internal_cc79651b043ce947054bb47cc2274f94be70a8cbb1bb1e2587df72647a4a6c5b->leave($__internal_cc79651b043ce947054bb47cc2274f94be70a8cbb1bb1e2587df72647a4a6c5b_prof);

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
