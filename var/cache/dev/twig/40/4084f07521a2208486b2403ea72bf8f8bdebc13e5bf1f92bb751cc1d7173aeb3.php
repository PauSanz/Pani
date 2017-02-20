<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4605bf05efe8f32a08493f79fd99b767097142122862dfe55af220441a895efe extends Twig_Template
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
        $__internal_f8c8b4369a088bebf8bd24935424a8a245b4f48a6a50294b30930398b55fc818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c8b4369a088bebf8bd24935424a8a245b4f48a6a50294b30930398b55fc818->enter($__internal_f8c8b4369a088bebf8bd24935424a8a245b4f48a6a50294b30930398b55fc818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e815e743032b8539b4ea97921ffe05866dea0cf20c8652807199c6128dcbb3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e815e743032b8539b4ea97921ffe05866dea0cf20c8652807199c6128dcbb3ff->enter($__internal_e815e743032b8539b4ea97921ffe05866dea0cf20c8652807199c6128dcbb3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c8b4369a088bebf8bd24935424a8a245b4f48a6a50294b30930398b55fc818->leave($__internal_f8c8b4369a088bebf8bd24935424a8a245b4f48a6a50294b30930398b55fc818_prof);

        
        $__internal_e815e743032b8539b4ea97921ffe05866dea0cf20c8652807199c6128dcbb3ff->leave($__internal_e815e743032b8539b4ea97921ffe05866dea0cf20c8652807199c6128dcbb3ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef5f7758e3aa9b3d30162604c4090f79b179273bf20c7b6896dc2c3754febf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef5f7758e3aa9b3d30162604c4090f79b179273bf20c7b6896dc2c3754febf8->enter($__internal_0ef5f7758e3aa9b3d30162604c4090f79b179273bf20c7b6896dc2c3754febf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bbd1adff8752a1c1026d4cbf5db299060ffd1ecf18923d64e2a1545aa0e3fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbd1adff8752a1c1026d4cbf5db299060ffd1ecf18923d64e2a1545aa0e3fa8->enter($__internal_3bbd1adff8752a1c1026d4cbf5db299060ffd1ecf18923d64e2a1545aa0e3fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3bbd1adff8752a1c1026d4cbf5db299060ffd1ecf18923d64e2a1545aa0e3fa8->leave($__internal_3bbd1adff8752a1c1026d4cbf5db299060ffd1ecf18923d64e2a1545aa0e3fa8_prof);

        
        $__internal_0ef5f7758e3aa9b3d30162604c4090f79b179273bf20c7b6896dc2c3754febf8->leave($__internal_0ef5f7758e3aa9b3d30162604c4090f79b179273bf20c7b6896dc2c3754febf8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_094726a541a67a87c730788fb03240c09955ccd05e331205f9ae3f039ec9967b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094726a541a67a87c730788fb03240c09955ccd05e331205f9ae3f039ec9967b->enter($__internal_094726a541a67a87c730788fb03240c09955ccd05e331205f9ae3f039ec9967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2c55443a9f02535c66a797f3f9da5a4a94bafd13a11eba91d47363f24109298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c55443a9f02535c66a797f3f9da5a4a94bafd13a11eba91d47363f24109298->enter($__internal_c2c55443a9f02535c66a797f3f9da5a4a94bafd13a11eba91d47363f24109298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_c2c55443a9f02535c66a797f3f9da5a4a94bafd13a11eba91d47363f24109298->leave($__internal_c2c55443a9f02535c66a797f3f9da5a4a94bafd13a11eba91d47363f24109298_prof);

        
        $__internal_094726a541a67a87c730788fb03240c09955ccd05e331205f9ae3f039ec9967b->leave($__internal_094726a541a67a87c730788fb03240c09955ccd05e331205f9ae3f039ec9967b_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
