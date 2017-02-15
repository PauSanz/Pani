<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43155966c45df880a914bea0e34fee9b9926202925b729a7a23e24bf8e15c10a extends Twig_Template
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
        $__internal_f4ee8132c0dd40c37b0e18444f1606616bc66771d7a28d71b43ee39832355b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ee8132c0dd40c37b0e18444f1606616bc66771d7a28d71b43ee39832355b08->enter($__internal_f4ee8132c0dd40c37b0e18444f1606616bc66771d7a28d71b43ee39832355b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_760e4340ae79084b447e0e2d9cc24bdf86a6ef45e3f0326b38d55822635a61aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760e4340ae79084b447e0e2d9cc24bdf86a6ef45e3f0326b38d55822635a61aa->enter($__internal_760e4340ae79084b447e0e2d9cc24bdf86a6ef45e3f0326b38d55822635a61aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f4ee8132c0dd40c37b0e18444f1606616bc66771d7a28d71b43ee39832355b08->leave($__internal_f4ee8132c0dd40c37b0e18444f1606616bc66771d7a28d71b43ee39832355b08_prof);

        
        $__internal_760e4340ae79084b447e0e2d9cc24bdf86a6ef45e3f0326b38d55822635a61aa->leave($__internal_760e4340ae79084b447e0e2d9cc24bdf86a6ef45e3f0326b38d55822635a61aa_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
