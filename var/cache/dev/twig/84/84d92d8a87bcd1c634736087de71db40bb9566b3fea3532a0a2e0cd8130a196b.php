<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9bd17346f1151846329ee9bedb764f130a7eb79eb82f02ad955b2424b15b926c extends Twig_Template
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
        $__internal_9d0346e1dfb04d43151b751a907d206a8de6062cd31b80ad69fb9faf7b26ea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0346e1dfb04d43151b751a907d206a8de6062cd31b80ad69fb9faf7b26ea59->enter($__internal_9d0346e1dfb04d43151b751a907d206a8de6062cd31b80ad69fb9faf7b26ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_17e751d8b26e42bc47b69e209e21bf66d240fb5811376451f687e9d7c7d3081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e751d8b26e42bc47b69e209e21bf66d240fb5811376451f687e9d7c7d3081e->enter($__internal_17e751d8b26e42bc47b69e209e21bf66d240fb5811376451f687e9d7c7d3081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9d0346e1dfb04d43151b751a907d206a8de6062cd31b80ad69fb9faf7b26ea59->leave($__internal_9d0346e1dfb04d43151b751a907d206a8de6062cd31b80ad69fb9faf7b26ea59_prof);

        
        $__internal_17e751d8b26e42bc47b69e209e21bf66d240fb5811376451f687e9d7c7d3081e->leave($__internal_17e751d8b26e42bc47b69e209e21bf66d240fb5811376451f687e9d7c7d3081e_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
