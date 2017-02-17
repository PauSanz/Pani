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
        $__internal_abd203edc6773091a9e1c5cdabe36844814a019aef57f60358b7147d3fe46e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd203edc6773091a9e1c5cdabe36844814a019aef57f60358b7147d3fe46e94->enter($__internal_abd203edc6773091a9e1c5cdabe36844814a019aef57f60358b7147d3fe46e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5b531225863cc5c55248087e1c62ab11098d560e4c80af3e754444a312676512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b531225863cc5c55248087e1c62ab11098d560e4c80af3e754444a312676512->enter($__internal_5b531225863cc5c55248087e1c62ab11098d560e4c80af3e754444a312676512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_abd203edc6773091a9e1c5cdabe36844814a019aef57f60358b7147d3fe46e94->leave($__internal_abd203edc6773091a9e1c5cdabe36844814a019aef57f60358b7147d3fe46e94_prof);

        
        $__internal_5b531225863cc5c55248087e1c62ab11098d560e4c80af3e754444a312676512->leave($__internal_5b531225863cc5c55248087e1c62ab11098d560e4c80af3e754444a312676512_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56b9da9fdd42f443233d36ff3058e68ccf3bb3f808a70023d4b64c5e44ef8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56b9da9fdd42f443233d36ff3058e68ccf3bb3f808a70023d4b64c5e44ef8b0->enter($__internal_d56b9da9fdd42f443233d36ff3058e68ccf3bb3f808a70023d4b64c5e44ef8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0cd3681a2e98bf23279b68b9def220c58a38fc88603d728870323c382dac94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cd3681a2e98bf23279b68b9def220c58a38fc88603d728870323c382dac94a->enter($__internal_e0cd3681a2e98bf23279b68b9def220c58a38fc88603d728870323c382dac94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e0cd3681a2e98bf23279b68b9def220c58a38fc88603d728870323c382dac94a->leave($__internal_e0cd3681a2e98bf23279b68b9def220c58a38fc88603d728870323c382dac94a_prof);

        
        $__internal_d56b9da9fdd42f443233d36ff3058e68ccf3bb3f808a70023d4b64c5e44ef8b0->leave($__internal_d56b9da9fdd42f443233d36ff3058e68ccf3bb3f808a70023d4b64c5e44ef8b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc0ff2498cd8ac17bd28e9a7020e98c44f802f3fb0d442d340a4684272af6a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0ff2498cd8ac17bd28e9a7020e98c44f802f3fb0d442d340a4684272af6a25->enter($__internal_bc0ff2498cd8ac17bd28e9a7020e98c44f802f3fb0d442d340a4684272af6a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8816efbb3fc6cf633b71727cc4abe5a6d0da04924b8ee99b2f9017481276a176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8816efbb3fc6cf633b71727cc4abe5a6d0da04924b8ee99b2f9017481276a176->enter($__internal_8816efbb3fc6cf633b71727cc4abe5a6d0da04924b8ee99b2f9017481276a176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8816efbb3fc6cf633b71727cc4abe5a6d0da04924b8ee99b2f9017481276a176->leave($__internal_8816efbb3fc6cf633b71727cc4abe5a6d0da04924b8ee99b2f9017481276a176_prof);

        
        $__internal_bc0ff2498cd8ac17bd28e9a7020e98c44f802f3fb0d442d340a4684272af6a25->leave($__internal_bc0ff2498cd8ac17bd28e9a7020e98c44f802f3fb0d442d340a4684272af6a25_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5a2f51dbc4e4a0f7e97c4a938f589dc1d0d87f47c810dda9bd79b2e4d94426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a2f51dbc4e4a0f7e97c4a938f589dc1d0d87f47c810dda9bd79b2e4d94426a->enter($__internal_d5a2f51dbc4e4a0f7e97c4a938f589dc1d0d87f47c810dda9bd79b2e4d94426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18b04238f4769421c46b5d27c77416e916c07e06982dae8b1db0b817ff808720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b04238f4769421c46b5d27c77416e916c07e06982dae8b1db0b817ff808720->enter($__internal_18b04238f4769421c46b5d27c77416e916c07e06982dae8b1db0b817ff808720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18b04238f4769421c46b5d27c77416e916c07e06982dae8b1db0b817ff808720->leave($__internal_18b04238f4769421c46b5d27c77416e916c07e06982dae8b1db0b817ff808720_prof);

        
        $__internal_d5a2f51dbc4e4a0f7e97c4a938f589dc1d0d87f47c810dda9bd79b2e4d94426a->leave($__internal_d5a2f51dbc4e4a0f7e97c4a938f589dc1d0d87f47c810dda9bd79b2e4d94426a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6af5dfeef0fa2cf3873fc69843f56f2c6a3a01fcfc738595e9feede4fc7e19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6af5dfeef0fa2cf3873fc69843f56f2c6a3a01fcfc738595e9feede4fc7e19a->enter($__internal_f6af5dfeef0fa2cf3873fc69843f56f2c6a3a01fcfc738595e9feede4fc7e19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95b789bb453794b3f9bc6b95e44cee25550dbad1add6766bab030f25757d1040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b789bb453794b3f9bc6b95e44cee25550dbad1add6766bab030f25757d1040->enter($__internal_95b789bb453794b3f9bc6b95e44cee25550dbad1add6766bab030f25757d1040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95b789bb453794b3f9bc6b95e44cee25550dbad1add6766bab030f25757d1040->leave($__internal_95b789bb453794b3f9bc6b95e44cee25550dbad1add6766bab030f25757d1040_prof);

        
        $__internal_f6af5dfeef0fa2cf3873fc69843f56f2c6a3a01fcfc738595e9feede4fc7e19a->leave($__internal_f6af5dfeef0fa2cf3873fc69843f56f2c6a3a01fcfc738595e9feede4fc7e19a_prof);

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
