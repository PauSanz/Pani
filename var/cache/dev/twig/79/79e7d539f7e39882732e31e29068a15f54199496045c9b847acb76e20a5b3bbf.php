<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ab24f2235153d8586341136ecfa4c40c822c82cb45fd13caabeda3bf0ce320ac extends Twig_Template
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
        $__internal_2ecef2ae06ffefd7cbd4981d83c87db736a0875a3c8c5b76af6617d10849fe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecef2ae06ffefd7cbd4981d83c87db736a0875a3c8c5b76af6617d10849fe6c->enter($__internal_2ecef2ae06ffefd7cbd4981d83c87db736a0875a3c8c5b76af6617d10849fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_51c037394a25d26cc6af27bd6a9e01068d7c7b48944bcfc34b4b36d1f8d3f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c037394a25d26cc6af27bd6a9e01068d7c7b48944bcfc34b4b36d1f8d3f010->enter($__internal_51c037394a25d26cc6af27bd6a9e01068d7c7b48944bcfc34b4b36d1f8d3f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2ecef2ae06ffefd7cbd4981d83c87db736a0875a3c8c5b76af6617d10849fe6c->leave($__internal_2ecef2ae06ffefd7cbd4981d83c87db736a0875a3c8c5b76af6617d10849fe6c_prof);

        
        $__internal_51c037394a25d26cc6af27bd6a9e01068d7c7b48944bcfc34b4b36d1f8d3f010->leave($__internal_51c037394a25d26cc6af27bd6a9e01068d7c7b48944bcfc34b4b36d1f8d3f010_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
