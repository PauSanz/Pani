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
        $__internal_61c16ee67c9213c9e859d4fd0f90bbdfe36e69379b5486d82a216a1383fe9a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c16ee67c9213c9e859d4fd0f90bbdfe36e69379b5486d82a216a1383fe9a69->enter($__internal_61c16ee67c9213c9e859d4fd0f90bbdfe36e69379b5486d82a216a1383fe9a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f0198d28fe646b4771fa92a269498cc32720470c0a75a1f8f53f6fd9f9baa429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0198d28fe646b4771fa92a269498cc32720470c0a75a1f8f53f6fd9f9baa429->enter($__internal_f0198d28fe646b4771fa92a269498cc32720470c0a75a1f8f53f6fd9f9baa429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_61c16ee67c9213c9e859d4fd0f90bbdfe36e69379b5486d82a216a1383fe9a69->leave($__internal_61c16ee67c9213c9e859d4fd0f90bbdfe36e69379b5486d82a216a1383fe9a69_prof);

        
        $__internal_f0198d28fe646b4771fa92a269498cc32720470c0a75a1f8f53f6fd9f9baa429->leave($__internal_f0198d28fe646b4771fa92a269498cc32720470c0a75a1f8f53f6fd9f9baa429_prof);

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
