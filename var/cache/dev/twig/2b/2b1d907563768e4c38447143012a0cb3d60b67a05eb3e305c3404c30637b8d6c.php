<?php

/* @clinicaPani/Default/index.html.twig */
class __TwigTemplate_ba61870b880dbd798ac73c8c4780e1c8ea38af9c91e09c5e176067ce07d8ea7e extends Twig_Template
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
        $__internal_c715ced8730bb88da78599ff41a274227a613b43dcfd029d9904d2305ba80458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c715ced8730bb88da78599ff41a274227a613b43dcfd029d9904d2305ba80458->enter($__internal_c715ced8730bb88da78599ff41a274227a613b43dcfd029d9904d2305ba80458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/index.html.twig"));

        $__internal_869baae7a0ebcfc4e35b90e296b3555d04225a059b22126789406fa61fa19054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869baae7a0ebcfc4e35b90e296b3555d04225a059b22126789406fa61fa19054->enter($__internal_869baae7a0ebcfc4e35b90e296b3555d04225a059b22126789406fa61fa19054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/index.html.twig"));

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
        // line 110
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "    </body>
</html>

";
        
        $__internal_c715ced8730bb88da78599ff41a274227a613b43dcfd029d9904d2305ba80458->leave($__internal_c715ced8730bb88da78599ff41a274227a613b43dcfd029d9904d2305ba80458_prof);

        
        $__internal_869baae7a0ebcfc4e35b90e296b3555d04225a059b22126789406fa61fa19054->leave($__internal_869baae7a0ebcfc4e35b90e296b3555d04225a059b22126789406fa61fa19054_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_879b28bae2820dfa3aa5d3b2ef5f9baa315a7039e5a6325100b49df0168e5ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879b28bae2820dfa3aa5d3b2ef5f9baa315a7039e5a6325100b49df0168e5ddd->enter($__internal_879b28bae2820dfa3aa5d3b2ef5f9baa315a7039e5a6325100b49df0168e5ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88099e57449da41f0ee6cbb074a70934f89d59f4bd48afe28157939d60e410f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88099e57449da41f0ee6cbb074a70934f89d59f4bd48afe28157939d60e410f6->enter($__internal_88099e57449da41f0ee6cbb074a70934f89d59f4bd48afe28157939d60e410f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_88099e57449da41f0ee6cbb074a70934f89d59f4bd48afe28157939d60e410f6->leave($__internal_88099e57449da41f0ee6cbb074a70934f89d59f4bd48afe28157939d60e410f6_prof);

        
        $__internal_879b28bae2820dfa3aa5d3b2ef5f9baa315a7039e5a6325100b49df0168e5ddd->leave($__internal_879b28bae2820dfa3aa5d3b2ef5f9baa315a7039e5a6325100b49df0168e5ddd_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6ae152348b2770f8791cd6920b183702b22e8543f5ecb436362303393b141d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ae152348b2770f8791cd6920b183702b22e8543f5ecb436362303393b141d0->enter($__internal_f6ae152348b2770f8791cd6920b183702b22e8543f5ecb436362303393b141d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_860127b547af881052ed81c6e56a73c55a5041b31478b9c8a9d7f292917a565b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860127b547af881052ed81c6e56a73c55a5041b31478b9c8a9d7f292917a565b->enter($__internal_860127b547af881052ed81c6e56a73c55a5041b31478b9c8a9d7f292917a565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_860127b547af881052ed81c6e56a73c55a5041b31478b9c8a9d7f292917a565b->leave($__internal_860127b547af881052ed81c6e56a73c55a5041b31478b9c8a9d7f292917a565b_prof);

        
        $__internal_f6ae152348b2770f8791cd6920b183702b22e8543f5ecb436362303393b141d0->leave($__internal_f6ae152348b2770f8791cd6920b183702b22e8543f5ecb436362303393b141d0_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea13ef7bc9c8ff0aec7f9d19e87d04b8f8e50419634e73feed25026044b5f32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea13ef7bc9c8ff0aec7f9d19e87d04b8f8e50419634e73feed25026044b5f32d->enter($__internal_ea13ef7bc9c8ff0aec7f9d19e87d04b8f8e50419634e73feed25026044b5f32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58193ab646c8a943771019c7129f613b0e159f39a4f6d34648180e0526251685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58193ab646c8a943771019c7129f613b0e159f39a4f6d34648180e0526251685->enter($__internal_58193ab646c8a943771019c7129f613b0e159f39a4f6d34648180e0526251685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
            ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 49
        echo "
            ";
        // line 50
        $this->displayBlock('page_content', $context, $blocks);
        // line 99
        echo "            <footer>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <p class=\"pull-left\"> Clinica Pani </p>
                    </div>
                </div>
                <!--/.footer-bottom--> 
            </footer>

            <!-- /.container -->
        ";
        
        $__internal_58193ab646c8a943771019c7129f613b0e159f39a4f6d34648180e0526251685->leave($__internal_58193ab646c8a943771019c7129f613b0e159f39a4f6d34648180e0526251685_prof);

        
        $__internal_ea13ef7bc9c8ff0aec7f9d19e87d04b8f8e50419634e73feed25026044b5f32d->leave($__internal_ea13ef7bc9c8ff0aec7f9d19e87d04b8f8e50419634e73feed25026044b5f32d_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_41a17b95de11558ee403682cb13bad0b6970a7117ca1626e39cb151334e6266e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a17b95de11558ee403682cb13bad0b6970a7117ca1626e39cb151334e6266e->enter($__internal_41a17b95de11558ee403682cb13bad0b6970a7117ca1626e39cb151334e6266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_32251b88904790079046e481c7715f2a7fb4ff1cbbfc8b536b43af364c9e8e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32251b88904790079046e481c7715f2a7fb4ff1cbbfc8b536b43af364c9e8e16->enter($__internal_32251b88904790079046e481c7715f2a7fb4ff1cbbfc8b536b43af364c9e8e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistavisites");
        echo "\">Llistat de Visites</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_32251b88904790079046e481c7715f2a7fb4ff1cbbfc8b536b43af364c9e8e16->leave($__internal_32251b88904790079046e481c7715f2a7fb4ff1cbbfc8b536b43af364c9e8e16_prof);

        
        $__internal_41a17b95de11558ee403682cb13bad0b6970a7117ca1626e39cb151334e6266e->leave($__internal_41a17b95de11558ee403682cb13bad0b6970a7117ca1626e39cb151334e6266e_prof);

    }

    // line 50
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_274e930406a69877e2bc59c8610bb075373a7a07a98bc4a75ad2fb1e58054bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274e930406a69877e2bc59c8610bb075373a7a07a98bc4a75ad2fb1e58054bed->enter($__internal_274e930406a69877e2bc59c8610bb075373a7a07a98bc4a75ad2fb1e58054bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1b281e4d6c8b07702d94d0bfd9f5b1fe78dd6fa2d522a6688eaff607c62ef00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b281e4d6c8b07702d94d0bfd9f5b1fe78dd6fa2d522a6688eaff607c62ef00e->enter($__internal_1b281e4d6c8b07702d94d0bfd9f5b1fe78dd6fa2d522a6688eaff607c62ef00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 51
        echo "                <div class=\"container\">

                    <!-- Heading Row -->
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <img class=\"img-responsive img-rounded\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <!-- /.col-md-8 -->
                        <div class=\"col-md-4\">
                            <h1>Confia en nosaltres</h1>
                            <p>En la clínica Pani sempre busquem que et sentis segur, oferint els millors serveis de tot el país.</p>
                            <a class=\"btn btn-primary btn-lg\" href=\"#\">Call to Action!</a>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>


                    <!-- Content Row -->
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <h2>Heading 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class=\"col-md-4\">
                            <h2>Heading 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class=\"col-md-4\">
                            <h2>Heading 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <!-- Footer -->


                </div>   
            ";
        
        $__internal_1b281e4d6c8b07702d94d0bfd9f5b1fe78dd6fa2d522a6688eaff607c62ef00e->leave($__internal_1b281e4d6c8b07702d94d0bfd9f5b1fe78dd6fa2d522a6688eaff607c62ef00e_prof);

        
        $__internal_274e930406a69877e2bc59c8610bb075373a7a07a98bc4a75ad2fb1e58054bed->leave($__internal_274e930406a69877e2bc59c8610bb075373a7a07a98bc4a75ad2fb1e58054bed_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1072d3d229d814bc6f7f5cb846fd4b57e8b006ae90bd277212b08a94c1b79d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1072d3d229d814bc6f7f5cb846fd4b57e8b006ae90bd277212b08a94c1b79d45->enter($__internal_1072d3d229d814bc6f7f5cb846fd4b57e8b006ae90bd277212b08a94c1b79d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c49761f454f19c7bd8d9c1aaae1a3c7d6e9d2c300a34be866213c84eabfcab87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49761f454f19c7bd8d9c1aaae1a3c7d6e9d2c300a34be866213c84eabfcab87->enter($__internal_c49761f454f19c7bd8d9c1aaae1a3c7d6e9d2c300a34be866213c84eabfcab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c49761f454f19c7bd8d9c1aaae1a3c7d6e9d2c300a34be866213c84eabfcab87->leave($__internal_c49761f454f19c7bd8d9c1aaae1a3c7d6e9d2c300a34be866213c84eabfcab87_prof);

        
        $__internal_1072d3d229d814bc6f7f5cb846fd4b57e8b006ae90bd277212b08a94c1b79d45->leave($__internal_1072d3d229d814bc6f7f5cb846fd4b57e8b006ae90bd277212b08a94c1b79d45_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  300 => 115,  294 => 112,  291 => 111,  282 => 110,  229 => 56,  222 => 51,  213 => 50,  195 => 41,  190 => 39,  185 => 37,  176 => 31,  171 => 28,  162 => 27,  142 => 99,  140 => 50,  137 => 49,  135 => 27,  132 => 26,  123 => 25,  104 => 13,  98 => 10,  95 => 9,  86 => 8,  68 => 7,  55 => 117,  52 => 110,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
                                <li><a href=\"{{ path('clinica_pani_vistavisites') }}\">Llistat de Visites</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            {% endblock %}

            {% block page_content %}
                <div class=\"container\">

                    <!-- Heading Row -->
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <img class=\"img-responsive img-rounded\" src=\"{{ asset('images/1.jpg') }}\" alt=\"\">
                        </div>
                        <!-- /.col-md-8 -->
                        <div class=\"col-md-4\">
                            <h1>Confia en nosaltres</h1>
                            <p>En la clínica Pani sempre busquem que et sentis segur, oferint els millors serveis de tot el país.</p>
                            <a class=\"btn btn-primary btn-lg\" href=\"#\">Call to Action!</a>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <hr>


                    <!-- Content Row -->
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <h2>Heading 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class=\"col-md-4\">
                            <h2>Heading 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class=\"col-md-4\">
                            <h2>Heading 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                            <a class=\"btn btn-default\" href=\"#\">More Info</a>
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <!-- Footer -->


                </div>   
            {% endblock %}
            <footer>
                <div class=\"footer-bottom\">
                    <div class=\"container\">
                        <p class=\"pull-left\"> Clinica Pani </p>
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

", "@clinicaPani/Default/index.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
