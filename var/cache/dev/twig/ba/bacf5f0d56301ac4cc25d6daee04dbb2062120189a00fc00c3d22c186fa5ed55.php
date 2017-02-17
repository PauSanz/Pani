<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_c1a420aa8ebf7799eafe14611ad6793e57049626dfca4da181c2f9192be9420f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a420aa8ebf7799eafe14611ad6793e57049626dfca4da181c2f9192be9420f->enter($__internal_c1a420aa8ebf7799eafe14611ad6793e57049626dfca4da181c2f9192be9420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d96e1f53c8718a9633e4bb57557bd7ac46fcb4075a99d37922f2e2c2cb49aded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96e1f53c8718a9633e4bb57557bd7ac46fcb4075a99d37922f2e2c2cb49aded->enter($__internal_d96e1f53c8718a9633e4bb57557bd7ac46fcb4075a99d37922f2e2c2cb49aded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c1a420aa8ebf7799eafe14611ad6793e57049626dfca4da181c2f9192be9420f->leave($__internal_c1a420aa8ebf7799eafe14611ad6793e57049626dfca4da181c2f9192be9420f_prof);

        
        $__internal_d96e1f53c8718a9633e4bb57557bd7ac46fcb4075a99d37922f2e2c2cb49aded->leave($__internal_d96e1f53c8718a9633e4bb57557bd7ac46fcb4075a99d37922f2e2c2cb49aded_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
