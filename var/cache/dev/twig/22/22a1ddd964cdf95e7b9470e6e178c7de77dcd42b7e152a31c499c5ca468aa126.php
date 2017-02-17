<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_7988b0f44d62a1fff733cacee6ac122203b5ec8cbcdffd94b522e6bfee94e489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7988b0f44d62a1fff733cacee6ac122203b5ec8cbcdffd94b522e6bfee94e489->enter($__internal_7988b0f44d62a1fff733cacee6ac122203b5ec8cbcdffd94b522e6bfee94e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2827947c3cea9793aac9147484930c99bd9b89a1ef7f0ad42e8028e47ebfd9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2827947c3cea9793aac9147484930c99bd9b89a1ef7f0ad42e8028e47ebfd9de->enter($__internal_2827947c3cea9793aac9147484930c99bd9b89a1ef7f0ad42e8028e47ebfd9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7988b0f44d62a1fff733cacee6ac122203b5ec8cbcdffd94b522e6bfee94e489->leave($__internal_7988b0f44d62a1fff733cacee6ac122203b5ec8cbcdffd94b522e6bfee94e489_prof);

        
        $__internal_2827947c3cea9793aac9147484930c99bd9b89a1ef7f0ad42e8028e47ebfd9de->leave($__internal_2827947c3cea9793aac9147484930c99bd9b89a1ef7f0ad42e8028e47ebfd9de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
