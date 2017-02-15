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
        $__internal_ed4aece039abfbf06b6edb9371a27cce09a004c442a4e32aa57e101b96dadab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4aece039abfbf06b6edb9371a27cce09a004c442a4e32aa57e101b96dadab2->enter($__internal_ed4aece039abfbf06b6edb9371a27cce09a004c442a4e32aa57e101b96dadab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_3f08e1a73c7bc7b6fa240e1b69c7d9b696361a877ca1b3ce61ff77912c5af1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f08e1a73c7bc7b6fa240e1b69c7d9b696361a877ca1b3ce61ff77912c5af1e2->enter($__internal_3f08e1a73c7bc7b6fa240e1b69c7d9b696361a877ca1b3ce61ff77912c5af1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_ed4aece039abfbf06b6edb9371a27cce09a004c442a4e32aa57e101b96dadab2->leave($__internal_ed4aece039abfbf06b6edb9371a27cce09a004c442a4e32aa57e101b96dadab2_prof);

        
        $__internal_3f08e1a73c7bc7b6fa240e1b69c7d9b696361a877ca1b3ce61ff77912c5af1e2->leave($__internal_3f08e1a73c7bc7b6fa240e1b69c7d9b696361a877ca1b3ce61ff77912c5af1e2_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_79b643c1bfbbf2edb6acbb6ca049882de156d7467ef0673c5a6384580cf66bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b643c1bfbbf2edb6acbb6ca049882de156d7467ef0673c5a6384580cf66bc9->enter($__internal_79b643c1bfbbf2edb6acbb6ca049882de156d7467ef0673c5a6384580cf66bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f86158fc22487e15509eec4f72ceb1f2d257234dd80013562cd9b7adaf46d47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86158fc22487e15509eec4f72ceb1f2d257234dd80013562cd9b7adaf46d47b->enter($__internal_f86158fc22487e15509eec4f72ceb1f2d257234dd80013562cd9b7adaf46d47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_f86158fc22487e15509eec4f72ceb1f2d257234dd80013562cd9b7adaf46d47b->leave($__internal_f86158fc22487e15509eec4f72ceb1f2d257234dd80013562cd9b7adaf46d47b_prof);

        
        $__internal_79b643c1bfbbf2edb6acbb6ca049882de156d7467ef0673c5a6384580cf66bc9->leave($__internal_79b643c1bfbbf2edb6acbb6ca049882de156d7467ef0673c5a6384580cf66bc9_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f9feee89e7a852da61d0fad358e87b15dec8a479144ca8ba9a8f999691f3a981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9feee89e7a852da61d0fad358e87b15dec8a479144ca8ba9a8f999691f3a981->enter($__internal_f9feee89e7a852da61d0fad358e87b15dec8a479144ca8ba9a8f999691f3a981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_09353a6d6f78ee533afc3351cb82305493c4c067f6c45eb3cfeb0d40b250a92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09353a6d6f78ee533afc3351cb82305493c4c067f6c45eb3cfeb0d40b250a92b->enter($__internal_09353a6d6f78ee533afc3351cb82305493c4c067f6c45eb3cfeb0d40b250a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_09353a6d6f78ee533afc3351cb82305493c4c067f6c45eb3cfeb0d40b250a92b->leave($__internal_09353a6d6f78ee533afc3351cb82305493c4c067f6c45eb3cfeb0d40b250a92b_prof);

        
        $__internal_f9feee89e7a852da61d0fad358e87b15dec8a479144ca8ba9a8f999691f3a981->leave($__internal_f9feee89e7a852da61d0fad358e87b15dec8a479144ca8ba9a8f999691f3a981_prof);

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
