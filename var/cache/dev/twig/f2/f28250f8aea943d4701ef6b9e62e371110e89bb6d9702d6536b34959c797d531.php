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
        $__internal_20fd5de46e775829631cfd9307f568015b0d36cf8b4a8812a67c9a3f76dece66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fd5de46e775829631cfd9307f568015b0d36cf8b4a8812a67c9a3f76dece66->enter($__internal_20fd5de46e775829631cfd9307f568015b0d36cf8b4a8812a67c9a3f76dece66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d1cd83f85e851ad27aa1497d88f5f32d98efa81756976daf57eb6c484752bd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cd83f85e851ad27aa1497d88f5f32d98efa81756976daf57eb6c484752bd6e->enter($__internal_d1cd83f85e851ad27aa1497d88f5f32d98efa81756976daf57eb6c484752bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_20fd5de46e775829631cfd9307f568015b0d36cf8b4a8812a67c9a3f76dece66->leave($__internal_20fd5de46e775829631cfd9307f568015b0d36cf8b4a8812a67c9a3f76dece66_prof);

        
        $__internal_d1cd83f85e851ad27aa1497d88f5f32d98efa81756976daf57eb6c484752bd6e->leave($__internal_d1cd83f85e851ad27aa1497d88f5f32d98efa81756976daf57eb6c484752bd6e_prof);

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
