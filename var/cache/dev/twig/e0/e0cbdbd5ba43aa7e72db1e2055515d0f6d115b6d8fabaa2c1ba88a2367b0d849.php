<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_bc12b8b575d41b801d9dcb49a2cd0c7f7803a81415891ef27be6d607c98bf0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:vvisites.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clinicaPaniBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b3045750619a657c6259707f4b08b3f451cffa4ab79e23a812319287dee3290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3045750619a657c6259707f4b08b3f451cffa4ab79e23a812319287dee3290->enter($__internal_7b3045750619a657c6259707f4b08b3f451cffa4ab79e23a812319287dee3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_816e9407424ef4c3517e71d18502217b37dca1a62a382697184703b82bf64fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816e9407424ef4c3517e71d18502217b37dca1a62a382697184703b82bf64fcb->enter($__internal_816e9407424ef4c3517e71d18502217b37dca1a62a382697184703b82bf64fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3045750619a657c6259707f4b08b3f451cffa4ab79e23a812319287dee3290->leave($__internal_7b3045750619a657c6259707f4b08b3f451cffa4ab79e23a812319287dee3290_prof);

        
        $__internal_816e9407424ef4c3517e71d18502217b37dca1a62a382697184703b82bf64fcb->leave($__internal_816e9407424ef4c3517e71d18502217b37dca1a62a382697184703b82bf64fcb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7a4c94f13e035df3173a2b224b62ee9fa9f6cf17fb3eaad528171a5cdeafea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7a4c94f13e035df3173a2b224b62ee9fa9f6cf17fb3eaad528171a5cdeafea->enter($__internal_0b7a4c94f13e035df3173a2b224b62ee9fa9f6cf17fb3eaad528171a5cdeafea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ce1bb5f51ba7fe269320bcd0dbf982fb20f0e952315c5bafd806f68661b8658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce1bb5f51ba7fe269320bcd0dbf982fb20f0e952315c5bafd806f68661b8658->enter($__internal_2ce1bb5f51ba7fe269320bcd0dbf982fb20f0e952315c5bafd806f68661b8658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_2ce1bb5f51ba7fe269320bcd0dbf982fb20f0e952315c5bafd806f68661b8658->leave($__internal_2ce1bb5f51ba7fe269320bcd0dbf982fb20f0e952315c5bafd806f68661b8658_prof);

        
        $__internal_0b7a4c94f13e035df3173a2b224b62ee9fa9f6cf17fb3eaad528171a5cdeafea->leave($__internal_0b7a4c94f13e035df3173a2b224b62ee9fa9f6cf17fb3eaad528171a5cdeafea_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_09d493e4f52c3dd6c39de8da2b438a1483744e7e7b20f4c97afcd64465d0d732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d493e4f52c3dd6c39de8da2b438a1483744e7e7b20f4c97afcd64465d0d732->enter($__internal_09d493e4f52c3dd6c39de8da2b438a1483744e7e7b20f4c97afcd64465d0d732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d9a15ca94799483707de203b5cd20b99dd8af246add59abcef63b2ac158d2d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a15ca94799483707de203b5cd20b99dd8af246add59abcef63b2ac158d2d2d->enter($__internal_d9a15ca94799483707de203b5cd20b99dd8af246add59abcef63b2ac158d2d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Visites"]) ? $context["Visites"] : $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_detallsvisita", array("ref" => $this->getAttribute($context["visites"], "ref", array()))), "html", null, true);
            echo "\">Veure Detalls</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_d9a15ca94799483707de203b5cd20b99dd8af246add59abcef63b2ac158d2d2d->leave($__internal_d9a15ca94799483707de203b5cd20b99dd8af246add59abcef63b2ac158d2d2d_prof);

        
        $__internal_09d493e4f52c3dd6c39de8da2b438a1483744e7e7b20f4c97afcd64465d0d732->leave($__internal_09d493e4f52c3dd6c39de8da2b438a1483744e7e7b20f4c97afcd64465d0d732_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  82 => 13,  78 => 12,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"clinicaPaniBundle:Default:index.html.twig \" %}
{% block title %}Visites{% endblock %}
{% block page_content %}
    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        {% for visites in Visites %}
            <tr>
                <td>{{ visites.ref }}</td>
                <td>{{ visites.data|date('d-m-Y') }}</td>
                <td>{{ visites.hora|date('H:i:s') }}</td>
                <td><a href=\"{{ path('clinica_pani_detallsvisita',{'ref': visites.ref}) }}\">Veure Detalls</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
