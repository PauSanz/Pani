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
        $__internal_ba275c4299e5c553d77015180f9f978571df244d37b1fced83b95f5d8ef75ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba275c4299e5c553d77015180f9f978571df244d37b1fced83b95f5d8ef75ce6->enter($__internal_ba275c4299e5c553d77015180f9f978571df244d37b1fced83b95f5d8ef75ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        $__internal_64816cc37597fbc2eeb3e936a3d731bd5a31fd9ff6c044e30300350b84ba9f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64816cc37597fbc2eeb3e936a3d731bd5a31fd9ff6c044e30300350b84ba9f7a->enter($__internal_64816cc37597fbc2eeb3e936a3d731bd5a31fd9ff6c044e30300350b84ba9f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:vmetges.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_ba275c4299e5c553d77015180f9f978571df244d37b1fced83b95f5d8ef75ce6->leave($__internal_ba275c4299e5c553d77015180f9f978571df244d37b1fced83b95f5d8ef75ce6_prof);

        
        $__internal_64816cc37597fbc2eeb3e936a3d731bd5a31fd9ff6c044e30300350b84ba9f7a->leave($__internal_64816cc37597fbc2eeb3e936a3d731bd5a31fd9ff6c044e30300350b84ba9f7a_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5f768e0567ffb597472417fb0191937b8b20ce0f1daef02671c40afe3eb5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5f768e0567ffb597472417fb0191937b8b20ce0f1daef02671c40afe3eb5d6->enter($__internal_bb5f768e0567ffb597472417fb0191937b8b20ce0f1daef02671c40afe3eb5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e4eafa6a49820967e7543a6a18cd6c9bddca7ab4fc71df9db4f92a2b309ac11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4eafa6a49820967e7543a6a18cd6c9bddca7ab4fc71df9db4f92a2b309ac11->enter($__internal_3e4eafa6a49820967e7543a6a18cd6c9bddca7ab4fc71df9db4f92a2b309ac11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_3e4eafa6a49820967e7543a6a18cd6c9bddca7ab4fc71df9db4f92a2b309ac11->leave($__internal_3e4eafa6a49820967e7543a6a18cd6c9bddca7ab4fc71df9db4f92a2b309ac11_prof);

        
        $__internal_bb5f768e0567ffb597472417fb0191937b8b20ce0f1daef02671c40afe3eb5d6->leave($__internal_bb5f768e0567ffb597472417fb0191937b8b20ce0f1daef02671c40afe3eb5d6_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7ea84625f5e08e4776e862d4c503b63c73715bda6c86c89486e47d6ff0188cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea84625f5e08e4776e862d4c503b63c73715bda6c86c89486e47d6ff0188cde->enter($__internal_7ea84625f5e08e4776e862d4c503b63c73715bda6c86c89486e47d6ff0188cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1cf229f793846d5539660396459b02893a348aed1380adfb64dfa41efc6a2e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf229f793846d5539660396459b02893a348aed1380adfb64dfa41efc6a2e07->enter($__internal_1cf229f793846d5539660396459b02893a348aed1380adfb64dfa41efc6a2e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_1cf229f793846d5539660396459b02893a348aed1380adfb64dfa41efc6a2e07->leave($__internal_1cf229f793846d5539660396459b02893a348aed1380adfb64dfa41efc6a2e07_prof);

        
        $__internal_7ea84625f5e08e4776e862d4c503b63c73715bda6c86c89486e47d6ff0188cde->leave($__internal_7ea84625f5e08e4776e862d4c503b63c73715bda6c86c89486e47d6ff0188cde_prof);

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
