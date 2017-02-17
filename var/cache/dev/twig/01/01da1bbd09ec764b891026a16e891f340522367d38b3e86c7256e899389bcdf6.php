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
        $__internal_5f9369955a36e33a5d9b673a50d2ed5c795cc04b939cbb599104d3fab27c323e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9369955a36e33a5d9b673a50d2ed5c795cc04b939cbb599104d3fab27c323e->enter($__internal_5f9369955a36e33a5d9b673a50d2ed5c795cc04b939cbb599104d3fab27c323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a097efa2eca033604777e353ff443da9c864bde09d15b9105cf7c4088f0513e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a097efa2eca033604777e353ff443da9c864bde09d15b9105cf7c4088f0513e9->enter($__internal_a097efa2eca033604777e353ff443da9c864bde09d15b9105cf7c4088f0513e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5f9369955a36e33a5d9b673a50d2ed5c795cc04b939cbb599104d3fab27c323e->leave($__internal_5f9369955a36e33a5d9b673a50d2ed5c795cc04b939cbb599104d3fab27c323e_prof);

        
        $__internal_a097efa2eca033604777e353ff443da9c864bde09d15b9105cf7c4088f0513e9->leave($__internal_a097efa2eca033604777e353ff443da9c864bde09d15b9105cf7c4088f0513e9_prof);

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
