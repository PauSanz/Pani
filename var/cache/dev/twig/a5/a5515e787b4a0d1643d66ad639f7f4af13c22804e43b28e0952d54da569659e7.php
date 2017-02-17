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
        $__internal_cb976c6efb0339036e4c1ba379766e2102ebb9fce01a0b40900eae8df9a2ab8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb976c6efb0339036e4c1ba379766e2102ebb9fce01a0b40900eae8df9a2ab8b->enter($__internal_cb976c6efb0339036e4c1ba379766e2102ebb9fce01a0b40900eae8df9a2ab8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_821fe5814a14d6af557e2bcb45bc5f2d7e76b0040fab59757160914f3112b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821fe5814a14d6af557e2bcb45bc5f2d7e76b0040fab59757160914f3112b171->enter($__internal_821fe5814a14d6af557e2bcb45bc5f2d7e76b0040fab59757160914f3112b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cb976c6efb0339036e4c1ba379766e2102ebb9fce01a0b40900eae8df9a2ab8b->leave($__internal_cb976c6efb0339036e4c1ba379766e2102ebb9fce01a0b40900eae8df9a2ab8b_prof);

        
        $__internal_821fe5814a14d6af557e2bcb45bc5f2d7e76b0040fab59757160914f3112b171->leave($__internal_821fe5814a14d6af557e2bcb45bc5f2d7e76b0040fab59757160914f3112b171_prof);

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
