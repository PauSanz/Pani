<?php

/* clinicaPaniBundle:Default:vvisites.html.twig */
class __TwigTemplate_885df6c31270593ea3e1c3a7aea44d43c73b3fa555a37d9c30bede9d2903f98e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bea3d03c0ae6af70128f0c1638aa18506210028945f74715d12acf270c274fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea3d03c0ae6af70128f0c1638aa18506210028945f74715d12acf270c274fb9->enter($__internal_bea3d03c0ae6af70128f0c1638aa18506210028945f74715d12acf270c274fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        $__internal_b17fbc33f6ec03b47f3022ce3e865c30997b74a230f19f2c0c66d4588b75d264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17fbc33f6ec03b47f3022ce3e865c30997b74a230f19f2c0c66d4588b75d264->enter($__internal_b17fbc33f6ec03b47f3022ce3e865c30997b74a230f19f2c0c66d4588b75d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vvisites.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_bea3d03c0ae6af70128f0c1638aa18506210028945f74715d12acf270c274fb9->leave($__internal_bea3d03c0ae6af70128f0c1638aa18506210028945f74715d12acf270c274fb9_prof);

        
        $__internal_b17fbc33f6ec03b47f3022ce3e865c30997b74a230f19f2c0c66d4588b75d264->leave($__internal_b17fbc33f6ec03b47f3022ce3e865c30997b74a230f19f2c0c66d4588b75d264_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_10f72a71ce9f86b0c28011513c6e79d275d402a4018d7864e6dd98c5fd15d888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f72a71ce9f86b0c28011513c6e79d275d402a4018d7864e6dd98c5fd15d888->enter($__internal_10f72a71ce9f86b0c28011513c6e79d275d402a4018d7864e6dd98c5fd15d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f091ff8bdbb54a1b8317bdf573f1bd9f1afb1594ae5dfbffdfdabe064f866e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f091ff8bdbb54a1b8317bdf573f1bd9f1afb1594ae5dfbffdfdabe064f866e6e->enter($__internal_f091ff8bdbb54a1b8317bdf573f1bd9f1afb1594ae5dfbffdfdabe064f866e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visites";
        
        $__internal_f091ff8bdbb54a1b8317bdf573f1bd9f1afb1594ae5dfbffdfdabe064f866e6e->leave($__internal_f091ff8bdbb54a1b8317bdf573f1bd9f1afb1594ae5dfbffdfdabe064f866e6e_prof);

        
        $__internal_10f72a71ce9f86b0c28011513c6e79d275d402a4018d7864e6dd98c5fd15d888->leave($__internal_10f72a71ce9f86b0c28011513c6e79d275d402a4018d7864e6dd98c5fd15d888_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f4c9786f4d2949ad61cf07077a67ad07dd0092767566bdd51ccda43d31583203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c9786f4d2949ad61cf07077a67ad07dd0092767566bdd51ccda43d31583203->enter($__internal_f4c9786f4d2949ad61cf07077a67ad07dd0092767566bdd51ccda43d31583203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_59646f2c4c02759a3e80938f6151d13f5af62da9c8f3331e681193f1853e5406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59646f2c4c02759a3e80938f6151d13f5af62da9c8f3331e681193f1853e5406->enter($__internal_59646f2c4c02759a3e80938f6151d13f5af62da9c8f3331e681193f1853e5406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>REF</th>
        <th>Data</th>
        <th>Hora</th>
    </thead>
    <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visites"] ?? $this->getContext($context, "Visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visites"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["visites"], "ref", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visites"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_detallsvisita", array("ref" => $this->getAttribute($context["visites"], "ref", array()))), "html", null, true);
            echo "\">Veure Detalls</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visites'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_59646f2c4c02759a3e80938f6151d13f5af62da9c8f3331e681193f1853e5406->leave($__internal_59646f2c4c02759a3e80938f6151d13f5af62da9c8f3331e681193f1853e5406_prof);

        
        $__internal_f4c9786f4d2949ad61cf07077a67ad07dd0092767566bdd51ccda43d31583203->leave($__internal_f4c9786f4d2949ad61cf07077a67ad07dd0092767566bdd51ccda43d31583203_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vvisites.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  80 => 12,  76 => 11,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Visites{% endblock %}
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
{% endblock %}", "clinicaPaniBundle:Default:vvisites.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vvisites.html.twig");
    }
}
