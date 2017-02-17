<?php

/* clinicaPaniBundle:Default:vpacients.html.twig */
class __TwigTemplate_4c467ceb0a30934a249fa263c0a1d26a28d8656580613d1f8ab7c44ed77af9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "clinicaPaniBundle:Default:vpacients.html.twig", 1);
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
        $__internal_7427cff77b04974ea7b208da234774814575ab54ef48811449e6b9f3e9808cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7427cff77b04974ea7b208da234774814575ab54ef48811449e6b9f3e9808cdc->enter($__internal_7427cff77b04974ea7b208da234774814575ab54ef48811449e6b9f3e9808cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_b900ef3ddc712b4312ce499ed28e064dab8cc3e21c7738d5c090296f1f3bbd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b900ef3ddc712b4312ce499ed28e064dab8cc3e21c7738d5c090296f1f3bbd16->enter($__internal_b900ef3ddc712b4312ce499ed28e064dab8cc3e21c7738d5c090296f1f3bbd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7427cff77b04974ea7b208da234774814575ab54ef48811449e6b9f3e9808cdc->leave($__internal_7427cff77b04974ea7b208da234774814575ab54ef48811449e6b9f3e9808cdc_prof);

        
        $__internal_b900ef3ddc712b4312ce499ed28e064dab8cc3e21c7738d5c090296f1f3bbd16->leave($__internal_b900ef3ddc712b4312ce499ed28e064dab8cc3e21c7738d5c090296f1f3bbd16_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_41648fe00bb5fc7be321c2856debdcffbb885d5c0c4fbe369c9adc8c5e6499f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41648fe00bb5fc7be321c2856debdcffbb885d5c0c4fbe369c9adc8c5e6499f9->enter($__internal_41648fe00bb5fc7be321c2856debdcffbb885d5c0c4fbe369c9adc8c5e6499f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61d9b8135d5726a33bd84284c5ee11327f5fbb800075c3000d2b14e04b8fa931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d9b8135d5726a33bd84284c5ee11327f5fbb800075c3000d2b14e04b8fa931->enter($__internal_61d9b8135d5726a33bd84284c5ee11327f5fbb800075c3000d2b14e04b8fa931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_61d9b8135d5726a33bd84284c5ee11327f5fbb800075c3000d2b14e04b8fa931->leave($__internal_61d9b8135d5726a33bd84284c5ee11327f5fbb800075c3000d2b14e04b8fa931_prof);

        
        $__internal_41648fe00bb5fc7be321c2856debdcffbb885d5c0c4fbe369c9adc8c5e6499f9->leave($__internal_41648fe00bb5fc7be321c2856debdcffbb885d5c0c4fbe369c9adc8c5e6499f9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1392bc1cac2da521210ecaa1698fb476bca8a543a4e80358fd4dee4ba4372d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1392bc1cac2da521210ecaa1698fb476bca8a543a4e80358fd4dee4ba4372d7c->enter($__internal_1392bc1cac2da521210ecaa1698fb476bca8a543a4e80358fd4dee4ba4372d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6c5b37a890bdbd62664d34a842ad4254516f7642dc02b99c557915d63e8319d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5b37a890bdbd62664d34a842ad4254516f7642dc02b99c557915d63e8319d6->enter($__internal_6c5b37a890bdbd62664d34a842ad4254516f7642dc02b99c557915d63e8319d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"container\">
        <h1> Administració de pacients </h1>    
        <div class=\"panel panel-default panel-table\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-6\">
                        <h3 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["titol"] ?? $this->getContext($context, "titol")), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        ";
        // line 14
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_afgrpacient");
        echo "\">Afegir Pacient</a>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped table-bordered table-list\">
                    <thead>
                        <tr>
                            <th><em class=\"fa fa-cog\"></em></th>
                            <th>DNI</th>
                            <th>Nom</th>
                            <th>Cognom</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Pacients"] ?? $this->getContext($context, "Pacients")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacient"]) {
            // line 31
            echo "                            <tr>
                                <td align=\"center\">
                                    <a class=\"btn btn-default\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_modipacient", array("dni" => $this->getAttribute($context["pacient"], "dni", array()))), "html", null, true);
            echo "\"><em class=\"fa fa-pencil\"></em></a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_elimpacient", array("dni" => $this->getAttribute($context["pacient"], "dni", array()))), "html", null, true);
            echo "\"><em class=\"fa fa-trash\"></em></a>
                                </td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "dni", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacient"], "cognom", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6c5b37a890bdbd62664d34a842ad4254516f7642dc02b99c557915d63e8319d6->leave($__internal_6c5b37a890bdbd62664d34a842ad4254516f7642dc02b99c557915d63e8319d6_prof);

        
        $__internal_1392bc1cac2da521210ecaa1698fb476bca8a543a4e80358fd4dee4ba4372d7c->leave($__internal_1392bc1cac2da521210ecaa1698fb476bca8a543a4e80358fd4dee4ba4372d7c_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vpacients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  127 => 38,  123 => 37,  119 => 36,  114 => 34,  110 => 33,  106 => 31,  102 => 30,  82 => 14,  76 => 10,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Pacients{% endblock %}
{% block page_content %}
    <div class=\"container\">
        <h1> Administració de pacients </h1>    
        <div class=\"panel panel-default panel-table\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-6\">
                        <h3 class=\"panel-title\">{{ titol }}</h3>
                    </div>
                    <div class=\"col col-xs-6 text-right\">
                        {#<button type=\"button\" class=\"btn btn-sm btn-primary btn-create\">Create New</button>#}
                        <a href=\"{{ path('clinica_pani_afgrpacient')}}\">Afegir Pacient</a>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped table-bordered table-list\">
                    <thead>
                        <tr>
                            <th><em class=\"fa fa-cog\"></em></th>
                            <th>DNI</th>
                            <th>Nom</th>
                            <th>Cognom</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            {% for pacient in Pacients %}
                            <tr>
                                <td align=\"center\">
                                    <a class=\"btn btn-default\" href=\"{{ path('clinica_pani_modipacient',{'dni': pacient.dni}) }}\"><em class=\"fa fa-pencil\"></em></a>
                                    <a class=\"btn btn-danger\" href=\"{{ path('clinica_pani_elimpacient',{'dni': pacient.dni}) }}\"><em class=\"fa fa-trash\"></em></a>
                                </td>
                                <td>{{ pacient.dni }}</td>
                                <td>{{ pacient.nom }}</td>
                                <td>{{ pacient.cognom }}</td>
                            </tr>
                        {% endfor %}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "clinicaPaniBundle:Default:vpacients.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vpacients.html.twig");
    }
}
