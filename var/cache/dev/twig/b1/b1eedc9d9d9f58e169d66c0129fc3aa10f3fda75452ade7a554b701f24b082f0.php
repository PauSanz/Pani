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
        $__internal_65d9a39a30dec3c0f2ec5ee530b780691b1f28898173e7351162fbc5dd20c281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d9a39a30dec3c0f2ec5ee530b780691b1f28898173e7351162fbc5dd20c281->enter($__internal_65d9a39a30dec3c0f2ec5ee530b780691b1f28898173e7351162fbc5dd20c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_003d849e19e654a0d1260376239b98dbea715c969f9654a6a9d3c34d6552a17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003d849e19e654a0d1260376239b98dbea715c969f9654a6a9d3c34d6552a17e->enter($__internal_003d849e19e654a0d1260376239b98dbea715c969f9654a6a9d3c34d6552a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_65d9a39a30dec3c0f2ec5ee530b780691b1f28898173e7351162fbc5dd20c281->leave($__internal_65d9a39a30dec3c0f2ec5ee530b780691b1f28898173e7351162fbc5dd20c281_prof);

        
        $__internal_003d849e19e654a0d1260376239b98dbea715c969f9654a6a9d3c34d6552a17e->leave($__internal_003d849e19e654a0d1260376239b98dbea715c969f9654a6a9d3c34d6552a17e_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_db329919251cc14066bb362b840dd7d0b6b3eff76c807aeefb4daa7818e3e3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db329919251cc14066bb362b840dd7d0b6b3eff76c807aeefb4daa7818e3e3ba->enter($__internal_db329919251cc14066bb362b840dd7d0b6b3eff76c807aeefb4daa7818e3e3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_937c68d1a2444253a90edba78970f826d6bdd87bba1de87eee8602be8db74520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937c68d1a2444253a90edba78970f826d6bdd87bba1de87eee8602be8db74520->enter($__internal_937c68d1a2444253a90edba78970f826d6bdd87bba1de87eee8602be8db74520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_937c68d1a2444253a90edba78970f826d6bdd87bba1de87eee8602be8db74520->leave($__internal_937c68d1a2444253a90edba78970f826d6bdd87bba1de87eee8602be8db74520_prof);

        
        $__internal_db329919251cc14066bb362b840dd7d0b6b3eff76c807aeefb4daa7818e3e3ba->leave($__internal_db329919251cc14066bb362b840dd7d0b6b3eff76c807aeefb4daa7818e3e3ba_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_001f2a57dbc758bb881f60282d236f4f9ada3df72f0386b455ae3e45ab8caa7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001f2a57dbc758bb881f60282d236f4f9ada3df72f0386b455ae3e45ab8caa7c->enter($__internal_001f2a57dbc758bb881f60282d236f4f9ada3df72f0386b455ae3e45ab8caa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d721646c6d28e8bca262d5af7dd3c6e79aea6f219911871c4c6e9e084ef5e222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d721646c6d28e8bca262d5af7dd3c6e79aea6f219911871c4c6e9e084ef5e222->enter($__internal_d721646c6d28e8bca262d5af7dd3c6e79aea6f219911871c4c6e9e084ef5e222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_d721646c6d28e8bca262d5af7dd3c6e79aea6f219911871c4c6e9e084ef5e222->leave($__internal_d721646c6d28e8bca262d5af7dd3c6e79aea6f219911871c4c6e9e084ef5e222_prof);

        
        $__internal_001f2a57dbc758bb881f60282d236f4f9ada3df72f0386b455ae3e45ab8caa7c->leave($__internal_001f2a57dbc758bb881f60282d236f4f9ada3df72f0386b455ae3e45ab8caa7c_prof);

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
