<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_af9d5bdf6c09edefd9bfb7319280c22aa25d12dc7917a84d01005859b6866263 extends Twig_Template
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
        $__internal_e3a1b2e5de48e117a9ad571fc6a886f4de70f50b85747536c09542c890270de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a1b2e5de48e117a9ad571fc6a886f4de70f50b85747536c09542c890270de1->enter($__internal_e3a1b2e5de48e117a9ad571fc6a886f4de70f50b85747536c09542c890270de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6f12a7545935858088009cdc00528cc401df5845172575e986b42d05b166cd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f12a7545935858088009cdc00528cc401df5845172575e986b42d05b166cd27->enter($__internal_6f12a7545935858088009cdc00528cc401df5845172575e986b42d05b166cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e3a1b2e5de48e117a9ad571fc6a886f4de70f50b85747536c09542c890270de1->leave($__internal_e3a1b2e5de48e117a9ad571fc6a886f4de70f50b85747536c09542c890270de1_prof);

        
        $__internal_6f12a7545935858088009cdc00528cc401df5845172575e986b42d05b166cd27->leave($__internal_6f12a7545935858088009cdc00528cc401df5845172575e986b42d05b166cd27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
