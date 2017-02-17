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
        $__internal_a638ef27c10be9d02c093b0a60f8927a7192fdd9a139c4acdc4eba6d3e046286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a638ef27c10be9d02c093b0a60f8927a7192fdd9a139c4acdc4eba6d3e046286->enter($__internal_a638ef27c10be9d02c093b0a60f8927a7192fdd9a139c4acdc4eba6d3e046286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_bbb4b2404b06f0c74ef57ec322c9e02caf2424a3d9741836551e85eefa629368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb4b2404b06f0c74ef57ec322c9e02caf2424a3d9741836551e85eefa629368->enter($__internal_bbb4b2404b06f0c74ef57ec322c9e02caf2424a3d9741836551e85eefa629368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a638ef27c10be9d02c093b0a60f8927a7192fdd9a139c4acdc4eba6d3e046286->leave($__internal_a638ef27c10be9d02c093b0a60f8927a7192fdd9a139c4acdc4eba6d3e046286_prof);

        
        $__internal_bbb4b2404b06f0c74ef57ec322c9e02caf2424a3d9741836551e85eefa629368->leave($__internal_bbb4b2404b06f0c74ef57ec322c9e02caf2424a3d9741836551e85eefa629368_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbd33f4c168d1194e9ad70c33aece13f0029f87cce672ae1b736f313fc68ef32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd33f4c168d1194e9ad70c33aece13f0029f87cce672ae1b736f313fc68ef32->enter($__internal_cbd33f4c168d1194e9ad70c33aece13f0029f87cce672ae1b736f313fc68ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_932bc02b4d0bb5cdfe9a345a4ec50b610c253e4c83432370f6b37b2f2a5268e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932bc02b4d0bb5cdfe9a345a4ec50b610c253e4c83432370f6b37b2f2a5268e5->enter($__internal_932bc02b4d0bb5cdfe9a345a4ec50b610c253e4c83432370f6b37b2f2a5268e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_932bc02b4d0bb5cdfe9a345a4ec50b610c253e4c83432370f6b37b2f2a5268e5->leave($__internal_932bc02b4d0bb5cdfe9a345a4ec50b610c253e4c83432370f6b37b2f2a5268e5_prof);

        
        $__internal_cbd33f4c168d1194e9ad70c33aece13f0029f87cce672ae1b736f313fc68ef32->leave($__internal_cbd33f4c168d1194e9ad70c33aece13f0029f87cce672ae1b736f313fc68ef32_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_53c608a125704000285d5934b39a56ba19c50848371777efa41d6f6b153ca88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c608a125704000285d5934b39a56ba19c50848371777efa41d6f6b153ca88c->enter($__internal_53c608a125704000285d5934b39a56ba19c50848371777efa41d6f6b153ca88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a907ace1ccc4e0a1f29e3b6f2ac47b8bb74eea71bcaeff1dfea69b57a17588df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a907ace1ccc4e0a1f29e3b6f2ac47b8bb74eea71bcaeff1dfea69b57a17588df->enter($__internal_a907ace1ccc4e0a1f29e3b6f2ac47b8bb74eea71bcaeff1dfea69b57a17588df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"container\">
        <h1> Administració de pacients </h1>    
        <div class=\"panel panel-default panel-table table-responsive\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-12\">
                        <h3 class=\"panel-title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["titol"] ?? $this->getContext($context, "titol")), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"col col-xs-12 text-right\">
                        ";
        // line 14
        echo "                        <a class=\"btn btn-info\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_afgrpacient");
        echo "\">Afegir Pacient</a>
                    </div>
                </div>
            </div>
            <div class=\"panel-body \">
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
        
        $__internal_a907ace1ccc4e0a1f29e3b6f2ac47b8bb74eea71bcaeff1dfea69b57a17588df->leave($__internal_a907ace1ccc4e0a1f29e3b6f2ac47b8bb74eea71bcaeff1dfea69b57a17588df_prof);

        
        $__internal_53c608a125704000285d5934b39a56ba19c50848371777efa41d6f6b153ca88c->leave($__internal_53c608a125704000285d5934b39a56ba19c50848371777efa41d6f6b153ca88c_prof);

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
        <div class=\"panel panel-default panel-table table-responsive\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-12\">
                        <h3 class=\"panel-title\">{{ titol }}</h3>
                    </div>
                    <div class=\"col col-xs-12 text-right\">
                        {#<button type=\"button\" class=\"btn btn-sm btn-primary btn-create\">Create New</button>#}
                        <a class=\"btn btn-info\" href=\"{{ path('clinica_pani_afgrpacient')}}\">Afegir Pacient</a>
                    </div>
                </div>
            </div>
            <div class=\"panel-body \">
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
