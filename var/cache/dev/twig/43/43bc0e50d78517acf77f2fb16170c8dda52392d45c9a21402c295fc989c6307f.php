<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_d45ad7769f77557bfbd692ca1c7feb6a03dbbb0d871eac0c5dec9dc0a149bfbd extends Twig_Template
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
        $__internal_697a97bbee1f527d7cd45fc6e7992633de247e9b1d8216a32abcdadeed83c842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697a97bbee1f527d7cd45fc6e7992633de247e9b1d8216a32abcdadeed83c842->enter($__internal_697a97bbee1f527d7cd45fc6e7992633de247e9b1d8216a32abcdadeed83c842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_d4d61e6f316890bd25875cf87e945781be6e800de50a83b54b264a2042419fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d61e6f316890bd25875cf87e945781be6e800de50a83b54b264a2042419fbe->enter($__internal_d4d61e6f316890bd25875cf87e945781be6e800de50a83b54b264a2042419fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_697a97bbee1f527d7cd45fc6e7992633de247e9b1d8216a32abcdadeed83c842->leave($__internal_697a97bbee1f527d7cd45fc6e7992633de247e9b1d8216a32abcdadeed83c842_prof);

        
        $__internal_d4d61e6f316890bd25875cf87e945781be6e800de50a83b54b264a2042419fbe->leave($__internal_d4d61e6f316890bd25875cf87e945781be6e800de50a83b54b264a2042419fbe_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_897163eb5c93b443577045487264e25bca15c6722e52bf39256386f77a38c778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897163eb5c93b443577045487264e25bca15c6722e52bf39256386f77a38c778->enter($__internal_897163eb5c93b443577045487264e25bca15c6722e52bf39256386f77a38c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0f519f80b0b203ba9417769db260f040ae4eaf0d4253f17f7549dca28a95418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f519f80b0b203ba9417769db260f040ae4eaf0d4253f17f7549dca28a95418->enter($__internal_f0f519f80b0b203ba9417769db260f040ae4eaf0d4253f17f7549dca28a95418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_f0f519f80b0b203ba9417769db260f040ae4eaf0d4253f17f7549dca28a95418->leave($__internal_f0f519f80b0b203ba9417769db260f040ae4eaf0d4253f17f7549dca28a95418_prof);

        
        $__internal_897163eb5c93b443577045487264e25bca15c6722e52bf39256386f77a38c778->leave($__internal_897163eb5c93b443577045487264e25bca15c6722e52bf39256386f77a38c778_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_acc66684cf933ba889851ff136332dc883fe6dc3c8387eb5f4932a181866c92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc66684cf933ba889851ff136332dc883fe6dc3c8387eb5f4932a181866c92e->enter($__internal_acc66684cf933ba889851ff136332dc883fe6dc3c8387eb5f4932a181866c92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f21a35d2188c8293622796561f0fc0e80b8becc1ec559a18102fc5070033600a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21a35d2188c8293622796561f0fc0e80b8becc1ec559a18102fc5070033600a->enter($__internal_f21a35d2188c8293622796561f0fc0e80b8becc1ec559a18102fc5070033600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["Metges"] ?? $this->getContext($context, "Metges")));
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
        
        $__internal_f21a35d2188c8293622796561f0fc0e80b8becc1ec559a18102fc5070033600a->leave($__internal_f21a35d2188c8293622796561f0fc0e80b8becc1ec559a18102fc5070033600a_prof);

        
        $__internal_acc66684cf933ba889851ff136332dc883fe6dc3c8387eb5f4932a181866c92e->leave($__internal_acc66684cf933ba889851ff136332dc883fe6dc3c8387eb5f4932a181866c92e_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
