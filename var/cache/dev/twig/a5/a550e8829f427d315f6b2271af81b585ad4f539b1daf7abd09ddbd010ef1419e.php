<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7da94c75a485bd5d8225de6e30d7d8888732ffc8123f20fbe3f06471ca4eb03e extends Twig_Template
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
        $__internal_1c29f67231c732d11dd24394f0ac004214363bceeaf2a1c640443d5a530e2505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c29f67231c732d11dd24394f0ac004214363bceeaf2a1c640443d5a530e2505->enter($__internal_1c29f67231c732d11dd24394f0ac004214363bceeaf2a1c640443d5a530e2505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2fd28d3cb5addc6fef7b7ff02fbf849f2f13618b81c1fbbe839639eaedc0d9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd28d3cb5addc6fef7b7ff02fbf849f2f13618b81c1fbbe839639eaedc0d9d0->enter($__internal_2fd28d3cb5addc6fef7b7ff02fbf849f2f13618b81c1fbbe839639eaedc0d9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1c29f67231c732d11dd24394f0ac004214363bceeaf2a1c640443d5a530e2505->leave($__internal_1c29f67231c732d11dd24394f0ac004214363bceeaf2a1c640443d5a530e2505_prof);

        
        $__internal_2fd28d3cb5addc6fef7b7ff02fbf849f2f13618b81c1fbbe839639eaedc0d9d0->leave($__internal_2fd28d3cb5addc6fef7b7ff02fbf849f2f13618b81c1fbbe839639eaedc0d9d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Pani-final\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
