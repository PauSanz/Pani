<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0e6c94996293795a39cf37d4f4f9f7cd6f0f4480a01afcf77fa000d801671c33 extends Twig_Template
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
        $__internal_5d1f1b6f2d0be239169291ce1b3d8d460851c1eed5227151d3ddc42753f4a9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1f1b6f2d0be239169291ce1b3d8d460851c1eed5227151d3ddc42753f4a9e1->enter($__internal_5d1f1b6f2d0be239169291ce1b3d8d460851c1eed5227151d3ddc42753f4a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2a9b74002416267324fa69323b079acdd710fce8553163615073fbe633c89acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9b74002416267324fa69323b079acdd710fce8553163615073fbe633c89acf->enter($__internal_2a9b74002416267324fa69323b079acdd710fce8553163615073fbe633c89acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5d1f1b6f2d0be239169291ce1b3d8d460851c1eed5227151d3ddc42753f4a9e1->leave($__internal_5d1f1b6f2d0be239169291ce1b3d8d460851c1eed5227151d3ddc42753f4a9e1_prof);

        
        $__internal_2a9b74002416267324fa69323b079acdd710fce8553163615073fbe633c89acf->leave($__internal_2a9b74002416267324fa69323b079acdd710fce8553163615073fbe633c89acf_prof);

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
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
