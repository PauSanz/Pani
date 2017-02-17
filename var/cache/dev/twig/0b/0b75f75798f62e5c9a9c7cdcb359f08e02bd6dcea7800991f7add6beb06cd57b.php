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
        $__internal_687b2951a2d97cd1f9b90399e57c3b3dfeea28d4047a5682e531725ff8d35fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687b2951a2d97cd1f9b90399e57c3b3dfeea28d4047a5682e531725ff8d35fb6->enter($__internal_687b2951a2d97cd1f9b90399e57c3b3dfeea28d4047a5682e531725ff8d35fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_07a1c5ef2cf32fce11676f698425b5ce03420be0ce1b6065feb1f11163be6066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a1c5ef2cf32fce11676f698425b5ce03420be0ce1b6065feb1f11163be6066->enter($__internal_07a1c5ef2cf32fce11676f698425b5ce03420be0ce1b6065feb1f11163be6066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_687b2951a2d97cd1f9b90399e57c3b3dfeea28d4047a5682e531725ff8d35fb6->leave($__internal_687b2951a2d97cd1f9b90399e57c3b3dfeea28d4047a5682e531725ff8d35fb6_prof);

        
        $__internal_07a1c5ef2cf32fce11676f698425b5ce03420be0ce1b6065feb1f11163be6066->leave($__internal_07a1c5ef2cf32fce11676f698425b5ce03420be0ce1b6065feb1f11163be6066_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ff2f990101a943bfdb4bb5dd014391e46f798caa4b659f4d114c50eb65f0caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff2f990101a943bfdb4bb5dd014391e46f798caa4b659f4d114c50eb65f0caf->enter($__internal_4ff2f990101a943bfdb4bb5dd014391e46f798caa4b659f4d114c50eb65f0caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b89492149c0216471314f83129b56d871de856d292feb61112f9acab182fa7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89492149c0216471314f83129b56d871de856d292feb61112f9acab182fa7a2->enter($__internal_b89492149c0216471314f83129b56d871de856d292feb61112f9acab182fa7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_b89492149c0216471314f83129b56d871de856d292feb61112f9acab182fa7a2->leave($__internal_b89492149c0216471314f83129b56d871de856d292feb61112f9acab182fa7a2_prof);

        
        $__internal_4ff2f990101a943bfdb4bb5dd014391e46f798caa4b659f4d114c50eb65f0caf->leave($__internal_4ff2f990101a943bfdb4bb5dd014391e46f798caa4b659f4d114c50eb65f0caf_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ef40f3046b352ad152ba3860273606c6c9b7d6af4df62743520d47dfc08c1c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef40f3046b352ad152ba3860273606c6c9b7d6af4df62743520d47dfc08c1c1c->enter($__internal_ef40f3046b352ad152ba3860273606c6c9b7d6af4df62743520d47dfc08c1c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_0e196ccdec2657682aeeb12758cf203e6d321551478ab4a0fa78fda1fc38707b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e196ccdec2657682aeeb12758cf203e6d321551478ab4a0fa78fda1fc38707b->enter($__internal_0e196ccdec2657682aeeb12758cf203e6d321551478ab4a0fa78fda1fc38707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0e196ccdec2657682aeeb12758cf203e6d321551478ab4a0fa78fda1fc38707b->leave($__internal_0e196ccdec2657682aeeb12758cf203e6d321551478ab4a0fa78fda1fc38707b_prof);

        
        $__internal_ef40f3046b352ad152ba3860273606c6c9b7d6af4df62743520d47dfc08c1c1c->leave($__internal_ef40f3046b352ad152ba3860273606c6c9b7d6af4df62743520d47dfc08c1c1c_prof);

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
