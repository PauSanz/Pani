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
        $__internal_f86e290a0d3befe221d2eef1c6d200c76377353c109e3989e630f7fb2ad865d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86e290a0d3befe221d2eef1c6d200c76377353c109e3989e630f7fb2ad865d4->enter($__internal_f86e290a0d3befe221d2eef1c6d200c76377353c109e3989e630f7fb2ad865d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_ad991dcf070c8d834caf24a5e68c8b67c1dba3e967d1e372ee233341b0a061ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad991dcf070c8d834caf24a5e68c8b67c1dba3e967d1e372ee233341b0a061ae->enter($__internal_ad991dcf070c8d834caf24a5e68c8b67c1dba3e967d1e372ee233341b0a061ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f86e290a0d3befe221d2eef1c6d200c76377353c109e3989e630f7fb2ad865d4->leave($__internal_f86e290a0d3befe221d2eef1c6d200c76377353c109e3989e630f7fb2ad865d4_prof);

        
        $__internal_ad991dcf070c8d834caf24a5e68c8b67c1dba3e967d1e372ee233341b0a061ae->leave($__internal_ad991dcf070c8d834caf24a5e68c8b67c1dba3e967d1e372ee233341b0a061ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db0b708c923ffcc6ab17c8197ce2ba3bdf2eda2ba71f9fe2d62d9143037abf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0b708c923ffcc6ab17c8197ce2ba3bdf2eda2ba71f9fe2d62d9143037abf77->enter($__internal_db0b708c923ffcc6ab17c8197ce2ba3bdf2eda2ba71f9fe2d62d9143037abf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f90efe6c2f6ea64870ec57795aa9987a9ffaeecf4e31804cb4e256316847cd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90efe6c2f6ea64870ec57795aa9987a9ffaeecf4e31804cb4e256316847cd36->enter($__internal_f90efe6c2f6ea64870ec57795aa9987a9ffaeecf4e31804cb4e256316847cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f90efe6c2f6ea64870ec57795aa9987a9ffaeecf4e31804cb4e256316847cd36->leave($__internal_f90efe6c2f6ea64870ec57795aa9987a9ffaeecf4e31804cb4e256316847cd36_prof);

        
        $__internal_db0b708c923ffcc6ab17c8197ce2ba3bdf2eda2ba71f9fe2d62d9143037abf77->leave($__internal_db0b708c923ffcc6ab17c8197ce2ba3bdf2eda2ba71f9fe2d62d9143037abf77_prof);

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
