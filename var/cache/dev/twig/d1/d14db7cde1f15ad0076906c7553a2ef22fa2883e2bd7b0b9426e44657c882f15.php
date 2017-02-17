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
        $__internal_9734e280bea49c9dc7488f7154d505196dfaad12b253674e8e71dc9576829733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9734e280bea49c9dc7488f7154d505196dfaad12b253674e8e71dc9576829733->enter($__internal_9734e280bea49c9dc7488f7154d505196dfaad12b253674e8e71dc9576829733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

        $__internal_f8aba0406bbd769fa1064eac35b1a85ae614c17b34c939bbc361ee6d0f020376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aba0406bbd769fa1064eac35b1a85ae614c17b34c939bbc361ee6d0f020376->enter($__internal_f8aba0406bbd769fa1064eac35b1a85ae614c17b34c939bbc361ee6d0f020376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:index.html.twig"));

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
        // line 111
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    </body>
</html>

";
        
        $__internal_9734e280bea49c9dc7488f7154d505196dfaad12b253674e8e71dc9576829733->leave($__internal_9734e280bea49c9dc7488f7154d505196dfaad12b253674e8e71dc9576829733_prof);

        
        $__internal_f8aba0406bbd769fa1064eac35b1a85ae614c17b34c939bbc361ee6d0f020376->leave($__internal_f8aba0406bbd769fa1064eac35b1a85ae614c17b34c939bbc361ee6d0f020376_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2cc0f2a547fe4baa204d289aa49725907e6a85c0a37118b0612cd1adfc8e493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2cc0f2a547fe4baa204d289aa49725907e6a85c0a37118b0612cd1adfc8e493->enter($__internal_b2cc0f2a547fe4baa204d289aa49725907e6a85c0a37118b0612cd1adfc8e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1432c6503660769af0473897fd35dc3d5fba0ae8b947d45a7fc32d52596160fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1432c6503660769af0473897fd35dc3d5fba0ae8b947d45a7fc32d52596160fe->enter($__internal_1432c6503660769af0473897fd35dc3d5fba0ae8b947d45a7fc32d52596160fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to our cosa!";
        
        $__internal_1432c6503660769af0473897fd35dc3d5fba0ae8b947d45a7fc32d52596160fe->leave($__internal_1432c6503660769af0473897fd35dc3d5fba0ae8b947d45a7fc32d52596160fe_prof);

        
        $__internal_b2cc0f2a547fe4baa204d289aa49725907e6a85c0a37118b0612cd1adfc8e493->leave($__internal_b2cc0f2a547fe4baa204d289aa49725907e6a85c0a37118b0612cd1adfc8e493_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5584bfa0604469f35797372b60f80304053dee4cc403ff65cdaa60e59de29d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5584bfa0604469f35797372b60f80304053dee4cc403ff65cdaa60e59de29d9e->enter($__internal_5584bfa0604469f35797372b60f80304053dee4cc403ff65cdaa60e59de29d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_797d04232ac2677243a0d67bb01a5b72bb6d271e8de66173fad92c79e7ef73af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797d04232ac2677243a0d67bb01a5b72bb6d271e8de66173fad92c79e7ef73af->enter($__internal_797d04232ac2677243a0d67bb01a5b72bb6d271e8de66173fad92c79e7ef73af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_797d04232ac2677243a0d67bb01a5b72bb6d271e8de66173fad92c79e7ef73af->leave($__internal_797d04232ac2677243a0d67bb01a5b72bb6d271e8de66173fad92c79e7ef73af_prof);

        
        $__internal_5584bfa0604469f35797372b60f80304053dee4cc403ff65cdaa60e59de29d9e->leave($__internal_5584bfa0604469f35797372b60f80304053dee4cc403ff65cdaa60e59de29d9e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2633c004f71bdd95e20a0e938cec9f1ff782d8af97342f8bc7b25717bd55377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2633c004f71bdd95e20a0e938cec9f1ff782d8af97342f8bc7b25717bd55377->enter($__internal_c2633c004f71bdd95e20a0e938cec9f1ff782d8af97342f8bc7b25717bd55377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df46c95eb64c525cdab6449c23d43c19057a65faee52d951c9bf7ece3b1ba558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df46c95eb64c525cdab6449c23d43c19057a65faee52d951c9bf7ece3b1ba558->enter($__internal_df46c95eb64c525cdab6449c23d43c19057a65faee52d951c9bf7ece3b1ba558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 100
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
        
        $__internal_df46c95eb64c525cdab6449c23d43c19057a65faee52d951c9bf7ece3b1ba558->leave($__internal_df46c95eb64c525cdab6449c23d43c19057a65faee52d951c9bf7ece3b1ba558_prof);

        
        $__internal_c2633c004f71bdd95e20a0e938cec9f1ff782d8af97342f8bc7b25717bd55377->leave($__internal_c2633c004f71bdd95e20a0e938cec9f1ff782d8af97342f8bc7b25717bd55377_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a2ff23c984f82a85b9f8e17007838123efee7f607446bd27a552a6bf0ba7394a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ff23c984f82a85b9f8e17007838123efee7f607446bd27a552a6bf0ba7394a->enter($__internal_a2ff23c984f82a85b9f8e17007838123efee7f607446bd27a552a6bf0ba7394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_8fd965cb32e311c57182c3f97b56b7996a017db2254e717542f30e5fc46e3b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd965cb32e311c57182c3f97b56b7996a017db2254e717542f30e5fc46e3b6c->enter($__internal_8fd965cb32e311c57182c3f97b56b7996a017db2254e717542f30e5fc46e3b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
";
        // line 43
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clinica_pani_vistavisites");
        echo "\">Llistat de Visites</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_8fd965cb32e311c57182c3f97b56b7996a017db2254e717542f30e5fc46e3b6c->leave($__internal_8fd965cb32e311c57182c3f97b56b7996a017db2254e717542f30e5fc46e3b6c_prof);

        
        $__internal_a2ff23c984f82a85b9f8e17007838123efee7f607446bd27a552a6bf0ba7394a->leave($__internal_a2ff23c984f82a85b9f8e17007838123efee7f607446bd27a552a6bf0ba7394a_prof);

    }

    // line 51
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_283cac4906ebaa64b5a505d65cae312714e09f4d0b2e63e439a7e1d4c2326a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283cac4906ebaa64b5a505d65cae312714e09f4d0b2e63e439a7e1d4c2326a72->enter($__internal_283cac4906ebaa64b5a505d65cae312714e09f4d0b2e63e439a7e1d4c2326a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d4e65fc221d6a0ff7f0b113349669092420190c0ba8069ad7f20b4254b8d328d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e65fc221d6a0ff7f0b113349669092420190c0ba8069ad7f20b4254b8d328d->enter($__internal_d4e65fc221d6a0ff7f0b113349669092420190c0ba8069ad7f20b4254b8d328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 52
        echo "              <div class=\"container\">

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
        
        $__internal_d4e65fc221d6a0ff7f0b113349669092420190c0ba8069ad7f20b4254b8d328d->leave($__internal_d4e65fc221d6a0ff7f0b113349669092420190c0ba8069ad7f20b4254b8d328d_prof);

        
        $__internal_283cac4906ebaa64b5a505d65cae312714e09f4d0b2e63e439a7e1d4c2326a72->leave($__internal_283cac4906ebaa64b5a505d65cae312714e09f4d0b2e63e439a7e1d4c2326a72_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31c9109700997f1ffa5e2662429556bc559eda480331be04b191b057ec2db33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c9109700997f1ffa5e2662429556bc559eda480331be04b191b057ec2db33e->enter($__internal_31c9109700997f1ffa5e2662429556bc559eda480331be04b191b057ec2db33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4576c995839f877c1c58f44d7c1ba0b45b7f31623747e86d7b90478c4b4268d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4576c995839f877c1c58f44d7c1ba0b45b7f31623747e86d7b90478c4b4268d8->enter($__internal_4576c995839f877c1c58f44d7c1ba0b45b7f31623747e86d7b90478c4b4268d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "                <!-- jQuery -->
                <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_4576c995839f877c1c58f44d7c1ba0b45b7f31623747e86d7b90478c4b4268d8->leave($__internal_4576c995839f877c1c58f44d7c1ba0b45b7f31623747e86d7b90478c4b4268d8_prof);

        
        $__internal_31c9109700997f1ffa5e2662429556bc559eda480331be04b191b057ec2db33e->leave($__internal_31c9109700997f1ffa5e2662429556bc559eda480331be04b191b057ec2db33e_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  292 => 116,  286 => 113,  283 => 112,  274 => 111,  217 => 52,  208 => 51,  190 => 43,  185 => 37,  176 => 31,  171 => 28,  162 => 27,  142 => 100,  140 => 51,  137 => 50,  135 => 27,  132 => 26,  123 => 25,  104 => 13,  98 => 10,  95 => 9,  86 => 8,  68 => 7,  55 => 118,  52 => 111,  50 => 25,  45 => 22,  43 => 8,  39 => 7,  31 => 1,);
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
{#                                <li><a href=\"{{ path('clinica_pani_vistapacient') }}\">Pacients</a>
                                </li>
                                <li><a href=\"{{ path('clinica_pani_vistavisita') }}\">Visites</a>
                                </li>#}
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

", "clinicaPaniBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/index.html.twig");
    }
}
