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
        $__internal_9525d74404568b8f4e30be192ab4b21052d12bfdfc39f3d5f3aa17218828d470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9525d74404568b8f4e30be192ab4b21052d12bfdfc39f3d5f3aa17218828d470->enter($__internal_9525d74404568b8f4e30be192ab4b21052d12bfdfc39f3d5f3aa17218828d470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9ec8e7127fcc86b47c4f4514fdc536a2a8a1a589ebb681c0fca663ac33b50099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec8e7127fcc86b47c4f4514fdc536a2a8a1a589ebb681c0fca663ac33b50099->enter($__internal_9ec8e7127fcc86b47c4f4514fdc536a2a8a1a589ebb681c0fca663ac33b50099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9525d74404568b8f4e30be192ab4b21052d12bfdfc39f3d5f3aa17218828d470->leave($__internal_9525d74404568b8f4e30be192ab4b21052d12bfdfc39f3d5f3aa17218828d470_prof);

        
        $__internal_9ec8e7127fcc86b47c4f4514fdc536a2a8a1a589ebb681c0fca663ac33b50099->leave($__internal_9ec8e7127fcc86b47c4f4514fdc536a2a8a1a589ebb681c0fca663ac33b50099_prof);

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
