<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_03dfff71c4657e27c965f41c9c02fe6cc155851f504aac32dd12586b546f03e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03dfff71c4657e27c965f41c9c02fe6cc155851f504aac32dd12586b546f03e6->enter($__internal_03dfff71c4657e27c965f41c9c02fe6cc155851f504aac32dd12586b546f03e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f393c33fa802f82bb8e6e0701a906ebcc981fd99ef7fefcefce315f957a861df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f393c33fa802f82bb8e6e0701a906ebcc981fd99ef7fefcefce315f957a861df->enter($__internal_f393c33fa802f82bb8e6e0701a906ebcc981fd99ef7fefcefce315f957a861df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_03dfff71c4657e27c965f41c9c02fe6cc155851f504aac32dd12586b546f03e6->leave($__internal_03dfff71c4657e27c965f41c9c02fe6cc155851f504aac32dd12586b546f03e6_prof);

        
        $__internal_f393c33fa802f82bb8e6e0701a906ebcc981fd99ef7fefcefce315f957a861df->leave($__internal_f393c33fa802f82bb8e6e0701a906ebcc981fd99ef7fefcefce315f957a861df_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
