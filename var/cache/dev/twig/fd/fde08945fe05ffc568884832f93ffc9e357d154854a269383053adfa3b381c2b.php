<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c443dfc8997382417f00cd583f23c5c6b43695ff6845be3f77a69dda8f0fd765 extends Twig_Template
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
        $__internal_e3eecf3d9415e5258af432b924cb62c9d1eef0856becc833552d45e8ec1a8f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3eecf3d9415e5258af432b924cb62c9d1eef0856becc833552d45e8ec1a8f07->enter($__internal_e3eecf3d9415e5258af432b924cb62c9d1eef0856becc833552d45e8ec1a8f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d536a22e4d6b65561025995f08a463030f227a2a5e2c10ba4066170643323020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d536a22e4d6b65561025995f08a463030f227a2a5e2c10ba4066170643323020->enter($__internal_d536a22e4d6b65561025995f08a463030f227a2a5e2c10ba4066170643323020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e3eecf3d9415e5258af432b924cb62c9d1eef0856becc833552d45e8ec1a8f07->leave($__internal_e3eecf3d9415e5258af432b924cb62c9d1eef0856becc833552d45e8ec1a8f07_prof);

        
        $__internal_d536a22e4d6b65561025995f08a463030f227a2a5e2c10ba4066170643323020->leave($__internal_d536a22e4d6b65561025995f08a463030f227a2a5e2c10ba4066170643323020_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
