<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9c10f6c23fadcd05dc81cb9a6167fe0506ed20ba4a39d2b95ee11e8337aa8d2c extends Twig_Template
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
        $__internal_285a081d1773aa5e4be9704f87e6ba5b9dfbae9551e9b23a6fc4f6d9d4e7445c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285a081d1773aa5e4be9704f87e6ba5b9dfbae9551e9b23a6fc4f6d9d4e7445c->enter($__internal_285a081d1773aa5e4be9704f87e6ba5b9dfbae9551e9b23a6fc4f6d9d4e7445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0e354df2477d43905af8db2f47e588ac581c86131431d9b39c052116e3245463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e354df2477d43905af8db2f47e588ac581c86131431d9b39c052116e3245463->enter($__internal_0e354df2477d43905af8db2f47e588ac581c86131431d9b39c052116e3245463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_285a081d1773aa5e4be9704f87e6ba5b9dfbae9551e9b23a6fc4f6d9d4e7445c->leave($__internal_285a081d1773aa5e4be9704f87e6ba5b9dfbae9551e9b23a6fc4f6d9d4e7445c_prof);

        
        $__internal_0e354df2477d43905af8db2f47e588ac581c86131431d9b39c052116e3245463->leave($__internal_0e354df2477d43905af8db2f47e588ac581c86131431d9b39c052116e3245463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
