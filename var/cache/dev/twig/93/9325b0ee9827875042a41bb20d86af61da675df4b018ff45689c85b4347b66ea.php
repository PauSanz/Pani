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
        $__internal_187d588af0ec78051ca2d04870b11e2cd74c2b140f91a62e4268638675978add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187d588af0ec78051ca2d04870b11e2cd74c2b140f91a62e4268638675978add->enter($__internal_187d588af0ec78051ca2d04870b11e2cd74c2b140f91a62e4268638675978add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_9b9708486d77c075b32f47cef09799b733b9da474a2eff13ec04fe2e7c48d4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9708486d77c075b32f47cef09799b733b9da474a2eff13ec04fe2e7c48d4fd->enter($__internal_9b9708486d77c075b32f47cef09799b733b9da474a2eff13ec04fe2e7c48d4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_187d588af0ec78051ca2d04870b11e2cd74c2b140f91a62e4268638675978add->leave($__internal_187d588af0ec78051ca2d04870b11e2cd74c2b140f91a62e4268638675978add_prof);

        
        $__internal_9b9708486d77c075b32f47cef09799b733b9da474a2eff13ec04fe2e7c48d4fd->leave($__internal_9b9708486d77c075b32f47cef09799b733b9da474a2eff13ec04fe2e7c48d4fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b21bf5b18501fd4a75c8b3f6503cd10ec3358d8d7962546a1a1aeb66d24194a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21bf5b18501fd4a75c8b3f6503cd10ec3358d8d7962546a1a1aeb66d24194a4->enter($__internal_b21bf5b18501fd4a75c8b3f6503cd10ec3358d8d7962546a1a1aeb66d24194a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4febdcaca7fd402d66f990c470f52c289e13ca3a4c3e43b7f3fe2c7c4a14b61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4febdcaca7fd402d66f990c470f52c289e13ca3a4c3e43b7f3fe2c7c4a14b61b->enter($__internal_4febdcaca7fd402d66f990c470f52c289e13ca3a4c3e43b7f3fe2c7c4a14b61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_4febdcaca7fd402d66f990c470f52c289e13ca3a4c3e43b7f3fe2c7c4a14b61b->leave($__internal_4febdcaca7fd402d66f990c470f52c289e13ca3a4c3e43b7f3fe2c7c4a14b61b_prof);

        
        $__internal_b21bf5b18501fd4a75c8b3f6503cd10ec3358d8d7962546a1a1aeb66d24194a4->leave($__internal_b21bf5b18501fd4a75c8b3f6503cd10ec3358d8d7962546a1a1aeb66d24194a4_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d4832e34950925ef4a56ec76ceddfb25c5d86f5758bffefc5cf173a2864f2a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4832e34950925ef4a56ec76ceddfb25c5d86f5758bffefc5cf173a2864f2a1a->enter($__internal_d4832e34950925ef4a56ec76ceddfb25c5d86f5758bffefc5cf173a2864f2a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_0b56bcc2e1d470e58d13508f355995a9a3e456e65db10195df54cd412bf72a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b56bcc2e1d470e58d13508f355995a9a3e456e65db10195df54cd412bf72a49->enter($__internal_0b56bcc2e1d470e58d13508f355995a9a3e456e65db10195df54cd412bf72a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_0b56bcc2e1d470e58d13508f355995a9a3e456e65db10195df54cd412bf72a49->leave($__internal_0b56bcc2e1d470e58d13508f355995a9a3e456e65db10195df54cd412bf72a49_prof);

        
        $__internal_d4832e34950925ef4a56ec76ceddfb25c5d86f5758bffefc5cf173a2864f2a1a->leave($__internal_d4832e34950925ef4a56ec76ceddfb25c5d86f5758bffefc5cf173a2864f2a1a_prof);

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
