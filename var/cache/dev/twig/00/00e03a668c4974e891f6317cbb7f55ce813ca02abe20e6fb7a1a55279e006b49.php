<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6ffc55f5e5ab492aea9c083170f4ed2519c4147c59ead5d5c4d69d385a3b98cc extends Twig_Template
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
        $__internal_4fce0a976e77eeba08c842b62e40d448409a9a00721e72a80c665342dac27e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fce0a976e77eeba08c842b62e40d448409a9a00721e72a80c665342dac27e3e->enter($__internal_4fce0a976e77eeba08c842b62e40d448409a9a00721e72a80c665342dac27e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_47d2a2800a966d6361a6ebdb033cd71e404ed82faf21c95581aca91fed4a9c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d2a2800a966d6361a6ebdb033cd71e404ed82faf21c95581aca91fed4a9c24->enter($__internal_47d2a2800a966d6361a6ebdb033cd71e404ed82faf21c95581aca91fed4a9c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4fce0a976e77eeba08c842b62e40d448409a9a00721e72a80c665342dac27e3e->leave($__internal_4fce0a976e77eeba08c842b62e40d448409a9a00721e72a80c665342dac27e3e_prof);

        
        $__internal_47d2a2800a966d6361a6ebdb033cd71e404ed82faf21c95581aca91fed4a9c24->leave($__internal_47d2a2800a966d6361a6ebdb033cd71e404ed82faf21c95581aca91fed4a9c24_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
