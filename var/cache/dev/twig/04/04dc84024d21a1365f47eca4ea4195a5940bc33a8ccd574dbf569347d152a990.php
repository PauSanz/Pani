<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0468f05df4181cc993fdbbb1cec4990b280077f600dc89689db138ed15838f93 extends Twig_Template
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
        $__internal_adb40f87f525ed4081e84641bd562fa46743e09413332debf618a362925e915e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb40f87f525ed4081e84641bd562fa46743e09413332debf618a362925e915e->enter($__internal_adb40f87f525ed4081e84641bd562fa46743e09413332debf618a362925e915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a5587222321951e60589fe892478018c042d42c94066746e7fad25031ee316a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5587222321951e60589fe892478018c042d42c94066746e7fad25031ee316a8->enter($__internal_a5587222321951e60589fe892478018c042d42c94066746e7fad25031ee316a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_adb40f87f525ed4081e84641bd562fa46743e09413332debf618a362925e915e->leave($__internal_adb40f87f525ed4081e84641bd562fa46743e09413332debf618a362925e915e_prof);

        
        $__internal_a5587222321951e60589fe892478018c042d42c94066746e7fad25031ee316a8->leave($__internal_a5587222321951e60589fe892478018c042d42c94066746e7fad25031ee316a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
