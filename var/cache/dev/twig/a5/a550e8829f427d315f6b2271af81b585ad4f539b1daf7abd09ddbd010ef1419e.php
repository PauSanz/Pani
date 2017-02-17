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
        $__internal_664808f5367d347b66ddc1cbfd4972e5d428b80f68178cf053b8928fc98efe06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664808f5367d347b66ddc1cbfd4972e5d428b80f68178cf053b8928fc98efe06->enter($__internal_664808f5367d347b66ddc1cbfd4972e5d428b80f68178cf053b8928fc98efe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_105252ed7c84d24e93504ff9f0bc7844c0e268f83cdb1614525d262da1aedee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105252ed7c84d24e93504ff9f0bc7844c0e268f83cdb1614525d262da1aedee6->enter($__internal_105252ed7c84d24e93504ff9f0bc7844c0e268f83cdb1614525d262da1aedee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_664808f5367d347b66ddc1cbfd4972e5d428b80f68178cf053b8928fc98efe06->leave($__internal_664808f5367d347b66ddc1cbfd4972e5d428b80f68178cf053b8928fc98efe06_prof);

        
        $__internal_105252ed7c84d24e93504ff9f0bc7844c0e268f83cdb1614525d262da1aedee6->leave($__internal_105252ed7c84d24e93504ff9f0bc7844c0e268f83cdb1614525d262da1aedee6_prof);

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
