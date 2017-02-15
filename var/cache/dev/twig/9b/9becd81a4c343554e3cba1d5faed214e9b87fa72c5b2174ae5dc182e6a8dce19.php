<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_677dc9632bc0d006f189b60e8038ef253ceef7af3a9d5fe64faad3b4c60ec606 extends Twig_Template
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
        $__internal_856072980738ee6ebb80b57049a8553be07c411f42fdfb96770506ab651c78db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856072980738ee6ebb80b57049a8553be07c411f42fdfb96770506ab651c78db->enter($__internal_856072980738ee6ebb80b57049a8553be07c411f42fdfb96770506ab651c78db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_01412989fd93ea69b2fe3be7b575041b7d7c5da0545e2a39b44474356155681c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01412989fd93ea69b2fe3be7b575041b7d7c5da0545e2a39b44474356155681c->enter($__internal_01412989fd93ea69b2fe3be7b575041b7d7c5da0545e2a39b44474356155681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:exception.txt.twig", 5)->display(array("exception" => $context["e"]));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_856072980738ee6ebb80b57049a8553be07c411f42fdfb96770506ab651c78db->leave($__internal_856072980738ee6ebb80b57049a8553be07c411f42fdfb96770506ab651c78db_prof);

        
        $__internal_01412989fd93ea69b2fe3be7b575041b7d7c5da0545e2a39b44474356155681c->leave($__internal_01412989fd93ea69b2fe3be7b575041b7d7c5da0545e2a39b44474356155681c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
