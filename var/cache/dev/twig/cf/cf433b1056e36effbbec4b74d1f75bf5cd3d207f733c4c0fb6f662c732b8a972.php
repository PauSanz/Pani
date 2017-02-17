<?php

/* :client:show.html.twig */
class __TwigTemplate_d0a8929d5458bb554de83fcc7a60c9b028182e12994652a694342e53acbb7aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:show.html.twig", 1);
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
        $__internal_756f2e8c4504e8ce692ba2b58924e5662216ab1a8d619c40568a5a87e9963e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756f2e8c4504e8ce692ba2b58924e5662216ab1a8d619c40568a5a87e9963e8f->enter($__internal_756f2e8c4504e8ce692ba2b58924e5662216ab1a8d619c40568a5a87e9963e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_8d82417f34ce848f377524d056d1f5aebc69e6c997331d9ab1e470a25f684270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d82417f34ce848f377524d056d1f5aebc69e6c997331d9ab1e470a25f684270->enter($__internal_8d82417f34ce848f377524d056d1f5aebc69e6c997331d9ab1e470a25f684270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_756f2e8c4504e8ce692ba2b58924e5662216ab1a8d619c40568a5a87e9963e8f->leave($__internal_756f2e8c4504e8ce692ba2b58924e5662216ab1a8d619c40568a5a87e9963e8f_prof);

        
        $__internal_8d82417f34ce848f377524d056d1f5aebc69e6c997331d9ab1e470a25f684270->leave($__internal_8d82417f34ce848f377524d056d1f5aebc69e6c997331d9ab1e470a25f684270_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba6a15240151f135442626160eb60110eef1a7f0f31e87019c2058905bcff20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba6a15240151f135442626160eb60110eef1a7f0f31e87019c2058905bcff20->enter($__internal_4ba6a15240151f135442626160eb60110eef1a7f0f31e87019c2058905bcff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af238824a2cd66202dc520924c70b7e70e999196116f681b6d3b0d8992d7315a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af238824a2cd66202dc520924c70b7e70e999196116f681b6d3b0d8992d7315a->enter($__internal_af238824a2cd66202dc520924c70b7e70e999196116f681b6d3b0d8992d7315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cognom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "cognom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "dni", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "dni", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_af238824a2cd66202dc520924c70b7e70e999196116f681b6d3b0d8992d7315a->leave($__internal_af238824a2cd66202dc520924c70b7e70e999196116f681b6d3b0d8992d7315a_prof);

        
        $__internal_4ba6a15240151f135442626160eb60110eef1a7f0f31e87019c2058905bcff20->leave($__internal_4ba6a15240151f135442626160eb60110eef1a7f0f31e87019c2058905bcff20_prof);

    }

    public function getTemplateName()
    {
        return ":client:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Client</h1>

    <table>
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ client.nom }}</td>
            </tr>
            <tr>
                <th>Cognom</th>
                <td>{{ client.cognom }}</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>{{ client.dni }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('client_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('client_edit', { 'id': client.dni }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":client:show.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/client/show.html.twig");
    }
}
