<?php

/* @clinicaPani/Default/dtllsvisita.html.twig */
class __TwigTemplate_0d2b9291a32e5eecb9ac8ffc4d29bf16428185c5347d44a35de9ebe2f1002bf1 extends Twig_Template
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
        $__internal_f35f1dda845fefbd56541fc343e9ff2092f7c99f0bbae7c0d3d2ad8a64af2bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f1dda845fefbd56541fc343e9ff2092f7c99f0bbae7c0d3d2ad8a64af2bb8->enter($__internal_f35f1dda845fefbd56541fc343e9ff2092f7c99f0bbae7c0d3d2ad8a64af2bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/dtllsvisita.html.twig"));

        $__internal_d7709ae35b317a2317c51dd3e515e3c751b7f320130e4cc16112bb8f1007c28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7709ae35b317a2317c51dd3e515e3c751b7f320130e4cc16112bb8f1007c28d->enter($__internal_d7709ae35b317a2317c51dd3e515e3c751b7f320130e4cc16112bb8f1007c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_f35f1dda845fefbd56541fc343e9ff2092f7c99f0bbae7c0d3d2ad8a64af2bb8->leave($__internal_f35f1dda845fefbd56541fc343e9ff2092f7c99f0bbae7c0d3d2ad8a64af2bb8_prof);

        
        $__internal_d7709ae35b317a2317c51dd3e515e3c751b7f320130e4cc16112bb8f1007c28d->leave($__internal_d7709ae35b317a2317c51dd3e515e3c751b7f320130e4cc16112bb8f1007c28d_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_80f5dc2dd35f5acc73e15b31a4a90af6a658f07f8353934e8829ce39dd969525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f5dc2dd35f5acc73e15b31a4a90af6a658f07f8353934e8829ce39dd969525->enter($__internal_80f5dc2dd35f5acc73e15b31a4a90af6a658f07f8353934e8829ce39dd969525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4ffdceb26133d8cb92d47375780fe85dbf0e48553dc388326881aa5d68ee942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ffdceb26133d8cb92d47375780fe85dbf0e48553dc388326881aa5d68ee942->enter($__internal_d4ffdceb26133d8cb92d47375780fe85dbf0e48553dc388326881aa5d68ee942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_d4ffdceb26133d8cb92d47375780fe85dbf0e48553dc388326881aa5d68ee942->leave($__internal_d4ffdceb26133d8cb92d47375780fe85dbf0e48553dc388326881aa5d68ee942_prof);

        
        $__internal_80f5dc2dd35f5acc73e15b31a4a90af6a658f07f8353934e8829ce39dd969525->leave($__internal_80f5dc2dd35f5acc73e15b31a4a90af6a658f07f8353934e8829ce39dd969525_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_06425d1c732c9af154aafbec4ca98a4e93f524092857992a2fbe87e32ad93fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06425d1c732c9af154aafbec4ca98a4e93f524092857992a2fbe87e32ad93fbc->enter($__internal_06425d1c732c9af154aafbec4ca98a4e93f524092857992a2fbe87e32ad93fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_c49cdb28d8b0eb06dd237a6a135b988801149aedaec4040a6bcfb2c82a1f96ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49cdb28d8b0eb06dd237a6a135b988801149aedaec4040a6bcfb2c82a1f96ae->enter($__internal_c49cdb28d8b0eb06dd237a6a135b988801149aedaec4040a6bcfb2c82a1f96ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
        echo "</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "ref", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "data", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "hora", array()), "H:i:s"), "html", null, true);
        echo "</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "tipusvisita", array()), "tipus", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "descripcio", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "nom", array()), "html", null, true);
        echo "</p>                    
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                </div>
        </div>
    </div>
";
        
        $__internal_c49cdb28d8b0eb06dd237a6a135b988801149aedaec4040a6bcfb2c82a1f96ae->leave($__internal_c49cdb28d8b0eb06dd237a6a135b988801149aedaec4040a6bcfb2c82a1f96ae_prof);

        
        $__internal_06425d1c732c9af154aafbec4ca98a4e93f524092857992a2fbe87e32ad93fbc->leave($__internal_06425d1c732c9af154aafbec4ca98a4e93f524092857992a2fbe87e32ad93fbc_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/dtllsvisita.html.twig";
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
{% endblock %}", "@clinicaPani/Default/dtllsvisita.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\dtllsvisita.html.twig");
    }
}
