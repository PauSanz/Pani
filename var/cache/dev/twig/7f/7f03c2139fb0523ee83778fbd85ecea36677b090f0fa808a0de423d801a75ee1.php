<?php

/* @clinicaPani/Default/vpacients.html.twig */
class __TwigTemplate_a232fd7be08f23ab8a6e01d73d4cc81c48e83f6b30db8499445ededd16362363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/vpacients.html.twig", 1);
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
        $__internal_5bd822dddc331ba0023758ad951dbed6a5556db27ff933eba0b54e3b7ac42784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd822dddc331ba0023758ad951dbed6a5556db27ff933eba0b54e3b7ac42784->enter($__internal_5bd822dddc331ba0023758ad951dbed6a5556db27ff933eba0b54e3b7ac42784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vpacients.html.twig"));

        $__internal_c53f3a65e738368f12ef4204fa5423d53eb3bd1d6d59f8d71f31662cfeffb1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53f3a65e738368f12ef4204fa5423d53eb3bd1d6d59f8d71f31662cfeffb1aa->enter($__internal_c53f3a65e738368f12ef4204fa5423d53eb3bd1d6d59f8d71f31662cfeffb1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd822dddc331ba0023758ad951dbed6a5556db27ff933eba0b54e3b7ac42784->leave($__internal_5bd822dddc331ba0023758ad951dbed6a5556db27ff933eba0b54e3b7ac42784_prof);

        
        $__internal_c53f3a65e738368f12ef4204fa5423d53eb3bd1d6d59f8d71f31662cfeffb1aa->leave($__internal_c53f3a65e738368f12ef4204fa5423d53eb3bd1d6d59f8d71f31662cfeffb1aa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_555b2b2b04ea1fca4810c164a890d0b7b06ff4a899a59a05adb205b6331e788d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555b2b2b04ea1fca4810c164a890d0b7b06ff4a899a59a05adb205b6331e788d->enter($__internal_555b2b2b04ea1fca4810c164a890d0b7b06ff4a899a59a05adb205b6331e788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c7356035debb633f77c3e58cee8cf34ce42a0e4abf9142909af49b0116e0023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7356035debb633f77c3e58cee8cf34ce42a0e4abf9142909af49b0116e0023->enter($__internal_8c7356035debb633f77c3e58cee8cf34ce42a0e4abf9142909af49b0116e0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_8c7356035debb633f77c3e58cee8cf34ce42a0e4abf9142909af49b0116e0023->leave($__internal_8c7356035debb633f77c3e58cee8cf34ce42a0e4abf9142909af49b0116e0023_prof);

        
        $__internal_555b2b2b04ea1fca4810c164a890d0b7b06ff4a899a59a05adb205b6331e788d->leave($__internal_555b2b2b04ea1fca4810c164a890d0b7b06ff4a899a59a05adb205b6331e788d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_901906e75a84c5fc957d9c1bb645eeffbda2f3aafb5d816813b7a413a2abe13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901906e75a84c5fc957d9c1bb645eeffbda2f3aafb5d816813b7a413a2abe13d->enter($__internal_901906e75a84c5fc957d9c1bb645eeffbda2f3aafb5d816813b7a413a2abe13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8cedd4299ac5fbcbdc6b0ad52737ab3bd06458a3e840cfe82ed434999e0ec355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cedd4299ac5fbcbdc6b0ad52737ab3bd06458a3e840cfe82ed434999e0ec355->enter($__internal_8cedd4299ac5fbcbdc6b0ad52737ab3bd06458a3e840cfe82ed434999e0ec355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8cedd4299ac5fbcbdc6b0ad52737ab3bd06458a3e840cfe82ed434999e0ec355->leave($__internal_8cedd4299ac5fbcbdc6b0ad52737ab3bd06458a3e840cfe82ed434999e0ec355_prof);

        
        $__internal_901906e75a84c5fc957d9c1bb645eeffbda2f3aafb5d816813b7a413a2abe13d->leave($__internal_901906e75a84c5fc957d9c1bb645eeffbda2f3aafb5d816813b7a413a2abe13d_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vpacients.html.twig";
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
{% endblock %}", "@clinicaPani/Default/vpacients.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vpacients.html.twig");
    }
}
