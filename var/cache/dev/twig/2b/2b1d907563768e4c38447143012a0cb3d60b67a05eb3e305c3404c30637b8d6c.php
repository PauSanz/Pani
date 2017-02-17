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
        $__internal_875b7c62b533bb564f6648e0eaad138e358d61f55cb283fbc35028df545e283d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875b7c62b533bb564f6648e0eaad138e358d61f55cb283fbc35028df545e283d->enter($__internal_875b7c62b533bb564f6648e0eaad138e358d61f55cb283fbc35028df545e283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/index.html.twig"));

        $__internal_cbe81cc5b17f1a96d07bac86ba5c7d86fa5cdde975e42264669e8d07dd679f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe81cc5b17f1a96d07bac86ba5c7d86fa5cdde975e42264669e8d07dd679f73->enter($__internal_cbe81cc5b17f1a96d07bac86ba5c7d86fa5cdde975e42264669e8d07dd679f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/index.html.twig"));

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
        
        $__internal_875b7c62b533bb564f6648e0eaad138e358d61f55cb283fbc35028df545e283d->leave($__internal_875b7c62b533bb564f6648e0eaad138e358d61f55cb283fbc35028df545e283d_prof);

        
        $__internal_cbe81cc5b17f1a96d07bac86ba5c7d86fa5cdde975e42264669e8d07dd679f73->leave($__internal_cbe81cc5b17f1a96d07bac86ba5c7d86fa5cdde975e42264669e8d07dd679f73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a6829c24827ff17bcee57effeb4cad87dc928606b020e552e88e3162214ff9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6829c24827ff17bcee57effeb4cad87dc928606b020e552e88e3162214ff9e->enter($__internal_3a6829c24827ff17bcee57effeb4cad87dc928606b020e552e88e3162214ff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_646373b471e9312344f7d8c3d6c7f477580711a506efb88d9a753f867bb3dcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646373b471e9312344f7d8c3d6c7f477580711a506efb88d9a753f867bb3dcc9->enter($__internal_646373b471e9312344f7d8c3d6c7f477580711a506efb88d9a753f867bb3dcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_646373b471e9312344f7d8c3d6c7f477580711a506efb88d9a753f867bb3dcc9->leave($__internal_646373b471e9312344f7d8c3d6c7f477580711a506efb88d9a753f867bb3dcc9_prof);

        
        $__internal_3a6829c24827ff17bcee57effeb4cad87dc928606b020e552e88e3162214ff9e->leave($__internal_3a6829c24827ff17bcee57effeb4cad87dc928606b020e552e88e3162214ff9e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77e375aec1bba178d4ae116766450795b02ceec66d31fc73ebd79c2d6884f67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e375aec1bba178d4ae116766450795b02ceec66d31fc73ebd79c2d6884f67e->enter($__internal_77e375aec1bba178d4ae116766450795b02ceec66d31fc73ebd79c2d6884f67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e524f4b4d708126d701adb2541c0e4c334bedaab6dd20f22dc6953f2a99605f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e524f4b4d708126d701adb2541c0e4c334bedaab6dd20f22dc6953f2a99605f5->enter($__internal_e524f4b4d708126d701adb2541c0e4c334bedaab6dd20f22dc6953f2a99605f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e524f4b4d708126d701adb2541c0e4c334bedaab6dd20f22dc6953f2a99605f5->leave($__internal_e524f4b4d708126d701adb2541c0e4c334bedaab6dd20f22dc6953f2a99605f5_prof);

        
        $__internal_77e375aec1bba178d4ae116766450795b02ceec66d31fc73ebd79c2d6884f67e->leave($__internal_77e375aec1bba178d4ae116766450795b02ceec66d31fc73ebd79c2d6884f67e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_e18a9ffe0ad0f6e17cf4f9f37bac5b9443a54e142a1d1a54f33e33ead1ec1911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18a9ffe0ad0f6e17cf4f9f37bac5b9443a54e142a1d1a54f33e33ead1ec1911->enter($__internal_e18a9ffe0ad0f6e17cf4f9f37bac5b9443a54e142a1d1a54f33e33ead1ec1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a349f094458046ec22d7f6a570bcda720fc41005c76784f36396803f16adcfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a349f094458046ec22d7f6a570bcda720fc41005c76784f36396803f16adcfaf->enter($__internal_a349f094458046ec22d7f6a570bcda720fc41005c76784f36396803f16adcfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a349f094458046ec22d7f6a570bcda720fc41005c76784f36396803f16adcfaf->leave($__internal_a349f094458046ec22d7f6a570bcda720fc41005c76784f36396803f16adcfaf_prof);

        
        $__internal_e18a9ffe0ad0f6e17cf4f9f37bac5b9443a54e142a1d1a54f33e33ead1ec1911->leave($__internal_e18a9ffe0ad0f6e17cf4f9f37bac5b9443a54e142a1d1a54f33e33ead1ec1911_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_93c25c6063cb7815e97c47337019840c51864ba513ec5a77f3202536a59bb98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c25c6063cb7815e97c47337019840c51864ba513ec5a77f3202536a59bb98d->enter($__internal_93c25c6063cb7815e97c47337019840c51864ba513ec5a77f3202536a59bb98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_a7b48b084d4fb416386e88bb3e296a0d16917ae2d329332da0007d58ac2ba077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b48b084d4fb416386e88bb3e296a0d16917ae2d329332da0007d58ac2ba077->enter($__internal_a7b48b084d4fb416386e88bb3e296a0d16917ae2d329332da0007d58ac2ba077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a7b48b084d4fb416386e88bb3e296a0d16917ae2d329332da0007d58ac2ba077->leave($__internal_a7b48b084d4fb416386e88bb3e296a0d16917ae2d329332da0007d58ac2ba077_prof);

        
        $__internal_93c25c6063cb7815e97c47337019840c51864ba513ec5a77f3202536a59bb98d->leave($__internal_93c25c6063cb7815e97c47337019840c51864ba513ec5a77f3202536a59bb98d_prof);

    }

    // line 50
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_57e84f273e7a7f002ae447b7508c06b57132ce9ee0d39fcf3ca724896ef284e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e84f273e7a7f002ae447b7508c06b57132ce9ee0d39fcf3ca724896ef284e8->enter($__internal_57e84f273e7a7f002ae447b7508c06b57132ce9ee0d39fcf3ca724896ef284e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_501dcd57ead4ae1e2522c26b71cf1902c995a2717324a3a124cef843ab9db73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501dcd57ead4ae1e2522c26b71cf1902c995a2717324a3a124cef843ab9db73d->enter($__internal_501dcd57ead4ae1e2522c26b71cf1902c995a2717324a3a124cef843ab9db73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_501dcd57ead4ae1e2522c26b71cf1902c995a2717324a3a124cef843ab9db73d->leave($__internal_501dcd57ead4ae1e2522c26b71cf1902c995a2717324a3a124cef843ab9db73d_prof);

        
        $__internal_57e84f273e7a7f002ae447b7508c06b57132ce9ee0d39fcf3ca724896ef284e8->leave($__internal_57e84f273e7a7f002ae447b7508c06b57132ce9ee0d39fcf3ca724896ef284e8_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20eb342062db5989524e376ddbd6d799b5200060ac3d578be611397e312762a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eb342062db5989524e376ddbd6d799b5200060ac3d578be611397e312762a3->enter($__internal_20eb342062db5989524e376ddbd6d799b5200060ac3d578be611397e312762a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cb358ec553c59113341a0606472e1f0ec04b65ff5ae2f0bc78d372540a2b359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb358ec553c59113341a0606472e1f0ec04b65ff5ae2f0bc78d372540a2b359->enter($__internal_3cb358ec553c59113341a0606472e1f0ec04b65ff5ae2f0bc78d372540a2b359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3cb358ec553c59113341a0606472e1f0ec04b65ff5ae2f0bc78d372540a2b359->leave($__internal_3cb358ec553c59113341a0606472e1f0ec04b65ff5ae2f0bc78d372540a2b359_prof);

        
        $__internal_20eb342062db5989524e376ddbd6d799b5200060ac3d578be611397e312762a3->leave($__internal_20eb342062db5989524e376ddbd6d799b5200060ac3d578be611397e312762a3_prof);

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
