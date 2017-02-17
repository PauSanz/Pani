<?php

/* clinicaPaniBundle:Default:vmetges.html.twig */
class __TwigTemplate_2f1b39ec90137fcea09c178015f3b489d4a8a00ac4fbcf508cef568386c18cf8 extends Twig_Template
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
        $__internal_8fe8eeb5d23899ccb372207b545002d4bf1fd4bf0e61f0163d7e038add38a656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe8eeb5d23899ccb372207b545002d4bf1fd4bf0e61f0163d7e038add38a656->enter($__internal_8fe8eeb5d23899ccb372207b545002d4bf1fd4bf0e61f0163d7e038add38a656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_af841999a0a8a13d0cdb8a52e4e129a5cfd1962cfe45412d1efcfdcb3c0083bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af841999a0a8a13d0cdb8a52e4e129a5cfd1962cfe45412d1efcfdcb3c0083bd->enter($__internal_af841999a0a8a13d0cdb8a52e4e129a5cfd1962cfe45412d1efcfdcb3c0083bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_8fe8eeb5d23899ccb372207b545002d4bf1fd4bf0e61f0163d7e038add38a656->leave($__internal_8fe8eeb5d23899ccb372207b545002d4bf1fd4bf0e61f0163d7e038add38a656_prof);

        
        $__internal_af841999a0a8a13d0cdb8a52e4e129a5cfd1962cfe45412d1efcfdcb3c0083bd->leave($__internal_af841999a0a8a13d0cdb8a52e4e129a5cfd1962cfe45412d1efcfdcb3c0083bd_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e596365307f94d55bdc4bcfd2816947976ca2fe310eb6f1418de6e54505f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e596365307f94d55bdc4bcfd2816947976ca2fe310eb6f1418de6e54505f2b->enter($__internal_06e596365307f94d55bdc4bcfd2816947976ca2fe310eb6f1418de6e54505f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16bb37fda6a2edb7cce74b6c981f55a21795245d1b85659ec8d337a59e11c954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bb37fda6a2edb7cce74b6c981f55a21795245d1b85659ec8d337a59e11c954->enter($__internal_16bb37fda6a2edb7cce74b6c981f55a21795245d1b85659ec8d337a59e11c954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_16bb37fda6a2edb7cce74b6c981f55a21795245d1b85659ec8d337a59e11c954->leave($__internal_16bb37fda6a2edb7cce74b6c981f55a21795245d1b85659ec8d337a59e11c954_prof);

        
        $__internal_06e596365307f94d55bdc4bcfd2816947976ca2fe310eb6f1418de6e54505f2b->leave($__internal_06e596365307f94d55bdc4bcfd2816947976ca2fe310eb6f1418de6e54505f2b_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_28557224c74f664fca486ad92b8104d5e613969dc35e2cc25fd48b896ae3e83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28557224c74f664fca486ad92b8104d5e613969dc35e2cc25fd48b896ae3e83d->enter($__internal_28557224c74f664fca486ad92b8104d5e613969dc35e2cc25fd48b896ae3e83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_858ebfb3909676b59166c941728717703c1578d07ba6516e069888ef958d6ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858ebfb3909676b59166c941728717703c1578d07ba6516e069888ef958d6ef9->enter($__internal_858ebfb3909676b59166c941728717703c1578d07ba6516e069888ef958d6ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_858ebfb3909676b59166c941728717703c1578d07ba6516e069888ef958d6ef9->leave($__internal_858ebfb3909676b59166c941728717703c1578d07ba6516e069888ef958d6ef9_prof);

        
        $__internal_28557224c74f664fca486ad92b8104d5e613969dc35e2cc25fd48b896ae3e83d->leave($__internal_28557224c74f664fca486ad92b8104d5e613969dc35e2cc25fd48b896ae3e83d_prof);

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
{% endblock %}", "clinicaPaniBundle:Default:vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/vmetges.html.twig");
    }
}
