<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_26e4c0cc21df45c63e3d96d13c393243ef863c8094e6e6ada9ec61fc0c0c4e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e4c0cc21df45c63e3d96d13c393243ef863c8094e6e6ada9ec61fc0c0c4e19->enter($__internal_26e4c0cc21df45c63e3d96d13c393243ef863c8094e6e6ada9ec61fc0c0c4e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_588adad7d7d683cedf9eea00109c690eed30ffe105ec1d51a98601e79fa3275b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588adad7d7d683cedf9eea00109c690eed30ffe105ec1d51a98601e79fa3275b->enter($__internal_588adad7d7d683cedf9eea00109c690eed30ffe105ec1d51a98601e79fa3275b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_26e4c0cc21df45c63e3d96d13c393243ef863c8094e6e6ada9ec61fc0c0c4e19->leave($__internal_26e4c0cc21df45c63e3d96d13c393243ef863c8094e6e6ada9ec61fc0c0c4e19_prof);

        
        $__internal_588adad7d7d683cedf9eea00109c690eed30ffe105ec1d51a98601e79fa3275b->leave($__internal_588adad7d7d683cedf9eea00109c690eed30ffe105ec1d51a98601e79fa3275b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
