<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_92347b1168ed09a94fc0757aabafa7b171e39b6994394f759dfe628ba61e2e83 extends Twig_Template
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
        $__internal_2bae22175a5388977158cf49b578ceaf66c93d45b209854217392f93f46a8e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bae22175a5388977158cf49b578ceaf66c93d45b209854217392f93f46a8e86->enter($__internal_2bae22175a5388977158cf49b578ceaf66c93d45b209854217392f93f46a8e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_9585e76994ab6f0fcff8fe6c7e962ccdf04693ecf17f2cd4985f4a627a2cad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9585e76994ab6f0fcff8fe6c7e962ccdf04693ecf17f2cd4985f4a627a2cad99->enter($__internal_9585e76994ab6f0fcff8fe6c7e962ccdf04693ecf17f2cd4985f4a627a2cad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bae22175a5388977158cf49b578ceaf66c93d45b209854217392f93f46a8e86->leave($__internal_2bae22175a5388977158cf49b578ceaf66c93d45b209854217392f93f46a8e86_prof);

        
        $__internal_9585e76994ab6f0fcff8fe6c7e962ccdf04693ecf17f2cd4985f4a627a2cad99->leave($__internal_9585e76994ab6f0fcff8fe6c7e962ccdf04693ecf17f2cd4985f4a627a2cad99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7c3769320691218ffc30594fdeeb8265e4b280b6ffac887b902b661a7a1afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7c3769320691218ffc30594fdeeb8265e4b280b6ffac887b902b661a7a1afa->enter($__internal_ea7c3769320691218ffc30594fdeeb8265e4b280b6ffac887b902b661a7a1afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d1f2a388519b1bbd683e6b31e9353de107e91568c2b81e2cd8fbc6769360583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1f2a388519b1bbd683e6b31e9353de107e91568c2b81e2cd8fbc6769360583->enter($__internal_3d1f2a388519b1bbd683e6b31e9353de107e91568c2b81e2cd8fbc6769360583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_3d1f2a388519b1bbd683e6b31e9353de107e91568c2b81e2cd8fbc6769360583->leave($__internal_3d1f2a388519b1bbd683e6b31e9353de107e91568c2b81e2cd8fbc6769360583_prof);

        
        $__internal_ea7c3769320691218ffc30594fdeeb8265e4b280b6ffac887b902b661a7a1afa->leave($__internal_ea7c3769320691218ffc30594fdeeb8265e4b280b6ffac887b902b661a7a1afa_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1e2766ee056b9d0700be40716008e1218066ebb3db55df561b98e3ccfae2c095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2766ee056b9d0700be40716008e1218066ebb3db55df561b98e3ccfae2c095->enter($__internal_1e2766ee056b9d0700be40716008e1218066ebb3db55df561b98e3ccfae2c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_61e0a65bef34c34ff83d19167340c64838743b4cf6db17bd16770607f80ac64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e0a65bef34c34ff83d19167340c64838743b4cf6db17bd16770607f80ac64f->enter($__internal_61e0a65bef34c34ff83d19167340c64838743b4cf6db17bd16770607f80ac64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_61e0a65bef34c34ff83d19167340c64838743b4cf6db17bd16770607f80ac64f->leave($__internal_61e0a65bef34c34ff83d19167340c64838743b4cf6db17bd16770607f80ac64f_prof);

        
        $__internal_1e2766ee056b9d0700be40716008e1218066ebb3db55df561b98e3ccfae2c095->leave($__internal_1e2766ee056b9d0700be40716008e1218066ebb3db55df561b98e3ccfae2c095_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
