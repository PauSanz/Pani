<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_d949771794f5ad5022333c65defe3890f8fbf3ae233acbdb8fc01440584a35cc extends Twig_Template
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
        $__internal_f81b3cb80f222ba98e0dd42a8dfad6e24f56419259812c0214f211708228d134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81b3cb80f222ba98e0dd42a8dfad6e24f56419259812c0214f211708228d134->enter($__internal_f81b3cb80f222ba98e0dd42a8dfad6e24f56419259812c0214f211708228d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_464a15f8907f1ddc6b0838ab2b0d71e67d581d2a845a6de8f0b6d7860b6a6a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464a15f8907f1ddc6b0838ab2b0d71e67d581d2a845a6de8f0b6d7860b6a6a09->enter($__internal_464a15f8907f1ddc6b0838ab2b0d71e67d581d2a845a6de8f0b6d7860b6a6a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_f81b3cb80f222ba98e0dd42a8dfad6e24f56419259812c0214f211708228d134->leave($__internal_f81b3cb80f222ba98e0dd42a8dfad6e24f56419259812c0214f211708228d134_prof);

        
        $__internal_464a15f8907f1ddc6b0838ab2b0d71e67d581d2a845a6de8f0b6d7860b6a6a09->leave($__internal_464a15f8907f1ddc6b0838ab2b0d71e67d581d2a845a6de8f0b6d7860b6a6a09_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a633d3f33142901295dd784fd3c56f835d2b20d6cbaaf06eb348d1567bb3b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a633d3f33142901295dd784fd3c56f835d2b20d6cbaaf06eb348d1567bb3b18->enter($__internal_5a633d3f33142901295dd784fd3c56f835d2b20d6cbaaf06eb348d1567bb3b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_744fb258c2854139219f477795acb0fd470fe69207b09b9eff6a3c7a03bee917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744fb258c2854139219f477795acb0fd470fe69207b09b9eff6a3c7a03bee917->enter($__internal_744fb258c2854139219f477795acb0fd470fe69207b09b9eff6a3c7a03bee917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_744fb258c2854139219f477795acb0fd470fe69207b09b9eff6a3c7a03bee917->leave($__internal_744fb258c2854139219f477795acb0fd470fe69207b09b9eff6a3c7a03bee917_prof);

        
        $__internal_5a633d3f33142901295dd784fd3c56f835d2b20d6cbaaf06eb348d1567bb3b18->leave($__internal_5a633d3f33142901295dd784fd3c56f835d2b20d6cbaaf06eb348d1567bb3b18_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c028145285561d8b9763c0c7962071c5c445de64929698d8923a80d341b1170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c028145285561d8b9763c0c7962071c5c445de64929698d8923a80d341b1170d->enter($__internal_c028145285561d8b9763c0c7962071c5c445de64929698d8923a80d341b1170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_aa1b4ec0380085bf25bc47494929374549d6d363d79723b1a12ed61c9dd5ec14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1b4ec0380085bf25bc47494929374549d6d363d79723b1a12ed61c9dd5ec14->enter($__internal_aa1b4ec0380085bf25bc47494929374549d6d363d79723b1a12ed61c9dd5ec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_aa1b4ec0380085bf25bc47494929374549d6d363d79723b1a12ed61c9dd5ec14->leave($__internal_aa1b4ec0380085bf25bc47494929374549d6d363d79723b1a12ed61c9dd5ec14_prof);

        
        $__internal_c028145285561d8b9763c0c7962071c5c445de64929698d8923a80d341b1170d->leave($__internal_c028145285561d8b9763c0c7962071c5c445de64929698d8923a80d341b1170d_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vmetges.html.twig");
    }
}
