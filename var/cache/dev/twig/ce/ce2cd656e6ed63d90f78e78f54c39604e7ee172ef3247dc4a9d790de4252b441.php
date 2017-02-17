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
        $__internal_36d91832641f04e0dca9a189c2a7a267cf77829881c1a5326870bd64bc1e842b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d91832641f04e0dca9a189c2a7a267cf77829881c1a5326870bd64bc1e842b->enter($__internal_36d91832641f04e0dca9a189c2a7a267cf77829881c1a5326870bd64bc1e842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a6fc59a0eae8f97000716745f13708ed6f7571519bce5d08fed6f41922462e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fc59a0eae8f97000716745f13708ed6f7571519bce5d08fed6f41922462e7d->enter($__internal_a6fc59a0eae8f97000716745f13708ed6f7571519bce5d08fed6f41922462e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_36d91832641f04e0dca9a189c2a7a267cf77829881c1a5326870bd64bc1e842b->leave($__internal_36d91832641f04e0dca9a189c2a7a267cf77829881c1a5326870bd64bc1e842b_prof);

        
        $__internal_a6fc59a0eae8f97000716745f13708ed6f7571519bce5d08fed6f41922462e7d->leave($__internal_a6fc59a0eae8f97000716745f13708ed6f7571519bce5d08fed6f41922462e7d_prof);

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
