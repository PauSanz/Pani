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
        $__internal_306a8ce231963c413eceb1ea154c602e0e4d79b0f396c323dcf5a5b94accde2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306a8ce231963c413eceb1ea154c602e0e4d79b0f396c323dcf5a5b94accde2b->enter($__internal_306a8ce231963c413eceb1ea154c602e0e4d79b0f396c323dcf5a5b94accde2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2c0b11964a766bb1720fad094a23136e44ba65cb1b77f9dd6a88f1ec3b1c1921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0b11964a766bb1720fad094a23136e44ba65cb1b77f9dd6a88f1ec3b1c1921->enter($__internal_2c0b11964a766bb1720fad094a23136e44ba65cb1b77f9dd6a88f1ec3b1c1921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_306a8ce231963c413eceb1ea154c602e0e4d79b0f396c323dcf5a5b94accde2b->leave($__internal_306a8ce231963c413eceb1ea154c602e0e4d79b0f396c323dcf5a5b94accde2b_prof);

        
        $__internal_2c0b11964a766bb1720fad094a23136e44ba65cb1b77f9dd6a88f1ec3b1c1921->leave($__internal_2c0b11964a766bb1720fad094a23136e44ba65cb1b77f9dd6a88f1ec3b1c1921_prof);

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
