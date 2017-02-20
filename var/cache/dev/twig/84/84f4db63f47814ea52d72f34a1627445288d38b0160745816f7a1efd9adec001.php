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
        $__internal_f0e9d92c4891aba862c64cde6e9cc7ee687df55947b9466f36275f3fcd21a9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e9d92c4891aba862c64cde6e9cc7ee687df55947b9466f36275f3fcd21a9dd->enter($__internal_f0e9d92c4891aba862c64cde6e9cc7ee687df55947b9466f36275f3fcd21a9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_baf5d3b6d397cb720a750bb217cfe57c4b8e7f31486e0209fa14ae4b94686d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf5d3b6d397cb720a750bb217cfe57c4b8e7f31486e0209fa14ae4b94686d61->enter($__internal_baf5d3b6d397cb720a750bb217cfe57c4b8e7f31486e0209fa14ae4b94686d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e9d92c4891aba862c64cde6e9cc7ee687df55947b9466f36275f3fcd21a9dd->leave($__internal_f0e9d92c4891aba862c64cde6e9cc7ee687df55947b9466f36275f3fcd21a9dd_prof);

        
        $__internal_baf5d3b6d397cb720a750bb217cfe57c4b8e7f31486e0209fa14ae4b94686d61->leave($__internal_baf5d3b6d397cb720a750bb217cfe57c4b8e7f31486e0209fa14ae4b94686d61_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51a074fa5c6171b72a6e448b8ec7694dabb7082b1d4f7684887728c474c7a923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a074fa5c6171b72a6e448b8ec7694dabb7082b1d4f7684887728c474c7a923->enter($__internal_51a074fa5c6171b72a6e448b8ec7694dabb7082b1d4f7684887728c474c7a923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5362e5159dfa6fa13ec98a50b31de68a0d9a711afc16ec799ff8026ca369622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5362e5159dfa6fa13ec98a50b31de68a0d9a711afc16ec799ff8026ca369622->enter($__internal_e5362e5159dfa6fa13ec98a50b31de68a0d9a711afc16ec799ff8026ca369622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_e5362e5159dfa6fa13ec98a50b31de68a0d9a711afc16ec799ff8026ca369622->leave($__internal_e5362e5159dfa6fa13ec98a50b31de68a0d9a711afc16ec799ff8026ca369622_prof);

        
        $__internal_51a074fa5c6171b72a6e448b8ec7694dabb7082b1d4f7684887728c474c7a923->leave($__internal_51a074fa5c6171b72a6e448b8ec7694dabb7082b1d4f7684887728c474c7a923_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_905e0de5463b6c8860121640786f92773a327dbd0ea491302839007f4e12cca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905e0de5463b6c8860121640786f92773a327dbd0ea491302839007f4e12cca7->enter($__internal_905e0de5463b6c8860121640786f92773a327dbd0ea491302839007f4e12cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f43e236ae45225d51a3875af19796dd019e207d902a257fe8218bda888de92e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43e236ae45225d51a3875af19796dd019e207d902a257fe8218bda888de92e9->enter($__internal_f43e236ae45225d51a3875af19796dd019e207d902a257fe8218bda888de92e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f43e236ae45225d51a3875af19796dd019e207d902a257fe8218bda888de92e9->leave($__internal_f43e236ae45225d51a3875af19796dd019e207d902a257fe8218bda888de92e9_prof);

        
        $__internal_905e0de5463b6c8860121640786f92773a327dbd0ea491302839007f4e12cca7->leave($__internal_905e0de5463b6c8860121640786f92773a327dbd0ea491302839007f4e12cca7_prof);

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
