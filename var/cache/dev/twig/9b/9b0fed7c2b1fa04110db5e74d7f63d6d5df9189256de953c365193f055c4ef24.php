<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_91460aee2d574d58e660fd346d75179f570db0f92537bd122fce8579cb08b883 extends Twig_Template
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
        $__internal_3344edf7a8bc6308e9fa6edf0b75053f50cb83357d46796e5f91083a7942cb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3344edf7a8bc6308e9fa6edf0b75053f50cb83357d46796e5f91083a7942cb75->enter($__internal_3344edf7a8bc6308e9fa6edf0b75053f50cb83357d46796e5f91083a7942cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_93f9c63806fe77e8238b8ad92112516cea408c51d91c4a02b49736aad23de743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f9c63806fe77e8238b8ad92112516cea408c51d91c4a02b49736aad23de743->enter($__internal_93f9c63806fe77e8238b8ad92112516cea408c51d91c4a02b49736aad23de743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3344edf7a8bc6308e9fa6edf0b75053f50cb83357d46796e5f91083a7942cb75->leave($__internal_3344edf7a8bc6308e9fa6edf0b75053f50cb83357d46796e5f91083a7942cb75_prof);

        
        $__internal_93f9c63806fe77e8238b8ad92112516cea408c51d91c4a02b49736aad23de743->leave($__internal_93f9c63806fe77e8238b8ad92112516cea408c51d91c4a02b49736aad23de743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
