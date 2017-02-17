<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1a13ef417360f111dc8823e38a6fb3985a1c1f47a2ad650e4fb0b8666c609571 extends Twig_Template
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
        $__internal_8cd382e81ad7b79afe6256084e8c6ea8ede65b7f05b4580d5bc868b8218b8231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd382e81ad7b79afe6256084e8c6ea8ede65b7f05b4580d5bc868b8218b8231->enter($__internal_8cd382e81ad7b79afe6256084e8c6ea8ede65b7f05b4580d5bc868b8218b8231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a7ef62cf1e19b1690ada19f3f5efe8684fed0bdf87c96c641392317bbea9afad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ef62cf1e19b1690ada19f3f5efe8684fed0bdf87c96c641392317bbea9afad->enter($__internal_a7ef62cf1e19b1690ada19f3f5efe8684fed0bdf87c96c641392317bbea9afad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8cd382e81ad7b79afe6256084e8c6ea8ede65b7f05b4580d5bc868b8218b8231->leave($__internal_8cd382e81ad7b79afe6256084e8c6ea8ede65b7f05b4580d5bc868b8218b8231_prof);

        
        $__internal_a7ef62cf1e19b1690ada19f3f5efe8684fed0bdf87c96c641392317bbea9afad->leave($__internal_a7ef62cf1e19b1690ada19f3f5efe8684fed0bdf87c96c641392317bbea9afad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
