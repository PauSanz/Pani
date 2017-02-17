<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_2f1b39ec90137fcea09c178015f3b489d4a8a00ac4fbcf508cef568386c18cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:vmetges.html.twig", 1);
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
        $__internal_9d5d658c62f1f075eef2e5b1d586dc4b0cfb9cb687461b7d9bc5a14e84a6d438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5d658c62f1f075eef2e5b1d586dc4b0cfb9cb687461b7d9bc5a14e84a6d438->enter($__internal_9d5d658c62f1f075eef2e5b1d586dc4b0cfb9cb687461b7d9bc5a14e84a6d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_4eb18d7e610c335b773ca9916907df7efe3bb8dbe5bfc142b5fd01457ef1f486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb18d7e610c335b773ca9916907df7efe3bb8dbe5bfc142b5fd01457ef1f486->enter($__internal_4eb18d7e610c335b773ca9916907df7efe3bb8dbe5bfc142b5fd01457ef1f486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5d658c62f1f075eef2e5b1d586dc4b0cfb9cb687461b7d9bc5a14e84a6d438->leave($__internal_9d5d658c62f1f075eef2e5b1d586dc4b0cfb9cb687461b7d9bc5a14e84a6d438_prof);

        
        $__internal_4eb18d7e610c335b773ca9916907df7efe3bb8dbe5bfc142b5fd01457ef1f486->leave($__internal_4eb18d7e610c335b773ca9916907df7efe3bb8dbe5bfc142b5fd01457ef1f486_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4517386ffeb8515164ceeadfdcd62c93dbcc4da750b5268bd65e9dbc3737a813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4517386ffeb8515164ceeadfdcd62c93dbcc4da750b5268bd65e9dbc3737a813->enter($__internal_4517386ffeb8515164ceeadfdcd62c93dbcc4da750b5268bd65e9dbc3737a813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d71dccd2db0dc49b6d04caec6913b02db26fc66235a03c49340d12c38b4eba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d71dccd2db0dc49b6d04caec6913b02db26fc66235a03c49340d12c38b4eba1->enter($__internal_2d71dccd2db0dc49b6d04caec6913b02db26fc66235a03c49340d12c38b4eba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_2d71dccd2db0dc49b6d04caec6913b02db26fc66235a03c49340d12c38b4eba1->leave($__internal_2d71dccd2db0dc49b6d04caec6913b02db26fc66235a03c49340d12c38b4eba1_prof);

        
        $__internal_4517386ffeb8515164ceeadfdcd62c93dbcc4da750b5268bd65e9dbc3737a813->leave($__internal_4517386ffeb8515164ceeadfdcd62c93dbcc4da750b5268bd65e9dbc3737a813_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_49662437dd033d2dac68e7b47cd29dc2e591bda0223ad51860f343aeb05bb2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49662437dd033d2dac68e7b47cd29dc2e591bda0223ad51860f343aeb05bb2f9->enter($__internal_49662437dd033d2dac68e7b47cd29dc2e591bda0223ad51860f343aeb05bb2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_ed2a8b939b21d33db7c56957e73e7de18e5de6d3193b89d62fd3c94a187f1cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2a8b939b21d33db7c56957e73e7de18e5de6d3193b89d62fd3c94a187f1cde->enter($__internal_ed2a8b939b21d33db7c56957e73e7de18e5de6d3193b89d62fd3c94a187f1cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Metges"]) ? $context["Metges"] : $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 14
            echo "            <tr>
                <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
        
        $__internal_ed2a8b939b21d33db7c56957e73e7de18e5de6d3193b89d62fd3c94a187f1cde->leave($__internal_ed2a8b939b21d33db7c56957e73e7de18e5de6d3193b89d62fd3c94a187f1cde_prof);

        
        $__internal_49662437dd033d2dac68e7b47cd29dc2e591bda0223ad51860f343aeb05bb2f9->leave($__internal_49662437dd033d2dac68e7b47cd29dc2e591bda0223ad51860f343aeb05bb2f9_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vmetges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Metges{% endblock %}
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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vmetges.html.twig");
    }
}
