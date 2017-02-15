<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_50cae5353c9915028dcf2245eb82a3c3f5efe02114f0558684c8de87e9882d6a extends Twig_Template
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
        $__internal_3787f9d90a9989a426acbbfed79836c5112d85fd303acc5096625f919a0f6ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3787f9d90a9989a426acbbfed79836c5112d85fd303acc5096625f919a0f6ab8->enter($__internal_3787f9d90a9989a426acbbfed79836c5112d85fd303acc5096625f919a0f6ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_c70de10cec4aad797b29cd284507cc77e7765c5f4602b28a9151d3eafa7d05f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70de10cec4aad797b29cd284507cc77e7765c5f4602b28a9151d3eafa7d05f1->enter($__internal_c70de10cec4aad797b29cd284507cc77e7765c5f4602b28a9151d3eafa7d05f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_3787f9d90a9989a426acbbfed79836c5112d85fd303acc5096625f919a0f6ab8->leave($__internal_3787f9d90a9989a426acbbfed79836c5112d85fd303acc5096625f919a0f6ab8_prof);

        
        $__internal_c70de10cec4aad797b29cd284507cc77e7765c5f4602b28a9151d3eafa7d05f1->leave($__internal_c70de10cec4aad797b29cd284507cc77e7765c5f4602b28a9151d3eafa7d05f1_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f0e4621a83aae8f4cee707efd225f6c9ee0c3de28641e1be109ebc72861957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f0e4621a83aae8f4cee707efd225f6c9ee0c3de28641e1be109ebc72861957->enter($__internal_86f0e4621a83aae8f4cee707efd225f6c9ee0c3de28641e1be109ebc72861957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2ae8918ae09a3dcfb10fd79d0f5ffa99dcb841eeea118c2c58a0f40ab4715ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ae8918ae09a3dcfb10fd79d0f5ffa99dcb841eeea118c2c58a0f40ab4715ef->enter($__internal_d2ae8918ae09a3dcfb10fd79d0f5ffa99dcb841eeea118c2c58a0f40ab4715ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_d2ae8918ae09a3dcfb10fd79d0f5ffa99dcb841eeea118c2c58a0f40ab4715ef->leave($__internal_d2ae8918ae09a3dcfb10fd79d0f5ffa99dcb841eeea118c2c58a0f40ab4715ef_prof);

        
        $__internal_86f0e4621a83aae8f4cee707efd225f6c9ee0c3de28641e1be109ebc72861957->leave($__internal_86f0e4621a83aae8f4cee707efd225f6c9ee0c3de28641e1be109ebc72861957_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_68291f4c31d8b1263af7bd698b4e7310f76039953d610bbdfefa52a221adb7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68291f4c31d8b1263af7bd698b4e7310f76039953d610bbdfefa52a221adb7a8->enter($__internal_68291f4c31d8b1263af7bd698b4e7310f76039953d610bbdfefa52a221adb7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_491df87b5289b99cd3ea354157b6ab49ad9923106c3841cf4ec9c782d24fcb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491df87b5289b99cd3ea354157b6ab49ad9923106c3841cf4ec9c782d24fcb6a->enter($__internal_491df87b5289b99cd3ea354157b6ab49ad9923106c3841cf4ec9c782d24fcb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Tipus de visita</th>
        <th>Descripció</th>
        <th>Metge visitat</th>
        <th>Pacient visitat</th>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Visites"]) ? $context["Visites"] : $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "tipusvisita", array()), "tipus", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "descripcio", array()), "html", null, true);
            echo "</td>                
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "metgevisitat", array()), "dni", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visites"], "pacientvisitat", array()), "dni", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
</table>
";
        
        $__internal_491df87b5289b99cd3ea354157b6ab49ad9923106c3841cf4ec9c782d24fcb6a->leave($__internal_491df87b5289b99cd3ea354157b6ab49ad9923106c3841cf4ec9c782d24fcb6a_prof);

        
        $__internal_68291f4c31d8b1263af7bd698b4e7310f76039953d610bbdfefa52a221adb7a8->leave($__internal_68291f4c31d8b1263af7bd698b4e7310f76039953d610bbdfefa52a221adb7a8_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  84 => 16,  80 => 15,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
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
        <th>Tipus de visita</th>
        <th>Descripció</th>
        <th>Metge visitat</th>
        <th>Pacient visitat</th>
    </thead>
    <tbody>
        {% for visites in Visites %}
            <tr>
                <td>{{ visites.ref }}</td>
                <td>{{ visites.data|date('Y-m-d') }}</td>
                <td>{{ visites.hora|date('H:i:s') }}</td>
                <td>{{ visites.tipusvisita.tipus }}</td>
                <td>{{ visites.descripcio }}</td>                
                <td>{{ visites.metgevisitat.dni }}</td>
                <td>{{ visites.pacientvisitat.dni }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
