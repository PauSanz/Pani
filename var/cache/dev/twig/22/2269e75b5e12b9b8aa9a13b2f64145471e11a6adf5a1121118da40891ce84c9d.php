<?php

/* @clinicaPani/Default/vmetges.html.twig */
class __TwigTemplate_92347b1168ed09a94fc0757aabafa7b171e39b6994394f759dfe628ba61e2e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/vmetges.html.twig", 1);
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
        $__internal_35b8fe17db45f436f8beae4986c0fc16c3848ace658285f4f0a4b9c6d6b5b8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b8fe17db45f436f8beae4986c0fc16c3848ace658285f4f0a4b9c6d6b5b8eb->enter($__internal_35b8fe17db45f436f8beae4986c0fc16c3848ace658285f4f0a4b9c6d6b5b8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        $__internal_a798ad51b2e0948fa4d780ecb3e7b2220a61bd44dc48f0fbf1ee9fef7a54d68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a798ad51b2e0948fa4d780ecb3e7b2220a61bd44dc48f0fbf1ee9fef7a54d68d->enter($__internal_a798ad51b2e0948fa4d780ecb3e7b2220a61bd44dc48f0fbf1ee9fef7a54d68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b8fe17db45f436f8beae4986c0fc16c3848ace658285f4f0a4b9c6d6b5b8eb->leave($__internal_35b8fe17db45f436f8beae4986c0fc16c3848ace658285f4f0a4b9c6d6b5b8eb_prof);

        
        $__internal_a798ad51b2e0948fa4d780ecb3e7b2220a61bd44dc48f0fbf1ee9fef7a54d68d->leave($__internal_a798ad51b2e0948fa4d780ecb3e7b2220a61bd44dc48f0fbf1ee9fef7a54d68d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_98a45aba3b506416fce0f149c2f00c13d57fcabc0fd1596e73088e1655730545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a45aba3b506416fce0f149c2f00c13d57fcabc0fd1596e73088e1655730545->enter($__internal_98a45aba3b506416fce0f149c2f00c13d57fcabc0fd1596e73088e1655730545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4bec905fd31b564bc4eaac210b6a297c77551c903472166395a7f37306e2b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bec905fd31b564bc4eaac210b6a297c77551c903472166395a7f37306e2b5f->enter($__internal_e4bec905fd31b564bc4eaac210b6a297c77551c903472166395a7f37306e2b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_e4bec905fd31b564bc4eaac210b6a297c77551c903472166395a7f37306e2b5f->leave($__internal_e4bec905fd31b564bc4eaac210b6a297c77551c903472166395a7f37306e2b5f_prof);

        
        $__internal_98a45aba3b506416fce0f149c2f00c13d57fcabc0fd1596e73088e1655730545->leave($__internal_98a45aba3b506416fce0f149c2f00c13d57fcabc0fd1596e73088e1655730545_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_91d7979413b9440e7646962ac4300063e554ee0dd7a19b2c0e49abdf86b289ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d7979413b9440e7646962ac4300063e554ee0dd7a19b2c0e49abdf86b289ff->enter($__internal_91d7979413b9440e7646962ac4300063e554ee0dd7a19b2c0e49abdf86b289ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_0ecc9b55f4199fd337b4fb940288c0ea2a64ab4e1ad275660543bbb63e82e01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecc9b55f4199fd337b4fb940288c0ea2a64ab4e1ad275660543bbb63e82e01d->enter($__internal_0ecc9b55f4199fd337b4fb940288c0ea2a64ab4e1ad275660543bbb63e82e01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Metges"]) ? $context["Metges"] : $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 14
            echo "            <tr>
                <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
        
        $__internal_0ecc9b55f4199fd337b4fb940288c0ea2a64ab4e1ad275660543bbb63e82e01d->leave($__internal_0ecc9b55f4199fd337b4fb940288c0ea2a64ab4e1ad275660543bbb63e82e01d_prof);

        
        $__internal_91d7979413b9440e7646962ac4300063e554ee0dd7a19b2c0e49abdf86b289ff->leave($__internal_91d7979413b9440e7646962ac4300063e554ee0dd7a19b2c0e49abdf86b289ff_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vmetges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Metges{% endblock %}
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
{% endblock %}", "@clinicaPani/Default/vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
