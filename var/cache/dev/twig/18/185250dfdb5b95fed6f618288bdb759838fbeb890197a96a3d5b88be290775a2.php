<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e94e33310ae95e5c63f6ffc34d64de60e01a04381f8bbda4ddefed83ddd73229 extends Twig_Template
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
        $__internal_638c5dc483fbf0c08d5d943ab4099f0833ae9298d8b02069379baa92d2ece0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638c5dc483fbf0c08d5d943ab4099f0833ae9298d8b02069379baa92d2ece0d7->enter($__internal_638c5dc483fbf0c08d5d943ab4099f0833ae9298d8b02069379baa92d2ece0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_27581381b49d916c9df1a8132ddc236ad00d780592e8af7ba35fb06d46707185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27581381b49d916c9df1a8132ddc236ad00d780592e8af7ba35fb06d46707185->enter($__internal_27581381b49d916c9df1a8132ddc236ad00d780592e8af7ba35fb06d46707185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_638c5dc483fbf0c08d5d943ab4099f0833ae9298d8b02069379baa92d2ece0d7->leave($__internal_638c5dc483fbf0c08d5d943ab4099f0833ae9298d8b02069379baa92d2ece0d7_prof);

        
        $__internal_27581381b49d916c9df1a8132ddc236ad00d780592e8af7ba35fb06d46707185->leave($__internal_27581381b49d916c9df1a8132ddc236ad00d780592e8af7ba35fb06d46707185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
