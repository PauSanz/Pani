<?php

/* clinicaPaniBundle:Default:vpacients.html.twig */
class __TwigTemplate_a232fd7be08f23ab8a6e01d73d4cc81c48e83f6b30db8499445ededd16362363 extends Twig_Template
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
        $__internal_489e1be25d9d8e2cc134de23e81fe2d5380c6a7703432cb1ab84b7af4f8cc1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489e1be25d9d8e2cc134de23e81fe2d5380c6a7703432cb1ab84b7af4f8cc1f4->enter($__internal_489e1be25d9d8e2cc134de23e81fe2d5380c6a7703432cb1ab84b7af4f8cc1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_9af9bc20891692a77086fbd28bd6d3396cb83f34c2d0555b849dddb876bea450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af9bc20891692a77086fbd28bd6d3396cb83f34c2d0555b849dddb876bea450->enter($__internal_9af9bc20891692a77086fbd28bd6d3396cb83f34c2d0555b849dddb876bea450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489e1be25d9d8e2cc134de23e81fe2d5380c6a7703432cb1ab84b7af4f8cc1f4->leave($__internal_489e1be25d9d8e2cc134de23e81fe2d5380c6a7703432cb1ab84b7af4f8cc1f4_prof);

        
        $__internal_9af9bc20891692a77086fbd28bd6d3396cb83f34c2d0555b849dddb876bea450->leave($__internal_9af9bc20891692a77086fbd28bd6d3396cb83f34c2d0555b849dddb876bea450_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb08421a27b020a0cd61027204f98f437404c2681026fc734be0c8c699c0da11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb08421a27b020a0cd61027204f98f437404c2681026fc734be0c8c699c0da11->enter($__internal_bb08421a27b020a0cd61027204f98f437404c2681026fc734be0c8c699c0da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65384de7683f0553b6705c6582fb112a283cb23623beb4d58f023a718adb3f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65384de7683f0553b6705c6582fb112a283cb23623beb4d58f023a718adb3f00->enter($__internal_65384de7683f0553b6705c6582fb112a283cb23623beb4d58f023a718adb3f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_65384de7683f0553b6705c6582fb112a283cb23623beb4d58f023a718adb3f00->leave($__internal_65384de7683f0553b6705c6582fb112a283cb23623beb4d58f023a718adb3f00_prof);

        
        $__internal_bb08421a27b020a0cd61027204f98f437404c2681026fc734be0c8c699c0da11->leave($__internal_bb08421a27b020a0cd61027204f98f437404c2681026fc734be0c8c699c0da11_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dd04442439ee9bddb9d75a029c828ae951faad68b7d61759c269b60500d4b695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd04442439ee9bddb9d75a029c828ae951faad68b7d61759c269b60500d4b695->enter($__internal_dd04442439ee9bddb9d75a029c828ae951faad68b7d61759c269b60500d4b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_73818c20afd84af2804e8640fc4199038928d77cd87447b6d32580efa8b5c0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73818c20afd84af2804e8640fc4199038928d77cd87447b6d32580efa8b5c0a4->enter($__internal_73818c20afd84af2804e8640fc4199038928d77cd87447b6d32580efa8b5c0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"container\">
        <h1> Administració de pacients </h1>    
        <div class=\"panel panel-default panel-table\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-6\">
                        <h3 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["titol"]) ? $context["titol"] : $this->getContext($context, "titol")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["Pacients"]) ? $context["Pacients"] : $this->getContext($context, "Pacients")));
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
        
        $__internal_73818c20afd84af2804e8640fc4199038928d77cd87447b6d32580efa8b5c0a4->leave($__internal_73818c20afd84af2804e8640fc4199038928d77cd87447b6d32580efa8b5c0a4_prof);

        
        $__internal_dd04442439ee9bddb9d75a029c828ae951faad68b7d61759c269b60500d4b695->leave($__internal_dd04442439ee9bddb9d75a029c828ae951faad68b7d61759c269b60500d4b695_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vpacients.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vpacients.html.twig");
    }
}
