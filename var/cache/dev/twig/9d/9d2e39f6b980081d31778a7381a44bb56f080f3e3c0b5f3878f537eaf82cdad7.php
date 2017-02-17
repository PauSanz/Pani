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
        $__internal_92a7f31fc964e1fa90af8419a3d46012d39489ecdb354b1f9d1fb381cf692f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a7f31fc964e1fa90af8419a3d46012d39489ecdb354b1f9d1fb381cf692f77->enter($__internal_92a7f31fc964e1fa90af8419a3d46012d39489ecdb354b1f9d1fb381cf692f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6a147e490d73fbb684e9efb40f827b1883cfc8aebb0b9eeb3874aaab33ec2206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a147e490d73fbb684e9efb40f827b1883cfc8aebb0b9eeb3874aaab33ec2206->enter($__internal_6a147e490d73fbb684e9efb40f827b1883cfc8aebb0b9eeb3874aaab33ec2206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a7f31fc964e1fa90af8419a3d46012d39489ecdb354b1f9d1fb381cf692f77->leave($__internal_92a7f31fc964e1fa90af8419a3d46012d39489ecdb354b1f9d1fb381cf692f77_prof);

        
        $__internal_6a147e490d73fbb684e9efb40f827b1883cfc8aebb0b9eeb3874aaab33ec2206->leave($__internal_6a147e490d73fbb684e9efb40f827b1883cfc8aebb0b9eeb3874aaab33ec2206_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d31a19aa69f2199acaa646b630f90b74bdbb33a5da59678ff6766bfcccd6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d31a19aa69f2199acaa646b630f90b74bdbb33a5da59678ff6766bfcccd6c8->enter($__internal_74d31a19aa69f2199acaa646b630f90b74bdbb33a5da59678ff6766bfcccd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acb1be0f3e3bea0d23ed692ee0795561cfe22258e7e612d1b939fd0d8580962f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb1be0f3e3bea0d23ed692ee0795561cfe22258e7e612d1b939fd0d8580962f->enter($__internal_acb1be0f3e3bea0d23ed692ee0795561cfe22258e7e612d1b939fd0d8580962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_acb1be0f3e3bea0d23ed692ee0795561cfe22258e7e612d1b939fd0d8580962f->leave($__internal_acb1be0f3e3bea0d23ed692ee0795561cfe22258e7e612d1b939fd0d8580962f_prof);

        
        $__internal_74d31a19aa69f2199acaa646b630f90b74bdbb33a5da59678ff6766bfcccd6c8->leave($__internal_74d31a19aa69f2199acaa646b630f90b74bdbb33a5da59678ff6766bfcccd6c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8377ed5806329ae7da38352b7ecb829b825590c491ce415ac792d380596cf493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8377ed5806329ae7da38352b7ecb829b825590c491ce415ac792d380596cf493->enter($__internal_8377ed5806329ae7da38352b7ecb829b825590c491ce415ac792d380596cf493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2e945929d1b0275143ffe298eae204304c416a66df6394b8e8a5655fb369080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e945929d1b0275143ffe298eae204304c416a66df6394b8e8a5655fb369080->enter($__internal_a2e945929d1b0275143ffe298eae204304c416a66df6394b8e8a5655fb369080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2e945929d1b0275143ffe298eae204304c416a66df6394b8e8a5655fb369080->leave($__internal_a2e945929d1b0275143ffe298eae204304c416a66df6394b8e8a5655fb369080_prof);

        
        $__internal_8377ed5806329ae7da38352b7ecb829b825590c491ce415ac792d380596cf493->leave($__internal_8377ed5806329ae7da38352b7ecb829b825590c491ce415ac792d380596cf493_prof);

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
