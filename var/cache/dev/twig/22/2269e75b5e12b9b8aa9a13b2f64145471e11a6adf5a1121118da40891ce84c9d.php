<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_92347b1168ed09a94fc0757aabafa7b171e39b6994394f759dfe628ba61e2e83 extends Twig_Template
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
        $__internal_9bcbc205a09cf2023e26736e84d7daf5884b4e179f0e923186506106fc312e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcbc205a09cf2023e26736e84d7daf5884b4e179f0e923186506106fc312e42->enter($__internal_9bcbc205a09cf2023e26736e84d7daf5884b4e179f0e923186506106fc312e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_1b076500efca47a2c7db57eb9c627ef5c9043d0a8b3bbe12f12ab8b17abff41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b076500efca47a2c7db57eb9c627ef5c9043d0a8b3bbe12f12ab8b17abff41f->enter($__internal_1b076500efca47a2c7db57eb9c627ef5c9043d0a8b3bbe12f12ab8b17abff41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_9bcbc205a09cf2023e26736e84d7daf5884b4e179f0e923186506106fc312e42->leave($__internal_9bcbc205a09cf2023e26736e84d7daf5884b4e179f0e923186506106fc312e42_prof);

        
        $__internal_1b076500efca47a2c7db57eb9c627ef5c9043d0a8b3bbe12f12ab8b17abff41f->leave($__internal_1b076500efca47a2c7db57eb9c627ef5c9043d0a8b3bbe12f12ab8b17abff41f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_f005bf2866708fc7053f5913e9433b9c8cd4f5b57a9cc77081bd0cb4294bb0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f005bf2866708fc7053f5913e9433b9c8cd4f5b57a9cc77081bd0cb4294bb0d9->enter($__internal_f005bf2866708fc7053f5913e9433b9c8cd4f5b57a9cc77081bd0cb4294bb0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c85182351809d322e4f3d941087228476247e6ff6c0b127c7039f17287a27cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85182351809d322e4f3d941087228476247e6ff6c0b127c7039f17287a27cb7->enter($__internal_c85182351809d322e4f3d941087228476247e6ff6c0b127c7039f17287a27cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_c85182351809d322e4f3d941087228476247e6ff6c0b127c7039f17287a27cb7->leave($__internal_c85182351809d322e4f3d941087228476247e6ff6c0b127c7039f17287a27cb7_prof);

        
        $__internal_f005bf2866708fc7053f5913e9433b9c8cd4f5b57a9cc77081bd0cb4294bb0d9->leave($__internal_f005bf2866708fc7053f5913e9433b9c8cd4f5b57a9cc77081bd0cb4294bb0d9_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ea189fc5e058d589f5806b524bf00f24ea8468dabcef00db167ed3cdee368e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea189fc5e058d589f5806b524bf00f24ea8468dabcef00db167ed3cdee368e28->enter($__internal_ea189fc5e058d589f5806b524bf00f24ea8468dabcef00db167ed3cdee368e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_175ea39554c119d7f66d46e47dde0de8da8cfa02c6aea112e5fa505c32be345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ea39554c119d7f66d46e47dde0de8da8cfa02c6aea112e5fa505c32be345f->enter($__internal_175ea39554c119d7f66d46e47dde0de8da8cfa02c6aea112e5fa505c32be345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>DNI</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Especialitat</th>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Metges"]) ? $context["Metges"] : $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 13
            echo "            <tr>
                <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </tbody>
</table>
";
        
        $__internal_175ea39554c119d7f66d46e47dde0de8da8cfa02c6aea112e5fa505c32be345f->leave($__internal_175ea39554c119d7f66d46e47dde0de8da8cfa02c6aea112e5fa505c32be345f_prof);

        
        $__internal_ea189fc5e058d589f5806b524bf00f24ea8468dabcef00db167ed3cdee368e28->leave($__internal_ea189fc5e058d589f5806b524bf00f24ea8468dabcef00db167ed3cdee368e28_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:vmetges.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 20,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  81 => 13,  77 => 12,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Metges{% endblock %}
{% block page_content %}
    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
        <th>DNI</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Especialitat</th>
    </thead>
    <tbody>
        {% for metge in Metges %}
            <tr>
                <th>{{ metge.dni }}</th>
                <td>{{ metge.nom }}</td>
                <td>{{ metge.cognom }}</td>
                <td>{{ metge.especialitat }}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
