<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_b3131c67fe5741e270f067d3fd7bd4e6b449459986d11210b7fc37d3bc91552c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3131c67fe5741e270f067d3fd7bd4e6b449459986d11210b7fc37d3bc91552c->enter($__internal_b3131c67fe5741e270f067d3fd7bd4e6b449459986d11210b7fc37d3bc91552c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e46abe11dc0a7ac44d5d90e3ce611064c1545b1d809d40338fce4c5339861b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46abe11dc0a7ac44d5d90e3ce611064c1545b1d809d40338fce4c5339861b84->enter($__internal_e46abe11dc0a7ac44d5d90e3ce611064c1545b1d809d40338fce4c5339861b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b3131c67fe5741e270f067d3fd7bd4e6b449459986d11210b7fc37d3bc91552c->leave($__internal_b3131c67fe5741e270f067d3fd7bd4e6b449459986d11210b7fc37d3bc91552c_prof);

        
        $__internal_e46abe11dc0a7ac44d5d90e3ce611064c1545b1d809d40338fce4c5339861b84->leave($__internal_e46abe11dc0a7ac44d5d90e3ce611064c1545b1d809d40338fce4c5339861b84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
