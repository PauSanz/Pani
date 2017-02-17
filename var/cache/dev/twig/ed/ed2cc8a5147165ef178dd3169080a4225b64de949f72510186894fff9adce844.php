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
        $__internal_4b26d7296637698c872a030544fbd230a383da8c30f0efc25226ef56dddd1e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b26d7296637698c872a030544fbd230a383da8c30f0efc25226ef56dddd1e38->enter($__internal_4b26d7296637698c872a030544fbd230a383da8c30f0efc25226ef56dddd1e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_eeed82c7b70e40e1fc4d5e9b9682592d1d3d7e0ede4bfea5c6f86814531b05e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeed82c7b70e40e1fc4d5e9b9682592d1d3d7e0ede4bfea5c6f86814531b05e7->enter($__internal_eeed82c7b70e40e1fc4d5e9b9682592d1d3d7e0ede4bfea5c6f86814531b05e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b26d7296637698c872a030544fbd230a383da8c30f0efc25226ef56dddd1e38->leave($__internal_4b26d7296637698c872a030544fbd230a383da8c30f0efc25226ef56dddd1e38_prof);

        
        $__internal_eeed82c7b70e40e1fc4d5e9b9682592d1d3d7e0ede4bfea5c6f86814531b05e7->leave($__internal_eeed82c7b70e40e1fc4d5e9b9682592d1d3d7e0ede4bfea5c6f86814531b05e7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7d5962256f4efc4326ce82233db7f414aaf27736daf3007dbcde05dd728c68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d5962256f4efc4326ce82233db7f414aaf27736daf3007dbcde05dd728c68f->enter($__internal_f7d5962256f4efc4326ce82233db7f414aaf27736daf3007dbcde05dd728c68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e01295b4a79a200d20c3c3697758cefe18742826e8681503af8c4ef939462894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01295b4a79a200d20c3c3697758cefe18742826e8681503af8c4ef939462894->enter($__internal_e01295b4a79a200d20c3c3697758cefe18742826e8681503af8c4ef939462894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_e01295b4a79a200d20c3c3697758cefe18742826e8681503af8c4ef939462894->leave($__internal_e01295b4a79a200d20c3c3697758cefe18742826e8681503af8c4ef939462894_prof);

        
        $__internal_f7d5962256f4efc4326ce82233db7f414aaf27736daf3007dbcde05dd728c68f->leave($__internal_f7d5962256f4efc4326ce82233db7f414aaf27736daf3007dbcde05dd728c68f_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4b5574ae95d62794087764dc5b9e5fcee1f3100f2e0233caa611f9deb55477f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5574ae95d62794087764dc5b9e5fcee1f3100f2e0233caa611f9deb55477f0->enter($__internal_4b5574ae95d62794087764dc5b9e5fcee1f3100f2e0233caa611f9deb55477f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_88e6683bbc9e6b7ec4f7f0768a3f53910c31ef7a6ac00bb6a6d7b6f6756db612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e6683bbc9e6b7ec4f7f0768a3f53910c31ef7a6ac00bb6a6d7b6f6756db612->enter($__internal_88e6683bbc9e6b7ec4f7f0768a3f53910c31ef7a6ac00bb6a6d7b6f6756db612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_88e6683bbc9e6b7ec4f7f0768a3f53910c31ef7a6ac00bb6a6d7b6f6756db612->leave($__internal_88e6683bbc9e6b7ec4f7f0768a3f53910c31ef7a6ac00bb6a6d7b6f6756db612_prof);

        
        $__internal_4b5574ae95d62794087764dc5b9e5fcee1f3100f2e0233caa611f9deb55477f0->leave($__internal_4b5574ae95d62794087764dc5b9e5fcee1f3100f2e0233caa611f9deb55477f0_prof);

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
