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
        $__internal_087f611c665ba966f4d947dd1cafd6410ae742dc44e0d51f044143b189784864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087f611c665ba966f4d947dd1cafd6410ae742dc44e0d51f044143b189784864->enter($__internal_087f611c665ba966f4d947dd1cafd6410ae742dc44e0d51f044143b189784864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_82484e794ebff35af07e637ae99b9b90753d1e1d58317bbad7552173b02fd9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82484e794ebff35af07e637ae99b9b90753d1e1d58317bbad7552173b02fd9dd->enter($__internal_82484e794ebff35af07e637ae99b9b90753d1e1d58317bbad7552173b02fd9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_087f611c665ba966f4d947dd1cafd6410ae742dc44e0d51f044143b189784864->leave($__internal_087f611c665ba966f4d947dd1cafd6410ae742dc44e0d51f044143b189784864_prof);

        
        $__internal_82484e794ebff35af07e637ae99b9b90753d1e1d58317bbad7552173b02fd9dd->leave($__internal_82484e794ebff35af07e637ae99b9b90753d1e1d58317bbad7552173b02fd9dd_prof);

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
