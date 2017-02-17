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
        $__internal_bf9db2d2ddddee0114c0fe0c2bcd1031dc9b0f119243f38ddbcb94807c06101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9db2d2ddddee0114c0fe0c2bcd1031dc9b0f119243f38ddbcb94807c06101f->enter($__internal_bf9db2d2ddddee0114c0fe0c2bcd1031dc9b0f119243f38ddbcb94807c06101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_4d427bdacf354a29012065ed00907b898410c5d2210f4e798feba3c79097be78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d427bdacf354a29012065ed00907b898410c5d2210f4e798feba3c79097be78->enter($__internal_4d427bdacf354a29012065ed00907b898410c5d2210f4e798feba3c79097be78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9db2d2ddddee0114c0fe0c2bcd1031dc9b0f119243f38ddbcb94807c06101f->leave($__internal_bf9db2d2ddddee0114c0fe0c2bcd1031dc9b0f119243f38ddbcb94807c06101f_prof);

        
        $__internal_4d427bdacf354a29012065ed00907b898410c5d2210f4e798feba3c79097be78->leave($__internal_4d427bdacf354a29012065ed00907b898410c5d2210f4e798feba3c79097be78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69beab0e8a4ebb9a7c696c7571afcd35c47121e230e4fee61b22518d33748495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69beab0e8a4ebb9a7c696c7571afcd35c47121e230e4fee61b22518d33748495->enter($__internal_69beab0e8a4ebb9a7c696c7571afcd35c47121e230e4fee61b22518d33748495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6f413f9849b122c39d28ea2cf247376f80bd92eab03744c8aa1a37923646abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f413f9849b122c39d28ea2cf247376f80bd92eab03744c8aa1a37923646abd->enter($__internal_a6f413f9849b122c39d28ea2cf247376f80bd92eab03744c8aa1a37923646abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6f413f9849b122c39d28ea2cf247376f80bd92eab03744c8aa1a37923646abd->leave($__internal_a6f413f9849b122c39d28ea2cf247376f80bd92eab03744c8aa1a37923646abd_prof);

        
        $__internal_69beab0e8a4ebb9a7c696c7571afcd35c47121e230e4fee61b22518d33748495->leave($__internal_69beab0e8a4ebb9a7c696c7571afcd35c47121e230e4fee61b22518d33748495_prof);

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
