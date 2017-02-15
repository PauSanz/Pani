<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_fda68718183cde86f90984662dc956ab921f687062299d0a4c4d847b7602bf93 extends Twig_Template
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
        $__internal_94667764991dec7559b9b0562e87b657b60723ccd757fce8acae31facb15968c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94667764991dec7559b9b0562e87b657b60723ccd757fce8acae31facb15968c->enter($__internal_94667764991dec7559b9b0562e87b657b60723ccd757fce8acae31facb15968c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_61c8aa1bf8fe45c96daff1f8b440bfa0376e1c7177bbb75165fee9021023de2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c8aa1bf8fe45c96daff1f8b440bfa0376e1c7177bbb75165fee9021023de2d->enter($__internal_61c8aa1bf8fe45c96daff1f8b440bfa0376e1c7177bbb75165fee9021023de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94667764991dec7559b9b0562e87b657b60723ccd757fce8acae31facb15968c->leave($__internal_94667764991dec7559b9b0562e87b657b60723ccd757fce8acae31facb15968c_prof);

        
        $__internal_61c8aa1bf8fe45c96daff1f8b440bfa0376e1c7177bbb75165fee9021023de2d->leave($__internal_61c8aa1bf8fe45c96daff1f8b440bfa0376e1c7177bbb75165fee9021023de2d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_570e859dab21bd4b880d1231f1320690a575993daaba7c8c8da317ee8fdd4cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570e859dab21bd4b880d1231f1320690a575993daaba7c8c8da317ee8fdd4cf3->enter($__internal_570e859dab21bd4b880d1231f1320690a575993daaba7c8c8da317ee8fdd4cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_845ca354ab743ceba1885d1022ab7d2dbdeaddc9c72ca773649e98e7b6b88542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845ca354ab743ceba1885d1022ab7d2dbdeaddc9c72ca773649e98e7b6b88542->enter($__internal_845ca354ab743ceba1885d1022ab7d2dbdeaddc9c72ca773649e98e7b6b88542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_845ca354ab743ceba1885d1022ab7d2dbdeaddc9c72ca773649e98e7b6b88542->leave($__internal_845ca354ab743ceba1885d1022ab7d2dbdeaddc9c72ca773649e98e7b6b88542_prof);

        
        $__internal_570e859dab21bd4b880d1231f1320690a575993daaba7c8c8da317ee8fdd4cf3->leave($__internal_570e859dab21bd4b880d1231f1320690a575993daaba7c8c8da317ee8fdd4cf3_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dfd5566c9f8696d649805d5fa5b1d3aec29d4a963f17e9eed4a9af0c048540a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd5566c9f8696d649805d5fa5b1d3aec29d4a963f17e9eed4a9af0c048540a0->enter($__internal_dfd5566c9f8696d649805d5fa5b1d3aec29d4a963f17e9eed4a9af0c048540a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_14cec0c48ee917c7b7903e181978a7e59f09a5284d8ae77610a4b2482ac5ee85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cec0c48ee917c7b7903e181978a7e59f09a5284d8ae77610a4b2482ac5ee85->enter($__internal_14cec0c48ee917c7b7903e181978a7e59f09a5284d8ae77610a4b2482ac5ee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["Visites"] ?? $this->getContext($context, "Visites")));
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
        
        $__internal_14cec0c48ee917c7b7903e181978a7e59f09a5284d8ae77610a4b2482ac5ee85->leave($__internal_14cec0c48ee917c7b7903e181978a7e59f09a5284d8ae77610a4b2482ac5ee85_prof);

        
        $__internal_dfd5566c9f8696d649805d5fa5b1d3aec29d4a963f17e9eed4a9af0c048540a0->leave($__internal_dfd5566c9f8696d649805d5fa5b1d3aec29d4a963f17e9eed4a9af0c048540a0_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
