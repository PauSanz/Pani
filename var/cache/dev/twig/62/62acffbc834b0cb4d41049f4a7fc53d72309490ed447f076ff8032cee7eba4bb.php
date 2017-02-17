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
        $__internal_5c29f60961d83ffc22ffc03e40be6eba4908493f6bc4366899e8b841dd631359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c29f60961d83ffc22ffc03e40be6eba4908493f6bc4366899e8b841dd631359->enter($__internal_5c29f60961d83ffc22ffc03e40be6eba4908493f6bc4366899e8b841dd631359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3e877569e3b8554ab1508477f907a315e7844bce3b08982abb475634e936b4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e877569e3b8554ab1508477f907a315e7844bce3b08982abb475634e936b4f5->enter($__internal_3e877569e3b8554ab1508477f907a315e7844bce3b08982abb475634e936b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5c29f60961d83ffc22ffc03e40be6eba4908493f6bc4366899e8b841dd631359->leave($__internal_5c29f60961d83ffc22ffc03e40be6eba4908493f6bc4366899e8b841dd631359_prof);

        
        $__internal_3e877569e3b8554ab1508477f907a315e7844bce3b08982abb475634e936b4f5->leave($__internal_3e877569e3b8554ab1508477f907a315e7844bce3b08982abb475634e936b4f5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fcaf21e24c0d6e63f96064c855b429f3bfa66c03c009dc54c60591866158420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcaf21e24c0d6e63f96064c855b429f3bfa66c03c009dc54c60591866158420->enter($__internal_7fcaf21e24c0d6e63f96064c855b429f3bfa66c03c009dc54c60591866158420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3540c7723082cb74009e0f80b1ef53e0fc6e36fcb3029c650d447c8904d63a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3540c7723082cb74009e0f80b1ef53e0fc6e36fcb3029c650d447c8904d63a1f->enter($__internal_3540c7723082cb74009e0f80b1ef53e0fc6e36fcb3029c650d447c8904d63a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3540c7723082cb74009e0f80b1ef53e0fc6e36fcb3029c650d447c8904d63a1f->leave($__internal_3540c7723082cb74009e0f80b1ef53e0fc6e36fcb3029c650d447c8904d63a1f_prof);

        
        $__internal_7fcaf21e24c0d6e63f96064c855b429f3bfa66c03c009dc54c60591866158420->leave($__internal_7fcaf21e24c0d6e63f96064c855b429f3bfa66c03c009dc54c60591866158420_prof);

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
