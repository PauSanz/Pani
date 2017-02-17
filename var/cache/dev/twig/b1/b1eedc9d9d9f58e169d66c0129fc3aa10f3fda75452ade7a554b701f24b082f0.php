<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
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
        $__internal_f97c62714827427f5dd3f9cbf013d17334087dad1d0e3605a341b1421383c2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97c62714827427f5dd3f9cbf013d17334087dad1d0e3605a341b1421383c2aa->enter($__internal_f97c62714827427f5dd3f9cbf013d17334087dad1d0e3605a341b1421383c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_42ae075b2c1538909b615dc5e220516fd0a6b8f13817c56ca07b48b63fe892a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ae075b2c1538909b615dc5e220516fd0a6b8f13817c56ca07b48b63fe892a7->enter($__internal_42ae075b2c1538909b615dc5e220516fd0a6b8f13817c56ca07b48b63fe892a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_f97c62714827427f5dd3f9cbf013d17334087dad1d0e3605a341b1421383c2aa->leave($__internal_f97c62714827427f5dd3f9cbf013d17334087dad1d0e3605a341b1421383c2aa_prof);

        
        $__internal_42ae075b2c1538909b615dc5e220516fd0a6b8f13817c56ca07b48b63fe892a7->leave($__internal_42ae075b2c1538909b615dc5e220516fd0a6b8f13817c56ca07b48b63fe892a7_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_052d4ab7f840971f3837ac8e447470a5789e600109983ead166c495d0f50e408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052d4ab7f840971f3837ac8e447470a5789e600109983ead166c495d0f50e408->enter($__internal_052d4ab7f840971f3837ac8e447470a5789e600109983ead166c495d0f50e408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cac567e490d85a7de7eb89fd36fe8ff1f08631e845bb6b6dc26381862fb3eb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac567e490d85a7de7eb89fd36fe8ff1f08631e845bb6b6dc26381862fb3eb1b->enter($__internal_cac567e490d85a7de7eb89fd36fe8ff1f08631e845bb6b6dc26381862fb3eb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_cac567e490d85a7de7eb89fd36fe8ff1f08631e845bb6b6dc26381862fb3eb1b->leave($__internal_cac567e490d85a7de7eb89fd36fe8ff1f08631e845bb6b6dc26381862fb3eb1b_prof);

        
        $__internal_052d4ab7f840971f3837ac8e447470a5789e600109983ead166c495d0f50e408->leave($__internal_052d4ab7f840971f3837ac8e447470a5789e600109983ead166c495d0f50e408_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_03fc4853c25fb4f72936b816de03f633e09295804ef2b903c3064fa85f802025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fc4853c25fb4f72936b816de03f633e09295804ef2b903c3064fa85f802025->enter($__internal_03fc4853c25fb4f72936b816de03f633e09295804ef2b903c3064fa85f802025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e8d391d358e9a194490a49fe919d1a5a879813ac9462b0f790a0ad16ca906455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d391d358e9a194490a49fe919d1a5a879813ac9462b0f790a0ad16ca906455->enter($__internal_e8d391d358e9a194490a49fe919d1a5a879813ac9462b0f790a0ad16ca906455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e8d391d358e9a194490a49fe919d1a5a879813ac9462b0f790a0ad16ca906455->leave($__internal_e8d391d358e9a194490a49fe919d1a5a879813ac9462b0f790a0ad16ca906455_prof);

        
        $__internal_03fc4853c25fb4f72936b816de03f633e09295804ef2b903c3064fa85f802025->leave($__internal_03fc4853c25fb4f72936b816de03f633e09295804ef2b903c3064fa85f802025_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\dtllsvisita.html.twig");
    }
}
