<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_2f1b39ec90137fcea09c178015f3b489d4a8a00ac4fbcf508cef568386c18cf8 extends Twig_Template
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
        $__internal_833f82afdd11ee7d9297e9aa197a9d958a3a9d4daeadbdb2d2b5695f379a0528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833f82afdd11ee7d9297e9aa197a9d958a3a9d4daeadbdb2d2b5695f379a0528->enter($__internal_833f82afdd11ee7d9297e9aa197a9d958a3a9d4daeadbdb2d2b5695f379a0528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_67e402cfa109901d9c40b47605d824aacb06f3ba7a0c48c02b4a7eb221a345bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e402cfa109901d9c40b47605d824aacb06f3ba7a0c48c02b4a7eb221a345bb->enter($__internal_67e402cfa109901d9c40b47605d824aacb06f3ba7a0c48c02b4a7eb221a345bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_833f82afdd11ee7d9297e9aa197a9d958a3a9d4daeadbdb2d2b5695f379a0528->leave($__internal_833f82afdd11ee7d9297e9aa197a9d958a3a9d4daeadbdb2d2b5695f379a0528_prof);

        
        $__internal_67e402cfa109901d9c40b47605d824aacb06f3ba7a0c48c02b4a7eb221a345bb->leave($__internal_67e402cfa109901d9c40b47605d824aacb06f3ba7a0c48c02b4a7eb221a345bb_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb911400e7aa5054e31f6f9087311b64f049c0f91615c1fc979cb124938e94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb911400e7aa5054e31f6f9087311b64f049c0f91615c1fc979cb124938e94c->enter($__internal_bfb911400e7aa5054e31f6f9087311b64f049c0f91615c1fc979cb124938e94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e2035527b8f441177508ddfcd62246b10f34a5a04f72d3428fe6bc7a205a691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2035527b8f441177508ddfcd62246b10f34a5a04f72d3428fe6bc7a205a691->enter($__internal_7e2035527b8f441177508ddfcd62246b10f34a5a04f72d3428fe6bc7a205a691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_7e2035527b8f441177508ddfcd62246b10f34a5a04f72d3428fe6bc7a205a691->leave($__internal_7e2035527b8f441177508ddfcd62246b10f34a5a04f72d3428fe6bc7a205a691_prof);

        
        $__internal_bfb911400e7aa5054e31f6f9087311b64f049c0f91615c1fc979cb124938e94c->leave($__internal_bfb911400e7aa5054e31f6f9087311b64f049c0f91615c1fc979cb124938e94c_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_557f18c926f82a3cbbee4463cc024e939142a6465a5fd00d34498c4b23bc02ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557f18c926f82a3cbbee4463cc024e939142a6465a5fd00d34498c4b23bc02ae->enter($__internal_557f18c926f82a3cbbee4463cc024e939142a6465a5fd00d34498c4b23bc02ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_9985cbe1fe8e550f619ee3d2715e392da3afaef3e6345b700da1ddc32bab4521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9985cbe1fe8e550f619ee3d2715e392da3afaef3e6345b700da1ddc32bab4521->enter($__internal_9985cbe1fe8e550f619ee3d2715e392da3afaef3e6345b700da1ddc32bab4521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["Metges"]) ? $context["Metges"] : $this->getContext($context, "Metges")));
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
        
        $__internal_9985cbe1fe8e550f619ee3d2715e392da3afaef3e6345b700da1ddc32bab4521->leave($__internal_9985cbe1fe8e550f619ee3d2715e392da3afaef3e6345b700da1ddc32bab4521_prof);

        
        $__internal_557f18c926f82a3cbbee4463cc024e939142a6465a5fd00d34498c4b23bc02ae->leave($__internal_557f18c926f82a3cbbee4463cc024e939142a6465a5fd00d34498c4b23bc02ae_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vmetges.html.twig");
    }
}
