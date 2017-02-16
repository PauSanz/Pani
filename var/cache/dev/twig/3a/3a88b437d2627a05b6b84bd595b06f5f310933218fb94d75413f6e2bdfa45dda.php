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
        $__internal_77c1b612a40965402ccc63544fdc4d9083d796a6458096c5bccdc0f1a1d2b08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c1b612a40965402ccc63544fdc4d9083d796a6458096c5bccdc0f1a1d2b08b->enter($__internal_77c1b612a40965402ccc63544fdc4d9083d796a6458096c5bccdc0f1a1d2b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7afb05b0b924ed9241c5bed995e2dcd6c4175f24e0840aafb6dbc04101be5184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afb05b0b924ed9241c5bed995e2dcd6c4175f24e0840aafb6dbc04101be5184->enter($__internal_7afb05b0b924ed9241c5bed995e2dcd6c4175f24e0840aafb6dbc04101be5184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_77c1b612a40965402ccc63544fdc4d9083d796a6458096c5bccdc0f1a1d2b08b->leave($__internal_77c1b612a40965402ccc63544fdc4d9083d796a6458096c5bccdc0f1a1d2b08b_prof);

        
        $__internal_7afb05b0b924ed9241c5bed995e2dcd6c4175f24e0840aafb6dbc04101be5184->leave($__internal_7afb05b0b924ed9241c5bed995e2dcd6c4175f24e0840aafb6dbc04101be5184_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3d46401881b1bc417fc706e5bab5436e958671d18937fc3629138ed61f64060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d46401881b1bc417fc706e5bab5436e958671d18937fc3629138ed61f64060->enter($__internal_d3d46401881b1bc417fc706e5bab5436e958671d18937fc3629138ed61f64060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c675549e6ef85927e2fb6f77aa5f5493226bf336eb3d6a7d760fa96f19badedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c675549e6ef85927e2fb6f77aa5f5493226bf336eb3d6a7d760fa96f19badedf->enter($__internal_c675549e6ef85927e2fb6f77aa5f5493226bf336eb3d6a7d760fa96f19badedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c675549e6ef85927e2fb6f77aa5f5493226bf336eb3d6a7d760fa96f19badedf->leave($__internal_c675549e6ef85927e2fb6f77aa5f5493226bf336eb3d6a7d760fa96f19badedf_prof);

        
        $__internal_d3d46401881b1bc417fc706e5bab5436e958671d18937fc3629138ed61f64060->leave($__internal_d3d46401881b1bc417fc706e5bab5436e958671d18937fc3629138ed61f64060_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8d274cd7d5e5d995e0d6f6e5a2d6ab57c65a66f1abd72e18734b85848652edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d274cd7d5e5d995e0d6f6e5a2d6ab57c65a66f1abd72e18734b85848652edb->enter($__internal_d8d274cd7d5e5d995e0d6f6e5a2d6ab57c65a66f1abd72e18734b85848652edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e40e20bbd2878390b77e4c2bda4a507799be0acca59bc4d15258f7da1859ec2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40e20bbd2878390b77e4c2bda4a507799be0acca59bc4d15258f7da1859ec2b->enter($__internal_e40e20bbd2878390b77e4c2bda4a507799be0acca59bc4d15258f7da1859ec2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e40e20bbd2878390b77e4c2bda4a507799be0acca59bc4d15258f7da1859ec2b->leave($__internal_e40e20bbd2878390b77e4c2bda4a507799be0acca59bc4d15258f7da1859ec2b_prof);

        
        $__internal_d8d274cd7d5e5d995e0d6f6e5a2d6ab57c65a66f1abd72e18734b85848652edb->leave($__internal_d8d274cd7d5e5d995e0d6f6e5a2d6ab57c65a66f1abd72e18734b85848652edb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff71e3b139b621b47775862d2c97c2e89421ae4a9b8d630d372eff7b875017e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff71e3b139b621b47775862d2c97c2e89421ae4a9b8d630d372eff7b875017e->enter($__internal_1ff71e3b139b621b47775862d2c97c2e89421ae4a9b8d630d372eff7b875017e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f7cf6797436f746185512a3f51425acc183b5ecb3b7da53949759f47f36e3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7cf6797436f746185512a3f51425acc183b5ecb3b7da53949759f47f36e3b1->enter($__internal_3f7cf6797436f746185512a3f51425acc183b5ecb3b7da53949759f47f36e3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f7cf6797436f746185512a3f51425acc183b5ecb3b7da53949759f47f36e3b1->leave($__internal_3f7cf6797436f746185512a3f51425acc183b5ecb3b7da53949759f47f36e3b1_prof);

        
        $__internal_1ff71e3b139b621b47775862d2c97c2e89421ae4a9b8d630d372eff7b875017e->leave($__internal_1ff71e3b139b621b47775862d2c97c2e89421ae4a9b8d630d372eff7b875017e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7da815fe56f41d2641f45f9b644168a812037ecd1038910023d7c9bd245c6956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da815fe56f41d2641f45f9b644168a812037ecd1038910023d7c9bd245c6956->enter($__internal_7da815fe56f41d2641f45f9b644168a812037ecd1038910023d7c9bd245c6956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89d3125afefcf53789927f3fc760486fb27e6febda787a4642a5d1eda373f36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d3125afefcf53789927f3fc760486fb27e6febda787a4642a5d1eda373f36e->enter($__internal_89d3125afefcf53789927f3fc760486fb27e6febda787a4642a5d1eda373f36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89d3125afefcf53789927f3fc760486fb27e6febda787a4642a5d1eda373f36e->leave($__internal_89d3125afefcf53789927f3fc760486fb27e6febda787a4642a5d1eda373f36e_prof);

        
        $__internal_7da815fe56f41d2641f45f9b644168a812037ecd1038910023d7c9bd245c6956->leave($__internal_7da815fe56f41d2641f45f9b644168a812037ecd1038910023d7c9bd245c6956_prof);

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
