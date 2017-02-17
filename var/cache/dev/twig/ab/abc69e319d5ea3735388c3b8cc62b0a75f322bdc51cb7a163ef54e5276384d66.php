<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_50cae5353c9915028dcf2245eb82a3c3f5efe02114f0558684c8de87e9882d6a extends Twig_Template
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
        $__internal_1204230eea3505edef3f160c8879b92f54e89fa4033ee0875fe55d86302d20a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1204230eea3505edef3f160c8879b92f54e89fa4033ee0875fe55d86302d20a2->enter($__internal_1204230eea3505edef3f160c8879b92f54e89fa4033ee0875fe55d86302d20a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_b80bc24465261d75e25e4067279fc9da1d043a1ca815d33ba952a8187976922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80bc24465261d75e25e4067279fc9da1d043a1ca815d33ba952a8187976922a->enter($__internal_b80bc24465261d75e25e4067279fc9da1d043a1ca815d33ba952a8187976922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1204230eea3505edef3f160c8879b92f54e89fa4033ee0875fe55d86302d20a2->leave($__internal_1204230eea3505edef3f160c8879b92f54e89fa4033ee0875fe55d86302d20a2_prof);

        
        $__internal_b80bc24465261d75e25e4067279fc9da1d043a1ca815d33ba952a8187976922a->leave($__internal_b80bc24465261d75e25e4067279fc9da1d043a1ca815d33ba952a8187976922a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b20f1fdfc0e2cebf272b3d3c03ac94ab987e3afaa249bf57ace2ad427a0d552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b20f1fdfc0e2cebf272b3d3c03ac94ab987e3afaa249bf57ace2ad427a0d552->enter($__internal_9b20f1fdfc0e2cebf272b3d3c03ac94ab987e3afaa249bf57ace2ad427a0d552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_671011131e6861fb199971f0b27d521a2047a49887e0c8c14bdbe8ff4f8a6c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671011131e6861fb199971f0b27d521a2047a49887e0c8c14bdbe8ff4f8a6c7c->enter($__internal_671011131e6861fb199971f0b27d521a2047a49887e0c8c14bdbe8ff4f8a6c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_671011131e6861fb199971f0b27d521a2047a49887e0c8c14bdbe8ff4f8a6c7c->leave($__internal_671011131e6861fb199971f0b27d521a2047a49887e0c8c14bdbe8ff4f8a6c7c_prof);

        
        $__internal_9b20f1fdfc0e2cebf272b3d3c03ac94ab987e3afaa249bf57ace2ad427a0d552->leave($__internal_9b20f1fdfc0e2cebf272b3d3c03ac94ab987e3afaa249bf57ace2ad427a0d552_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ecf7acb90ad5563d634172578e56dd61a19839c9329c52caaa84bd378971d5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf7acb90ad5563d634172578e56dd61a19839c9329c52caaa84bd378971d5d1->enter($__internal_ecf7acb90ad5563d634172578e56dd61a19839c9329c52caaa84bd378971d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_52c3d94eb20a11cf87bc6ea6931e4fe4c126eade55c88573d3260c33fa425116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c3d94eb20a11cf87bc6ea6931e4fe4c126eade55c88573d3260c33fa425116->enter($__internal_52c3d94eb20a11cf87bc6ea6931e4fe4c126eade55c88573d3260c33fa425116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_52c3d94eb20a11cf87bc6ea6931e4fe4c126eade55c88573d3260c33fa425116->leave($__internal_52c3d94eb20a11cf87bc6ea6931e4fe4c126eade55c88573d3260c33fa425116_prof);

        
        $__internal_ecf7acb90ad5563d634172578e56dd61a19839c9329c52caaa84bd378971d5d1->leave($__internal_ecf7acb90ad5563d634172578e56dd61a19839c9329c52caaa84bd378971d5d1_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
