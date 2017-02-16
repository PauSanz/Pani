<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_24079ab91f6fc05b0786c44f0732f4460ad51d3629e8245f249e9cd450444fb4 extends Twig_Template
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
        $__internal_3c2378c9b1683f9fced9acb0b2b9d84dbdb913ca2095b2c0fef65cf7a56ded40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2378c9b1683f9fced9acb0b2b9d84dbdb913ca2095b2c0fef65cf7a56ded40->enter($__internal_3c2378c9b1683f9fced9acb0b2b9d84dbdb913ca2095b2c0fef65cf7a56ded40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_09096819dc38f24fe824a7545cc3c7ea862b6a82ff3f2debf2fed62ac748f0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09096819dc38f24fe824a7545cc3c7ea862b6a82ff3f2debf2fed62ac748f0b8->enter($__internal_09096819dc38f24fe824a7545cc3c7ea862b6a82ff3f2debf2fed62ac748f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3c2378c9b1683f9fced9acb0b2b9d84dbdb913ca2095b2c0fef65cf7a56ded40->leave($__internal_3c2378c9b1683f9fced9acb0b2b9d84dbdb913ca2095b2c0fef65cf7a56ded40_prof);

        
        $__internal_09096819dc38f24fe824a7545cc3c7ea862b6a82ff3f2debf2fed62ac748f0b8->leave($__internal_09096819dc38f24fe824a7545cc3c7ea862b6a82ff3f2debf2fed62ac748f0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\clinica-pani\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
