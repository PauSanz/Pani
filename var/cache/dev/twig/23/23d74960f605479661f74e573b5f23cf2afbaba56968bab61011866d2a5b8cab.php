<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_92a7900cb47da0877a8ef0bda9a8307ebb1a2a9b6842ac298e6e0c7af1e566a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a7900cb47da0877a8ef0bda9a8307ebb1a2a9b6842ac298e6e0c7af1e566a4->enter($__internal_92a7900cb47da0877a8ef0bda9a8307ebb1a2a9b6842ac298e6e0c7af1e566a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cab8cb6eff86cd495adb1cad43e1f17cd1fa9b21e01aa87ca310822c002b3402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab8cb6eff86cd495adb1cad43e1f17cd1fa9b21e01aa87ca310822c002b3402->enter($__internal_cab8cb6eff86cd495adb1cad43e1f17cd1fa9b21e01aa87ca310822c002b3402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_92a7900cb47da0877a8ef0bda9a8307ebb1a2a9b6842ac298e6e0c7af1e566a4->leave($__internal_92a7900cb47da0877a8ef0bda9a8307ebb1a2a9b6842ac298e6e0c7af1e566a4_prof);

        
        $__internal_cab8cb6eff86cd495adb1cad43e1f17cd1fa9b21e01aa87ca310822c002b3402->leave($__internal_cab8cb6eff86cd495adb1cad43e1f17cd1fa9b21e01aa87ca310822c002b3402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
