<?php

/* @clinicaPani/Default/vvisites.html.twig */
class __TwigTemplate_fda68718183cde86f90984662dc956ab921f687062299d0a4c4d847b7602bf93 extends Twig_Template
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
        $__internal_351159af6631f65a73e63c2de436efa1347fe4b0ebc267739c1d0abc63e2bb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351159af6631f65a73e63c2de436efa1347fe4b0ebc267739c1d0abc63e2bb00->enter($__internal_351159af6631f65a73e63c2de436efa1347fe4b0ebc267739c1d0abc63e2bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $__internal_01b3669a431dd5f6950c2a30d90f0e85ca3318bb9682be9068bcd375ec2abee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b3669a431dd5f6950c2a30d90f0e85ca3318bb9682be9068bcd375ec2abee5->enter($__internal_01b3669a431dd5f6950c2a30d90f0e85ca3318bb9682be9068bcd375ec2abee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351159af6631f65a73e63c2de436efa1347fe4b0ebc267739c1d0abc63e2bb00->leave($__internal_351159af6631f65a73e63c2de436efa1347fe4b0ebc267739c1d0abc63e2bb00_prof);

        
        $__internal_01b3669a431dd5f6950c2a30d90f0e85ca3318bb9682be9068bcd375ec2abee5->leave($__internal_01b3669a431dd5f6950c2a30d90f0e85ca3318bb9682be9068bcd375ec2abee5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cc18dd99e1880bc9866479b725026bac592a9d43e961a65483cb8a6f83e6d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc18dd99e1880bc9866479b725026bac592a9d43e961a65483cb8a6f83e6d4d->enter($__internal_3cc18dd99e1880bc9866479b725026bac592a9d43e961a65483cb8a6f83e6d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6557647596f97771ab0cb10076bc660eac209985211a428cb0ab34fd6a03220f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6557647596f97771ab0cb10076bc660eac209985211a428cb0ab34fd6a03220f->enter($__internal_6557647596f97771ab0cb10076bc660eac209985211a428cb0ab34fd6a03220f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_6557647596f97771ab0cb10076bc660eac209985211a428cb0ab34fd6a03220f->leave($__internal_6557647596f97771ab0cb10076bc660eac209985211a428cb0ab34fd6a03220f_prof);

        
        $__internal_3cc18dd99e1880bc9866479b725026bac592a9d43e961a65483cb8a6f83e6d4d->leave($__internal_3cc18dd99e1880bc9866479b725026bac592a9d43e961a65483cb8a6f83e6d4d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fb788989baa50dae4254c1636d59b6fc545c1d3401b7d0626fd17b2483f2c9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb788989baa50dae4254c1636d59b6fc545c1d3401b7d0626fd17b2483f2c9f4->enter($__internal_fb788989baa50dae4254c1636d59b6fc545c1d3401b7d0626fd17b2483f2c9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_0cc8655b1accff9f93fe67264382c24f227e93bd844f7b2e010b7ac1b18a7d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc8655b1accff9f93fe67264382c24f227e93bd844f7b2e010b7ac1b18a7d04->enter($__internal_0cc8655b1accff9f93fe67264382c24f227e93bd844f7b2e010b7ac1b18a7d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0cc8655b1accff9f93fe67264382c24f227e93bd844f7b2e010b7ac1b18a7d04->leave($__internal_0cc8655b1accff9f93fe67264382c24f227e93bd844f7b2e010b7ac1b18a7d04_prof);

        
        $__internal_fb788989baa50dae4254c1636d59b6fc545c1d3401b7d0626fd17b2483f2c9f4->leave($__internal_fb788989baa50dae4254c1636d59b6fc545c1d3401b7d0626fd17b2483f2c9f4_prof);

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
{% endblock %}", "@clinicaPani/Default/vvisites.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
