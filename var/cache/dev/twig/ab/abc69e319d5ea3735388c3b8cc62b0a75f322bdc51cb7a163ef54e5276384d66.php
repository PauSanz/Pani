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
        $__internal_a25588757743cd4213fa1f36f539ed1eb6b7455460ebf8717ec642b24fbf3691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25588757743cd4213fa1f36f539ed1eb6b7455460ebf8717ec642b24fbf3691->enter($__internal_a25588757743cd4213fa1f36f539ed1eb6b7455460ebf8717ec642b24fbf3691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_24505a6e5857984a392678a78376697741d67cde100ef30bcf2c10e1212e4fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24505a6e5857984a392678a78376697741d67cde100ef30bcf2c10e1212e4fb0->enter($__internal_24505a6e5857984a392678a78376697741d67cde100ef30bcf2c10e1212e4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a25588757743cd4213fa1f36f539ed1eb6b7455460ebf8717ec642b24fbf3691->leave($__internal_a25588757743cd4213fa1f36f539ed1eb6b7455460ebf8717ec642b24fbf3691_prof);

        
        $__internal_24505a6e5857984a392678a78376697741d67cde100ef30bcf2c10e1212e4fb0->leave($__internal_24505a6e5857984a392678a78376697741d67cde100ef30bcf2c10e1212e4fb0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e67c4bb74074ca8d2acefb4b98dd210f86608d989652d71182cd6d87b5a77195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67c4bb74074ca8d2acefb4b98dd210f86608d989652d71182cd6d87b5a77195->enter($__internal_e67c4bb74074ca8d2acefb4b98dd210f86608d989652d71182cd6d87b5a77195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e27c820123d5ea42cb9a0e07eff9e4150733f096c39c089325a9cfbf7d277d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27c820123d5ea42cb9a0e07eff9e4150733f096c39c089325a9cfbf7d277d83->enter($__internal_e27c820123d5ea42cb9a0e07eff9e4150733f096c39c089325a9cfbf7d277d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_e27c820123d5ea42cb9a0e07eff9e4150733f096c39c089325a9cfbf7d277d83->leave($__internal_e27c820123d5ea42cb9a0e07eff9e4150733f096c39c089325a9cfbf7d277d83_prof);

        
        $__internal_e67c4bb74074ca8d2acefb4b98dd210f86608d989652d71182cd6d87b5a77195->leave($__internal_e67c4bb74074ca8d2acefb4b98dd210f86608d989652d71182cd6d87b5a77195_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_eec03bf8c9e64c722e1bc053a6a342c4610ac8429b6f0b20331075f8f0c6b972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec03bf8c9e64c722e1bc053a6a342c4610ac8429b6f0b20331075f8f0c6b972->enter($__internal_eec03bf8c9e64c722e1bc053a6a342c4610ac8429b6f0b20331075f8f0c6b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_33d598beeabd1db275aa9860b8b9f5547983b1f8206430812307c6186d10376e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d598beeabd1db275aa9860b8b9f5547983b1f8206430812307c6186d10376e->enter($__internal_33d598beeabd1db275aa9860b8b9f5547983b1f8206430812307c6186d10376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_33d598beeabd1db275aa9860b8b9f5547983b1f8206430812307c6186d10376e->leave($__internal_33d598beeabd1db275aa9860b8b9f5547983b1f8206430812307c6186d10376e_prof);

        
        $__internal_eec03bf8c9e64c722e1bc053a6a342c4610ac8429b6f0b20331075f8f0c6b972->leave($__internal_eec03bf8c9e64c722e1bc053a6a342c4610ac8429b6f0b20331075f8f0c6b972_prof);

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
