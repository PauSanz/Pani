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
        $__internal_0feeb466b5a341156e002c9c24e1d8294a9328f7922394b02737475f3ea2e6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0feeb466b5a341156e002c9c24e1d8294a9328f7922394b02737475f3ea2e6a5->enter($__internal_0feeb466b5a341156e002c9c24e1d8294a9328f7922394b02737475f3ea2e6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_88ebba4c2940208049d8b3883323fa0672eb7ebf2ef5457a9504c93d163eb657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ebba4c2940208049d8b3883323fa0672eb7ebf2ef5457a9504c93d163eb657->enter($__internal_88ebba4c2940208049d8b3883323fa0672eb7ebf2ef5457a9504c93d163eb657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0feeb466b5a341156e002c9c24e1d8294a9328f7922394b02737475f3ea2e6a5->leave($__internal_0feeb466b5a341156e002c9c24e1d8294a9328f7922394b02737475f3ea2e6a5_prof);

        
        $__internal_88ebba4c2940208049d8b3883323fa0672eb7ebf2ef5457a9504c93d163eb657->leave($__internal_88ebba4c2940208049d8b3883323fa0672eb7ebf2ef5457a9504c93d163eb657_prof);

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
