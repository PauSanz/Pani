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
        $__internal_2a362468f80e0f113e06dcde5eb5ffee17960e787d69d2612db2597698a115b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a362468f80e0f113e06dcde5eb5ffee17960e787d69d2612db2597698a115b2->enter($__internal_2a362468f80e0f113e06dcde5eb5ffee17960e787d69d2612db2597698a115b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_603d48c55a821671a03da5a88ad23a86a3caf40c831ecd1bc1146baa02ffed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603d48c55a821671a03da5a88ad23a86a3caf40c831ecd1bc1146baa02ffed7a->enter($__internal_603d48c55a821671a03da5a88ad23a86a3caf40c831ecd1bc1146baa02ffed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_2a362468f80e0f113e06dcde5eb5ffee17960e787d69d2612db2597698a115b2->leave($__internal_2a362468f80e0f113e06dcde5eb5ffee17960e787d69d2612db2597698a115b2_prof);

        
        $__internal_603d48c55a821671a03da5a88ad23a86a3caf40c831ecd1bc1146baa02ffed7a->leave($__internal_603d48c55a821671a03da5a88ad23a86a3caf40c831ecd1bc1146baa02ffed7a_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bcb53bc0d406a1aca05b8a9ba0bc397f2d929aed577a723f101180ab73b00f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcb53bc0d406a1aca05b8a9ba0bc397f2d929aed577a723f101180ab73b00f4->enter($__internal_5bcb53bc0d406a1aca05b8a9ba0bc397f2d929aed577a723f101180ab73b00f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cca364dc47fa8685f757c4aeeaff77fba9ff42676615fcf6b5ee3f80778be10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cca364dc47fa8685f757c4aeeaff77fba9ff42676615fcf6b5ee3f80778be10->enter($__internal_9cca364dc47fa8685f757c4aeeaff77fba9ff42676615fcf6b5ee3f80778be10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_9cca364dc47fa8685f757c4aeeaff77fba9ff42676615fcf6b5ee3f80778be10->leave($__internal_9cca364dc47fa8685f757c4aeeaff77fba9ff42676615fcf6b5ee3f80778be10_prof);

        
        $__internal_5bcb53bc0d406a1aca05b8a9ba0bc397f2d929aed577a723f101180ab73b00f4->leave($__internal_5bcb53bc0d406a1aca05b8a9ba0bc397f2d929aed577a723f101180ab73b00f4_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_bfc506e61fee3d73907298f626062e7b6b20d66b305a4d0a385c3bdd9af36e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc506e61fee3d73907298f626062e7b6b20d66b305a4d0a385c3bdd9af36e17->enter($__internal_bfc506e61fee3d73907298f626062e7b6b20d66b305a4d0a385c3bdd9af36e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_b29a2563fd068d806513652498d047b4349575693c633033afc588fe19d2a24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29a2563fd068d806513652498d047b4349575693c633033afc588fe19d2a24c->enter($__internal_b29a2563fd068d806513652498d047b4349575693c633033afc588fe19d2a24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b29a2563fd068d806513652498d047b4349575693c633033afc588fe19d2a24c->leave($__internal_b29a2563fd068d806513652498d047b4349575693c633033afc588fe19d2a24c_prof);

        
        $__internal_bfc506e61fee3d73907298f626062e7b6b20d66b305a4d0a385c3bdd9af36e17->leave($__internal_bfc506e61fee3d73907298f626062e7b6b20d66b305a4d0a385c3bdd9af36e17_prof);

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
