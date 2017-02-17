<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_765cf7567bd13cb000f0a7606104138743636c1065830633d4ad1d23e480ec9a extends Twig_Template
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
        $__internal_62568a785ea6beddcf8d5ae2b6c53e63f6011f7ce8a5c6032be4af2cd1b748dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62568a785ea6beddcf8d5ae2b6c53e63f6011f7ce8a5c6032be4af2cd1b748dd->enter($__internal_62568a785ea6beddcf8d5ae2b6c53e63f6011f7ce8a5c6032be4af2cd1b748dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3922dddc19fa6d61ec22485034807f73f3d381d3e7b19492698723ab0a4912e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3922dddc19fa6d61ec22485034807f73f3d381d3e7b19492698723ab0a4912e8->enter($__internal_3922dddc19fa6d61ec22485034807f73f3d381d3e7b19492698723ab0a4912e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_62568a785ea6beddcf8d5ae2b6c53e63f6011f7ce8a5c6032be4af2cd1b748dd->leave($__internal_62568a785ea6beddcf8d5ae2b6c53e63f6011f7ce8a5c6032be4af2cd1b748dd_prof);

        
        $__internal_3922dddc19fa6d61ec22485034807f73f3d381d3e7b19492698723ab0a4912e8->leave($__internal_3922dddc19fa6d61ec22485034807f73f3d381d3e7b19492698723ab0a4912e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
