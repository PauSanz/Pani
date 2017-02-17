<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9308a8ccba52188e80c554863505af1a2dee7de0f104544430be61cf936a5a28 extends Twig_Template
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
        $__internal_3c652b7beec796d029b2e2e2b2092329c3d274444e3eddeec60424ee5d47a6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c652b7beec796d029b2e2e2b2092329c3d274444e3eddeec60424ee5d47a6c2->enter($__internal_3c652b7beec796d029b2e2e2b2092329c3d274444e3eddeec60424ee5d47a6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bd46205d23fd6a2d16fdb696d38dc6b976eb2e622195f92b5c0837c08da43c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd46205d23fd6a2d16fdb696d38dc6b976eb2e622195f92b5c0837c08da43c8e->enter($__internal_bd46205d23fd6a2d16fdb696d38dc6b976eb2e622195f92b5c0837c08da43c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3c652b7beec796d029b2e2e2b2092329c3d274444e3eddeec60424ee5d47a6c2->leave($__internal_3c652b7beec796d029b2e2e2b2092329c3d274444e3eddeec60424ee5d47a6c2_prof);

        
        $__internal_bd46205d23fd6a2d16fdb696d38dc6b976eb2e622195f92b5c0837c08da43c8e->leave($__internal_bd46205d23fd6a2d16fdb696d38dc6b976eb2e622195f92b5c0837c08da43c8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
