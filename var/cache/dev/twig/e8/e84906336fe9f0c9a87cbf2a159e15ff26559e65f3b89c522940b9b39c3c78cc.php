<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
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
        $__internal_1d62c99dda20084ffd8069e347e882ccaaabc6968de7a493de73563f5c9a5c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d62c99dda20084ffd8069e347e882ccaaabc6968de7a493de73563f5c9a5c76->enter($__internal_1d62c99dda20084ffd8069e347e882ccaaabc6968de7a493de73563f5c9a5c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_064e1a118d7a9311252bc6b335fd8d1af6c6430bd2b065fe66094c1599553f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064e1a118d7a9311252bc6b335fd8d1af6c6430bd2b065fe66094c1599553f73->enter($__internal_064e1a118d7a9311252bc6b335fd8d1af6c6430bd2b065fe66094c1599553f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1d62c99dda20084ffd8069e347e882ccaaabc6968de7a493de73563f5c9a5c76->leave($__internal_1d62c99dda20084ffd8069e347e882ccaaabc6968de7a493de73563f5c9a5c76_prof);

        
        $__internal_064e1a118d7a9311252bc6b335fd8d1af6c6430bd2b065fe66094c1599553f73->leave($__internal_064e1a118d7a9311252bc6b335fd8d1af6c6430bd2b065fe66094c1599553f73_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
