<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_393e6f8a91cefab8c77a8d48c1d3eb617e5ff6e8a7730df107f1543ce73355dc extends Twig_Template
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
        $__internal_10985938b6d0dfb9a6a74589759cd3a42ad69ab6f0ca270b16b8da5555900975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10985938b6d0dfb9a6a74589759cd3a42ad69ab6f0ca270b16b8da5555900975->enter($__internal_10985938b6d0dfb9a6a74589759cd3a42ad69ab6f0ca270b16b8da5555900975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_06cf12d3faed5160b765d68218a87fa17c374683d9e43b6d4ae573184e940dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cf12d3faed5160b765d68218a87fa17c374683d9e43b6d4ae573184e940dd5->enter($__internal_06cf12d3faed5160b765d68218a87fa17c374683d9e43b6d4ae573184e940dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_10985938b6d0dfb9a6a74589759cd3a42ad69ab6f0ca270b16b8da5555900975->leave($__internal_10985938b6d0dfb9a6a74589759cd3a42ad69ab6f0ca270b16b8da5555900975_prof);

        
        $__internal_06cf12d3faed5160b765d68218a87fa17c374683d9e43b6d4ae573184e940dd5->leave($__internal_06cf12d3faed5160b765d68218a87fa17c374683d9e43b6d4ae573184e940dd5_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f908e068f1c050f5d314591ed614ade5029ac9c38dd1174968fc3ac2ebfb8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f908e068f1c050f5d314591ed614ade5029ac9c38dd1174968fc3ac2ebfb8bc->enter($__internal_7f908e068f1c050f5d314591ed614ade5029ac9c38dd1174968fc3ac2ebfb8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53aee97158fa614ee6a2abd81531c99bd371278a7a71c15d58c4ab18a943d8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aee97158fa614ee6a2abd81531c99bd371278a7a71c15d58c4ab18a943d8cd->enter($__internal_53aee97158fa614ee6a2abd81531c99bd371278a7a71c15d58c4ab18a943d8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_53aee97158fa614ee6a2abd81531c99bd371278a7a71c15d58c4ab18a943d8cd->leave($__internal_53aee97158fa614ee6a2abd81531c99bd371278a7a71c15d58c4ab18a943d8cd_prof);

        
        $__internal_7f908e068f1c050f5d314591ed614ade5029ac9c38dd1174968fc3ac2ebfb8bc->leave($__internal_7f908e068f1c050f5d314591ed614ade5029ac9c38dd1174968fc3ac2ebfb8bc_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_83bbee71ff42f10aa09a2eedbced4fa781fed6d72693dc2798c1d3e01fc46210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bbee71ff42f10aa09a2eedbced4fa781fed6d72693dc2798c1d3e01fc46210->enter($__internal_83bbee71ff42f10aa09a2eedbced4fa781fed6d72693dc2798c1d3e01fc46210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1c5be948d997106cee16a3c79cfea136e14911c74de285d2bcb469280d790ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5be948d997106cee16a3c79cfea136e14911c74de285d2bcb469280d790ff3->enter($__internal_1c5be948d997106cee16a3c79cfea136e14911c74de285d2bcb469280d790ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_1c5be948d997106cee16a3c79cfea136e14911c74de285d2bcb469280d790ff3->leave($__internal_1c5be948d997106cee16a3c79cfea136e14911c74de285d2bcb469280d790ff3_prof);

        
        $__internal_83bbee71ff42f10aa09a2eedbced4fa781fed6d72693dc2798c1d3e01fc46210->leave($__internal_83bbee71ff42f10aa09a2eedbced4fa781fed6d72693dc2798c1d3e01fc46210_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\dtllsvisita.html.twig");
    }
}
