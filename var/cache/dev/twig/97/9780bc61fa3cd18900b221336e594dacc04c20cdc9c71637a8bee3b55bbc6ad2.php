<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_9bb5cf50704a85359d0b6fac8c4453c4b1b326d33f28f4c2c8496e52ca94f1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb5cf50704a85359d0b6fac8c4453c4b1b326d33f28f4c2c8496e52ca94f1d4->enter($__internal_9bb5cf50704a85359d0b6fac8c4453c4b1b326d33f28f4c2c8496e52ca94f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7c5408ad2cc9bd7a92ce05827b94a709462cb79524097dd6bf57af516ebbd819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5408ad2cc9bd7a92ce05827b94a709462cb79524097dd6bf57af516ebbd819->enter($__internal_7c5408ad2cc9bd7a92ce05827b94a709462cb79524097dd6bf57af516ebbd819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9bb5cf50704a85359d0b6fac8c4453c4b1b326d33f28f4c2c8496e52ca94f1d4->leave($__internal_9bb5cf50704a85359d0b6fac8c4453c4b1b326d33f28f4c2c8496e52ca94f1d4_prof);

        
        $__internal_7c5408ad2cc9bd7a92ce05827b94a709462cb79524097dd6bf57af516ebbd819->leave($__internal_7c5408ad2cc9bd7a92ce05827b94a709462cb79524097dd6bf57af516ebbd819_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
