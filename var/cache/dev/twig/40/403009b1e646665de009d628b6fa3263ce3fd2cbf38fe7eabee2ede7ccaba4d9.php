<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_dc4b11f61b9e055890f971904ded84c554f2a0d795ea8fd049f3827526c661aa extends Twig_Template
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
        $__internal_ca22908c3e480b008b0e2761ce3f8bc5573c841235d99fb410f5f40490f29105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca22908c3e480b008b0e2761ce3f8bc5573c841235d99fb410f5f40490f29105->enter($__internal_ca22908c3e480b008b0e2761ce3f8bc5573c841235d99fb410f5f40490f29105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_995be6bf29899010b4f6ab41a31f3c506dc8ab578aa17af7bab3af5a5846ddfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995be6bf29899010b4f6ab41a31f3c506dc8ab578aa17af7bab3af5a5846ddfb->enter($__internal_995be6bf29899010b4f6ab41a31f3c506dc8ab578aa17af7bab3af5a5846ddfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_ca22908c3e480b008b0e2761ce3f8bc5573c841235d99fb410f5f40490f29105->leave($__internal_ca22908c3e480b008b0e2761ce3f8bc5573c841235d99fb410f5f40490f29105_prof);

        
        $__internal_995be6bf29899010b4f6ab41a31f3c506dc8ab578aa17af7bab3af5a5846ddfb->leave($__internal_995be6bf29899010b4f6ab41a31f3c506dc8ab578aa17af7bab3af5a5846ddfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
