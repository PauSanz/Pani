<?php

/* @clinicaPani/Default/dtllsvisita.html.twig */
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
        $__internal_00a6440dd1b2e2e5e8602353122e95aaaecd44c4b8f1190a33e1b9b2d6a26246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a6440dd1b2e2e5e8602353122e95aaaecd44c4b8f1190a33e1b9b2d6a26246->enter($__internal_00a6440dd1b2e2e5e8602353122e95aaaecd44c4b8f1190a33e1b9b2d6a26246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/dtllsvisita.html.twig"));

        $__internal_05c0d4339792a50076cc95904b201a91e7237ba9fd8c8676c4370adff6660f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c0d4339792a50076cc95904b201a91e7237ba9fd8c8676c4370adff6660f66->enter($__internal_05c0d4339792a50076cc95904b201a91e7237ba9fd8c8676c4370adff6660f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_00a6440dd1b2e2e5e8602353122e95aaaecd44c4b8f1190a33e1b9b2d6a26246->leave($__internal_00a6440dd1b2e2e5e8602353122e95aaaecd44c4b8f1190a33e1b9b2d6a26246_prof);

        
        $__internal_05c0d4339792a50076cc95904b201a91e7237ba9fd8c8676c4370adff6660f66->leave($__internal_05c0d4339792a50076cc95904b201a91e7237ba9fd8c8676c4370adff6660f66_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_98a29a5532fe23ac3c5eb71da1e0108912a5de36a88c4fb5fb8c7ce211db16b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a29a5532fe23ac3c5eb71da1e0108912a5de36a88c4fb5fb8c7ce211db16b5->enter($__internal_98a29a5532fe23ac3c5eb71da1e0108912a5de36a88c4fb5fb8c7ce211db16b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ef36e8a94e57edb3980a1785cb6cd3d645399d68c5012d8d8a6c2efb2c84238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef36e8a94e57edb3980a1785cb6cd3d645399d68c5012d8d8a6c2efb2c84238->enter($__internal_7ef36e8a94e57edb3980a1785cb6cd3d645399d68c5012d8d8a6c2efb2c84238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_7ef36e8a94e57edb3980a1785cb6cd3d645399d68c5012d8d8a6c2efb2c84238->leave($__internal_7ef36e8a94e57edb3980a1785cb6cd3d645399d68c5012d8d8a6c2efb2c84238_prof);

        
        $__internal_98a29a5532fe23ac3c5eb71da1e0108912a5de36a88c4fb5fb8c7ce211db16b5->leave($__internal_98a29a5532fe23ac3c5eb71da1e0108912a5de36a88c4fb5fb8c7ce211db16b5_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ddb75538b0ee7b502d83ca07a4a2edf38d63b7dd8cf5c208a27772f15a865b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb75538b0ee7b502d83ca07a4a2edf38d63b7dd8cf5c208a27772f15a865b34->enter($__internal_ddb75538b0ee7b502d83ca07a4a2edf38d63b7dd8cf5c208a27772f15a865b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_26ae2260dc0ecd6d13c051f80277a808bb305a58b1250023544d4a931c2e8ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ae2260dc0ecd6d13c051f80277a808bb305a58b1250023544d4a931c2e8ad1->enter($__internal_26ae2260dc0ecd6d13c051f80277a808bb305a58b1250023544d4a931c2e8ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_26ae2260dc0ecd6d13c051f80277a808bb305a58b1250023544d4a931c2e8ad1->leave($__internal_26ae2260dc0ecd6d13c051f80277a808bb305a58b1250023544d4a931c2e8ad1_prof);

        
        $__internal_ddb75538b0ee7b502d83ca07a4a2edf38d63b7dd8cf5c208a27772f15a865b34->leave($__internal_ddb75538b0ee7b502d83ca07a4a2edf38d63b7dd8cf5c208a27772f15a865b34_prof);

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
{% endblock %}", "@clinicaPani/Default/dtllsvisita.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\dtllsvisita.html.twig");
    }
}
