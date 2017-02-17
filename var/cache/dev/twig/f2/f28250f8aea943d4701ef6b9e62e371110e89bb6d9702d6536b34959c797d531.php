<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4282c0681d7ef4120c21069aa40e83270e47718c1f8474729ac22961b0b079f8 extends Twig_Template
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
        $__internal_05ddb0d2eb29954d8839a04bdd42281e9df44457fc60316cd898b57f3151ba7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ddb0d2eb29954d8839a04bdd42281e9df44457fc60316cd898b57f3151ba7b->enter($__internal_05ddb0d2eb29954d8839a04bdd42281e9df44457fc60316cd898b57f3151ba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8e130b2a96f8750198d3671b29ae2c8996106b4a8e01b3bcd8ce83c0a79d6d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e130b2a96f8750198d3671b29ae2c8996106b4a8e01b3bcd8ce83c0a79d6d34->enter($__internal_8e130b2a96f8750198d3671b29ae2c8996106b4a8e01b3bcd8ce83c0a79d6d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_05ddb0d2eb29954d8839a04bdd42281e9df44457fc60316cd898b57f3151ba7b->leave($__internal_05ddb0d2eb29954d8839a04bdd42281e9df44457fc60316cd898b57f3151ba7b_prof);

        
        $__internal_8e130b2a96f8750198d3671b29ae2c8996106b4a8e01b3bcd8ce83c0a79d6d34->leave($__internal_8e130b2a96f8750198d3671b29ae2c8996106b4a8e01b3bcd8ce83c0a79d6d34_prof);

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
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
