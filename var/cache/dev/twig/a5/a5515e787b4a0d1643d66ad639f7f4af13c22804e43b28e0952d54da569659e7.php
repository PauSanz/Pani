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
        $__internal_efce6c50b87ac6790b289e5a815a33e6c12ae93951d1365a7be5bbc2c4301422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efce6c50b87ac6790b289e5a815a33e6c12ae93951d1365a7be5bbc2c4301422->enter($__internal_efce6c50b87ac6790b289e5a815a33e6c12ae93951d1365a7be5bbc2c4301422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_311e1c5a6c0f2862bfaf88601a173d6889b402c8baf059e9f43d2ade74c16779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311e1c5a6c0f2862bfaf88601a173d6889b402c8baf059e9f43d2ade74c16779->enter($__internal_311e1c5a6c0f2862bfaf88601a173d6889b402c8baf059e9f43d2ade74c16779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_efce6c50b87ac6790b289e5a815a33e6c12ae93951d1365a7be5bbc2c4301422->leave($__internal_efce6c50b87ac6790b289e5a815a33e6c12ae93951d1365a7be5bbc2c4301422_prof);

        
        $__internal_311e1c5a6c0f2862bfaf88601a173d6889b402c8baf059e9f43d2ade74c16779->leave($__internal_311e1c5a6c0f2862bfaf88601a173d6889b402c8baf059e9f43d2ade74c16779_prof);

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
