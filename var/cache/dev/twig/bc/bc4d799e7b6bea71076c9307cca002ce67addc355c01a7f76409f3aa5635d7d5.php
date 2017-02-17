<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_257b14790c747d90e240c6a771a2345bb35b9286658e7d778be6dd8f77c1a7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257b14790c747d90e240c6a771a2345bb35b9286658e7d778be6dd8f77c1a7f2->enter($__internal_257b14790c747d90e240c6a771a2345bb35b9286658e7d778be6dd8f77c1a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d038dea9eb48be75ad28a98cf5cb3a5fd8ffeb26a35d47f6dc5407e602496ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d038dea9eb48be75ad28a98cf5cb3a5fd8ffeb26a35d47f6dc5407e602496ac5->enter($__internal_d038dea9eb48be75ad28a98cf5cb3a5fd8ffeb26a35d47f6dc5407e602496ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_257b14790c747d90e240c6a771a2345bb35b9286658e7d778be6dd8f77c1a7f2->leave($__internal_257b14790c747d90e240c6a771a2345bb35b9286658e7d778be6dd8f77c1a7f2_prof);

        
        $__internal_d038dea9eb48be75ad28a98cf5cb3a5fd8ffeb26a35d47f6dc5407e602496ac5->leave($__internal_d038dea9eb48be75ad28a98cf5cb3a5fd8ffeb26a35d47f6dc5407e602496ac5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37c871b944a1278075bc2a47f7e6ec7452f3f400edcb3fb7e28db7441efc961b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c871b944a1278075bc2a47f7e6ec7452f3f400edcb3fb7e28db7441efc961b->enter($__internal_37c871b944a1278075bc2a47f7e6ec7452f3f400edcb3fb7e28db7441efc961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14629d396655651ad187045ba7ff155241511578970f6d42c92a2e29027a83ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14629d396655651ad187045ba7ff155241511578970f6d42c92a2e29027a83ec->enter($__internal_14629d396655651ad187045ba7ff155241511578970f6d42c92a2e29027a83ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14629d396655651ad187045ba7ff155241511578970f6d42c92a2e29027a83ec->leave($__internal_14629d396655651ad187045ba7ff155241511578970f6d42c92a2e29027a83ec_prof);

        
        $__internal_37c871b944a1278075bc2a47f7e6ec7452f3f400edcb3fb7e28db7441efc961b->leave($__internal_37c871b944a1278075bc2a47f7e6ec7452f3f400edcb3fb7e28db7441efc961b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2038259d2bc9fbb012d514370b653300cb4ea81675d51fa397c09bff9e2eb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2038259d2bc9fbb012d514370b653300cb4ea81675d51fa397c09bff9e2eb32->enter($__internal_c2038259d2bc9fbb012d514370b653300cb4ea81675d51fa397c09bff9e2eb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75627d8211b07db48f739ee587473d07a23574909b1c7763b27243c406c5660f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75627d8211b07db48f739ee587473d07a23574909b1c7763b27243c406c5660f->enter($__internal_75627d8211b07db48f739ee587473d07a23574909b1c7763b27243c406c5660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75627d8211b07db48f739ee587473d07a23574909b1c7763b27243c406c5660f->leave($__internal_75627d8211b07db48f739ee587473d07a23574909b1c7763b27243c406c5660f_prof);

        
        $__internal_c2038259d2bc9fbb012d514370b653300cb4ea81675d51fa397c09bff9e2eb32->leave($__internal_c2038259d2bc9fbb012d514370b653300cb4ea81675d51fa397c09bff9e2eb32_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9255a839d22277650a34707a8b350ff991aedd08355ee866b2ff84865821c38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9255a839d22277650a34707a8b350ff991aedd08355ee866b2ff84865821c38f->enter($__internal_9255a839d22277650a34707a8b350ff991aedd08355ee866b2ff84865821c38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2b618755161d44cc44a60d33282576d8cae201ff3433396b4cbc00e402b1105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b618755161d44cc44a60d33282576d8cae201ff3433396b4cbc00e402b1105->enter($__internal_e2b618755161d44cc44a60d33282576d8cae201ff3433396b4cbc00e402b1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2b618755161d44cc44a60d33282576d8cae201ff3433396b4cbc00e402b1105->leave($__internal_e2b618755161d44cc44a60d33282576d8cae201ff3433396b4cbc00e402b1105_prof);

        
        $__internal_9255a839d22277650a34707a8b350ff991aedd08355ee866b2ff84865821c38f->leave($__internal_9255a839d22277650a34707a8b350ff991aedd08355ee866b2ff84865821c38f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93daf70f76f50e53e3b97249a5406a41d509f0f540f6ea0759e1902f579947bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93daf70f76f50e53e3b97249a5406a41d509f0f540f6ea0759e1902f579947bc->enter($__internal_93daf70f76f50e53e3b97249a5406a41d509f0f540f6ea0759e1902f579947bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eabed780656ed6cf9d24b4d9c148ffe8598e20595696065510f553cdc6da0c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabed780656ed6cf9d24b4d9c148ffe8598e20595696065510f553cdc6da0c9f->enter($__internal_eabed780656ed6cf9d24b4d9c148ffe8598e20595696065510f553cdc6da0c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eabed780656ed6cf9d24b4d9c148ffe8598e20595696065510f553cdc6da0c9f->leave($__internal_eabed780656ed6cf9d24b4d9c148ffe8598e20595696065510f553cdc6da0c9f_prof);

        
        $__internal_93daf70f76f50e53e3b97249a5406a41d509f0f540f6ea0759e1902f579947bc->leave($__internal_93daf70f76f50e53e3b97249a5406a41d509f0f540f6ea0759e1902f579947bc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\Pani-final\\app/Resources\\views/base.html.twig");
    }
}
