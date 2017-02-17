<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_5f5d7e8218059c2761812b369a7f8290d4eff517199c393cf820546d68605ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5d7e8218059c2761812b369a7f8290d4eff517199c393cf820546d68605ed7->enter($__internal_5f5d7e8218059c2761812b369a7f8290d4eff517199c393cf820546d68605ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a7c44b7f0712835b11a7198771e0546276db71f8f3b417a94435571e09e949ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c44b7f0712835b11a7198771e0546276db71f8f3b417a94435571e09e949ab->enter($__internal_a7c44b7f0712835b11a7198771e0546276db71f8f3b417a94435571e09e949ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5f5d7e8218059c2761812b369a7f8290d4eff517199c393cf820546d68605ed7->leave($__internal_5f5d7e8218059c2761812b369a7f8290d4eff517199c393cf820546d68605ed7_prof);

        
        $__internal_a7c44b7f0712835b11a7198771e0546276db71f8f3b417a94435571e09e949ab->leave($__internal_a7c44b7f0712835b11a7198771e0546276db71f8f3b417a94435571e09e949ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
