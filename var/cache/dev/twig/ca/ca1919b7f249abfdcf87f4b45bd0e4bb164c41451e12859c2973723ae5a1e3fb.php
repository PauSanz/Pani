<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_245737abc667b6eecd30fd82cb34cb59edd674c76fa74fe52bed2f389c2a0814 extends Twig_Template
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
        $__internal_80796e9e5e5aaa8673bafbc0f0b6f1fdec5a6167ac4679e945a6eef1c3aa331b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80796e9e5e5aaa8673bafbc0f0b6f1fdec5a6167ac4679e945a6eef1c3aa331b->enter($__internal_80796e9e5e5aaa8673bafbc0f0b6f1fdec5a6167ac4679e945a6eef1c3aa331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d3d186b9ab22fc6adf84f868e82f72b8636c3ff22ed0c420cb06459dee5622d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d186b9ab22fc6adf84f868e82f72b8636c3ff22ed0c420cb06459dee5622d9->enter($__internal_d3d186b9ab22fc6adf84f868e82f72b8636c3ff22ed0c420cb06459dee5622d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_80796e9e5e5aaa8673bafbc0f0b6f1fdec5a6167ac4679e945a6eef1c3aa331b->leave($__internal_80796e9e5e5aaa8673bafbc0f0b6f1fdec5a6167ac4679e945a6eef1c3aa331b_prof);

        
        $__internal_d3d186b9ab22fc6adf84f868e82f72b8636c3ff22ed0c420cb06459dee5622d9->leave($__internal_d3d186b9ab22fc6adf84f868e82f72b8636c3ff22ed0c420cb06459dee5622d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
