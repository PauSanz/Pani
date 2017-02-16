<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_885df6c31270593ea3e1c3a7aea44d43c73b3fa555a37d9c30bede9d2903f98e extends Twig_Template
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
        $__internal_093703141fc4d189b54c806e34cd35d9fdaada92afd4de1ad1cefbb214ca6dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093703141fc4d189b54c806e34cd35d9fdaada92afd4de1ad1cefbb214ca6dad->enter($__internal_093703141fc4d189b54c806e34cd35d9fdaada92afd4de1ad1cefbb214ca6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_839ad44f4f935f04edba0c78258d19259da8945933685ca81371248976c4e9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839ad44f4f935f04edba0c78258d19259da8945933685ca81371248976c4e9e4->enter($__internal_839ad44f4f935f04edba0c78258d19259da8945933685ca81371248976c4e9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093703141fc4d189b54c806e34cd35d9fdaada92afd4de1ad1cefbb214ca6dad->leave($__internal_093703141fc4d189b54c806e34cd35d9fdaada92afd4de1ad1cefbb214ca6dad_prof);

        
        $__internal_839ad44f4f935f04edba0c78258d19259da8945933685ca81371248976c4e9e4->leave($__internal_839ad44f4f935f04edba0c78258d19259da8945933685ca81371248976c4e9e4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4df3bdf62147cf29d488f06ea1ce5b0c4d92b5903c56522582d548cb1ca68fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df3bdf62147cf29d488f06ea1ce5b0c4d92b5903c56522582d548cb1ca68fd2->enter($__internal_4df3bdf62147cf29d488f06ea1ce5b0c4d92b5903c56522582d548cb1ca68fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b3ccda09465608d7e297d77c1d42b6afcefe5990d8704e56474cb367f631293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3ccda09465608d7e297d77c1d42b6afcefe5990d8704e56474cb367f631293->enter($__internal_9b3ccda09465608d7e297d77c1d42b6afcefe5990d8704e56474cb367f631293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_9b3ccda09465608d7e297d77c1d42b6afcefe5990d8704e56474cb367f631293->leave($__internal_9b3ccda09465608d7e297d77c1d42b6afcefe5990d8704e56474cb367f631293_prof);

        
        $__internal_4df3bdf62147cf29d488f06ea1ce5b0c4d92b5903c56522582d548cb1ca68fd2->leave($__internal_4df3bdf62147cf29d488f06ea1ce5b0c4d92b5903c56522582d548cb1ca68fd2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7905c40349bdc2db1febce86b73d9294d0a08182ab691f220c3f0658117971b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7905c40349bdc2db1febce86b73d9294d0a08182ab691f220c3f0658117971b2->enter($__internal_7905c40349bdc2db1febce86b73d9294d0a08182ab691f220c3f0658117971b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_3ea51af0cd6d24520d4e31551672546b3b4f81c17ea7d69ea3673bcb7998ad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea51af0cd6d24520d4e31551672546b3b4f81c17ea7d69ea3673bcb7998ad2b->enter($__internal_3ea51af0cd6d24520d4e31551672546b3b4f81c17ea7d69ea3673bcb7998ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3ea51af0cd6d24520d4e31551672546b3b4f81c17ea7d69ea3673bcb7998ad2b->leave($__internal_3ea51af0cd6d24520d4e31551672546b3b4f81c17ea7d69ea3673bcb7998ad2b_prof);

        
        $__internal_7905c40349bdc2db1febce86b73d9294d0a08182ab691f220c3f0658117971b2->leave($__internal_7905c40349bdc2db1febce86b73d9294d0a08182ab691f220c3f0658117971b2_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
