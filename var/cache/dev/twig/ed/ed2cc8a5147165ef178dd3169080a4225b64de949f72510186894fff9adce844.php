<?php

/* clinicaPaniBundle:Default:vpacients.html.twig */
class __TwigTemplate_6ad0f401cf1f5493dd9a4675d807fb19c2d3ab5fd4fd0de30980d83e2e33bf61 extends Twig_Template
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
        $__internal_a8218eac4b1d816e4ea5c7d50ea017fe0b3cb2f3bf9b4a647c128372b387bf33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8218eac4b1d816e4ea5c7d50ea017fe0b3cb2f3bf9b4a647c128372b387bf33->enter($__internal_a8218eac4b1d816e4ea5c7d50ea017fe0b3cb2f3bf9b4a647c128372b387bf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_85a32ec8cf988f047298b20ed9ebb816691a0e5dc356472e559b409146485dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a32ec8cf988f047298b20ed9ebb816691a0e5dc356472e559b409146485dfc->enter($__internal_85a32ec8cf988f047298b20ed9ebb816691a0e5dc356472e559b409146485dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8218eac4b1d816e4ea5c7d50ea017fe0b3cb2f3bf9b4a647c128372b387bf33->leave($__internal_a8218eac4b1d816e4ea5c7d50ea017fe0b3cb2f3bf9b4a647c128372b387bf33_prof);

        
        $__internal_85a32ec8cf988f047298b20ed9ebb816691a0e5dc356472e559b409146485dfc->leave($__internal_85a32ec8cf988f047298b20ed9ebb816691a0e5dc356472e559b409146485dfc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_580ac51789f96b29a704c01a0ed70f1cd251553c23978f831077b8e8ea6be680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580ac51789f96b29a704c01a0ed70f1cd251553c23978f831077b8e8ea6be680->enter($__internal_580ac51789f96b29a704c01a0ed70f1cd251553c23978f831077b8e8ea6be680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2e747790757ff38c33962bc7280927965e782b7d5babe9e0cbff682ec6eb021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e747790757ff38c33962bc7280927965e782b7d5babe9e0cbff682ec6eb021->enter($__internal_e2e747790757ff38c33962bc7280927965e782b7d5babe9e0cbff682ec6eb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_e2e747790757ff38c33962bc7280927965e782b7d5babe9e0cbff682ec6eb021->leave($__internal_e2e747790757ff38c33962bc7280927965e782b7d5babe9e0cbff682ec6eb021_prof);

        
        $__internal_580ac51789f96b29a704c01a0ed70f1cd251553c23978f831077b8e8ea6be680->leave($__internal_580ac51789f96b29a704c01a0ed70f1cd251553c23978f831077b8e8ea6be680_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f439b2e5a0fd150f2bc8495c61cd464a113951ff1af9b0e07d0f95a3ec8c0015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f439b2e5a0fd150f2bc8495c61cd464a113951ff1af9b0e07d0f95a3ec8c0015->enter($__internal_f439b2e5a0fd150f2bc8495c61cd464a113951ff1af9b0e07d0f95a3ec8c0015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f22e3c368d95b34b5c2c7e78293727fa138a6abb35b1fb672216abed3e430847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22e3c368d95b34b5c2c7e78293727fa138a6abb35b1fb672216abed3e430847->enter($__internal_f22e3c368d95b34b5c2c7e78293727fa138a6abb35b1fb672216abed3e430847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f22e3c368d95b34b5c2c7e78293727fa138a6abb35b1fb672216abed3e430847->leave($__internal_f22e3c368d95b34b5c2c7e78293727fa138a6abb35b1fb672216abed3e430847_prof);

        
        $__internal_f439b2e5a0fd150f2bc8495c61cd464a113951ff1af9b0e07d0f95a3ec8c0015->leave($__internal_f439b2e5a0fd150f2bc8495c61cd464a113951ff1af9b0e07d0f95a3ec8c0015_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vpacients.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vpacients.html.twig");
    }
}
