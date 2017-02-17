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
        $__internal_1410db4bf8f984dfbc9c107e6925dae1c7fe8a37aa589a3770574f55adf156b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1410db4bf8f984dfbc9c107e6925dae1c7fe8a37aa589a3770574f55adf156b7->enter($__internal_1410db4bf8f984dfbc9c107e6925dae1c7fe8a37aa589a3770574f55adf156b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0a537965a7a46cee88749de952cd881c51b7ba341c6e0ab95339b69a926b944b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a537965a7a46cee88749de952cd881c51b7ba341c6e0ab95339b69a926b944b->enter($__internal_0a537965a7a46cee88749de952cd881c51b7ba341c6e0ab95339b69a926b944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1410db4bf8f984dfbc9c107e6925dae1c7fe8a37aa589a3770574f55adf156b7->leave($__internal_1410db4bf8f984dfbc9c107e6925dae1c7fe8a37aa589a3770574f55adf156b7_prof);

        
        $__internal_0a537965a7a46cee88749de952cd881c51b7ba341c6e0ab95339b69a926b944b->leave($__internal_0a537965a7a46cee88749de952cd881c51b7ba341c6e0ab95339b69a926b944b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_347dc7363d7ece8b3d218358bd51bc1562ed5bc0729ea878759fa40d0552357c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347dc7363d7ece8b3d218358bd51bc1562ed5bc0729ea878759fa40d0552357c->enter($__internal_347dc7363d7ece8b3d218358bd51bc1562ed5bc0729ea878759fa40d0552357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c65dcfbc4caea3ca9ce823914aeccb1f9960f6bd21ec8c09afd63f046a6e40ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65dcfbc4caea3ca9ce823914aeccb1f9960f6bd21ec8c09afd63f046a6e40ed->enter($__internal_c65dcfbc4caea3ca9ce823914aeccb1f9960f6bd21ec8c09afd63f046a6e40ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c65dcfbc4caea3ca9ce823914aeccb1f9960f6bd21ec8c09afd63f046a6e40ed->leave($__internal_c65dcfbc4caea3ca9ce823914aeccb1f9960f6bd21ec8c09afd63f046a6e40ed_prof);

        
        $__internal_347dc7363d7ece8b3d218358bd51bc1562ed5bc0729ea878759fa40d0552357c->leave($__internal_347dc7363d7ece8b3d218358bd51bc1562ed5bc0729ea878759fa40d0552357c_prof);

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
