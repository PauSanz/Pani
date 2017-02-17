<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_98a9a4396d6e89c7b6d1714fa615b21d3f45d75d12f624041c54d4d2d30fe328 extends Twig_Template
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
        $__internal_aca23a177b1bfeab18fdb39aa182947f0a7c79cfcc9bab809b2ed5d7ee9aabdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca23a177b1bfeab18fdb39aa182947f0a7c79cfcc9bab809b2ed5d7ee9aabdd->enter($__internal_aca23a177b1bfeab18fdb39aa182947f0a7c79cfcc9bab809b2ed5d7ee9aabdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b1886b1d61f44a96c5b724cf71e68ee9b660c198fb420d85ee02e2cebe4c4f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1886b1d61f44a96c5b724cf71e68ee9b660c198fb420d85ee02e2cebe4c4f14->enter($__internal_b1886b1d61f44a96c5b724cf71e68ee9b660c198fb420d85ee02e2cebe4c4f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aca23a177b1bfeab18fdb39aa182947f0a7c79cfcc9bab809b2ed5d7ee9aabdd->leave($__internal_aca23a177b1bfeab18fdb39aa182947f0a7c79cfcc9bab809b2ed5d7ee9aabdd_prof);

        
        $__internal_b1886b1d61f44a96c5b724cf71e68ee9b660c198fb420d85ee02e2cebe4c4f14->leave($__internal_b1886b1d61f44a96c5b724cf71e68ee9b660c198fb420d85ee02e2cebe4c4f14_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20a0aa7126f28c0dfee89005ec03be041929cd3d957998b60f5a3deb92529d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a0aa7126f28c0dfee89005ec03be041929cd3d957998b60f5a3deb92529d0e->enter($__internal_20a0aa7126f28c0dfee89005ec03be041929cd3d957998b60f5a3deb92529d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95e90f43a7f52e3d222d4a8744231efb53502a01ee6d96d17e00b800ccabd406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e90f43a7f52e3d222d4a8744231efb53502a01ee6d96d17e00b800ccabd406->enter($__internal_95e90f43a7f52e3d222d4a8744231efb53502a01ee6d96d17e00b800ccabd406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_95e90f43a7f52e3d222d4a8744231efb53502a01ee6d96d17e00b800ccabd406->leave($__internal_95e90f43a7f52e3d222d4a8744231efb53502a01ee6d96d17e00b800ccabd406_prof);

        
        $__internal_20a0aa7126f28c0dfee89005ec03be041929cd3d957998b60f5a3deb92529d0e->leave($__internal_20a0aa7126f28c0dfee89005ec03be041929cd3d957998b60f5a3deb92529d0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
