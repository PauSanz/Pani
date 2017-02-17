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
        $__internal_7c7d6e4a5c8a99596aab8d0cf7379b9d869fa699491579dfa5fd99cf70ca9ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7d6e4a5c8a99596aab8d0cf7379b9d869fa699491579dfa5fd99cf70ca9ce1->enter($__internal_7c7d6e4a5c8a99596aab8d0cf7379b9d869fa699491579dfa5fd99cf70ca9ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e91a53691fba0788f0d50657f559f12b40373999bfa278585f75ed05b63b256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91a53691fba0788f0d50657f559f12b40373999bfa278585f75ed05b63b256c->enter($__internal_e91a53691fba0788f0d50657f559f12b40373999bfa278585f75ed05b63b256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c7d6e4a5c8a99596aab8d0cf7379b9d869fa699491579dfa5fd99cf70ca9ce1->leave($__internal_7c7d6e4a5c8a99596aab8d0cf7379b9d869fa699491579dfa5fd99cf70ca9ce1_prof);

        
        $__internal_e91a53691fba0788f0d50657f559f12b40373999bfa278585f75ed05b63b256c->leave($__internal_e91a53691fba0788f0d50657f559f12b40373999bfa278585f75ed05b63b256c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0668d91c107ad17b2f1f913b36913d8f0f1d9c58bf9dc89a470d4e2620b4826a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0668d91c107ad17b2f1f913b36913d8f0f1d9c58bf9dc89a470d4e2620b4826a->enter($__internal_0668d91c107ad17b2f1f913b36913d8f0f1d9c58bf9dc89a470d4e2620b4826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_486dad65c76cb584d3b3b85e4cab8936e2df0eb8826538c5925648cdab32d0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486dad65c76cb584d3b3b85e4cab8936e2df0eb8826538c5925648cdab32d0a9->enter($__internal_486dad65c76cb584d3b3b85e4cab8936e2df0eb8826538c5925648cdab32d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_486dad65c76cb584d3b3b85e4cab8936e2df0eb8826538c5925648cdab32d0a9->leave($__internal_486dad65c76cb584d3b3b85e4cab8936e2df0eb8826538c5925648cdab32d0a9_prof);

        
        $__internal_0668d91c107ad17b2f1f913b36913d8f0f1d9c58bf9dc89a470d4e2620b4826a->leave($__internal_0668d91c107ad17b2f1f913b36913d8f0f1d9c58bf9dc89a470d4e2620b4826a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58f192fb961d486d6ee9d12613c5c9d9f3e5bc8c48ab9f7d29e314a2ec603620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f192fb961d486d6ee9d12613c5c9d9f3e5bc8c48ab9f7d29e314a2ec603620->enter($__internal_58f192fb961d486d6ee9d12613c5c9d9f3e5bc8c48ab9f7d29e314a2ec603620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_11fa7964773f526cc58274da3e8baaf73b058065b6c465ef10bbe777daf1e1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa7964773f526cc58274da3e8baaf73b058065b6c465ef10bbe777daf1e1dd->enter($__internal_11fa7964773f526cc58274da3e8baaf73b058065b6c465ef10bbe777daf1e1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_11fa7964773f526cc58274da3e8baaf73b058065b6c465ef10bbe777daf1e1dd->leave($__internal_11fa7964773f526cc58274da3e8baaf73b058065b6c465ef10bbe777daf1e1dd_prof);

        
        $__internal_58f192fb961d486d6ee9d12613c5c9d9f3e5bc8c48ab9f7d29e314a2ec603620->leave($__internal_58f192fb961d486d6ee9d12613c5c9d9f3e5bc8c48ab9f7d29e314a2ec603620_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_954e791cf14ff300f1a6ac5626af9e1277735aebaf37358a6faad197758309c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954e791cf14ff300f1a6ac5626af9e1277735aebaf37358a6faad197758309c9->enter($__internal_954e791cf14ff300f1a6ac5626af9e1277735aebaf37358a6faad197758309c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4d20b1ebbce2c15a8aaf4f08a4b45932b378166b4f73f1443e11587f960705b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d20b1ebbce2c15a8aaf4f08a4b45932b378166b4f73f1443e11587f960705b->enter($__internal_d4d20b1ebbce2c15a8aaf4f08a4b45932b378166b4f73f1443e11587f960705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d4d20b1ebbce2c15a8aaf4f08a4b45932b378166b4f73f1443e11587f960705b->leave($__internal_d4d20b1ebbce2c15a8aaf4f08a4b45932b378166b4f73f1443e11587f960705b_prof);

        
        $__internal_954e791cf14ff300f1a6ac5626af9e1277735aebaf37358a6faad197758309c9->leave($__internal_954e791cf14ff300f1a6ac5626af9e1277735aebaf37358a6faad197758309c9_prof);

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
