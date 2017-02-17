<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_50cae5353c9915028dcf2245eb82a3c3f5efe02114f0558684c8de87e9882d6a extends Twig_Template
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
        $__internal_a76ba7feb2e70874630e0d5b3fa219b099aa9ecadda7a0ccddf9fd339d349754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76ba7feb2e70874630e0d5b3fa219b099aa9ecadda7a0ccddf9fd339d349754->enter($__internal_a76ba7feb2e70874630e0d5b3fa219b099aa9ecadda7a0ccddf9fd339d349754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_047fccd7d1d27b26dbd01070e5ffb6bc172b20bee389eeb16d3c08812515977a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047fccd7d1d27b26dbd01070e5ffb6bc172b20bee389eeb16d3c08812515977a->enter($__internal_047fccd7d1d27b26dbd01070e5ffb6bc172b20bee389eeb16d3c08812515977a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76ba7feb2e70874630e0d5b3fa219b099aa9ecadda7a0ccddf9fd339d349754->leave($__internal_a76ba7feb2e70874630e0d5b3fa219b099aa9ecadda7a0ccddf9fd339d349754_prof);

        
        $__internal_047fccd7d1d27b26dbd01070e5ffb6bc172b20bee389eeb16d3c08812515977a->leave($__internal_047fccd7d1d27b26dbd01070e5ffb6bc172b20bee389eeb16d3c08812515977a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e92a3c8354abd4eb12f94539f8482d964af4b078cb6366e8d88debb0d300f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e92a3c8354abd4eb12f94539f8482d964af4b078cb6366e8d88debb0d300f02->enter($__internal_6e92a3c8354abd4eb12f94539f8482d964af4b078cb6366e8d88debb0d300f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cf0d47946c39621699e3d4c926cdf20199883c934b9133c7316bac2b6abfb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf0d47946c39621699e3d4c926cdf20199883c934b9133c7316bac2b6abfb16->enter($__internal_8cf0d47946c39621699e3d4c926cdf20199883c934b9133c7316bac2b6abfb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_8cf0d47946c39621699e3d4c926cdf20199883c934b9133c7316bac2b6abfb16->leave($__internal_8cf0d47946c39621699e3d4c926cdf20199883c934b9133c7316bac2b6abfb16_prof);

        
        $__internal_6e92a3c8354abd4eb12f94539f8482d964af4b078cb6366e8d88debb0d300f02->leave($__internal_6e92a3c8354abd4eb12f94539f8482d964af4b078cb6366e8d88debb0d300f02_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_038c4a62e51b064c3b17dcba42ac2a670f264f150d2969bbef0dc9d173bf1815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038c4a62e51b064c3b17dcba42ac2a670f264f150d2969bbef0dc9d173bf1815->enter($__internal_038c4a62e51b064c3b17dcba42ac2a670f264f150d2969bbef0dc9d173bf1815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8f9aaada7d1d089c1a5c78c2513b8f2ca8f6accdc6af93669b43aee53c194eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9aaada7d1d089c1a5c78c2513b8f2ca8f6accdc6af93669b43aee53c194eb9->enter($__internal_8f9aaada7d1d089c1a5c78c2513b8f2ca8f6accdc6af93669b43aee53c194eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8f9aaada7d1d089c1a5c78c2513b8f2ca8f6accdc6af93669b43aee53c194eb9->leave($__internal_8f9aaada7d1d089c1a5c78c2513b8f2ca8f6accdc6af93669b43aee53c194eb9_prof);

        
        $__internal_038c4a62e51b064c3b17dcba42ac2a670f264f150d2969bbef0dc9d173bf1815->leave($__internal_038c4a62e51b064c3b17dcba42ac2a670f264f150d2969bbef0dc9d173bf1815_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
