<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_92347b1168ed09a94fc0757aabafa7b171e39b6994394f759dfe628ba61e2e83 extends Twig_Template
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
        $__internal_7a723d4aba16cbc8fa1484d9d26d74d723a5cee8299e3b6ba98d97acece90da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a723d4aba16cbc8fa1484d9d26d74d723a5cee8299e3b6ba98d97acece90da2->enter($__internal_7a723d4aba16cbc8fa1484d9d26d74d723a5cee8299e3b6ba98d97acece90da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_f89c82a0b07530cb23d14466fbed181f17713c39b8010f2c429567db4dc7f656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89c82a0b07530cb23d14466fbed181f17713c39b8010f2c429567db4dc7f656->enter($__internal_f89c82a0b07530cb23d14466fbed181f17713c39b8010f2c429567db4dc7f656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_7a723d4aba16cbc8fa1484d9d26d74d723a5cee8299e3b6ba98d97acece90da2->leave($__internal_7a723d4aba16cbc8fa1484d9d26d74d723a5cee8299e3b6ba98d97acece90da2_prof);

        
        $__internal_f89c82a0b07530cb23d14466fbed181f17713c39b8010f2c429567db4dc7f656->leave($__internal_f89c82a0b07530cb23d14466fbed181f17713c39b8010f2c429567db4dc7f656_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4937842ead269ead7f8cad21197c41a559215cf8f799ef07c2da537d5faf305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4937842ead269ead7f8cad21197c41a559215cf8f799ef07c2da537d5faf305->enter($__internal_e4937842ead269ead7f8cad21197c41a559215cf8f799ef07c2da537d5faf305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92c3884f964794561ba83a4fdbf47f08c72680f1a5c935b4e2ab9261e62f00a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c3884f964794561ba83a4fdbf47f08c72680f1a5c935b4e2ab9261e62f00a2->enter($__internal_92c3884f964794561ba83a4fdbf47f08c72680f1a5c935b4e2ab9261e62f00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_92c3884f964794561ba83a4fdbf47f08c72680f1a5c935b4e2ab9261e62f00a2->leave($__internal_92c3884f964794561ba83a4fdbf47f08c72680f1a5c935b4e2ab9261e62f00a2_prof);

        
        $__internal_e4937842ead269ead7f8cad21197c41a559215cf8f799ef07c2da537d5faf305->leave($__internal_e4937842ead269ead7f8cad21197c41a559215cf8f799ef07c2da537d5faf305_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_316d72dc7dfad2ed7eecf30acfd44fdda2bd10d5195e698b7a58fe9fca0f7e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316d72dc7dfad2ed7eecf30acfd44fdda2bd10d5195e698b7a58fe9fca0f7e0b->enter($__internal_316d72dc7dfad2ed7eecf30acfd44fdda2bd10d5195e698b7a58fe9fca0f7e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_7d3ee4f981e7c7f9f5b13dc07f13b6a071eed1b6f78f513bbce419b5b3d282fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3ee4f981e7c7f9f5b13dc07f13b6a071eed1b6f78f513bbce419b5b3d282fe->enter($__internal_7d3ee4f981e7c7f9f5b13dc07f13b6a071eed1b6f78f513bbce419b5b3d282fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_7d3ee4f981e7c7f9f5b13dc07f13b6a071eed1b6f78f513bbce419b5b3d282fe->leave($__internal_7d3ee4f981e7c7f9f5b13dc07f13b6a071eed1b6f78f513bbce419b5b3d282fe_prof);

        
        $__internal_316d72dc7dfad2ed7eecf30acfd44fdda2bd10d5195e698b7a58fe9fca0f7e0b->leave($__internal_316d72dc7dfad2ed7eecf30acfd44fdda2bd10d5195e698b7a58fe9fca0f7e0b_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
