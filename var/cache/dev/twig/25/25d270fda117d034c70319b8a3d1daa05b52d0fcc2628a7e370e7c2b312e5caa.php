<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48d9a140dbdd2a82d0f0f3384bf26717bb6c632e5405846ff3c606e797f62e52 extends Twig_Template
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
        $__internal_484d085151a9f8bd3488e6c33d89442f3f99ac6330e7a13dcc6daf02d29cac18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484d085151a9f8bd3488e6c33d89442f3f99ac6330e7a13dcc6daf02d29cac18->enter($__internal_484d085151a9f8bd3488e6c33d89442f3f99ac6330e7a13dcc6daf02d29cac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_09ad38c85a515e045b4c740f62080534eb51dbcff7598a76923a339f85168022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ad38c85a515e045b4c740f62080534eb51dbcff7598a76923a339f85168022->enter($__internal_09ad38c85a515e045b4c740f62080534eb51dbcff7598a76923a339f85168022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_484d085151a9f8bd3488e6c33d89442f3f99ac6330e7a13dcc6daf02d29cac18->leave($__internal_484d085151a9f8bd3488e6c33d89442f3f99ac6330e7a13dcc6daf02d29cac18_prof);

        
        $__internal_09ad38c85a515e045b4c740f62080534eb51dbcff7598a76923a339f85168022->leave($__internal_09ad38c85a515e045b4c740f62080534eb51dbcff7598a76923a339f85168022_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
