<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_add653a19d8aa826933a7cb8de1d5b97cbb12bdd641b3585412b8a6c925cb27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add653a19d8aa826933a7cb8de1d5b97cbb12bdd641b3585412b8a6c925cb27e->enter($__internal_add653a19d8aa826933a7cb8de1d5b97cbb12bdd641b3585412b8a6c925cb27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6740d44256a06e0c534d395807815be91c1a867f408c8cd50f4eaed4dfb22d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6740d44256a06e0c534d395807815be91c1a867f408c8cd50f4eaed4dfb22d4d->enter($__internal_6740d44256a06e0c534d395807815be91c1a867f408c8cd50f4eaed4dfb22d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add653a19d8aa826933a7cb8de1d5b97cbb12bdd641b3585412b8a6c925cb27e->leave($__internal_add653a19d8aa826933a7cb8de1d5b97cbb12bdd641b3585412b8a6c925cb27e_prof);

        
        $__internal_6740d44256a06e0c534d395807815be91c1a867f408c8cd50f4eaed4dfb22d4d->leave($__internal_6740d44256a06e0c534d395807815be91c1a867f408c8cd50f4eaed4dfb22d4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c8ab691be1c97e5759470886abfcac2ffef18780f1298240430269eaa844b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8ab691be1c97e5759470886abfcac2ffef18780f1298240430269eaa844b27->enter($__internal_1c8ab691be1c97e5759470886abfcac2ffef18780f1298240430269eaa844b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc11f47c2ebc6eb1617c4bd3973e6dd14a263b70853ef016ccd53d0470c2b69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc11f47c2ebc6eb1617c4bd3973e6dd14a263b70853ef016ccd53d0470c2b69d->enter($__internal_bc11f47c2ebc6eb1617c4bd3973e6dd14a263b70853ef016ccd53d0470c2b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc11f47c2ebc6eb1617c4bd3973e6dd14a263b70853ef016ccd53d0470c2b69d->leave($__internal_bc11f47c2ebc6eb1617c4bd3973e6dd14a263b70853ef016ccd53d0470c2b69d_prof);

        
        $__internal_1c8ab691be1c97e5759470886abfcac2ffef18780f1298240430269eaa844b27->leave($__internal_1c8ab691be1c97e5759470886abfcac2ffef18780f1298240430269eaa844b27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_661f98c1689d50ea626f4e8e45671bb7438edce0c6aa5db8b343c6300c695e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661f98c1689d50ea626f4e8e45671bb7438edce0c6aa5db8b343c6300c695e08->enter($__internal_661f98c1689d50ea626f4e8e45671bb7438edce0c6aa5db8b343c6300c695e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3fd228d81edaa67fd1b4035293aa22bc69aa10ec3146ff057197f73d183c6e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fd228d81edaa67fd1b4035293aa22bc69aa10ec3146ff057197f73d183c6e0->enter($__internal_e3fd228d81edaa67fd1b4035293aa22bc69aa10ec3146ff057197f73d183c6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3fd228d81edaa67fd1b4035293aa22bc69aa10ec3146ff057197f73d183c6e0->leave($__internal_e3fd228d81edaa67fd1b4035293aa22bc69aa10ec3146ff057197f73d183c6e0_prof);

        
        $__internal_661f98c1689d50ea626f4e8e45671bb7438edce0c6aa5db8b343c6300c695e08->leave($__internal_661f98c1689d50ea626f4e8e45671bb7438edce0c6aa5db8b343c6300c695e08_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09322b8c38a6c9e68f529b3f49d19c0e9b615825785c708f4c85dc2679acd871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09322b8c38a6c9e68f529b3f49d19c0e9b615825785c708f4c85dc2679acd871->enter($__internal_09322b8c38a6c9e68f529b3f49d19c0e9b615825785c708f4c85dc2679acd871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_610eb2ded8ec13c3586661c9faad5a89ce9ec24e76482807671f8196f520bc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610eb2ded8ec13c3586661c9faad5a89ce9ec24e76482807671f8196f520bc13->enter($__internal_610eb2ded8ec13c3586661c9faad5a89ce9ec24e76482807671f8196f520bc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_610eb2ded8ec13c3586661c9faad5a89ce9ec24e76482807671f8196f520bc13->leave($__internal_610eb2ded8ec13c3586661c9faad5a89ce9ec24e76482807671f8196f520bc13_prof);

        
        $__internal_09322b8c38a6c9e68f529b3f49d19c0e9b615825785c708f4c85dc2679acd871->leave($__internal_09322b8c38a6c9e68f529b3f49d19c0e9b615825785c708f4c85dc2679acd871_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
