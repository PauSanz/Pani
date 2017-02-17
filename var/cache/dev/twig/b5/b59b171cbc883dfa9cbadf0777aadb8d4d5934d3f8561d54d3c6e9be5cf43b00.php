<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b61b6d4b2311c6a1b78b3f98bdff4cbcf7218a103aabcdd7a573ad5b5daaf7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_2464fe32d4bd2bc2e0018919e7e857fddd326e9b2d9ee68713394fc15581128d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2464fe32d4bd2bc2e0018919e7e857fddd326e9b2d9ee68713394fc15581128d->enter($__internal_2464fe32d4bd2bc2e0018919e7e857fddd326e9b2d9ee68713394fc15581128d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b8ba32c69384ae863bb3082becfa2056432fde8816736dd7d77d3a7acb650c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ba32c69384ae863bb3082becfa2056432fde8816736dd7d77d3a7acb650c36->enter($__internal_b8ba32c69384ae863bb3082becfa2056432fde8816736dd7d77d3a7acb650c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2464fe32d4bd2bc2e0018919e7e857fddd326e9b2d9ee68713394fc15581128d->leave($__internal_2464fe32d4bd2bc2e0018919e7e857fddd326e9b2d9ee68713394fc15581128d_prof);

        
        $__internal_b8ba32c69384ae863bb3082becfa2056432fde8816736dd7d77d3a7acb650c36->leave($__internal_b8ba32c69384ae863bb3082becfa2056432fde8816736dd7d77d3a7acb650c36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71afc39ac6b9bfb0db334a8f342ea1f7bd04747919dfa2e52a50a225d546716f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71afc39ac6b9bfb0db334a8f342ea1f7bd04747919dfa2e52a50a225d546716f->enter($__internal_71afc39ac6b9bfb0db334a8f342ea1f7bd04747919dfa2e52a50a225d546716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03f9528ab945fda423502bbc8075d98f534f71c26447873fcbd0f58187247a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f9528ab945fda423502bbc8075d98f534f71c26447873fcbd0f58187247a71->enter($__internal_03f9528ab945fda423502bbc8075d98f534f71c26447873fcbd0f58187247a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_03f9528ab945fda423502bbc8075d98f534f71c26447873fcbd0f58187247a71->leave($__internal_03f9528ab945fda423502bbc8075d98f534f71c26447873fcbd0f58187247a71_prof);

        
        $__internal_71afc39ac6b9bfb0db334a8f342ea1f7bd04747919dfa2e52a50a225d546716f->leave($__internal_71afc39ac6b9bfb0db334a8f342ea1f7bd04747919dfa2e52a50a225d546716f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa15390e734465c2e1b4ee937d804a30b8546c5164a0dfb27fcb5bd59657a827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa15390e734465c2e1b4ee937d804a30b8546c5164a0dfb27fcb5bd59657a827->enter($__internal_fa15390e734465c2e1b4ee937d804a30b8546c5164a0dfb27fcb5bd59657a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_114ed33b29414625a77b054ced1b4c109b9d6503a3487414bad67505bb14f478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114ed33b29414625a77b054ced1b4c109b9d6503a3487414bad67505bb14f478->enter($__internal_114ed33b29414625a77b054ced1b4c109b9d6503a3487414bad67505bb14f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_114ed33b29414625a77b054ced1b4c109b9d6503a3487414bad67505bb14f478->leave($__internal_114ed33b29414625a77b054ced1b4c109b9d6503a3487414bad67505bb14f478_prof);

        
        $__internal_fa15390e734465c2e1b4ee937d804a30b8546c5164a0dfb27fcb5bd59657a827->leave($__internal_fa15390e734465c2e1b4ee937d804a30b8546c5164a0dfb27fcb5bd59657a827_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e23cb085028a3a6dc1b9226338efc3e6deb81254b1ae525fb11714aa45bed009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23cb085028a3a6dc1b9226338efc3e6deb81254b1ae525fb11714aa45bed009->enter($__internal_e23cb085028a3a6dc1b9226338efc3e6deb81254b1ae525fb11714aa45bed009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64f3bf6b8bfcd180d1104d2be2a05e5fecd6ded508d7c0e814eb34ae487abda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f3bf6b8bfcd180d1104d2be2a05e5fecd6ded508d7c0e814eb34ae487abda9->enter($__internal_64f3bf6b8bfcd180d1104d2be2a05e5fecd6ded508d7c0e814eb34ae487abda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_64f3bf6b8bfcd180d1104d2be2a05e5fecd6ded508d7c0e814eb34ae487abda9->leave($__internal_64f3bf6b8bfcd180d1104d2be2a05e5fecd6ded508d7c0e814eb34ae487abda9_prof);

        
        $__internal_e23cb085028a3a6dc1b9226338efc3e6deb81254b1ae525fb11714aa45bed009->leave($__internal_e23cb085028a3a6dc1b9226338efc3e6deb81254b1ae525fb11714aa45bed009_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
