<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_b0990d126bfc135d09471930cbef90093ebd6a94f09bb40861e056df52967f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0990d126bfc135d09471930cbef90093ebd6a94f09bb40861e056df52967f2a->enter($__internal_b0990d126bfc135d09471930cbef90093ebd6a94f09bb40861e056df52967f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_da51106f4197a454b4ddd375a9d879aa3651929ed7d69b9875c7edc603ce4a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da51106f4197a454b4ddd375a9d879aa3651929ed7d69b9875c7edc603ce4a87->enter($__internal_da51106f4197a454b4ddd375a9d879aa3651929ed7d69b9875c7edc603ce4a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b0990d126bfc135d09471930cbef90093ebd6a94f09bb40861e056df52967f2a->leave($__internal_b0990d126bfc135d09471930cbef90093ebd6a94f09bb40861e056df52967f2a_prof);

        
        $__internal_da51106f4197a454b4ddd375a9d879aa3651929ed7d69b9875c7edc603ce4a87->leave($__internal_da51106f4197a454b4ddd375a9d879aa3651929ed7d69b9875c7edc603ce4a87_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
