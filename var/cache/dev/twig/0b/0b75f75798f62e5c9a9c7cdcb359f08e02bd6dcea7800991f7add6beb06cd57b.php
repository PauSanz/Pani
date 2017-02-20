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
        $__internal_a7b72ff91380e489bda98f71331bb9fcb1983fe4f2e629486c2ae039a055f0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b72ff91380e489bda98f71331bb9fcb1983fe4f2e629486c2ae039a055f0df->enter($__internal_a7b72ff91380e489bda98f71331bb9fcb1983fe4f2e629486c2ae039a055f0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_35668af275094c9c272f3f4f2e84cc1932e18efab8f6390a7a3b28e6269ab11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35668af275094c9c272f3f4f2e84cc1932e18efab8f6390a7a3b28e6269ab11c->enter($__internal_35668af275094c9c272f3f4f2e84cc1932e18efab8f6390a7a3b28e6269ab11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_a7b72ff91380e489bda98f71331bb9fcb1983fe4f2e629486c2ae039a055f0df->leave($__internal_a7b72ff91380e489bda98f71331bb9fcb1983fe4f2e629486c2ae039a055f0df_prof);

        
        $__internal_35668af275094c9c272f3f4f2e84cc1932e18efab8f6390a7a3b28e6269ab11c->leave($__internal_35668af275094c9c272f3f4f2e84cc1932e18efab8f6390a7a3b28e6269ab11c_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_915b4ffe8902e8c5020a741aea0b7636ed5890068a36cf29dd2c69388844fc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915b4ffe8902e8c5020a741aea0b7636ed5890068a36cf29dd2c69388844fc56->enter($__internal_915b4ffe8902e8c5020a741aea0b7636ed5890068a36cf29dd2c69388844fc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_112418c3a62cc9d49b06ac9f260d137ea12dadf1fb366946bab0fb277aaea2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112418c3a62cc9d49b06ac9f260d137ea12dadf1fb366946bab0fb277aaea2b8->enter($__internal_112418c3a62cc9d49b06ac9f260d137ea12dadf1fb366946bab0fb277aaea2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_112418c3a62cc9d49b06ac9f260d137ea12dadf1fb366946bab0fb277aaea2b8->leave($__internal_112418c3a62cc9d49b06ac9f260d137ea12dadf1fb366946bab0fb277aaea2b8_prof);

        
        $__internal_915b4ffe8902e8c5020a741aea0b7636ed5890068a36cf29dd2c69388844fc56->leave($__internal_915b4ffe8902e8c5020a741aea0b7636ed5890068a36cf29dd2c69388844fc56_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_17d0302672f98250f336bccda85aaf918050754ee81bdba56f7de2d4f53c44b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d0302672f98250f336bccda85aaf918050754ee81bdba56f7de2d4f53c44b5->enter($__internal_17d0302672f98250f336bccda85aaf918050754ee81bdba56f7de2d4f53c44b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_2d4d278549d3ba30c31aec531277a91739993a358d31be04850f1b14714e5a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4d278549d3ba30c31aec531277a91739993a358d31be04850f1b14714e5a3d->enter($__internal_2d4d278549d3ba30c31aec531277a91739993a358d31be04850f1b14714e5a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_2d4d278549d3ba30c31aec531277a91739993a358d31be04850f1b14714e5a3d->leave($__internal_2d4d278549d3ba30c31aec531277a91739993a358d31be04850f1b14714e5a3d_prof);

        
        $__internal_17d0302672f98250f336bccda85aaf918050754ee81bdba56f7de2d4f53c44b5->leave($__internal_17d0302672f98250f336bccda85aaf918050754ee81bdba56f7de2d4f53c44b5_prof);

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
