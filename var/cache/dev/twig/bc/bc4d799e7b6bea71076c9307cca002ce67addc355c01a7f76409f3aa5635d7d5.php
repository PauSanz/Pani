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
        $__internal_a175fe09ef9d6ba2e5bd494d55e9048be016e1d79c9838406bf880e014382a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a175fe09ef9d6ba2e5bd494d55e9048be016e1d79c9838406bf880e014382a37->enter($__internal_a175fe09ef9d6ba2e5bd494d55e9048be016e1d79c9838406bf880e014382a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bc4aaa742887da21673b323c0943089e954759969eccad8fb7cb4ebc5727d1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4aaa742887da21673b323c0943089e954759969eccad8fb7cb4ebc5727d1b6->enter($__internal_bc4aaa742887da21673b323c0943089e954759969eccad8fb7cb4ebc5727d1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a175fe09ef9d6ba2e5bd494d55e9048be016e1d79c9838406bf880e014382a37->leave($__internal_a175fe09ef9d6ba2e5bd494d55e9048be016e1d79c9838406bf880e014382a37_prof);

        
        $__internal_bc4aaa742887da21673b323c0943089e954759969eccad8fb7cb4ebc5727d1b6->leave($__internal_bc4aaa742887da21673b323c0943089e954759969eccad8fb7cb4ebc5727d1b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6638b883ddfdc62519112c1c3f7e5181a2a54190c9225fa492dbf9805937679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6638b883ddfdc62519112c1c3f7e5181a2a54190c9225fa492dbf9805937679->enter($__internal_c6638b883ddfdc62519112c1c3f7e5181a2a54190c9225fa492dbf9805937679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_700ae80c6870a27ac5ee602246a78757217ea9d6533285a7b2adc7254ac01a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700ae80c6870a27ac5ee602246a78757217ea9d6533285a7b2adc7254ac01a8d->enter($__internal_700ae80c6870a27ac5ee602246a78757217ea9d6533285a7b2adc7254ac01a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_700ae80c6870a27ac5ee602246a78757217ea9d6533285a7b2adc7254ac01a8d->leave($__internal_700ae80c6870a27ac5ee602246a78757217ea9d6533285a7b2adc7254ac01a8d_prof);

        
        $__internal_c6638b883ddfdc62519112c1c3f7e5181a2a54190c9225fa492dbf9805937679->leave($__internal_c6638b883ddfdc62519112c1c3f7e5181a2a54190c9225fa492dbf9805937679_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c30f6b944e49abb9e1ae0136328e66bbaad6146a94a275c10565bd3d3847125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c30f6b944e49abb9e1ae0136328e66bbaad6146a94a275c10565bd3d3847125->enter($__internal_6c30f6b944e49abb9e1ae0136328e66bbaad6146a94a275c10565bd3d3847125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_65b5ab2f112763be06b2fe0a281d8c999e4f9aef8f391ffd2206a19771365a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b5ab2f112763be06b2fe0a281d8c999e4f9aef8f391ffd2206a19771365a68->enter($__internal_65b5ab2f112763be06b2fe0a281d8c999e4f9aef8f391ffd2206a19771365a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65b5ab2f112763be06b2fe0a281d8c999e4f9aef8f391ffd2206a19771365a68->leave($__internal_65b5ab2f112763be06b2fe0a281d8c999e4f9aef8f391ffd2206a19771365a68_prof);

        
        $__internal_6c30f6b944e49abb9e1ae0136328e66bbaad6146a94a275c10565bd3d3847125->leave($__internal_6c30f6b944e49abb9e1ae0136328e66bbaad6146a94a275c10565bd3d3847125_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79cb8a0ba4a7874d04c2830125f3e0ec406c6ec9ec04c160066df28ae7b0f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cb8a0ba4a7874d04c2830125f3e0ec406c6ec9ec04c160066df28ae7b0f4ec->enter($__internal_79cb8a0ba4a7874d04c2830125f3e0ec406c6ec9ec04c160066df28ae7b0f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91cfc6752d4c8a5b09c5a8f3a9bd343607531a142ded234b34aabeade23bbb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cfc6752d4c8a5b09c5a8f3a9bd343607531a142ded234b34aabeade23bbb49->enter($__internal_91cfc6752d4c8a5b09c5a8f3a9bd343607531a142ded234b34aabeade23bbb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91cfc6752d4c8a5b09c5a8f3a9bd343607531a142ded234b34aabeade23bbb49->leave($__internal_91cfc6752d4c8a5b09c5a8f3a9bd343607531a142ded234b34aabeade23bbb49_prof);

        
        $__internal_79cb8a0ba4a7874d04c2830125f3e0ec406c6ec9ec04c160066df28ae7b0f4ec->leave($__internal_79cb8a0ba4a7874d04c2830125f3e0ec406c6ec9ec04c160066df28ae7b0f4ec_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc7c92ea2e6d0b8750b72fbae84dcf2318bb00051cedfa68a7b297c6ebe81b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7c92ea2e6d0b8750b72fbae84dcf2318bb00051cedfa68a7b297c6ebe81b7e->enter($__internal_fc7c92ea2e6d0b8750b72fbae84dcf2318bb00051cedfa68a7b297c6ebe81b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7617fe66368382be9a68df1d1e9559a94110c7044fa05234125168064e78ac06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7617fe66368382be9a68df1d1e9559a94110c7044fa05234125168064e78ac06->enter($__internal_7617fe66368382be9a68df1d1e9559a94110c7044fa05234125168064e78ac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7617fe66368382be9a68df1d1e9559a94110c7044fa05234125168064e78ac06->leave($__internal_7617fe66368382be9a68df1d1e9559a94110c7044fa05234125168064e78ac06_prof);

        
        $__internal_fc7c92ea2e6d0b8750b72fbae84dcf2318bb00051cedfa68a7b297c6ebe81b7e->leave($__internal_fc7c92ea2e6d0b8750b72fbae84dcf2318bb00051cedfa68a7b297c6ebe81b7e_prof);

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
