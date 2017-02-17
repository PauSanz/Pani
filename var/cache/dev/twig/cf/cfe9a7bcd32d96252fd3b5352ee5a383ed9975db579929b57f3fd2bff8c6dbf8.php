<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e75baf544d14334debdb9011590cd4ff2eb394362b774ee9d4827ef13ed32c9d extends Twig_Template
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
        $__internal_6e4a20b2aa9438d93a8cfe7bd25c601fbdf82dcd39e312c98fce2cdc62d70ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4a20b2aa9438d93a8cfe7bd25c601fbdf82dcd39e312c98fce2cdc62d70ff7->enter($__internal_6e4a20b2aa9438d93a8cfe7bd25c601fbdf82dcd39e312c98fce2cdc62d70ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b9f0a4d03ad68fb1b5a42842f4cb82287fd2753ca81f17ad8d14fdb662798a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f0a4d03ad68fb1b5a42842f4cb82287fd2753ca81f17ad8d14fdb662798a8f->enter($__internal_b9f0a4d03ad68fb1b5a42842f4cb82287fd2753ca81f17ad8d14fdb662798a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6e4a20b2aa9438d93a8cfe7bd25c601fbdf82dcd39e312c98fce2cdc62d70ff7->leave($__internal_6e4a20b2aa9438d93a8cfe7bd25c601fbdf82dcd39e312c98fce2cdc62d70ff7_prof);

        
        $__internal_b9f0a4d03ad68fb1b5a42842f4cb82287fd2753ca81f17ad8d14fdb662798a8f->leave($__internal_b9f0a4d03ad68fb1b5a42842f4cb82287fd2753ca81f17ad8d14fdb662798a8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
