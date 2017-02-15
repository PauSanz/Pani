<?php

/* ::base.html.twig */
class __TwigTemplate_aa068f60139572ba38c888cd19d2a7b936fa05b8d69f1ddd0141087ead89194d extends Twig_Template
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
        $__internal_92706026368a5f7a8bf85032bd93be7011a159e1f03cae24dc064d0971ce8660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92706026368a5f7a8bf85032bd93be7011a159e1f03cae24dc064d0971ce8660->enter($__internal_92706026368a5f7a8bf85032bd93be7011a159e1f03cae24dc064d0971ce8660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8fffd46e4c44f961037f2941ca2269b66b364f07e1637ef0a9f144ec32ab61ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fffd46e4c44f961037f2941ca2269b66b364f07e1637ef0a9f144ec32ab61ad->enter($__internal_8fffd46e4c44f961037f2941ca2269b66b364f07e1637ef0a9f144ec32ab61ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_92706026368a5f7a8bf85032bd93be7011a159e1f03cae24dc064d0971ce8660->leave($__internal_92706026368a5f7a8bf85032bd93be7011a159e1f03cae24dc064d0971ce8660_prof);

        
        $__internal_8fffd46e4c44f961037f2941ca2269b66b364f07e1637ef0a9f144ec32ab61ad->leave($__internal_8fffd46e4c44f961037f2941ca2269b66b364f07e1637ef0a9f144ec32ab61ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d18a2d9c4ff8d37c31ce08816767d88b7ec30856ad4e57bcacab19f7153605a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18a2d9c4ff8d37c31ce08816767d88b7ec30856ad4e57bcacab19f7153605a0->enter($__internal_d18a2d9c4ff8d37c31ce08816767d88b7ec30856ad4e57bcacab19f7153605a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8de28747361da15951f0ed74d1fda25015ed2e3d07a17a1ada4683688c0034ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de28747361da15951f0ed74d1fda25015ed2e3d07a17a1ada4683688c0034ea->enter($__internal_8de28747361da15951f0ed74d1fda25015ed2e3d07a17a1ada4683688c0034ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8de28747361da15951f0ed74d1fda25015ed2e3d07a17a1ada4683688c0034ea->leave($__internal_8de28747361da15951f0ed74d1fda25015ed2e3d07a17a1ada4683688c0034ea_prof);

        
        $__internal_d18a2d9c4ff8d37c31ce08816767d88b7ec30856ad4e57bcacab19f7153605a0->leave($__internal_d18a2d9c4ff8d37c31ce08816767d88b7ec30856ad4e57bcacab19f7153605a0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1bc9afc728f372e54a2cbce0dbe739a35cc6612d7eb94be648ba8b26b23f2054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc9afc728f372e54a2cbce0dbe739a35cc6612d7eb94be648ba8b26b23f2054->enter($__internal_1bc9afc728f372e54a2cbce0dbe739a35cc6612d7eb94be648ba8b26b23f2054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b3b8f5914c3ffae838730800db5f141ce9549923b88d8c0d25395da8055c645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b8f5914c3ffae838730800db5f141ce9549923b88d8c0d25395da8055c645c->enter($__internal_b3b8f5914c3ffae838730800db5f141ce9549923b88d8c0d25395da8055c645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b3b8f5914c3ffae838730800db5f141ce9549923b88d8c0d25395da8055c645c->leave($__internal_b3b8f5914c3ffae838730800db5f141ce9549923b88d8c0d25395da8055c645c_prof);

        
        $__internal_1bc9afc728f372e54a2cbce0dbe739a35cc6612d7eb94be648ba8b26b23f2054->leave($__internal_1bc9afc728f372e54a2cbce0dbe739a35cc6612d7eb94be648ba8b26b23f2054_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_debfacefdaadbcef88f50a22a393b2adecea4535f74fdcf6c867816245cbd427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debfacefdaadbcef88f50a22a393b2adecea4535f74fdcf6c867816245cbd427->enter($__internal_debfacefdaadbcef88f50a22a393b2adecea4535f74fdcf6c867816245cbd427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01ec9c52e9e6c3a0af731ee03381754d9ce4f05bd58b246ce382042ae7396c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ec9c52e9e6c3a0af731ee03381754d9ce4f05bd58b246ce382042ae7396c64->enter($__internal_01ec9c52e9e6c3a0af731ee03381754d9ce4f05bd58b246ce382042ae7396c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01ec9c52e9e6c3a0af731ee03381754d9ce4f05bd58b246ce382042ae7396c64->leave($__internal_01ec9c52e9e6c3a0af731ee03381754d9ce4f05bd58b246ce382042ae7396c64_prof);

        
        $__internal_debfacefdaadbcef88f50a22a393b2adecea4535f74fdcf6c867816245cbd427->leave($__internal_debfacefdaadbcef88f50a22a393b2adecea4535f74fdcf6c867816245cbd427_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3175996126f9629c9fba266e25cef5a3e92f30ebaa67d0ede34c29f4e46b0fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3175996126f9629c9fba266e25cef5a3e92f30ebaa67d0ede34c29f4e46b0fa5->enter($__internal_3175996126f9629c9fba266e25cef5a3e92f30ebaa67d0ede34c29f4e46b0fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1221bed52288c5df1284bff112e1625fa2515d5ea36b5d2c2cd573f9e9876dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1221bed52288c5df1284bff112e1625fa2515d5ea36b5d2c2cd573f9e9876dc7->enter($__internal_1221bed52288c5df1284bff112e1625fa2515d5ea36b5d2c2cd573f9e9876dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1221bed52288c5df1284bff112e1625fa2515d5ea36b5d2c2cd573f9e9876dc7->leave($__internal_1221bed52288c5df1284bff112e1625fa2515d5ea36b5d2c2cd573f9e9876dc7_prof);

        
        $__internal_3175996126f9629c9fba266e25cef5a3e92f30ebaa67d0ede34c29f4e46b0fa5->leave($__internal_3175996126f9629c9fba266e25cef5a3e92f30ebaa67d0ede34c29f4e46b0fa5_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\app/Resources\\views/base.html.twig");
    }
}
