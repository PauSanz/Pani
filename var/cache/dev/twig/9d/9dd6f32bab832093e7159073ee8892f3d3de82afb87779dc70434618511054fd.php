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
        $__internal_ef64502d5103a300b2bbe3d50d9d820cb9077fe434b19e595438a56232d225fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef64502d5103a300b2bbe3d50d9d820cb9077fe434b19e595438a56232d225fd->enter($__internal_ef64502d5103a300b2bbe3d50d9d820cb9077fe434b19e595438a56232d225fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_b328bd015da40b5d42080e722efaedfdb0619a7f9c4faddf838cb0cc349af222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b328bd015da40b5d42080e722efaedfdb0619a7f9c4faddf838cb0cc349af222->enter($__internal_b328bd015da40b5d42080e722efaedfdb0619a7f9c4faddf838cb0cc349af222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef64502d5103a300b2bbe3d50d9d820cb9077fe434b19e595438a56232d225fd->leave($__internal_ef64502d5103a300b2bbe3d50d9d820cb9077fe434b19e595438a56232d225fd_prof);

        
        $__internal_b328bd015da40b5d42080e722efaedfdb0619a7f9c4faddf838cb0cc349af222->leave($__internal_b328bd015da40b5d42080e722efaedfdb0619a7f9c4faddf838cb0cc349af222_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee7b9757d73b6e78c63eaaba31655dfa122c31350e86cf629f97c68dbc63994f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7b9757d73b6e78c63eaaba31655dfa122c31350e86cf629f97c68dbc63994f->enter($__internal_ee7b9757d73b6e78c63eaaba31655dfa122c31350e86cf629f97c68dbc63994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2bb22aef967c71ffe6691b85058eb3cb9dd95fe577feff95f6e4245d38e173c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bb22aef967c71ffe6691b85058eb3cb9dd95fe577feff95f6e4245d38e173c->enter($__internal_b2bb22aef967c71ffe6691b85058eb3cb9dd95fe577feff95f6e4245d38e173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2bb22aef967c71ffe6691b85058eb3cb9dd95fe577feff95f6e4245d38e173c->leave($__internal_b2bb22aef967c71ffe6691b85058eb3cb9dd95fe577feff95f6e4245d38e173c_prof);

        
        $__internal_ee7b9757d73b6e78c63eaaba31655dfa122c31350e86cf629f97c68dbc63994f->leave($__internal_ee7b9757d73b6e78c63eaaba31655dfa122c31350e86cf629f97c68dbc63994f_prof);

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
