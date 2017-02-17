<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2ebb90987bdd5b574901d6edc93fb47590ae08b0d8ea4947a9c936d191a84f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_603bfff498acf4e0fd90e208af676a98d0f11b99192f9392467e754b284ab200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603bfff498acf4e0fd90e208af676a98d0f11b99192f9392467e754b284ab200->enter($__internal_603bfff498acf4e0fd90e208af676a98d0f11b99192f9392467e754b284ab200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2034d5c600989462638300b07ec3a3f26b69dfc7aa952fe5dc59b80d08dce234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2034d5c600989462638300b07ec3a3f26b69dfc7aa952fe5dc59b80d08dce234->enter($__internal_2034d5c600989462638300b07ec3a3f26b69dfc7aa952fe5dc59b80d08dce234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603bfff498acf4e0fd90e208af676a98d0f11b99192f9392467e754b284ab200->leave($__internal_603bfff498acf4e0fd90e208af676a98d0f11b99192f9392467e754b284ab200_prof);

        
        $__internal_2034d5c600989462638300b07ec3a3f26b69dfc7aa952fe5dc59b80d08dce234->leave($__internal_2034d5c600989462638300b07ec3a3f26b69dfc7aa952fe5dc59b80d08dce234_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_155a2130c28ffa86a6feda97d82d51cefc7941414457c403488b0506cad6c2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155a2130c28ffa86a6feda97d82d51cefc7941414457c403488b0506cad6c2b0->enter($__internal_155a2130c28ffa86a6feda97d82d51cefc7941414457c403488b0506cad6c2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed2462da2b86b0b6e363fada91d2aa58cebfffd68fba4daf37ba452cb4ea71e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2462da2b86b0b6e363fada91d2aa58cebfffd68fba4daf37ba452cb4ea71e1->enter($__internal_ed2462da2b86b0b6e363fada91d2aa58cebfffd68fba4daf37ba452cb4ea71e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ed2462da2b86b0b6e363fada91d2aa58cebfffd68fba4daf37ba452cb4ea71e1->leave($__internal_ed2462da2b86b0b6e363fada91d2aa58cebfffd68fba4daf37ba452cb4ea71e1_prof);

        
        $__internal_155a2130c28ffa86a6feda97d82d51cefc7941414457c403488b0506cad6c2b0->leave($__internal_155a2130c28ffa86a6feda97d82d51cefc7941414457c403488b0506cad6c2b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71116c9161b182aed7670a508c3654b194a6b26a072cd2d7f40206860d234479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71116c9161b182aed7670a508c3654b194a6b26a072cd2d7f40206860d234479->enter($__internal_71116c9161b182aed7670a508c3654b194a6b26a072cd2d7f40206860d234479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acdcd1e05b21e0358326248a9dfa499ad67ff54880c12820f0085f2789508bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdcd1e05b21e0358326248a9dfa499ad67ff54880c12820f0085f2789508bc3->enter($__internal_acdcd1e05b21e0358326248a9dfa499ad67ff54880c12820f0085f2789508bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_acdcd1e05b21e0358326248a9dfa499ad67ff54880c12820f0085f2789508bc3->leave($__internal_acdcd1e05b21e0358326248a9dfa499ad67ff54880c12820f0085f2789508bc3_prof);

        
        $__internal_71116c9161b182aed7670a508c3654b194a6b26a072cd2d7f40206860d234479->leave($__internal_71116c9161b182aed7670a508c3654b194a6b26a072cd2d7f40206860d234479_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
