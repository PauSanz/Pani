<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a149910c3a5b9c243e3d07b05a0011bd45eaed32abc77585b56e2073879d4930 extends Twig_Template
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
        $__internal_4780cd0bb10f4b3c47f7c9600a8f96c969a26006d7e0bd50e6a21b206277017d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4780cd0bb10f4b3c47f7c9600a8f96c969a26006d7e0bd50e6a21b206277017d->enter($__internal_4780cd0bb10f4b3c47f7c9600a8f96c969a26006d7e0bd50e6a21b206277017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f2cc23522768d3540186aaba0aa9952761b4164ac18129b5164657e56e56b21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cc23522768d3540186aaba0aa9952761b4164ac18129b5164657e56e56b21e->enter($__internal_f2cc23522768d3540186aaba0aa9952761b4164ac18129b5164657e56e56b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4780cd0bb10f4b3c47f7c9600a8f96c969a26006d7e0bd50e6a21b206277017d->leave($__internal_4780cd0bb10f4b3c47f7c9600a8f96c969a26006d7e0bd50e6a21b206277017d_prof);

        
        $__internal_f2cc23522768d3540186aaba0aa9952761b4164ac18129b5164657e56e56b21e->leave($__internal_f2cc23522768d3540186aaba0aa9952761b4164ac18129b5164657e56e56b21e_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
