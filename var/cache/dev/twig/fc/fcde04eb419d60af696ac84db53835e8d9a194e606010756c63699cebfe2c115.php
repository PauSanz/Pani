<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ef9edb4d226bcfc71e9b36f6448e93a90de0d6690a02db843490c8107fd778e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f83727589a746e6ba3f9c9ec9f203aa2c9618bb751fccc6a1d7ceb0311a780d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f83727589a746e6ba3f9c9ec9f203aa2c9618bb751fccc6a1d7ceb0311a780d->enter($__internal_8f83727589a746e6ba3f9c9ec9f203aa2c9618bb751fccc6a1d7ceb0311a780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3ae0b3cb270b71c8b2fee49f450dd4e37425781e7a266027139fede4f2d14696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae0b3cb270b71c8b2fee49f450dd4e37425781e7a266027139fede4f2d14696->enter($__internal_3ae0b3cb270b71c8b2fee49f450dd4e37425781e7a266027139fede4f2d14696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f83727589a746e6ba3f9c9ec9f203aa2c9618bb751fccc6a1d7ceb0311a780d->leave($__internal_8f83727589a746e6ba3f9c9ec9f203aa2c9618bb751fccc6a1d7ceb0311a780d_prof);

        
        $__internal_3ae0b3cb270b71c8b2fee49f450dd4e37425781e7a266027139fede4f2d14696->leave($__internal_3ae0b3cb270b71c8b2fee49f450dd4e37425781e7a266027139fede4f2d14696_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c06f769da4f9626d7755a44df804f5a0d837c820428eee00b1dcd38535c1c59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06f769da4f9626d7755a44df804f5a0d837c820428eee00b1dcd38535c1c59a->enter($__internal_c06f769da4f9626d7755a44df804f5a0d837c820428eee00b1dcd38535c1c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d8391fba601f9b6153b2aca57d1d5355d81d217b6d2f8a5b4f4a6de4ac42dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8391fba601f9b6153b2aca57d1d5355d81d217b6d2f8a5b4f4a6de4ac42dfc->enter($__internal_1d8391fba601f9b6153b2aca57d1d5355d81d217b6d2f8a5b4f4a6de4ac42dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1d8391fba601f9b6153b2aca57d1d5355d81d217b6d2f8a5b4f4a6de4ac42dfc->leave($__internal_1d8391fba601f9b6153b2aca57d1d5355d81d217b6d2f8a5b4f4a6de4ac42dfc_prof);

        
        $__internal_c06f769da4f9626d7755a44df804f5a0d837c820428eee00b1dcd38535c1c59a->leave($__internal_c06f769da4f9626d7755a44df804f5a0d837c820428eee00b1dcd38535c1c59a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
