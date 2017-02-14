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
        $__internal_3b09adf18d765eba9474a4dc4c32813c4feef423ece5bdb4a444a83be9d8a8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b09adf18d765eba9474a4dc4c32813c4feef423ece5bdb4a444a83be9d8a8eb->enter($__internal_3b09adf18d765eba9474a4dc4c32813c4feef423ece5bdb4a444a83be9d8a8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_6aab64a8e7406cbef89dde8843304d3731eed032e5ea877e75f77a205d6901c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aab64a8e7406cbef89dde8843304d3731eed032e5ea877e75f77a205d6901c6->enter($__internal_6aab64a8e7406cbef89dde8843304d3731eed032e5ea877e75f77a205d6901c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_3b09adf18d765eba9474a4dc4c32813c4feef423ece5bdb4a444a83be9d8a8eb->leave($__internal_3b09adf18d765eba9474a4dc4c32813c4feef423ece5bdb4a444a83be9d8a8eb_prof);

        
        $__internal_6aab64a8e7406cbef89dde8843304d3731eed032e5ea877e75f77a205d6901c6->leave($__internal_6aab64a8e7406cbef89dde8843304d3731eed032e5ea877e75f77a205d6901c6_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eba7f5b2cb5de1f761f99f5187c2a6e6a3eb139aca90c894aa4d3f301a07fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eba7f5b2cb5de1f761f99f5187c2a6e6a3eb139aca90c894aa4d3f301a07fb6->enter($__internal_8eba7f5b2cb5de1f761f99f5187c2a6e6a3eb139aca90c894aa4d3f301a07fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81ae31d637f25e939910284332ba335d0da3eaf53c2d66f47424a2ec1d9532ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ae31d637f25e939910284332ba335d0da3eaf53c2d66f47424a2ec1d9532ae->enter($__internal_81ae31d637f25e939910284332ba335d0da3eaf53c2d66f47424a2ec1d9532ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_81ae31d637f25e939910284332ba335d0da3eaf53c2d66f47424a2ec1d9532ae->leave($__internal_81ae31d637f25e939910284332ba335d0da3eaf53c2d66f47424a2ec1d9532ae_prof);

        
        $__internal_8eba7f5b2cb5de1f761f99f5187c2a6e6a3eb139aca90c894aa4d3f301a07fb6->leave($__internal_8eba7f5b2cb5de1f761f99f5187c2a6e6a3eb139aca90c894aa4d3f301a07fb6_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b5e5c9158e640a1a968723f38c46b9aa27ae75b0db20a9851d37a9d517e72c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e5c9158e640a1a968723f38c46b9aa27ae75b0db20a9851d37a9d517e72c34->enter($__internal_b5e5c9158e640a1a968723f38c46b9aa27ae75b0db20a9851d37a9d517e72c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7fc32ed607f709e5d310b9e3ff05862e155cac10c8260a4486a3df7fe1339fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc32ed607f709e5d310b9e3ff05862e155cac10c8260a4486a3df7fe1339fb7->enter($__internal_7fc32ed607f709e5d310b9e3ff05862e155cac10c8260a4486a3df7fe1339fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_7fc32ed607f709e5d310b9e3ff05862e155cac10c8260a4486a3df7fe1339fb7->leave($__internal_7fc32ed607f709e5d310b9e3ff05862e155cac10c8260a4486a3df7fe1339fb7_prof);

        
        $__internal_b5e5c9158e640a1a968723f38c46b9aa27ae75b0db20a9851d37a9d517e72c34->leave($__internal_b5e5c9158e640a1a968723f38c46b9aa27ae75b0db20a9851d37a9d517e72c34_prof);

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
