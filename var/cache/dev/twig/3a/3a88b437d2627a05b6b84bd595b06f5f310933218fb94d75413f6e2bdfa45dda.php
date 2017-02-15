<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
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
        $__internal_c5f238ef6353ab636050d4b0bdc000c22a2129163f5a88e561791850fa5704d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f238ef6353ab636050d4b0bdc000c22a2129163f5a88e561791850fa5704d1->enter($__internal_c5f238ef6353ab636050d4b0bdc000c22a2129163f5a88e561791850fa5704d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_daccccc39076f5b2a78d821ae31c10dae0de91b99cff265d7e6db0780368b055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daccccc39076f5b2a78d821ae31c10dae0de91b99cff265d7e6db0780368b055->enter($__internal_daccccc39076f5b2a78d821ae31c10dae0de91b99cff265d7e6db0780368b055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c5f238ef6353ab636050d4b0bdc000c22a2129163f5a88e561791850fa5704d1->leave($__internal_c5f238ef6353ab636050d4b0bdc000c22a2129163f5a88e561791850fa5704d1_prof);

        
        $__internal_daccccc39076f5b2a78d821ae31c10dae0de91b99cff265d7e6db0780368b055->leave($__internal_daccccc39076f5b2a78d821ae31c10dae0de91b99cff265d7e6db0780368b055_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce5e9eb57d4fae9ab128edb522c6135c0128c83afbc8ed6147a9af2efdd16fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5e9eb57d4fae9ab128edb522c6135c0128c83afbc8ed6147a9af2efdd16fe2->enter($__internal_ce5e9eb57d4fae9ab128edb522c6135c0128c83afbc8ed6147a9af2efdd16fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03568abcafbb38ef38d0b73f96e0f8cdf40f2c726f40a7bc8f5f6d8a5b40defb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03568abcafbb38ef38d0b73f96e0f8cdf40f2c726f40a7bc8f5f6d8a5b40defb->enter($__internal_03568abcafbb38ef38d0b73f96e0f8cdf40f2c726f40a7bc8f5f6d8a5b40defb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03568abcafbb38ef38d0b73f96e0f8cdf40f2c726f40a7bc8f5f6d8a5b40defb->leave($__internal_03568abcafbb38ef38d0b73f96e0f8cdf40f2c726f40a7bc8f5f6d8a5b40defb_prof);

        
        $__internal_ce5e9eb57d4fae9ab128edb522c6135c0128c83afbc8ed6147a9af2efdd16fe2->leave($__internal_ce5e9eb57d4fae9ab128edb522c6135c0128c83afbc8ed6147a9af2efdd16fe2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf6fc7d53a89a6598987d7ace76790f19519d6a9f2b5992d1b4c27682ac8308c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6fc7d53a89a6598987d7ace76790f19519d6a9f2b5992d1b4c27682ac8308c->enter($__internal_bf6fc7d53a89a6598987d7ace76790f19519d6a9f2b5992d1b4c27682ac8308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b9003b7c3a320c82987c3cb14f165ba7509793c9df4e09b0d054b0c10deb1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9003b7c3a320c82987c3cb14f165ba7509793c9df4e09b0d054b0c10deb1f5->enter($__internal_5b9003b7c3a320c82987c3cb14f165ba7509793c9df4e09b0d054b0c10deb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b9003b7c3a320c82987c3cb14f165ba7509793c9df4e09b0d054b0c10deb1f5->leave($__internal_5b9003b7c3a320c82987c3cb14f165ba7509793c9df4e09b0d054b0c10deb1f5_prof);

        
        $__internal_bf6fc7d53a89a6598987d7ace76790f19519d6a9f2b5992d1b4c27682ac8308c->leave($__internal_bf6fc7d53a89a6598987d7ace76790f19519d6a9f2b5992d1b4c27682ac8308c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc84c857f979f761091bcf87301f168c4c3f42427fff50ad5a95e2426ac87fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc84c857f979f761091bcf87301f168c4c3f42427fff50ad5a95e2426ac87fa->enter($__internal_8cc84c857f979f761091bcf87301f168c4c3f42427fff50ad5a95e2426ac87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ece4c9964e53fa7e759aab83de477eb4bee4fa4cf65421145825d350b1d7bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ece4c9964e53fa7e759aab83de477eb4bee4fa4cf65421145825d350b1d7bc9->enter($__internal_3ece4c9964e53fa7e759aab83de477eb4bee4fa4cf65421145825d350b1d7bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ece4c9964e53fa7e759aab83de477eb4bee4fa4cf65421145825d350b1d7bc9->leave($__internal_3ece4c9964e53fa7e759aab83de477eb4bee4fa4cf65421145825d350b1d7bc9_prof);

        
        $__internal_8cc84c857f979f761091bcf87301f168c4c3f42427fff50ad5a95e2426ac87fa->leave($__internal_8cc84c857f979f761091bcf87301f168c4c3f42427fff50ad5a95e2426ac87fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_852bec22bcef0a1ce36525f902016607a67fec62a43c8ece17954805dd8956f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852bec22bcef0a1ce36525f902016607a67fec62a43c8ece17954805dd8956f4->enter($__internal_852bec22bcef0a1ce36525f902016607a67fec62a43c8ece17954805dd8956f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_faa88ec475c564b12dd632009fc3ff33f29f597ebac3233593f4f93cbd1fee8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa88ec475c564b12dd632009fc3ff33f29f597ebac3233593f4f93cbd1fee8a->enter($__internal_faa88ec475c564b12dd632009fc3ff33f29f597ebac3233593f4f93cbd1fee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_faa88ec475c564b12dd632009fc3ff33f29f597ebac3233593f4f93cbd1fee8a->leave($__internal_faa88ec475c564b12dd632009fc3ff33f29f597ebac3233593f4f93cbd1fee8a_prof);

        
        $__internal_852bec22bcef0a1ce36525f902016607a67fec62a43c8ece17954805dd8956f4->leave($__internal_852bec22bcef0a1ce36525f902016607a67fec62a43c8ece17954805dd8956f4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\app\\Resources\\views\\base.html.twig");
    }
}
