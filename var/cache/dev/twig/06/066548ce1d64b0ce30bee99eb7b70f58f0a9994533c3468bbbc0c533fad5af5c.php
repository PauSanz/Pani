<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_22d5a44fcb2daef5e3be10cc69e4fd9d3060b6833dc43bd50e6c647157d37e00 extends Twig_Template
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
        $__internal_0f6d46f238b3ab7f568ef7ff07d1382552586a38ca3bd52840009bcc7129e5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6d46f238b3ab7f568ef7ff07d1382552586a38ca3bd52840009bcc7129e5fc->enter($__internal_0f6d46f238b3ab7f568ef7ff07d1382552586a38ca3bd52840009bcc7129e5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c17c32bc1f9b38f09c07bb332ead3024db75cf15a963a1d8169707afc681fdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17c32bc1f9b38f09c07bb332ead3024db75cf15a963a1d8169707afc681fdc4->enter($__internal_c17c32bc1f9b38f09c07bb332ead3024db75cf15a963a1d8169707afc681fdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0f6d46f238b3ab7f568ef7ff07d1382552586a38ca3bd52840009bcc7129e5fc->leave($__internal_0f6d46f238b3ab7f568ef7ff07d1382552586a38ca3bd52840009bcc7129e5fc_prof);

        
        $__internal_c17c32bc1f9b38f09c07bb332ead3024db75cf15a963a1d8169707afc681fdc4->leave($__internal_c17c32bc1f9b38f09c07bb332ead3024db75cf15a963a1d8169707afc681fdc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
