<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deaf84387804f983f536b2148d97baa1f821895251e92db3f06215e7a1a3d1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e6ce8f63ee3e84d153cd453edae6ade020a18d72dd5428352b9059a4712c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e6ce8f63ee3e84d153cd453edae6ade020a18d72dd5428352b9059a4712c0c->enter($__internal_39e6ce8f63ee3e84d153cd453edae6ade020a18d72dd5428352b9059a4712c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_613c6c108458e55e33d19ca866e54fa76186e0c38ad173b6dc3ce825938e72e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613c6c108458e55e33d19ca866e54fa76186e0c38ad173b6dc3ce825938e72e5->enter($__internal_613c6c108458e55e33d19ca866e54fa76186e0c38ad173b6dc3ce825938e72e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_39e6ce8f63ee3e84d153cd453edae6ade020a18d72dd5428352b9059a4712c0c->leave($__internal_39e6ce8f63ee3e84d153cd453edae6ade020a18d72dd5428352b9059a4712c0c_prof);

        
        $__internal_613c6c108458e55e33d19ca866e54fa76186e0c38ad173b6dc3ce825938e72e5->leave($__internal_613c6c108458e55e33d19ca866e54fa76186e0c38ad173b6dc3ce825938e72e5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6308a3573aa3a71e742017a41937c6148812f467c21f398e06415aba139e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6308a3573aa3a71e742017a41937c6148812f467c21f398e06415aba139e7e->enter($__internal_7e6308a3573aa3a71e742017a41937c6148812f467c21f398e06415aba139e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45cd2e2c0942286e2a68d33f7c763f3462f9e7c43ecd029a476d182575d21872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cd2e2c0942286e2a68d33f7c763f3462f9e7c43ecd029a476d182575d21872->enter($__internal_45cd2e2c0942286e2a68d33f7c763f3462f9e7c43ecd029a476d182575d21872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_45cd2e2c0942286e2a68d33f7c763f3462f9e7c43ecd029a476d182575d21872->leave($__internal_45cd2e2c0942286e2a68d33f7c763f3462f9e7c43ecd029a476d182575d21872_prof);

        
        $__internal_7e6308a3573aa3a71e742017a41937c6148812f467c21f398e06415aba139e7e->leave($__internal_7e6308a3573aa3a71e742017a41937c6148812f467c21f398e06415aba139e7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
