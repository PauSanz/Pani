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
        $__internal_b316ba33013ecab7956ffdf8ba91ac3a126919f6edb6b0cb4793228f667c9956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b316ba33013ecab7956ffdf8ba91ac3a126919f6edb6b0cb4793228f667c9956->enter($__internal_b316ba33013ecab7956ffdf8ba91ac3a126919f6edb6b0cb4793228f667c9956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d2cc9fdaa3dfc97e19046005d8b87c88dce6328e72461b3bb3a4afe892b5c4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cc9fdaa3dfc97e19046005d8b87c88dce6328e72461b3bb3a4afe892b5c4d2->enter($__internal_d2cc9fdaa3dfc97e19046005d8b87c88dce6328e72461b3bb3a4afe892b5c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b316ba33013ecab7956ffdf8ba91ac3a126919f6edb6b0cb4793228f667c9956->leave($__internal_b316ba33013ecab7956ffdf8ba91ac3a126919f6edb6b0cb4793228f667c9956_prof);

        
        $__internal_d2cc9fdaa3dfc97e19046005d8b87c88dce6328e72461b3bb3a4afe892b5c4d2->leave($__internal_d2cc9fdaa3dfc97e19046005d8b87c88dce6328e72461b3bb3a4afe892b5c4d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e19239b78cc4bec2603846009b27586e998139af99612fda0af2d6ae37746f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e19239b78cc4bec2603846009b27586e998139af99612fda0af2d6ae37746f->enter($__internal_02e19239b78cc4bec2603846009b27586e998139af99612fda0af2d6ae37746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_723b8756712d1282f558bdfebbe9ed0792efed268aece626eeaf576438e311a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723b8756712d1282f558bdfebbe9ed0792efed268aece626eeaf576438e311a4->enter($__internal_723b8756712d1282f558bdfebbe9ed0792efed268aece626eeaf576438e311a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_723b8756712d1282f558bdfebbe9ed0792efed268aece626eeaf576438e311a4->leave($__internal_723b8756712d1282f558bdfebbe9ed0792efed268aece626eeaf576438e311a4_prof);

        
        $__internal_02e19239b78cc4bec2603846009b27586e998139af99612fda0af2d6ae37746f->leave($__internal_02e19239b78cc4bec2603846009b27586e998139af99612fda0af2d6ae37746f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b3530dde592b83329375362836042fb70ee23e59b9f925d680a20192d364318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3530dde592b83329375362836042fb70ee23e59b9f925d680a20192d364318->enter($__internal_3b3530dde592b83329375362836042fb70ee23e59b9f925d680a20192d364318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1c07e1c88afceeae97f669bb3195fb324fc9b74bb5af25a5b814dab9cdf21d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c07e1c88afceeae97f669bb3195fb324fc9b74bb5af25a5b814dab9cdf21d4->enter($__internal_e1c07e1c88afceeae97f669bb3195fb324fc9b74bb5af25a5b814dab9cdf21d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1c07e1c88afceeae97f669bb3195fb324fc9b74bb5af25a5b814dab9cdf21d4->leave($__internal_e1c07e1c88afceeae97f669bb3195fb324fc9b74bb5af25a5b814dab9cdf21d4_prof);

        
        $__internal_3b3530dde592b83329375362836042fb70ee23e59b9f925d680a20192d364318->leave($__internal_3b3530dde592b83329375362836042fb70ee23e59b9f925d680a20192d364318_prof);

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
