<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_7584bd9fbe7ef2fc9ee6a01b4878a29ab03c6ed6306ddf79900af5a7016bff3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7584bd9fbe7ef2fc9ee6a01b4878a29ab03c6ed6306ddf79900af5a7016bff3d->enter($__internal_7584bd9fbe7ef2fc9ee6a01b4878a29ab03c6ed6306ddf79900af5a7016bff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_278ae650d7680b10b8616a5f68890109adb345221b587e3f9cdc9a6fa5f7386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ae650d7680b10b8616a5f68890109adb345221b587e3f9cdc9a6fa5f7386d->enter($__internal_278ae650d7680b10b8616a5f68890109adb345221b587e3f9cdc9a6fa5f7386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7584bd9fbe7ef2fc9ee6a01b4878a29ab03c6ed6306ddf79900af5a7016bff3d->leave($__internal_7584bd9fbe7ef2fc9ee6a01b4878a29ab03c6ed6306ddf79900af5a7016bff3d_prof);

        
        $__internal_278ae650d7680b10b8616a5f68890109adb345221b587e3f9cdc9a6fa5f7386d->leave($__internal_278ae650d7680b10b8616a5f68890109adb345221b587e3f9cdc9a6fa5f7386d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
