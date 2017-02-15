<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_373d9429f4343d0721abdaeb56f283659e04c776d230be7f9bfb3bb51685867f extends Twig_Template
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
        $__internal_a98bb86dac27f12e0ae57ce016c9e343c73d28f5a32b268f82ea28e84cc4c31d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98bb86dac27f12e0ae57ce016c9e343c73d28f5a32b268f82ea28e84cc4c31d->enter($__internal_a98bb86dac27f12e0ae57ce016c9e343c73d28f5a32b268f82ea28e84cc4c31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7a72bee54e833bbdc376570d1f66c69e6e729d5e100ece79a4bab6a55ac188ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a72bee54e833bbdc376570d1f66c69e6e729d5e100ece79a4bab6a55ac188ee->enter($__internal_7a72bee54e833bbdc376570d1f66c69e6e729d5e100ece79a4bab6a55ac188ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a98bb86dac27f12e0ae57ce016c9e343c73d28f5a32b268f82ea28e84cc4c31d->leave($__internal_a98bb86dac27f12e0ae57ce016c9e343c73d28f5a32b268f82ea28e84cc4c31d_prof);

        
        $__internal_7a72bee54e833bbdc376570d1f66c69e6e729d5e100ece79a4bab6a55ac188ee->leave($__internal_7a72bee54e833bbdc376570d1f66c69e6e729d5e100ece79a4bab6a55ac188ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
