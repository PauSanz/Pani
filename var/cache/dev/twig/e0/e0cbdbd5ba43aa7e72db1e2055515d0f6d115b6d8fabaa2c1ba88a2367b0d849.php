<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_bc12b8b575d41b801d9dcb49a2cd0c7f7803a81415891ef27be6d607c98bf0cb extends Twig_Template
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
        $__internal_e6eca59aca5830ec1469d76d74d574f11c92e6a51718fc071e8f89e88c8099dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6eca59aca5830ec1469d76d74d574f11c92e6a51718fc071e8f89e88c8099dd->enter($__internal_e6eca59aca5830ec1469d76d74d574f11c92e6a51718fc071e8f89e88c8099dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_a7e2060dda407a955fd78a1b580b8c654ee4cc104a7a9f58e116b71ceaba5baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e2060dda407a955fd78a1b580b8c654ee4cc104a7a9f58e116b71ceaba5baa->enter($__internal_a7e2060dda407a955fd78a1b580b8c654ee4cc104a7a9f58e116b71ceaba5baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6eca59aca5830ec1469d76d74d574f11c92e6a51718fc071e8f89e88c8099dd->leave($__internal_e6eca59aca5830ec1469d76d74d574f11c92e6a51718fc071e8f89e88c8099dd_prof);

        
        $__internal_a7e2060dda407a955fd78a1b580b8c654ee4cc104a7a9f58e116b71ceaba5baa->leave($__internal_a7e2060dda407a955fd78a1b580b8c654ee4cc104a7a9f58e116b71ceaba5baa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_585a9407b2f47630176d5cf59e75a91800fe33829ff9008123ad735563d38b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585a9407b2f47630176d5cf59e75a91800fe33829ff9008123ad735563d38b65->enter($__internal_585a9407b2f47630176d5cf59e75a91800fe33829ff9008123ad735563d38b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad40a85fd7d5f15049f8d67abfa65e9b0f4230ac82ec442ac5b1e7a7f71c4550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad40a85fd7d5f15049f8d67abfa65e9b0f4230ac82ec442ac5b1e7a7f71c4550->enter($__internal_ad40a85fd7d5f15049f8d67abfa65e9b0f4230ac82ec442ac5b1e7a7f71c4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_ad40a85fd7d5f15049f8d67abfa65e9b0f4230ac82ec442ac5b1e7a7f71c4550->leave($__internal_ad40a85fd7d5f15049f8d67abfa65e9b0f4230ac82ec442ac5b1e7a7f71c4550_prof);

        
        $__internal_585a9407b2f47630176d5cf59e75a91800fe33829ff9008123ad735563d38b65->leave($__internal_585a9407b2f47630176d5cf59e75a91800fe33829ff9008123ad735563d38b65_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_040515b3e0962a39a771594555f501d050c1c9fd474d2fc86621b3a2f4f8fc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040515b3e0962a39a771594555f501d050c1c9fd474d2fc86621b3a2f4f8fc1d->enter($__internal_040515b3e0962a39a771594555f501d050c1c9fd474d2fc86621b3a2f4f8fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_3cf4b3abf312c1b56d82d019d099a604a83a60fc0366995fd17ccd05c87c0046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf4b3abf312c1b56d82d019d099a604a83a60fc0366995fd17ccd05c87c0046->enter($__internal_3cf4b3abf312c1b56d82d019d099a604a83a60fc0366995fd17ccd05c87c0046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3cf4b3abf312c1b56d82d019d099a604a83a60fc0366995fd17ccd05c87c0046->leave($__internal_3cf4b3abf312c1b56d82d019d099a604a83a60fc0366995fd17ccd05c87c0046_prof);

        
        $__internal_040515b3e0962a39a771594555f501d050c1c9fd474d2fc86621b3a2f4f8fc1d->leave($__internal_040515b3e0962a39a771594555f501d050c1c9fd474d2fc86621b3a2f4f8fc1d_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
