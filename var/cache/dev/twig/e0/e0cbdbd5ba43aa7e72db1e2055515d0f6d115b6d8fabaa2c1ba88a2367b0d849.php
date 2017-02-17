<?php

/* @clinicaPani/Default/vvisites.html.twig */
class __TwigTemplate_bc12b8b575d41b801d9dcb49a2cd0c7f7803a81415891ef27be6d607c98bf0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/vvisites.html.twig", 1);
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
        $__internal_c13af505819189ef3c00b331ac7bfc777f4667773be653617df34a8db257c209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13af505819189ef3c00b331ac7bfc777f4667773be653617df34a8db257c209->enter($__internal_c13af505819189ef3c00b331ac7bfc777f4667773be653617df34a8db257c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $__internal_d92f9d3fb8f20904d3d7ced7cf14e5684ba5ea847440526007ba178a946ee5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92f9d3fb8f20904d3d7ced7cf14e5684ba5ea847440526007ba178a946ee5c8->enter($__internal_d92f9d3fb8f20904d3d7ced7cf14e5684ba5ea847440526007ba178a946ee5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13af505819189ef3c00b331ac7bfc777f4667773be653617df34a8db257c209->leave($__internal_c13af505819189ef3c00b331ac7bfc777f4667773be653617df34a8db257c209_prof);

        
        $__internal_d92f9d3fb8f20904d3d7ced7cf14e5684ba5ea847440526007ba178a946ee5c8->leave($__internal_d92f9d3fb8f20904d3d7ced7cf14e5684ba5ea847440526007ba178a946ee5c8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb96c70b332c04d0465c3a9f4ea6ad621a65586d90e5fca42f6c11cc9f1592b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb96c70b332c04d0465c3a9f4ea6ad621a65586d90e5fca42f6c11cc9f1592b5->enter($__internal_fb96c70b332c04d0465c3a9f4ea6ad621a65586d90e5fca42f6c11cc9f1592b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_431a8e619c33b35fa75b67248c9483b07f410b419098d89eaf5ac4ecbc59b3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431a8e619c33b35fa75b67248c9483b07f410b419098d89eaf5ac4ecbc59b3d8->enter($__internal_431a8e619c33b35fa75b67248c9483b07f410b419098d89eaf5ac4ecbc59b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_431a8e619c33b35fa75b67248c9483b07f410b419098d89eaf5ac4ecbc59b3d8->leave($__internal_431a8e619c33b35fa75b67248c9483b07f410b419098d89eaf5ac4ecbc59b3d8_prof);

        
        $__internal_fb96c70b332c04d0465c3a9f4ea6ad621a65586d90e5fca42f6c11cc9f1592b5->leave($__internal_fb96c70b332c04d0465c3a9f4ea6ad621a65586d90e5fca42f6c11cc9f1592b5_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c4ffb9c0254684c74b7b8ee152b10e023fa3bf4d73ad440cbba3026bfd1c3450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ffb9c0254684c74b7b8ee152b10e023fa3bf4d73ad440cbba3026bfd1c3450->enter($__internal_c4ffb9c0254684c74b7b8ee152b10e023fa3bf4d73ad440cbba3026bfd1c3450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_9feb39bbe55062a1cf06084835b778dcaa14219d28185fc01f551469f6b821c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9feb39bbe55062a1cf06084835b778dcaa14219d28185fc01f551469f6b821c2->enter($__internal_9feb39bbe55062a1cf06084835b778dcaa14219d28185fc01f551469f6b821c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_9feb39bbe55062a1cf06084835b778dcaa14219d28185fc01f551469f6b821c2->leave($__internal_9feb39bbe55062a1cf06084835b778dcaa14219d28185fc01f551469f6b821c2_prof);

        
        $__internal_c4ffb9c0254684c74b7b8ee152b10e023fa3bf4d73ad440cbba3026bfd1c3450->leave($__internal_c4ffb9c0254684c74b7b8ee152b10e023fa3bf4d73ad440cbba3026bfd1c3450_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vvisites.html.twig";
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
{% endblock %}", "@clinicaPani/Default/vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
