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
        $__internal_00eca2554fb4a68651b52d722cecb31562b9617ff0f330bbf95a966e8b322f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00eca2554fb4a68651b52d722cecb31562b9617ff0f330bbf95a966e8b322f69->enter($__internal_00eca2554fb4a68651b52d722cecb31562b9617ff0f330bbf95a966e8b322f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ff3e88021a29646c86e42e1f8a85658b46fc16ee33920afc0a3b7e9508b0b3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3e88021a29646c86e42e1f8a85658b46fc16ee33920afc0a3b7e9508b0b3e5->enter($__internal_ff3e88021a29646c86e42e1f8a85658b46fc16ee33920afc0a3b7e9508b0b3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00eca2554fb4a68651b52d722cecb31562b9617ff0f330bbf95a966e8b322f69->leave($__internal_00eca2554fb4a68651b52d722cecb31562b9617ff0f330bbf95a966e8b322f69_prof);

        
        $__internal_ff3e88021a29646c86e42e1f8a85658b46fc16ee33920afc0a3b7e9508b0b3e5->leave($__internal_ff3e88021a29646c86e42e1f8a85658b46fc16ee33920afc0a3b7e9508b0b3e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1abf2b7c820fd74cc2b457e0f8bc3bf6f924d596a99f2a1e8e5589c977853a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abf2b7c820fd74cc2b457e0f8bc3bf6f924d596a99f2a1e8e5589c977853a05->enter($__internal_1abf2b7c820fd74cc2b457e0f8bc3bf6f924d596a99f2a1e8e5589c977853a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc174c2350caf6e7c08799b6a759764108892f83fd155a6537718cf0525bc2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc174c2350caf6e7c08799b6a759764108892f83fd155a6537718cf0525bc2bf->enter($__internal_fc174c2350caf6e7c08799b6a759764108892f83fd155a6537718cf0525bc2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fc174c2350caf6e7c08799b6a759764108892f83fd155a6537718cf0525bc2bf->leave($__internal_fc174c2350caf6e7c08799b6a759764108892f83fd155a6537718cf0525bc2bf_prof);

        
        $__internal_1abf2b7c820fd74cc2b457e0f8bc3bf6f924d596a99f2a1e8e5589c977853a05->leave($__internal_1abf2b7c820fd74cc2b457e0f8bc3bf6f924d596a99f2a1e8e5589c977853a05_prof);

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
