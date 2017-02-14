<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_885df6c31270593ea3e1c3a7aea44d43c73b3fa555a37d9c30bede9d2903f98e extends Twig_Template
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
        $__internal_542af5be3f976bb4cdb8e077add0c15de0430e1cc5691c874dbacdc922610c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542af5be3f976bb4cdb8e077add0c15de0430e1cc5691c874dbacdc922610c68->enter($__internal_542af5be3f976bb4cdb8e077add0c15de0430e1cc5691c874dbacdc922610c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_31dd1060047c1ab510eec7eab6e679342bdc9417fd8431ca9836f7b36aa8cf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dd1060047c1ab510eec7eab6e679342bdc9417fd8431ca9836f7b36aa8cf3d->enter($__internal_31dd1060047c1ab510eec7eab6e679342bdc9417fd8431ca9836f7b36aa8cf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_542af5be3f976bb4cdb8e077add0c15de0430e1cc5691c874dbacdc922610c68->leave($__internal_542af5be3f976bb4cdb8e077add0c15de0430e1cc5691c874dbacdc922610c68_prof);

        
        $__internal_31dd1060047c1ab510eec7eab6e679342bdc9417fd8431ca9836f7b36aa8cf3d->leave($__internal_31dd1060047c1ab510eec7eab6e679342bdc9417fd8431ca9836f7b36aa8cf3d_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c6d87b67920d19a24be2f16d3e07f6099d51e8d5c8eea43d6a720a5eee3a743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6d87b67920d19a24be2f16d3e07f6099d51e8d5c8eea43d6a720a5eee3a743->enter($__internal_0c6d87b67920d19a24be2f16d3e07f6099d51e8d5c8eea43d6a720a5eee3a743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b71a1cc736f02e60a88f3c6c45142e7756edf11e1560e595304f13692444e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b71a1cc736f02e60a88f3c6c45142e7756edf11e1560e595304f13692444e96->enter($__internal_8b71a1cc736f02e60a88f3c6c45142e7756edf11e1560e595304f13692444e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_8b71a1cc736f02e60a88f3c6c45142e7756edf11e1560e595304f13692444e96->leave($__internal_8b71a1cc736f02e60a88f3c6c45142e7756edf11e1560e595304f13692444e96_prof);

        
        $__internal_0c6d87b67920d19a24be2f16d3e07f6099d51e8d5c8eea43d6a720a5eee3a743->leave($__internal_0c6d87b67920d19a24be2f16d3e07f6099d51e8d5c8eea43d6a720a5eee3a743_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f48ba8e89da7a542690d5d387f4c38b38dc653bd874e779527ca3c3a17e3d8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48ba8e89da7a542690d5d387f4c38b38dc653bd874e779527ca3c3a17e3d8a2->enter($__internal_f48ba8e89da7a542690d5d387f4c38b38dc653bd874e779527ca3c3a17e3d8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4fe63e0f8449faea48495534984f9f16c3ffe3bc615dbe5f73e03dbbe779bfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe63e0f8449faea48495534984f9f16c3ffe3bc615dbe5f73e03dbbe779bfed->enter($__internal_4fe63e0f8449faea48495534984f9f16c3ffe3bc615dbe5f73e03dbbe779bfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Tipus de visita</th>
        <th>Descripció</th>
        <th>Metge visitat</th>
        <th>Pacient visitat</th>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visites"] ?? $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "tipusvisita", array()), "tipus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "descripcio", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "metgevisitat", array()), "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "pacientvisitat", array()), "dni", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
";
        
        $__internal_4fe63e0f8449faea48495534984f9f16c3ffe3bc615dbe5f73e03dbbe779bfed->leave($__internal_4fe63e0f8449faea48495534984f9f16c3ffe3bc615dbe5f73e03dbbe779bfed_prof);

        
        $__internal_f48ba8e89da7a542690d5d387f4c38b38dc653bd874e779527ca3c3a17e3d8a2->leave($__internal_f48ba8e89da7a542690d5d387f4c38b38dc653bd874e779527ca3c3a17e3d8a2_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  84 => 16,  80 => 15,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Visites{% endblock %}
{% block page_content %}
    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Tipus de visita</th>
        <th>Descripció</th>
        <th>Metge visitat</th>
        <th>Pacient visitat</th>
    </thead>
    <tbody>
        {% for visites in Visites %}
            <tr>
                <td>{{ visites.ref }}</td>
                <td>{{ visites.data|date('Y-m-d') }}</td>
                <td>{{ visites.hora|date('H:i:s') }}</td>
                <td>{{ visites.tipusvisita.tipus }}</td>
                <td>{{ visites.descripcio }}</td>                
                <td>{{ visites.metgevisitat.dni }}</td>
                <td>{{ visites.pacientvisitat.dni }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
