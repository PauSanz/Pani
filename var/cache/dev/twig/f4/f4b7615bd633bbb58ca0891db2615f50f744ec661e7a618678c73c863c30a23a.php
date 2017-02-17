<?php

/* clinicaPaniBundle:Default:index.html.twig  */
class __TwigTemplate_1755ae3fb810b510da57ffd1eaf7458af8e524cff9b5dc1b9b0baeb54864e648 extends Twig_Template
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
        $__internal_d33bf0c1299f62424cf6bd331cb316c0250f39033d15a9b832896479ac99d0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33bf0c1299f62424cf6bd331cb316c0250f39033d15a9b832896479ac99d0e9->enter($__internal_d33bf0c1299f62424cf6bd331cb316c0250f39033d15a9b832896479ac99d0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig "));

        $__internal_51bff18fc73cb28596303191b778ce74cfef0e3ff91a782a2401c662e68f694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bff18fc73cb28596303191b778ce74cfef0e3ff91a782a2401c662e68f694f->enter($__internal_51bff18fc73cb28596303191b778ce74cfef0e3ff91a782a2401c662e68f694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig "));

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
        
        $__internal_d33bf0c1299f62424cf6bd331cb316c0250f39033d15a9b832896479ac99d0e9->leave($__internal_d33bf0c1299f62424cf6bd331cb316c0250f39033d15a9b832896479ac99d0e9_prof);

        
        $__internal_51bff18fc73cb28596303191b778ce74cfef0e3ff91a782a2401c662e68f694f->leave($__internal_51bff18fc73cb28596303191b778ce74cfef0e3ff91a782a2401c662e68f694f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c63d9bb7db08ead71266f24c164288133d58aeda9314fa13ae331778f1066a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c63d9bb7db08ead71266f24c164288133d58aeda9314fa13ae331778f1066a1->enter($__internal_7c63d9bb7db08ead71266f24c164288133d58aeda9314fa13ae331778f1066a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_defc16083c5fa2467df15976b36814beb502174f96d9fca1083df5251bfbff0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_defc16083c5fa2467df15976b36814beb502174f96d9fca1083df5251bfbff0e->enter($__internal_defc16083c5fa2467df15976b36814beb502174f96d9fca1083df5251bfbff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_defc16083c5fa2467df15976b36814beb502174f96d9fca1083df5251bfbff0e->leave($__internal_defc16083c5fa2467df15976b36814beb502174f96d9fca1083df5251bfbff0e_prof);

        
        $__internal_7c63d9bb7db08ead71266f24c164288133d58aeda9314fa13ae331778f1066a1->leave($__internal_7c63d9bb7db08ead71266f24c164288133d58aeda9314fa13ae331778f1066a1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_705b8d7eac80016435e6480d99635fb9e776456a3145a4ef556708ff18ab1b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705b8d7eac80016435e6480d99635fb9e776456a3145a4ef556708ff18ab1b67->enter($__internal_705b8d7eac80016435e6480d99635fb9e776456a3145a4ef556708ff18ab1b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62482cd4971f384cce6388d87db679b17f1dadf461d9a54d82d5109518a74ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62482cd4971f384cce6388d87db679b17f1dadf461d9a54d82d5109518a74ef0->enter($__internal_62482cd4971f384cce6388d87db679b17f1dadf461d9a54d82d5109518a74ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_62482cd4971f384cce6388d87db679b17f1dadf461d9a54d82d5109518a74ef0->leave($__internal_62482cd4971f384cce6388d87db679b17f1dadf461d9a54d82d5109518a74ef0_prof);

        
        $__internal_705b8d7eac80016435e6480d99635fb9e776456a3145a4ef556708ff18ab1b67->leave($__internal_705b8d7eac80016435e6480d99635fb9e776456a3145a4ef556708ff18ab1b67_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_c078025e1d8cb80c3db5465a862d4a47af1c871b73efad60a368bf35c06e6e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c078025e1d8cb80c3db5465a862d4a47af1c871b73efad60a368bf35c06e6e9e->enter($__internal_c078025e1d8cb80c3db5465a862d4a47af1c871b73efad60a368bf35c06e6e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac49d9af9c78aef773c42dfa7a5a5a3af16b144c17183af076e4c24d073fa1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac49d9af9c78aef773c42dfa7a5a5a3af16b144c17183af076e4c24d073fa1b7->enter($__internal_ac49d9af9c78aef773c42dfa7a5a5a3af16b144c17183af076e4c24d073fa1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <p class=\"pull-left\"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
                    </div>
                </div>
                <!--/.footer-bottom--> 
            </footer>

            <!-- /.container -->
        ";
        
        $__internal_ac49d9af9c78aef773c42dfa7a5a5a3af16b144c17183af076e4c24d073fa1b7->leave($__internal_ac49d9af9c78aef773c42dfa7a5a5a3af16b144c17183af076e4c24d073fa1b7_prof);

        
        $__internal_c078025e1d8cb80c3db5465a862d4a47af1c871b73efad60a368bf35c06e6e9e->leave($__internal_c078025e1d8cb80c3db5465a862d4a47af1c871b73efad60a368bf35c06e6e9e_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_858ad3955a36e201cbec51e8447a255b4a1ab4bb0a984e39d0ab1f1939cc9550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858ad3955a36e201cbec51e8447a255b4a1ab4bb0a984e39d0ab1f1939cc9550->enter($__internal_858ad3955a36e201cbec51e8447a255b4a1ab4bb0a984e39d0ab1f1939cc9550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_4d263295e186c3bf93de469642efd03b2cb810e1700e87db2e741705f4e8963f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d263295e186c3bf93de469642efd03b2cb810e1700e87db2e741705f4e8963f->enter($__internal_4d263295e186c3bf93de469642efd03b2cb810e1700e87db2e741705f4e8963f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_4d263295e186c3bf93de469642efd03b2cb810e1700e87db2e741705f4e8963f->leave($__internal_4d263295e186c3bf93de469642efd03b2cb810e1700e87db2e741705f4e8963f_prof);

        
        $__internal_858ad3955a36e201cbec51e8447a255b4a1ab4bb0a984e39d0ab1f1939cc9550->leave($__internal_858ad3955a36e201cbec51e8447a255b4a1ab4bb0a984e39d0ab1f1939cc9550_prof);

    }

    // line 50
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4bf00df8fbae476ff3251e2dc23cd64f1c181d095f1a8e63c06a9489b4ba8504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf00df8fbae476ff3251e2dc23cd64f1c181d095f1a8e63c06a9489b4ba8504->enter($__internal_4bf00df8fbae476ff3251e2dc23cd64f1c181d095f1a8e63c06a9489b4ba8504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_26778ab525a813d5b19f8d9d80bdb804b387e6c788d506f5fb5de8a2fb45f433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26778ab525a813d5b19f8d9d80bdb804b387e6c788d506f5fb5de8a2fb45f433->enter($__internal_26778ab525a813d5b19f8d9d80bdb804b387e6c788d506f5fb5de8a2fb45f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 51
        echo "                <div class=\"container\">

                    <!-- Heading Row -->
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <img class=\"img-responsive img-rounded\" src=\"http://signosvitales.org/wp-content/uploads/2016/08/Especialidades-M%C3%A9dicas.jpg\" alt=\"\">
                        </div>
                        <!-- /.col-md-8 -->
                        <div class=\"col-md-4\">
                            <h1>Business Name or Tagline</h1>
                            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
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
        
        $__internal_26778ab525a813d5b19f8d9d80bdb804b387e6c788d506f5fb5de8a2fb45f433->leave($__internal_26778ab525a813d5b19f8d9d80bdb804b387e6c788d506f5fb5de8a2fb45f433_prof);

        
        $__internal_4bf00df8fbae476ff3251e2dc23cd64f1c181d095f1a8e63c06a9489b4ba8504->leave($__internal_4bf00df8fbae476ff3251e2dc23cd64f1c181d095f1a8e63c06a9489b4ba8504_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d2139a1bc6762dd3f15d2e58afc5381661e25601af3a7d66e6bc2be87a5d0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2139a1bc6762dd3f15d2e58afc5381661e25601af3a7d66e6bc2be87a5d0c5->enter($__internal_0d2139a1bc6762dd3f15d2e58afc5381661e25601af3a7d66e6bc2be87a5d0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb3afdf8e855b883240c6dfed5e14e27637b8c5e10a0238eeb534f7ff6166d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3afdf8e855b883240c6dfed5e14e27637b8c5e10a0238eeb534f7ff6166d06->enter($__internal_eb3afdf8e855b883240c6dfed5e14e27637b8c5e10a0238eeb534f7ff6166d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_eb3afdf8e855b883240c6dfed5e14e27637b8c5e10a0238eeb534f7ff6166d06->leave($__internal_eb3afdf8e855b883240c6dfed5e14e27637b8c5e10a0238eeb534f7ff6166d06_prof);

        
        $__internal_0d2139a1bc6762dd3f15d2e58afc5381661e25601af3a7d66e6bc2be87a5d0c5->leave($__internal_0d2139a1bc6762dd3f15d2e58afc5381661e25601af3a7d66e6bc2be87a5d0c5_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:index.html.twig ";
    }

    public function getDebugInfo()
    {
        return array (  297 => 115,  291 => 112,  288 => 111,  279 => 110,  222 => 51,  213 => 50,  195 => 41,  190 => 39,  185 => 37,  176 => 31,  171 => 28,  162 => 27,  142 => 99,  140 => 50,  137 => 49,  135 => 27,  132 => 26,  123 => 25,  104 => 13,  98 => 10,  95 => 9,  86 => 8,  68 => 7,  55 => 117,  52 => 110,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
                            <img class=\"img-responsive img-rounded\" src=\"http://signosvitales.org/wp-content/uploads/2016/08/Especialidades-M%C3%A9dicas.jpg\" alt=\"\">
                        </div>
                        <!-- /.col-md-8 -->
                        <div class=\"col-md-4\">
                            <h1>Business Name or Tagline</h1>
                            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
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

", "clinicaPaniBundle:Default:index.html.twig ", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/index.html.twig ");
    }
}
