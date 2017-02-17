<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a51f3695669ca2b7a1da6af81355efc27dc4c2b30a776f845dfb0dbfb8eb941c extends Twig_Template
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
        $__internal_e1fefaf4b7b3258455cfd3dbb699ac14a0866a4e2f29d21f52b6f9968c5479af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fefaf4b7b3258455cfd3dbb699ac14a0866a4e2f29d21f52b6f9968c5479af->enter($__internal_e1fefaf4b7b3258455cfd3dbb699ac14a0866a4e2f29d21f52b6f9968c5479af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_a748ebd764128665ddebb15c0c4772149e6c336f9b1ff9c8ddd52dc3fd08380e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a748ebd764128665ddebb15c0c4772149e6c336f9b1ff9c8ddd52dc3fd08380e->enter($__internal_a748ebd764128665ddebb15c0c4772149e6c336f9b1ff9c8ddd52dc3fd08380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e1fefaf4b7b3258455cfd3dbb699ac14a0866a4e2f29d21f52b6f9968c5479af->leave($__internal_e1fefaf4b7b3258455cfd3dbb699ac14a0866a4e2f29d21f52b6f9968c5479af_prof);

        
        $__internal_a748ebd764128665ddebb15c0c4772149e6c336f9b1ff9c8ddd52dc3fd08380e->leave($__internal_a748ebd764128665ddebb15c0c4772149e6c336f9b1ff9c8ddd52dc3fd08380e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
