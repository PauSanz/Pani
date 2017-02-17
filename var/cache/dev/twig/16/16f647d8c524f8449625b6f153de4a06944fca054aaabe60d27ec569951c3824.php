<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_81494e1519c8eb68a477a6627cef51320fcef019083c1897a7c0aaf9e2116c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f8b1a74da97863bec72ff8c53731284fc9ba3b8ccbc5ea42daff9326d3cc2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8b1a74da97863bec72ff8c53731284fc9ba3b8ccbc5ea42daff9326d3cc2b0->enter($__internal_1f8b1a74da97863bec72ff8c53731284fc9ba3b8ccbc5ea42daff9326d3cc2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_253a219781099c3f447777adb376f5b7fe4f9344b3f99aba344ad819c90132b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253a219781099c3f447777adb376f5b7fe4f9344b3f99aba344ad819c90132b1->enter($__internal_253a219781099c3f447777adb376f5b7fe4f9344b3f99aba344ad819c90132b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1f8b1a74da97863bec72ff8c53731284fc9ba3b8ccbc5ea42daff9326d3cc2b0->leave($__internal_1f8b1a74da97863bec72ff8c53731284fc9ba3b8ccbc5ea42daff9326d3cc2b0_prof);

        
        $__internal_253a219781099c3f447777adb376f5b7fe4f9344b3f99aba344ad819c90132b1->leave($__internal_253a219781099c3f447777adb376f5b7fe4f9344b3f99aba344ad819c90132b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
