<?php

/* @clinicaPani/Default/404.html.twig */
class __TwigTemplate_e7d91ed7c26fc51bc7ed303fe1bf1c5f1eac134154ac2070fcc2dab9faf1b17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("clinicaPaniBundle:Default:index.html.twig ", "@clinicaPani/Default/404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "clinicaPaniBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b63d76d1ef086d9a59089f02a811d40cb4176783fca274bdb470db1da4b6250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b63d76d1ef086d9a59089f02a811d40cb4176783fca274bdb470db1da4b6250->enter($__internal_2b63d76d1ef086d9a59089f02a811d40cb4176783fca274bdb470db1da4b6250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $__internal_4f61bdc0caf42b31307144258b2036203823fd28ca9e59a939d7ea867dd52e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f61bdc0caf42b31307144258b2036203823fd28ca9e59a939d7ea867dd52e9f->enter($__internal_4f61bdc0caf42b31307144258b2036203823fd28ca9e59a939d7ea867dd52e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b63d76d1ef086d9a59089f02a811d40cb4176783fca274bdb470db1da4b6250->leave($__internal_2b63d76d1ef086d9a59089f02a811d40cb4176783fca274bdb470db1da4b6250_prof);

        
        $__internal_4f61bdc0caf42b31307144258b2036203823fd28ca9e59a939d7ea867dd52e9f->leave($__internal_4f61bdc0caf42b31307144258b2036203823fd28ca9e59a939d7ea867dd52e9f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_35bce00f7e51a3169b655e9a95f389a274f5771d24b2d5fa6613bb2241aa5069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35bce00f7e51a3169b655e9a95f389a274f5771d24b2d5fa6613bb2241aa5069->enter($__internal_35bce00f7e51a3169b655e9a95f389a274f5771d24b2d5fa6613bb2241aa5069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_553180370ed4670341217d4671233f460a3027e6333f6f8349ba658bdd4159cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553180370ed4670341217d4671233f460a3027e6333f6f8349ba658bdd4159cd->enter($__internal_553180370ed4670341217d4671233f460a3027e6333f6f8349ba658bdd4159cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_553180370ed4670341217d4671233f460a3027e6333f6f8349ba658bdd4159cd->leave($__internal_553180370ed4670341217d4671233f460a3027e6333f6f8349ba658bdd4159cd_prof);

        
        $__internal_35bce00f7e51a3169b655e9a95f389a274f5771d24b2d5fa6613bb2241aa5069->leave($__internal_35bce00f7e51a3169b655e9a95f389a274f5771d24b2d5fa6613bb2241aa5069_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4dcbf376ec1f53d1b1566920dddbb075213ec6d9d3985287afff9bf982aeeffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcbf376ec1f53d1b1566920dddbb075213ec6d9d3985287afff9bf982aeeffe->enter($__internal_4dcbf376ec1f53d1b1566920dddbb075213ec6d9d3985287afff9bf982aeeffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_2292464756832fe064512e20dabf386b1af3d50fcad9185142025b717c6ed0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2292464756832fe064512e20dabf386b1af3d50fcad9185142025b717c6ed0b0->enter($__internal_2292464756832fe064512e20dabf386b1af3d50fcad9185142025b717c6ed0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">Ups!</h4>
            </div>
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <p>";
        // line 11
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_2292464756832fe064512e20dabf386b1af3d50fcad9185142025b717c6ed0b0->leave($__internal_2292464756832fe064512e20dabf386b1af3d50fcad9185142025b717c6ed0b0_prof);

        
        $__internal_4dcbf376ec1f53d1b1566920dddbb075213ec6d9d3985287afff9bf982aeeffe->leave($__internal_4dcbf376ec1f53d1b1566920dddbb075213ec6d9d3985287afff9bf982aeeffe_prof);

    }

    public function getTemplateName()
    {
        return "@clinicaPani/Default/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"clinicaPaniBundle:Default:index.html.twig \" %}
{% block title %}Ups!{% endblock %}
{% block page_content %}
    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <h4 class=\"\">Ups!</h4>
            </div>
            <div class=\"col-sm-12 col-lg-12 col-md-12\">
                <p>{{ message }}</p>
            </div>
        </div>
    </div>
{% endblock %}
", "@clinicaPani/Default/404.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\src\\clinicaPaniBundle\\Resources\\views\\Default\\404.html.twig");
    }
}
