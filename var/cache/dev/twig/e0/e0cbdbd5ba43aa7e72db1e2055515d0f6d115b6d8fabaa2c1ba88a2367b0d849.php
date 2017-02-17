<?php

/* @clinicaPani/Default/vvisites.html.twig */
class __TwigTemplate_bc12b8b575d41b801d9dcb49a2cd0c7f7803a81415891ef27be6d607c98bf0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/vvisites.html.twig", 1);
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
        $__internal_0be394defef86d7b0560f5b11d4718d0e208b815b03d6fa03c1d748c61facd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be394defef86d7b0560f5b11d4718d0e208b815b03d6fa03c1d748c61facd22->enter($__internal_0be394defef86d7b0560f5b11d4718d0e208b815b03d6fa03c1d748c61facd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $__internal_8ac2fb70349b7ce24e6a9e139fc548e56dc452ea965f76c6869499ec3239f22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac2fb70349b7ce24e6a9e139fc548e56dc452ea965f76c6869499ec3239f22e->enter($__internal_8ac2fb70349b7ce24e6a9e139fc548e56dc452ea965f76c6869499ec3239f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vvisites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be394defef86d7b0560f5b11d4718d0e208b815b03d6fa03c1d748c61facd22->leave($__internal_0be394defef86d7b0560f5b11d4718d0e208b815b03d6fa03c1d748c61facd22_prof);

        
        $__internal_8ac2fb70349b7ce24e6a9e139fc548e56dc452ea965f76c6869499ec3239f22e->leave($__internal_8ac2fb70349b7ce24e6a9e139fc548e56dc452ea965f76c6869499ec3239f22e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_089febbb8bb6a8ff8e93244ae90d3338beb1843b47b9cf54595fc4351e0ca451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089febbb8bb6a8ff8e93244ae90d3338beb1843b47b9cf54595fc4351e0ca451->enter($__internal_089febbb8bb6a8ff8e93244ae90d3338beb1843b47b9cf54595fc4351e0ca451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8e60b7c4c5ef518beb4d044992dc337d772478cd57af087f9352569bed68829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e60b7c4c5ef518beb4d044992dc337d772478cd57af087f9352569bed68829->enter($__internal_d8e60b7c4c5ef518beb4d044992dc337d772478cd57af087f9352569bed68829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_d8e60b7c4c5ef518beb4d044992dc337d772478cd57af087f9352569bed68829->leave($__internal_d8e60b7c4c5ef518beb4d044992dc337d772478cd57af087f9352569bed68829_prof);

        
        $__internal_089febbb8bb6a8ff8e93244ae90d3338beb1843b47b9cf54595fc4351e0ca451->leave($__internal_089febbb8bb6a8ff8e93244ae90d3338beb1843b47b9cf54595fc4351e0ca451_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_44842fd7fe469cf85d63327826efcfed844476a54600062e9c43cac330a6d64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44842fd7fe469cf85d63327826efcfed844476a54600062e9c43cac330a6d64c->enter($__internal_44842fd7fe469cf85d63327826efcfed844476a54600062e9c43cac330a6d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e80fef05a52b44b25492a5f248e8e18ab3ea508de4d8864319ffd0e28e0fb57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80fef05a52b44b25492a5f248e8e18ab3ea508de4d8864319ffd0e28e0fb57b->enter($__internal_e80fef05a52b44b25492a5f248e8e18ab3ea508de4d8864319ffd0e28e0fb57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Visites"]) ? $context["Visites"] : $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_detallsvisita", array("ref" => $this->getAttribute($context["visites"], "ref", array()))), "html", null, true);
            echo "\">Veure Detalls</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_e80fef05a52b44b25492a5f248e8e18ab3ea508de4d8864319ffd0e28e0fb57b->leave($__internal_e80fef05a52b44b25492a5f248e8e18ab3ea508de4d8864319ffd0e28e0fb57b_prof);

        
        $__internal_44842fd7fe469cf85d63327826efcfed844476a54600062e9c43cac330a6d64c->leave($__internal_44842fd7fe469cf85d63327826efcfed844476a54600062e9c43cac330a6d64c_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vvisites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  82 => 13,  78 => 12,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Visites{% endblock %}
{% block page_content %}
    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        {% for visites in Visites %}
            <tr>
                <td>{{ visites.ref }}</td>
                <td>{{ visites.data|date('d-m-Y') }}</td>
                <td>{{ visites.hora|date('H:i:s') }}</td>
                <td><a href=\"{{ path('clinica_pani_detallsvisita',{'ref': visites.ref}) }}\">Veure Detalls</a></td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "@clinicaPani/Default/vvisites.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vvisites.html.twig");
    }
}
