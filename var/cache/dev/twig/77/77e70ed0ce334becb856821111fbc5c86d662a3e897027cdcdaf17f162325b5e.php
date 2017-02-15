<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_686aba7a837110769a3f79800ecadccfa4d5db1d2993252aaf2cce5ec9acd463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686aba7a837110769a3f79800ecadccfa4d5db1d2993252aaf2cce5ec9acd463->enter($__internal_686aba7a837110769a3f79800ecadccfa4d5db1d2993252aaf2cce5ec9acd463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a5fa8559916b35ec58cc3903155f863fcf7dcfb845455764d2d9a7adc519b839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fa8559916b35ec58cc3903155f863fcf7dcfb845455764d2d9a7adc519b839->enter($__internal_a5fa8559916b35ec58cc3903155f863fcf7dcfb845455764d2d9a7adc519b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_686aba7a837110769a3f79800ecadccfa4d5db1d2993252aaf2cce5ec9acd463->leave($__internal_686aba7a837110769a3f79800ecadccfa4d5db1d2993252aaf2cce5ec9acd463_prof);

        
        $__internal_a5fa8559916b35ec58cc3903155f863fcf7dcfb845455764d2d9a7adc519b839->leave($__internal_a5fa8559916b35ec58cc3903155f863fcf7dcfb845455764d2d9a7adc519b839_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
