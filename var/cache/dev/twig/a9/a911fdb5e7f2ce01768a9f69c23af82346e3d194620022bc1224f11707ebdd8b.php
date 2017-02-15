<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_415876f28c6976afeeafd4d95df761ed734111edaf97d99dc57201d43754a38c extends Twig_Template
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
        $__internal_b484624b338a029de23701dca13b6b8c32f1cf605f1692d5e3121fe6b5634403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b484624b338a029de23701dca13b6b8c32f1cf605f1692d5e3121fe6b5634403->enter($__internal_b484624b338a029de23701dca13b6b8c32f1cf605f1692d5e3121fe6b5634403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ea385d3ab94f68618d7ccf234e9515f0be8e428f803054f2c140ceda94a1508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea385d3ab94f68618d7ccf234e9515f0be8e428f803054f2c140ceda94a1508a->enter($__internal_ea385d3ab94f68618d7ccf234e9515f0be8e428f803054f2c140ceda94a1508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b484624b338a029de23701dca13b6b8c32f1cf605f1692d5e3121fe6b5634403->leave($__internal_b484624b338a029de23701dca13b6b8c32f1cf605f1692d5e3121fe6b5634403_prof);

        
        $__internal_ea385d3ab94f68618d7ccf234e9515f0be8e428f803054f2c140ceda94a1508a->leave($__internal_ea385d3ab94f68618d7ccf234e9515f0be8e428f803054f2c140ceda94a1508a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
