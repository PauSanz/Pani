<?php

/* client/index.html.twig */
class __TwigTemplate_5985dda076b4880826374c4d15048ba56824e2acbf730218106844cb7d968081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cfc2ab78a2191b212bec300b964d233007283930bed0cdcab279dbfc3da0213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfc2ab78a2191b212bec300b964d233007283930bed0cdcab279dbfc3da0213->enter($__internal_5cfc2ab78a2191b212bec300b964d233007283930bed0cdcab279dbfc3da0213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_a286263afa0b49b3ef9598e78cb484ec8cf20ff0517589a880b9f30b06d50f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a286263afa0b49b3ef9598e78cb484ec8cf20ff0517589a880b9f30b06d50f05->enter($__internal_a286263afa0b49b3ef9598e78cb484ec8cf20ff0517589a880b9f30b06d50f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfc2ab78a2191b212bec300b964d233007283930bed0cdcab279dbfc3da0213->leave($__internal_5cfc2ab78a2191b212bec300b964d233007283930bed0cdcab279dbfc3da0213_prof);

        
        $__internal_a286263afa0b49b3ef9598e78cb484ec8cf20ff0517589a880b9f30b06d50f05->leave($__internal_a286263afa0b49b3ef9598e78cb484ec8cf20ff0517589a880b9f30b06d50f05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42dd4c372b17c9909e28f92763316ad953c77c2d512bcb62735e15b62140a21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dd4c372b17c9909e28f92763316ad953c77c2d512bcb62735e15b62140a21f->enter($__internal_42dd4c372b17c9909e28f92763316ad953c77c2d512bcb62735e15b62140a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66be6474b273d9f7e9d7db194b96ea1aec4457d27a2df22a40239cd98dfc3a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66be6474b273d9f7e9d7db194b96ea1aec4457d27a2df22a40239cd98dfc3a34->enter($__internal_66be6474b273d9f7e9d7db194b96ea1aec4457d27a2df22a40239cd98dfc3a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "dni", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "dni", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "dni", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "dni", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\">Create a new client</a>
        </li>
    </ul>
";
        
        $__internal_66be6474b273d9f7e9d7db194b96ea1aec4457d27a2df22a40239cd98dfc3a34->leave($__internal_66be6474b273d9f7e9d7db194b96ea1aec4457d27a2df22a40239cd98dfc3a34_prof);

        
        $__internal_42dd4c372b17c9909e28f92763316ad953c77c2d512bcb62735e15b62140a21f->leave($__internal_42dd4c372b17c9909e28f92763316ad953c77c2d512bcb62735e15b62140a21f_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Dni</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href=\"{{ path('client_show', { 'id': client.dni }) }}\">{{ client.nom }}</a></td>
                <td>{{ client.cognom }}</td>
                <td>{{ client.dni }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('client_show', { 'id': client.dni }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('client_edit', { 'id': client.dni }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_new') }}\">Create a new client</a>
        </li>
    </ul>
{% endblock %}
", "client/index.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\client\\index.html.twig");
    }
}
