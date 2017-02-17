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
        $__internal_4ccf4e6c12a7a9e6afe9b8ad2eb18342f268e32d4329eb9246978165604d175b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccf4e6c12a7a9e6afe9b8ad2eb18342f268e32d4329eb9246978165604d175b->enter($__internal_4ccf4e6c12a7a9e6afe9b8ad2eb18342f268e32d4329eb9246978165604d175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $__internal_1a88071530cee8c239b3c17a3348b426e2e709e5b06060ae29ed67df414e07c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a88071530cee8c239b3c17a3348b426e2e709e5b06060ae29ed67df414e07c4->enter($__internal_1a88071530cee8c239b3c17a3348b426e2e709e5b06060ae29ed67df414e07c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ccf4e6c12a7a9e6afe9b8ad2eb18342f268e32d4329eb9246978165604d175b->leave($__internal_4ccf4e6c12a7a9e6afe9b8ad2eb18342f268e32d4329eb9246978165604d175b_prof);

        
        $__internal_1a88071530cee8c239b3c17a3348b426e2e709e5b06060ae29ed67df414e07c4->leave($__internal_1a88071530cee8c239b3c17a3348b426e2e709e5b06060ae29ed67df414e07c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0824ab0c9d675c18942af649099796e5b564ad249c87408d73b9e13e053730cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0824ab0c9d675c18942af649099796e5b564ad249c87408d73b9e13e053730cd->enter($__internal_0824ab0c9d675c18942af649099796e5b564ad249c87408d73b9e13e053730cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69d7a467f6dc86292458a444ffc91752448b696cd34af8cfd6d20801526b7b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d7a467f6dc86292458a444ffc91752448b696cd34af8cfd6d20801526b7b0d->enter($__internal_69d7a467f6dc86292458a444ffc91752448b696cd34af8cfd6d20801526b7b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69d7a467f6dc86292458a444ffc91752448b696cd34af8cfd6d20801526b7b0d->leave($__internal_69d7a467f6dc86292458a444ffc91752448b696cd34af8cfd6d20801526b7b0d_prof);

        
        $__internal_0824ab0c9d675c18942af649099796e5b564ad249c87408d73b9e13e053730cd->leave($__internal_0824ab0c9d675c18942af649099796e5b564ad249c87408d73b9e13e053730cd_prof);

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
