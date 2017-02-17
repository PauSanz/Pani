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
        $__internal_af96453d64a55793202e23458f7f5dd2cf4abe40165fba1f591c0913e38da547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af96453d64a55793202e23458f7f5dd2cf4abe40165fba1f591c0913e38da547->enter($__internal_af96453d64a55793202e23458f7f5dd2cf4abe40165fba1f591c0913e38da547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_536c86495d9b30c47d14e4d096c1a7ebae98d3e0bd88ffb2a381f8f3f01e2a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536c86495d9b30c47d14e4d096c1a7ebae98d3e0bd88ffb2a381f8f3f01e2a27->enter($__internal_536c86495d9b30c47d14e4d096c1a7ebae98d3e0bd88ffb2a381f8f3f01e2a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_af96453d64a55793202e23458f7f5dd2cf4abe40165fba1f591c0913e38da547->leave($__internal_af96453d64a55793202e23458f7f5dd2cf4abe40165fba1f591c0913e38da547_prof);

        
        $__internal_536c86495d9b30c47d14e4d096c1a7ebae98d3e0bd88ffb2a381f8f3f01e2a27->leave($__internal_536c86495d9b30c47d14e4d096c1a7ebae98d3e0bd88ffb2a381f8f3f01e2a27_prof);

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
