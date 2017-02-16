<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b1bcfde6f087e2b3592fd257514f324b78ae3af18099a1b998900c8777af717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1bcfde6f087e2b3592fd257514f324b78ae3af18099a1b998900c8777af717->enter($__internal_2b1bcfde6f087e2b3592fd257514f324b78ae3af18099a1b998900c8777af717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_76891d980e3309d1dc6cef4e72a0fbf1a25bc4aacd761b49e21e97832a4afc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76891d980e3309d1dc6cef4e72a0fbf1a25bc4aacd761b49e21e97832a4afc5a->enter($__internal_76891d980e3309d1dc6cef4e72a0fbf1a25bc4aacd761b49e21e97832a4afc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1bcfde6f087e2b3592fd257514f324b78ae3af18099a1b998900c8777af717->leave($__internal_2b1bcfde6f087e2b3592fd257514f324b78ae3af18099a1b998900c8777af717_prof);

        
        $__internal_76891d980e3309d1dc6cef4e72a0fbf1a25bc4aacd761b49e21e97832a4afc5a->leave($__internal_76891d980e3309d1dc6cef4e72a0fbf1a25bc4aacd761b49e21e97832a4afc5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3da6d5d1dda4540076d3115469ce86959096f06b787a07327f8b2648d819cbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da6d5d1dda4540076d3115469ce86959096f06b787a07327f8b2648d819cbfe->enter($__internal_3da6d5d1dda4540076d3115469ce86959096f06b787a07327f8b2648d819cbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_959007e53da4400256a895355da538c6093f826e4f97dc8a13bbcd81798a84e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959007e53da4400256a895355da538c6093f826e4f97dc8a13bbcd81798a84e6->enter($__internal_959007e53da4400256a895355da538c6093f826e4f97dc8a13bbcd81798a84e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_959007e53da4400256a895355da538c6093f826e4f97dc8a13bbcd81798a84e6->leave($__internal_959007e53da4400256a895355da538c6093f826e4f97dc8a13bbcd81798a84e6_prof);

        
        $__internal_3da6d5d1dda4540076d3115469ce86959096f06b787a07327f8b2648d819cbfe->leave($__internal_3da6d5d1dda4540076d3115469ce86959096f06b787a07327f8b2648d819cbfe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12cb3407d31bc567c04c464df913e3c658ee828b7f870458d29e663a7a9e0a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cb3407d31bc567c04c464df913e3c658ee828b7f870458d29e663a7a9e0a2a->enter($__internal_12cb3407d31bc567c04c464df913e3c658ee828b7f870458d29e663a7a9e0a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7610e9ccb2c87513003756fcbd32edfa4e41ecedcb022c7dd20e2a61a1c7d4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7610e9ccb2c87513003756fcbd32edfa4e41ecedcb022c7dd20e2a61a1c7d4fe->enter($__internal_7610e9ccb2c87513003756fcbd32edfa4e41ecedcb022c7dd20e2a61a1c7d4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7610e9ccb2c87513003756fcbd32edfa4e41ecedcb022c7dd20e2a61a1c7d4fe->leave($__internal_7610e9ccb2c87513003756fcbd32edfa4e41ecedcb022c7dd20e2a61a1c7d4fe_prof);

        
        $__internal_12cb3407d31bc567c04c464df913e3c658ee828b7f870458d29e663a7a9e0a2a->leave($__internal_12cb3407d31bc567c04c464df913e3c658ee828b7f870458d29e663a7a9e0a2a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c48e7f17cd7b4032f08f1b3b9de163b9deedc9a345e700d17ac4bb7c60eb1f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48e7f17cd7b4032f08f1b3b9de163b9deedc9a345e700d17ac4bb7c60eb1f45->enter($__internal_c48e7f17cd7b4032f08f1b3b9de163b9deedc9a345e700d17ac4bb7c60eb1f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94352224f201647c919d889680084b08c5e55ed3dbe6fd75584c31870dbd6b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94352224f201647c919d889680084b08c5e55ed3dbe6fd75584c31870dbd6b8e->enter($__internal_94352224f201647c919d889680084b08c5e55ed3dbe6fd75584c31870dbd6b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_94352224f201647c919d889680084b08c5e55ed3dbe6fd75584c31870dbd6b8e->leave($__internal_94352224f201647c919d889680084b08c5e55ed3dbe6fd75584c31870dbd6b8e_prof);

        
        $__internal_c48e7f17cd7b4032f08f1b3b9de163b9deedc9a345e700d17ac4bb7c60eb1f45->leave($__internal_c48e7f17cd7b4032f08f1b3b9de163b9deedc9a345e700d17ac4bb7c60eb1f45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
