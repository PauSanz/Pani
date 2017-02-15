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
        $__internal_04b0eb74ee52a2d45a59674aa259b05eaf0d87bf9bf69fa5a4a917fda2464103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b0eb74ee52a2d45a59674aa259b05eaf0d87bf9bf69fa5a4a917fda2464103->enter($__internal_04b0eb74ee52a2d45a59674aa259b05eaf0d87bf9bf69fa5a4a917fda2464103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_805d044910a48f1380e6698ae3103dda703d88466c99ab9132dc9c003ffbdb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d044910a48f1380e6698ae3103dda703d88466c99ab9132dc9c003ffbdb07->enter($__internal_805d044910a48f1380e6698ae3103dda703d88466c99ab9132dc9c003ffbdb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_04b0eb74ee52a2d45a59674aa259b05eaf0d87bf9bf69fa5a4a917fda2464103->leave($__internal_04b0eb74ee52a2d45a59674aa259b05eaf0d87bf9bf69fa5a4a917fda2464103_prof);

        
        $__internal_805d044910a48f1380e6698ae3103dda703d88466c99ab9132dc9c003ffbdb07->leave($__internal_805d044910a48f1380e6698ae3103dda703d88466c99ab9132dc9c003ffbdb07_prof);

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
