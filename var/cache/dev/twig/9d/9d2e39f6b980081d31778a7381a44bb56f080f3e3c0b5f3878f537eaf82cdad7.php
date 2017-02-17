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
        $__internal_bcc8363e263cb66e8341e2a49c4c496b99d5c95a21a8a08b88fbaa1027a10ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc8363e263cb66e8341e2a49c4c496b99d5c95a21a8a08b88fbaa1027a10ec5->enter($__internal_bcc8363e263cb66e8341e2a49c4c496b99d5c95a21a8a08b88fbaa1027a10ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_baba10c7f707ed6364daebde57618c65ba3d8cf6a047fbf19cd4691f25c2b1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baba10c7f707ed6364daebde57618c65ba3d8cf6a047fbf19cd4691f25c2b1d8->enter($__internal_baba10c7f707ed6364daebde57618c65ba3d8cf6a047fbf19cd4691f25c2b1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc8363e263cb66e8341e2a49c4c496b99d5c95a21a8a08b88fbaa1027a10ec5->leave($__internal_bcc8363e263cb66e8341e2a49c4c496b99d5c95a21a8a08b88fbaa1027a10ec5_prof);

        
        $__internal_baba10c7f707ed6364daebde57618c65ba3d8cf6a047fbf19cd4691f25c2b1d8->leave($__internal_baba10c7f707ed6364daebde57618c65ba3d8cf6a047fbf19cd4691f25c2b1d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc6354fe7ccc527c05ab703e26d112fcb80d6be7d7e0de3458396f3aaf7b102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc6354fe7ccc527c05ab703e26d112fcb80d6be7d7e0de3458396f3aaf7b102->enter($__internal_5dc6354fe7ccc527c05ab703e26d112fcb80d6be7d7e0de3458396f3aaf7b102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46439ef7ac6152ef0f833e9db7c3376b4daf9e17dcacaa012e0d2d7fda9b7ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46439ef7ac6152ef0f833e9db7c3376b4daf9e17dcacaa012e0d2d7fda9b7ecc->enter($__internal_46439ef7ac6152ef0f833e9db7c3376b4daf9e17dcacaa012e0d2d7fda9b7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_46439ef7ac6152ef0f833e9db7c3376b4daf9e17dcacaa012e0d2d7fda9b7ecc->leave($__internal_46439ef7ac6152ef0f833e9db7c3376b4daf9e17dcacaa012e0d2d7fda9b7ecc_prof);

        
        $__internal_5dc6354fe7ccc527c05ab703e26d112fcb80d6be7d7e0de3458396f3aaf7b102->leave($__internal_5dc6354fe7ccc527c05ab703e26d112fcb80d6be7d7e0de3458396f3aaf7b102_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b841cf6d0e2fefe681f232b20556185aec06a81328ec2c465a4f10f422d35cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b841cf6d0e2fefe681f232b20556185aec06a81328ec2c465a4f10f422d35cf2->enter($__internal_b841cf6d0e2fefe681f232b20556185aec06a81328ec2c465a4f10f422d35cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_979e801a2e259e1872a3b79a49555a9119740e4fc710541e5e8285da2c77d5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979e801a2e259e1872a3b79a49555a9119740e4fc710541e5e8285da2c77d5bd->enter($__internal_979e801a2e259e1872a3b79a49555a9119740e4fc710541e5e8285da2c77d5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_979e801a2e259e1872a3b79a49555a9119740e4fc710541e5e8285da2c77d5bd->leave($__internal_979e801a2e259e1872a3b79a49555a9119740e4fc710541e5e8285da2c77d5bd_prof);

        
        $__internal_b841cf6d0e2fefe681f232b20556185aec06a81328ec2c465a4f10f422d35cf2->leave($__internal_b841cf6d0e2fefe681f232b20556185aec06a81328ec2c465a4f10f422d35cf2_prof);

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
