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
        $__internal_bc5248ae75dfca2cfb31573ba9f684d15de466aa589a4684052a38d70a0a4507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5248ae75dfca2cfb31573ba9f684d15de466aa589a4684052a38d70a0a4507->enter($__internal_bc5248ae75dfca2cfb31573ba9f684d15de466aa589a4684052a38d70a0a4507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_95042c109a172772c7615963faf054308a8c06070882ad0aeb782afc06008329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95042c109a172772c7615963faf054308a8c06070882ad0aeb782afc06008329->enter($__internal_95042c109a172772c7615963faf054308a8c06070882ad0aeb782afc06008329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc5248ae75dfca2cfb31573ba9f684d15de466aa589a4684052a38d70a0a4507->leave($__internal_bc5248ae75dfca2cfb31573ba9f684d15de466aa589a4684052a38d70a0a4507_prof);

        
        $__internal_95042c109a172772c7615963faf054308a8c06070882ad0aeb782afc06008329->leave($__internal_95042c109a172772c7615963faf054308a8c06070882ad0aeb782afc06008329_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e68adcd56db3c8aa48bbfdd8844f2cb4ad8ad08d313af042de5225feff557e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e68adcd56db3c8aa48bbfdd8844f2cb4ad8ad08d313af042de5225feff557e6->enter($__internal_7e68adcd56db3c8aa48bbfdd8844f2cb4ad8ad08d313af042de5225feff557e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcf0f666ac43068de3b0c20bbef58b3d5be4938551f6484ff08a5fc9f91c1b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf0f666ac43068de3b0c20bbef58b3d5be4938551f6484ff08a5fc9f91c1b6e->enter($__internal_dcf0f666ac43068de3b0c20bbef58b3d5be4938551f6484ff08a5fc9f91c1b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_dcf0f666ac43068de3b0c20bbef58b3d5be4938551f6484ff08a5fc9f91c1b6e->leave($__internal_dcf0f666ac43068de3b0c20bbef58b3d5be4938551f6484ff08a5fc9f91c1b6e_prof);

        
        $__internal_7e68adcd56db3c8aa48bbfdd8844f2cb4ad8ad08d313af042de5225feff557e6->leave($__internal_7e68adcd56db3c8aa48bbfdd8844f2cb4ad8ad08d313af042de5225feff557e6_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6c960d7a1762defe71cfa10196eacc65132daaaaba1ead19b3c3f6ddc246c708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c960d7a1762defe71cfa10196eacc65132daaaaba1ead19b3c3f6ddc246c708->enter($__internal_6c960d7a1762defe71cfa10196eacc65132daaaaba1ead19b3c3f6ddc246c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_b8dbec4f8937be697a5bd850752f862a07d7e2614243a4bb49fa4bff59897215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8dbec4f8937be697a5bd850752f862a07d7e2614243a4bb49fa4bff59897215->enter($__internal_b8dbec4f8937be697a5bd850752f862a07d7e2614243a4bb49fa4bff59897215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b8dbec4f8937be697a5bd850752f862a07d7e2614243a4bb49fa4bff59897215->leave($__internal_b8dbec4f8937be697a5bd850752f862a07d7e2614243a4bb49fa4bff59897215_prof);

        
        $__internal_6c960d7a1762defe71cfa10196eacc65132daaaaba1ead19b3c3f6ddc246c708->leave($__internal_6c960d7a1762defe71cfa10196eacc65132daaaaba1ead19b3c3f6ddc246c708_prof);

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
