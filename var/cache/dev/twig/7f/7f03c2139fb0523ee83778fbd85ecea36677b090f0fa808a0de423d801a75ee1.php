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
        $__internal_1c940c0115d630a00536ec9abeb79503819d6b11f454d9b9c1e0159595b38446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c940c0115d630a00536ec9abeb79503819d6b11f454d9b9c1e0159595b38446->enter($__internal_1c940c0115d630a00536ec9abeb79503819d6b11f454d9b9c1e0159595b38446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vpacients.html.twig"));

        $__internal_473f68a3c9ad55445a016ec7b617cee6b35a9396f5d4f94e48e320de70d16d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473f68a3c9ad55445a016ec7b617cee6b35a9396f5d4f94e48e320de70d16d73->enter($__internal_473f68a3c9ad55445a016ec7b617cee6b35a9396f5d4f94e48e320de70d16d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c940c0115d630a00536ec9abeb79503819d6b11f454d9b9c1e0159595b38446->leave($__internal_1c940c0115d630a00536ec9abeb79503819d6b11f454d9b9c1e0159595b38446_prof);

        
        $__internal_473f68a3c9ad55445a016ec7b617cee6b35a9396f5d4f94e48e320de70d16d73->leave($__internal_473f68a3c9ad55445a016ec7b617cee6b35a9396f5d4f94e48e320de70d16d73_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b06bd8b4613840e2533b5d4838c8212a6c501d763b18f938f9a9f1f1418f22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b06bd8b4613840e2533b5d4838c8212a6c501d763b18f938f9a9f1f1418f22d->enter($__internal_2b06bd8b4613840e2533b5d4838c8212a6c501d763b18f938f9a9f1f1418f22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fea309e35c5dae69cd954d71587172b49eaa8a43b5420f24ba517662dd5e1c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea309e35c5dae69cd954d71587172b49eaa8a43b5420f24ba517662dd5e1c26->enter($__internal_fea309e35c5dae69cd954d71587172b49eaa8a43b5420f24ba517662dd5e1c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_fea309e35c5dae69cd954d71587172b49eaa8a43b5420f24ba517662dd5e1c26->leave($__internal_fea309e35c5dae69cd954d71587172b49eaa8a43b5420f24ba517662dd5e1c26_prof);

        
        $__internal_2b06bd8b4613840e2533b5d4838c8212a6c501d763b18f938f9a9f1f1418f22d->leave($__internal_2b06bd8b4613840e2533b5d4838c8212a6c501d763b18f938f9a9f1f1418f22d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c9cdcbd597d4e4cbc7c13209e420c64ab43a6fc8413840d7eac55a70dbc8d74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cdcbd597d4e4cbc7c13209e420c64ab43a6fc8413840d7eac55a70dbc8d74c->enter($__internal_c9cdcbd597d4e4cbc7c13209e420c64ab43a6fc8413840d7eac55a70dbc8d74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_03fe12908120504a3e01bfe64c23c8e955efb6d72cbab2110df1bcbe3307a905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fe12908120504a3e01bfe64c23c8e955efb6d72cbab2110df1bcbe3307a905->enter($__internal_03fe12908120504a3e01bfe64c23c8e955efb6d72cbab2110df1bcbe3307a905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_03fe12908120504a3e01bfe64c23c8e955efb6d72cbab2110df1bcbe3307a905->leave($__internal_03fe12908120504a3e01bfe64c23c8e955efb6d72cbab2110df1bcbe3307a905_prof);

        
        $__internal_c9cdcbd597d4e4cbc7c13209e420c64ab43a6fc8413840d7eac55a70dbc8d74c->leave($__internal_c9cdcbd597d4e4cbc7c13209e420c64ab43a6fc8413840d7eac55a70dbc8d74c_prof);

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
