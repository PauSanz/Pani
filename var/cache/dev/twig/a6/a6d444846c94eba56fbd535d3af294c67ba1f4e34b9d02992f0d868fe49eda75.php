<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06434e5de1dabce2cc6326a8a016ba0d77693cc6f3f37a0a5696dde09cdbb48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06434e5de1dabce2cc6326a8a016ba0d77693cc6f3f37a0a5696dde09cdbb48f->enter($__internal_06434e5de1dabce2cc6326a8a016ba0d77693cc6f3f37a0a5696dde09cdbb48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a3779d7365b2aebc6e21261a96724e4baa94740ef147cb158a2f3c33bfa02b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3779d7365b2aebc6e21261a96724e4baa94740ef147cb158a2f3c33bfa02b88->enter($__internal_a3779d7365b2aebc6e21261a96724e4baa94740ef147cb158a2f3c33bfa02b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_06434e5de1dabce2cc6326a8a016ba0d77693cc6f3f37a0a5696dde09cdbb48f->leave($__internal_06434e5de1dabce2cc6326a8a016ba0d77693cc6f3f37a0a5696dde09cdbb48f_prof);

        
        $__internal_a3779d7365b2aebc6e21261a96724e4baa94740ef147cb158a2f3c33bfa02b88->leave($__internal_a3779d7365b2aebc6e21261a96724e4baa94740ef147cb158a2f3c33bfa02b88_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_00aecaf17e7ba48a4d11df57e9ddc660285c4086efce742aee13f078c125172f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aecaf17e7ba48a4d11df57e9ddc660285c4086efce742aee13f078c125172f->enter($__internal_00aecaf17e7ba48a4d11df57e9ddc660285c4086efce742aee13f078c125172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aef2748049ac34f6f8fb853123387709c10e487f25cde49c639449f12776b31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef2748049ac34f6f8fb853123387709c10e487f25cde49c639449f12776b31f->enter($__internal_aef2748049ac34f6f8fb853123387709c10e487f25cde49c639449f12776b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aef2748049ac34f6f8fb853123387709c10e487f25cde49c639449f12776b31f->leave($__internal_aef2748049ac34f6f8fb853123387709c10e487f25cde49c639449f12776b31f_prof);

        
        $__internal_00aecaf17e7ba48a4d11df57e9ddc660285c4086efce742aee13f078c125172f->leave($__internal_00aecaf17e7ba48a4d11df57e9ddc660285c4086efce742aee13f078c125172f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
