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
        $__internal_7d619178fd3778d89f759916b1bcd7db342fb04622b003af2ef7e82b837b5804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d619178fd3778d89f759916b1bcd7db342fb04622b003af2ef7e82b837b5804->enter($__internal_7d619178fd3778d89f759916b1bcd7db342fb04622b003af2ef7e82b837b5804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_aed1188514ec36db8f64e8e45e4198158063f6f83aa55839f46d2800d050ca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed1188514ec36db8f64e8e45e4198158063f6f83aa55839f46d2800d050ca29->enter($__internal_aed1188514ec36db8f64e8e45e4198158063f6f83aa55839f46d2800d050ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_7d619178fd3778d89f759916b1bcd7db342fb04622b003af2ef7e82b837b5804->leave($__internal_7d619178fd3778d89f759916b1bcd7db342fb04622b003af2ef7e82b837b5804_prof);

        
        $__internal_aed1188514ec36db8f64e8e45e4198158063f6f83aa55839f46d2800d050ca29->leave($__internal_aed1188514ec36db8f64e8e45e4198158063f6f83aa55839f46d2800d050ca29_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_85196f93436664fbb93527adaca29f6b85159778a6a5e24d9876b94b0f0499e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85196f93436664fbb93527adaca29f6b85159778a6a5e24d9876b94b0f0499e8->enter($__internal_85196f93436664fbb93527adaca29f6b85159778a6a5e24d9876b94b0f0499e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e178e262d795419f44d5c84244ba6774cc5e94326cb8e456e9166ee77665eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e178e262d795419f44d5c84244ba6774cc5e94326cb8e456e9166ee77665eda->enter($__internal_9e178e262d795419f44d5c84244ba6774cc5e94326cb8e456e9166ee77665eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_9e178e262d795419f44d5c84244ba6774cc5e94326cb8e456e9166ee77665eda->leave($__internal_9e178e262d795419f44d5c84244ba6774cc5e94326cb8e456e9166ee77665eda_prof);

        
        $__internal_85196f93436664fbb93527adaca29f6b85159778a6a5e24d9876b94b0f0499e8->leave($__internal_85196f93436664fbb93527adaca29f6b85159778a6a5e24d9876b94b0f0499e8_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ef7518fb5940675bc959b55938cd1cc6680801b61e865ec72f07ec6e6c676d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7518fb5940675bc959b55938cd1cc6680801b61e865ec72f07ec6e6c676d4f->enter($__internal_ef7518fb5940675bc959b55938cd1cc6680801b61e865ec72f07ec6e6c676d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_23d4c712e4edbfb6fa2fb37fdf5ca83c1ec8b5792a4b53fd277059d7a8bb67fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d4c712e4edbfb6fa2fb37fdf5ca83c1ec8b5792a4b53fd277059d7a8bb67fc->enter($__internal_23d4c712e4edbfb6fa2fb37fdf5ca83c1ec8b5792a4b53fd277059d7a8bb67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_23d4c712e4edbfb6fa2fb37fdf5ca83c1ec8b5792a4b53fd277059d7a8bb67fc->leave($__internal_23d4c712e4edbfb6fa2fb37fdf5ca83c1ec8b5792a4b53fd277059d7a8bb67fc_prof);

        
        $__internal_ef7518fb5940675bc959b55938cd1cc6680801b61e865ec72f07ec6e6c676d4f->leave($__internal_ef7518fb5940675bc959b55938cd1cc6680801b61e865ec72f07ec6e6c676d4f_prof);

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
