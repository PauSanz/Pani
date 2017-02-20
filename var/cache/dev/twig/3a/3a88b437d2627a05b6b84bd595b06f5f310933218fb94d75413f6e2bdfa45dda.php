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
        $__internal_05d2517fc99cf57357802c73ebee7625f79ecdbb1333835b2e06065ae0407a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d2517fc99cf57357802c73ebee7625f79ecdbb1333835b2e06065ae0407a81->enter($__internal_05d2517fc99cf57357802c73ebee7625f79ecdbb1333835b2e06065ae0407a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53747605a56f6a90bac83e7ad2128dda73e11213da2444d644625c146db72c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53747605a56f6a90bac83e7ad2128dda73e11213da2444d644625c146db72c9c->enter($__internal_53747605a56f6a90bac83e7ad2128dda73e11213da2444d644625c146db72c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_05d2517fc99cf57357802c73ebee7625f79ecdbb1333835b2e06065ae0407a81->leave($__internal_05d2517fc99cf57357802c73ebee7625f79ecdbb1333835b2e06065ae0407a81_prof);

        
        $__internal_53747605a56f6a90bac83e7ad2128dda73e11213da2444d644625c146db72c9c->leave($__internal_53747605a56f6a90bac83e7ad2128dda73e11213da2444d644625c146db72c9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bf1ce250d9eeab8248a78ade958626557148f72bdafe43363a62b741185717c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf1ce250d9eeab8248a78ade958626557148f72bdafe43363a62b741185717c->enter($__internal_3bf1ce250d9eeab8248a78ade958626557148f72bdafe43363a62b741185717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32198dfed25f285a40b877ad4d3f16b5fcb0e8031f3a1c181ca9eb5f77d36899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32198dfed25f285a40b877ad4d3f16b5fcb0e8031f3a1c181ca9eb5f77d36899->enter($__internal_32198dfed25f285a40b877ad4d3f16b5fcb0e8031f3a1c181ca9eb5f77d36899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_32198dfed25f285a40b877ad4d3f16b5fcb0e8031f3a1c181ca9eb5f77d36899->leave($__internal_32198dfed25f285a40b877ad4d3f16b5fcb0e8031f3a1c181ca9eb5f77d36899_prof);

        
        $__internal_3bf1ce250d9eeab8248a78ade958626557148f72bdafe43363a62b741185717c->leave($__internal_3bf1ce250d9eeab8248a78ade958626557148f72bdafe43363a62b741185717c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b734a62d0b2a9f7862ed6e13a5ce8a5a84023caf5392a2e93d2cbd6ae36556d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b734a62d0b2a9f7862ed6e13a5ce8a5a84023caf5392a2e93d2cbd6ae36556d->enter($__internal_9b734a62d0b2a9f7862ed6e13a5ce8a5a84023caf5392a2e93d2cbd6ae36556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73db8e183e4651e423d9eae856a664c60b1300c69b4bc8c2b918700a8a84a4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73db8e183e4651e423d9eae856a664c60b1300c69b4bc8c2b918700a8a84a4ac->enter($__internal_73db8e183e4651e423d9eae856a664c60b1300c69b4bc8c2b918700a8a84a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73db8e183e4651e423d9eae856a664c60b1300c69b4bc8c2b918700a8a84a4ac->leave($__internal_73db8e183e4651e423d9eae856a664c60b1300c69b4bc8c2b918700a8a84a4ac_prof);

        
        $__internal_9b734a62d0b2a9f7862ed6e13a5ce8a5a84023caf5392a2e93d2cbd6ae36556d->leave($__internal_9b734a62d0b2a9f7862ed6e13a5ce8a5a84023caf5392a2e93d2cbd6ae36556d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_868c2ea20c315121792208654e76d11b01a8b16585d1a4a6a74228fec0d55007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868c2ea20c315121792208654e76d11b01a8b16585d1a4a6a74228fec0d55007->enter($__internal_868c2ea20c315121792208654e76d11b01a8b16585d1a4a6a74228fec0d55007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e960fb7952071bda87c14bc56c2e7ea7e7f7d3ed60bae9a8bdb6cf05be7ca7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e960fb7952071bda87c14bc56c2e7ea7e7f7d3ed60bae9a8bdb6cf05be7ca7ed->enter($__internal_e960fb7952071bda87c14bc56c2e7ea7e7f7d3ed60bae9a8bdb6cf05be7ca7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e960fb7952071bda87c14bc56c2e7ea7e7f7d3ed60bae9a8bdb6cf05be7ca7ed->leave($__internal_e960fb7952071bda87c14bc56c2e7ea7e7f7d3ed60bae9a8bdb6cf05be7ca7ed_prof);

        
        $__internal_868c2ea20c315121792208654e76d11b01a8b16585d1a4a6a74228fec0d55007->leave($__internal_868c2ea20c315121792208654e76d11b01a8b16585d1a4a6a74228fec0d55007_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81af0684581dd29aef40dbf24e81213ffed65e74a2cd35f2eaf57bcea00f2cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81af0684581dd29aef40dbf24e81213ffed65e74a2cd35f2eaf57bcea00f2cf1->enter($__internal_81af0684581dd29aef40dbf24e81213ffed65e74a2cd35f2eaf57bcea00f2cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_679995839f9ffb82e3043ba424262e0544cd1a5c0016834fd2edf285c3a90001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679995839f9ffb82e3043ba424262e0544cd1a5c0016834fd2edf285c3a90001->enter($__internal_679995839f9ffb82e3043ba424262e0544cd1a5c0016834fd2edf285c3a90001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_679995839f9ffb82e3043ba424262e0544cd1a5c0016834fd2edf285c3a90001->leave($__internal_679995839f9ffb82e3043ba424262e0544cd1a5c0016834fd2edf285c3a90001_prof);

        
        $__internal_81af0684581dd29aef40dbf24e81213ffed65e74a2cd35f2eaf57bcea00f2cf1->leave($__internal_81af0684581dd29aef40dbf24e81213ffed65e74a2cd35f2eaf57bcea00f2cf1_prof);

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
