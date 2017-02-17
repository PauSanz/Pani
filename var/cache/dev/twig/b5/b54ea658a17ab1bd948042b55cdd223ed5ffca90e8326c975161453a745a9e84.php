<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5f40736bf8191373bcae91d8ced9c0bde76cd8c067731c9662de141e0e1871de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2776aed9a92a765c9999220bf77d0ac8656c81a62c4a14479a7121c3d93c454b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2776aed9a92a765c9999220bf77d0ac8656c81a62c4a14479a7121c3d93c454b->enter($__internal_2776aed9a92a765c9999220bf77d0ac8656c81a62c4a14479a7121c3d93c454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d40d50727ee049a443678f7eb97dfc76bb5186615fa95fbefa289ccb422d9b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40d50727ee049a443678f7eb97dfc76bb5186615fa95fbefa289ccb422d9b28->enter($__internal_d40d50727ee049a443678f7eb97dfc76bb5186615fa95fbefa289ccb422d9b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2776aed9a92a765c9999220bf77d0ac8656c81a62c4a14479a7121c3d93c454b->leave($__internal_2776aed9a92a765c9999220bf77d0ac8656c81a62c4a14479a7121c3d93c454b_prof);

        
        $__internal_d40d50727ee049a443678f7eb97dfc76bb5186615fa95fbefa289ccb422d9b28->leave($__internal_d40d50727ee049a443678f7eb97dfc76bb5186615fa95fbefa289ccb422d9b28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eae3f6072c66f2d24a512e0d78d046f3b5cd9f6d5e543517ae96873ceba41ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eae3f6072c66f2d24a512e0d78d046f3b5cd9f6d5e543517ae96873ceba41ca->enter($__internal_7eae3f6072c66f2d24a512e0d78d046f3b5cd9f6d5e543517ae96873ceba41ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6f15044d12892af9a95eee32186bf0cb308c65a37f803ef8cb00822b4d763e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f15044d12892af9a95eee32186bf0cb308c65a37f803ef8cb00822b4d763e0->enter($__internal_d6f15044d12892af9a95eee32186bf0cb308c65a37f803ef8cb00822b4d763e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6f15044d12892af9a95eee32186bf0cb308c65a37f803ef8cb00822b4d763e0->leave($__internal_d6f15044d12892af9a95eee32186bf0cb308c65a37f803ef8cb00822b4d763e0_prof);

        
        $__internal_7eae3f6072c66f2d24a512e0d78d046f3b5cd9f6d5e543517ae96873ceba41ca->leave($__internal_7eae3f6072c66f2d24a512e0d78d046f3b5cd9f6d5e543517ae96873ceba41ca_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4114bcae6a54d432bf4a47fc3505d19dea2e268a2195a43ca78d4f77c5b3cf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4114bcae6a54d432bf4a47fc3505d19dea2e268a2195a43ca78d4f77c5b3cf08->enter($__internal_4114bcae6a54d432bf4a47fc3505d19dea2e268a2195a43ca78d4f77c5b3cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afbf3990e8577ceaf90d03ce1d8bd9c922f80f1a9d01225097188019e1a97c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbf3990e8577ceaf90d03ce1d8bd9c922f80f1a9d01225097188019e1a97c96->enter($__internal_afbf3990e8577ceaf90d03ce1d8bd9c922f80f1a9d01225097188019e1a97c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_afbf3990e8577ceaf90d03ce1d8bd9c922f80f1a9d01225097188019e1a97c96->leave($__internal_afbf3990e8577ceaf90d03ce1d8bd9c922f80f1a9d01225097188019e1a97c96_prof);

        
        $__internal_4114bcae6a54d432bf4a47fc3505d19dea2e268a2195a43ca78d4f77c5b3cf08->leave($__internal_4114bcae6a54d432bf4a47fc3505d19dea2e268a2195a43ca78d4f77c5b3cf08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
