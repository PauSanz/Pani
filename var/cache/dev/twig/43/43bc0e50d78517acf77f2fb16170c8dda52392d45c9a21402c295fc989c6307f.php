<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_d45ad7769f77557bfbd692ca1c7feb6a03dbbb0d871eac0c5dec9dc0a149bfbd extends Twig_Template
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
        $__internal_909ea59eee2350fe3beafd525767ba70448ed21b0c92e7a6fe62530df980c294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909ea59eee2350fe3beafd525767ba70448ed21b0c92e7a6fe62530df980c294->enter($__internal_909ea59eee2350fe3beafd525767ba70448ed21b0c92e7a6fe62530df980c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_8d853d0b858209517550853fba29fe316246ed1f1de860c0e8c683c4030d9291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d853d0b858209517550853fba29fe316246ed1f1de860c0e8c683c4030d9291->enter($__internal_8d853d0b858209517550853fba29fe316246ed1f1de860c0e8c683c4030d9291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_909ea59eee2350fe3beafd525767ba70448ed21b0c92e7a6fe62530df980c294->leave($__internal_909ea59eee2350fe3beafd525767ba70448ed21b0c92e7a6fe62530df980c294_prof);

        
        $__internal_8d853d0b858209517550853fba29fe316246ed1f1de860c0e8c683c4030d9291->leave($__internal_8d853d0b858209517550853fba29fe316246ed1f1de860c0e8c683c4030d9291_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac33a65c5c15dbe6baf51d5e0b3136db2baf0a30c1cc6ed7a764ca91750e3854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac33a65c5c15dbe6baf51d5e0b3136db2baf0a30c1cc6ed7a764ca91750e3854->enter($__internal_ac33a65c5c15dbe6baf51d5e0b3136db2baf0a30c1cc6ed7a764ca91750e3854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dceff508b8ffcb64498b3dadee7b3a7d3179ef0ca1bfca74d706b91d6134c601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dceff508b8ffcb64498b3dadee7b3a7d3179ef0ca1bfca74d706b91d6134c601->enter($__internal_dceff508b8ffcb64498b3dadee7b3a7d3179ef0ca1bfca74d706b91d6134c601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_dceff508b8ffcb64498b3dadee7b3a7d3179ef0ca1bfca74d706b91d6134c601->leave($__internal_dceff508b8ffcb64498b3dadee7b3a7d3179ef0ca1bfca74d706b91d6134c601_prof);

        
        $__internal_ac33a65c5c15dbe6baf51d5e0b3136db2baf0a30c1cc6ed7a764ca91750e3854->leave($__internal_ac33a65c5c15dbe6baf51d5e0b3136db2baf0a30c1cc6ed7a764ca91750e3854_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e04f0c50f8b2e995fa87c78af65097e240e62820dcda8ed8fc04bafe902d4ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04f0c50f8b2e995fa87c78af65097e240e62820dcda8ed8fc04bafe902d4ceb->enter($__internal_e04f0c50f8b2e995fa87c78af65097e240e62820dcda8ed8fc04bafe902d4ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_538fc163ad285b66c94fc7320bd9146f455525ff58b3e0fa08e1f39136a0cdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538fc163ad285b66c94fc7320bd9146f455525ff58b3e0fa08e1f39136a0cdcd->enter($__internal_538fc163ad285b66c94fc7320bd9146f455525ff58b3e0fa08e1f39136a0cdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>DNI</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Especialitat</th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Metges"] ?? $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 13
            echo "            <tr>
                <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_538fc163ad285b66c94fc7320bd9146f455525ff58b3e0fa08e1f39136a0cdcd->leave($__internal_538fc163ad285b66c94fc7320bd9146f455525ff58b3e0fa08e1f39136a0cdcd_prof);

        
        $__internal_e04f0c50f8b2e995fa87c78af65097e240e62820dcda8ed8fc04bafe902d4ceb->leave($__internal_e04f0c50f8b2e995fa87c78af65097e240e62820dcda8ed8fc04bafe902d4ceb_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vmetges.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 20,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  81 => 13,  77 => 12,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Metges{% endblock %}
{% block page_content %}
    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>DNI</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Especialitat</th>
    </thead>
    <tbody>
        {% for metge in Metges %}
            <tr>
                <th>{{ metge.dni }}</th>
                <td>{{ metge.nom }}</td>
                <td>{{ metge.cognom }}</td>
                <td>{{ metge.especialitat }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
