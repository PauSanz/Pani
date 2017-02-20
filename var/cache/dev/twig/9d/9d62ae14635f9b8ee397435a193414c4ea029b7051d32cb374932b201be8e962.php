<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_54afc722913edc0b9b10153ad5d267b89b6f693962210995e8e8f65daac51f3a extends Twig_Template
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
        $__internal_a47b4b8e9e0b2cd4c81230ee97ef2f90321fc634e16511661d3b51df576f72c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47b4b8e9e0b2cd4c81230ee97ef2f90321fc634e16511661d3b51df576f72c0->enter($__internal_a47b4b8e9e0b2cd4c81230ee97ef2f90321fc634e16511661d3b51df576f72c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b90b7eb03db35353b118ca4e16417c03deebec97c389ccf820d2bca2ccbba9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90b7eb03db35353b118ca4e16417c03deebec97c389ccf820d2bca2ccbba9d9->enter($__internal_b90b7eb03db35353b118ca4e16417c03deebec97c389ccf820d2bca2ccbba9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a47b4b8e9e0b2cd4c81230ee97ef2f90321fc634e16511661d3b51df576f72c0->leave($__internal_a47b4b8e9e0b2cd4c81230ee97ef2f90321fc634e16511661d3b51df576f72c0_prof);

        
        $__internal_b90b7eb03db35353b118ca4e16417c03deebec97c389ccf820d2bca2ccbba9d9->leave($__internal_b90b7eb03db35353b118ca4e16417c03deebec97c389ccf820d2bca2ccbba9d9_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
