<?php

/* clinicaPaniBundle:Default:dtllsvisita.html.twig */
class __TwigTemplate_490fd22d9691728065e4e46b7bc71e2b67e79ecba38187ac75a682e85a30a079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_531d6302d3de51d3a830a5b787257bac0e3916ff18decbb68201051c6ed48dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531d6302d3de51d3a830a5b787257bac0e3916ff18decbb68201051c6ed48dfb->enter($__internal_531d6302d3de51d3a830a5b787257bac0e3916ff18decbb68201051c6ed48dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        $__internal_747a53c6377d0bc0ef124e5bc57e7a6a1af513f1d84a47bf01e4a5adcf6f69c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747a53c6377d0bc0ef124e5bc57e7a6a1af513f1d84a47bf01e4a5adcf6f69c1->enter($__internal_747a53c6377d0bc0ef124e5bc57e7a6a1af513f1d84a47bf01e4a5adcf6f69c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clinicaPaniBundle:Default:dtllsvisita.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_531d6302d3de51d3a830a5b787257bac0e3916ff18decbb68201051c6ed48dfb->leave($__internal_531d6302d3de51d3a830a5b787257bac0e3916ff18decbb68201051c6ed48dfb_prof);

        
        $__internal_747a53c6377d0bc0ef124e5bc57e7a6a1af513f1d84a47bf01e4a5adcf6f69c1->leave($__internal_747a53c6377d0bc0ef124e5bc57e7a6a1af513f1d84a47bf01e4a5adcf6f69c1_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7142e424fe05d1b3b6147d42abcb8a17b433f342bf69bfec031eb28e4c5bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7142e424fe05d1b3b6147d42abcb8a17b433f342bf69bfec031eb28e4c5bf4->enter($__internal_3e7142e424fe05d1b3b6147d42abcb8a17b433f342bf69bfec031eb28e4c5bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5835995ad1f926327b2f813be3f4855382c28cbfb75bd6d4eae406a5c8ee93ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5835995ad1f926327b2f813be3f4855382c28cbfb75bd6d4eae406a5c8ee93ce->enter($__internal_5835995ad1f926327b2f813be3f4855382c28cbfb75bd6d4eae406a5c8ee93ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clinica Pani";
        
        $__internal_5835995ad1f926327b2f813be3f4855382c28cbfb75bd6d4eae406a5c8ee93ce->leave($__internal_5835995ad1f926327b2f813be3f4855382c28cbfb75bd6d4eae406a5c8ee93ce_prof);

        
        $__internal_3e7142e424fe05d1b3b6147d42abcb8a17b433f342bf69bfec031eb28e4c5bf4->leave($__internal_3e7142e424fe05d1b3b6147d42abcb8a17b433f342bf69bfec031eb28e4c5bf4_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_af169ec36e5fb670e77c0ba8ed078e17a38849fadb32df7f4497459929b6f7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af169ec36e5fb670e77c0ba8ed078e17a38849fadb32df7f4497459929b6f7b9->enter($__internal_af169ec36e5fb670e77c0ba8ed078e17a38849fadb32df7f4497459929b6f7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f17119bb1e729aa0579725ea25efe6cbf6d493ddb9c069742475ec3ac37d6c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17119bb1e729aa0579725ea25efe6cbf6d493ddb9c069742475ec3ac37d6c2f->enter($__internal_f17119bb1e729aa0579725ea25efe6cbf6d493ddb9c069742475ec3ac37d6c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
        echo "</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "ref", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "data", array()), "d-m-Y"), "html", null, true);
        echo "</p>
                    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "hora", array()), "H:i:s"), "html", null, true);
        echo "</p>
                    <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "tipusvisita", array()), "tipus", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "descripcio", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "nom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "metgevisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "nom", array()), "html", null, true);
        echo "</p>                    
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "cognom", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visita"]) ? $context["visita"] : $this->getContext($context, "visita")), "pacientvisitat", array()), "dni", array()), "html", null, true);
        echo "</p>
                </div>
        </div>
    </div>
";
        
        $__internal_f17119bb1e729aa0579725ea25efe6cbf6d493ddb9c069742475ec3ac37d6c2f->leave($__internal_f17119bb1e729aa0579725ea25efe6cbf6d493ddb9c069742475ec3ac37d6c2f_prof);

        
        $__internal_af169ec36e5fb670e77c0ba8ed078e17a38849fadb32df7f4497459929b6f7b9->leave($__internal_af169ec36e5fb670e77c0ba8ed078e17a38849fadb32df7f4497459929b6f7b9_prof);

    }

    public function getTemplateName()
    {
        return "clinicaPaniBundle:Default:dtllsvisita.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  113 => 18,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  71 => 6,  66 => 3,  57 => 2,  39 => 1,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block title %}Clinica Pani{% endblock %}
{% block page_content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">{{ ref }}</h4>
            </div>
                <div class=\"col-sm-12 col-lg-12 col-md-12\">
                    <p>{{ visita.ref }}</p>
                    <p>{{ visita.data|date('d-m-Y') }}</p>
                    <p>{{ visita.hora|date('H:i:s') }}</p>
                    <p>{{ visita.tipusvisita.tipus }}</p>
                    <p>{{ visita.descripcio }}</p>
                    <p>{{ visita.metgevisitat.nom }}</p>
                    <p>{{ visita.metgevisitat.cognom }}</p>
                    <p>{{ visita.metgevisitat.dni }}</p>
                    <p>{{ visita.pacientvisitat.nom }}</p>                    
                    <p>{{ visita.pacientvisitat.cognom }}</p>
                    <p>{{ visita.pacientvisitat.dni }}</p>
                </div>
        </div>
    </div>
{% endblock %}", "clinicaPaniBundle:Default:dtllsvisita.html.twig", "C:\\xampp\\htdocs\\Pani-final\\src\\clinicaPaniBundle/Resources/views/Default/dtllsvisita.html.twig");
    }
}
