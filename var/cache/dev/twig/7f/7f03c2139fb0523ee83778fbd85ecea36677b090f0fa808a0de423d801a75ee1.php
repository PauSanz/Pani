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
        $__internal_6c12ab01dbc275b15e7b3e5bfbf0aeffdce6a80f9802537e1131d4ac1f25b491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c12ab01dbc275b15e7b3e5bfbf0aeffdce6a80f9802537e1131d4ac1f25b491->enter($__internal_6c12ab01dbc275b15e7b3e5bfbf0aeffdce6a80f9802537e1131d4ac1f25b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_0eb296f5da48a3b422e1f67971873671fc76069cd32bfabf9dd59af14d8ce809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb296f5da48a3b422e1f67971873671fc76069cd32bfabf9dd59af14d8ce809->enter($__internal_0eb296f5da48a3b422e1f67971873671fc76069cd32bfabf9dd59af14d8ce809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c12ab01dbc275b15e7b3e5bfbf0aeffdce6a80f9802537e1131d4ac1f25b491->leave($__internal_6c12ab01dbc275b15e7b3e5bfbf0aeffdce6a80f9802537e1131d4ac1f25b491_prof);

        
        $__internal_0eb296f5da48a3b422e1f67971873671fc76069cd32bfabf9dd59af14d8ce809->leave($__internal_0eb296f5da48a3b422e1f67971873671fc76069cd32bfabf9dd59af14d8ce809_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8596420a7d53b504e5ecd8c634055d5dffb4f988ef0d33131839998cacab844c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8596420a7d53b504e5ecd8c634055d5dffb4f988ef0d33131839998cacab844c->enter($__internal_8596420a7d53b504e5ecd8c634055d5dffb4f988ef0d33131839998cacab844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34a2c3e320a96207c46d66893b0398fe2c443e7e47b990df9842d1daf4c5a4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a2c3e320a96207c46d66893b0398fe2c443e7e47b990df9842d1daf4c5a4c7->enter($__internal_34a2c3e320a96207c46d66893b0398fe2c443e7e47b990df9842d1daf4c5a4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_34a2c3e320a96207c46d66893b0398fe2c443e7e47b990df9842d1daf4c5a4c7->leave($__internal_34a2c3e320a96207c46d66893b0398fe2c443e7e47b990df9842d1daf4c5a4c7_prof);

        
        $__internal_8596420a7d53b504e5ecd8c634055d5dffb4f988ef0d33131839998cacab844c->leave($__internal_8596420a7d53b504e5ecd8c634055d5dffb4f988ef0d33131839998cacab844c_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c88a3b7ea434ae796de59e5dc18d3ee9de71cb9569866123676dcb5aa2170fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88a3b7ea434ae796de59e5dc18d3ee9de71cb9569866123676dcb5aa2170fd0->enter($__internal_c88a3b7ea434ae796de59e5dc18d3ee9de71cb9569866123676dcb5aa2170fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_fbd843ec42b4588f5eeb4ab3d2e68bb78cf9de17f717129e66795c5213a121fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd843ec42b4588f5eeb4ab3d2e68bb78cf9de17f717129e66795c5213a121fe->enter($__internal_fbd843ec42b4588f5eeb4ab3d2e68bb78cf9de17f717129e66795c5213a121fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_fbd843ec42b4588f5eeb4ab3d2e68bb78cf9de17f717129e66795c5213a121fe->leave($__internal_fbd843ec42b4588f5eeb4ab3d2e68bb78cf9de17f717129e66795c5213a121fe_prof);

        
        $__internal_c88a3b7ea434ae796de59e5dc18d3ee9de71cb9569866123676dcb5aa2170fd0->leave($__internal_c88a3b7ea434ae796de59e5dc18d3ee9de71cb9569866123676dcb5aa2170fd0_prof);

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
