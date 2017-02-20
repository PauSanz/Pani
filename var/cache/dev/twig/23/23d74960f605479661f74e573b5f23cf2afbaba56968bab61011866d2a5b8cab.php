<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_6f931ff9b77695788fa7a56c4f766600cb27c7c73a282af6c389de9ee5cddb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f931ff9b77695788fa7a56c4f766600cb27c7c73a282af6c389de9ee5cddb64->enter($__internal_6f931ff9b77695788fa7a56c4f766600cb27c7c73a282af6c389de9ee5cddb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0bddecc280d8efacb2bdaf34335c917c526be4af88b5449516c37aa048849140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bddecc280d8efacb2bdaf34335c917c526be4af88b5449516c37aa048849140->enter($__internal_0bddecc280d8efacb2bdaf34335c917c526be4af88b5449516c37aa048849140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6f931ff9b77695788fa7a56c4f766600cb27c7c73a282af6c389de9ee5cddb64->leave($__internal_6f931ff9b77695788fa7a56c4f766600cb27c7c73a282af6c389de9ee5cddb64_prof);

        
        $__internal_0bddecc280d8efacb2bdaf34335c917c526be4af88b5449516c37aa048849140->leave($__internal_0bddecc280d8efacb2bdaf34335c917c526be4af88b5449516c37aa048849140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
