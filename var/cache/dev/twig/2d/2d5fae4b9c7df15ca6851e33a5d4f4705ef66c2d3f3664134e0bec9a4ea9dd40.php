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
        $__internal_64ec487a20c818de55758e0448b19a438279f93376c7687fb4546d10e040b3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ec487a20c818de55758e0448b19a438279f93376c7687fb4546d10e040b3a1->enter($__internal_64ec487a20c818de55758e0448b19a438279f93376c7687fb4546d10e040b3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $__internal_74893fb73dcb907f042f2d94db4914f99b11b0a436512cea7e1fd0405607d03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74893fb73dcb907f042f2d94db4914f99b11b0a436512cea7e1fd0405607d03b->enter($__internal_74893fb73dcb907f042f2d94db4914f99b11b0a436512cea7e1fd0405607d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vpacients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ec487a20c818de55758e0448b19a438279f93376c7687fb4546d10e040b3a1->leave($__internal_64ec487a20c818de55758e0448b19a438279f93376c7687fb4546d10e040b3a1_prof);

        
        $__internal_74893fb73dcb907f042f2d94db4914f99b11b0a436512cea7e1fd0405607d03b->leave($__internal_74893fb73dcb907f042f2d94db4914f99b11b0a436512cea7e1fd0405607d03b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_47b5b1c1af9dc42335cd0b4f669b0d5fea072b54f7876ab3186e3adb4adadabb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b5b1c1af9dc42335cd0b4f669b0d5fea072b54f7876ab3186e3adb4adadabb->enter($__internal_47b5b1c1af9dc42335cd0b4f669b0d5fea072b54f7876ab3186e3adb4adadabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96575f5c6c74611f2c28a8a31243e32938134eb91325e0990af7c3cdcf8854c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96575f5c6c74611f2c28a8a31243e32938134eb91325e0990af7c3cdcf8854c2->enter($__internal_96575f5c6c74611f2c28a8a31243e32938134eb91325e0990af7c3cdcf8854c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pacients";
        
        $__internal_96575f5c6c74611f2c28a8a31243e32938134eb91325e0990af7c3cdcf8854c2->leave($__internal_96575f5c6c74611f2c28a8a31243e32938134eb91325e0990af7c3cdcf8854c2_prof);

        
        $__internal_47b5b1c1af9dc42335cd0b4f669b0d5fea072b54f7876ab3186e3adb4adadabb->leave($__internal_47b5b1c1af9dc42335cd0b4f669b0d5fea072b54f7876ab3186e3adb4adadabb_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_528122faead70c7f890a4aa1613b338add5afb62bef394cd3bf907851d0a469f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528122faead70c7f890a4aa1613b338add5afb62bef394cd3bf907851d0a469f->enter($__internal_528122faead70c7f890a4aa1613b338add5afb62bef394cd3bf907851d0a469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_5397685adc172e09f68f4f00b024167ae68cc76c55c11b5a228a776cfa415a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5397685adc172e09f68f4f00b024167ae68cc76c55c11b5a228a776cfa415a6d->enter($__internal_5397685adc172e09f68f4f00b024167ae68cc76c55c11b5a228a776cfa415a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                        <button type=\"button\" class=\"btn btn-sm btn-primary btn-create\">Create New</button>
                        ";
        // line 15
        echo "                    </div>
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
        
        $__internal_5397685adc172e09f68f4f00b024167ae68cc76c55c11b5a228a776cfa415a6d->leave($__internal_5397685adc172e09f68f4f00b024167ae68cc76c55c11b5a228a776cfa415a6d_prof);

        
        $__internal_528122faead70c7f890a4aa1613b338add5afb62bef394cd3bf907851d0a469f->leave($__internal_528122faead70c7f890a4aa1613b338add5afb62bef394cd3bf907851d0a469f_prof);

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
        return array (  134 => 41,  125 => 38,  121 => 37,  117 => 36,  112 => 34,  108 => 33,  104 => 31,  100 => 30,  83 => 15,  76 => 10,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                        <button type=\"button\" class=\"btn btn-sm btn-primary btn-create\">Create New</button>
                        {#<td><a href=\"{{ path('clinica_pani_detallsvisita',{'ref': visites.ref}) }}\">Afegir Pacient</a></td>#}
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
