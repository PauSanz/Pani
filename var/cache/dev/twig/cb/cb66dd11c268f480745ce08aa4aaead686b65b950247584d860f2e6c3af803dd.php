<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_490fd22d9691728065e4e46b7bc71e2b67e79ecba38187ac75a682e85a30a079 extends Twig_Template
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
        $__internal_33231bad98103804ddef937684b84ad9543b2c31fe2dba84a6e22b1a009fcb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33231bad98103804ddef937684b84ad9543b2c31fe2dba84a6e22b1a009fcb3e->enter($__internal_33231bad98103804ddef937684b84ad9543b2c31fe2dba84a6e22b1a009fcb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_4af03f24530a1fe189b831eff141adb382157a8e73ebc11982e8ce9630df3f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af03f24530a1fe189b831eff141adb382157a8e73ebc11982e8ce9630df3f07->enter($__internal_4af03f24530a1fe189b831eff141adb382157a8e73ebc11982e8ce9630df3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_33231bad98103804ddef937684b84ad9543b2c31fe2dba84a6e22b1a009fcb3e->leave($__internal_33231bad98103804ddef937684b84ad9543b2c31fe2dba84a6e22b1a009fcb3e_prof);

        
        $__internal_4af03f24530a1fe189b831eff141adb382157a8e73ebc11982e8ce9630df3f07->leave($__internal_4af03f24530a1fe189b831eff141adb382157a8e73ebc11982e8ce9630df3f07_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1eb508fd8bae820d0da336bef3f9ddc9fcf670a50770c134e95131f217f73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1eb508fd8bae820d0da336bef3f9ddc9fcf670a50770c134e95131f217f73e->enter($__internal_8d1eb508fd8bae820d0da336bef3f9ddc9fcf670a50770c134e95131f217f73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08ca73ced97426caa6839d92d7e7fc2d59de324375276aad682f309e1b541d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ca73ced97426caa6839d92d7e7fc2d59de324375276aad682f309e1b541d15->enter($__internal_08ca73ced97426caa6839d92d7e7fc2d59de324375276aad682f309e1b541d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_08ca73ced97426caa6839d92d7e7fc2d59de324375276aad682f309e1b541d15->leave($__internal_08ca73ced97426caa6839d92d7e7fc2d59de324375276aad682f309e1b541d15_prof);

        
        $__internal_8d1eb508fd8bae820d0da336bef3f9ddc9fcf670a50770c134e95131f217f73e->leave($__internal_8d1eb508fd8bae820d0da336bef3f9ddc9fcf670a50770c134e95131f217f73e_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4849953eabc42e0b4999f11282b44c95809953ca0d9fa29c24dfde845d9c9d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4849953eabc42e0b4999f11282b44c95809953ca0d9fa29c24dfde845d9c9d93->enter($__internal_4849953eabc42e0b4999f11282b44c95809953ca0d9fa29c24dfde845d9c9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_50dc1dc2fb9d15ccc2f0b269074ef152ef6ded1e5f22aad411a7ff48df699c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dc1dc2fb9d15ccc2f0b269074ef152ef6ded1e5f22aad411a7ff48df699c59->enter($__internal_50dc1dc2fb9d15ccc2f0b269074ef152ef6ded1e5f22aad411a7ff48df699c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_50dc1dc2fb9d15ccc2f0b269074ef152ef6ded1e5f22aad411a7ff48df699c59->leave($__internal_50dc1dc2fb9d15ccc2f0b269074ef152ef6ded1e5f22aad411a7ff48df699c59_prof);

        
        $__internal_4849953eabc42e0b4999f11282b44c95809953ca0d9fa29c24dfde845d9c9d93->leave($__internal_4849953eabc42e0b4999f11282b44c95809953ca0d9fa29c24dfde845d9c9d93_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/dtllsvisita.html.twig");
    }
}
