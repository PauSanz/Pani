<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5b8f90c2ac6d95cbf7f26559f55f8ac683ae3e6bef4926eb61ae5049c779c3bd extends Twig_Template
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
        $__internal_994601f472a9a54079d5d77beb985e7ba48f03558b6e086d59229d3a35e94852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994601f472a9a54079d5d77beb985e7ba48f03558b6e086d59229d3a35e94852->enter($__internal_994601f472a9a54079d5d77beb985e7ba48f03558b6e086d59229d3a35e94852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dd1462f2baca5ae02abe6040735eb987f5fffd656dddbe6f1cae933c68221283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1462f2baca5ae02abe6040735eb987f5fffd656dddbe6f1cae933c68221283->enter($__internal_dd1462f2baca5ae02abe6040735eb987f5fffd656dddbe6f1cae933c68221283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_994601f472a9a54079d5d77beb985e7ba48f03558b6e086d59229d3a35e94852->leave($__internal_994601f472a9a54079d5d77beb985e7ba48f03558b6e086d59229d3a35e94852_prof);

        
        $__internal_dd1462f2baca5ae02abe6040735eb987f5fffd656dddbe6f1cae933c68221283->leave($__internal_dd1462f2baca5ae02abe6040735eb987f5fffd656dddbe6f1cae933c68221283_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
