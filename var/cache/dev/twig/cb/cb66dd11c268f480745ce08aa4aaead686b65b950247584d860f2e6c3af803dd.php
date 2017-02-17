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
        $__internal_7f4db985cf4e1bad4d203734e5a8ea90e1e058729be31b5c88bd5353788aa423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4db985cf4e1bad4d203734e5a8ea90e1e058729be31b5c88bd5353788aa423->enter($__internal_7f4db985cf4e1bad4d203734e5a8ea90e1e058729be31b5c88bd5353788aa423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_4aac6d42bcef3592dc14f42bd99d1c3fa735dedf2a76387c32fed9638efa421b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aac6d42bcef3592dc14f42bd99d1c3fa735dedf2a76387c32fed9638efa421b->enter($__internal_4aac6d42bcef3592dc14f42bd99d1c3fa735dedf2a76387c32fed9638efa421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_7f4db985cf4e1bad4d203734e5a8ea90e1e058729be31b5c88bd5353788aa423->leave($__internal_7f4db985cf4e1bad4d203734e5a8ea90e1e058729be31b5c88bd5353788aa423_prof);

        
        $__internal_4aac6d42bcef3592dc14f42bd99d1c3fa735dedf2a76387c32fed9638efa421b->leave($__internal_4aac6d42bcef3592dc14f42bd99d1c3fa735dedf2a76387c32fed9638efa421b_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_92b9a369e6c7772c3ca6e25dc2871607031c71520b6640af933a6ea22c4b4124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b9a369e6c7772c3ca6e25dc2871607031c71520b6640af933a6ea22c4b4124->enter($__internal_92b9a369e6c7772c3ca6e25dc2871607031c71520b6640af933a6ea22c4b4124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_669172594519dc3b6029d6d9ee1145e170742da10c3fa216c2396fda891e919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669172594519dc3b6029d6d9ee1145e170742da10c3fa216c2396fda891e919f->enter($__internal_669172594519dc3b6029d6d9ee1145e170742da10c3fa216c2396fda891e919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_669172594519dc3b6029d6d9ee1145e170742da10c3fa216c2396fda891e919f->leave($__internal_669172594519dc3b6029d6d9ee1145e170742da10c3fa216c2396fda891e919f_prof);

        
        $__internal_92b9a369e6c7772c3ca6e25dc2871607031c71520b6640af933a6ea22c4b4124->leave($__internal_92b9a369e6c7772c3ca6e25dc2871607031c71520b6640af933a6ea22c4b4124_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a46199b864c255bde85f307c187a5f686366ed6d0a4ccc2549360dbc920e7559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46199b864c255bde85f307c187a5f686366ed6d0a4ccc2549360dbc920e7559->enter($__internal_a46199b864c255bde85f307c187a5f686366ed6d0a4ccc2549360dbc920e7559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_598aa691d4fafa964743876093a7b9b499f89e9aacd432b58fb4b393db4c4e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598aa691d4fafa964743876093a7b9b499f89e9aacd432b58fb4b393db4c4e98->enter($__internal_598aa691d4fafa964743876093a7b9b499f89e9aacd432b58fb4b393db4c4e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_598aa691d4fafa964743876093a7b9b499f89e9aacd432b58fb4b393db4c4e98->leave($__internal_598aa691d4fafa964743876093a7b9b499f89e9aacd432b58fb4b393db4c4e98_prof);

        
        $__internal_a46199b864c255bde85f307c187a5f686366ed6d0a4ccc2549360dbc920e7559->leave($__internal_a46199b864c255bde85f307c187a5f686366ed6d0a4ccc2549360dbc920e7559_prof);

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
