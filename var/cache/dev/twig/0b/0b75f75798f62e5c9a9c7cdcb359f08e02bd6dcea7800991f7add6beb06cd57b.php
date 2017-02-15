<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_dce6f04f0767829feba0041dd8835e7e5656959f100a898ba595bd580f00cb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f09d168977bd50baa834af2f08c97f9ec8a6b9eff92dcba199982c2dcb024ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09d168977bd50baa834af2f08c97f9ec8a6b9eff92dcba199982c2dcb024ef5->enter($__internal_f09d168977bd50baa834af2f08c97f9ec8a6b9eff92dcba199982c2dcb024ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_228040cd4d8330ec8cbcaf722eb3df34b0e443fd4d76baf611de6d1f6bf6433f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228040cd4d8330ec8cbcaf722eb3df34b0e443fd4d76baf611de6d1f6bf6433f->enter($__internal_228040cd4d8330ec8cbcaf722eb3df34b0e443fd4d76baf611de6d1f6bf6433f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_f09d168977bd50baa834af2f08c97f9ec8a6b9eff92dcba199982c2dcb024ef5->leave($__internal_f09d168977bd50baa834af2f08c97f9ec8a6b9eff92dcba199982c2dcb024ef5_prof);

        
        $__internal_228040cd4d8330ec8cbcaf722eb3df34b0e443fd4d76baf611de6d1f6bf6433f->leave($__internal_228040cd4d8330ec8cbcaf722eb3df34b0e443fd4d76baf611de6d1f6bf6433f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_3614040aa18c3382d557e75dc71c1588f7b6d5d68dce1ef77d8f3679bf0d2905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3614040aa18c3382d557e75dc71c1588f7b6d5d68dce1ef77d8f3679bf0d2905->enter($__internal_3614040aa18c3382d557e75dc71c1588f7b6d5d68dce1ef77d8f3679bf0d2905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a7fab1902673ddec5b0942137bf3c153217833b37d3bbf2e85d89626276f565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7fab1902673ddec5b0942137bf3c153217833b37d3bbf2e85d89626276f565->enter($__internal_0a7fab1902673ddec5b0942137bf3c153217833b37d3bbf2e85d89626276f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_0a7fab1902673ddec5b0942137bf3c153217833b37d3bbf2e85d89626276f565->leave($__internal_0a7fab1902673ddec5b0942137bf3c153217833b37d3bbf2e85d89626276f565_prof);

        
        $__internal_3614040aa18c3382d557e75dc71c1588f7b6d5d68dce1ef77d8f3679bf0d2905->leave($__internal_3614040aa18c3382d557e75dc71c1588f7b6d5d68dce1ef77d8f3679bf0d2905_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee1068419ac078b22095f027557d3c41bcb5c3d2f72f1d007765a22d4210da05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1068419ac078b22095f027557d3c41bcb5c3d2f72f1d007765a22d4210da05->enter($__internal_ee1068419ac078b22095f027557d3c41bcb5c3d2f72f1d007765a22d4210da05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_58d49c1a1fa8a8cc0c40331fb858f1f8e89e4dde0408381176e3bb8b817da9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58d49c1a1fa8a8cc0c40331fb858f1f8e89e4dde0408381176e3bb8b817da9f7->enter($__internal_58d49c1a1fa8a8cc0c40331fb858f1f8e89e4dde0408381176e3bb8b817da9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["ref"] ?? $this->getContext($context, "ref")), "html", null, true);
        echo "</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "ref", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "data", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "hora", array()), "H:i:s"), "html", null, true);
        echo "</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "tipusvisita", array()), "tipus", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "descripcio", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "metgevisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "nom", array()), "html", null, true);
        echo "</p>                    
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visita"] ?? $this->getContext($context, "visita")), "pacientvisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                </div>
        </div>
    </div>
";
        
        $__internal_58d49c1a1fa8a8cc0c40331fb858f1f8e89e4dde0408381176e3bb8b817da9f7->leave($__internal_58d49c1a1fa8a8cc0c40331fb858f1f8e89e4dde0408381176e3bb8b817da9f7_prof);

        
        $__internal_ee1068419ac078b22095f027557d3c41bcb5c3d2f72f1d007765a22d4210da05->leave($__internal_ee1068419ac078b22095f027557d3c41bcb5c3d2f72f1d007765a22d4210da05_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:dtllsvisita.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  113 => 18,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  71 => 6,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Clinica Pani{% endblock %}
{% block page_content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">{{ ref }}</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>{{ visita.ref }}</p>
                    <p>{{ visita.data|date('d-m-Y') }}</p>
                    <p>{{ visita.hora|date('H:i:s') }}</p>
                    <p>{{ visita.tipusvisita.tipus }}</p>
                    <p>{{ visita.descripcio }}</p>
                    <p>{{ visita.metgevisitat.nom }}</p>
                    <p>{{ visita.metgevisitat.cognom }}</p>
                    <p>{{ visita.metgevisitat.dni }}</p>
                    <p>{{ visita.pacientvisitat.nom }}</p>                    
                    <p>{{ visita.pacientvisitat.cognom }}</p>
                    <p>{{ visita.pacientvisitat.dni }}</p>
                </div>
        </div>
    </div>
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/dtllsvisita.html.twig");
    }
}
