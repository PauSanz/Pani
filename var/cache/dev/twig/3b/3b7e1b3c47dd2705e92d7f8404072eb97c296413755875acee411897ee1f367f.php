<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_17b969dc8bf695da52fed436aae800cf51cf7d434d88594d55de9d8c1d980fc6 extends Twig_Template
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
        $__internal_9958c9e9cb332960727597fb8960339631a88f19895b6b14bfb8bba4b8c4d92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9958c9e9cb332960727597fb8960339631a88f19895b6b14bfb8bba4b8c4d92a->enter($__internal_9958c9e9cb332960727597fb8960339631a88f19895b6b14bfb8bba4b8c4d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5129563cada1535feb7008e49fb0cc6e08634aecdee1964e0d1317d5a0eed3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5129563cada1535feb7008e49fb0cc6e08634aecdee1964e0d1317d5a0eed3a4->enter($__internal_5129563cada1535feb7008e49fb0cc6e08634aecdee1964e0d1317d5a0eed3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9958c9e9cb332960727597fb8960339631a88f19895b6b14bfb8bba4b8c4d92a->leave($__internal_9958c9e9cb332960727597fb8960339631a88f19895b6b14bfb8bba4b8c4d92a_prof);

        
        $__internal_5129563cada1535feb7008e49fb0cc6e08634aecdee1964e0d1317d5a0eed3a4->leave($__internal_5129563cada1535feb7008e49fb0cc6e08634aecdee1964e0d1317d5a0eed3a4_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
