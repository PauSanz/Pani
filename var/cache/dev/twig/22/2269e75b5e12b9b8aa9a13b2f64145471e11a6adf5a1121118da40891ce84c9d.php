<?php

/* @clinicaPani/Default/vmetges.html.twig */
class __TwigTemplate_92347b1168ed09a94fc0757aabafa7b171e39b6994394f759dfe628ba61e2e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/vmetges.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clinicaPaniBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21fa61eaf0501cc5c82b362f26647209ea2947c0158edbe80b2c91068da08dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fa61eaf0501cc5c82b362f26647209ea2947c0158edbe80b2c91068da08dd2->enter($__internal_21fa61eaf0501cc5c82b362f26647209ea2947c0158edbe80b2c91068da08dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        $__internal_c311ce867444283ae2633fcfbcfec168cbb7497b8ce5e79da5aa1b10aea0c038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c311ce867444283ae2633fcfbcfec168cbb7497b8ce5e79da5aa1b10aea0c038->enter($__internal_c311ce867444283ae2633fcfbcfec168cbb7497b8ce5e79da5aa1b10aea0c038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/vmetges.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21fa61eaf0501cc5c82b362f26647209ea2947c0158edbe80b2c91068da08dd2->leave($__internal_21fa61eaf0501cc5c82b362f26647209ea2947c0158edbe80b2c91068da08dd2_prof);

        
        $__internal_c311ce867444283ae2633fcfbcfec168cbb7497b8ce5e79da5aa1b10aea0c038->leave($__internal_c311ce867444283ae2633fcfbcfec168cbb7497b8ce5e79da5aa1b10aea0c038_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c91cea32112e5241045daf4e947308599114cb4e632b166c4daf7c9c7adce308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91cea32112e5241045daf4e947308599114cb4e632b166c4daf7c9c7adce308->enter($__internal_c91cea32112e5241045daf4e947308599114cb4e632b166c4daf7c9c7adce308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9c8abb46184b85b8643d745cb6bde2e065679ec768eaa11c0cffb7f3e90df03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c8abb46184b85b8643d745cb6bde2e065679ec768eaa11c0cffb7f3e90df03->enter($__internal_d9c8abb46184b85b8643d745cb6bde2e065679ec768eaa11c0cffb7f3e90df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Metges";
        
        $__internal_d9c8abb46184b85b8643d745cb6bde2e065679ec768eaa11c0cffb7f3e90df03->leave($__internal_d9c8abb46184b85b8643d745cb6bde2e065679ec768eaa11c0cffb7f3e90df03_prof);

        
        $__internal_c91cea32112e5241045daf4e947308599114cb4e632b166c4daf7c9c7adce308->leave($__internal_c91cea32112e5241045daf4e947308599114cb4e632b166c4daf7c9c7adce308_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e68e3b2cb4abf92c85e83292b9e611bddf8e598a21a02622abf77e978bcb1d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68e3b2cb4abf92c85e83292b9e611bddf8e598a21a02622abf77e978bcb1d93->enter($__internal_e68e3b2cb4abf92c85e83292b9e611bddf8e598a21a02622abf77e978bcb1d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_284ab87fecf23c8f3460d85760b34e3426219943a94159b10ec2ab1374016f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284ab87fecf23c8f3460d85760b34e3426219943a94159b10ec2ab1374016f5c->enter($__internal_284ab87fecf23c8f3460d85760b34e3426219943a94159b10ec2ab1374016f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Metges"]) ? $context["Metges"] : $this->getContext($context, "Metges")));
        foreach ($context['_seq'] as $context["_key"] => $context["metge"]) {
            // line 14
            echo "            <tr>
                <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "dni", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "cognom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["metge"], "especialitat", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
        
        $__internal_284ab87fecf23c8f3460d85760b34e3426219943a94159b10ec2ab1374016f5c->leave($__internal_284ab87fecf23c8f3460d85760b34e3426219943a94159b10ec2ab1374016f5c_prof);

        
        $__internal_e68e3b2cb4abf92c85e83292b9e611bddf8e598a21a02622abf77e978bcb1d93->leave($__internal_e68e3b2cb4abf92c85e83292b9e611bddf8e598a21a02622abf77e978bcb1d93_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/vmetges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"clinicaPaniBundle:Default:index.html.twig \" %}
{% block title %}Metges{% endblock %}
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
{% endblock %}", "@clinicaPani/Default/vmetges.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\vmetges.html.twig");
    }
}
