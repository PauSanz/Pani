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
        $__internal_c22577fef8edf7aaf41c31f9d05725b30804c8f4834bdaa0ecb6bb313faa1ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22577fef8edf7aaf41c31f9d05725b30804c8f4834bdaa0ecb6bb313faa1ff8->enter($__internal_c22577fef8edf7aaf41c31f9d05725b30804c8f4834bdaa0ecb6bb313faa1ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_bc86d79ecbdb4e977488512c644091f990ba753756767e969862b70725781d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc86d79ecbdb4e977488512c644091f990ba753756767e969862b70725781d6a->enter($__internal_bc86d79ecbdb4e977488512c644091f990ba753756767e969862b70725781d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22577fef8edf7aaf41c31f9d05725b30804c8f4834bdaa0ecb6bb313faa1ff8->leave($__internal_c22577fef8edf7aaf41c31f9d05725b30804c8f4834bdaa0ecb6bb313faa1ff8_prof);

        
        $__internal_bc86d79ecbdb4e977488512c644091f990ba753756767e969862b70725781d6a->leave($__internal_bc86d79ecbdb4e977488512c644091f990ba753756767e969862b70725781d6a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_24f1055a860910004642b61809c14d801d6a11060477c5fcce0e305645cb38b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f1055a860910004642b61809c14d801d6a11060477c5fcce0e305645cb38b8->enter($__internal_24f1055a860910004642b61809c14d801d6a11060477c5fcce0e305645cb38b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93fdb7c9bf454b79b5ccd9389b93597a54f97b038321bbf996a5bc69a9954126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fdb7c9bf454b79b5ccd9389b93597a54f97b038321bbf996a5bc69a9954126->enter($__internal_93fdb7c9bf454b79b5ccd9389b93597a54f97b038321bbf996a5bc69a9954126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_93fdb7c9bf454b79b5ccd9389b93597a54f97b038321bbf996a5bc69a9954126->leave($__internal_93fdb7c9bf454b79b5ccd9389b93597a54f97b038321bbf996a5bc69a9954126_prof);

        
        $__internal_24f1055a860910004642b61809c14d801d6a11060477c5fcce0e305645cb38b8->leave($__internal_24f1055a860910004642b61809c14d801d6a11060477c5fcce0e305645cb38b8_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_92f12e2f1733802523ef1f8780000b288510f7890badf37404754a9decd6c5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f12e2f1733802523ef1f8780000b288510f7890badf37404754a9decd6c5ae->enter($__internal_92f12e2f1733802523ef1f8780000b288510f7890badf37404754a9decd6c5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_94c8e6d751f3f49282b539050f7003f367e533373cc9df7af34c1877c024f86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c8e6d751f3f49282b539050f7003f367e533373cc9df7af34c1877c024f86a->enter($__internal_94c8e6d751f3f49282b539050f7003f367e533373cc9df7af34c1877c024f86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_94c8e6d751f3f49282b539050f7003f367e533373cc9df7af34c1877c024f86a->leave($__internal_94c8e6d751f3f49282b539050f7003f367e533373cc9df7af34c1877c024f86a_prof);

        
        $__internal_92f12e2f1733802523ef1f8780000b288510f7890badf37404754a9decd6c5ae->leave($__internal_92f12e2f1733802523ef1f8780000b288510f7890badf37404754a9decd6c5ae_prof);

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
