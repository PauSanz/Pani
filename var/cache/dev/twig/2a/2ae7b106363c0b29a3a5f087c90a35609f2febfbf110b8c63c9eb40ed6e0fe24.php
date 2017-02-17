<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_71fad4b8f8f0a704383a073e7530ad0ab79a4eda6e833cddba57eb6d5755386c extends Twig_Template
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
        $__internal_601cebe3afb75359f17e3e662e5b787d76bc49de2f4e9ca6ef7fa6cac0f4ae9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601cebe3afb75359f17e3e662e5b787d76bc49de2f4e9ca6ef7fa6cac0f4ae9b->enter($__internal_601cebe3afb75359f17e3e662e5b787d76bc49de2f4e9ca6ef7fa6cac0f4ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1b5acac8fe0a66a48e257e83e4cba5a0ab350c0ef60a6c906ee7fd16f8765a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5acac8fe0a66a48e257e83e4cba5a0ab350c0ef60a6c906ee7fd16f8765a2d->enter($__internal_1b5acac8fe0a66a48e257e83e4cba5a0ab350c0ef60a6c906ee7fd16f8765a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_601cebe3afb75359f17e3e662e5b787d76bc49de2f4e9ca6ef7fa6cac0f4ae9b->leave($__internal_601cebe3afb75359f17e3e662e5b787d76bc49de2f4e9ca6ef7fa6cac0f4ae9b_prof);

        
        $__internal_1b5acac8fe0a66a48e257e83e4cba5a0ab350c0ef60a6c906ee7fd16f8765a2d->leave($__internal_1b5acac8fe0a66a48e257e83e4cba5a0ab350c0ef60a6c906ee7fd16f8765a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
