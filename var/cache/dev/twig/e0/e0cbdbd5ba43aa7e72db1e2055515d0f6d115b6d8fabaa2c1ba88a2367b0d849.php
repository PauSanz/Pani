<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_bc12b8b575d41b801d9dcb49a2cd0c7f7803a81415891ef27be6d607c98bf0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:vvisites.html.twig", 1);
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
        $__internal_d4aaa0bd4b3a915c1b823b55807f20c38adfa1148c0f4865fd5d7e482e65f68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4aaa0bd4b3a915c1b823b55807f20c38adfa1148c0f4865fd5d7e482e65f68b->enter($__internal_d4aaa0bd4b3a915c1b823b55807f20c38adfa1148c0f4865fd5d7e482e65f68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_51c6e520838a533d81eece59de9ac5d5016f70f3ed295015bffc8085d578984a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c6e520838a533d81eece59de9ac5d5016f70f3ed295015bffc8085d578984a->enter($__internal_51c6e520838a533d81eece59de9ac5d5016f70f3ed295015bffc8085d578984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4aaa0bd4b3a915c1b823b55807f20c38adfa1148c0f4865fd5d7e482e65f68b->leave($__internal_d4aaa0bd4b3a915c1b823b55807f20c38adfa1148c0f4865fd5d7e482e65f68b_prof);

        
        $__internal_51c6e520838a533d81eece59de9ac5d5016f70f3ed295015bffc8085d578984a->leave($__internal_51c6e520838a533d81eece59de9ac5d5016f70f3ed295015bffc8085d578984a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95d420c4741a97d8b5e7c78570df92cb897600d7ab9156d86d518de297ce4076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d420c4741a97d8b5e7c78570df92cb897600d7ab9156d86d518de297ce4076->enter($__internal_95d420c4741a97d8b5e7c78570df92cb897600d7ab9156d86d518de297ce4076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5a1b55b544304485bbd2c5af869417519b68112fd2448222483ba073c77bf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a1b55b544304485bbd2c5af869417519b68112fd2448222483ba073c77bf36->enter($__internal_f5a1b55b544304485bbd2c5af869417519b68112fd2448222483ba073c77bf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_f5a1b55b544304485bbd2c5af869417519b68112fd2448222483ba073c77bf36->leave($__internal_f5a1b55b544304485bbd2c5af869417519b68112fd2448222483ba073c77bf36_prof);

        
        $__internal_95d420c4741a97d8b5e7c78570df92cb897600d7ab9156d86d518de297ce4076->leave($__internal_95d420c4741a97d8b5e7c78570df92cb897600d7ab9156d86d518de297ce4076_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b62879f9c7f174beb272d9439419b5d93ec97cac2fe64f17970a48b7e1e58ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62879f9c7f174beb272d9439419b5d93ec97cac2fe64f17970a48b7e1e58ee3->enter($__internal_b62879f9c7f174beb272d9439419b5d93ec97cac2fe64f17970a48b7e1e58ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6e421812d96a507ae1327682de7b69dfaa3f56dd61c7d22663f037840649a6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e421812d96a507ae1327682de7b69dfaa3f56dd61c7d22663f037840649a6d3->enter($__internal_6e421812d96a507ae1327682de7b69dfaa3f56dd61c7d22663f037840649a6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Visites"]) ? $context["Visites"] : $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_detallsvisita", array("ref" => $this->getAttribute($context["visites"], "ref", array()))), "html", null, true);
            echo "\">Veure Detalls</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_6e421812d96a507ae1327682de7b69dfaa3f56dd61c7d22663f037840649a6d3->leave($__internal_6e421812d96a507ae1327682de7b69dfaa3f56dd61c7d22663f037840649a6d3_prof);

        
        $__internal_b62879f9c7f174beb272d9439419b5d93ec97cac2fe64f17970a48b7e1e58ee3->leave($__internal_b62879f9c7f174beb272d9439419b5d93ec97cac2fe64f17970a48b7e1e58ee3_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  82 => 13,  78 => 12,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Visites{% endblock %}
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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
