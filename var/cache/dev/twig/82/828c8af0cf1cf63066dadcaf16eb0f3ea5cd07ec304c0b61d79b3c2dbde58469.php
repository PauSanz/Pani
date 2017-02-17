<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8db74e7388c9908fdb56448401f378844b9ff3ea808bac03bf574c8f6c49ddf extends Twig_Template
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
        $__internal_15fb6ce83c70dd35d5a45bb2b15d44573c21d1df7db426f9e368c53a4e525541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fb6ce83c70dd35d5a45bb2b15d44573c21d1df7db426f9e368c53a4e525541->enter($__internal_15fb6ce83c70dd35d5a45bb2b15d44573c21d1df7db426f9e368c53a4e525541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9c6a56d8da0733790b3965d1d3ee3c818d944f06b427740bba15670fdeb6b4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6a56d8da0733790b3965d1d3ee3c818d944f06b427740bba15670fdeb6b4c9->enter($__internal_9c6a56d8da0733790b3965d1d3ee3c818d944f06b427740bba15670fdeb6b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_15fb6ce83c70dd35d5a45bb2b15d44573c21d1df7db426f9e368c53a4e525541->leave($__internal_15fb6ce83c70dd35d5a45bb2b15d44573c21d1df7db426f9e368c53a4e525541_prof);

        
        $__internal_9c6a56d8da0733790b3965d1d3ee3c818d944f06b427740bba15670fdeb6b4c9->leave($__internal_9c6a56d8da0733790b3965d1d3ee3c818d944f06b427740bba15670fdeb6b4c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
