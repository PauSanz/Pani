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
        $__internal_9b6c3684e5356cd1ec49eeceb277b4ca4bde724a612b99a3d955dee1d5f38ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6c3684e5356cd1ec49eeceb277b4ca4bde724a612b99a3d955dee1d5f38ec8->enter($__internal_9b6c3684e5356cd1ec49eeceb277b4ca4bde724a612b99a3d955dee1d5f38ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_63659c7d245e22d61d1d89b27a9ccb3164da07579beae892934eaca0e30dd2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63659c7d245e22d61d1d89b27a9ccb3164da07579beae892934eaca0e30dd2e0->enter($__internal_63659c7d245e22d61d1d89b27a9ccb3164da07579beae892934eaca0e30dd2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6c3684e5356cd1ec49eeceb277b4ca4bde724a612b99a3d955dee1d5f38ec8->leave($__internal_9b6c3684e5356cd1ec49eeceb277b4ca4bde724a612b99a3d955dee1d5f38ec8_prof);

        
        $__internal_63659c7d245e22d61d1d89b27a9ccb3164da07579beae892934eaca0e30dd2e0->leave($__internal_63659c7d245e22d61d1d89b27a9ccb3164da07579beae892934eaca0e30dd2e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc8e5310f1ff2f6883bdba39e5dd4f365facecfc334a42490ee308008c5e04c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8e5310f1ff2f6883bdba39e5dd4f365facecfc334a42490ee308008c5e04c3->enter($__internal_cc8e5310f1ff2f6883bdba39e5dd4f365facecfc334a42490ee308008c5e04c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e72600aa47f6b502725d7e52b3ed0da0921fe247604988180e8ab44934c90bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e72600aa47f6b502725d7e52b3ed0da0921fe247604988180e8ab44934c90bf->enter($__internal_2e72600aa47f6b502725d7e52b3ed0da0921fe247604988180e8ab44934c90bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e72600aa47f6b502725d7e52b3ed0da0921fe247604988180e8ab44934c90bf->leave($__internal_2e72600aa47f6b502725d7e52b3ed0da0921fe247604988180e8ab44934c90bf_prof);

        
        $__internal_cc8e5310f1ff2f6883bdba39e5dd4f365facecfc334a42490ee308008c5e04c3->leave($__internal_cc8e5310f1ff2f6883bdba39e5dd4f365facecfc334a42490ee308008c5e04c3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f380ebf3474633735c4fdedb5a7fb9cf7a6f42d9fb62fe0b933d35c6e0a67cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f380ebf3474633735c4fdedb5a7fb9cf7a6f42d9fb62fe0b933d35c6e0a67cb->enter($__internal_9f380ebf3474633735c4fdedb5a7fb9cf7a6f42d9fb62fe0b933d35c6e0a67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15d3db8d71d293bd3682d31257686874cf1f1ee92f297de9216769abcae645a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d3db8d71d293bd3682d31257686874cf1f1ee92f297de9216769abcae645a8->enter($__internal_15d3db8d71d293bd3682d31257686874cf1f1ee92f297de9216769abcae645a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_15d3db8d71d293bd3682d31257686874cf1f1ee92f297de9216769abcae645a8->leave($__internal_15d3db8d71d293bd3682d31257686874cf1f1ee92f297de9216769abcae645a8_prof);

        
        $__internal_9f380ebf3474633735c4fdedb5a7fb9cf7a6f42d9fb62fe0b933d35c6e0a67cb->leave($__internal_9f380ebf3474633735c4fdedb5a7fb9cf7a6f42d9fb62fe0b933d35c6e0a67cb_prof);

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
