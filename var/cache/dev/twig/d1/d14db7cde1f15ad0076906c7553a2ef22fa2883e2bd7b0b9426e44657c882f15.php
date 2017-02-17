<?php

/* clinicaPaniBundle:Default:index.html.twig */
class __TwigTemplate_c43977447d6f0f166a330eed4f89ae94eb9502ad9a7e581502635d496a0f2e6a extends Twig_Template
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
        $__internal_35192cd173f565f933ae7b8909dedfe6999aa3076703688911cf8c15ad37deaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35192cd173f565f933ae7b8909dedfe6999aa3076703688911cf8c15ad37deaf->enter($__internal_35192cd173f565f933ae7b8909dedfe6999aa3076703688911cf8c15ad37deaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

        $__internal_5c466b1b4d16e5ace7807b9ac3da49de099abd6efdd1d6875dc6326c79577af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c466b1b4d16e5ace7807b9ac3da49de099abd6efdd1d6875dc6326c79577af4->enter($__internal_5c466b1b4d16e5ace7807b9ac3da49de099abd6efdd1d6875dc6326c79577af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

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
        
        $__internal_35192cd173f565f933ae7b8909dedfe6999aa3076703688911cf8c15ad37deaf->leave($__internal_35192cd173f565f933ae7b8909dedfe6999aa3076703688911cf8c15ad37deaf_prof);

        
        $__internal_5c466b1b4d16e5ace7807b9ac3da49de099abd6efdd1d6875dc6326c79577af4->leave($__internal_5c466b1b4d16e5ace7807b9ac3da49de099abd6efdd1d6875dc6326c79577af4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b40a671ca7cdfb43aad8879b48ec1f947b4d4eef09bdf6aa265a1b39abf207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b40a671ca7cdfb43aad8879b48ec1f947b4d4eef09bdf6aa265a1b39abf207a->enter($__internal_8b40a671ca7cdfb43aad8879b48ec1f947b4d4eef09bdf6aa265a1b39abf207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3616485ceb683500ae6b6ef2c24ec46e04fe963ba5354569472e77b189105947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3616485ceb683500ae6b6ef2c24ec46e04fe963ba5354569472e77b189105947->enter($__internal_3616485ceb683500ae6b6ef2c24ec46e04fe963ba5354569472e77b189105947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_3616485ceb683500ae6b6ef2c24ec46e04fe963ba5354569472e77b189105947->leave($__internal_3616485ceb683500ae6b6ef2c24ec46e04fe963ba5354569472e77b189105947_prof);

        
        $__internal_8b40a671ca7cdfb43aad8879b48ec1f947b4d4eef09bdf6aa265a1b39abf207a->leave($__internal_8b40a671ca7cdfb43aad8879b48ec1f947b4d4eef09bdf6aa265a1b39abf207a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7de3dc2877dcf1a71926ebcb3023ec54437c442a0e16bf71dade2587075d04df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de3dc2877dcf1a71926ebcb3023ec54437c442a0e16bf71dade2587075d04df->enter($__internal_7de3dc2877dcf1a71926ebcb3023ec54437c442a0e16bf71dade2587075d04df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ceeaf86d0214af2a71ee1812d437db4744a941b86dc47d4a3d61ed810e7aa662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceeaf86d0214af2a71ee1812d437db4744a941b86dc47d4a3d61ed810e7aa662->enter($__internal_ceeaf86d0214af2a71ee1812d437db4744a941b86dc47d4a3d61ed810e7aa662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ceeaf86d0214af2a71ee1812d437db4744a941b86dc47d4a3d61ed810e7aa662->leave($__internal_ceeaf86d0214af2a71ee1812d437db4744a941b86dc47d4a3d61ed810e7aa662_prof);

        
        $__internal_7de3dc2877dcf1a71926ebcb3023ec54437c442a0e16bf71dade2587075d04df->leave($__internal_7de3dc2877dcf1a71926ebcb3023ec54437c442a0e16bf71dade2587075d04df_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d5f39dba677478aaaa252c96d2780b109a2e0d403e78819e957d8c03eea17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d5f39dba677478aaaa252c96d2780b109a2e0d403e78819e957d8c03eea17c->enter($__internal_e8d5f39dba677478aaaa252c96d2780b109a2e0d403e78819e957d8c03eea17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9013fa70cce479fd61f5f7ac3c5d7489c637d042fadc15bbfb0fe9033d8048be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9013fa70cce479fd61f5f7ac3c5d7489c637d042fadc15bbfb0fe9033d8048be->enter($__internal_9013fa70cce479fd61f5f7ac3c5d7489c637d042fadc15bbfb0fe9033d8048be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9013fa70cce479fd61f5f7ac3c5d7489c637d042fadc15bbfb0fe9033d8048be->leave($__internal_9013fa70cce479fd61f5f7ac3c5d7489c637d042fadc15bbfb0fe9033d8048be_prof);

        
        $__internal_e8d5f39dba677478aaaa252c96d2780b109a2e0d403e78819e957d8c03eea17c->leave($__internal_e8d5f39dba677478aaaa252c96d2780b109a2e0d403e78819e957d8c03eea17c_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d6cd8ca3642ff3083cf84e6a507b539a74bfdedb9a4e076e3bf8c5f107dc69d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6cd8ca3642ff3083cf84e6a507b539a74bfdedb9a4e076e3bf8c5f107dc69d8->enter($__internal_d6cd8ca3642ff3083cf84e6a507b539a74bfdedb9a4e076e3bf8c5f107dc69d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_4400289974af5ad9516a7b9a357a7c18768e74a1b02a8d87cd58a553f1b61cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4400289974af5ad9516a7b9a357a7c18768e74a1b02a8d87cd58a553f1b61cc8->enter($__internal_4400289974af5ad9516a7b9a357a7c18768e74a1b02a8d87cd58a553f1b61cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_4400289974af5ad9516a7b9a357a7c18768e74a1b02a8d87cd58a553f1b61cc8->leave($__internal_4400289974af5ad9516a7b9a357a7c18768e74a1b02a8d87cd58a553f1b61cc8_prof);

        
        $__internal_d6cd8ca3642ff3083cf84e6a507b539a74bfdedb9a4e076e3bf8c5f107dc69d8->leave($__internal_d6cd8ca3642ff3083cf84e6a507b539a74bfdedb9a4e076e3bf8c5f107dc69d8_prof);

    }

    // line 50
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_11d12c167699d170aba18581daea514804fb4a7f39d098705c39bd7a4f06a39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d12c167699d170aba18581daea514804fb4a7f39d098705c39bd7a4f06a39f->enter($__internal_11d12c167699d170aba18581daea514804fb4a7f39d098705c39bd7a4f06a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_18884328d94dfb5e882dd70084a30f0a285d68621d6ae354a013fc8520584926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18884328d94dfb5e882dd70084a30f0a285d68621d6ae354a013fc8520584926->enter($__internal_18884328d94dfb5e882dd70084a30f0a285d68621d6ae354a013fc8520584926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_18884328d94dfb5e882dd70084a30f0a285d68621d6ae354a013fc8520584926->leave($__internal_18884328d94dfb5e882dd70084a30f0a285d68621d6ae354a013fc8520584926_prof);

        
        $__internal_11d12c167699d170aba18581daea514804fb4a7f39d098705c39bd7a4f06a39f->leave($__internal_11d12c167699d170aba18581daea514804fb4a7f39d098705c39bd7a4f06a39f_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b72f1a130e75a24ca8ffebfdb576812850a6cb255647f35c808ef6b3ade9eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b72f1a130e75a24ca8ffebfdb576812850a6cb255647f35c808ef6b3ade9eae->enter($__internal_4b72f1a130e75a24ca8ffebfdb576812850a6cb255647f35c808ef6b3ade9eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16c1b93a10d225a9e18dab87df94e3b7c1ed003db594c084cd73f4affa773432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c1b93a10d225a9e18dab87df94e3b7c1ed003db594c084cd73f4affa773432->enter($__internal_16c1b93a10d225a9e18dab87df94e3b7c1ed003db594c084cd73f4affa773432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_16c1b93a10d225a9e18dab87df94e3b7c1ed003db594c084cd73f4affa773432->leave($__internal_16c1b93a10d225a9e18dab87df94e3b7c1ed003db594c084cd73f4affa773432_prof);

        
        $__internal_4b72f1a130e75a24ca8ffebfdb576812850a6cb255647f35c808ef6b3ade9eae->leave($__internal_4b72f1a130e75a24ca8ffebfdb576812850a6cb255647f35c808ef6b3ade9eae_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:index.html.twig";
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

", "clinicaPaniBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/index.html.twig");
    }
}
