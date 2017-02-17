<?php

/* client/show.html.twig */
class __TwigTemplate_76226e41d746bd5b2adac23c17ebc156f6b6964cf6d1431378f5409228e00c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_891da40b89f82a24a3e32d3581da9396414c9a4d10ca2d401f8c644b9fd0125b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891da40b89f82a24a3e32d3581da9396414c9a4d10ca2d401f8c644b9fd0125b->enter($__internal_891da40b89f82a24a3e32d3581da9396414c9a4d10ca2d401f8c644b9fd0125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_b99ddbd421cdd54dd80dd1edf2c91ae2ead94d2a20800ff0655e0509fe40c112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99ddbd421cdd54dd80dd1edf2c91ae2ead94d2a20800ff0655e0509fe40c112->enter($__internal_b99ddbd421cdd54dd80dd1edf2c91ae2ead94d2a20800ff0655e0509fe40c112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891da40b89f82a24a3e32d3581da9396414c9a4d10ca2d401f8c644b9fd0125b->leave($__internal_891da40b89f82a24a3e32d3581da9396414c9a4d10ca2d401f8c644b9fd0125b_prof);

        
        $__internal_b99ddbd421cdd54dd80dd1edf2c91ae2ead94d2a20800ff0655e0509fe40c112->leave($__internal_b99ddbd421cdd54dd80dd1edf2c91ae2ead94d2a20800ff0655e0509fe40c112_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6030c6f609573fc07ca33a1c02a6166befdb4186d4314fa37a334f6369a57f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6030c6f609573fc07ca33a1c02a6166befdb4186d4314fa37a334f6369a57f03->enter($__internal_6030c6f609573fc07ca33a1c02a6166befdb4186d4314fa37a334f6369a57f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f96ccde849f59decbfd415692e0be31b1ebd4ec571f3d7c8a32ea06a836f3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f96ccde849f59decbfd415692e0be31b1ebd4ec571f3d7c8a32ea06a836f3f0->enter($__internal_2f96ccde849f59decbfd415692e0be31b1ebd4ec571f3d7c8a32ea06a836f3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f96ccde849f59decbfd415692e0be31b1ebd4ec571f3d7c8a32ea06a836f3f0->leave($__internal_2f96ccde849f59decbfd415692e0be31b1ebd4ec571f3d7c8a32ea06a836f3f0_prof);

        
        $__internal_6030c6f609573fc07ca33a1c02a6166befdb4186d4314fa37a334f6369a57f03->leave($__internal_6030c6f609573fc07ca33a1c02a6166befdb4186d4314fa37a334f6369a57f03_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
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
", "client/show.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app\\Resources\\views\\client\\show.html.twig");
    }
}
