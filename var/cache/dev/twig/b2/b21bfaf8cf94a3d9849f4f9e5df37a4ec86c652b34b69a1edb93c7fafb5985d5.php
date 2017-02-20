<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5cbcf378b9312a5ec3b687f97ddee2000149bd431d7fc22695742620f4f77ba5 extends Twig_Template
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
        $__internal_a8f49038f9f27f46e8e169d88e7f7bc68d67b06039fe9e4a4b50748a45ff67d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f49038f9f27f46e8e169d88e7f7bc68d67b06039fe9e4a4b50748a45ff67d1->enter($__internal_a8f49038f9f27f46e8e169d88e7f7bc68d67b06039fe9e4a4b50748a45ff67d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_52845b8f1279e9f681cd145b2bc43603735912a43a21cde9c57003593abee8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52845b8f1279e9f681cd145b2bc43603735912a43a21cde9c57003593abee8e5->enter($__internal_52845b8f1279e9f681cd145b2bc43603735912a43a21cde9c57003593abee8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a8f49038f9f27f46e8e169d88e7f7bc68d67b06039fe9e4a4b50748a45ff67d1->leave($__internal_a8f49038f9f27f46e8e169d88e7f7bc68d67b06039fe9e4a4b50748a45ff67d1_prof);

        
        $__internal_52845b8f1279e9f681cd145b2bc43603735912a43a21cde9c57003593abee8e5->leave($__internal_52845b8f1279e9f681cd145b2bc43603735912a43a21cde9c57003593abee8e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
