<?php

/* @clinicaPani/Default/404.html.twig */
class __TwigTemplate_e7d91ed7c26fc51bc7ed303fe1bf1c5f1eac134154ac2070fcc2dab9faf1b17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MusicShopFrontendBundle:Default:index.html.twig ", "@clinicaPani/Default/404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MusicShopFrontendBundle:Default:index.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5843fe93093b960ef50fb5a9b6775fbe5d2e0c21c9ae026dde88f71e145a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5843fe93093b960ef50fb5a9b6775fbe5d2e0c21c9ae026dde88f71e145a8f->enter($__internal_7f5843fe93093b960ef50fb5a9b6775fbe5d2e0c21c9ae026dde88f71e145a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $__internal_fadebaa81e8b8c272ad0f1d6616896fcf428c74becc24bc0a817b009036197f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadebaa81e8b8c272ad0f1d6616896fcf428c74becc24bc0a817b009036197f1->enter($__internal_fadebaa81e8b8c272ad0f1d6616896fcf428c74becc24bc0a817b009036197f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@clinicaPani/Default/404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5843fe93093b960ef50fb5a9b6775fbe5d2e0c21c9ae026dde88f71e145a8f->leave($__internal_7f5843fe93093b960ef50fb5a9b6775fbe5d2e0c21c9ae026dde88f71e145a8f_prof);

        
        $__internal_fadebaa81e8b8c272ad0f1d6616896fcf428c74becc24bc0a817b009036197f1->leave($__internal_fadebaa81e8b8c272ad0f1d6616896fcf428c74becc24bc0a817b009036197f1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_89bbd79e0108945379c5ac96e222aaf290308c60d88dbcb6b52b2cdd6fcba47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bbd79e0108945379c5ac96e222aaf290308c60d88dbcb6b52b2cdd6fcba47a->enter($__internal_89bbd79e0108945379c5ac96e222aaf290308c60d88dbcb6b52b2cdd6fcba47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7995893d4d5af3f562a800b585dfc9037bfee67ebde748d63836e12384eddb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7995893d4d5af3f562a800b585dfc9037bfee67ebde748d63836e12384eddb2c->enter($__internal_7995893d4d5af3f562a800b585dfc9037bfee67ebde748d63836e12384eddb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ups!";
        
        $__internal_7995893d4d5af3f562a800b585dfc9037bfee67ebde748d63836e12384eddb2c->leave($__internal_7995893d4d5af3f562a800b585dfc9037bfee67ebde748d63836e12384eddb2c_prof);

        
        $__internal_89bbd79e0108945379c5ac96e222aaf290308c60d88dbcb6b52b2cdd6fcba47a->leave($__internal_89bbd79e0108945379c5ac96e222aaf290308c60d88dbcb6b52b2cdd6fcba47a_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_48c5d5e56a4941f7059335cb105d92ed3a3980dc604ded5b3a4119acf0a1aae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c5d5e56a4941f7059335cb105d92ed3a3980dc604ded5b3a4119acf0a1aae1->enter($__internal_48c5d5e56a4941f7059335cb105d92ed3a3980dc604ded5b3a4119acf0a1aae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4fea583d64bc5037d10176b40b6bcb8e282b5a8ccadef34007d620f1c51b46ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fea583d64bc5037d10176b40b6bcb8e282b5a8ccadef34007d620f1c51b46ad->enter($__internal_4fea583d64bc5037d10176b40b6bcb8e282b5a8ccadef34007d620f1c51b46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_4fea583d64bc5037d10176b40b6bcb8e282b5a8ccadef34007d620f1c51b46ad->leave($__internal_4fea583d64bc5037d10176b40b6bcb8e282b5a8ccadef34007d620f1c51b46ad_prof);

        
        $__internal_48c5d5e56a4941f7059335cb105d92ed3a3980dc604ded5b3a4119acf0a1aae1->leave($__internal_48c5d5e56a4941f7059335cb105d92ed3a3980dc604ded5b3a4119acf0a1aae1_prof);

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
        return new Twig_Source("{% extends \"MusicShopFrontendBundle:Default:index.html.twig \" %}
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
