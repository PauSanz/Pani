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
        $__internal_5b1df66d579f7a200d1fb9442df3bd6a03dd1ad40a662078281d8143fc6662fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1df66d579f7a200d1fb9442df3bd6a03dd1ad40a662078281d8143fc6662fc->enter($__internal_5b1df66d579f7a200d1fb9442df3bd6a03dd1ad40a662078281d8143fc6662fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_d5e3c02ed691fc0db1b1b33f0cc728b38900a68ef9b41f5b61774cfa8433a0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3c02ed691fc0db1b1b33f0cc728b38900a68ef9b41f5b61774cfa8433a0e1->enter($__internal_d5e3c02ed691fc0db1b1b33f0cc728b38900a68ef9b41f5b61774cfa8433a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_5b1df66d579f7a200d1fb9442df3bd6a03dd1ad40a662078281d8143fc6662fc->leave($__internal_5b1df66d579f7a200d1fb9442df3bd6a03dd1ad40a662078281d8143fc6662fc_prof);

        
        $__internal_d5e3c02ed691fc0db1b1b33f0cc728b38900a68ef9b41f5b61774cfa8433a0e1->leave($__internal_d5e3c02ed691fc0db1b1b33f0cc728b38900a68ef9b41f5b61774cfa8433a0e1_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_53a8c6c5771f39f70913e49510062e697320dad8a75051112b90f7b1ed7195a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a8c6c5771f39f70913e49510062e697320dad8a75051112b90f7b1ed7195a6->enter($__internal_53a8c6c5771f39f70913e49510062e697320dad8a75051112b90f7b1ed7195a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af4d2e0b3ed60f588aee3bd483356f2b9219a9003484ed5fc663566d44bd636a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4d2e0b3ed60f588aee3bd483356f2b9219a9003484ed5fc663566d44bd636a->enter($__internal_af4d2e0b3ed60f588aee3bd483356f2b9219a9003484ed5fc663566d44bd636a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_af4d2e0b3ed60f588aee3bd483356f2b9219a9003484ed5fc663566d44bd636a->leave($__internal_af4d2e0b3ed60f588aee3bd483356f2b9219a9003484ed5fc663566d44bd636a_prof);

        
        $__internal_53a8c6c5771f39f70913e49510062e697320dad8a75051112b90f7b1ed7195a6->leave($__internal_53a8c6c5771f39f70913e49510062e697320dad8a75051112b90f7b1ed7195a6_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6c80bcd36dd27371288c010fe2c42a9fe90a380eb032d67849b4e24e62a42e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c80bcd36dd27371288c010fe2c42a9fe90a380eb032d67849b4e24e62a42e76->enter($__internal_6c80bcd36dd27371288c010fe2c42a9fe90a380eb032d67849b4e24e62a42e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_15fde31fe1fab9d459e53fc9a764261866bf18c20021ac02a3216cd826b802c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fde31fe1fab9d459e53fc9a764261866bf18c20021ac02a3216cd826b802c3->enter($__internal_15fde31fe1fab9d459e53fc9a764261866bf18c20021ac02a3216cd826b802c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visites"] ?? $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_detallsvisita", array("ref" => $this->getAttribute($context["visites"], "ref", array()))), "html", null, true);
            echo "\">Veure Detalls</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_15fde31fe1fab9d459e53fc9a764261866bf18c20021ac02a3216cd826b802c3->leave($__internal_15fde31fe1fab9d459e53fc9a764261866bf18c20021ac02a3216cd826b802c3_prof);

        
        $__internal_6c80bcd36dd27371288c010fe2c42a9fe90a380eb032d67849b4e24e62a42e76->leave($__internal_6c80bcd36dd27371288c010fe2c42a9fe90a380eb032d67849b4e24e62a42e76_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  80 => 12,  76 => 11,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
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
