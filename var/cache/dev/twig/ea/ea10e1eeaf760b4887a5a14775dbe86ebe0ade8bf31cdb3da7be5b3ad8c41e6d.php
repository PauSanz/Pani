<?php

/* clinicaPaniBundle:Default:index.html.twig */
class __TwigTemplate_a55dc609c3b5a8716b385807ae9df53f8368258ea622896a3ff8e789c782fc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'navigation' => array($this, 'block_navigation'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e2af6d7319bd2114ee98e825622ace171ea941d154129dba169c90085931f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2af6d7319bd2114ee98e825622ace171ea941d154129dba169c90085931f81->enter($__internal_8e2af6d7319bd2114ee98e825622ace171ea941d154129dba169c90085931f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

        $__internal_308694cb27ae72fc29f8aff71e26a246499e1b4691303e6128a7b54f550f4628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308694cb27ae72fc29f8aff71e26a246499e1b4691303e6128a7b54f550f4628->enter($__internal_308694cb27ae72fc29f8aff71e26a246499e1b4691303e6128a7b54f550f4628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>

    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>

";
        
        $__internal_8e2af6d7319bd2114ee98e825622ace171ea941d154129dba169c90085931f81->leave($__internal_8e2af6d7319bd2114ee98e825622ace171ea941d154129dba169c90085931f81_prof);

        
        $__internal_308694cb27ae72fc29f8aff71e26a246499e1b4691303e6128a7b54f550f4628->leave($__internal_308694cb27ae72fc29f8aff71e26a246499e1b4691303e6128a7b54f550f4628_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ae86daf4bd6cea23739a90fb58f7a0355f2883c1d570f1ca0ad63ff797cc62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae86daf4bd6cea23739a90fb58f7a0355f2883c1d570f1ca0ad63ff797cc62f->enter($__internal_9ae86daf4bd6cea23739a90fb58f7a0355f2883c1d570f1ca0ad63ff797cc62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0759187eadab7d2d578c09ce8116cba530882b3a99e5cd7be4483c8c3089c607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0759187eadab7d2d578c09ce8116cba530882b3a99e5cd7be4483c8c3089c607->enter($__internal_0759187eadab7d2d578c09ce8116cba530882b3a99e5cd7be4483c8c3089c607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_0759187eadab7d2d578c09ce8116cba530882b3a99e5cd7be4483c8c3089c607->leave($__internal_0759187eadab7d2d578c09ce8116cba530882b3a99e5cd7be4483c8c3089c607_prof);

        
        $__internal_9ae86daf4bd6cea23739a90fb58f7a0355f2883c1d570f1ca0ad63ff797cc62f->leave($__internal_9ae86daf4bd6cea23739a90fb58f7a0355f2883c1d570f1ca0ad63ff797cc62f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b75222de55a7b12e55337749b813f5b54921e6abe7b93fa2e90a8fe6e48e555a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75222de55a7b12e55337749b813f5b54921e6abe7b93fa2e90a8fe6e48e555a->enter($__internal_b75222de55a7b12e55337749b813f5b54921e6abe7b93fa2e90a8fe6e48e555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfb9f1e5b00179d77d9614d828e0f544b3b77666c7c7dfaf16f843fbddb842a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb9f1e5b00179d77d9614d828e0f544b3b77666c7c7dfaf16f843fbddb842a8->enter($__internal_dfb9f1e5b00179d77d9614d828e0f544b3b77666c7c7dfaf16f843fbddb842a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/pani-home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
        
        $__internal_dfb9f1e5b00179d77d9614d828e0f544b3b77666c7c7dfaf16f843fbddb842a8->leave($__internal_dfb9f1e5b00179d77d9614d828e0f544b3b77666c7c7dfaf16f843fbddb842a8_prof);

        
        $__internal_b75222de55a7b12e55337749b813f5b54921e6abe7b93fa2e90a8fe6e48e555a->leave($__internal_b75222de55a7b12e55337749b813f5b54921e6abe7b93fa2e90a8fe6e48e555a_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ff9c1f3a4d4c2bfd3261e6edf8a19f92366a559194abaadd5f2a5c17f668438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ff9c1f3a4d4c2bfd3261e6edf8a19f92366a559194abaadd5f2a5c17f668438->enter($__internal_3ff9c1f3a4d4c2bfd3261e6edf8a19f92366a559194abaadd5f2a5c17f668438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7000a92c32b2c5a7351d932466979481cac0bf8b37bc58b29768ea66eaa4dd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7000a92c32b2c5a7351d932466979481cac0bf8b37bc58b29768ea66eaa4dd26->enter($__internal_7000a92c32b2c5a7351d932466979481cac0bf8b37bc58b29768ea66eaa4dd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
            ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "
            ";
        // line 51
        $this->displayBlock('page_content', $context, $blocks);
        // line 54
        echo "            <footer>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <p class=\"pull-left\"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
                    </div>
                </div>
                <!--/.footer-bottom--> 
            </footer>

            <!-- /.container -->
        ";
        
        $__internal_7000a92c32b2c5a7351d932466979481cac0bf8b37bc58b29768ea66eaa4dd26->leave($__internal_7000a92c32b2c5a7351d932466979481cac0bf8b37bc58b29768ea66eaa4dd26_prof);

        
        $__internal_3ff9c1f3a4d4c2bfd3261e6edf8a19f92366a559194abaadd5f2a5c17f668438->leave($__internal_3ff9c1f3a4d4c2bfd3261e6edf8a19f92366a559194abaadd5f2a5c17f668438_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5bda21eb6bd5138a1692e126e69cf2fe8d340b523bb278a29a184b0ff7a061d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bda21eb6bd5138a1692e126e69cf2fe8d340b523bb278a29a184b0ff7a061d1->enter($__internal_5bda21eb6bd5138a1692e126e69cf2fe8d340b523bb278a29a184b0ff7a061d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_12b3f676afe6adb4d031023e8e11200b3d4be4885875b4ea8908d7ef48993e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b3f676afe6adb4d031023e8e11200b3d4be4885875b4ea8908d7ef48993e73->enter($__internal_12b3f676afe6adb4d031023e8e11200b3d4be4885875b4ea8908d7ef48993e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "
                <div id=\"custom-bootstrap-menu\" class=\"navbar navbar-default \" role=\"navigation\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\"><a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_homepage");
        echo "\">PANI</a>
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-menubuilder\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-menubuilder\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistametge");
        echo "\">Metges</a>
                                </li>
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistapacient");
        echo "\">Pacients</a>
                                </li>
                                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistavisita");
        echo "\">Visites</a>
                                </li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistavisites");
        echo "\">Llistat de Visites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_12b3f676afe6adb4d031023e8e11200b3d4be4885875b4ea8908d7ef48993e73->leave($__internal_12b3f676afe6adb4d031023e8e11200b3d4be4885875b4ea8908d7ef48993e73_prof);

        
        $__internal_5bda21eb6bd5138a1692e126e69cf2fe8d340b523bb278a29a184b0ff7a061d1->leave($__internal_5bda21eb6bd5138a1692e126e69cf2fe8d340b523bb278a29a184b0ff7a061d1_prof);

    }

    // line 51
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a8e1efa983746d7b2365ffa18cdc0879ed5e811255f6be26d8c46c48ee44295b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e1efa983746d7b2365ffa18cdc0879ed5e811255f6be26d8c46c48ee44295b->enter($__internal_a8e1efa983746d7b2365ffa18cdc0879ed5e811255f6be26d8c46c48ee44295b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4d39749089ba33f9d4003deb712bfb6f4930c92c3158b49e44daefaa0ce2aae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d39749089ba33f9d4003deb712bfb6f4930c92c3158b49e44daefaa0ce2aae1->enter($__internal_4d39749089ba33f9d4003deb712bfb6f4930c92c3158b49e44daefaa0ce2aae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 52
        echo "                
            ";
        
        $__internal_4d39749089ba33f9d4003deb712bfb6f4930c92c3158b49e44daefaa0ce2aae1->leave($__internal_4d39749089ba33f9d4003deb712bfb6f4930c92c3158b49e44daefaa0ce2aae1_prof);

        
        $__internal_a8e1efa983746d7b2365ffa18cdc0879ed5e811255f6be26d8c46c48ee44295b->leave($__internal_a8e1efa983746d7b2365ffa18cdc0879ed5e811255f6be26d8c46c48ee44295b_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b245384ddba4afe8741d5d7ef7e9f8a18623d051615168ef07033be952f2a226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b245384ddba4afe8741d5d7ef7e9f8a18623d051615168ef07033be952f2a226->enter($__internal_b245384ddba4afe8741d5d7ef7e9f8a18623d051615168ef07033be952f2a226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cb4e618cb82d70d67e2b617d3c38c98f15f5bf614696fd78f65bf2299634c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb4e618cb82d70d67e2b617d3c38c98f15f5bf614696fd78f65bf2299634c11->enter($__internal_4cb4e618cb82d70d67e2b617d3c38c98f15f5bf614696fd78f65bf2299634c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "                <!-- jQuery -->
                <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_4cb4e618cb82d70d67e2b617d3c38c98f15f5bf614696fd78f65bf2299634c11->leave($__internal_4cb4e618cb82d70d67e2b617d3c38c98f15f5bf614696fd78f65bf2299634c11_prof);

        
        $__internal_b245384ddba4afe8741d5d7ef7e9f8a18623d051615168ef07033be952f2a226->leave($__internal_b245384ddba4afe8741d5d7ef7e9f8a18623d051615168ef07033be952f2a226_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 70,  249 => 67,  246 => 66,  237 => 65,  226 => 52,  217 => 51,  200 => 43,  195 => 41,  190 => 39,  185 => 37,  176 => 31,  171 => 28,  162 => 27,  142 => 54,  140 => 51,  137 => 50,  135 => 27,  132 => 26,  123 => 25,  104 => 13,  98 => 10,  95 => 9,  86 => 8,  68 => 7,  55 => 72,  52 => 65,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome to our cosa!{% endblock %}</title>
        {% block stylesheets %}
            <!-- Bootstrap Core CSS -->
            <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"{{ asset('css/pani-home.css') }}\" rel=\"stylesheet\">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
            <![endif]-->
        {% endblock %}
    </head>

    <body>
        {% block body %}

            {% block navigation %}

                <div id=\"custom-bootstrap-menu\" class=\"navbar navbar-default \" role=\"navigation\">
                    <div class=\"container-fluid\">
                        <div class=\"navbar-header\"><a class=\"navbar-brand\" href=\"{{ path('clinica_pani_homepage') }}\">PANI</a>
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-menubuilder\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse navbar-menubuilder\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li><a href=\"{{ path('clinica_pani_vistametge') }}\">Metges</a>
                                </li>
                                <li><a href=\"{{ path('clinica_pani_vistapacient') }}\">Pacients</a>
                                </li>
                                <li><a href=\"{{ path('clinica_pani_vistavisita') }}\">Visites</a>
                                </li>
                                <li><a href=\"{{ path('clinica_pani_vistavisites') }}\">Llistat de Visites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block page_content %}
                
            {% endblock %}
            <footer>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <p class=\"pull-left\"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
                    </div>
                </div>
                <!--/.footer-bottom--> 
            </footer>

            <!-- /.container -->
        {% endblock %}
        {% block javascripts %}
                <!-- jQuery -->
                <script src=\"{{ asset('js/jquery.js') }}\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            {% endblock %}
    </body>
</html>

", "clinicaPaniBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
