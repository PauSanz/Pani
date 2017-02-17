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
        $__internal_f6a18b656b08292968d6af944c1d548ad84ab20d00eb698cbb1e39fcd4fd674a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a18b656b08292968d6af944c1d548ad84ab20d00eb698cbb1e39fcd4fd674a->enter($__internal_f6a18b656b08292968d6af944c1d548ad84ab20d00eb698cbb1e39fcd4fd674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e66854b2019e1b7ec4b96ed43048be5750471111448c3c2af12eeca06abaf920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66854b2019e1b7ec4b96ed43048be5750471111448c3c2af12eeca06abaf920->enter($__internal_e66854b2019e1b7ec4b96ed43048be5750471111448c3c2af12eeca06abaf920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f6a18b656b08292968d6af944c1d548ad84ab20d00eb698cbb1e39fcd4fd674a->leave($__internal_f6a18b656b08292968d6af944c1d548ad84ab20d00eb698cbb1e39fcd4fd674a_prof);

        
        $__internal_e66854b2019e1b7ec4b96ed43048be5750471111448c3c2af12eeca06abaf920->leave($__internal_e66854b2019e1b7ec4b96ed43048be5750471111448c3c2af12eeca06abaf920_prof);

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
