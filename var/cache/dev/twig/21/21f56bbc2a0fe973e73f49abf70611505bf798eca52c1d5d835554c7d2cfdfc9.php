<?php

/* :client:index.html.twig */
class __TwigTemplate_10a55e52f32e449eead7ace01c6a334d2767e0bf2107c622833a7f5c420bc228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":client:index.html.twig", 1);
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
        $__internal_0690f339a5efb478cea8808a7dcdd09aaf25a811438a44d716ff51f0f7ea5dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0690f339a5efb478cea8808a7dcdd09aaf25a811438a44d716ff51f0f7ea5dbe->enter($__internal_0690f339a5efb478cea8808a7dcdd09aaf25a811438a44d716ff51f0f7ea5dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $__internal_fde057d6ad9b46d2af5cf91fbc6a5b1963a60b71379501e49e8beae8fc1980b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde057d6ad9b46d2af5cf91fbc6a5b1963a60b71379501e49e8beae8fc1980b6->enter($__internal_fde057d6ad9b46d2af5cf91fbc6a5b1963a60b71379501e49e8beae8fc1980b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":client:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0690f339a5efb478cea8808a7dcdd09aaf25a811438a44d716ff51f0f7ea5dbe->leave($__internal_0690f339a5efb478cea8808a7dcdd09aaf25a811438a44d716ff51f0f7ea5dbe_prof);

        
        $__internal_fde057d6ad9b46d2af5cf91fbc6a5b1963a60b71379501e49e8beae8fc1980b6->leave($__internal_fde057d6ad9b46d2af5cf91fbc6a5b1963a60b71379501e49e8beae8fc1980b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2831d73dddf1866c8a4dfd31a50100b619981af930424a336be385b89ab58194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2831d73dddf1866c8a4dfd31a50100b619981af930424a336be385b89ab58194->enter($__internal_2831d73dddf1866c8a4dfd31a50100b619981af930424a336be385b89ab58194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ee8ac27cdd195a89a322af89c086705981c380acf1f0f4977b670f094d9dab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee8ac27cdd195a89a322af89c086705981c380acf1f0f4977b670f094d9dab0->enter($__internal_5ee8ac27cdd195a89a322af89c086705981c380acf1f0f4977b670f094d9dab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ee8ac27cdd195a89a322af89c086705981c380acf1f0f4977b670f094d9dab0->leave($__internal_5ee8ac27cdd195a89a322af89c086705981c380acf1f0f4977b670f094d9dab0_prof);

        
        $__internal_2831d73dddf1866c8a4dfd31a50100b619981af930424a336be385b89ab58194->leave($__internal_2831d73dddf1866c8a4dfd31a50100b619981af930424a336be385b89ab58194_prof);

    }

    public function getTemplateName()
    {
        return ":client:index.html.twig";
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
", ":client:index.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/client/index.html.twig");
    }
}
