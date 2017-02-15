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
        $__internal_3b1ee06f6d52633ffe184e02a4d676f9cda0256d9a9f815b25296108e1cc6e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1ee06f6d52633ffe184e02a4d676f9cda0256d9a9f815b25296108e1cc6e7b->enter($__internal_3b1ee06f6d52633ffe184e02a4d676f9cda0256d9a9f815b25296108e1cc6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_eca5cd254e8b792fd6cb35ba9661e079b2b3fc1e0b54c4680358788f56f663f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca5cd254e8b792fd6cb35ba9661e079b2b3fc1e0b54c4680358788f56f663f4->enter($__internal_eca5cd254e8b792fd6cb35ba9661e079b2b3fc1e0b54c4680358788f56f663f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3b1ee06f6d52633ffe184e02a4d676f9cda0256d9a9f815b25296108e1cc6e7b->leave($__internal_3b1ee06f6d52633ffe184e02a4d676f9cda0256d9a9f815b25296108e1cc6e7b_prof);

        
        $__internal_eca5cd254e8b792fd6cb35ba9661e079b2b3fc1e0b54c4680358788f56f663f4->leave($__internal_eca5cd254e8b792fd6cb35ba9661e079b2b3fc1e0b54c4680358788f56f663f4_prof);

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
