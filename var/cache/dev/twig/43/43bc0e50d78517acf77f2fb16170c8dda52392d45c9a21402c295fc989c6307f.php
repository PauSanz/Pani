<?php

/* @clinicaPani/Default/vmetges.html.twig */
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
        $__internal_e51cf4c64a1d96704b14b1a625bfe7c4428463a6be2d927ff5b4910ea549d07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51cf4c64a1d96704b14b1a625bfe7c4428463a6be2d927ff5b4910ea549d07e->enter($__internal_e51cf4c64a1d96704b14b1a625bfe7c4428463a6be2d927ff5b4910ea549d07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        $__internal_b91750ddb0576034ff2d3f66a757673d321a44a2c046519abcea5b025ae38317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91750ddb0576034ff2d3f66a757673d321a44a2c046519abcea5b025ae38317->enter($__internal_b91750ddb0576034ff2d3f66a757673d321a44a2c046519abcea5b025ae38317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_e51cf4c64a1d96704b14b1a625bfe7c4428463a6be2d927ff5b4910ea549d07e->leave($__internal_e51cf4c64a1d96704b14b1a625bfe7c4428463a6be2d927ff5b4910ea549d07e_prof);

        
        $__internal_b91750ddb0576034ff2d3f66a757673d321a44a2c046519abcea5b025ae38317->leave($__internal_b91750ddb0576034ff2d3f66a757673d321a44a2c046519abcea5b025ae38317_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_4358c10a0c6539a145a429c30958ce338d948e77a48b874689dfd9757aaa6664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4358c10a0c6539a145a429c30958ce338d948e77a48b874689dfd9757aaa6664->enter($__internal_4358c10a0c6539a145a429c30958ce338d948e77a48b874689dfd9757aaa6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b3fab48f3fa5bf60b01ec2183599b4480a5559cb37ba1a69d9daf2650540d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3fab48f3fa5bf60b01ec2183599b4480a5559cb37ba1a69d9daf2650540d29->enter($__internal_3b3fab48f3fa5bf60b01ec2183599b4480a5559cb37ba1a69d9daf2650540d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_3b3fab48f3fa5bf60b01ec2183599b4480a5559cb37ba1a69d9daf2650540d29->leave($__internal_3b3fab48f3fa5bf60b01ec2183599b4480a5559cb37ba1a69d9daf2650540d29_prof);

        
        $__internal_4358c10a0c6539a145a429c30958ce338d948e77a48b874689dfd9757aaa6664->leave($__internal_4358c10a0c6539a145a429c30958ce338d948e77a48b874689dfd9757aaa6664_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee54b4a901c907405d292e7d8f71292601d9f9543b14b5f2874e64f701be1cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee54b4a901c907405d292e7d8f71292601d9f9543b14b5f2874e64f701be1cf1->enter($__internal_ee54b4a901c907405d292e7d8f71292601d9f9543b14b5f2874e64f701be1cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4fc4011c1bc4935b8189f0717726e9783fd4d46ab64089577f11da2b78c2fcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc4011c1bc4935b8189f0717726e9783fd4d46ab64089577f11da2b78c2fcc4->enter($__internal_4fc4011c1bc4935b8189f0717726e9783fd4d46ab64089577f11da2b78c2fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_4fc4011c1bc4935b8189f0717726e9783fd4d46ab64089577f11da2b78c2fcc4->leave($__internal_4fc4011c1bc4935b8189f0717726e9783fd4d46ab64089577f11da2b78c2fcc4_prof);

        
        $__internal_ee54b4a901c907405d292e7d8f71292601d9f9543b14b5f2874e64f701be1cf1->leave($__internal_ee54b4a901c907405d292e7d8f71292601d9f9543b14b5f2874e64f701be1cf1_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vmetges.html.twig";
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
{% endblock %}", "@clinicaPani/Default/vmetges.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
