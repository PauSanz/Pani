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
        $__internal_c39dcd3ac15bebba823ae260f6781814d4e11a6fc3daddf061e7a3eb083fa40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39dcd3ac15bebba823ae260f6781814d4e11a6fc3daddf061e7a3eb083fa40a->enter($__internal_c39dcd3ac15bebba823ae260f6781814d4e11a6fc3daddf061e7a3eb083fa40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ff2fd01fc2792699d6352902c08f311244c7e1a1cf5cc0b876f5233b9e2691d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2fd01fc2792699d6352902c08f311244c7e1a1cf5cc0b876f5233b9e2691d6->enter($__internal_ff2fd01fc2792699d6352902c08f311244c7e1a1cf5cc0b876f5233b9e2691d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c39dcd3ac15bebba823ae260f6781814d4e11a6fc3daddf061e7a3eb083fa40a->leave($__internal_c39dcd3ac15bebba823ae260f6781814d4e11a6fc3daddf061e7a3eb083fa40a_prof);

        
        $__internal_ff2fd01fc2792699d6352902c08f311244c7e1a1cf5cc0b876f5233b9e2691d6->leave($__internal_ff2fd01fc2792699d6352902c08f311244c7e1a1cf5cc0b876f5233b9e2691d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdcf2b8dde1f328c6f0c12ece5f92b6405535a1207c37ed4f4f0e040cffa3020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcf2b8dde1f328c6f0c12ece5f92b6405535a1207c37ed4f4f0e040cffa3020->enter($__internal_cdcf2b8dde1f328c6f0c12ece5f92b6405535a1207c37ed4f4f0e040cffa3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8b5e017960c8b45cba0ba47f030297842d27db0dade73ced4e47ac6e6fff1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b5e017960c8b45cba0ba47f030297842d27db0dade73ced4e47ac6e6fff1cd->enter($__internal_e8b5e017960c8b45cba0ba47f030297842d27db0dade73ced4e47ac6e6fff1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8b5e017960c8b45cba0ba47f030297842d27db0dade73ced4e47ac6e6fff1cd->leave($__internal_e8b5e017960c8b45cba0ba47f030297842d27db0dade73ced4e47ac6e6fff1cd_prof);

        
        $__internal_cdcf2b8dde1f328c6f0c12ece5f92b6405535a1207c37ed4f4f0e040cffa3020->leave($__internal_cdcf2b8dde1f328c6f0c12ece5f92b6405535a1207c37ed4f4f0e040cffa3020_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7d83dc90ac997a74219283e4a90cd2c62b168df318f670bf2dc7ea1644cd8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d83dc90ac997a74219283e4a90cd2c62b168df318f670bf2dc7ea1644cd8d6->enter($__internal_e7d83dc90ac997a74219283e4a90cd2c62b168df318f670bf2dc7ea1644cd8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38c155aefb986fba298baea22e6b77e5f5d8061d2a636db4120bd117998b4af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c155aefb986fba298baea22e6b77e5f5d8061d2a636db4120bd117998b4af6->enter($__internal_38c155aefb986fba298baea22e6b77e5f5d8061d2a636db4120bd117998b4af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38c155aefb986fba298baea22e6b77e5f5d8061d2a636db4120bd117998b4af6->leave($__internal_38c155aefb986fba298baea22e6b77e5f5d8061d2a636db4120bd117998b4af6_prof);

        
        $__internal_e7d83dc90ac997a74219283e4a90cd2c62b168df318f670bf2dc7ea1644cd8d6->leave($__internal_e7d83dc90ac997a74219283e4a90cd2c62b168df318f670bf2dc7ea1644cd8d6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_03fbab8929773fbe86c83111fc7ce04c3baadbf3dd5f7e4766c85eaf04beedc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fbab8929773fbe86c83111fc7ce04c3baadbf3dd5f7e4766c85eaf04beedc7->enter($__internal_03fbab8929773fbe86c83111fc7ce04c3baadbf3dd5f7e4766c85eaf04beedc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96c00611fa77f69bb149824c92615d0eefa22b802ad78a15dc2ec7ddb7256f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c00611fa77f69bb149824c92615d0eefa22b802ad78a15dc2ec7ddb7256f76->enter($__internal_96c00611fa77f69bb149824c92615d0eefa22b802ad78a15dc2ec7ddb7256f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96c00611fa77f69bb149824c92615d0eefa22b802ad78a15dc2ec7ddb7256f76->leave($__internal_96c00611fa77f69bb149824c92615d0eefa22b802ad78a15dc2ec7ddb7256f76_prof);

        
        $__internal_03fbab8929773fbe86c83111fc7ce04c3baadbf3dd5f7e4766c85eaf04beedc7->leave($__internal_03fbab8929773fbe86c83111fc7ce04c3baadbf3dd5f7e4766c85eaf04beedc7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4b7d6674aecdc8d6a0afe95d710515053d551a2deb6fc8143fc2ff4a4957e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b7d6674aecdc8d6a0afe95d710515053d551a2deb6fc8143fc2ff4a4957e01->enter($__internal_b4b7d6674aecdc8d6a0afe95d710515053d551a2deb6fc8143fc2ff4a4957e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6d71c29fb6d118e7769dcefa46cb97cd2e23d0db9b5fa4585fb541a6fa8d4349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d71c29fb6d118e7769dcefa46cb97cd2e23d0db9b5fa4585fb541a6fa8d4349->enter($__internal_6d71c29fb6d118e7769dcefa46cb97cd2e23d0db9b5fa4585fb541a6fa8d4349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d71c29fb6d118e7769dcefa46cb97cd2e23d0db9b5fa4585fb541a6fa8d4349->leave($__internal_6d71c29fb6d118e7769dcefa46cb97cd2e23d0db9b5fa4585fb541a6fa8d4349_prof);

        
        $__internal_b4b7d6674aecdc8d6a0afe95d710515053d551a2deb6fc8143fc2ff4a4957e01->leave($__internal_b4b7d6674aecdc8d6a0afe95d710515053d551a2deb6fc8143fc2ff4a4957e01_prof);

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
