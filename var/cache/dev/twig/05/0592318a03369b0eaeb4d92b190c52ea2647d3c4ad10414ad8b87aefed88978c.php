<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_27dfc0357f4a86ef8dd9df905b055f309b691c61cae3b23e342a366881a19fbb extends Twig_Template
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
        $__internal_b31e9c06b87e5ee7ebfc53fc86b453556732ef9421aceecd4297b7db30da6b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31e9c06b87e5ee7ebfc53fc86b453556732ef9421aceecd4297b7db30da6b04->enter($__internal_b31e9c06b87e5ee7ebfc53fc86b453556732ef9421aceecd4297b7db30da6b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a8b8d3f95cca7bd560f762d4bbde1c435decf6c4aa74f044f6cac0d74da8f2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b8d3f95cca7bd560f762d4bbde1c435decf6c4aa74f044f6cac0d74da8f2c4->enter($__internal_a8b8d3f95cca7bd560f762d4bbde1c435decf6c4aa74f044f6cac0d74da8f2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b31e9c06b87e5ee7ebfc53fc86b453556732ef9421aceecd4297b7db30da6b04->leave($__internal_b31e9c06b87e5ee7ebfc53fc86b453556732ef9421aceecd4297b7db30da6b04_prof);

        
        $__internal_a8b8d3f95cca7bd560f762d4bbde1c435decf6c4aa74f044f6cac0d74da8f2c4->leave($__internal_a8b8d3f95cca7bd560f762d4bbde1c435decf6c4aa74f044f6cac0d74da8f2c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
