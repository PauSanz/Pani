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
        $__internal_39d84a116d0a7e64ad0f8fc2cd1aa5a9fb9ecdee50f1402e386281c54939d532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d84a116d0a7e64ad0f8fc2cd1aa5a9fb9ecdee50f1402e386281c54939d532->enter($__internal_39d84a116d0a7e64ad0f8fc2cd1aa5a9fb9ecdee50f1402e386281c54939d532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_205b3b52390b0c3acce60a1f84afa078f725be9eb0d734cb794c7b9e358e3a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205b3b52390b0c3acce60a1f84afa078f725be9eb0d734cb794c7b9e358e3a64->enter($__internal_205b3b52390b0c3acce60a1f84afa078f725be9eb0d734cb794c7b9e358e3a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_39d84a116d0a7e64ad0f8fc2cd1aa5a9fb9ecdee50f1402e386281c54939d532->leave($__internal_39d84a116d0a7e64ad0f8fc2cd1aa5a9fb9ecdee50f1402e386281c54939d532_prof);

        
        $__internal_205b3b52390b0c3acce60a1f84afa078f725be9eb0d734cb794c7b9e358e3a64->leave($__internal_205b3b52390b0c3acce60a1f84afa078f725be9eb0d734cb794c7b9e358e3a64_prof);

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
