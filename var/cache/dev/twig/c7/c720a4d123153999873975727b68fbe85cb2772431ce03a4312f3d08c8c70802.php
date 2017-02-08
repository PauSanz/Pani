<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_d949771794f5ad5022333c65defe3890f8fbf3ae233acbdb8fc01440584a35cc extends Twig_Template
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
        $__internal_4fe280da04ce7c6e92e1a720000d44e8a6c66865692557667d010a82cef1d27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe280da04ce7c6e92e1a720000d44e8a6c66865692557667d010a82cef1d27b->enter($__internal_4fe280da04ce7c6e92e1a720000d44e8a6c66865692557667d010a82cef1d27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_d239dfeada28fa4c3a0620b17eb992e7b06af86139f6c732c75633a8a096927f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d239dfeada28fa4c3a0620b17eb992e7b06af86139f6c732c75633a8a096927f->enter($__internal_d239dfeada28fa4c3a0620b17eb992e7b06af86139f6c732c75633a8a096927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_4fe280da04ce7c6e92e1a720000d44e8a6c66865692557667d010a82cef1d27b->leave($__internal_4fe280da04ce7c6e92e1a720000d44e8a6c66865692557667d010a82cef1d27b_prof);

        
        $__internal_d239dfeada28fa4c3a0620b17eb992e7b06af86139f6c732c75633a8a096927f->leave($__internal_d239dfeada28fa4c3a0620b17eb992e7b06af86139f6c732c75633a8a096927f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f544996eb1d8ebbfa29f2621cee8233416e60b3dc3f5e8ce99e8afeb6e2a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f544996eb1d8ebbfa29f2621cee8233416e60b3dc3f5e8ce99e8afeb6e2a30->enter($__internal_b8f544996eb1d8ebbfa29f2621cee8233416e60b3dc3f5e8ce99e8afeb6e2a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da4d14f454b88d28151ce323b54c16dc4d6c99b7b63d40922009c0bab4952bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4d14f454b88d28151ce323b54c16dc4d6c99b7b63d40922009c0bab4952bfb->enter($__internal_da4d14f454b88d28151ce323b54c16dc4d6c99b7b63d40922009c0bab4952bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_da4d14f454b88d28151ce323b54c16dc4d6c99b7b63d40922009c0bab4952bfb->leave($__internal_da4d14f454b88d28151ce323b54c16dc4d6c99b7b63d40922009c0bab4952bfb_prof);

        
        $__internal_b8f544996eb1d8ebbfa29f2621cee8233416e60b3dc3f5e8ce99e8afeb6e2a30->leave($__internal_b8f544996eb1d8ebbfa29f2621cee8233416e60b3dc3f5e8ce99e8afeb6e2a30_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1083aca2d64c4a5f3b19d31b5290d78f8436d56983e284a6fb690673ebc27421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1083aca2d64c4a5f3b19d31b5290d78f8436d56983e284a6fb690673ebc27421->enter($__internal_1083aca2d64c4a5f3b19d31b5290d78f8436d56983e284a6fb690673ebc27421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_275946dfbdb4daa1972496c199ff568e074302a4001df6ce6197bdfc1c05cef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275946dfbdb4daa1972496c199ff568e074302a4001df6ce6197bdfc1c05cef4->enter($__internal_275946dfbdb4daa1972496c199ff568e074302a4001df6ce6197bdfc1c05cef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <h4>Test</h4>
    <table id=\"mytable\" class=\"table table-bordred table-striped\">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Metges"] ?? $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 13
            echo "                <tr>
                    <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>
";
        
        $__internal_275946dfbdb4daa1972496c199ff568e074302a4001df6ce6197bdfc1c05cef4->leave($__internal_275946dfbdb4daa1972496c199ff568e074302a4001df6ce6197bdfc1c05cef4_prof);

        
        $__internal_1083aca2d64c4a5f3b19d31b5290d78f8436d56983e284a6fb690673ebc27421->leave($__internal_1083aca2d64c4a5f3b19d31b5290d78f8436d56983e284a6fb690673ebc27421_prof);

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
            <th>ID</th>
            <th>Nom</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            {% for metge in Metges %}
                <tr>
                    <th>{{ metge.id }}</th>
                    <td>{{ metge.nom }}</td>
                    <td>{{ metge.cognom }}</td>
                    <td>{{ metge.dni }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle/Resources/views/Default/vmetges.html.twig");
    }
}
