<?php

/* clinicaPaniBundle:Default:vpacients.html.twig */
class __TwigTemplate_d87b017a803fd60e7cbf75d474ca99b8687b3b59adea2735c155df784ba9e8d3 extends Twig_Template
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
        $__internal_5fbfc9fd1a77618e8c177521320a02ff33ef9e2ca1c2aeca72cb037a1d665c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbfc9fd1a77618e8c177521320a02ff33ef9e2ca1c2aeca72cb037a1d665c1d->enter($__internal_5fbfc9fd1a77618e8c177521320a02ff33ef9e2ca1c2aeca72cb037a1d665c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_7f1add4127055e30d663e3e44e3831251ce7306de1d268f029fd86997dd882a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1add4127055e30d663e3e44e3831251ce7306de1d268f029fd86997dd882a6->enter($__internal_7f1add4127055e30d663e3e44e3831251ce7306de1d268f029fd86997dd882a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fbfc9fd1a77618e8c177521320a02ff33ef9e2ca1c2aeca72cb037a1d665c1d->leave($__internal_5fbfc9fd1a77618e8c177521320a02ff33ef9e2ca1c2aeca72cb037a1d665c1d_prof);

        
        $__internal_7f1add4127055e30d663e3e44e3831251ce7306de1d268f029fd86997dd882a6->leave($__internal_7f1add4127055e30d663e3e44e3831251ce7306de1d268f029fd86997dd882a6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d4f225b1a65d09d4877e44b8d123498493b29d36605c67200baf7a65e84c979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4f225b1a65d09d4877e44b8d123498493b29d36605c67200baf7a65e84c979->enter($__internal_8d4f225b1a65d09d4877e44b8d123498493b29d36605c67200baf7a65e84c979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f51124cd6bc3eeed2a5860695a4198f27404766e83752c1e6e534a8dd8d99bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51124cd6bc3eeed2a5860695a4198f27404766e83752c1e6e534a8dd8d99bc6->enter($__internal_f51124cd6bc3eeed2a5860695a4198f27404766e83752c1e6e534a8dd8d99bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_f51124cd6bc3eeed2a5860695a4198f27404766e83752c1e6e534a8dd8d99bc6->leave($__internal_f51124cd6bc3eeed2a5860695a4198f27404766e83752c1e6e534a8dd8d99bc6_prof);

        
        $__internal_8d4f225b1a65d09d4877e44b8d123498493b29d36605c67200baf7a65e84c979->leave($__internal_8d4f225b1a65d09d4877e44b8d123498493b29d36605c67200baf7a65e84c979_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4cf69e0c97a955c42b8a0cba87949e5bb3362bfd35fbb362f1bc8d264f1ffb81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf69e0c97a955c42b8a0cba87949e5bb3362bfd35fbb362f1bc8d264f1ffb81->enter($__internal_4cf69e0c97a955c42b8a0cba87949e5bb3362bfd35fbb362f1bc8d264f1ffb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_dc7709193f485cad26fff3a02be3bc867676e1902b80d2ab08d8d44de8e519c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7709193f485cad26fff3a02be3bc867676e1902b80d2ab08d8d44de8e519c8->enter($__internal_dc7709193f485cad26fff3a02be3bc867676e1902b80d2ab08d8d44de8e519c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_dc7709193f485cad26fff3a02be3bc867676e1902b80d2ab08d8d44de8e519c8->leave($__internal_dc7709193f485cad26fff3a02be3bc867676e1902b80d2ab08d8d44de8e519c8_prof);

        
        $__internal_4cf69e0c97a955c42b8a0cba87949e5bb3362bfd35fbb362f1bc8d264f1ffb81->leave($__internal_4cf69e0c97a955c42b8a0cba87949e5bb3362bfd35fbb362f1bc8d264f1ffb81_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vpacients.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vpacients.html.twig");
    }
}
